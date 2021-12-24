@extends('layouts.app')

@section('template_title')
    Lista Empresas
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Grupo Empresas') }}
                            </span>

                             <div class="float-right">
                                 @if (Auth::user()->tipo == '2')                                   
                                 
                                <a href="{{ route('empresas.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
                                  {{ __('Crear Grupo Empresa') }}
                                </a>
                                @endif
                              </div>
                        </div>
                    </div>
                    @if ($message = Session::get('success'))
                        <div class="alert alert-success">
                            <p>{{ $message }}</p>
                        </div>
                    @endif

                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-striped table-hover">
                                <thead class="thead">
                                    <tr>
                                        <th>Codigo</th>
                                        <th>Nombre</th>
                                        <th>Tipo de empresa</th>
                                        <th>Representante</th>
                                        <th>Email</th>
                                        <th>Telefono</th>
                                        <th>Socios</th>
                                        <th>Fecha de Registro</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($empresas as $empresa)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            <td>{{$empresa->nombre_empresa}}</td>
                                            <td>{{$empresa->tipo_empresa}}</td>
                                            <td>{{$empresa->rep_empresa}}</td>
                                            <td>{{$empresa->email_empresa}}</td>
                                            <td>{{$empresa->telf_empresa}}</td>
                                            <td>{{$empresa->socios}}</td>
                                            <td>{{$empresa->created_at}}</td>

                                            <td>
                                                <form action="{{ route('empresas.destroy',$empresa->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('empresas.show',$empresa->id) }}"><i class="fa fa-fw fa-eye"></i> Mostrar</a>
                                                    @if (Auth::user()->id_grupo == $empresa->id)                                                     
                                                    
                                                    <a class="btn btn-sm btn-success" href="{{ route('empresas.edit',$empresa->id) }}"><i class="fa fa-fw fa-edit"></i> Editar</a>
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger btn-sm"><i class="fa fa-fw fa-trash"></i> Eliminar</button>
                                                    @endif
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                {!! $empresas->links() !!}
            </div>
        </div>
    </div>
@endsection
