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
        Schema::create('stats', function (Blueprint $table) {
            $table->id();
            $table->foreignId('player_id')->unsigned();
            $table->foreign('player_id')->references('id')->on('players');
            $table->foreignId('game_id')->unsigned();
            $table->foreign('game_id')->references('id')->on('games');
            $table->integer('period');
            $table->enum('type', ['1 point', '2 points', '3 points', 'Foul', 'Rebound', 'Assist', 'Turnover']);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('stats');
    }
};
