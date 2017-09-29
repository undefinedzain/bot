<?php

    namespace App\Http\Controllers;
    use Illuminate\Http\Request;
    // use Facebook\Facebook;

    class TesController extends Controller
    {
        public function tesUser()
        {
            $fb = new \Facebook\Facebook([
                'app_id' => '1907480082610613',
                'app_secret' => 'e87972c073be6cbcb718a91dfe17c592',
                'default_graph_version' => 'v2.10'
            ]);

            try {
              // Returns a `Facebook\FacebookResponse` object
              $response = $fb->get('/me?fields=id,name', '662d019852872e76ef10725489079400');
            } catch(Facebook\Exceptions\FacebookResponseException $e) {
              echo 'Graph returned an error: ' . $e->getMessage();
              exit;
            } catch(Facebook\Exceptions\FacebookSDKException $e) {
              echo 'Facebook SDK returned an error: ' . $e->getMessage();
              exit;
            }

            $user = $response->getGraphUser();

            return $user;
        }

        public function obj()
        {
            $senderID = 85857534;

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

            $response = [
                'recipient' => ['id' => $senderID],
                'message' => [
                    'quick_replies' => [
                        [
                            'content_type' => 'text',
                            'title' => 'Search',
                            'payload' => 'get_something'
                        ],
                        [
                            'content_type' => 'text',
                            'title' => 'Undefined',
                            'payload' => 'get_something_new'
                        ],
                        [
                            'content_type' => 'text',
                            'title' => 'Xtral',
                            'payload' => 'get_something_else'
                        ]
                    ]
                ]
            ];

            echo json_encode($response);
        }
    }
?>