@extends('layouts.admin')

@section('content')
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
                                            @if(!$sectionA)
                                                <a
                                                        data-toggle="modal" data-target="#sectionAModal"
                                                        class="btn btn-outline-success btn-sm pull-right" href="#">
                                                    <i class="fa fa-plus"></i>
                                                    Add
                                                </a>
                                            @else
                                                <a class="btn btn-outline-success btn-sm pull-right" href="{{ route('section.a.edit', [$member->id, $sectionA->id]) }}">
                                                    <i class="fa fa-edit"></i>
                                                    Edit
                                                </a>
                                            @endif
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
                                            @if(!$sectionB)
                                                <a
                                                        data-toggle="modal" data-target="#sectionBModal"
                                                        class="btn btn-outline-success btn-sm pull-right" href="#">
                                                    <i class="fa fa-plus"></i>
                                                    Add
                                                </a>
                                            @else
                                                <a class="btn btn-outline-success btn-sm pull-right" href="{{ route('section.b.edit', [$member->id, $sectionB->id]) }}">
                                                    <i class="fa fa-edit"></i>
                                                    Edit
                                                </a>
                                            @endif
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
                                            @if(!$sectionC)
                                                <a
                                                        data-toggle="modal" data-target="#sectionCModal"
                                                        class="btn btn-outline-success btn-sm pull-right" href="#">
                                                    <i class="fa fa-plus"></i>
                                                    Add
                                                </a>
                                            @else
                                                <a class="btn btn-outline-success btn-sm pull-right" href="{{ route('section.c.edit', [$member->id, $sectionC->id]) }}">
                                                    <i class="fa fa-edit"></i>
                                                    Edit
                                                </a>
                                            @endif

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
                                            @if(!$details)
                                                <a
                                                        data-toggle="modal" data-target="#holderDetailModal"
                                                        class="btn btn-outline-success btn-sm pull-right" href="#">
                                                    <i class="fa fa-plus"></i>
                                                    Add
                                                </a>
                                            @else
                                                <a class="btn btn-outline-success btn-sm pull-right" href="{{ route('holderdetails.edit', [$member->id, $details->id]) }}">
                                                    <i class="fa fa-edit"></i>
                                                    Edit
                                                </a>
                                            @endif
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
                                            @if(!$policy->trustee)
                                                <a
                                                        data-toggle="modal" data-target="#policyModal"
                                                        class="btn btn-outline-success btn-sm pull-right" href="#">
                                                    <i class="fa fa-plus"></i>
                                                    Add
                                                </a>
                                            @else
                                                <a class="btn btn-outline-success btn-sm pull-right" href="{{ route('policy.update', [$member->id, $policy->id]) }}">
                                                    <i class="fa fa-edit"></i>
                                                    Edit
                                                </a>
                                            @endif
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

    <!-- MODALS -->
        <!-- Section A -->
        <div class="modal fade" id="sectionAModal" tabindex="-1" role="dialog" aria-labelledby="largeModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="largeModalLabel">Policy Section A</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <form action="{{ route('policy.add', $member->id) }}" method="post">
                        <div class="modal-body">
                            @csrf
                            <input type="hidden" name="section" value="a">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="control-label mb-1">Holder:</label>
                                        <input name="holder"
                                               type="text"
                                               class="form-control input-sm form-control-sm"
                                               value="@if($sectionA && $sectionA->holder != null) {{$sectionA->holder}} @else @endif"
                                        >
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="control-label mb-1">Number:</label>
                                        <input name="number" type="text"
                                               class="form-control input-sm form-control-sm"
                                               value="@if($sectionA && $sectionA->number != null) {{$sectionA->number}} @else @endif"
                                        >
                                        <span class="help-block"></span>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="control-label mb-1">Type</label>
                                        <input name="type"
                                               type="text" class="form-control input-sm form-control-sm"
                                               value="@if($sectionA && $sectionA->type != null) {{$sectionA->type}} @else @endif"
                                        >
                                        <span class="help-block" data-valmsg-for="cc-number" data-valmsg-replace="true"></span>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="control-label mb-1">Designation:</label>
                                        <input name="designation"
                                               type="text"
                                               class="form-control input-sm form-control-sm"
                                               value="@if($sectionA && $sectionA->designation != null) {{$sectionA->designation}} @else @endif"
                                        >
                                        <span class="help-block"></span>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="" class="control-label mb-1">Commencement Date</label>
                                        <input name="commencementDate"
                                               type="date"
                                               class="form-control input-sm form-control-sm"
                                               value="@if($sectionA && $sectionA->commencement_date != null) {{$sectionA->commencement_date->format('mm/dd/yyyy')}} @else @endif">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="" class="control-label mb-1">Expiry Date</label>
                                        <input name="expiryDate" type="date"
                                               class="form-control input-sm
                                               form-control-sm" value="@if($sectionA && $sectionA->expiry_date != null) {{$sectionA->expiry_date->format('mm/dd/yyyy')}} @else @endif"
                                        >
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="control-label mb-1">Amount Coverage:</label>
                                        <input name="amountCoverage"
                                               type="text" class="form-control input-sm form-control-sm"
                                               value="@if($sectionA && $sectionA->amount_coverage != null) {{$sectionA->amount_coverage}} @else @endif"
                                               autocomplete="off">
                                        <span class="help-block"></span>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="control-label mb-1">Coverage Type:</label>
                                        <input name="coverageType"
                                               type="text" class="form-control
                                               input-sm form-control-sm"
                                               value="@if($sectionA && $sectionA->coverage_type != null) {{$sectionA->coverage_type}} @else @endif"
                                               autocomplete="off">
                                        <span class="help-block"></span>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="control-label mb-1">Premium:</label>
                                        <input name="premium" type="text"
                                               class="form-control input-sm form-control-sm"
                                               value="@if($sectionA && $sectionA->premium != null) {{$sectionA->premium}} @else @endif"
                                               autocomplete="off">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="control-label mb-1">Frequency:</label>
                                        <input name="frequency" type="text" class="form-control
                                        input-sm form-control-sm"
                                               value="@if($sectionA && $sectionA->frequency != null) {{$sectionA->frequency}} @else @endif"
                                               autocomplete="off">
                                        <span class="help-block"></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <div class="modal-footer">
                        <button id="payment-button" type="submit" class="btn btn-primary btn-block">
                            <i class="fa fa-save fa-lg"></i>&nbsp;
                            <span id="payment-button-amount">Save</span>
                            <span id="payment-button-sending" style="display:none;">Sending…</span>
                        </button>
                    </div>
                    </form>
                </div>
            </div>
        </div>
        <!-- Section A end -->

        <!-- Section B -->
        <div class="modal fade" id="sectionBModal" tabindex="-1" role="dialog" aria-labelledby="largeModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="largeModalLabel">Policy Section B</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <form action="{{ route('policy.add', $member->id) }}" method="post">
                        <div class="modal-body">
                            @csrf
                            <input type="hidden" name="section" value="b">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="control-label mb-1">Nominee Ref:</label>
                                        <input name="nomineeRef" type="text"
                                               class="form-control input-sm
                                               form-control-sm"
                                               value="@if($sectionB && $sectionB->nominee_ref != null) {{$sectionB->nominee_ref}} @else @endif"
                                        >
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="control-label mb-1">Nominee:</label>
                                        <input name="nominee" type="text"
                                               class="form-control input-sm
                                               form-control-sm"
                                               value="@if($sectionB && $sectionB->nominee != null) {{$sectionB->nominee}} @else @endif"
                                               autocomplete="off">
                                        <span class="help-block"></span>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="control-label mb-1">Relationship:</label>
                                        <input name="relationship" type="text"
                                               class="form-control
                                               input-sm form-control-sm"
                                               value="@if($sectionB && $sectionB->relationship != null) {{$sectionB->relationship}} @else @endif"
                                               autocomplete="off">
                                        <span class="help-block"></span>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="" class="control-label mb-1">Email Address</label>
                                        <input name="email" type="email"
                                               class="form-control
                                               input-sm form-control-sm"
                                               value="@if($sectionB && $sectionB->email != null) {{$sectionB->email}} @else @endif">
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label class="control-label mb-1">Contact Address:</label>
                                        <textarea name="contactAddress"
                                                  class="form-control
                                                  input-sm form-control-sm"
                                                  cols="30" rows="4">@if($sectionB && $sectionB->contact_address != null) {{$sectionB->contact_address}} @else @endif</textarea>
                                        <span class="help-block"></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <div class="modal-footer">
                        <button id="payment-button" type="submit" class="btn btn-primary btn-block">
                            <i class="fa fa-save fa-lg"></i>&nbsp;
                            <span id="payment-button-amount">Save</span>
                            <span id="payment-button-sending" style="display:none;">Sending…</span>
                        </button>
                    </div>
                    </form>
                </div>
            </div>
        </div>
        <!-- Section B end -->

        <!-- Section C -->
        <div class="modal fade" id="sectionCModal" tabindex="-1" role="dialog" aria-labelledby="largeModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="largeModalLabel">Policy Section C</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <form action="{{ route('policy.add', $member->id) }}" method="post">
                        <div class="modal-body">
                            @csrf
                            <input type="hidden" name="section" value="c">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="control-label mb-1">Agent:</label>
                                        <input name="agent" type="text" class="form-control"
                                               value="@if($sectionC && $sectionC->agent != null) {{$sectionC->agent}} @else @endif">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="control-label mb-1">Phone:</label>
                                        <input name="phone" type="text"
                                               class="form-control"
                                               value="@if($sectionC && $sectionC->phone != null) {{$sectionC->phone}} @else @endif"
                                               autocomplete="off">
                                        <span class="help-block"></span>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="" class="control-label mb-1">Email Address</label>
                                        <input name="email"
                                               type="email"
                                               class="form-control"
                                               value="@if($sectionC && $sectionC->email != null) {{$sectionC->email}} @else @endif">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label class="control-label mb-1">Contact Address:</label>
                                        <textarea name="contactAddress"
                                                  class="form-control" cols="30" rows="4">@if($sectionC && $sectionC->contact_address != null) {{$sectionC->contact_address}} @else @endif</textarea>
                                        <span class="help-block"></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <div class="modal-footer">
                        <button id="payment-button" type="submit" class="btn btn-primary btn-block">
                            <i class="fa fa-save fa-lg"></i>&nbsp;
                            <span id="payment-button-amount">Save</span>
                            <span id="payment-button-sending" style="display:none;">Sending…</span>
                        </button>
                    </div>
                    </form>
                </div>
            </div>
        </div>
        <!-- Section C end -->

        <!-- Section Holder's Details -->
        <div class="modal fade" id="holderDetailModal" tabindex="-1" role="dialog" aria-labelledby="largeModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="largeModalLabel">Holder's Details</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <form action="{{ route('policy.add', $member->id) }}" method="post">
                        <div class="modal-body">
                            @csrf
                            <input type="hidden" name="section" value="holderDetail">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="control-label mb-1">Date of Birth:</label>
                                        <input name="dateOfBirth"
                                               type="date"
                                               class="form-control input-sm
                                               form-control-sm"
                                               value="@if($details && $details->date_of_birth != null) {{$details->date_of_birth}} @else @endif">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="control-label mb-1">Gender:</label>
                                        <select name="gender" class="form-control input-sm form-control-sm">
                                            <option @if($details && $details->gender != null)
                                                        @if($details->gender == 'm')
                                                        selected
                                                        @endif
                                                    @endif value="m">Male</option>
                                            <option
                                                    @if($details && $details->gender)
                                                        @if($details->gender == 'f')
                                                            selected
                                                        @endif
                                                    @endif
                                                    value="f">Female</option>
                                        </select>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="control-label mb-1">Nationality:</label>
                                        <input name="nationality" type="text"
                                               class="form-control input-sm form-control-sm"
                                               value="@if($details && $details->nationality != null) {{$details->nationality}} @else @endif"
                                               autocomplete="off">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="" class="control-label mb-1">Occupation</label>
                                        <input name="occupation" type="text"
                                               class="form-control input-sm
                                               form-control-sm"
                                               value="@if($details && $details->occupation != null) {{$details->occupation}} @else @endif">
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="" class="control-label mb-1">Email Address</label>
                                        <input name="email" type="email"
                                               class="form-control
                                               input-sm form-control-sm"
                                               value="@if($details && $details->email != null) {{$details->email}} @else @endif">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="" class="control-label mb-1">Phone</label>
                                        <input name="phone" type="text"
                                               class="form-control
                                               input-sm form-control-sm"
                                               value="@if($details && $details->phone != null) {{$details->phone}} @else @endif">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="" class="control-label mb-1">Health Status</label>
                                        <input name="healthStatus" type="text"
                                               class="form-control input-sm
                                               form-control-sm"
                                               value="@if($details && $details->health_status != null) {{$details->health_status}} @else @endif">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label class="control-label mb-1">Contact Address:</label>
                                        <textarea name="contactAddress" class="form-control
                                        input-sm form-control-sm"
                                                  cols="30" rows="4">@if($details && $details->contact_address != null) {{$details->contact_address}} @else @endif</textarea>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <div class="modal-footer">
                        <button id="payment-button" type="submit" class="btn btn-primary btn-block">
                            <i class="fa fa-save fa-lg"></i>&nbsp;
                            <span id="payment-button-amount">Save</span>
                            <span id="payment-button-sending" style="display:none;">Sending…</span>
                        </button>
                    </div>
                    </form>
                </div>
            </div>
        </div>

        <!-- Office Use -->
        <div class="modal fade" id="policyModal" tabindex="-1" role="dialog" aria-labelledby="largeModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="largeModalLabel">Office Use Only</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <form action="{{ route('policy.update', [$member->id, $member->policy->id]) }}" method="post">
                        <div class="modal-body">
                            @csrf
                            @method('PUT')
                            <input type="hidden" name="section" value="holderDetail">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="control-label mb-1">Date of Death:</label>
                                        <input name="dateOfDeath"
                                               type="date"
                                               class="form-control input-sm
                                               form-control-sm"
                                               value="@if($member->policy && $member->policy->date_of_death != null) {{$member->policy->date_of_death}} @else @endif">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="control-label mb-1">Cause of Death:</label>
                                        <input type="text" class="form-control input-sm form-control-sm" name="causeOfDeath"
                                               value="@if($member->policy && $member->policy->cause_of_death != null) {{$member->policy->cause_of_death}} @else @endif"
                                        >
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="control-label mb-1">Benefit:</label>
                                        <input name="benefit" type="text"
                                               class="form-control input-sm form-control-sm"
                                               value="@if($member->policy && $member->policy->benefit != null) {{$member->policy->benefit}} @else @endif"
                                               autocomplete="off">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="" class="control-label mb-1">Beneficiary</label>
                                        <input name="beneficiary" type="text"
                                               class="form-control input-sm
                                               form-control-sm"
                                               value="@if($member->policy && $member->policy->beneficiary != null) {{$member->policy->beneficiary}} @else @endif">
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="" class="control-label mb-1">Trustee</label>
                                        <input name="trustee" type="text"
                                               class="form-control
                                               input-sm form-control-sm"
                                               value="@if($member->policy && $member->policy->trustee != null) {{$member->policy->trustee}} @else @endif">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="" class="control-label mb-1">Date of Claim</label>
                                        <input name="dateOfClaim" type="date"
                                               class="form-control
                                               input-sm form-control-sm"
                                               value="@if($member->policy && $member->policy->date_of_claim != null) {{$member->policy->date_of_claim}} @else @endif">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="" class="control-label mb-1">Date of Payment</label>
                                        <input name="dateOfPayment" type="date"
                                               class="form-control input-sm
                                               form-control-sm"
                                               value="@if($member->policy && $member->policy->date_of_payment != null) {{$member->policy->date_of_payment}} @else @endif">
                                    </div>
                                </div>
                            </div>
                        </div>
                    <div class="modal-footer">
                        <button id="payment-button" type="submit" class="btn btn-primary btn-block">
                            <i class="fa fa-save fa-lg"></i>&nbsp;
                            <span id="payment-button-amount">Save</span>
                            <span id="payment-button-sending" style="display:none;">Sending…</span>
                        </button>
                    </div>
                    </form>
                </div>
            </div>
        </div>
        <!-- Section Holder's Details end -->
    <!-- MODALS END -->
@endsection