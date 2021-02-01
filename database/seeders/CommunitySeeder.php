<?php

namespace Database\Seeders;

use App\Models\Community;
use App\Models\User;
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
        $Users = User::all();
        foreach($Users as $user){
            Community::factory(5)->create([
                'user_id'=> $user->id
            ]);
        }
    }
        
}
