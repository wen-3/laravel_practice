<?php

use Illuminate\Database\Seeder;

class NewsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i=0; $i < 20; $i++){
            DB::table('news')->insert([
                'title' => Str::random(10),
                'sort' => rand(0,100),
            ]);
        }
    }
}

