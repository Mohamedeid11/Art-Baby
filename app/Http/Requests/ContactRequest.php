<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ContactRequest extends FormRequest
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
            'name'      => 'required|between:3,50',
            'email'     => 'required|email',
            'phone'     => 'required|digits_between:8,12',
            'subject'   => 'required|between:3,50',
            'message'   => 'required|between:3,500',
        ];
    }

    public function withValidator($validator)
    {
        $messages = $validator->messages();
        foreach ($messages->all() as $message) {
            return redirect()->back()->with('error',$message);
        }
    }
}
