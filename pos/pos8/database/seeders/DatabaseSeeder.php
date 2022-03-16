<?php

namespace Database\Seeders;
use DB;
use Database\seeders\User;
//use Database\seeders\Seeder;
use Illuminate\Database\LaratrustSeeder;
use Illuminate\Database\Seeder;
//use Database\seeders\LaratrustSeeder;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
      \App\Models\User::factory(10)->create();

        $this->call(LaratrustSeeder::class);
        $this->call(UsersTableSeeder::class);




    }
}
