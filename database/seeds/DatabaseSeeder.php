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
    {
        $this->call(UserTableSeeder::class);
        $this->call(SettingTableSeeder::class);

        factory('App\Category', 5)->create();
        factory('App\Post', 50)->create();
    }
}
