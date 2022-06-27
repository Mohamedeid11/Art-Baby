<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RegisterRequest extends FormRequest
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
            'phone' => 'required|min:8|max:12|unique:clients,phone',
            'email' => 'required|unique:clients,email',
            'first_name' => 'required|between:3,20',
            'last_name' => 'required|between:3,20',
            'password' => 'required|min:6',
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
