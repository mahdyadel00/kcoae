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
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->foreignId('client_id')->constrained('clients')->onDelete('cascade');
            $table->string('high_school_certificate');
            $table->string('social_security');
            $table->string('good_conduct_certificate');
            $table->string('passport');
            $table->string('national_ID');
            $table->string('birth_certificate');
            $table->string('status')->comment('1 waiting approval ,2 accepted ,3 sent ,4 rejected ')->default('1');
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
        Schema::dropIfExists('orders');
    }
};
