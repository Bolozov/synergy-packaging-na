<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateExpertiseImagesTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('expertise_images', function (Blueprint $table) {
            $table->increments('id');
            $table->string('image');
            $table->integer('expertise_id')->unsigned();
            $table->foreign('expertise_id')->references('id')->on('expertises')->onDelete('cascade');
            $table->timestamps();
            $table->softDeletes();
        });
        Schema::table('expertises', function (Blueprint $table) {
            $table->string('image')->nullable()->change();
        });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('expertise_images');
    }
}
