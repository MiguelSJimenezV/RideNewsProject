<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\ContactMail;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function create()
    {
        return view('contact');
    }


    public function store(Request $request)
    {
        // Validar la entrada
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'surname' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'terms' => 'accepted', // Asegúrate de que la casilla de verificación esté marcada
        ]);

        // Enviar correo
        Mail::send('emails.contact', $validated, function ($message) {
            $message->to('miguel.jimenez@davinci.edu.ar')
                ->subject('Nuevo mensaje de contacto');
        });

        // Redirigir de nuevo a la página anterior con un mensaje de éxito
        return redirect()->back()->with('success', 'Formulario enviado correctamente.');
    }
}
