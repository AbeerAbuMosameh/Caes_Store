<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSettingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('settings', function (Blueprint $table) {
            $table->id();
            $table->string('time');
            $table->string('days');
            $table->string('location');
            $table->string('facebook');
            $table->string('insta');
            $table->string('twitter');
            $table->string('gmail');
            $table->string('logo');
            $table->string('phone');
            $table->string('email');
            $table->string('background');
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
        Schema::dropIfExists('settings');
    }
}
