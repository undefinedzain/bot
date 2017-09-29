<?php

use Illuminate\Database\Seeder;

class sosmeds_seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('sosmeds')
        	->insert([
        		[
        			'sosmed_id' => '',
        			'sosmed_name' => 'facebook',
        			'sosmed_icon_name' => 'facebook'
        		],
        		[
        			'sosmed_id' => '',
        			'sosmed_name' => 'twitter',
        			'sosmed_icon_name' => 'twitter'
        		],
        		[
        			'sosmed_id' => '',
        			'sosmed_name' => 'instagram',
        			'sosmed_icon_name' => 'instagram'
        		],
        		[
        			'sosmed_id' => '',
        			'sosmed_name' => 'telegram',
        			'sosmed_icon_name' => 'telegram'
        		],
        		[
        			'sosmed_id' => '',
        			'sosmed_name' => 'path',
        			'sosmed_icon_name' => 'path'
        		]
        	]);
    }
}
