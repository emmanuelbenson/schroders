@extends('layouts.app')

@section('contents')
    <section class="blog-page">
        <div class="container">
            <div class="row">
                <div class="col-sm-7">
                    <div class="single-post">
                        <div class="blog-img">
                            <a href="{{ route('services.life-insurance') }}">
                                <img src="{{ asset('assets/images/slider-img2.jpg') }}" class="img-responsive">
                            </a>
                            <div class="blog-icon"><img src="{{ asset('assets/images/icon2.png') }}"></div>
                        </div>
                        <h2 class="blog-title">Life Insurance</h2>
                        <div class="blog-meta"></div>
                        <p>
                            Life Insurance is a type of insurance policy that can help minimise the financial
                            impact that your death could have on your loved ones. If you die or if you're
                            diagnosed with a terminal illness with a life expectancy of less than 12 months,
                            during the length of the policy, it could pay out a cash lump sum. Life Insurance can
                            help give you peace of mind that your family’s way of life is protected should the worst
                            happen.
                        </p>
                        <p>
                            *Based on new individual life insurance sales in 2017, Term & Health Watch report 2018, Swiss Re
                            <strong>How does Life Insurance work?</strong>
                        </p>
                        <div class="blog-btn">
                            <a href="{{ route('services.life-insurance') }}" class="btn-default">Read More</a>

                        </div>
                    </div>
                    <hr>
                    <div class="single-post">
                        <div class="blog-img">
                            <a href="{{ route('services.mortgage') }}">
                                <img src="{{ asset('assets/images/slider-img.jpg') }}" class="img-responsive">
                            </a>
                            <div class="blog-icon"><img src="{{ asset('assets/images/icon2.png') }}"></div>
                        </div>
                        <h2 class="blog-title">Mortgage</h2>
                        <div class="blog-meta"></div>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                            Architecto aspernatur ducimus eaque enim expedita facere maxime, modi molestiae
                            pariatur quas quibusdam recusandae sunt tempora velit veniam veritatis voluptas
                            voluptatum. Placeat?
                        </p>
                        <div class="blog-btn">
                            <a href="{{ route('services.mortgage') }}" class="btn-default">Read More</a>
                        </div>
                    </div>
                    <hr>
                    <div class="single-post">
                        <h2 class="blog-title">Insurance Calculator</h2>
                        <h4 class="blue-text">
                            Support to make informed decisions
                        </h4>
                        <p>See how much you could get and how our products can be used</p>
                        <div class="blog-btn">
                            <a href="{{ route('insurance.calculator') }}" class="btn-default">Insurance Calculator</a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4 col-sm-offset-1">
                    <div class="blog-post">
                        <!-- Search -->
                        <h2>Search</h2>
                        <div class="input-group search-text">
                            <input type="text" class="form-control search" placeholder="Search">
                              <span class="input-group-btn">
                                <button class="btn btn-default btn-search" type="button"><i class="fa fa-search"></i></button>
                              </span>
                        </div>
                        <!-- Categories -->
                        <h2>Categories</h2>
                        <ul class="category-post">
                            <li>
                                <a href="#">
                                    <div class="inline-text">
                                        <i class="glyphicon glyphicon-play blue-text"></i>
                                        <h4>House Insurance</h4>
                                        <div class="margin-left-auto blue-text">
                                            <span>(11)</span>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <div class="inline-text">
                                        <i class="glyphicon glyphicon-play blue-text"></i>
                                        <h4>Travel Insurance</h4>
                                        <div class="margin-left-auto blue-text">
                                            <span>(16)</span>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <div class="inline-text">
                                        <i class="glyphicon glyphicon-play blue-text"></i>
                                        <h4>Life Insurance</h4>
                                        <div class="margin-left-auto blue-text">
                                            <span>(16)</span>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <div class="inline-text">
                                        <i class="glyphicon glyphicon-play blue-text"></i>
                                        <h4>Car Insurance</h4>
                                        <div class="margin-left-auto blue-text">
                                            <span>(19)</span>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <div class="inline-text">
                                        <i class="glyphicon glyphicon-play blue-text"></i>
                                        <h4>Business Insurance</h4>
                                        <div class="margin-left-auto blue-text">
                                            <span>(22)</span>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <div class="inline-text">
                                        <i class="glyphicon glyphicon-play blue-text"></i>
                                        <h4>Marketing</h4>
                                        <div class="margin-left-auto blue-text">
                                            <span>(25)</span>
                                        </div>
                                    </div>
                                </a>
                            </li>
                        </ul>
                        <!-- Archives -->
                        <h2>Archives</h2>
                        <div class="input-group search-text">
                            <input type="text" class="form-control search" placeholder="Search archives">
                              <span class="input-group-btn">
                                <button class="btn btn-default btn-search" type="button"><i class="glyphicon glyphicon-triangle-bottom"></i></button>
                              </span>
                        </div>
                        <!-- Recent Posts -->
                        <h2>Recent Posts</h2>
                        <ul class="recent-post">
                            <li class="border-bottom">
                                <a href="#"><h5>Fusce Hendreit et Enim Ord</h5></a>
                                <h6>2 Feb, 2018</h6>
                            </li>
                            <li class="border-bottom">
                                <a href="#"><h5>Present Feugiat Metus Tempor</h5></a>
                                <h6>4 Feb, 2018</h6>
                            </li>
                            <li class="border-bottom">
                                <a href="#"><h5>Vivamus Placerat Lorem Est</h5></a>
                                <h6>5 Feb, 2018</h6>
                            </li>
                            <li class="border-bottom">
                                <a href="#"><h5>Tristique Nonc Neque Eleifend</h5></a>
                                <h6>7 Feb, 2018</h6>
                            </li>
                        </ul>
                        <!-- Tags -->
                        <h2>Tags</h2>
                        <div class="tags">
                            <a href="">Vestibul</a>
                            <a href="">Justo Temp Orci</a>
                            <a href="">Pellent</a>
                            <a href="">Nam</a>
                            <a href="">consequat elit</a>
                            <a href="">vestibulum act</a>
                            <a href="">consequat donctum</a>
                            <a href="">elit</a>
                            <a href="">molestie</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection