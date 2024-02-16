<?php

namespace App\Http\Requests\Frontend\Profile;

use Illuminate\Foundation\Http\FormRequest;

class UpdateRequestProfile extends FormRequest
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
            'first_name_en'             =>  ['nullable', 'string', 'max:255'],
            'first_name_ar'             =>  ['nullable', 'string', 'max:255'],
            'second_name_en'            =>  ['nullable', 'string', 'max:255'],
            'second_name_ar'            =>  ['nullable', 'string', 'max:255'],
            'third_name_en'             =>  ['nullable', 'string', 'max:255'],
            'third_name_ar'             =>  ['nullable', 'string', 'max:255'],
            'fourth_name_en'            =>  ['nullable', 'string', 'max:255'],
            'fourth_name_ar'            =>  ['nullable', 'string', 'max:255'],
            'passport_number'           =>  ['nullable', 'string', 'max:255'],
            'passport_expire_date'      =>  ['nullable', 'date'],
            'phone_united_emirates'     =>  ['nullable', 'string', 'max:255'],
            'phone_kuwait'              =>  ['nullable', 'string', 'max:255'],
            'mobile'                    =>  ['nullable', 'string', 'max:255'],
            'emergency_phone'           =>  ['nullable', 'string', 'max:255'],
            'email'                     =>  ['nullable', 'string', 'email', 'max:255'],
            'address_united_emirates'   =>  ['nullable', 'string', 'max:255'],
            'address_kuwait'            =>  ['nullable', 'string', 'max:255'],
            'date_of_birth'             =>  ['nullable', 'date'],
            'gender'                    =>  ['nullable', 'string', 'max:255'],
            'material_status'           =>  ['nullable', 'string', 'max:255'],
            'ID_number'                 =>  ['nullable', 'string', 'max:255'],
            'work_place'                =>  ['nullable', 'string', 'max:255'],
            'password'                  =>  ['nullable', 'string', 'min:8'],
            'passport_image'            =>  ['nullable', 'image', 'mimes:jpeg,png,jpg,gif,svg', 'max:2048'],

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
            'first_name_en.string' => 'طول الاسم الاول بالانجليزي يجب ان يكون اقل من 255 حرف',
            'first_name_ar.string' => 'طول الاسم الاول بالعربي يجب ان يكون اقل من 255 حرف',

            'second_name_en.string' => 'طول الاسم الثاني بالانجليزي يجب ان يكون اقل من 255 حرف',
            'second_name_ar.string' => 'طول الاسم الثاني بالعربي يجب ان يكون اقل من 255 حرف',

            'third_name_en.string' => 'طول الاسم الثالث بالانجليزي يجب ان يكون اقل من 255 حرف',
            'third_name_ar.string' => 'طول الاسم الثالث بالعربي يجب ان يكون اقل من 255 حرف',

            'fourth_name_en.string' => 'طول الاسم الرابع بالانجليزي يجب ان يكون اقل من 255 حرف',
            'fourth_name_ar.string' => 'طول الاسم الرابع بالعربي يجب ان يكون اقل من 255 حرف',

            'passport_number.string' => 'طول رقم الجواز يجب ان يكون اقل من 255 حرف',

            'phone_united_emirates.string' => 'طول رقم الهاتف في الامارات يجب ان يكون اقل من 255 حرف',
            'phone_kuwait.string' => 'طول رقم الهاتف في الكويت يجب ان يكون اقل من 255 حرف',

            'mobile.string' => 'طول رقم الجوال يجب ان يكون اقل من 255 حرف',

            'emergency_phone.string' => 'طول رقم الهاتف الطوارئ يجب ان يكون اقل من 255 حرف',

            'email.string' => 'البريد الالكتروني يجب ان يكون اقل من 255 حرف',

            'address_united_emirates.string' => 'عنوان الامارات يجب ان يكون اقل من 255 حرف',
            'address_kuwait.string' => 'عنوان الكويت يجب ان يكون اقل من 255 حرف',

            'date_of_birth.date' => 'تاريخ الميلاد يجب ان يكون تاريخ',
            'gender.string' => 'الجنس يجب ان يكون اقل من 255 حرف',
            'material_status.string' => 'الحالة الاجتماعية يجب ان يكون اقل من 255 حرف',
            'ID_number.string' => 'رقم الهوية يجب ان يكون اقل من 255 حرف',
            'work_place.string' => 'مكان العمل يجب ان يكون اقل من 255 حرف',
            'password.string' => 'كلمة المرور يجب ان تكون اقل من 255 حرف',
        ];

    }



}
