<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSettingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('settings', function(Blueprint $table){
            $table->string('site_title');
            $table->string('site_description');
            $table->string('logo')->default('logo.png');
            $table->string('favicon')->default('favicon.png');
            $table->string('lang')->default('en');

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
