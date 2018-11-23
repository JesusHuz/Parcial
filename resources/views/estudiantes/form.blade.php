<div class="form-group{{ $errors->has('nombre') ? ' has-error' : '' }}">
    {!! Form::label('nombre', 'Nombre') !!}

    {!! Form::text('nombre',
        null,
        [
            'required',
            'class' => 'form-control'
        ]
    ) !!}

    @if($errors->has('nombre'))
        <span class="help-block">
            <strong>{{ $errors->first('nombre') }}</strong>
        </span>
    @endif
</div> 




<div class="form-group">
    <button type="submit" class="btn btn-primary">Guardar</button>
</div>

<!-- ------------------------------------------------------------------------------------- -->