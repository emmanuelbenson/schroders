@extends('layouts.app')

@section('contents')
    <section class="blog-page">
        <div class="container">
            <div class="row">
                <div class="col-md-3"></div>
                <div class="col-sm-6">
                    <div class="get-quote-form" style="margin-top: 40px;">
                        <h2>
                            <i class="glyphicon glyphicon-lock"></i>
                            Login
                        </h2>
                        @if($errors->any())
                            <div class="alert alert-danger" role="alert">
                                <strong>Oh snap!</strong>
                                @foreach($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </div>
                        @endif
                        <form id="get-quote" action="{{ url('login') }}" method="post">
                            @csrf
                            <div>
                                <input type="text" name="email" placeholder="Email">
                            </div>
                            <div>
                                <input type="password" name="password" placeholder="Password">
                            </div>
                            <div class="text-center">
                                <input type="submit" class="btn-default btn-block" value="Login">
                                <p style="margin-top: 10px;">

                                </p>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-md-3"></div>
            </div>
        </div>
    </section>
@endsection
