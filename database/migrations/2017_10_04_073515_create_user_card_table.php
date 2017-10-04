<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUserCardTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_card', function (Blueprint $table) 
        {
            $table->increments('id');
            $table->integer('user_id');
            $table->foreign('user_id')->references('id')->on('user')->onDelete('cascade');
            $table->integer('card_id');
            $table->foreign('card_id')->references('id')->on('card')->onDelete('cascade');
            $table->integer('company_card_id')->nullable();
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
        Schema::dropIfExists('user_card');
    }
}
