<div class="mb-4 ">
    {!! Form::label('name', 'Nombre completo') !!}
    {!! Form::text('name', null, ['class' => 'form-input block w-full mt-1' . ($errors->has('name') ? ' border-red-600' : '') ]) !!}

    @error('name')
        <strong class="text-xs text-red-600">{{$message}}</strong>
    @enderror
</div>
<div class="grid grid-cols-2 gap-2"> 
    <div class="mb-4">
        {!! Form::label('edad', 'Edad') !!}
        {!! Form::text('edad', null, ['class' => 'form-input block w-15 mt-1' . ($errors->has('edad') ? ' border-red-600' : '')]) !!}
        
        @error('edad')
            <strong class="text-xs text-red-600">{{$message}}</strong>
        @enderror
    </div>
    <div class="mb-4 ">
        {!! Form::label('genero', 'Genero') !!}
        {!! Form::text('genero', null, ['class' => 'form-input block w-15 mt-1' . ($errors->has('genero') ? ' border-red-600' : '')]) !!}
        
        @error('genero')
            <strong class="text-xs text-red-600">{{$message}}</strong>
        @enderror
    </div>
</div>                   
<div class="mb-4 ">
    {!! Form::label('alergias', 'Alergias') !!}
    {!! Form::text('alergias', null, ['class' => 'form-input block w-full mt-1' . ($errors->has('alergias') ? ' border-red-600' : '')]) !!}
    
    @error('alergias')
        <strong class="text-xs text-red-600">{{$message}}</strong>
    @enderror
</div>
<div class="mb-4 ">
    {!! Form::label('prohibiciones', 'Prohibiciones') !!}
    {!! Form::text('prohibiciones', null, ['class' => 'form-input block w-full mt-1' . ($errors->has('prohibiciones') ? ' border-red-600' : '')]) !!}
    
    @error('prohibiciones')
        <strong class="text-xs text-red-600">{{$message}}</strong>
    @enderror
</div>
<div class="mb-4 ">
    {!! Form::label('actividades', 'Actividades') !!}
    {!! Form::text('actividades', null, ['class' => 'form-input block w-full mt-1' . ($errors->has('actividades') ? ' border-red-600' : '')]) !!}
    
    @error('actividades')
        <strong class="text-xs text-red-600">{{$message}}</strong>
    @enderror
</div>
<div class="mb-4 ">
    {!! Form::label('comments', 'Comentarios') !!}
    {!! Form::text('comments', null, ['class' => 'form-input block w-full mt-1' . ($errors->has('comments') ? ' border-red-600' : '')]) !!}
    
    @error('comments')
        <strong class="text-xs text-red-600">{{$message}}</strong>
    @enderror
</div>
