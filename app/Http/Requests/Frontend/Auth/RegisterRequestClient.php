<?php

namespace App\Http\Requests\Frontend\Auth;

use Illuminate\Foundation\Http\FormRequest;

class RegisterRequestClient extends FormRequest
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

            'name'         =>  ['required', 'string', 'max:255'],
            'email'        =>  ['required', 'string', 'email', 'max:255', 'unique:clients'],
            'password'     =>  ['required', 'string', 'min:8', 'confirmed'],
            'mobile'       =>  ['required', 'string', 'max:255'],
            'ID_number'    =>  ['required', 'unique:clients'],

        ];
    }



    /**
     * Get the error messages for the defined validation rules.
     *
     * @return array<string, mixed>
     */


    public function messages()
    {
        return [
            'name.required'             => 'اسم المستخدم مطلوب',
            'name.string'               => 'اسم المستخدم يجب ان يكون نص',
            'name.max'                  => 'اسم المستخدم يجب ان لا يزيد عن 255 حرف',

            'email.required'            => 'البريد الالكتروني مطلوب',
            'email.string'              => 'البريد الالكتروني يجب ان يكون نص',
            'email.email'               => 'البريد الالكتروني يجب ان يكون بريد الكتروني صحيح',

            'password.required'         => 'كلمة المرور مطلوبة',
            'password.string'           => 'كلمة المرور يجب ان تكون نص',
            'password.min'              => 'كلمة المرور يجب ان لا تقل عن 8 حروف',

            'mobile.required'           => 'رقم الجوال مطلوب',
            'mobile.integer'            => 'رقم الجوال يجب ان يكون نص',
            'mobile.max'                => 'رقم الجوال يجب ان لا يزيد عن 255 حرف',

            'ID_number.required'        => 'رقم الهوية مطلوب',
            'ID_number.integer'         => 'رقم الهوية يجب ان يكون رقم',
            'ID_number.max'             => 'رقم الهوية يجب ان لا يزيد عن 12 حرف',

        ];
    }
}
