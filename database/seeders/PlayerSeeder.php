<?php

namespace Database\Seeders;

use App\Models\player;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PlayerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        for($i=1; $i<=4; $i++) {
            for($j=0; $j<12;$j++) {
                player::create([
                    'name' => fake()->name('male'),
                    'team_id' => $i,
                    'jersey no'=> fake()->numberBetween(0,99),
                    'playing position' => fake()->randomElement(['center','small forward','power forward', 'point guard'])
                ]);
            }
        }
    }
}
