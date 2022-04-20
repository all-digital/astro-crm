<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserEditRequest extends FormRequest
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
            'create_user_company' => 'required|min:3',
            'create_user_loginEmail' => 'required|min:6',
            'create_user_upper' => 'required|min:3',
            'user_create_name' => 'required|min:6',
            'user_create_lastname' => 'required|min:3',
            'create_user_password' => 'required_with:create_user_password_confirm|same:create_user_password_confirm|min:8',
            'create_user_password_confirm' => 'required|min:8',
            // 'avatar' =>  ,
            // 'create_user_dateLast' => 'required|min:6',
            // 'create_user_lastAcess' => 'required|min:6',
            // 'create_user_lastUserAcess' => 'required|min:6',
            // 'create_user_date_insert' => 'required|min:6',
            // 'create_user_user_insert' => 'required|min:6',
        ];
    }
    //  valid -> date 'required|date_format:d/m/Y';
}
