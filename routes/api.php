<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

//'PhoneController@getMessages'
//
Route::resource('prueba', 'PruebaController');

Route::match(array('GET', 'POST'), 'incoming', function()
{

  Log::info("llego el mensaje");
  
  $xml = '<Response> <Message>Hello - freddy. Neat, eh?</Message>></Response>';
  $response = Response::make($xml, 200);
  $response->header('Content-Type', 'text/xml');
  return $response;
  
  //$twiml = new Services_Twilio_Twiml();
  //$twiml->say('Hello - su solicitud fue satisfactoria. Neat, eh?', array('voice' => 'alice'));
  //$response = Response::make($twiml, 200);
  //$response->header('Content-Type', 'text/xml');
  //return $response;

}); 
Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
