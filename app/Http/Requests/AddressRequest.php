<?php

namespace App\Http\Requests;

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
                'region'                => 'nullable',
                'city'                  => 'nullable',
                'lat'                   => 'nullable',
                'long'                  => 'nullable',
                'phone'                 => 'nullable',
                'block'                 => 'nullable',
                'road'                  => 'nullable',
                'floor_no'              => 'nullable',
                'apartment'             => 'nullable',
                'type'                  => 'nullable',
                'additional_directions' => 'nullable',
            ];
        } else {
            return [
                'region'                => 'nullable',
                'city'                  => 'nullable',
                'lat'                   => 'nullable',
                'long'                  => 'nullable',
                'phone'                 => 'nullable',
                'block'                 => 'nullable',
                'road'                  => 'nullable',
                'floor_no'              => 'nullable',
                'apartment'             => 'nullable',
                'type'                  => 'nullable',
                'additional_directions' => 'nullable',
            ];
        }
    }

    public function withValidator($validator)
    {
        $messages = $validator->messages();
        foreach ($messages->all() as $message) {
            return redirect()->back()->with('error',$message);
        }
    }
}
