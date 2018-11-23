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

<div class="form-group{{ $errors->has('editorial') ? ' has-error' : '' }}">
    {!! Form::label('editorial', 'Editorial') !!}

    {!! Form::text('editorial',
        null,
        [
            'required',
            'class' => 'form-control'
        ]
    ) !!}

    @if($errors->has('editorial'))
        <span class="help-block">
            <strong>{{ $errors->first('editorial') }}</strong>
        </span>
    @endif
</div> 

<div class="form-group{{ $errors->has('ano') ? ' has-error' : '' }}">
    {!! Form::label('ano', 'Ano') !!}

    {!! Form::number('ano',
        null,
        [
            'required',
            'class' => 'form-control'
        ]
    ) !!}

    @if($errors->has('cedula'))
        <span class="help-block">
            <strong>{{ $errors->first('ano') }}</strong>
        </span>
    @endif
</div> 

<div class="form-group{{ $errors->has('ubicacion') ? ' has-error' : '' }}">
    {!! Form::label('ubicacion', 'Ubicacion') !!}

    {!! Form::text('ubicacion',
        null,
        [
            'required',
            'class' => 'form-control'
        ]
    ) !!}

    @if($errors->has('ubicacion'))
        <span class="help-block">
            <strong>{{ $errors->first('ubicacion') }}</strong>
        </span>
    @endif
</div> 

<div class="form-group{{ $errors->has('autor') ? ' has-error' : '' }}">
    {!! Form::label('autor', 'Autor') !!}

    {!! Form::text('autor',
        null,
        [
            'required',
            'class' => 'form-control'
        ]
    ) !!}

    @if($errors->has('autor'))
        <span class="help-block">
            <strong>{{ $errors->first('autor') }}</strong>
        </span>
    @endif
</div> 

<div class="form-group {{ $errors->has('tipo') ? ' has-error' : '' }} ">
    {!! Form::label('tipo','Tipo') !!}

    {!! Form::select('tipo',

        ['Normal' => 'Normal','Reserva' => 'Reserva', ],
        null,
        [
            'required',
            'class' => 'form-control'
        ]
    ) !!}

    @if($errors->has('tipo'))
        <span class="help-block">
            <strong>{{ $errors->first('tipo') }}</strong>
        </span>
    @endif

</div> 

<div class="form-group{{ $errors->has('area') ? ' has-error' : '' }}">
    {!! Form::label('area', 'Area') !!}

    {!! Form::text('area',
        null,
        [
            'required',
            'class' => 'form-control'
        ]
    ) !!}

    @if($errors->has('area'))
        <span class="help-block">
            <strong>{{ $errors->first('area') }}</strong>
        </span>
    @endif
</div> 

<div class="form-group{{ $errors->has('prestamo') ? ' has-error' : '' }}">
    {!! Form::label('prestamo', 'Prestamo') !!}

    {!! Form::number('prestamo',
        null,
        [
            'required',
            'class' => 'form-control'
        ]
    ) !!}

    @if($errors->has('prestamo'))
        <span class="help-block">
            <strong>{{ $errors->first('prestamo') }}</strong>
        </span>
    @endif
</div> 






<div class="form-group">
    <button type="submit" class="btn btn-primary">Guardar</button>
</div>

<!-- ------------------------------------------------------------------------------------- -->