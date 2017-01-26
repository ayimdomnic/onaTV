<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->string('username', 60)->unique();
            $table->string('password');
            $table->string('email')->unique();
            $table->string('channel', 60)->default('Channel Name');
            $table->integer('status')->default(0);
            $table->integer('level')->default(0);
            $table->string('fb_login')->unique()->nullable();
            $table->string('tw_login')->unique()->nullable();
            $table->string('go_login')->unique()->nullable();
            $table->string('cover')->default('cover.png');
            $table->string('avatar')->default('avatar.png');
            $table->integer('verified')->default(0);
            $table->text('description');
            $table->string('fb_page')->nullable();
            $table->string('tw_page')->nullable();
            $table->string('go_page')->nullable();
            $table->string('in_page')->nullable();
            $table->string('website')->nullable();
            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
}
