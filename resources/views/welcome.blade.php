@extends('layouts.app')

@section('contents')
    <section class="flexslider">
        <ul class="slides">
            <li>
                <img src="{{ asset('assets/images/slider-img.jpg') }}" />
                <div class="slide-info">
                    <div class="slide-con">
                        <b>Home/House Insurance</b>
                        <h3>HOME/HOUSE INSURANCE</h3>
                        <p>
                            We have a long and proud history of home insurance expertise. We’ve been providing
                            home insurance policies...
                        </p>
                        <a href="{{ route('home.house.insurance') }}" class="ti-arrow-right"></a>
                    </div>
                </div>
            </li>
            <li>
                <img src="{{ asset('assets/images/slider-img1.jpg') }}" />
                <div class="slide-info">
                    <div class="slide-con">
                        <b>Car/Motor Insurance</b>
                        <h3>Car/Motor Insurance</h3>
                        <p>
                            Motor Insurance has been designed for drivers of multiple high value cars and has a
                            number of features that...
                        </p>
                        <a href="{{ route('car.motor.insurance') }}" class="ti-arrow-right"></a>
                    </div>
                </div>
            </li>
            <li>
                <img src="{{ asset('assets/images/slider-img2.jpg') }}" />
                <div class="slide-info">
                    <div class="slide-con">
                        <b>Travels</b>
                        <h3>Travel Insurance</h3>
                        <p>
                            Trips abroad can be the experience of a lifetime and one of our biggest expenditures of
                            the year. We understand this and provide specialist travel cover for when things don’t
                            go to plan.
                        </p>
                        <a href="{{ route('travel.insurance') }}" class="ti-arrow-right"></a>
                    </div>
                </div>
            </li>
        </ul>
    </section>

    <div class="container">
        <div class="row">
            <section class="col-sm-7 col-md-8 col-lg-8">
                <div class="intro">
                    <h2>Welcome to Schroders Life Insurance</h2>
                    <p>
                        We can trace our heritage back to 1896. Our business began in an age
                        of highwaymen but is as relevant to customers today as it was then.,
                        We help  over  10 million customers look to the future with confidence.
                    </p>
                    <p>
                        We offer a wide range of  life insurance and mortgage products to help people
                        protect what’s important to them and save for a comfortable future. We help them
                        to defy uncertainty... <a href="#">[ continue ]</a>
                    </p>
                    <ul class="row">
                        <li class="col-sm-6">
                            <i class="fa fa-life-ring"></i>
                            <h3>Life Insurance</h3>
                            <p>
                                Life Insurance can help give you peace of mind that your family’s way of life is
                                protected should the worst happen
                            </p>
                            <a href="{{ route('services.life-insurance') }}" class="btn-default">Explore</a>
                        </li>
                        <li class="col-sm-5">
                            <i class="fa fa-home"></i>
                            <h3>Mortgage</h3>
                            <p>
                                With a lifetime mortgage, a loan secured against your home, you could release
                                money without having to move
                            </p>
                            <a href="{{ route('services.mortgage') }}" class="btn-default">Explore</a>
                        </li>
                    </ul>
                </div>
            </section>
            <section class="col-sm-5 col-md-4 col-lg-4">
                <div class="get-quote-form">
                    <h2>Get a free quote form</h2>
                    <form id="get-quote">
                        <div>
                            <input type="text" name="name" placeholder="Your Name" />
                        </div>
                        <div>
                            <input type="text" name="email" placeholder="Email" />
                        </div>
                        <div>
                            <input type="text" name="ph-no" placeholder="Phone no" />
                        </div>
                        <div class="form-select">
                            <span></span>
                            <select>
                                <option>Product</option>
                            </select>
                        </div>
                        <div>
                            <textarea rows="1" cols="1" placeholder="Message"></textarea>
                        </div>
                        <div class="text-center">
                            <input type="submit" class="btn-default" value="Get Free Quote" />
                        </div>
                    </form>
                </div>
            </section>
        </div>
    </div>
    <hr>
    <section class="services">
        <h2 class="text-center">WHY CHOOSE US FOR YOUR LIFE INSURANCE NEEDS?</h2>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <p class="text-center">
                        Choosing the correct provider for your life insurance can be a tricky task with so many companies to choose from.
                        Here are some of the reasons to choose us:
                    </p>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-4 services-dtl">
                    <span class="fa fa-life-bouy"></span>
                    <h3>Direct Life Insurance Provider</h3>
                    <p>
                        In 2017 we were voted Direct Life Insurance Provider of the year at the UK Prestigious  Consumer awards.
                    </p>
                </div>
                <div class="col-sm-4 services-dtl">
                    <span class="fa fa-heart-o"></span>
                    <h3>Helping People</h3>
                    <p>
                        In 2016 we helped 8019 people and their families by paying out 98.6% of life claims. Take a look at our 2016 quick claim stats.
                    </p>
                </div>
                <div class="col-sm-4 services-dtl">
                    <span class="fa fa-certificate"></span>
                    <h3>UK Top Insurance Provider</h3>
                    <p>
                        We ranked among tops in UK Life insurance provider*.
                    </p>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-4 services-dtl">
                    <span class="ti-wallet"></span>
                    <h3>£20 per month</h3>
                    <p>
                        Our life insurance premiums start from as little as £20 per month, the equivalent to around 20p a day (your actual premium will depend on your individual needs and circumstances).
                    </p>
                </div>
                <div class="col-sm-4 services-dtl">
                    <span class="fa fa-gift"></span>
                    <h3>Extra Benefits</h3>
                    <p>
                        Our policies come with extra benefits at no additional cost to you.
                    </p>
                </div>
                <div class="col-sm-4 services-dtl">
                    <span class="fa fa-info-circle"></span>
                    <h3></h3>
                    <p>*Based on new individual life insurance sales in 2016, Term & Health Watch report 2017, Swis.</p>
                </div>
            </div>
        </div>
    </section>

    <section class="recent-news">
        <h2 class="text-center">MAKING DECISIONS ABOUT LIFE INSURANCE</h2>
        <div class="container">
            <div class="row">
                <div class="col-sm-12 col-md-12">
                    <div class="news-sec-box">
                        <p>
                            It doesn't have to be complicated
                        </p>
                        <p>
                            It's one of those items on the 'to do' list that is often avoided: making decisions about life insurance. People worry that choosing the right product is complicated and overwhelming, but it doesn't have to be if you take a step-by-step approach.
                            For a start, do you need it? The short answer is: yes, you do if you have anyone who is dependent on your financially - children, a partner or spouse who depends on your income, or a mortgage on the family home. That's because life insurance is a great way to help protect your family financially, should the worst happen.
                            Life insurance is designed to pay out a cash sum if you die during the length of the policy. That money can then be used to help pay the mortgage or help protect the family's lifestyle and everyday living expenses. It's esy to see why it's a good idea to have.
                        </p>
                        <p>
                            The second decision then becomes, what type of life insurance do you need? Our 'help me decide' life insurance decision tree (see below) poses a series of straightforward questions to help you get an idea of the options available and the type of product, or products, best suited to your current situation.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection