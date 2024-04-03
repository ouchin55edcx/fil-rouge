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
        Schema::create('lessons', function (Blueprint $table) {
            $table->id();
            $table->string('lessonTitle');
            $table->string('lessonDesc');
            $table->string('content');
            $table->unsignedBigInteger('image_id')->nullable();
            $table->unsignedBigInteger('category_id')->nullable();

            $table->timestamps();

            $table->foreign('image_id')->references('id')->on('images')->onDelete('set null');
            $table->foreign('category_id')->references('id')->on('categories')->onDelete('set null');


        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('lessons');
    }
};
