<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class resetpassRequest extends FormRequest
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
            'phone' => 'required|min:8|max:12|exists:clients,phone',
            'password' => 'required|min:6|confirmed',
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
