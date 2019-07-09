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
                                            section b update
                                            <form action="{{ route('section.b.update', [$member->id, $policy->id]) }}" method="post">
                                                <div class="modal-body">
                                                    @csrf
                                                    @method('PUT')
                                                    <input type="hidden" name="section" value="b">
                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label class="control-label mb-1">Nominee Ref:</label>
                                                                <input name="nomineeRef" type="text"
                                                                       class="form-control input-sm form-control-sm"
                                                                       value="{{ $policy->nominee_ref }}"
                                                                >
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label class="control-label mb-1">Nominee:</label>
                                                                <input name="nominee" type="text"
                                                                       class="form-control input-sm form-control-sm"
                                                                       value="{{ $policy->nominee }}"
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
                                                                       class="form-control input-sm form-control-sm"
                                                                       value="{{ $policy->relationship }}"
                                                                       autocomplete="off">
                                                                <span class="help-block"></span>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label for="" class="control-label mb-1">Email Address</label>
                                                                <input name="email" type="email"
                                                                       class="form-control input-sm form-control-sm"
                                                                       value="{{ $policy->email }}">
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