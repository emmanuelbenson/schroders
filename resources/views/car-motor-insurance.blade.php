@extends('layouts.app')

@section('contents')
    <section class="blog-page">
        <div class="container text-justify">
            <div class="row">
                <div class="col-sm-7">
                    <div class="single-post">
                        <h2 class="blog-title">Travel Insurrance</h2>
                        <p>
                            Motor Insurance has been designed for drivers of multiple high value cars and has a
                            number of features that you wouldn’t find with standard car insurance. We offer a motor
                            policy for luxury vehicles and a bespoke policy for classic cars.
                        </p>
                        <p>
                            Our motor insurance can be purchased through our network of independent insurance
                            brokers or via our team.
                        </p>
                        <br>
                        <h4 class="blog-title">Schroders Specialist Vehicle Insurance</h4>
                        <p>
                            When it comes to insuring vintage or classic cars and motorcycles, we partner with the
                            experts. From iconic models to future classics, schroders have been insuring specialist
                            vehicles for over 40 years and pride themselves on providing truly bespoke policies with
                            cover to meet your exact needs.
                        </p>
                        <br>
                        <p><strong>Schroders specialist vehicle insurance offers:</strong></p>
                        <ul style="line-height: 2em;">
                            <li>
                                <i class="glyphicon glyphicon-ok-sign blue-text"></i>
                                an agreed value for your car
                            </li>
                            <li>
                                <i class="glyphicon glyphicon-ok-sign blue-text"></i>
                                repairs by the garage of your choice
                            </li>
                            <li>
                                <i class="glyphicon glyphicon-ok-sign blue-text"></i>
                                convenience of insuring all of your vehicles on one policy
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