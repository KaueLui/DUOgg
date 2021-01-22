<?php

namespace Database\Seeders;

use App\Models\Community;
use App\Models\Game;
use Illuminate\Database\Seeder;

class GameSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
     public function run()
    {
        Game::create([
			'name' => 'League Of Legends',
			'developer' => 'Riot Games',
			'description' => 'Jogo de 10 jogadores (5x5), para destruir o nexus inimigo',
			'user_id' => 1,
            ]);
        }
    }
