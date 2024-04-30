<?php

namespace Database\Seeders;

use App\Models\Team;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TeamSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $teams = [
            [
                'name' => 'Tubigon Anglers',
                'remarks' => 'Tubigon',
                'owner' => 'Ruel Limocon',
                'head coach' => 'Onyot Entroliso'
            ],
            [
                'name' => 'Clarin Tubers',
                'remarks' => 'Clarin',
                'owner' => 'Luis Salera',
                'head coach' => 'Rico Samal'
            ],
            [
                'name' => 'Calape Pistols',
                'remarks' => 'Calape',
                'owner' => 'Vergel Yu',
                'head coach' => 'Sammy Suello'
            ],
            [
                'name' => 'Loon Hikers',
                'remarks' => 'Loon',
                'owner' => 'Philip Layaganon',
                'head coach' => 'Bernie Ayusan'
            ],
        ];
        foreach ($teams as $d) {
            Team::create($d);
        }
    }
}
