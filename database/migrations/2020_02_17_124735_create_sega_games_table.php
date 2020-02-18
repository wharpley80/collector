<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSegaGamesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sega_games', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->string('slug');
            $table->bigInteger('platform');
            $table->bigInteger('region');
            $table->json('genre');
            $table->bigInteger('publisher');
            $table->json('developer')->nullable();
            $table->text('description')->nullable();
            $table->string('cover')->nullable();
            $table->string('video')->nullable();
            $table->string('price')->nullable();
            $table->string('release_date');
            $table->bigInteger('rating')->nullable();
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
        Schema::dropIfExists('sega_games');
    }
}
