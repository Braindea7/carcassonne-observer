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

use App\Events\PusherExampleEvent;

$router->get('/', function () use ($router) {
    return view('index');
});

$router->get('/gamedata/test', function () use ($router) {
    event(new PusherExampleEvent('hello world'));
});