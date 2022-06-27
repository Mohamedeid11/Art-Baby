<?php

namespace App\Http\Requests\Dashboard;

use Illuminate\Foundation\Http\FormRequest;

class AddressRequest extends FormRequest
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
                'client'                => 'required|exists:clients,id',
                'region'                => 'required|exists:regions,id',
                'lat'                   => 'required|numeric',
                'long'                  => 'required|numeric',
                'phone'                 => 'required|digits_between:8,12',
                'block'                 => 'required|between:3,100',
                'road'                  => 'required|between:3,100',
                'floor_no'              => 'required|between:1,100',
                'apartment'             => 'required|between:1,100',
                'type'                  => 'required|between:3,100',
                'additional_directions' => 'nullable|between:3,500',
            ];
        } else {
            return [
                'client'                => 'required|exists:clients,id',
                'region'                => 'required|exists:regions,id',
                'lat'                   => 'required|numeric',
                'long'                  => 'required|numeric',
                'phone'                 => 'required|digits_between:8,12',
                'block'                 => 'required|between:3,100',
                'road'                  => 'required|between:3,100',
                'floor_no'              => 'required|between:1,100',
                'apartment'             => 'required|between:1,100',
                'type'                  => 'required|between:3,100',
                'additional_directions' => 'nullable|between:3,500',
            ];
        }
    }
}
