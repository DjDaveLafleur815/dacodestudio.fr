<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function showForm()
    {
        return view('contact');
    }

    public function submitForm(Request $request)
    {
        $data = $request->validate([
            'name' => 'required|string|max:120',
            'email' => 'required|email',
            'message' => 'required|string|max:2000',
        ]);

        // Envoi du mail
        Mail::send('emails.contact', $data, function ($message) use ($data) {
            $message->to(env('MAIL_TO_ADDRESS', 'contact@d-a-code-studio.local'))
                ->subject('Nouveau message — '.$data['name']);
        });

        return back()->with('success', 'Merci ! Votre message a bien été envoyé.');
    }
}

