<?php

namespace Database\Seeders;

use App\Models\Client;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class ClientSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Client::create([
            'name'                                  => 'Mahdy',
            'first_name_en'                         => 'Mahdy',
            'first_name_ar'                         => 'مهدي',
            'second_name_en'                        => 'Adel',
            'second_name_ar'                        => 'عادل',
            'third_name_en'                         => 'Mahdy',
            'third_name_ar'                         => 'مهدي',
            'fourth_name_en'                        => 'Abdo',
            'fourth_name_ar'                        => 'عبده',
            'passport_number'                       => 'A123456',
            'passport_expire_date'                  => '2023-05-09',
            'passport_image'                        => 'passport_image.jpg',
            'phone_united_emirates'                 => '123456789',
            'phone_kuwait'                          => '123456789',
            'mobile'                                => '123456789',
            'emergency_phone'                       => '123456789',
            'email'                                 => 'mahdy@email.com',
            'address_united_emirates'               => 'Dubai',
            'address_kuwait'                        => 'Kuwait',
            'date_of_birth'                         => '1990-05-09',
            'gender'                                => 'male',
            'material_status'                       => 'single',
            'ID_number'                             => '123456789',
            'work_place'                            => 'work_place',
            'password'                              => Hash::make('J@ozs.ae'),
            'code'                                  => '123456',
            'is_verify'                             => '1',
            'is_active'                             => '1',
        ]);
    }
}
