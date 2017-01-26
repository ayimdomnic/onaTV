<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVideosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('videos', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id');
            $table->string('video_id')->unique();
            $table->string('title');
            $table->text('description');
            $table->string('tags')->nullable();
            $table->integer('category');
            $table->integer('status')->default(0);
            $table->string('preview');
            $table->string('thumb');
            $table->string('video_path');
            $table->string('duration');
            $table->integer('width');
            $table->integer('height');
            $table->string('size');
            $table->string('type');
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
        Schema::dropIfExists('videos');
    }
}
