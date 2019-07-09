@extends('layouts.admin')

@section('content')
    <section style="margin-top: 50px;">
        <div class="section__content section__content--p30">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-1"></div>
                    <div class="col-lg-10">
                        <!-- TOP CAMPAIGN-->
                        <div class="top-campaign">
                            <h3 class="title-3 m-b-30">
                                Members
                                <a href="{{ route('admin.addmember') }}" class="au-btn au-btn-icon au-btn--green au-btn--small pull-right">
                                    <i class="zmdi zmdi-plus"></i>add item
                                </a>
                            </h3>
                            <hr>
                            <div class="table-responsive">
                                <table class="table table-top-campaign">
                                    <tbody>
                                    @forelse($members as $member)
                                        <tr>
                                            <td>
                                                <a href="{{ route('admin.member.edit', $member) }}">
                                                {{ $member->profile->first_name }}
                                                {{ $member->profile->last_name }}
                                                </a>
                                            </td>
                                            <td>
                                                <a href="{{ route('policy.add', $member->id) }}" class="btn btn-outline-primary btn-sm">
                                                    <i class="fa fa-eye"></i>
                                                    view policy
                                                </a>
                                            </td>
                                        </tr>
                                    @empty
                                        <tr>
                                            <td colspan="2">
                                                No members have been added.
                                            </td>
                                        </tr>
                                    @endforelse

                                    </tbody>
                                </table>
                                {!! $members->links() !!}
                            </div>
                        </div>
                        <!--  END TOP CAMPAIGN-->
                    </div>
                    <div class="col-md-1"></div>
                </div>
            </div>
        </div>
    </section>
@endsection