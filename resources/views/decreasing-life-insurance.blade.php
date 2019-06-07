@extends('layouts.app')

@section('contents')
    <section class="blog-page">
        <div class="container text-justify">
            <div class="row">
                <div class="col-sm-7">
                    <div class="single-post">
                        <h2 class="blog-title">Decreasing Life Insurance</h2>
                        <p>
                            Decreasing Life Insurance is designed to help protect a repayment mortgage so the amount of cover reduces roughly in line with the way a repayment mortgage decreases.
                        </p>
                        <br>
                        <h4 class="blue-text"><strong>How It Works</strong></h4>
                        <p>
                            It could pay out a cash sum if you die or are diagnosed with a terminal illness (life expectancy is less than 12 months) while covered by the policy. The amount of cover you choose will decrease throughout the length of your policy.
                        </p>
                        <p>
                            You choose the amount of cover you need and how long you need it for. You can take out Decreasing Life Insurance in joint or single names and you can pay your premiums monthly or annually.
                        </p>

                        <ul>
                            <li>
                                <p>
                                    <i class="glyphicon glyphicon-ok-sign blue-text"></i>
                                    Premiums start from only £20 a month depending on your needs and circumstances
                                </p>
                            </li>
                            <li>
                                <p>
                                    <i class="glyphicon glyphicon-ok-sign blue-text"></i>
                                    Option to add Critical Illness Cover for an additional cost
                                </p>
                            </li>
                            <li>
                                <p>Additional benefits included at no extra cost when you take out this policy</p>
                            </li>
                        </ul>
                        <br>
                        <h4 class="blue-text"><strong>Who needs Decreasing Life Insurance?</strong></h4>
                        <p>
                            It will depend on your own needs and individual circumstances and we don’t provide personal recommendations. Our Decreasing Life Insurance product is designed to meet the demands and needs of people who want to help protect a repayment mortgage. If you'd like more help our life cover calculator may be useful or speak to your financial adviser.
                        </p>
                        <br>
                        <h4 class="blue-text"><strong>What's covered?</strong></h4>
                        <ul style="line-height: 2.3em">
                            <li>
                                <i class="glyphicon glyphicon-ok-sign blue-text"></i>
                                You'll be covered if you die or are diagnosed with a terminal illness (life expectancy less than 12 months) within the length of the policy.
                            </li>
                            <li>
                                <i class="glyphicon glyphicon-ok-sign blue-text"></i>
                                You choose the amount of cover you need and how long you need it for.
                            </li>
                            <li>
                                <i class="glyphicon glyphicon-ok-sign blue-text"></i>
                                Premiums are guaranteed and will not change unless you make changes to the policy.
                            </li>
                            <li>
                                <i class="glyphicon glyphicon-ok-sign blue-text"></i>
                                Additional benefits are included at no extra cost, such as Free Life Cover and Accidental Death Benefit. Terms and conditions apply.
                            </li>
                            <li>
                                <i class="glyphicon glyphicon-ok-sign blue-text"></i>
                                You have the option to add Critical Illness Cover at an extra cost when you take out your life insurance policy.
                            </li>
                        </ul>
                        <div class="well">
                            <strong>
                                <h4 class="blue-text">
                                    What's not covered?
                                </h4>
                            </strong>

                            <ul style="line-height: 2.3em">
                                <li>
                                    <i class="glyphicon glyphicon-ok-sign blue-text"></i>
                                    You won't be covered if within the first year of the policy, you die as a result of suicide or, intentional and serious self-injury or, an event where, in our reasonable opinion, you took your own life.
                                </li>
                                <li>
                                    <i class="glyphicon glyphicon-ok-sign blue-text"></i>
                                    You won't be covered if the terminal illness does not meet our definition
                                </li>
                                <li>
                                    <i class="glyphicon glyphicon-ok-sign blue-text"></i>
                                    You won't be covered if the premiums for the policy are not up to date
                                </li>
                                <li>
                                    <i class="glyphicon glyphicon-ok-sign blue-text"></i>
                                    You won't be covered if a terminal illness claim is made after death
                                </li>
                            </ul>
                        </div>

                        <div class="quote-post1">
                            <div class="quote-text">
                                <span class="fa fa-info-circle"></span>
                                <p>Life cover is not a savings or investment product and has no cash value unless a valid claim is made.</p>
                                <p>
                                    If your life insurance is to cover your mortgage, your policy may not completely pay off your outstanding mortgage unless you ensure that your amount of cover is adjusted to match any new mortgage arrangements.
                                </p>
                                <p>
                                    You must also check that the interest rate applied to your mortgage does not become higher than the interest rate applied to your policy.
                                </p>
                            </div>
                        </div>
                        <h3>
                            <a href="{{ route('services') }}">Services</a>
                            <span class="fa fa-long-arrow-right"></span>
                            <a href="{{ route('services.mortgage') }}">Mortgage</a>
                        </h3>
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