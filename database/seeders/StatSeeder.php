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
        for($game_id =1; $game_id<=12; $game_id++) {

            $game = game::find($game_id);

            $player_ids = player::whereIn('team_id', [$game->home_team_id, $game->away_team_id])->pluck('id');

            // $num = fake()->numberBetween(70,100);

            for($i=0; $i<200; $i++) {
                $stat = fake()->randomElement(['1 point', '2 points', '3 points']);
                stat::create([
                    'game_id' => $game_id,
                    'player_id' => fake()->randomElement($player_ids),
                    'type' => $stat,
                    'period' => fake()->numberBetween(1,4)
                ]);
            }
        }
    }
}

// SELECT games.id, games.schedule, (SELECT teams.name FROM teams where teams.id = games.home_team_id) AS 'home', (SELECT teams.name FROM teams where teams.id = games.away_team_id) AS 'away', ( (SELECT COUNT(stats.id) FROM stats WHERE stats.game_id = games.id AND stats.player_id=players.id AND stats.type='1 point') + ((SELECT COUNT(stats.id) FROM stats WHERE stats.game_id = games.id AND stats.player_id=players.id AND stats.type='2 points')*2) + ((SELECT COUNT(stats.id) FROM stats WHERE stats.game_id = games.id AND stats.player_id=players.id AND stats.type='3 points')*3) ) AS 'points' FROM games,players WHERE (games.home_team_id = (SELECT players.team_id FROM players WHERE players.name="Carleton Leffler DDS") OR games.away_team_id = (SELECT players.team_id FROM players WHERE players.name="Carleton Leffler DDS")) AND players.name = "Carleton Leffler DDS";
