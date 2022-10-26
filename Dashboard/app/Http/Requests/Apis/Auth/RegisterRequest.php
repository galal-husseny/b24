<?php

namespace App\Http\Requests\Apis\Auth;

use Illuminate\Foundation\Http\FormRequest;

class RegisterRequest extends FormRequest
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
            'name'=>['required'],
            'email'=>['required','email','unique:admins',],
            'password'=>['required','regex:/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[@$!%*?&])[A-Za-z\d@$!%*?&]{8,32}$/','confirmed'],
            'device_name'=>['required'],
            'os'=>['required','in:ios,andriod,windows']
        ];
    }

    public function messages()
    {
        return [
            'password.regex' => 'Minimum eight and maximum 32 characters, at least one uppercase letter, one lowercase letter, one number and one special character',
        ];
    }
}
