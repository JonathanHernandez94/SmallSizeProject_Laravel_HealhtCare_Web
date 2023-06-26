<?php

namespace App\Http\Controllers;

use Vonage\Client\Credentials\Basic;
use Vonage\Client;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Redirect;

class SmsController extends Controller
{
    public function sms(): RedirectResponse 
    {
        $basic  = new Basic("df6bf1d6", "vWiNFERrVgof6LOg");
        $client = new Client($basic);
        $number = Auth::user()->phone_number;

        $response = $client->sms()->send(
            new \Vonage\SMS\Message\SMS($number, env('VONAGE_SMS_FROM'), 'This is a notification to test your App')
        );
        
        $message = $response->current();
        
        if ($message->getStatus() == 0) {
            return Redirect::route('dashboard')->with('success', 'The message was sent successfully');
        } else {
            echo "The message failed with status: " . $message->getStatus() . "\n";
        }
    }
}
