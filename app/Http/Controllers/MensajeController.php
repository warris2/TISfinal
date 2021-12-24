<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\NotificacionMailReceived;
use Illuminate\Support\Facades\Mail;


class MensajeController extends Controller
{
    public function index(){
        //
    }

    public function store(Request $request)
    {
        $request->validate([
            'empresa'=>'required|email',
            'observacion'=>'required'
        ]);
        $correo = new NotificacionMailReceiced($request->all());
        Mail::to('empresa')->sent($correo);

        return redirect()->route('listaPropuesta')->with('info', 'Mensaje enviado');
    }
}
