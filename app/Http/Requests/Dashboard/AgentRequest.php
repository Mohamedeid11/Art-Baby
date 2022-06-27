<?php

namespace App\Http\Requests\Dashboard;

use Illuminate\Foundation\Http\FormRequest;

class AgentRequest extends FormRequest
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
                'name' => 'required|between:3,100|unique:agents,name',
                'name_en' => 'required|between:3,100|unique:agents,name_en',
                'email' => 'required|email|unique:agents,email',
                'password' => 'required|min:6',
                'phone' => 'required|digits_between:8,12|unique:agents,phone',
                'image' => 'required|image',
                'display' => 'required|boolean',
            ];
        } else {
            return [
                'name' => 'required|between:3,100|unique:agents,name,' . $this->route('agent'),
                'name_en' => 'required|between:3,100|unique:agents,name_en,' . $this->route('agent'),
                'email'     => 'required|email|unique:agents,email,' . $this->route('agent'),
                'password'  => 'nullable|min:6',
                'phone' => 'required|digits_between:8,12|unique:agents,phone,' . $this->route('agent'),
                'image' => 'nullable|image',
                'display' => 'required|boolean',
            ];
        }
    }
}
