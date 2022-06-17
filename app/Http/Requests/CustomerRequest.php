<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CustomerRequest extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            "name" => "required|max:30",
            "username" => "required|max:15|unique:users,username",
            "email" => "required|max:15|unique:users,email",
            "phone" => "required",
            "name" => "required|max:30",
            "image_profile" => "mimes:png,jpg",
            "address" => "required",
            "password" => "password",
        ];
    }
}
