<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It is a breeze. Simply tell Lumen the URIs it should respond to
| and give it the Closure to call when that URI is requested.
|
*/

$app->get('/', function () use ($app) {
    return response()->json(['code' => 200,'message' => 'Welcome to osman api']);
});

$app->post('/webhook', 'WebhookController@answerChat');
$app->get('/webhook', 'WebhookController@verifyToken');
$app->get('/teschat', 'ChatController@tesChat');


$app->get('/tes/user', 'TesController@tesUser');
$app->get('/tes/obj', 'TesController@obj');