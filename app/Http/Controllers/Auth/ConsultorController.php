<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\Models\User;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\DB;


class ConsultorController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('consultor', ['except' => ['index','show']]);
    }
    public function index()
    {
        
        
        $users = User::paginate();
        
        return view('usuario.index', compact('usuarios'))
            ->with('i', (request()->input('page', 1) - 1) * $usuarios->perPage());
    }

    public function create()
    {        
        $usuario = new User();
        return view('usuario.create', compact('usuario'));
    }

    public function store(Request $request)
    {
        request()->validate(User::$rules);

        $usuario = User::create($request->all());

        return redirect()->route('usuarios.index')
            ->with('success', 'Consultor registrado exitosamente.');
    }
    public function show($id)
    {
        $usuario = User::find($id);
        return view('usuario.show', compact('usuario'));
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