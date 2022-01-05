<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGamesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('games', function (Blueprint $table) {
                    $table->increments('id');
                    $table->integer('user_id');
                    $table->string('brand');
                    $table->string('model');
                    $table->string('power');
                    $table->string('capacity');
                    $table->string('fuel');
                    $table->string('gas');
                    $table->string('gearbox');
                    $table->string('wheels');
                    $table->string('body');
                    $table->integer('year');
                    $table->integer('month');
                    $table->string('runkm');
                    $table->string('country');
                    $table->string('vin');
                    $table->string('inspection');
                    $table->string('color');
                    $table->string('city');
                    $table->string('image');
                    $table->string('description');
                    $table->integer('time');
                    $table->string('price');
                    $table->integer('admin_approval');
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
        Schema::dropIfExists('games');
    }
}
