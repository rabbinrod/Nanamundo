<x-app-layout>
    <div class="container py-8 grid grid-cols-5">
        <aside>
            <h1 class="font-bold text-lg mb-4">Información cliente</h1>
            <ul class="text-gray-600">
                <li>
                    <a class="leading-7 mb-1 border-l-4 border-transparent pl-2" href="{{route('cliente.services.index')}}">Servicios</a>
                </li>
                <li>
                    <a class="leading-7 mb-1 border-l-4 border-indigo-400 pl-2 " href="{{route('cliente.hijos.index')}}">Hijos</a>
                </li>
                <li>
                    <a class="leading-7 mb-1 border-l-4 border-transparent pl-2" href="">Direcciones</a>
                </li>
            </ul>            
        </aside>
        <div class="col-span-4 card">
            <div class="card-body text-gray-600">
                <h1 class="text-2xl font-bold">Editar</h1>
                <hr class="mt-2 mb-8">

                {!! Form::model($hijo, ['route' => ['cliente.hijos.update', $hijo], 'method' => 'put']) !!}
                    <div class="mb-4 ">
                        {!! Form::label('name', 'Nombre completo') !!}
                        {!! Form::text('name', null, ['class' => 'form-input block w-full mt-1' ]) !!}
                    </div>
                    <div class="grid grid-cols-2 gap-2"> 
                        <div class="mb-4">
                            {!! Form::label('edad', 'Edad') !!}
                            {!! Form::text('edad', null, ['class' => 'form-input block w-15 mt-1' ]) !!}
                        </div>
                        <div class="mb-4 ">
                            {!! Form::label('genero', 'Genero') !!}
                            {!! Form::text('genero', null, ['class' => 'form-input block w-15 mt-1' ]) !!}
                        </div>
                    </div>                   
                    <div class="mb-4 ">
                        {!! Form::label('alergias', 'Alergias') !!}
                        {!! Form::text('alergias', null, ['class' => 'form-input block w-full mt-1' ]) !!}
                    </div>
                    <div class="mb-4 ">
                        {!! Form::label('prohibiciones', 'Prohibiciones') !!}
                        {!! Form::text('prohibiciones', null, ['class' => 'form-input block w-full mt-1' ]) !!}
                    </div>
                    <div class="mb-4 ">
                        {!! Form::label('actividades', 'Actividades') !!}
                        {!! Form::text('actividades', null, ['class' => 'form-input block w-full mt-1' ]) !!}
                    </div>
                    <div class="mb-4 ">
                        {!! Form::label('comments', 'Comentarios') !!}
                        {!! Form::text('comments', null, ['class' => 'form-input block w-full mt-1' ]) !!}
                    </div>
                    <div class="mb-4">
                        {!! Form::submit('Actualizar información', ['class' => 'btn btn-primary']) !!}
                    </div>
                {!! Form::close() !!}
                        

            </div>
        </div>

    </div>
</x-app-layout>