<?php

namespace App\Http\Requests\Dashboard;

use Illuminate\Foundation\Http\FormRequest;

class SettingRequest extends FormRequest
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
            'accept_order' => 'nullable|in:0,1',
            'discount' => 'nullable|integer|between:0,100',
            'VAT' => 'nullable|integer|between:0,100',
            'delivery_cost' => 'nullable|numeric|between:0,1000',
            'about_ar' => 'nullable|between:0,10000',
            'about_en' => 'nullable|between:0,10000',
            'email' => 'nullable|email',
            'phone' => 'nullable|digits_between:8,12',
            'address_ar' => 'nullable|between:3,100',
            'address_en' => 'nullable|between:3,100',
            'whatsapp' => 'nullable|digits_between:8,12',
            'instagram' => 'nullable|url',
            'lat' => 'nullable|numeric',
            'long' => 'nullable|numeric',
        ];
    }
}
