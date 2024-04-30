<?php

namespace Database\Seeders;

use App\Models\game;
use App\Models\player;
use App\Models\stat;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class StatSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $game_id = fake()->numberBetween(1,12);

        $game = game::find($game_id);

        $player_ids = player::whereIn('team_id', [$game->home_team_id, $game->away_team_id])->pluck('id');

        $stat = fake()->randomElement(['1 point', '2 points', '3 points']);

        $num = fake()->numberBetween(70,100);

        for($i=0; $i<$num; $i++) {
            stat::create([
                'game_id' => $game_id,
                'player_id' => fake()->randomElement($player_ids),
                'type' => $stat,
                'period' => fake()->numberBetween(1,4)
            ]);
        }
    }
}
