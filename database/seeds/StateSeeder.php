<?php

use Illuminate\Database\Seeder;

class StateSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('states')->insert([
            [
                'state_name'=> 'pending',
            ],
            [
                'state_name'=> 'opened',
            ],
            [
                'state_name'=> 'closed',
            ]
        ]);
    }
}
