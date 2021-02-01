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
        $Communities = Community::all();
        foreach($Communities as $community){
            Game::factory(5)->create([
                'community_id'=> $community->id
            ]);
        }
    }
}