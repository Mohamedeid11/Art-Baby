<?php

namespace App\Http\Requests\Dashboard;

use Illuminate\Foundation\Http\FormRequest;

class RegionRequest extends FormRequest
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
                'name_ar'   => 'required|between:3,100|unique:regions,name_ar',
                'name_en'   => 'required|between:3,100|unique:regions,name_en',
                'display'   => 'required|boolean',
            ];
        } else {
            return [
                'name_ar'   => 'required|between:3,100|unique:regions,name_ar,' . $this->route('region'),
                'name_en'   => 'required|between:3,100|unique:regions,name_en,' . $this->route('region'),
                'display'   => 'required|boolean',
            ];
        }
    }
}
