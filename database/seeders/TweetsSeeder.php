<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use \App\Models\tweets;

class TweetsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        tweets::factory()
            ->count(10)
            ->create();
    }
}


