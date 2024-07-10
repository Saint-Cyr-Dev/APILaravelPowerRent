<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\WelcomeMail;
use App\Models\User;

class EmailController extends Controller
{
    // Envoi d'un email de bienvenue
    public function sendWelcomeEmail(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
        ]);

        $user = User::where('email', $request->email)->first();

        if (!$user) {
            return response()->json(['error' => 'User not found'], 404);
        }

        Mail::to($user->email)->send(new WelcomeMail($user));

        return response()->json(['message' => 'Welcome email sent'], 200);
    }
}
