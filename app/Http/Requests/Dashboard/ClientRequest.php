<?php

namespace App\Http\Requests\Dashboard;

use Illuminate\Foundation\Http\FormRequest;

class ClientRequest extends FormRequest
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
                'first_name'    => 'required|between:3,20',
                'last_name'     => 'required|between:3,20',
                'phone'         => 'required|digits_between:8,12|unique:clients,phone',
                'email'         => 'required|email|unique:clients,email',
                'password'      => 'required|min:6',
                'display'       => 'required|boolean',
            ];
        } else {
            return [
                'first_name'    => 'required|between:3,20',
                'last_name'     => 'required|between:3,20',
                'phone'         => 'required|digits_between:8,12|unique:clients,phone,' . $this->route('client'),
                'email'         => 'required|email|unique:clients,email,' . $this->route('client'),
                'password'      => 'required|min:6',
                'display'       => 'required|boolean',
            ];
        }
    }
}
