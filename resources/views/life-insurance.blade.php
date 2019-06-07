@extends('layouts.app')

@section('contents')
    <section class="blog-page">
        <div class="container">
            <div class="row">
                <div class="col-sm-7">
                    <div class="single-post">
                        <h2 class="blog-title">Life Insurance</h2>
                        <h4>Overview</h4>
                        <p>
                            Life Insurance is a type of insurance policy that can help minimise the financial
                            impact that your death could have on your loved ones. If you die or if you're
                            diagnosed with a terminal illness with a life expectancy of less than 12 months,
                            during the length of the policy, it could pay out a cash lump sum. Life Insurance can
                            help give you peace of mind that your family’s way of life is protected should the worst
                            happen.
                        </p>
                        <div class="blog-img">
                            <a href="{{ route('services.life-insurance') }}">
                                <img src="{{ asset('assets/images/slider-img2.jpg') }}" class="img-responsive">
                            </a>
                            <div class="blog-icon"><img src="{{ asset('assets/images/icon2.png') }}"></div>
                        </div>
                        <p>
                            *Based on new individual life insurance sales in 2017, Term & Health Watch report 2018, Swiss Re
                            <strong>How does Life Insurance work?</strong>
                        </p>
                        <p>
                            Our Life Insurance could pay out a cash sum if you die or are diagnosed with a
                            terminal illness while covered by the policy (provided your life expectancy is less
                            than 12 months). The amount of cover you choose will stay fixed unless you change your
                            policy.
                        </p>
                        <p>
                            You choose the amount of cover you need and how long you need it for.
                            You can take out life insurance under joint or single names and you can pay
                            your premiums monthly or annually. For more help, take a look at our life insurance
                            calculator or speak to your financial adviser.
                        </p>
                        <ul class="caption-list">
                            <li>
                                <i class="glyphicon glyphicon-ok-sign blue-text"></i>
                                Premiums from only £20 a month depending on your individual circumstances
                            </li>
                            <li>
                                <i class="glyphicon glyphicon-ok-sign blue-text"></i>
                                Your cash sum could help pay the mortgage or help with everyday living expenses
                            </li>
                            <li>
                                <i class="glyphicon glyphicon-ok-sign blue-text"></i>
                                Peace of mind for you knowing life insurance can help financially protect your loved ones
                            </li>
                            <li>
                                <i class="glyphicon glyphicon-ok-sign blue-text"></i>
                                Option to add Critical Illness Cover for an additional cost
                            </li>
                        </ul>
                        <br>
                        <h4><strong>Do I need Life Insurance?</strong></h4>
                        <p>
                            Whether you need Life Insurance will depend on your individual circumstances.
                            For example, Life Insurance can provide peace of mind for people with children,
                            partners, or spouses that depend on them financially, as well as people with a
                            mortgage on the family house.
                        </p>
                    </div>
                    <div class="single-post">
                        <h2 class="blog-title">Product Details</h2>
                        <strong>What's covered?</strong><br>
                        <ul style="line-height: 2em">
                            <li>
                                <i class="glyphicon glyphicon-ok-sign blue-text"></i>
                                You'll be covered if you die or if you're diagnosed with a terminal illness (with a life expectancy of less than 12 months) within the length of the policy.
                            </li>
                            <li>
                                <i class="glyphicon glyphicon-ok-sign blue-text"></i>
                                You choose how much cover you need and how long you need it for.
                            </li>
                            <li>
                                <i class="glyphicon glyphicon-ok-sign blue-text"></i>
                                The amount of cover remains the same throughout the policy term unless you alter your policy.
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
                        <br>
                        <strong>What's not covered?</strong><br>
                        <ul style="line-height: 2em">
                            <li>
                                <i class="glyphicon glyphicon-ok-sign blue-text"></i>
                                You won’t be covered if within the first year of the policy you die as result of suicide or intentional and serious self-injury, or an event where in our reasonable opinion, you took your own life.
                            </li>
                            <li>
                                <i class="glyphicon glyphicon-ok-sign blue-text"></i>
                                You won't be covered if your terminal illness does not meet our definition. See our definition of terminal illness for more information.
                            </li>
                            <li>
                                <i class="glyphicon glyphicon-ok-sign blue-text"></i>
                                You won't be covered if your payments aren’t up to date
                            </li>
                            <li>
                                <i class="glyphicon glyphicon-ok-sign blue-text"></i>
                                You won't be covered if a terminal illness claim is made after your death
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

                        <div class="quote-post1">
                            <div class="quote-text">
                                <h5>
                                    <i class="glyphicon glyphicon-info-sign"></i>
                                    NOTE
                                </h5>
                                <p><strong>Please remember that Life Insurance is not a savings or investment product and has no cash value unless a valid claim is made.</strong></p>
                                <p><strong>If you're taking out Life Insurance to cover your mortgage, your policy may not completely pay off your outstanding mortgage unless you make sure your cover amount of cover is adjusted to match any new mortgage arrangements.
                                        Please read the key document before you apply.
                                    </strong></p>
                            </div>
                        </div>
                        <h2><a href="{{ route('faqs') }}">FAQs</a></h2>
                        <br>
                        <div class="single-post">
                            <h2 class="blog-title">What type of life cover do you need?</h2>
                            <div style="text-indent: 10px;">
                                <a href="{{ route('critical.illness') }}">
                                    <h5>
                                        <i class="glyphicon glyphicon-arrow-right blue-text"></i>&nbsp;
                                        CRITICAL ILLNESS
                                    </h5>
                                </a>
                                <a href="{{ route('decreasing.life.insurance') }}">
                                    <h5>
                                        <i class="glyphicon glyphicon-arrow-right blue-text"></i>&nbsp;
                                        DECREASING LIFE INSURANCE
                                    </h5>
                                </a>
                            </div>
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