<?php

namespace App\Http\Controllers;

use App\Http\Requests\CalculateInsuranceFormRequest;
use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function welcome()
    {
        return view('welcome');
    }

    public function about()
    {
        return view('about');
    }

    public function services()
    {
        return view('services');
    }

    public function lifeInsurance()
    {
        return view('life-insurance');
    }

    public function criticalIllness()
    {
        return view('critical-illness');
    }

    public function decreasingLifeInsurance()
    {
        return view('decreasing-life-insurance');
    }

    public function mortgage()
    {
        return view('mortgage');
    }

    public function incomeLifetimeMortgage()
    {
        return view('income-lifetime-mortgage');
    }

    public function insuranceCalculator()
    {
        return view('insurance-calculator');
    }

    public function calculateInsurance(CalculateInsuranceFormRequest $request)
    {
        $age40BelowAmt = 30000;
        $age41AboveAmt = 65000;
        $age40Below = 40;
        $age41Above = 41;
        $totalSum = 0;

        if($request->age <= $age40Below ){
            $totalSum += $age40BelowAmt;
        }else{
            $totalSum += $age41AboveAmt;
        }

        if($request->has('mortgageToPayOffAfterDeath') && $request->mortgageToPayOffAfterDeath == 'yes'){
            $totalSum += $request->mortgageToPayOffAmount;
        }

        if($request->has('otherDeptToPayUponDeath') && $request->otherDeptToPayUponDeath == 'yes'){
            $totalSum += $request->howMuch;
        }

        $totalSum = $totalSum + $request->incomeTax +
            $request->sumToLeaveUponDeath;

        return response()
            ->json([ 'result' => $totalSum]);
    }

    public function policy()
    {
        return view('policy');
    }

    public function contact()
    {
        return view('contact');
    }

    public function faqs()
    {
        return view('faq');
    }
}
