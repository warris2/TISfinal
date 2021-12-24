@extends('layouts.app')

@section('template_title')

    {{ $empresa->name ?? 'Ver Empresa' }}

    {{ $empresa->nombre_empresa ?? 'Ver Empresa' }}

@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Ver Empresa</span>
                        </div>

                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('empresas.index') }}"> Volver</a>

                        <div class="float-right">                            
                            <form action="{{ route('empresas.destroy',$empresa->id) }}" method="POST">                        
                            @if (Auth::user()->id_grupo == $empresa->id)                                                     
                                <a class="btn btn-success" href="{{ route('empresas.edit',$empresa->id) }}"><i class="fa fa-fw fa-edit"></i> Editar</a>
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger"><i class="fa fa-fw fa-trash"></i> Eliminar</button>
                            
                            @endif
                            
                            <a class="btn btn-primary" href="{{ route('empresas.index') }}"> Volver</a>
                        </form>

                        </div>
                    </div>

                    <div class="card-body">

                    @foreach($empresas as $empresa)

                        <div class="form-group">
                            <strong>Nombre de la empresa</strong>
                            {{ $empresa->nombre_empresa }}
                        </div>
                        <div class="form-group">
                            <strong>Nombre corto</strong>
                            {{ $empresa->nombre_corto }}
                        </div>
                        <div class="form-group">
                            <strong>Tipo de sociedad</strong>
                            {{ $empresa->tipo_empresa }}
                        </div>
                        <div class="form-group">
                            <strong>Representante legal</strong>
                            {{ $empresa->rep_empresa }}
                        </div>
                        <div class="form-group">
                            <strong>Correo de la empresa</strong>
                            {{ $empresa->email_empresa }}
                        </div>
                        <div class="form-group">
                            <strong>Telefono</strong>
                            {{ $empresa->telf_empresa }}
                        </div>
                        <div class="form-group">
                            <strong>Socios</strong>
                            {{ $empresa->socios }}
                        </div>
                        
                    @endforeach    

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
