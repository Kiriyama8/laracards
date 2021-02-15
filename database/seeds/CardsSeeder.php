<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class CardsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i = 0; $i < 100; $i++) {
            DB::table('cards')->insert([
                'name' => Str::random(15),
                'description' => Str::random(50),
                'category_id' => rand(1, 6),
            ]);
        }
    }
}
