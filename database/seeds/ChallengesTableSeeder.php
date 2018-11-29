<?php

use App\User;
use App\Challenge;
use Illuminate\Database\Seeder;

class ChallengesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users = User::pluck('id');
        Challenge::truncate();
        
        for ($i = 0; $i <= 250; $i++) {
            Challenge::create([
                'title' => str_random(10),
                'user_id' => $users->random(),
                'description' => str_random(10),
                'challengenummer' => rand(0, 10000000),
                'completed' => rand(0, 1)
            ]);
        }
    }
}
