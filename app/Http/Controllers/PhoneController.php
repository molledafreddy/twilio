<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\MessageBag;
use Twilio\Rest\Client;

class PhoneController extends Controller
{
    public function getMessages(Request $request)
    {
    	dd("hola");

    }
}
