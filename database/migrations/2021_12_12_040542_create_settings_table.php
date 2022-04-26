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
            $table->increments('id');
            $table->string('contact_mail');
            $table->integer('phone_number');
            $table->string('adress');
            $table->string('facbook_link')->default('#')->nullable();
            $table->string('youtube_link')->default('#')->nullable();
            $table->string('twitter_link')->default('#')->nullable();
            $table->string('instagram_link')->default('#')->nullable();
            $table->string('linkedin_link')->default('#')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('settings');
    }
}
