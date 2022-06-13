<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserProfile extends FormRequest
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
          
            //'update_user_loginEmail' => 'required|min:6',
            // 'update_user_upper' => 'required|min:3',
            'update_user_name' => 'required|min:3',
            'update_user_lastname' => 'required|min:3',
            // 'update_user_perfil' => 'required',
            // 'update_user_password' => 'required_with:update_user_password_confirm|same:update_user_password_confirm|min:8',
            // 'update_user_password_confirm' => 'min:8',
            'update_user_avatar' => 'file|dimensions:max_width=120,max_height=130',
        ];
    }
}
