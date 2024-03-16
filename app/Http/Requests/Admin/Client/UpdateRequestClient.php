<?php

namespace App\Http\Requests\Admin\Client;

use Illuminate\Foundation\Http\FormRequest;

class UpdateRequestClient extends FormRequest
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
            'name'          =>  ['sometimes', 'string', 'max:255'],
            'ID_number'     =>  ['sometimes', 'string', 'max:12'],
            'mobile'        =>  ['sometimes', 'string', 'max:255'],
            'email'         =>  ['sometimes', 'string', 'email', 'max:255'],
            'is_active'     =>  ['sometimes', 'boolean'],
        ];
    }

    /**
     * Get the error messages for the defined validation rules.
     *
     * @return array<string, string>
     */
    public function messages()
    {
        return [
            'name.string'       => 'الاسم يجب ان يكون نص',
            'name.max'          => 'الاسم يجب ان لا يتجاوز 255 حرف',
            'ID_number.string'  => 'الرقم الوطني يجب ان يكون نص',
            'ID_number.max'     => 'الرقم الوطني يجب ان لا يتجاوز 12 حرف',
            'mobile.string'     => 'رقم الهاتف يجب ان يكون نص',
            'mobile.max'        => 'رقم الهاتف يجب ان لا يتجاوز 255 حرف',
            'email.string'      => 'البريد الالكتروني يجب ان يكون نص',
            'email.email'       => 'البريد الالكتروني يجب ان يكون بريد الكتروني',
            'email.max'         => 'البريد الالكتروني يجب ان لا يتجاوز 255 حرف',
            'is_active.boolean' => 'الحالة يجب ان تكون صحيحة او خطأ',
        ];
    }
}
