<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Empresa;
use Illuminate\Support\Facades\DB;


class EmpresaController extends Controller
{
    public function index()
    {
        $empresas = Empresa::paginate();

        return view('empresa.index', compact('empresas'))
            ->with('i', (request()->input('page', 1) - 1) * $empresas->perPage());
    }

    public function create()
    {
        $empresas = new Empresa();
        return view('empresa.create', compact('empresas'));
    }

    public function store(Request $request)
    {
        request()->validate(Empresa::$rules);

        $empresas = Empresa::create($request->all());

        return redirect()->route('empresas.index')
            ->with('success', 'Empresa registrada exitosamente.');
    }
    public function show($id)
    {
        $empresas = Empresa::find($id);

        return view('empresa.show', compact('empresas'));
    }

    public function edit($id)
    {
        $empresas = Empresa::find($id);

        return view('empresa.edit', compact('empresas'));
    }

    public function update(Request $request, Empresa $empresas)
    {
        request()->validate(Empresa::$rules);

        $empresas->update($request->all());

        return redirect()->route('empresas.index')
            ->with('success', 'Empresa actualizada exitosamente');
    }
    public function destroy($id)
    {
        $empresa = Empresa::find($id)->delete();

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
            'socios'=> ['required', 'string', 'max:255'],
        ]);
    }

}
