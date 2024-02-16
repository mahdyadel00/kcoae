<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Client extends Authenticatable
{
    use Notifiable;
    protected $guard = 'client';
    protected $fillable = [
        'name', 'email', 'password',
        'first_name_en',
        'first_name_ar',
        'second_name_en',
        'second_name_ar',
        'third_name_en',
        'third_name_ar',
        'fourth_name_en',
        'fourth_name_ar',
        'passport_number',
        'passport_expire_date',
        'passport_image',
        'phone_united_emirates',
        'phone_kuwait',
        'mobile',
        'emergency_phone',
        'address_united_emirates',
        'address_kuwait',
        'date_of_birth',
        'gender',
        'material_status',
        'ID_number',
        'work_place',
        'code',
        'is_verify',
    ];
    protected $hidden = ['password', 'remember_token',];

}
