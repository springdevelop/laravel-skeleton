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
        // $this->call(UsersTableSeeder::class);
        $this->call(DonatesTableSeeder::class);
        $this->call(PaysTableSeeder::class);
        $this->call(FoundingsTableSeeder::class);
        $this->call(MenusTableSeeder::class);
    }
}
