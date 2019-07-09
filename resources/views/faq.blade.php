@extends('layouts.app')

@section('styles')
    <style>
        #integration-list {
            font-family: 'Open Sans', sans-serif;
            width: 80%;
            margin: 0 auto;
            display: table;
        }
        #integration-list ul {
            padding: 0;
            margin: 20px 0;
            color: #555;
        }
        #integration-list ul > li {
            list-style: none;
            border-top: 1px solid #ddd;
            display: block;
            padding: 15px;
            overflow: hidden;
        }
        #integration-list ul:last-child {
            border-bottom: 1px solid #ddd;
        }
        #integration-list ul > li:hover {
            background: #efefef;
        }
        .expand {
            display: block;
            text-decoration: none;
            color: #555;
            cursor: pointer;
        }
        .expnd h2 {
            padding: 0;
            margin: 0;
            font-size: 17px;
            font-weight: 400;
        }
        #integration-list ul li div span {
            font-size: 12.5px;
        }
        #left,#right{
            display: table;
        }
        #sup{
            display: table-cell;
            vertical-align: middle;
            width: 80%;
        }
        .detail a {
            text-decoration: none;
            color: #C0392B;
            border: 1px solid #C0392B;
            padding: 6px 10px 5px;
            font-size: 14px;
        }
        .detail {
            margin: 10px 0 10px 0px;
            display: none;
            line-height: 22px;
            height: auto;
        }
        .detail span{
            margin: 0;
        }
        .right-arrow {
            margin-top: 12px;
            margin-left: 20px;
            width: 10px;
            height: 100%;
            float: right;
            font-weight: bold;
            font-size: 20px;
        }
        .icon {
            height: 75px;
            width: 75px;
            float: left;
            margin: 0 15px 0 0;
        }
        .london {
            background: url("http://placehold.it/50x50") top left no-repeat;
            background-size: cover;
        }
        .newyork {
            background: url("http://placehold.it/50x50") top left no-repeat;
            background-size: cover;
        }
        .paris {
            background: url("http://placehold.it/50x50") top left no-repeat;
            background-size: cover;
        }
    </style>
@endsection

