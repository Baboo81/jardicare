<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function send(Request $request)
    {
        //Validation des champs
        $request->validate([
            'name' => 'required|string|max:255',
            'first_name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'phone' => 'nullable|regex:/^[0-9+\s()-]+$/|max:20',
            'content' => 'required|string|max:2000',
        ]);

        //Honeypot anti-spam
        if ($request->filled('website')) {
            return back()->withErrors(['spam' => 'Tentative de spam détecté !']);
        }

        //Contenu du mail
        $data = [
            'name' =>$request->name,
            'first_name' =>$request->first_name,
            'email' =>$request->email,
            'phone' => $request->phone,
            'content' => $request->content,
        ];

        //Envoi du mail
        Mail::send('emails.contact', $data, function($mail) {
            $mail->to('odefosseux@jardicare.be')
                    ->subject('Jardi Care : nouveau message reçu !');
        });

        return back()->with('success', 'Votre message a bien été envoyé ! Merci !')->withFragment('contact-form');
    }
}
