<?php

namespace App\Http\Requests;

use App\Models\Product;
use Illuminate\Contracts\Validation\Validator;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Exceptions\HttpResponseException;
use toastr;

class CartRequest extends FormRequest
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
        $product = Product::find($this->get('product_id'));
        $quantity = $product->quantity ?? 100;
        return [
            'product_id'    => 'required|exists:products,id',
            'quantity'      => 'required|numeric|between:1,' . $quantity,
        ];
    }
    
    public function messages()
    {
        return [
            'quantity.between' => __('messages.quantityNotAvailable'),
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
