<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {   // voor meerdere Seeders aan te vragen
        $this->call([
            UsersTableSeeder::class,
            ChallengesTableSeeder::class]);
        // $this->call(UsersTableSeeder::class);
    }
}
