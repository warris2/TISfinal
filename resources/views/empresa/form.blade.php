

                        <div class="form-group row">
                            <label for="nombre_empresa" class="col-md-4 col-form-label text-md-right">{{ __('Nombre de la empresa') }}</label>

                            <div class="col-md-6">
                                <input id="nombre_empresa" type="text" class="form-control @error('nombre_empresa') is-invalid @enderror" name="nombre_empresa" value="{{ old('nombre_empresa') }}" required autocomplete="nombre_empresa" autofocus>

                                @error('nombre_empresa')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        {{-- Nombre Corto --}}
                        <div class="form-group row">
                            <label for="nombre_corto" class="col-md-4 col-form-label text-md-right">{{ __('Nombre Corto') }}</label>

                            <div class="col-md-6">
                                <input id="nombre_corto" type="text" class="form-control @error('nombre_corto') is-invalid @enderror" name="nombre_corto" value="{{ old('nombre_corto') }}" required autocomplete="nombre_corto" autofocus>

                                @error('nombre_corto')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        {{-- Tipo_Empresa --}}
                        <div class="form-group row">
                            <label for="tipo_empresa" class="col-md-4 col-form-label text-md-right">{{ __('Tipo de sociedad') }}</label>

                            <div class="col-md-6">
                            <input id="tipo_empresa" type="text" class="form-control @error('tipo_empresa') is-invalid @enderror" name="tipo_empresa" value="{{ old('tipo_empresa') }}" required autocomplete="tipo_empresa" autofocus>

                                @error('tipo_empresa')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        {{-- Representante --}}
                        <div class="form-group row">
                            <label for="rep_empresa" class="col-md-4 col-form-label text-md-right">{{ __('Representante legal') }}</label>

                            <div class="col-md-6">
                                <input id="rep_empresa" type="text" class="form-control @error('rep_empresa') is-invalid @enderror" name="rep_empresa" value="{{ old('rep_empresa') }}" required autocomplete="rep_empresa" autofocus>

                                @error('rep_empresa')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>


                        <div class="form-group row">
                            <label for="email_empresa" class="col-md-4 col-form-label text-md-right">{{ __('Email Empresa') }}</label>

                            <div class="col-md-6">
                                <input id="email_empresa" type="email" class="form-control @error('email_empresa') is-invalid @enderror" name="email_empresa" value="{{ old('email_empresa') }}" required autocomplete="email_empresa">

                                @error('email_empresa')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="direccion" class="col-md-4 col-form-label text-md-right">{{ __('Dirección') }}</label>

                            <div class="col-md-6">
                            <input id="direccion" type="text" class="form-control @error('direccion') is-invalid @enderror" name="direccion" value="{{ old('direccion') }}" required autocomplete="direccion">

                                @error('direccion')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="telf_empresa" class="col-md-4 col-form-label text-md-right">{{ __('Telefono Empresa') }}</label>

                            <div class="col-md-6">
                            <input id="telf_empresa" type="text" class="form-control @error('telf_empresa') is-invalid @enderror" name="telf_empresa" value="{{ old('telf_empresa') }}" required autocomplete="telf_empresa">

                                @error('telf_empresa')
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

<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('Nombre de la empresa') }}
            {{ Form::text('nombre_empresa', $empresa->nombre_empresa, ['class' => 'form-control' . ($errors->has('nombre_empresa') ? ' is-invalid' : '')]) }}
            {!! $errors->first('nombre_empresa', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Nombre corto') }}
            {{ Form::text('nombre_corto', $empresa->nombre_corto, ['class' => 'form-control' . ($errors->has('nombre_corto') ? ' is-invalid' : '')]) }}
            {!! $errors->first('nombre_corto', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        {{-- <div class="form-group">
            {{ Form::label('Tipo de sociedad') }}
            {{ Form::text('tipo_empresa', $empresa->tipo_empresa, ['class' => 'form-control' . ($errors->has('tipo_empresa') ? ' is-invalid' : '')]) }}
            {!! $errors->first('tipo_empresa', '<div class="invalid-feedback">:message</p>') !!}
        </div> --}}

        <div class="form-group">
            <label for="tipo_empresa" class="">{{ __('Tipo de sociedad') }}</label>
                <select id="tipo_empresa" class="form-control @error('tipo_empresa') is-invalid @enderror" name="tipo_empresa" required autocomplete="tipo_empresa">
                    <option>Responsabilidad Limitada</option>
                    <option>Anónima</option>
                    <option>Colectiva</option>
                    <option>Comandita Simple o por Acciones</option>
                </select>
                @error('tipo_empresa')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            
        </div>

        <div class="form-group">
            {{ Form::label('Representate legal') }}
            {{ Form::text('rep_empresa', $empresa->rep_empresa, ['class' => 'form-control' . ($errors->has('rep_empresa') ? ' is-invalid' : '')]) }}
            {!! $errors->first('rep_empresa', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Email de la empresa') }}
            {{ Form::text('email_empresa', $empresa->email_empresa, ['class' => 'form-control' . ($errors->has('email_empresa') ? ' is-invalid' : '')]) }}
            {!! $errors->first('email_empresa', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Direccion de la empresa') }}
            {{ Form::text('direccion', $empresa->direccion, ['class' => 'form-control' . ($errors->has('direccion') ? ' is-invalid' : '')]) }}
            {!! $errors->first('direccion', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Telefono de la empresa') }}
            {{ Form::text('telf_empresa', $empresa->telf_empresa, ['class' => 'form-control' . ($errors->has('telf_empresa') ? ' is-invalid' : '')]) }}
            {!! $errors->first('telf_empresa', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Socios de la empresa') }}
            {{ Form::text('socios', $empresa->socios, ['class' => 'form-control' . ($errors->has('socios') ? ' is-invalid' : '')]) }}
            {!! $errors->first('socios', '<div class="invalid-feedback">:message</p>') !!}
        </div>
    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-dark">Registrar</button>
    </div>
</div>

