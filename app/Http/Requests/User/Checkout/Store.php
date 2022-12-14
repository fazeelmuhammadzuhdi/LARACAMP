<?php

namespace App\Http\Requests\User\Checkout;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Auth;

class Store extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return Auth::check();
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'name' => 'required|min:3',
            'email' => 'required|email|unique:users,email,' . Auth::id() . ',id',
            'occupation' => 'required',
            'phone' => 'required|numeric',
            'address' => 'required',
            'discount' => 'nullable|string|exists:discounts,code,deleted_at,NULL',

        ];
    }
}
