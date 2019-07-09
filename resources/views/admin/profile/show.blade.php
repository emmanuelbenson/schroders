@extends('layouts.admin')

@section('content')
    <section style="margin-top: 50px;">
        <div class="section__content section__content--p30">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-xl-1"></div>
                    <div class="col-xl-10">

                        <div class="recent-report2">
                            <h3 class="title-3">
                                Profile Information
                                <small>
                                    <a class="btn btn-outline-success btn-sm pull-right" href="{{ route('admin.profile.edit') }}">
                                        <i class="fa fa-edit"></i>
                                        Edit
                                    </a>
                                </small>
                            </h3>

                            <hr>
                            <div>
                                @if(auth()->user()->profile->avatar)
                                    <img class="rounded-square d-block" src="{{ asset('uploads/avatar/'.auth()->user()->profile->avatar->avatar) }}" width="200" alt="Profile Image">
                                @else
                                    <div class="card">
                                        <div class="card-body">
                                            <div class="mx-auto d-block">
                                                <img class="rounded-circle mx-auto d-block" src="{{ asset('https://via.placeholder.com/150

C/O https://placeholder.com/') }}" alt="Card image cap">
                                            </div>
                                        </div>
                                    </div>
                                @endif

                            </div>
                            <hr>
                            <h5>First Name</h5>
                            <p>{{ \Auth::user()->profile->first_name }}</p>
                            <br>
                            <h5>Last Name</h5>
                            <p>{{ \Auth::user()->profile->last_name }}</p>
                            <br>
                            <h5>Email</h5>
                            <p>{{ \Auth::user()->email }}</p>
                        </div>
                        <!-- END RECENT REPORT 2             -->
                    </div>
                    <div class="col-xl-1"></div>
                </div>
                <div class="row">
                    <div class="col-xl-1"></div>
                    <div class="col-xl-10">
                        <div class="recent-report2">
                            <a href="{{ route('admin.password.change') }}" class="btn btn-primary btn-sm btn-block">
                                <i class="fa fa-edit"></i>
                                Change password
                            </a>
                        </div>
                    </div>
                    <div class="col-xl-1"></div>
                </div>
            </div>
        </div>
    </section>
@endsection