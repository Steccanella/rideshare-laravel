<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\User;

class LoginController extends Controller
{
    public function submit(Request $request)
    {
        //validate the phone number
        $request->validate([
            'phone' => 'required|numeric|min:10'
        ]);
        //find or create a user model

        $user = User::firstOrCreate([
            'phone' => $request->phone
        ]);

        if (!$user) {
            return response()->json([
                'message' => 'Could not process a user with that phone number'
            ], 401);
        }

        //send the user a one-time use code
        $user->notify(new LoginNeedsVerification());
        //return back a response

        return response()->json(
            [
                'message' => 'Text message notification sent'
            ]
        );
    }

    public function verify(Request $request)
    {
        //validate the incoming request

        //find the user

        //is the verification code provided the same one saved?

        //if so, return back an auth token
    }
}
