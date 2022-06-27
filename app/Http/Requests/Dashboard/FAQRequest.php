<?php

namespace App\Http\Requests\Dashboard;

use Illuminate\Foundation\Http\FormRequest;

class FAQRequest extends FormRequest
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
            'question_ar'   => 'required|between:3,255',
            'question_en'   => 'required|between:3,255',
            'answer_ar'     => 'required|between:3,2000',
            'answer_en'     => 'required|between:3,2000',
            'display'       => 'required|boolean',
        ];
    }
}
