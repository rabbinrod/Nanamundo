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
                    
                    @include('cliente.hijos.partials.form')

                    <div class="mb-4">
                        {!! Form::submit('Actualizar información', ['class' => 'btn btn-primary']) !!}
                    </div>
                {!! Form::close() !!}
                        

            </div>
        </div>

    </div>
</x-app-layout>