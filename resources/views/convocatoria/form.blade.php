<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('Nombre de la convocatoria') }}
            {{ Form::text('tit_conv', $convocatoria->tit_conv, ['class' => 'form-control' . ($errors->has('tit_conv') ? ' is-invalid' : '')]) }}
            {!! $errors->first('tit_conv', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Descripcion de la convocatoria') }}
            {{ Form::text('desc_conv', $convocatoria->desc_conv, ['class' => 'form-control' . ($errors->has('desc_conv') ? ' is-invalid' : '')]) }}
            {!! $errors->first('desc_conv', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Fecha de conclucion') }}
            {{ Form::date('f_fin', $convocatoria->f_fin, ['class' => 'form-control' . ($errors->has('f_fin') ? ' is-invalid' : '')]) }}
            {!! $errors->first('f_fin', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        
    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-dark">Registrar</button>
    </div>
</div>