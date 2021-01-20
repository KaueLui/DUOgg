<?php

namespace Database\Seeders;

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
        $users = User::all();
        foreach($users as $user) {
            Community::factory(5)->create([
                'user_id' => $user->id
            ]);
        }
    }
}

 