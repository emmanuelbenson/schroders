@extends('layouts.app')

@section('contents')
    <section class="blog-page">
        <div class="container text-justify">
            <div class="row">
                <div class="col-sm-7">
                    <div class="single-post">
                        <h2 class="blog-title">Travel Insurrance</h2>
                        <h4>Specialist travel insurance</h4>
                        <p>
                            Trips abroad can be the experience of a lifetime and one of our biggest expenditures of
                            the year. We understand this and provide specialist travel cover for when things don’t
                            go to plan.
                        </p>
                        <br>
                        <ul style="line-height: 2em;">
                            <li>
                                <i class="glyphicon glyphicon-ok-sign blue-text"></i>
                                <strong>Generous limits</strong> for key risks such as medical expenses (up to £10m), cancellation and
                                curtailment (up to £10,000) and personal liability (up to £2m)
                            </li>
                            <li>
                                <i class="glyphicon glyphicon-ok-sign blue-text"></i>
                                <strong>Emergency evacuation</strong> costs (up to £10,000) following unforeseen natural
                                catastrophes (e.g. hurricane or flood) or political unrest
                            </li>
                            <li>
                                <i class="glyphicon glyphicon-ok-sign blue-text"></i>
                                <strong>Disruption of your trip</strong> as a consequence of strike action, bad weather and even
                                volcanic ash clouds
                            </li>
                            <li>
                                <i class="glyphicon glyphicon-ok-sign blue-text"></i>
                                Losses of up to £5,000 following the insolvency of an independent (i.e. not a package
                                or inclusive holiday) travel or accommodation provider
                            </li>
                        </ul>
                        <p>
                            Visit our <a href="{{ route('contact') }}"> contact details</a> for further information
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection