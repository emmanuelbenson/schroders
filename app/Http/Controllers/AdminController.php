<?php

namespace App\Http\Controllers;

use App\Avatar;
use App\Policy;
use App\PolicyA;
use App\PolicyHolderDetail;
use App\Profile;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Utilities\ImageWriterInterface;
use App\PolicyB;
use App\PolicyC;

class AdminController extends Controller
{
    protected $imageWriter;

    public function __construct(ImageWriterInterface $imageWriterInterface)
    {
        $this->imageWriter = $imageWriterInterface;
        $this->middleware('auth');
    }

    public function showProfile()
    {
        return view('admin.profile.show');
    }

    public function editProfile()
    {
        return view('admin.profile.edit');
    }

    public function updateProfile(Request $request)
    {
        $user = auth()->user();
        $profile = $user->profile;

        $request->validate([
            'firstName' => 'required',
            'lastName' => 'required'
        ]);

        if($request->hasFile('avatar')){
            $request->validate([
                'avatar'    => 'required|mimes:jpeg,png,jpg|max:2048',
            ]);

            // Remove old file if exist
            if($profile->avatar){
                $this->imageWriter->delete($profile->avatar->avatar);
            }

            // Upload
            $uploadedAvatar = $this->imageWriter->write($request->file('avatar'));
            $profile->avatar->avatar = $uploadedAvatar;
            $profile->avatar->save();

            \Session::flash('message', 'Profile successfully updated');

            return redirect()
                ->route('admin.profile');

        }

        $profile->first_name = $request->get('firstName');
        $profile->last_name = $request->get('lastName');
        $profile->save();

        return redirect()
            ->route('admin.profile');
    }

    public function changePassword()
    {
        return view('admin.profile.change-password');
    }

    public function postChangePassword(Request $request)
    {
        $request->validate([
            'password'  => 'required|string|min:6|confirmed|regex:/^(?=.*?[A-Z])(?=.*?[a-z])(?=.*?[0-9])(?=.*?[#?!@$%^&*-]).{6,}$/',
        ]);

        $user = \Auth::user();
        $user->password = Hash::make($request->get('password'));
        $user->save();

        \Session::flash('message', 'Password successfully updated');

        return redirect()
            ->route('admin.profile');
    }

    public function members()
    {
        $members = User::where('id', '!=', auth()->user()->id)
            ->simplePaginate(5);

        return view('admin.members', compact('members'));
    }

    public function getAddMember()
    {
        return view('admin.add-member');
    }

    public function postAddMember(Request $request)
    {
        $request->validate([
            'email'     => 'required|email|unique:users',
            'firstName' => 'required',
            'lastName'  => 'required',
            'password'  => 'required|string|min:6|confirmed|regex:/^(?=.*?[A-Z])(?=.*?[a-z])(?=.*?[0-9])(?=.*?[#?!@$%^&*-]).{6,}$/',
            'avatar'    => 'required|mimes:jpeg,png,jpg|max:2048',
        ]);

        // Upload
        $uploadedAvatar = $this->imageWriter->write( $request->file('avatar') );

        $user = User::create([
            'email' => $request->get('email'),
            'password' => Hash::make($request->get('password'))
        ]);

        $profile = Profile::create([
            'user_id' => $user->id,
            'first_name' => $request->get('firstName'),
            'last_name' => $request->get('lastName'),
        ]);

        Avatar::create([
           'profile_id' => $profile->id,
            'avatar'    => $uploadedAvatar
        ]);

        Policy::create([
            'user_id' => $user->id
        ]);

        $user->assignRole('member');

        return redirect()
            ->route('admin.addmember')
            ->with('message', 'Member added successfully');
    }

    public function editMember(User $member)
    {
        return view('admin.edit-member', compact('member'));
    }

