@extends('layouts.app')

@section('contents')
    <section class="blog-page">
        <div class="container text-justify">
            <div class="row">
                <div class="col-sm-7">
                    <div class="single-post">
                        <h2 class="blog-title">Insurance Calculator</h2>
                        <br>
                        <div class="panel panel-info">
                            <div class="panel-body">
                                <form action="" name="calForm">
                                    @csrf
                                    <div class="form-group">
                                        <label>What is your age?</label>
                                        <input type="number" class="form-control" name="age" placeholder="e.g. 23">
                                    </div>
                                    <div class="form-group">
                                        <labeL>Income after tax</labeL>
                                        <input type="number" class="form-control" name="incomeAfterTax" placeholder="$0.00">
                                    </div>
                                    <div class="form-group">
                                        <label>Are you married?</label>
                                        <div>
                                            <input type="radio" name="maritalStatus" value="yes">
                                            Yes
                                            &nbsp;
                                            <input type="radio" name="maritalStatus" value="no">
                                            No
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label>Do your dependent children aged 18 and below?</label>
                                        <div>
                                            <input type="radio" name="dependentChildrenAgeUnder18" value="yes">
                                            Yes
                                            &nbsp;
                                            <input type="radio" name="dependentChildrenAgeUnder18" value="no">
                                            No
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label>Do you have mortgage to pay off after death?</label>
                                        <div>
                                            <input type="radio" name="mortgageToPayOffAfterDeath" value="yes">
                                            Yes
                                            &nbsp;
                                            <input type="radio" name="mortgageToPayOffAfterDeath" value="no">
                                            No
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label>Mortgage Amount</label>
                                        <input type="number" name="mortgageToPayOffAmount" class="form-control" placeholder="e.g. 12.00">
                                    </div>
                                    <div class="form-group">
                                        <label>Do you have other dept you want to pay upon death?</label>
                                        <div>
                                            <input type="radio" name="otherDeptToPayUponDeath" value="yes">
                                            Yes
                                            &nbsp;
                                            <input type="radio" name="otherDeptToPayUponDeath" value="no">
                                            No
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label>If yes, How much?</label>
                                        <input type="number" class="form-control" name="howMuch" placeholder="$0.00">
                                    </div>
                                    <div class="form-group">
                                        <label>How much lump sum do you want to leave upon death?</label>
                                        <input type="number" class="form-control" name="sumToLeaveUponDeath" value="" placeholder="$0.00">
                                    </div>
                                    <button type="button" class="btn btn-default btn-block" id="submitFormBtn">
                                        Calculate
                                    </button>

                                    <div class="well" style="margin-top: 20px;">
                                        RESULT: <span id="calResult" style="font-weight: 500; font-size: 1.5em;"></span>
                                    </div>
                                </form>

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

@section('scripts')
    <script>

        function clearError(){
            $('input').parent().removeClass('has-error');
            $('.help-block').empty();
        }

        (function(){
            $('#submitFormBtn').on('click', function(e){
                e.preventDefault();
                clearError();

                $.ajax({
                    url: '{{ route('insurance.calculate') }}',
                    method: 'POST',
                    data: $('[name=calForm]').serialize(),
                    success: function(res){
                        var result = res.result;
                        var resPad = $('#calResult');
                        resPad.text("$"+result.toLocaleString('en'));
                    },
                    error: function(err){
                        var errors = err.responseJSON.errors;
                        $.each(errors, function(field, val){
                            var $el = $('[name='+field+']');
                            $el.parent().addClass('has-error');
                            $el.parent().append("<span class='help-block'>"+val+"</span>");
                        });
                    }
                });
            });
        })();
    </script>
@endsection