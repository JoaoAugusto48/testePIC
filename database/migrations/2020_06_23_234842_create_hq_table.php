<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHqTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('hqs', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('tema', 100);
            $table->string('local', 70);
            $table->unsignedBigInteger('personagem1_id');
            $table->unsignedBigInteger('personagem2_id');
            $table->unsignedBigInteger('ambiente_id');
            $table->timestamps();

            $table->foreign('personagem1_id')->references('id')->on('personagems');
            $table->foreign('personagem2_id')->references('id')->on('personagems');
            $table->foreign('ambiente_id')->references('id')->on('ambientes');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('hqs');
    }
}