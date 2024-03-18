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
        Schema::create('search_universities', function (Blueprint $table) {
            $table->id();
            $table->foreignId('client_id')->constrained('clients')->onDelete('cascade')->nullable();
            $table->foreignId('order_id')->constrained('orders')->onDelete('cascade')->nullable();
            $table->foreignId('country_id')->constrained('countries')->onDelete('cascade')->nullable();
            $table->foreignId('specialty_id')->constrained('specialties')->onDelete('cascade')->nullable();
            $table->foreignId('sub_specialty_id')->constrained('sub_specialties')->onDelete('cascade')->nullable();
            $table->string('name')->nullable();
            $table->boolean('master')->comment('0 not has, 1 has ')->default('0')->nullable();
            $table->boolean('Bachelor')->comment('0 not has, 1 has ')->default('0')->nullable();
            $table->boolean('doctor')->comment('0 not has, 1 has ')->default('0')->nullable();
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
        Schema::dropIfExists('search_universities');
    }
};
