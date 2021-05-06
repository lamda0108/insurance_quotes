<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class createQuoteRequest extends FormRequest
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
            'dot_number'=>'required|integer',
            'premium_amount'=>'required|integer|between:10,10000',
            'premium_tax'=>'required|integer|between:10,10000',
            'premium_total'=>'required|integer|between:10,10000',        
            'street'=>'required|min:5',
            'city'=>'required|min:3',
            'state'=>'required|min:2',
            'zipcode'=>'required|min:3',
            'driver1_name'=>'required|min:3',
            'driver1_age'=>'required|integer|between:21,70',
            'driver2_name'=>'nullable|min:3',
            'driver2_age'=>'nullable|integer|between:21,70',
            'driver3_name'=>'nullable|min:3',
            'driver3_age'=>'nullable|integer|between:21,70',
            'driver4_name'=>'nullable|min:3',
            'driver4_age'=>'nullable|integer|between:21,70',
            'driver5_name'=>'nullable|min:3',
            'driver5_age'=>'nullable|integer|between:21,70',
        ];
    }
}
