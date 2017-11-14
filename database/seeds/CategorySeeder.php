<?php

use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->insert([
            [
                'category_name'=> 'payment',
            ],
            [
                'category_name'=> 'rectification',
            ],
            [
                'category_name'=> 'result',
            ]
        ]);
    }
}
