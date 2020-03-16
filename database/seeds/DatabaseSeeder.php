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
    	factory(\App\Mahasiswa::class, 10)->create();
    	factory(\App\Proker::class, 10)->create();
        // $this->call(UsersTableSeeder::class);
    }
}
