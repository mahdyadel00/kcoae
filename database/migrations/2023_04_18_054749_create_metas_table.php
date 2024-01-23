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
        Schema::create('metas', function (Blueprint $table) {
            $table->id();
            $table->string('header_logo');
            $table->string('footer_logo');
            $table->string('icon');
            $table->string('og_image');
            $table->string('web_color');
            $table->string('link');
            $table->string('title');
            $table->text('description');
            $table->text('og_title');
            $table->text('keywords');
            $table->text('footer');
            $table->text('web_name');
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
        Schema::dropIfExists('metas');
    }
};
