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
            $table->bigIncrements('id');
            $table->string('name');
            $table->string('slug');
            $table->unsignedBigInteger('company_id');
            $table->unsignedBigInteger('platform_id');
            $table->unsignedBigInteger('region_id');
            $table->json('genre');
            $table->unsignedBigInteger('publisher_id');
            $table->json('developer')->nullable();
            $table->text('description')->nullable();
            $table->string('cover')->nullable();
            $table->string('video')->nullable();
            $table->string('price')->nullable();
            $table->string('release_date');
            $table->bigInteger('rating')->nullable();
            $table->timestamps();
        });

        Schema::table('games', function (Blueprint $table) {
            $table->foreign('company_id')->references('id')->on('company');
            $table->foreign('platform_id')->references('id')->on('platforms');
            $table->foreign('region_id')->references('id')->on('regions');
            $table->foreign('publisher_id')->references('id')->on('publishers');
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
