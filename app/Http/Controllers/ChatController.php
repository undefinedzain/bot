<?php

    namespace App\Http\Controllers;
    use Illuminate\Http\Request;

    class ChatController extends Controller
    {
        public function tesChat()
        {
        	$senderID = 100015633669281;
        	$messageText = 'Tes Hello world';

        	$response = [
        		'recipient' => ['id' => $senderID],
        		'message' => ['text' => $messageText]
        	];

        	$ch = curl_init('https://graph.facebook.com/v2.6/me/messages?access_token='.config('app.access_token'));
			curl_setopt($ch, CURLOPT_POST, 1);
			curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($response));
			curl_setopt($ch, CURLOPT_HTTPHEADER, ['Content-Type: application/json']);

			$result = curl_exec($ch);
			curl_close($ch);
            return response()->json($result);
        }
    }
?>