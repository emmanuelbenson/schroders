@extends('layouts.app')

@section('contents')
    <section class="blog-page">
        <div class="container">
            <div class="row">
                <div class="col-sm-7">
                    <div class="single-post">
                        <h2 class="blog-title">Critical Illness Cover</h2>
                        <p>
                            Critical Illness Cover is designed to help protect against the financial impact a critical illness could have on you and your family.
                        </p>
                        <br>
                        <h4 class="blue-text"><strong>How It Works</strong></h4>
                        <p>
                            Our Critical Illness Cover can be added to Life Insurance or Decreasing Life Insurance for an extra cost. It could pay out a cash sum if you’re diagnosed with, or undergo a medical procedure for one of the specified critical illnesses we cover during the length of your policy and you survive for 14 days from diagnosis.
                        </p>

                        <ul>
                            <li>
                                <p>
                                    <i class="glyphicon glyphicon-ok-sign blue-text"></i>
                                    The cash sum could be used to help with child care costs, household bills or to help maintain your standard of living if you have to take time off work to recover
                                </p>
                            </li>
                            <li>
                                <p>
                                    <i class="glyphicon glyphicon-ok-sign blue-text"></i>
                                    Children's Critical Illness Cover is automatically included. Terms and conditions apply
                                </p>
                            </li>
                        </ul>
                        <br>
                        <h4 class="blue-text"><strong>Who needs Critical Illness Cover?</strong></h4>
                        <p>
                            Critical illness affects many people, at any age, and can turn families’ lives upside down. So anyone may have a
                            need for Critical Illness Cover depending on their individual circumstances. For example, if you have a family,
                            a partner or spouse who depend on your income in case you need to take time off work to recover or pay towards a
                            mortgage on
                        </p>
                        <br>
                        <h4 class="blue-text"><strong>What's covered?</strong></h4>
                        <ul style="line-height: 2.3em">
                            <li>
                                <i class="glyphicon glyphicon-ok-sign blue-text"></i>
                                You'll be covered if you're diagnosed with or undergo a medical procedure for one of the critical illnesses we
                                cover and you survive for 14 days from diagnosis, before your policy ends.
                            </li>
                            <li>
                                <i class="glyphicon glyphicon-ok-sign blue-text"></i>
                                We'll pay out your amount of cover in full and after this, your policy will end.
                            </li>
                            <li>
                                <i class="glyphicon glyphicon-ok-sign blue-text"></i>
                                The list of illnesses we cover include many types of cancer, heart attack and stroke. See the full list of illnesses covered.
                            </li>
                            <li>
                                <i class="glyphicon glyphicon-ok-sign blue-text"></i>
                                Children’s Critical illness Cover is automatically included. Read more
                            </li>
                            <li>
                                <i class="glyphicon glyphicon-ok-sign blue-text"></i>
                                You may be able to increase the amount of cover without answering further medical questions.
                            </li>
                        </ul>
                        <div class="well">
                            <strong>
                                <h4 class="blue-text">
                                    Additional cover
                                </h4>
                            </strong>
                            <p>We also provide additional cover for the following:</p>
                            <ul style="line-height: 2.3em">
                                <li>
                                    <i class="glyphicon glyphicon-ok-sign blue-text"></i>
                                    <strong>
                                        Carcinoma in situ of the breast
                                    </strong>&nbsp; <i class="glyphicon glyphicon-minus"></i> &nbsp; by surgery.
                                </li>
                                <li>
                                    <i class="glyphicon glyphicon-ok-sign blue-text"></i>
                                    <strong>Low grade prostate cancer</strong>&nbsp;
                                    <i class="glyphicon glyphicon-minus"></i>&nbsp; requiring treatment.
                                </li>
                            </ul>
                            <p>
                                Claims paid under additional cover will not reduce your amount of cover or change your premiums. We'll pay out once for each 'Additional Cover'. Terms and conditions apply
                                What's not covered?
                            </p>
                        </div>
                        <ul style="line-height: 2.3em">
                            <li>
                                <i class="glyphicon glyphicon-ok-sign blue-text"></i>
                                If you die then the cover will end for a single life policy. If you have a joint policy, when the first person dies and makes a valid claim, your Critical Illness Cover policy can continue.
                            </li>
                            <li>
                                <i class="glyphicon glyphicon-ok-sign blue-text"></i>
                                If you stop paying your premiums your cover will end 30 days after the first missed premium.
                            </li>
                            <li>
                                <i class="glyphicon glyphicon-ok-sign blue-text"></i>
                                If you are diagnosed with or undergo a medical procedure for one of the critical illnesses we cover which doesn't meet our definition.
                            </li>
                            <li>
                                <i class="glyphicon glyphicon-ok-sign blue-text"></i>
                                If death occurs within 14 days of diagnosis of one of the critical illnesses we cover.
                            </li>
                            <li>
                                <i class="glyphicon glyphicon-ok-sign blue-text"></i>
                                If some elements of cover are restricted based on the information you give us, we'll tell you what we've excluded in your policy booklet under 'What you are not covered for'.
                            </li>
                        </ul>
                        <div class="quote-post1">
                            <div class="quote-text">
                                <p>Some types of cancer are not included and you need to have permanent symptoms to make a claim for some illnesses.</p>
                                <p>
                                    This is not a savings or investment product and has no cash value unless a valid claim is made.
                                    Please read the key documents below
                                </p>
                            </div>
                        </div>
                        <h3 class="blue-text">Additional Cover</h3>
                        <p>We provide additional cover for carcinoma in situ of the breast and low grade prostate cancer. This means if you meet our definitions we'll pay out 25% of your amount of cover up to a maximum of £25,000. This benefit does not affect your amount of cover or the premiums you pay.</p>
                        <br>
                        <h4>
                            <a href="{{ route('decreasing.life.insurance') }}">
                                <i class="glyphicon glyphicon-arrow-right"></i>
                                Decreasing Life Insurance
                            </a>
                        </h4>
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