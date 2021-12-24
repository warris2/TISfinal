@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-md-15">
            <div class="card">
                <div class="card-header">{{ __('Convocatorias') }}</div>

                <div class="card-body">
                    <form method="GET">
                        @csrf

                        <table class="table table-responsive table-striped">
                            <thead>
                                <thead>
                                    <th>Titulo</th>
                                    <th>Descripcion</th>
                                    <th>Fecha de publicacion</th>
                                    <th>Fecha final de presentacion</th>
                                    <th>Opciones</th>
                                    
                                </thead>
                            </thead>
                            <tbody>
                                
                                    <tr>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td><div><button type="submit" class="btn btn-primary btn-sm">{{ __('Descargar') }}</button></div>
                                            <div>
                                                <a href='/addPropuesta' class="mt-1 btn btn-secondary btn-lg active btn-sm" role="button" aria-pressed="true">
                                                    {{ __('Postularse') }}
                                                </a>
                                            </div>
                                        </td>
                                    </tr>
                                
                            </tbody>
                        </table>
                    </form>

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}

                </div>
            </div>
        </div>
    </div>
</div>
@endsection