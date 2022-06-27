<?php

namespace App\Http\Requests\Dashboard;

use Illuminate\Foundation\Http\FormRequest;

class TestimonialRequest extends FormRequest
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
                'name_ar'       => 'required|between:3,100',
                'name_en'       => 'required|between:3,100',
                'desc_ar'       => 'required|between:3,1000',
                'desc_en'       => 'required|between:3,1000',
                'image'         => 'nullable|image',
                'display'       => 'required|boolean',
            ];
        } else {
            return [
                'name_ar'       => 'required|between:3,100',
                'name_en'       => 'required|between:3,100',
                'desc_ar'       => 'required|between:3,1000',
                'desc_en'       => 'required|between:3,1000',
                'image'         => 'nullable|image',
                'display'       => 'required|boolean',
            ];
        }
    }
}
