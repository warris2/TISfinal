@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-md-11">
            <div class="card">
                <div class="card-header">{{ __('Grupos Registrados') }}</div>

                <div class="card-body">
                    <form method="GET">
                        @csrf

                        <table class="table table-responsive table-striped">
                            <thead>
                                <thead>
                                    <th>Nombre</th>
                                    <th>Tipo de empresa</th>
                                    <th>Representante</th>
                                    <th>Email</th>
                                    <th>Telefono</th>
                                    <th>Socios</th>
                                    <th>Fecha de Registro</th>
                                </thead>
                            </thead>
                            <tbody>
                                @foreach($empresas as $empresa)
                                    <tr>
                                        <td>{{$empresa->nombre_empresa}}</td>
                                        <td>{{$empresa->tipo_empresa}}</td>
                                        <td>{{$empresa->resp_empresa}}</td>
                                        <td>{{$empresa->email_empresa}}</td>
                                        <td>{{$empresa->telf_empresa}}</td>
                                        <td>{{$empresa->socios}}</td>
                                        <td>{{$empresa->created_at}}</td>
                                    </tr>
                                @endforeach    
                            </tbody>
                        </table>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection