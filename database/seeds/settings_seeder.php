<?php

use Illuminate\Database\Seeder;

class settings_seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('settings')
        	->insert([
        		[
        			'setting_id' => '',
        			'setting_name' => 'chat_timeout'
        		],
        	]);
    }
}
