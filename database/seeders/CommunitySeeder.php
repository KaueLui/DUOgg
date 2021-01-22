<?php

namespace Database\Seeders;

use App\Models\Community;
use Illuminate\Database\Seeder;


class CommunitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
     public function run()
    {
		Community::create([
			'name' => 'Communidade de LoL',
			'gamename' => 'League Of Legends',
			'description' => 'Communidade cheia de jogadores',
			'user_id' => 1,
		
            ]);
        }
    }

 