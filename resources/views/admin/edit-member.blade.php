@extends('layouts.admin')

@section('content')
    <section style="margin-top: 50px;">
        <div class="section__content section__content--p30">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-xl-1"></div>
                    <div class="col-xl-10">

                        <div class="recent-report2">
                            <h3 class="title-3">Updating {{ $member->profile->first_name }} {{ $member->profile->last_name }}</h3>

                            <hr>
                            <form action="{{ route('admin.member.update', $member->id) }}" method="post" enctype="multipart/form-data">
                                @csrf
                                @method('PUT')
                                <div class="form-group @error('firstName') is-invalid @enderror">
                                    <label class=" form-control-label">First Name</label>
                                    <input type="text" name="firstName" value="{{ $member->profile->first_name }}" class="form-control @error('firstName') is-invalid @enderror">
                                    @error('firstName')<span class="help-block text-danger">{{ $message }}</span>@enderror
                                </div>
                                <div class="form-group @error('lastName') is-invalid @enderror">
                                    <label class=" form-control-label">Last Name</label>
                                    <input type="text" name="lastName" value="{{ $member->profile->last_name }}" class="form-control @error('lastName') is-invalid @enderror">
                                    @error('lastName')<span class="help-block text-danger">{{ $message }}</span>@enderror
                                </div>
                                <div class="form-group @error('avatar') is-invalid @enderror">

                                    <div class="col-md-4">
                                        <div class="card">
                                            <div class="card-body">
                                                <div class="mx-auto d-block">
                                                    <img class="rounded-circle mx-auto d-block" src="{{ asset('uploads/avatar/'.$member->profile->avatar->avatar) }}" alt="Card image cap">
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <label for="avatar" class=" form-control-label">Change Passport</label>
                                    <input type="file" name="avatar" value="" class="form-control @error('avatar') is-invalid @enderror">
                                    <small class="text-muted"><strong>Only jpeg,png,jpg are accepted. Max Size is 2MB.</strong></small><br>
                                    @error('avatar')<span class="help-block text-danger">{{ $message }}</span>@enderror
                                </div>
                                <div class="form-group @error('email') is-invalid @enderror">
                                    <label for="email" class=" form-control-label">Email</label>
                                    <input type="email" name="email" value="{{ $member->email }}" class="form-control @error('email') is-invalid @enderror">
                                    @error('email')<span class="help-block text-danger">{{ $message }}</span>@enderror
                                </div>
                                <hr>
                                <button type="submit" class="btn btn-primary btn-sm">
                                    <i class="fa fa-dot-circle-o"></i> Submit
                                </button>
                            </form>
                        </div>
                        <!-- END RECENT REPORT 2             -->
                    </div>
                    <div class="col-xl-1"></div>
                </div>
                <div class="row">
                    <div class="col-xl-1"></div>
                    <div class="col-xl-10">
                        <div class="recent-report2">
                            <h3 class="title-3">Change member's password</h3>
                            <form action="{{ route('admin.member.password.change', $member->id) }}" method="post">
                                @csrf
                                @method('PUT')
                                <hr>
                                <div class="form-group @error('password') is-invalid @enderror">
                                    <label for="password" class=" form-control-label">Password</label>
                                    <input type="password" name="password" value="" class="form-control @error('password') is-invalid @enderror">
                                    <ul style="margin-left: 20px;">
                                        <li class="text-muted">
                                            Your password must be more than 8 characters long,
                                        </li>
                                        <li class="text-muted">
                                            should contain at-least 1 Uppercase,
                                        </li>

                                        <li class="text-muted">1 Lowercase,</li>
                                        <li class="text-muted">
                                            1 Numeric and 1 special character.
                                        </li>
                                    </ul>
                                    @error('password')
                                    <span class="help-block text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label class=" form-control-label">Password Confirmation</label>
                                    <input type="password" name="password_confirmation" class="form-control">
                                </div>
                                <button type="submit" class="btn btn-primary btn-sm">
                                    <i class="fa fa-dot-circle-o"></i> Change password
                                </button>
                            </form>
                        </div>
                    </div>
                    <div class="col-xl-1"></div>
                </div>
            </div>
        </div>
    </section>
@endsection