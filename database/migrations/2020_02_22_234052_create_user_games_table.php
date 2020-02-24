<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUserGamesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_games', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('company_id');
            $table->unsignedBigInteger('game_id');
            $table->string('purchase_date')->nullable();
            $table->string('purchase_price')->nullable();
            $table->string('purchase_location')->nullable();
            $table->boolean('purchase_new')->nullable();
            $table->boolean('cib')->nullable();
            $table->boolean('cart_disc')->nullable();
            $table->boolean('manual')->nullable();
            $table->boolean('box')->nullable();
            $table->bigInteger('condition')->nullable();
            $table->text('comment')->nullable();
            $table->timestamps();
        });

        Schema::table('user_games', function (Blueprint $table) {
            $table->foreign('user_id')->references('id')->on('users');
            $table->foreign('company_id')->references('id')->on('company');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('user_games');
    }
}
