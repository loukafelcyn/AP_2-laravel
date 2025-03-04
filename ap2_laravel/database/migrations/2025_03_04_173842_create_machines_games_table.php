<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('machines_games', function (Blueprint $table) {
            $table->bigInteger('machine_id')->unsigned();
            $table->bigInteger('game_id')->unsigned();
            $table->foreign('machine_id')->references('id')->on('machines');
            $table->foreign('game_id')->references('id')->on('games');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('machines_games');
    }
};
