@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-md-13">
            <div class="card">
                <div class="card-header">{{ __('Empresas postulantes') }}</div>

                <div class="card-body">
                    <form method="GET" name="listaconv">
                        @csrf

                        <table class="table table-responsive table-striped">
                            <thead>
                                <thead>
                                    <th>Empresa</th>
                                    <th>Fecha de presentacion</th>
                                    <th>Sobre A</th>
                                    <th>Sobre B</th>
                                    <th>Opciones</th>
                                    
                                </thead>
                            </thead>
                            <tbody>
                               @foreach ($files as $item)

                                <tr>
                                    <td>nombre_empresa</td>
                                    <td>{{$item->created_at}}</td>
                                    <td><a href="{{asset('public/SobreA/' ,$item->id) }}">{{$item->sobre_a}}</a></td>
                                    <td><a href="{{asset('public/SobreB/' ,$item->id) }}">{{$item->sobre_b}}</a></td>
                                    <td>
                                        <div>
                                        <!-- Button trigger modal -->
                                            <button type="button" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#obs">Observar</button>
                                        </div>
                                        <!-- Modal -->
                                        <div class="modal fade" id="obs" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                            <div class="modal-dialog" role="document">
                                                <div class="modal-content">
                                                   <div class="modal-header">
                                                        <h5 class="modal-title" id="exampleModalLabel"><strong>Observaciones</strong> </h5>
                                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                        </button>
                                                    </div>
                                                    <div class="form-group col-md-6">
                                                        <input id="empresa" type="text" class="form-control @error('empresa') is-invalid @enderror" 
                                                        name="empresa" value="{{ old('empresa') }}" required autocomplete="empresa" autofocus>
                                                    </div>
                                                    <div class="modal-body">
                                                        <textarea id="observacion" type="text" class="form-control" name="observacion" value="{{ old('observacion') }}" required autocomplete="observacion" autofocus></textarea>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                                                        <button type="submit" value="Submit" class="btn btn-primary">Enviar</button>
                                                    </div>
                                                    @if (session('info'))
                                                        <script>
                                                            alert("{{session('info')}}");
                                                        </script>
                                                        
                                                    @endif
                                                    </div>
                                                </div>
                                            </div>
                                        <div>
                                             <!-- Button trigger modal -->
                                             <button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#contratos">Aprobar</button>

                                            <!-- Modal -->
                                            <div class="modal fade" id="contratos" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                <div class="modal-dialog" role="document">
                                                    <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title" id="exampleModalLabel"><strong>Enviar contrato</strong> </h5>
                                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                        </button>
                                                    </div>
                                                    <div class="form-group col-md-6">
                                                        <label >Empresa</label>
                                                        <select class="form-control" id="empresa" name="empresa">
                                                            <option selected>Seleccione la empresa...</option>
                                                            
                                                        </select>
                                                    </div>    
                                                    <div class="modal-body">
                                                        
                                                        <div class="form-group">
                                                            <label for="">{{__('Adjuntar contrato')}}</label>
                                                            <div class="form-group">
                                                                <input class="form-control" type="file" name="contrato" class="form-control-file">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                                                        <button type="submit" value="Submit" class="btn btn-primary" >Enviar</button>
                                                    </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </td>
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