<?php

    namespace App\Http\Controllers;
    use Illuminate\Http\Request;

    class WebhookController extends Controller
    {
        public function verifyToken(Request $request)
        {
        	if (isset($_REQUEST['hub_verify_token'])) {
	        	if ($_REQUEST['hub_verify_token'] === config('app.hub_verify_token')) {
				  	echo $_REQUEST['hub_challenge'];
				  	exit;
				}
        	}
        }

        public function answerChat(Request $request)
        {
        	// $input = $request->input();
        	// $senderID = $input['entry'][0]['messaging'][0]['sender']['id'];
        	// $messageText = $input['entry'][0]['messaging'][0]['message']['text'];

        	// $response = NULL;

        	// if ($messageText == 'hi') {
        	// 	$answer = 'Hello world';
        	// }else{
         //        $answer = 'Undefined message';
         //    }

        	// $response = [
        	// 	'recipient' => ['id' => $senderID],
        	// 	'message' => ['text' => 'Hello world']
        	// ];

            // $response = [
            //     'recipient' => ['id' => $senderID],
            //     'message' => [
            //         'attachment' => [
            //             'type' => 'template',
            //             'payload' => [
            //                 'template_type' => 'button',
            //                 'text' => 'Tes Sik',
            //                 'buttons' => [
            //                     [
            //                         'type' => 'web_url',
            //                         'url' => '#',
            //                         'title' => 'Tentang Kami',
            //                         // 'payload' => 'Rahasia_Payload'
            //                     ],
            //                     [
            //                         'type' => 'web_url',
            //                         'url' => '#',
            //                         'title' => 'Belanja Sekarang',
            //                         // 'payload' => 'Rahasia_Payload'
            //                     ],
            //                     [
            //                         'type' => 'web_url',
            //                         'url' => '#',
            //                         'title' => 'Konfirmasi Pembayaran',
            //                         // 'payload' => 'Rahasia_Payload'
            //                     ],
            //                     [
            //                         'type' => 'web_url',
            //                         'url' => '#',
            //                         'title' => 'Testimoni',
            //                         // 'payload' => 'Rahasia_Payload'
            //                     ],
            //                     [
            //                         'type' => 'web_url',
            //                         'url' => '#',
            //                         'title' => 'Komplain',
            //                         // 'payload' => 'Rahasia_Payload'
            //                     ]
            //                 ]
            //             ]
            //         ]
            //     ]
            // ];

            // $answer = ["attachment" => ["type" => "template", "payload" => ["template_type" => "list", "elements" => [["title" => "Welcome to Peter\'s Hats", "item_url" => "https://www.cloudways.com/blog/migrate-symfony-from-cpanel-to-cloud-hosting/", "image_url" => "https://www.cloudways.com/blog/wp-content/uploads/Migrating-Your-Symfony-Website-To-Cloudways-Banner.jpg", "subtitle" => "We\'ve got the right hat for everyone.", "buttons" => [["type" => "web_url", "url" => "https://cloudways.com", "title" => "View Website"], ]], ["title" => "Multipurpose Theme Design and Versatility", "item_url" => "https://www.cloudways.com/blog/multipurpose-wordpress-theme-for-agency/", "image_url" => "https://www.cloudways.com/blog/wp-content/uploads/How-a-multipurpose-WordPress-theme-can-help-your-agency-Banner.jpg", "subtitle" => "We've got the right theme for everyone.", "buttons" => [["type" => "web_url", "url" => "https://cloudways.com", "title" => "View Website"], ]], ["title" => "Add Custom Discount in Magento 2", "item_url" => "https://www.cloudways.com/blog/add-custom-discount-magento-2/", "image_url" => "https://www.cloudways.com/blog/wp-content/uploads/M2-Custom-Discount-Banner.jpg", "subtitle" => "Learn adding magento 2 custom discounts.", "buttons" => [["type" => "web_url", "url" => "https://cloudways.com", "title" => "View Website"], ]]]]]];
            // $response = ['recipient' => ['id' => $senderID], 'message' => $answer, 'access_token' => $this->accessToken];

            // $response = [
            //     'recipient' => ['id' => $senderID],
            //     'message' => [
            //         'quick_replies' => [
            //             [
            //                 'content_type' => 'text',
            //                 'title' => 'Search',
            //                 'payload' => 'get_something'
            //             ],
            //             [
            //                 'content_type' => 'text',
            //                 'title' => 'Undefined',
            //                 'payload' => 'get_something_new'
            //             ],
            //             [
            //                 'content_type' => 'text',
            //                 'title' => 'Xtral',
            //                 'payload' => 'get_something_else'
            //             ]
            //         ]
            //     ]
            // ];

   //      	$ch = curl_init('https://graph.facebook.com/v2.6/me/messages?access_token='.config('app.access_token'));
			// curl_setopt($ch, CURLOPT_POST, 1);
			// curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($response));
			// curl_setopt($ch, CURLOPT_HTTPHEADER, ['Content-Type: application/json']);

			// if (!empty($input)) {
			// 	$result = curl_exec($ch);
			// }
			// curl_close($ch);

            // handle bot's anwser
            $input = json_decode(file_get_contents('php://input'), true);
            // $fp = fopen('results.json', 'w');
            // fwrite($fp, $input);
            // fclose($fp);
            $senderId = $input['entry'][0]['messaging'][0]['sender']['id'];
            $messageText = $input['entry'][0]['messaging'][0]['message']['text'];
            $response = null;
            //set Message
            if($messageText == "hi") {
                $answer = "Hello";
            }else{
                $answer = 'Tes';
            }
            //send message to facebook bot
            $response = [
                'recipient' => [ 'id' => $senderId ],
                'message' => [ 'text' => $answer ]
            ];
            $ch = curl_init('https://graph.facebook.com/v2.6/me/messages?access_token='.config('app.access_token'));
            curl_setopt($ch, CURLOPT_POST, 1);
            curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($response));
            curl_setopt($ch, CURLOPT_HTTPHEADER, ['Content-Type: application/json']);
            if(!empty($input)){
            $result = curl_exec($ch);
            }
            curl_close($ch);
        }
    }
?>