<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;

class ContactController extends Controller
{
    public function send(Request $request)
    {
        $validated = $request->validate([
            'nom'     => 'required|string|max:255',
            'email'   => 'required|email',
            'message' => 'required|min:10',
        ]);

        // Sauvegarde dans la base de données
        Contact::create($validated);

        return back()->with('success', 'Merci, ton message a été envoyé avec succès !');
    }
}
