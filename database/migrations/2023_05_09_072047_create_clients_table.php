<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('clients', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('first_name_en')->nullable();
            $table->string('first_name_ar')->nullable();
            $table->string('second_name_en')->nullable();
            $table->string('second_name_ar')->nullable();
            $table->string('third_name_en')->nullable();
            $table->string('third_name_ar')->nullable();
            $table->string('fourth_name_en')->nullable();
            $table->string('fourth_name_ar')->nullable();
            $table->string('passport_number')->unique()->nullable();
            $table->date('passport_expire_date')->nullable();
            $table->string('passport_image')->nullable();
            $table->string('phone_united_emirates')->unique()->nullable();
            $table->string('phone_kuwait')->unique()->nullable();
            $table->string('mobile')->unique()->nullable();
            $table->string('emergency_phone')->unique()->nullable();
            $table->string('email')->unique();
            $table->string('address_united_emirates')->nullable();
            $table->string('address_kuwait')->nullable();
            $table->date('date_of_birth')->nullable();
            $table->enum('gender' , ['male' , 'female'])->nullable();
            $table->enum('material_status' , ['single' , 'married' , 'divorced' , 'widow'])->nullable();
            $table->string('ID_number')->unique();
            $table->string('work_place')->nullable();
            $table->string('password');
            $table->string('code')->nullable();
            $table->string('is_verify')->nullable()->comment('0 not verified ,1 verified ')->default('0');
            $table->rememberToken();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('clients');
    }
};
