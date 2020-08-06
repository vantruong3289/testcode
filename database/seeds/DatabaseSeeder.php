<?php

use Illuminate\Database\Seeder;
use Truongpv\Question\QuestionSeeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(UserSeeder::class);
        $this->call(QuestionSeeder::class);
    }
}
