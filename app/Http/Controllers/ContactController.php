<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Mail;
use Session;


class ContactController extends Controller
{
    public function contacto()
    {
        return view('contacto.contacto');
    }

    public function store(Request $request)
    {
        Mail::send('emails.email', $request->all(),function($msj){
            $msj->subject('Correo de Contacto');
            $msj->to('rodrigodrupal1@gmail.com','rodrigodrupal5@gmail.com');
        });

        Session::flash('mensaje','Mensaje enviado Correctamente');

        return redirect('/contact');
    }
}
