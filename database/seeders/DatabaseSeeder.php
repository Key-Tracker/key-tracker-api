<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Database\Seeders\VocationSeeder;
use Database\Seeders\UserSeeder;
use Database\Seeders\CompanySeeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        $this->call([
            VocationSeeder::class,
            UserSeeder::Class,
            CompanySeeder::class
        ]);        
    }
}
