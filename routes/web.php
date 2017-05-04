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
    return $app->version();
});

/** basic wrapper */
$app->get('/office[/{count}]', 'OfficeController@getOffice');
$app->get('/member[/{count}]', 'MemberController@getMember');
$app->get('/property[/{count}]', 'PropertyController@getProperty');
$app->get('/openhouse[/{count}]', 'OpenHouseController@getOpenHouse');
$app->get('/history[/{count}]', 'HistoryController@getHistory');
$app->get('/media/{type}[/{count}]', 'MediaController@getPropertyMedia');
