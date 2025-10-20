<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function showForm()
    {
        return view('pages.contact');
    }

    public function submitForm(Request $request)
    {
        $data = $request->validate([
            'name' => 'required|string',
            'email' => 'required|email',
            'message' => 'required|string',
        ]);

        // Envoi du mail (local : Mailpit)
        Mail::raw($data['message'], function ($mail) use ($data) {
            $mail->to('contact@d-a-code-studio.local')
                ->subject('Nouveau message de contact : ' . $data['name']);
        });

        return back()->with('success', 'Votre message a bien été envoyé !');
    }
}

