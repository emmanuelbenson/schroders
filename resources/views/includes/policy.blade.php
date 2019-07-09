<section style="margin-top: 50px;">
    <div class="section__content section__content--p30">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <h3 class="text-center">POLICY DETAILS</h3>
                    <br>
                </div>
            </div>

            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-12">
                                    <h5 class="text-uppercase">
                                        section a
                                    </h5>
                                    <hr>
                                </div>
                            </div>
                            @if($sectionA)
                                <div class="row">
                                    <div class="col-md-6">
                                        <h5>Holder</h5>
                                        <p class="card-text">{{ $sectionA->holder }}</p>
                                        <br>

                                        <h5>Number</h5>
                                        <p class="card-text">{{ $sectionA->number }}</p>
                                        <br>

                                        <h5>Type</h5>
                                        <p class="card-text">{{ $sectionA->type }}</p>
                                        <br>

                                        <h5>Designation</h5>
                                        <p class="card-text">{{ $sectionA->designation }}</p>
                                        <br>

                                        <h5>Commencement Date</h5>
                                        <p class="card-text">{{ $sectionA->commencement_date->isoFormat('M/D/YYYY') }}</p>
                                    </div>
                                    <div class="col-md-6">
                                        <h5>Expiry Date</h5>
                                        <p class="card-text">{{ $sectionA->expiry_date->isoFormat('M/D/YYYY') }}</p>
                                        <br>

                                        <h5>Amount Coverage</h5>
                                        <p class="card-text">{{ $sectionA->amount_coverage }}</p>
                                        <br>

                                        <h5>Coverage Type</h5>
                                        <p class="card-text">{{ $sectionA->premium }}</p>
                                        <br>

                                        <h5>Frequency</h5>
                                        <p class="card-text">{{ $sectionA->frequency }}</p>
                                    </div>
                                </div>
                            @else
                                <p class="text-muted text-center">Member's section A have not been added</p>
                            @endif
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-12">
                                    <h5 class="text-uppercase">
                                        section b
                                    </h5>
                                    <hr>
                                </div>
                            </div>
                            @if($sectionB)
                                <div class="row">
                                    <div class="col-md-6">
                                        <h5>Nominee Ref.</h5>
                                        <p class="card-text">
                                            {{ $sectionB->nominee_ref }}
                                        </p>
                                        <br>
                                        <h5>Nominee</h5>
                                        <p class="card-text">
                                            {{ $sectionB->nominee }}
                                        </p>
                                        <br>

                                        <h5>Relationship</h5>
                                        <p class="card-text">
                                            {{ $sectionB->relationship }}
                                        </p>
                                    </div>
                                    <div class="col-md-6">
                                        <h5>Contact Address</h5>
                                        <p class="card-text">
                                            {{ $sectionB->contact_address }}
                                        </p>
                                        <br>

                                        <h5>Email</h5>
                                        <p class="card-text">
                                            {{ $sectionB->email }}
                                        </p>
                                    </div>
                                </div>
                            @else
                                <p class="text-muted text-center">Member's section B have not been added.</p>
                            @endif
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-12">
                                    <h5 class="text-uppercase">
                                        section c
                                    </h5>
                                    <hr>
                                </div>
                            </div>
                            @if($sectionC)
                                <div class="row">
                                    <div class="col-md-6">
                                        <h5>Agent</h5>
                                        <p class="card-text">
                                            {{ $sectionC->agent }}
                                        </p>
                                        <br>
                                        <h5>Phone</h5>
                                        <p class="card-text">
                                            {{ $sectionC->phone }}
                                        </p>
                                    </div>
                                    <div class="col-md-6">
                                        <h5>Contact Address</h5>
                                        <p class="card-text">
                                            {{ $sectionC->contact_address }}
                                        </p>
                                        <br>

                                        <h5>Email</h5>
                                        <p class="card-text">
                                            {{ $sectionC->email }}
                                        </p>
                                    </div>
                                </div>
                            @else
                                <p class="text-muted text-center">Member's section C have not been added</p>
                            @endif
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-12">
                                    <h5 class="text-uppercase">
                                        holder's details
                                    </h5>
                                    <hr>
                                </div>
                            </div>
                            @if($details)
                                <div class="row">
                                    <div class="col-md-6">
                                        <h5>Date of Birth</h5>
                                        <p class="card-text">
                                            {{ $details->date_of_birth->isoFormat('M/D/YYYY') }}
                                        </p>
                                        <br>
                                        <h5>Gender</h5>
                                        <p class="card-text">
                                            @if($details->gender == 'm')
                                                Male
                                            @else
                                                Female
                                            @endif
                                        </p>
                                        <br>

                                        <h5>Nationality</h5>
                                        <p class="card-text">
                                            {{ $details->nationality }}
                                        </p>
                                        <br>

                                        <h5>Contact Address</h5>
                                        <p class="card-text">
                                            {{ $details->contact_address }}
                                        </p>
                                        <br>
                                    </div>
                                    <div class="col-md-6">
                                        <h5>Email</h5>
                                        <p class="card-text">
                                            {{ $details->email }}
                                        </p>
                                        <br>
                                        <h5>Phone</h5>
                                        <p class="card-text">
                                            {{ $details->phone }}
                                        </p>
                                        <br>

                                        <h5>Occupation</h5>
                                        <p class="card-text">
                                            {{ $details->occupation }}
                                        </p>
                                        <br>

                                        <h5>Health Status</h5>
                                        <p class="card-text">
                                            {{ $details->health_status }}
                                        </p>
                                        <br>
                                    </div>
                                </div>
                            @else
                                <p class="text-center text-muted">Holder's details have for this member have not been added</p>
                            @endif
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-12">
                                    <h5 class="text-uppercase">
                                        office use only
                                    </h5>
                                    <hr>
                                </div>
                            </div>
                            @if($policy->trustee)
                                <div class="row">
                                    <div class="col-md-6">
                                        <h5>Date of Death</h5>
                                        <p class="card-text">
                                            {{ $policy->date_of_death->isoFormat('M/D/YYYY') }}
                                        </p>
                                        <br>
                                        <h5>Cause of Death</h5>
                                        <p class="card-text">
                                            {{ $policy->cause_of_death }}
                                        </p>
                                        <br>

                                        <h5>Benefit</h5>
                                        <p class="card-text">
                                            {{ $policy->benefit }}
                                        </p>
                                        <br>

                                        <h5>Beneficiary</h5>
                                        <p class="card-text">
                                            {{ $policy->beneficiary }}
                                        </p>
                                        <br>
                                    </div>
                                    <div class="col-md-6">
                                        <h5>Trustee</h5>
                                        <p class="card-text">
                                            {{ $policy->trustee }}
                                        </p>
                                        <br>
                                        <h5>Date of Claim</h5>
                                        <p class="card-text">
                                            {{ $policy->date_of_claim->isoFormat('M/D/YYYY') }}
                                        </p>
                                        <br>

                                        <h5>Date of Payment</h5>
                                        <p class="card-text">
                                            {{ $policy->date_of_payment->isoFormat('M/D/YYYY') }}
                                        </p>

                                    </div>
                                </div>
                            @else
                                <p class="text-center text-muted">
                                    Policy details for this member have not been completed
                                </p>
                            @endif
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>