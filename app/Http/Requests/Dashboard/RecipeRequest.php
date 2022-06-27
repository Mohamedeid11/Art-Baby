<?php

namespace App\Http\Requests\Dashboard;

use Illuminate\Foundation\Http\FormRequest;

class RecipeRequest extends FormRequest
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
                'title_ar'  => 'required|between:3,100',
                'title_en'  => 'required|between:3,100',
                'link'      => 'required|url',
                'image'     => 'required|image',
                'display'   => 'required|boolean',
            ];
        } else {
            return [
                'title_ar'  => 'required|between:3,100',
                'title_en'  => 'required|between:3,100',
                'link'      => 'required|url',
                'image'     => 'nullable|image',
                'display'   => 'required|boolean',
            ];
        }
    }
}