    public function updateMember(Request $request, User $member)
    {
        $uploadedAvatar = $member->profile->avatar->avatar;

        if($request->hasFile('avatar')){
            $request->validate([
                'avatar'    => 'required|mimes:jpeg,png,jpg|max:2048',
            ]);

            // Remove old file
            $this->imageWriter->delete($member->profile->avatar->avatar);

            // Upload
            $uploadedAvatar = $this->imageWriter->write($request->file('avatar'));

            $member->profile->avatar->avatar = $uploadedAvatar;
            $member->profile->avatar->save();
        }

        $request->validate([
            'email' => 'required|email',
            'firstName' => 'required',
            'lastName' => 'required'
        ]);
        $member->email = $request->get('email');
        $member->save();

        $member->profile->first_name = $request->get('firstName');
        $member->profile->last_name = $request->get('lastName');
        $member->profile->save();

        \Session::flash('message', 'Profile update was successful');

        return redirect()
            ->route('admin.member.edit', $member->id);
    }

    public function changeMemberPassword(Request $request, User $member)
    {
        // Validate the new passsword
        $request->validate([
            'password'  => 'required|string|min:6|confirmed|regex:/^(?=.*?[A-Z])(?=.*?[a-z])(?=.*?[0-9])(?=.*?[#?!@$%^&*-]).{6,}$/',
        ]);

        // Change the password
        $member->password = Hash::make($request->get('password'));
        $member->save();

        return redirect()
            ->route('admin.member.edit', $member->id)
            ->with('message', 'Password change was successful');
    }

    public function getChangeMemberPassword()
    {
        return view('admin.change-member-password');
    }

    public function postChangeMemberPassword(Request $request)
    {
        // TODO
    }

    // POLICY FUNCTIONS
    public function getAddPolicy(User $member)
    {
        if(auth()->user()->id == $member->id){
            return redirect()
                ->route('members');
        }
        $sectionA = null;
        $sectionB = null;
        $sectionC = null;
        $details = null;
        $policy = null;

        if($member->policy){
            $sectionA = $member->policy->sectionA;
            $sectionB = $member->policy->sectionB;
            $sectionC = $member->policy->sectionC;
            $details = $member->policy->holderDetails;
            $policy = $member->policy;
        }

        return view('admin.add-policy', compact(['member','sectionA','sectionB','sectionC','details','policy']));
    }

    public function postAddPolicy(Request $request, User $member)
    {
        $section = $request->get('section');

        switch($section){
            case 'a':
                if($this->saveSectionA($request, $member)){
                    return redirect()
                        ->route('policy.add', $member->id);
                }
            case 'b':
                if($this->saveSectionB($request, $member)){
                    return redirect()
                        ->route('policy.add', $member->id);
                }
            case 'c':
                if($this->saveSectionC($request, $member)){
                    return redirect()
                        ->route('policy.add', $member->id);
                }
            case 'holderDetail':
                if($this->saveHoldersDetail($request, $member)){
                    return redirect()
                        ->route('policy.add', $member->id);
                }
            default;
        }
    }

    protected function saveSectionA($array, $member)
    {
        $policy = new PolicyA();
        $policy->policy_id = $member->policy->id;
        $policy->holder = $array['holder'];
        $policy->number = $array['number'];
        $policy->type = $array['type'];
        $policy->designation = $array['designation'];
        $policy->commencement_date = $array['commencementDate'];
        $policy->expiry_date = $array['expiryDate'];
        $policy->amount_coverage = $array['amountCoverage'];
        $policy->coverage_type = $array['coverageType'];
        $policy->premium = $array['premium'];
        $policy->frequency = $array['frequency'];
        $policy->save();
        return true;
    }

    protected function saveSectionB($array, $member)
    {
        $policy = new PolicyB();
        $policy->policy_id = $member->policy->id;
        $policy->nominee_ref = $array->get('nomineeRef');
        $policy->nominee = $array->get('nominee');
        $policy->relationship = $array->get('relationship');
        $policy->contact_address = $array->get('contactAddress');
        $policy->email = $array->get('email');
        $policy->save();
        return true;
    }

