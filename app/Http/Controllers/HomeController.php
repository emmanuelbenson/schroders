<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $userCounts = User::where('id', '!=', auth()->user()->id)
            ->count();
        $member = auth()->user();

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

        return view('home', compact([
            'userCounts',
            'sectionA',
            'sectionB',
            'sectionC',
            'details',
            'policy'
        ]));
    }
}
