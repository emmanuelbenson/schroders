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
                                            section a update
                                            <form action="{{ route('section.a.update', [$member->id, $policy->id]) }}" method="post">
                                                <div class="modal-body">
                                                    @csrf
                                                    @method('PUT')
                                                    <input type="hidden" name="section" value="a">
                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label class="control-label mb-1">Holder:</label>
                                                                <input name="holder"
                                                                       type="text"
                                                                       class="form-control input-sm form-control-sm"
                                                                       value="{{ $policy->holder }}"
                                                                >
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label class="control-label mb-1">Number:</label>
                                                                <input name="number" type="text"
                                                                       class="form-control input-sm form-control-sm"
                                                                       value="{{ $policy->number }}"
                                                                >
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label class="control-label mb-1">Type</label>
                                                                <input name="type"
                                                                       type="text" class="form-control input-sm form-control-sm"
                                                                       value="{{ $policy->type }}"
                                                                >
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label class="control-label mb-1">Designation:</label>
                                                                <input name="designation"
                                                                       type="text"
                                                                       class="form-control input-sm form-control-sm"
                                                                       value="{{ $policy->designation }}"
                                                                >
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
                                                                       value="{{ $policy->commencement_date->format('Y-m-d') }}">
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label for="" class="control-label mb-1">Expiry Date</label>
                                                                <input name="expiryDate" type="date"
                                                                       class="form-control input-sm form-control-sm"
                                                                       value="{{ $policy->expiry_date->format('Y-m-d') }}"
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
                                                                       value="{{ $policy->amount_coverage }}"
                                                                       autocomplete="off">
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label class="control-label mb-1">Coverage Type:</label>
                                                                <input name="coverageType"
                                                                       type="text" class="form-control input-sm form-control-sm"
                                                                       value="{{ $policy->coverage_type }}"
                                                                       autocomplete="off">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label class="control-label mb-1">Premium:</label>
                                                                <input name="premium" type="text"
                                                                       class="form-control input-sm form-control-sm"
                                                                       value="{{ $policy->premium }}"
                                                                       autocomplete="off">
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label class="control-label mb-1">Frequency:</label>
                                                                <input name="frequency" type="text" class="form-control input-sm form-control-sm"
                                                                       value="{{ $policy->frequency }}"
                                                                       autocomplete="off">
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