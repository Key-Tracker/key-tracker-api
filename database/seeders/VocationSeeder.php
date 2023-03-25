<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Data\Models\Vocation;

class VocationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Vocation::factory()
        ->count(40)
        ->create();        
    }
}
