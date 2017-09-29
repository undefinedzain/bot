<?php

use Illuminate\Database\Seeder;

class message_types_seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('message_types')
        	->insert([
        		[
        			'message_type_id' => '',
        			'message_type_name' => 'greeting',
        			'message_type_created_at' => date('Y-m-d H:i:s'),
        			'message_type_updated_at' => date('Y-m-d H:i:s')
        		],
        		[
        			'message_type_id' => '',
        			'message_type_name' => 'product_list',
        			'message_type_created_at' => date('Y-m-d H:i:s'),
        			'message_type_updated_at' => date('Y-m-d H:i:s')
        		],
        		[
        			'message_type_id' => '',
        			'message_type_name' => 'order_confirmation',
        			'message_type_created_at' => date('Y-m-d H:i:s'),
        			'message_type_updated_at' => date('Y-m-d H:i:s')
        		],
        		[
        			'message_type_id' => '',
        			'message_type_name' => 'payment_message',
        			'message_type_created_at' => date('Y-m-d H:i:s'),
        			'message_type_updated_at' => date('Y-m-d H:i:s')
        		],
        		[
        			'message_type_id' => '',
        			'message_type_name' => 'thanks',
        			'message_type_created_at' => date('Y-m-d H:i:s'),
        			'message_type_updated_at' => date('Y-m-d H:i:s')
        		],
        		[
        			'message_type_id' => '',
        			'message_type_name' => 'timeout_message',
        			'message_type_created_at' => date('Y-m-d H:i:s'),
        			'message_type_updated_at' => date('Y-m-d H:i:s')
        		],
        	]);
    }
}
