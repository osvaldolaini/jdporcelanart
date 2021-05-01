<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCourseImagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('course_images', function (Blueprint $table) {
            $table->id();
            $table->string('title')->nullable();
            $table->boolean('featured')->nullable();
            $table->string('path');
            $table->unsignedBigInteger('course_id')->nullable();

            /*Padrão */
            $table->timestamps();
            $table->string('updated_by',50)->nullable();
            $table->string('created_by',50)->nullable();

            $table->foreign('course_id')->references('id')->on('courses')->onDelete('SET NULL');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('course_images');
    }
}
