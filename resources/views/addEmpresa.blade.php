@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Registrar Grupo Empresa') }}</div>

                <div class="card-body">
                    <form method="POST" action="">
                        @csrf

                        <div class="form-group row">
                            <label for="name_emp" class="col-md-4 col-form-label text-md-right">{{ __('Nombre Empresa') }}</label>

                            <div class="col-md-6">
                                <input id="name_emp" type="text" class="form-control @error('name_emp') is-invalid @enderror" name="name_emp" value="{{ old('name_emp') }}" required autocomplete="name_emp" autofocus>

                                @error('name_emp')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        {{-- Nombre Corto --}}
                        <div class="form-group row">
                            <label for="small_name" class="col-md-4 col-form-label text-md-right">{{ __('Nombre Corto') }}</label>

                            <div class="col-md-6">
                                <input id="small_name" type="text" class="form-control @error('small_name') is-invalid @enderror" name="small_name" value="{{ old('small_name') }}" required autocomplete="small_name" autofocus>

                                @error('small_name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        {{-- Tipo_Empresa --}}
                        <div class="form-group row">
                            <label for="tipo_emp" class="col-md-4 col-form-label text-md-right">{{ __('Tipo empresa') }}</label>

                            <div class="col-md-6">
                            <input id="tipo_emp" type="text" class="form-control @error('tipo_emp') is-invalid @enderror" name="tipo_emp" value="{{ old('tipo_emp') }}" required autocomplete="tipo_emp" autofocus>

                                @error('tipo_emp')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        {{-- Representante --}}
                        <div class="form-group row">
                            <label for="rep_emp" class="col-md-4 col-form-label text-md-right">{{ __('Representante') }}</label>

                            <div class="col-md-6">
                                <input id="rep_emp" type="text" class="form-control @error('rep_emp') is-invalid @enderror" name="rep_emp" value="{{ old('rep_emp') }}" required autocomplete="rep_emp" autofocus>

                                @error('rep_emp')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>


                        <div class="form-group row">
                            <label for="email_emp" class="col-md-4 col-form-label text-md-right">{{ __('Email Empresa') }}</label>

                            <div class="col-md-6">
                                <input id="email_emp" type="email" class="form-control @error('email_emp') is-invalid @enderror" name="email_emp" value="{{ old('email_emp') }}" required autocomplete="email_emp">

                                @error('email_emp')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="dir_emp" class="col-md-4 col-form-label text-md-right">{{ __('Dirección') }}</label>

                            <div class="col-md-6">
                            <input id="dir_emp" type="text" class="form-control @error('dir_emp') is-invalid @enderror" name="dir_emp" value="{{ old('dir_emp') }}" required autocomplete="dir_emp">

                                @error('dir_emp')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="telf_emp" class="col-md-4 col-form-label text-md-right">{{ __('Telefono Empresa') }}</label>

                            <div class="col-md-6">
                            <input id="telf_emp" type="text" class="form-control @error('telf_emp') is-invalid @enderror" name="telf_emp" value="{{ old('telf_emp') }}" required autocomplete="telf_emp">

                                @error('telf_emp')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="socio" class="col-md-4 col-form-label text-md-right">{{ __('Socios') }}</label>

                            <div class="col-md-6">
                            <input id="socio" type="text" class="form-control @error('socio') is-invalid @enderror" name="socio" value="{{ old('socio') }}" required autocomplete="socio">

                                @error('socio')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Crear Empresa') }}
                                </button>
                                
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection