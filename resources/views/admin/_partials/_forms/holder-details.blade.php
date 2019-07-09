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
                                            holder's details update
                                            <form action="{{ route('holderdetails.update', [$member->id, $policy->id]) }}" method="post">
                                                <div class="modal-body">
                                                    @csrf
                                                    @method('PUT')
                                                    <input type="hidden" name="section" value="holderDetail">
                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label class="control-label mb-1">Date of Birth:</label>
                                                                <input name="dateOfBirth"
                                                                       type="date"
                                                                       class="form-control input-sm form-control-sm"
                                                                       value="{{ $policy->date_of_birth->format('Y-m-d') }}">
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label class="control-label mb-1">Gender:</label>
                                                                <select name="gender" class="form-control input-sm form-control-sm">
                                                                    <option
                                                                            @if($policy->gender == 'm')
                                                                            selected
                                                                            @endif value="m">Male</option>
                                                                    <option

                                                                            @if($policy->gender == 'f')
                                                                            selected
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
                                                                       value="{{ $policy->nationality }}"
                                                                       autocomplete="off">
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label for="" class="control-label mb-1">Occupation</label>
                                                                <input name="occupation" type="text"
                                                                       class="form-control input-sm form-control-sm"
                                                                       value="{{ $policy->occupation }}">
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label for="" class="control-label mb-1">Email Address</label>
                                                                <input name="email" type="email"
                                                                       class="form-control input-sm form-control-sm"
                                                                       value="{{ $policy->email }}">
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label for="" class="control-label mb-1">Phone</label>
                                                                <input name="phone" type="text"
                                                                       class="form-control input-sm form-control-sm"
                                                                       value="{{ $policy->phone }}">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-md-12">
                                                            <div class="form-group">
                                                                <label for="" class="control-label mb-1">Health Status</label>
                                                                <input name="healthStatus" type="text"
                                                                       class="form-control input-sm form-control-sm"
                                                                       value="{{ $policy->health_status }}">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-md-12">
                                                            <div class="form-group">
                                                                <label class="control-label mb-1">Contact Address:</label>
                                                                <textarea name="contactAddress" class="form-control input-sm form-control-sm"
                                                                          cols="30" rows="4">{{ $policy->contact_address }}</textarea>
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
                                        </h5>
                                        <hr>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection