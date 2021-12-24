<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Empresa;
use App\Models\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

use Illuminate\Support\Facades\DB;


class EmpresaController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('solouser', ['only' => ['create','store']]);
        $this->middleware('sologrupo', ['only' => ['edit','update', 'destroy']]);
        //$this->middleware('solouser', ['except' => ['index','show']]);
    }
    public function index()
    {
        $empresas = Empresa::paginate();

        return view('empresa.index', compact('empresas'))
            ->with('i', (request()->input('page', 1) - 1) * $empresas->perPage());
    }

    public function create()
    {
        $empresa = new Empresa();
        return view('empresa.create', compact('empresa'));
    }

    public function store(Request $request)
    {
        $id = Auth::user()->id; 
        request()->validate(Empresa::$rules);
        $user = User::find($id);
        $user->update(['tipo' => '3']);
        $empresa = Empresa::create($request->all());
        $user->id_grupo=$empresa->id;
        $user->save();
        return redirect()->route('empresas.index')
            ->with('success', 'Empresa registrada exitosamente.');
    }
    public function show($id)
    {
        $empresa = Empresa::find($id);

        return view('empresa.show', compact('empresa'));
    }

    public function edit($id)
    {
        $empresa = Empresa::find($id);

        return view('empresa.edit', compact('empresa'));
    }

    public function update(Request $request, Empresa $empresa)
    {
        request()->validate(Empresa::$rules);

        $empresa->update($request->all());

        return redirect()->route('empresas.index')
            ->with('success', 'Empresa actualizada exitosamente');
    }
    public function destroy($id)
    {
        $empresa = Empresa::find($id)->delete();
        $id = Auth::user()->id; 
        $user = User::find($id);
        $user->update(['tipo' => '2']);
        return redirect()->route('empresas.index')
            ->with('success', 'Empresa eliminada exitosamente');
    }
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'nombre_empresa'=> ['required', 'string', 'max:50', 'unique:empresas'],
            'nombre_corto'=> ['required', 'string', 'max:10', 'unique:empresas'],
            'tipo_empresa'=> ['required', 'string', 'max:50'],
            'rep_empresa'=> ['required', 'string', 'max:50'],
            'email_empresa'=> ['required', 'string', 'max:50', 'unique:empresas','email'],
            'direccion'=> ['string', 'max:80'],
            'telf_empresa'=> ['required','integer','digits_between:9,9'],
            'socios'=> ['string', 'max:255'],
        ]);
    }

}