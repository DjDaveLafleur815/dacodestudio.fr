<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class QuoteController extends Controller
{
    public function showForm()
    {
        return view('pages.quote');
    }

    public function submitForm(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:100',
            'email' => 'required|email',
            'project_type' => 'required|string',
            'budget' => 'nullable|string|max:100',
            'deadline' => 'nullable|string|max:100',
            'message' => 'required|string|max:2000',
        ]);

        // ✅ On renomme "message" → "user_message" pour éviter le conflit
        $data = [
            'name' => $request->name,
            'email' => $request->email,
            'project_type' => $request->project_type,
            'budget' => $request->budget,
            'deadline' => $request->deadline,
            'user_message' => $request->message,
        ];

        Mail::send('emails.quote', $data, function ($mail) use ($data) {
            $mail->to('david.dharma815@outlook.fr', 'D-A Code Studio')
                ->subject('💼 Nouvelle demande de devis - D-A Code Studio')
                ->from($data['email'], $data['name']);
        });

        return back()->with('success', 'Votre demande de devis a bien été envoyée !');
    }
}
