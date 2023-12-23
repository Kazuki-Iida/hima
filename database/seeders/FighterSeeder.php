<?php

namespace Database\Seeders;

use App\Models\Fighter;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class FighterSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Fighter::factory()->count(25)->create();
        DB::table('fighters')->insert([
            [
            'name' => '鷺坂和季',
            'image'=> null,
            'height' => 170,
            'weight' =>55,
            'win' => 3,
            'lose' => 7,
            'power' => 2,
            'speed' =>6,
            'technic' =>10,
            'intelli' =>5,
            'stamina' =>2,
            'mental' =>1,
            ],
            [
            'name' => '篠崎陽斗',
            'image'=> null,
            'height' => 171,
            'weight' =>55,
            'win' => 5,
            'lose' => 2,
            'power' => 3,
            'speed' =>5,
            'technic' =>4,
            'intelli' =>4,
            'stamina' =>4,
            'mental' =>5,
            ],
            [
            'name' => '井上瑠威',
            'image'=> null,
            'height' => 177,
            'weight' =>85,
            'win' => 6,
            'lose' => 7,
            'power' => 7,
            'speed' =>2,
            'technic' =>3,
            'intelli' =>8,
            'stamina' =>10,
            'mental' =>2,
            ],
            [
            'name' => '飯田一希',
            'image'=> null,
            'height' => 200,
            'weight' =>87,
            'win' => 8,
            'lose' => 4,
            'power' => 10,
            'speed' =>1,
            'technic' =>4,
            'intelli' =>6,
            'stamina' =>4,
            'mental' =>1,
            ],
            [
            'name' => '小菅海斗',
            'image'=> null,
            'height' => 177,
            'weight' =>67,
            'win' => 8,
            'lose' => 3,
            'power' => 5,
            'speed' =>5,
            'technic' =>9,
            'intelli' =>3,
            'stamina' =>5,
            'mental' =>7,
            ],
            [
            'name' => '小幡菜摘',
            'image'=> null,
            'height' => 160,
            'weight' =>15,
            'win' => 6,
            'lose' => 0,
            'power' => 3,
            'speed' =>10,
            'technic' =>3,
            'intelli' =>7,
            'stamina' =>4,
            'mental' =>10,
            ],
        ]);
    }
}
