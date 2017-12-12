<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/ 
use Illuminate\Support\Facades\Log;
use Illuminate\Http\Request;

/*
Route::match(array('GET', 'POST'), '/incoming', function()
{

  Log::info("llego el mensaje");
  
  $xml = '<Response> <Message>Hello - rosa. Neat, eh?</Message>></Response>';
  $response = Response::make($xml, 200);
  $response->header('Content-Type', 'text/xml');
  return $response;
  
  //$twiml = new Services_Twilio_Twiml();
  //$twiml->say('Hello - su solicitud fue satisfactoria. Neat, eh?', array('voice' => 'alice'));
  //$response = Response::make($twiml, 200);
  //$response->header('Content-Type', 'text/xml');
  //return $response;

}); 
*/ 

//Route::get('/get-message', 'PhoneController@getMessages');

Route::get('/hola', function () {
	// Get form inputs
	 dd("hola");
  $number = '+584262401376';
  $message = 'este es n mensaje de prueba';
 
  // Create an authenticated client for the Twilio API
  $client = new Services_Twilio($_ENV['TWILIO_ACCOUNT_SID'], $_ENV['TWILIO_AUTH_TOKEN']);
 
  // Use the Twilio REST API client to send a text message
  $m = $client->account->messages->sendMessage(
     +19712642027, // the text will be sent from your Twilio number
    $number, // the phone number the text will be sent to
    $message // the body of the text message
  );
 
  // Return the message object to the browser as JSON
  return $m;

//$_ENV['TWILIO_NUMBER']

// return view('welcome');
});

Route::get('logs', '\Rap2hpoutre\LaravelLogViewer\LogViewerController@index');