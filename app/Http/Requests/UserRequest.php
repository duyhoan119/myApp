<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserRequest extends FormRequest
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
            'name'=> 'required|min:8',
            'username'=>'required|min:8',
            'email'=>'required|email',
            'brithday'=>'date',
            'avatar'=>'file',
            'password'=>'required|min:6',
            'password_confirm'=>'required_with:password|same:password|min:6',
            'phone'=>'required|min:10|max:10',
        ];
    }
    public function messages()
    {
        return[
            'name.required'=>'enter your name please!',
            'name.min'=>'name min 8',
            'username.required'=>'enter name please!',
            'username.min'=>'name min 8',
            'email.required'=>'enter your email',
            'email.required'=>'email min 8',
            'phone.required'=>'enter your phone',
            'birthday.date'=>'enter your brithday',
            'avatar.file'=>'upload your avatar',
        ];
    }
}
