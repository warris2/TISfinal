@extends('layouts.app')

@section('template_title')
    Crear convocatoria
@endsection

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            @includeif('partials.errors')
            <div class="card">
                <div class="card-header" style="background-color: #e3342f; color: white; ">{{ __('Registrar Convocatoria') }}</div>
                <div class="card-body">
                    
                        <form method="POST" action="{{ route('convocatorias.store') }}"  role="form" enctype="multipart/form-data">
                            @csrf
                            @include('convocatoria.form')
                        </form>
                 </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
