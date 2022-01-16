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

    </div>
</x-app-layout>