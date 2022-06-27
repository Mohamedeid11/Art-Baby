<?php

namespace App\Http\Requests\Dashboard;

use Illuminate\Foundation\Http\FormRequest;

class CountryRequest extends FormRequest
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
                'name_ar' => 'required|between:3,100|unique:countries,name_ar',
                'name_en' => 'required|between:3,100|unique:countries,name_en',
                'display' => 'required|boolean',
                'delivery_cost' => 'required|numeric',
                'min_order' => 'required|numeric',
            ];
        } else {
            return [
                'name_ar' => 'required|between:3,100|unique:countries,name_ar,' . $this->route('country'),
                'name_en' => 'required|between:3,100|unique:countries,name_en,' . $this->route('country'),
                'display' => 'required|boolean',
                'delivery_cost' => 'required|numeric',
                'min_order' => 'required|numeric',
            ];
        }
    }
}
