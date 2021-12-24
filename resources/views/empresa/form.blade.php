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