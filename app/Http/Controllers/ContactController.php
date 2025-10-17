<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactMessage;

class ContactController extends Controller
{
    public function send(Request $request)
    {
        // Validar datos del formulario
        $validated = $request->validate([
            'name' => 'required|string|max:100',
            'email' => 'required|email',
            'message' => 'required|string|max:1000',
        ]);

        // Enviar correo
        Mail::to('crisalarcon1917@gmail.com')->send(new ContactMessage($validated));

        // Mensaje de confirmación
        return back()->with('success', 'Tu mensaje ha sido enviado con éxito. ¡Gracias por contactarnos!');
    }
}
