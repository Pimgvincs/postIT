<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use \Database\Seeders\TweetsSedder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
         \App\Models\tweets::factory(1)->create();
         \App\Models\User::factory(1)->create();
       
    }
}
