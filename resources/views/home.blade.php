@extends('layouts.admin')

@section('content')
    <div class="row">
        <div class="col-md-2"></div>
        <dv class="col-md-8">
            @role('admin')
                <div class="statistic__item" style="margin-top: 50px;">
                    <h2 class="number">{{ $userCounts }}</h2>
                    <span class="desc">registered members</span>
                    <div class="icon">
                        <i class="zmdi zmdi-account-o"></i>
                    </div>
                </div>
            @endrole
        </dv>
        <div class="col-md-2"></div>
    </div>
    @role('member')
    @include('includes.policy')
    @endrole
@endsection
