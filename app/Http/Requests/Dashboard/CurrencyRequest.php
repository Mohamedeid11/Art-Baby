<?php

namespace App\Http\Requests\Dashboard;

use Illuminate\Foundation\Http\FormRequest;

class CurrencyRequest extends FormRequest
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
                'name_ar'   => 'required|between:2,50|unique:currencies,name_ar',
                'name_en'   => 'required|between:2,50|unique:currencies,name_en',
                'value'     => 'required|numeric|between:0,99,999',
                'display'   => 'required|boolean',
            ];
        } else {
            return [
                'name_ar'   => 'required|between:2,50|unique:currencies,name_ar,' . $this->route('currency'),
                'name_en'   => 'required|between:2,50|unique:currencies,name_en,' . $this->route('currency'),
                'value'     => 'required|numeric|between:0,99,999',
                'display'   => 'required|boolean',
            ];
        }
    }
}
