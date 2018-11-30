<?php

use Illuminate\Database\Seeder;
use App\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::statement('SET SQL_SAFE_UPDATES=0;');
            (new User)->delete();
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');
            User::truncate();
        DB::statement('SET FOREIGN_KEY_CHECKS=1;');
        DB::statement('SET SQL_SAFE_UPDATES=1;');

        factory(App\User::class, 250)->create();
    }
}
