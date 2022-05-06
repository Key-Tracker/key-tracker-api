<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Data\Models\Company;

class CompanySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Company::factory()
        ->count(40)
        ->create();
    }
}
