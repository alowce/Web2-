<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class StageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {	
    	for ($i = 0; $i < 9; $i++) {
        	\App\Models\Stage::factory(1)->create([
        		'tutorial_id' => \App\Models\Tutorial::all()->random(),
        	]);
       	}
    }
}
