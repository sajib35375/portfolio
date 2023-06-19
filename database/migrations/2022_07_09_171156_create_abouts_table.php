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
        Schema::create('abouts', function (Blueprint $table) {
            $table->id();
            $table->string('banner_img')->nullable();
            $table->string('exp_img_one')->nullable();
            $table->string('exp_img_two')->nullable();
            $table->string('exp_bgc_img')->nullable();
            $table->string('testimonial_img')->nullable();
            $table->string('title')->nullable();
            $table->text('short_text')->nullable();
            $table->string('quote')->nullable();
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
        Schema::dropIfExists('abouts');
    }
};
