@extends('layouts.admin')

@section('content')
    <section style="margin-top: 50px;">
        <div class="section__content section__content--p30">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-xl-1"></div>
                    <div class="col-xl-10">

                        <div class="recent-report2">
                            <h3 class="title-3">Password Change</h3>

                            <hr>
                            <form action="{{ route('admin.password.change') }}" method="post">
                                @csrf
                                @method('PUT')

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
                                    <i class="fa fa-dot-circle-o"></i> Submit
                                </button>
                            </form>
                        </div>
                        <!-- END RECENT REPORT 2 -->
                    </div>
                    <div class="col-xl-1"></div>
                </div>
            </div>
        </div>
    </section>
@endsection