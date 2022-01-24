<div class="mb-4 ">
    {!! Form::label('calle', 'Calle') !!}
    {!! Form::text('calle', null, ['class' => 'form-input block w-full mt-1' ]) !!}

    @error('calle')
        <strong class="text-xs text-red-600">{{$message}}</strong>
    @enderror
</div>                            
<div class="mb-4 ">
    {!! Form::label('colonia', 'Colonia') !!}
    {!! Form::text('colonia', null, ['class' => 'form-input block w-full mt-1' ]) !!}

    @error('colonia')
        <strong class="text-xs text-red-600">{{$message}}</strong>
    @enderror
</div>
<div class="grid grid-cols-2 gap-2"> 
    <div class="mb-4">
        {!! Form::label('num_int', 'Número Interior') !!}
        {!! Form::text('num_int', null, ['class' => 'form-input block w-15 mt-1' ]) !!}
        
        @error('num_int')
            <strong class="text-xs text-red-600">{{$message}}</strong>
        @enderror
    </div>
    <div class="mb-4 ">
        {!! Form::label('num_ext', 'Número Exterior') !!}
        {!! Form::text('num_ext', null, ['class' => 'form-input block w-15 mt-1' ]) !!}

        @error('num_ext')
            <strong class="text-xs text-red-600">{{$message}}</strong>
        @enderror
    </div>
</div>
<div class="grid grid-cols-2 gap-2"> 
    <div class="mb-4">
        {!! Form::label('cp', 'Código Postal') !!}
        {!! Form::text('cp', null, ['class' => 'form-input block w-15 mt-1' ]) !!}

        @error('cp')
            <strong class="text-xs text-red-600">{{$message}}</strong>
        @enderror
    </div>
    <div class="mb-4 ">
        {!! Form::label('phone', 'Teléfono de emergencia') !!}
        {!! Form::text('phone', null, ['class' => 'form-input block w-15 mt-1' ]) !!}

        @error('phone')
            <strong class="text-xs text-red-600">{{$message}}</strong>
        @enderror
    </div>
</div>              
<div class="mb-4 ">
    {!! Form::label('referencias', 'Referencias') !!}
    {!! Form::text('referencias', null, ['class' => 'form-input block w-full mt-1' ]) !!}

    @error('referencias')
        <strong class="text-xs text-red-600">{{$message}}</strong>
    @enderror
</div>
