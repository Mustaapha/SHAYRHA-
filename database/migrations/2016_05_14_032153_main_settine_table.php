<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class MainSettineTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('main_setting', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->text('site_name');
            $table->text('value');
            $table->text('slug');
            $table->integer('type');
            

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('main_setting');
    }
}
