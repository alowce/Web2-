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
    	for ($i = 0; $i < 9; $i++) {
        	\App\Models\Tutorial::factory(1)->create([
        		'user_id' => \App\Models\User::all()->random(),
        	]);
       	}

    }
}
