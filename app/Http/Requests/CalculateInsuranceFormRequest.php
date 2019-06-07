<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CalculateInsuranceFormRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'age'                                   => 'required|max:110|min:18|integer',
            'incomeAfterTax'                        => 'required|integer|min:1',
            'maritalStatus'                         => 'required',
            'dependentChildrenAgeUnder18'           => 'required',
            'mortgageToPayOffAfterDeath'            => 'required',
            'mortgageToPayOffAmount'                => 'required_if:mortgageToPayOffAfterDeath,yes',
            'otherDeptToPayUponDeath'               => 'required',
            'howMuch'                               => 'required_if:otherDeptToPayUponDeath,yes',
            'sumToLeaveUponDeath'                   => 'required'
        ];
    }
}
