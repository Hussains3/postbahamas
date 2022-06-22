<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreShippingAddressRequest extends FormRequest
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
            'first_name' => "required|string|min:2|max:100",
            'last_name' => "required|string|min:2|max:100",
            'email'=>"required|email",
            'phone' => "required|string|min:5|max:20",
            'street'=>"required|string|min:2|max:100",
            'address_text'=>"required|string|min:2|max:1000",
            'island' => "required|string|min:2|max:100",
            'prefered_location' => "required"
        ];
    }
}