    protected function saveSectionC($array, $member)
    {
        $policy = new PolicyC();
        $policy->policy_id = $member->policy->id;
        $policy->agent = $array->get('agent');
        $policy->phone = $array->get('phone');
        $policy->contact_address = $array->get('contactAddress');
        $policy->email = $array->get('email');
        $policy->save();
        return true;
    }

    protected function saveHoldersDetail($array, $member)
    {
        $policy = new PolicyHolderDetail();
        $policy->policy_id = $member->policy->id;
        $policy->date_of_birth = $array->get('dateOfBirth');
        $policy->gender = $array->get('gender');
        $policy->nationality = $array->get('nationality');
        $policy->contact_address = $array->get('contactAddress');
        $policy->email = $array->get('email');
        $policy->phone = $array->get('phone');
        $policy->occupation = $array->get('occupation');
        $policy->health_status = $array->get('healthStatus');
        $policy->save();
        return true;
    }

    public function updatePolicy(Request $request, User $member, Policy $policy)
    {
        $policy->date_of_death = $request->get('dateOfDeath');
        $policy->cause_of_death = $request->get('causeOfDeath');
        $policy->benefit = $request->get('benefit');
        $policy->beneficiary = $request->get('beneficiary');
        $policy->trustee = $request->get('trustee');
        $policy->date_of_claim = $request->get('dateOfClaim');
        $policy->date_of_payment = $request->get('dateOfPayment');
        $policy->save();

        return redirect()
            ->route('policy.add', $member->id);
    }

    public function editSectionA(User $member, PolicyA $policy)
    {
        return view('admin._partials._forms.section-a', compact(['member','policy']));
    }

    public function editSectionB(User $member, PolicyB $policy)
    {
        return view('admin._partials._forms.section-b', compact('member','policy'));
    }

    public function editSectionC(User $member, PolicyC $policy)
    {
        return view('admin._partials._forms.section-c', compact(['member','policy']));
    }

    public function editHolderDetails(User $member, PolicyHolderDetail $policy)
    {
        return view('admin._partials._forms.holder-details', compact(['member','policy']));
    }

    public function updateSectionA(Request $request, User $member, PolicyA $policy)
    {
        $policy->holder = $request->get('holder');
        $policy->number = $request->get('number');
        $policy->type = $request->get('type');
        $policy->designation = $request->get('designation');
        $policy->commencement_date = $request->get('commencementDate');
        $policy->expiry_date = $request->get('expiryDate');
        $policy->amount_coverage = $request->get('amountCoverage');
        $policy->coverage_type = $request->get('coverageType');
        $policy->premium = $request->get('premium');
        $policy->frequency = $request->get('frequency');
        $policy->save();
        return redirect()
            ->route('policy.add', $member->id);
    }

    public function updateSectionB(Request $request, User $member, PolicyB $policy)
    {
        $policy->nominee_ref = $request->get('nomineeRef');
        $policy->nominee = $request->get('nominee');
        $policy->relationship = $request->get('relationship');
        $policy->contact_address = $request->get('contactAddress');
        $policy->email = $request->get('email');
        $policy->save();
        return redirect()
            ->route('policy.add', $member->id);
    }

    public function updateSectionC(Request $request, User $member, PolicyC $policy)
    {
        $policy->agent = $request->get('agent');
        $policy->phone = $request->get('phone');
        $policy->contact_address = $request->get('contactAddress');
        $policy->email = $request->get('email');
        $policy->save();
        return redirect()
            ->route('policy.add', $member->id);
    }

    public function updatePolicyHolderDetail(Request $request, User $member, PolicyHolderDetail $policy)
    {
        $policy->date_of_birth = $request->get('dateOfBirth');
        $policy->gender = $request->get('gender');
        $policy->nationality = $request->get('nationality');
        $policy->contact_address = $request->get('contactAddress');
        $policy->email = $request->get('email');
        $policy->phone = $request->get('phone');
        $policy->occupation = $request->get('occupation');
        $policy->health_status = $request->get('healthStatus');
        $policy->save();
        return redirect()
            ->route('policy.add', $member->id);
    }
}
