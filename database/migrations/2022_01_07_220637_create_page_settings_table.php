<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePageSettingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('page_settings', function (Blueprint $table) {
            $table->id();
            $table->string('home_img');
            $table->string('home_title');
            $table->string('home_description');
            $table->string('video');
            $table->string('home_section_img');
            $table->string('about_cover_img');////
            $table->string('about_img');
            $table->string('about_title');
            $table->string('about_description');
            $table->string('services_cover_img');///
            $table->string('projects_cover_img');///
            $table->string('contacts_cover_img');///
            $table->string('contacts_img');///
            ///
            $table->string('project_details_cover');///
            $table->string('project_details_main_img');///
            $table->string('project_details_img');///
            $table->string('project_details_description');///

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
        Schema::dropIfExists('page_settings');
    }
}