@section('contents')
    <section class="blog-page">
        <div class="container">
            <div class="row">
                <div class="col-sm-8">
                    <div id="integration-list">
                        <ul>
                            <li>
                                <a class="expand">
                                    <div class="right-arrow">+</div>
                                    <div>
                                        <h2>Am I eligible to apply for Life Insurance?</h2>
                                        <span></span>
                                    </div>
                                </a>

                                <div class="detail">
                                    <div id="left" >
                                        <div id="sup">
                                            <div>
                                                <p>
                                                    You must be at least 18 years of age, currently living in
                                                    the UK or have spent at least 60 days in the UK in the tax
                                                    year in which you applied. Upper age limits apply.
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>

                            <li>
                                <a class="expand">
                                    <div class="right-arrow">+</div>
                                    <div>
                                        <h2>How much life insurance do I need?</h2>
                                        <span></span>
                                    </div>
                                </a>

                                <div class="detail">
                                    <div id="left" >
                                        <div id="sup">
                                            <div>
                                                <p>
                                                    It depends on your individual circumstances. You may want
                                                    to think about leaving a lump sum to your dependants or
                                                    help clear an outstanding mortgage on your death during the
                                                    length of your policy. If you'd like more help our life
                                                    insurance calculator may be useful or speak to your financial
                                                    adviser if you have one.
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>

                            <li>
                                <a class="expand">
                                    <div class="right-arrow">+</div>
                                    <div>
                                        <h2>Can I put my policy in Trust for Life Insurance?</h2>
                                        <span></span>
                                    </div>
                                </a>

                                <div class="detail">
                                    <div id="left" >
                                        <div id="sup">
                                            <div>
                                                <p>
                                                    Yes, our Life Insurance policy can be placed in trust.
                                                    Putting your plan in trust can help protect your
                                                    beneficiaries from inheritance tax and ensures the money gets
                                                    to the right people quickly.
                                                </p>
                                                <p>
                                                    Use our Online Trust Hub to help you choose the right type of
                                                    Trust for you. You can even enter your details online so the
                                                    Trust form is ready to be printed and sent back to us.
                                                    Can I cancel my policy if I no longer need it?
                                                    After applying for cover you will receive a 30 day cancellation
                                                    notice which you must send back if you decide not to continue
                                                    with the policy.
                                                </p>
                                                <p>
                                                    If you cancel within 30 days we will return any premiums paid.
                                                    If you cancel after 30 days you won't get anything back.
                                                </p>
                                                <p>
                                                    Please remember that life cover policies are not savings or
                                                    investment products and have no cash value unless a valid
                                                    claim is made.
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>

                            <li>
                                <a class="expand">
                                    <div class="right-arrow">+</div>
                                    <div>
                                        <h2>How much will Life Insurance cost?</h2>
                                        <span></span>
                                    </div>
                                </a>

                                <div class="detail">
                                    <div id="left" >
                                        <div id="sup">
                                            <div>
                                                <p>
                                                    Premiums start from just £20 per month, but your individual
                                                    premium will depend on your own needs and circumstances.
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>

                            <li>
                                <a class="expand">
                                    <div class="right-arrow">+</div>
                                    <div>
                                        <h2>Am I eligible to take out Critical Illness Cover?</h2>
                                        <span></span>
                                    </div>
                                </a>

                                <div class="detail">
                                    <div id="left" >
                                        <div id="sup">
                                            <div>
                                                <p>
                                                    You must be a UK resident or be been uk for at least 60 days.
                                                    at the time of applying to be eligible. Maximum and minimum
                                                    age limits apply.
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>

                            <li>
                                <a class="expand">
                                    <div class="right-arrow">+</div>
                                    <div>
                                        <h2>What critical illnesses are covered under this policy?</h2>
                                        <span></span>
                                    </div>
                                </a>

                                <div class="detail">
                                    <div id="left" >
                                        <div id="sup">
                                            <div>
                                                <h3>See a full list of the illnesses we cover:</h3>
                                                <table class="table table-hover table-strip table-bordered">
                                                    <tbody>
                                                        <tr>
                                                            <td>Aorta graft surgery</td>
                                                            <td>requiring surgical replacement</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Aplastic anaemia</td>
                                                            <td>with permanent bone marrow failure</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Bacterial meningitis</td>
                                                            <td>resulting in permanent symptoms</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Benign brain tumour</td>
                                                            <td>resulting in either surgical removal or permanent symptoms</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Blindness</td>
                                                            <td>permanent and irreversible</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Cancer</td>
                                                            <td>excluding less advanced cases</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Cardiac Arrest</td>
                                                            <td>with insertion of a defibrillator</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Cardiomyopathy</td>
                                                            <td>of specified severity</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Coma</td>
                                                            <td>with associated permanent symptoms</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Coronary artery by-pass grafts</td>
                                                            <td>with surgery to divide the breast bone or thoracotomy</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Creutzfeldt-Jakob disease (CJD)</td>
                                                            <td>resulting in permanent symptoms</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Deafness</td>
                                                            <td>permanent and irreversible </td>
                                                        </tr>
                                                        <tr>
                                                            <td>Dementia including Alzheimer’s disease</td>
                                                            <td>resulting in permanent symptoms</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Encephalitis</td>
                                                            <td>resulting in permanent symptoms</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Heart attack</td>
                                                            <td>of specified severity</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Heart valve replacement or repair</td>
                                                            <td>with surgery</td>
                                                        </tr>
                                                        <tr>
                                                            <td>HIV infection</td>
                                                            <td>caught from a blood transfusion, physical assault or accident at work</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Kidney failure</td>
                                                            <td>requiring permanent dialysis</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Liver failure</td>
                                                            <td>of advanced stage</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Loss of hand or foot</td>
                                                            <td>permanent physical severance</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Loss of speech</td>
                                                            <td>total permanent and irreversible</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Major organ transplant</td>
                                                            <td>from another donor</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Motor neurone disease</td>
                                                            <td>resulting in permanent symptoms</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Multiple sclerosis</td>
                                                            <td>where there have been symptoms</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Multiple system atrophy</td>
                                                            <td>resulting in permanent symptoms</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Open heart surgery</td>
                                                            <td>with median sternotomy</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Paralysis of limb</td>
                                                            <td>total and irreversible</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Parkinson's disease</td>
                                                            <td>resulting in permanent symptoms</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Primary pulmonary hypertension</td>
                                                            <td>of specified severity</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Progressive supranuclear palsy</td>
                                                            <td>resulting in permanent symptoms</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Removal of an eyeball</td>
                                                            <td>due to injury or disease</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Respiratory failure</td>
                                                            <td>of advanced stage</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Spinal stroke</td>
                                                            <td>resulting in symptoms lasting at least 24 hours</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Stroke</td>
                                                            <td>resulting in symptoms lasting at least 24 hours</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Systemic lupus erythematosus</td>
                                                            <td>with severe complications</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Third degree burns</td>
                                                            <td>covering 20% of the surface area of the body or 20% of the face or head </td>
                                                        </tr>
                                                        <tr>
                                                            <td>Total and permanent disability*</td>
                                                            <td>of specified severity</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Traumatic brain injury</td>
                                                            <td>resulting in permanent symptoms</td>
                                                        </tr>
                                                        <tr>
                                                            <td colspan="2">
                                                                <strong>
                                                                    <h3>Additional cover</h3>
                                                                    <p>
                                                                        We provide additional cover for carcinoma
                                                                        in situ of the breast and low grade
                                                                        prostate cancer. This means if you meet
                                                                        our definitions we'll pay out 25% of your
                                                                        amount of cover up to a maximum of
                                                                        £25,000. This benefit does not affect
                                                                        your amount of cover or the premiums you
                                                                        pay.
                                                                    </p>
                                                                </strong>
                                                            </td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>

                            <li>
                                <a class="expand">
                                    <div class="right-arrow">+</div>
                                    <div>
                                        <h2>Can I add Critical Illness Cover?</h2>
                                        <span></span>
                                    </div>
                                </a>

                                <div class="detail">
                                    <div id="left" >
                                        <div id="sup">
                                            <div>
                                                <p>
                                                    You can add Critical Illness Cover for an extra cost when
                                                    taking out Life Insurance or Decreasing Life Insurance.
                                                    It could pay out a cash sum if you’re diagnosed with or
                                                    undergo a medical procedure for one of the specified critical
                                                    illnesses that we cover, and you survive for 14 days from
                                                    diagnosis. Some types of cancer are not included and to make
                                                    a claim for some illnesses, you need to have permanent symptoms
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>

                            <li>
                                <a class="expand">
                                    <div class="right-arrow">+</div>
                                    <div>
                                        <h2>Am I eligible to apply for Decreasing Life Insurance?</h2>
                                        <span></span>
                                    </div>
                                </a>

                                <div class="detail">
                                    <div id="left" >
                                        <div id="sup">
                                            <div>
                                                <p>
                                                    You must be a UK resident or been in uk at least for 60
                                                    days and 18 years of age at the time of applying.
                                                    Upper age limits apply. Please read our Policy Summary PDF for more details.
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>

                            <li>
                                <a class="expand">
                                    <div class="right-arrow">+</div>
                                    <div>
                                        <h2>Can I put my policy in Trust for Decreasing Life Insurance?</h2>
                                        <span></span>
                                    </div>
                                </a>

                                <div class="detail">
                                    <div id="left" >
                                        <div id="sup">
                                            <div>
                                                <p>
                                                    Yes, our Decreasing Life Insurance policy can be placed in
                                                    trust. Putting your plan in trust can help protect your
                                                    beneficiaries from inheritance tax and ensures the money
                                                    gets to the right people quickly.
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <a class="expand">
                                    <div class="right-arrow">+</div>
                                    <div>
                                        <h2>What is a lifetime mortgage?</h2>
                                        <span></span>
                                    </div>
                                </a>

                                <div class="detail">
                                    <div id="left" >
                                        <div id="sup">
                                            <div>
                                                <p>
                                                    A lifetime mortgage is a loan secured against your home to give you a tax-free sum that  you can take all at once, or in smaller amounts when you need them, up to the full loan amount.
                                                </p>
                                                <p>
                                                    If you take smaller amounts later, a different interest rate may apply to each amount you take, depending on the interest rates available at the time.
                                                </p>
                                                <p>
                                                    Our Lifetime Mortgages are usually repaid from the sale of your home when the last surviving borrower dies, or moves out of their home and into long-term care.
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <a class="expand">
                                    <div class="right-arrow">+</div>
                                    <div>
                                        <h2>Are there any risks with a lifetime mortgage?</h2>
                                        <span></span>
                                    </div>
                                </a>

                                <div class="detail">
                                    <div id="left" >
                                        <div id="sup">
                                            <div>
                                                <p>
                                                    Yes, there are. It's very important to understand the risks as well as the potential benefits of taking out a lifetime mortgage.
                                                </p>
                                                <ul style="line-height: 2em;">
                                                    <li>
                                                        <i class="glyphicon glyphicon-ok-sign blue-text"></i>
                                                        With both our Lifetime Mortgages, any unpaid interest is added each month to the amount you owe and will increase quickly over time. Interest is charged on the loan plus any interest already added. However there are repayment options, which could help you manage the interest you owe. There may be cheaper ways to borrow money.
                                                    </li>
                                                    <li>
                                                        <i class="glyphicon glyphicon-ok-sign blue-text"></i>
                                                        A lifetime mortgage will reduce an inheritance and reduce the equity left in your home.
                                                    </li>
                                                    <li>
                                                        <i class="glyphicon glyphicon-ok-sign blue-text"></i>
                                                        It may affect your entitlements to state benefits.
                                                    </li>
                                                    <li>
                                                        <i class="glyphicon glyphicon-ok-sign blue-text"></i>
                                                        A lifetime mortgage is a loan secured against your home. Repaying a loan early could mean substantial early repayment charges.
                                                    </li>
                                                    <li>
                                                        <i class="glyphicon glyphicon-ok-sign blue-text"></i>
                                                        If property values fall, then that may affect the equity available to you or your estate.
                                                    </li>
                                                </ul>
                                                <p>
                                                    A lifetime mortgage adviser can explain the features and risks in detail and make a personal recommendation to you.
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <a class="expand">
                                    <div class="right-arrow">+</div>
                                    <div>
                                        <h2>Why do I need to get professional advice to apply for a lifetime mortgage?</h2>
                                        <span></span>
                                    </div>
                                </a>

                                <div class="detail">
                                    <div id="left" >
                                        <div id="sup">
                                            <div>
                                                <p>
                                                    You can only get a lifetime mortgage through a specialist adviser. It's a big decision and they can help you review all of your options. An adviser will explain the features and risks of the product in detail and make a personal recommendation to you.
                                                </p>
                                                <p>
                                                    You can talk to your own adviser or we can put you in touch with The Retirement Lending Advisers, a separate company who only advise on our Lifetime Mortgages. If you use them,
                                                    they won't charge you an advice fee.
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-sm-4">
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

@section('scripts')
    <script>
        $(function() {
            $(".expand").on( "click", function() {
                $(this).next().slideToggle(200);
                $expand = $(this).find(">:first-child");

                if($expand.text() == "+") {
                    $expand.text("-");
                } else {
                    $expand.text("+");
                }
            });
        });
    </script>
@endsection