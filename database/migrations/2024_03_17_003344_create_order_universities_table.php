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
        Schema::create('order_universities', function (Blueprint $table) {
            $table->id();
            $table->foreignId('country_id')->constrained('countries')->onDelete('cascade');
            $table->foreignId('specialty_id')->constrained('specialties')->onDelete('cascade');
            $table->foreignId('sub_specialty_id')->constrained('sub_specialties')->onDelete('cascade');
            $table->string('name');
            $table->boolean('master')->comment('0 not has, 1 has ')->default('0');
            $table->boolean('Bachelor')->comment('0 not has, 1 has ')->default('0');
            $table->boolean('doctor')->comment('0 not has, 1 has ')->default('0');
            $table->text('note')->nullable();
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
        Schema::dropIfExists('order_universities');
    }
};
