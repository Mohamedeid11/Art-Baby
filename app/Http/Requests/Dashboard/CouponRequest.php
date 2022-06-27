<?php

namespace App\Http\Requests\Dashboard;

use Illuminate\Foundation\Http\FormRequest;

class CouponRequest extends FormRequest
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
        if ($this->method() == 'POST') {
            return [
                'code'      => 'required|between:2,50|unique:coupons,code',
                'type'          => 'required|string|in:discount,percent_off',
                'discount'      => 'required_without:percent_off|between:0,100',
                'percent_off'   => 'required_without:discount|between:0,100',
                'from'      => 'required|date',
                'to'        => 'required|date|after:from',
            ];
        } else {
            return [
                'code'          => 'required|between:2,50|exists:coupons,code',
                'type'          => 'required|string|in:discount,percent_off',
                'discount'      => 'required_without:percent_off|between:0,100',
                'percent_off'   => 'required_without:discount|between:0,100',
                'from'          => 'required|date',
                'to'            => 'required|date|after:from',
            ];
        }
    }
}
