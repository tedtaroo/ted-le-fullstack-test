<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreUserRequest extends FormRequest
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
        $rules = [
            'first_name' => 'required|min:2\regex:/[a-zA-Z]/',
            'last_name' => 'required|min:2\regex:/[a-zA-Z]/',
            'email' => "required|email|unique:users,email,$this->id,id" ,
            'username' => [
                'string',
                'min:8',
                'max:20'
            ],
            'password' => [
                'string',
                'min:8',
                'max:20'
            ]
        ];

        return $rules;
    }
}
