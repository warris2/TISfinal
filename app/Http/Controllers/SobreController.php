<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Sobre;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\DB;

class SobreController extends Controller
{
    public function index()
    {
        $files = Sobre::all();
        return view('listaPropuesta',compact('files'));
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        $filesA=new Sobre();
        $filesB=new Sobre();

        Storage::putFile('public/SobreA/', $filesA=$request->file('sobre_A'));
        Storage::putFile('public/SobreB/', $filesB=$request->file('sobre_B'));
        Sobre::create([
            'sobre_a' => $filesA->getClientOriginalName(),
            'sobre_b' => $filesB->getClientOriginalName()
        ]);

    }

    public function download($id)
    {
        $filesA = Sobre::firstOrFail($id);
        $filesB = Sobre::firstOrFail($id);
        $pathToFile = storage_path("public/SobreA/" . $filesA->sobre_a);
        $pathToFile = storage_path("public/SobreB/" . $filesB->sobre_b);
        return response()->download($pathToFile);
    }
}   
