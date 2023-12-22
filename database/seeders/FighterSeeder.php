<?php

namespace Database\Seeders;

use App\Models\Fighter;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class FighterSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Fighter::factory()->count(25)->create();
    }
}
