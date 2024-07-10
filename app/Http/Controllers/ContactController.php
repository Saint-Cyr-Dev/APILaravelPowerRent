<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function sendEmail(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255',
            'message' => 'required|string'
        ]);

        $data = [
            'name' => $request->name,
            'email' => $request->email,
            'message' => $request->message
        ];

        Mail::send('emails.contact', $data, function ($message) use ($data) {
            $message->to('recipient@example.com') // Adresse e-mail destinataire
                    ->subject('Nouveau message de contact');
        });

        return response()->json(['message' => 'E-mail envoyé avec succès'], 200);
    }
}
