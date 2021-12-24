<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Convocatoria;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class ConvocatoriaController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('consultor', ['except' => ['index','show']]);
    }
    public function index()
    {
        $convocatorias = Convocatoria::paginate();
        
        return view('convocatoria.index', compact('convocatorias'))
            ->with('i', (request()->input('page', 1) - 1) * $convocatorias->perPage());
    }

    public function create()
    {        
        $convocatoria = new Convocatoria();
        return view('convocatoria.create', compact('convocatoria'));
    }

    public function store(Request $request)
    {
        request()->validate(Convocatoria::$rules);

        $convocatoria = Convocatoria::create($request->all());
        $id = Auth::user()->id;
        $convocatoria->id_consultor=$id;
        $convocatoria->save();
        return redirect()->route('convocatorias.index')
            ->with('success', 'Convocatoria registrada exitosamente.');
    }
    public function show($id)
    {
        $convocatoria = Convocatoria::find($id);

        return view('convocatoria.show', compact('convocatoria'));
    }

    public function edit($id)
    {
        $convocatoria = Convocatoria::find($id);

        return view('convocatoria.edit', compact('convocatoria'));
    }

    public function update(Request $request, Convocatoria $convocatoria)
    {
        request()->validate(Convocatoria::$rules);

        $convocatoria->update($request->all());

        return redirect()->route('convocatorias.index')
            ->with('success', 'Convocatoria actualizada exitosamente');
    }
    public function destroy($id)
    {
        $convocatoria = Convocatoria::find($id)->delete();

        return redirect()->route('convocatorias.index')
            ->with('success', 'Convocatoria eliminada exitosamente');
    }

}