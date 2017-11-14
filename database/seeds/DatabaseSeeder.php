<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call(StateSeeder::class);
        $this->call(CategorySeeder::class);
        $this->call(TicketSeeder::class);
        $this->call(CommentSeeder::class);
    }
}
