<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class TutorialSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\Tutorial::factory(9)->create();
    }
}
