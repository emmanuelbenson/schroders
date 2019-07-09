@extends('layouts.admin')

@section('content')
    <section style="margin-top: 50px;">
        <div class="section__content section__content--p30">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-xl-1"></div>
                    <div class="col-xl-10">

                        <div class="recent-report2">
                            <h3 class="title-3">Updating {{ \Auth()->user()->profile->first_name }} {{ \Auth()->user()->profile->last_name }}</h3>

                            <hr>
                            <form action="{{ route('admin.profile.update', \Auth()->user()->id) }}" method="post" enctype="multipart/form-data">
                                @csrf
                                @method('PUT')
                                <div class="form-group @error('firstName') is-invalid @enderror">
                                    <label class=" form-control-label">First Name</label>
                                    <input type="text" name="firstName" value="{{ \Auth()->user()->profile->first_name }}" class="form-control @error('firstName') is-invalid @enderror">
                                    @error('firstName')<span class="help-block text-danger">{{ $message }}</span>@enderror
                                </div>
                                <div class="form-group @error('lastName') is-invalid @enderror">
                                    <label class=" form-control-label">Last Name</label>
                                    <input type="text" name="lastName" value="{{ \Auth()->user()->profile->last_name }}" class="form-control @error('lastName') is-invalid @enderror">
                                    @error('lastName')<span class="help-block text-danger">{{ $message }}</span>@enderror
                                </div>
                                <div class="form-group @error('avatar') is-invalid @enderror">

                                    <label for="avatar" class=" form-control-label">Change Passport</label>
                                    <input type="file" name="avatar" value="" class="form-control @error('avatar') is-invalid @enderror">
                                    <small class="text-muted"><strong>Only jpeg,png,jpg are accepted. Max Size is 2MB.</strong></small><br>
                                    @error('avatar')<span class="help-block text-danger">{{ $message }}</span>@enderror
                                </div>
                                <div class="form-group @error('email') is-invalid @enderror">
                                    <label for="email" class=" form-control-label">Email</label>
                                    <input type="email" name="email" value="{{ \Auth()->user()->email }}" disabled class="form-control @error('email') is-invalid @enderror">
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
            </div>
        </div>
    </section>
@endsection