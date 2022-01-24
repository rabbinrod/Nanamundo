<x-app-layout>
    <div class="container py-8 grid grid-cols-5">
        <aside>
            <h1 class="font-bold text-lg mb-4">Información cliente</h1>
            <ul class="text-gray-600">
                <li>
                    <a class="leading-7 mb-1 border-l-4 border-transparent pl-2" href="{{route('cliente.services.index')}}">Servicios</a>
                </li>
                <li>
                    <a class="leading-7 mb-1 border-l-4 border-transparent pl-2 " href="{{route('cliente.hijos.index')}}">Hijos</a>
                </li>
                <li>
                    <a class="leading-7 mb-1 border-l-4 border-indigo-400 pl-2" href="">Direcciones</a>
                </li>
            </ul>            
        </aside>
        <div class="col-span-4 card">
            <div class="card-body text-gray-600">
                <h1 class="text-2xl font-bold">LISTA DE DIRECCIONES</h1>
                <hr class="mt-2 mb-8">

                    <x-table-responsive>
                            <br>
                            <a class="bg-transparent hover:bg-blue-500 text-blue-700 font-semibold hover:text-white py-2 px-4 border border-blue-500 hover:border-transparent rounded" href="{{route('cliente.direcciones.create')}}">Agregar dirección</a>
                            <table class="min-w-full divide-y divide-gray-200 mt-6">
                                <thead class="bg-gray-50">
                                <tr>
                                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                        Calle
                                    </th>
                                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                        Colonia
                                    </th>
                                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                        Numero Int
                                    </th>
                                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                        Numero Ext
                                    </th>
                                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                        C.P.
                                    </th>
                                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                        Telefono
                                    </th>
                                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                        Referencias
                                    </th>
                                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                    Acciones
                                    </th>
                                </tr>
                                </thead>
                                    @foreach ($direcciones as $direccione)                                        
                                                                                       
                                        <tbody class="bg-white divide-y divide-gray-200">
                                        <tr>
                                            <td class="px-6 py-4 whitespace-nowrap">
                                                <div class="flex items-center">
                                                    <div class="ml-4">
                                                        <div class="text-sm font-medium text-gray-900">
                                                            {{$direccione->calle}} 
                                                        </div>            
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="px-6 py-4 whitespace-nowrap">
                                                <div class="text-sm text-gray-900">{{$direccione->colonia}}</div>                                
                                            </td>
                                            <td class="px-6 py-4 whitespace-nowrap">                                                
                                                <div class="text-sm text-gray-900">{{$direccione->num_int}}</div>    
                                            </td>
                                            <td class="px-6 py-4 whitespace-nowrap">                                                
                                                <div class="text-sm text-gray-900">{{$direccione->num_ext}}</div>    
                                            </td>
                                            <td class="px-6 py-4 whitespace-nowrap">                                                
                                                <div class="text-sm text-gray-900">{{$direccione->cp}}</div>    
                                            </td>
                                            <td class="px-6 py-4 whitespace-nowrap">                                                
                                                <div class="text-sm text-gray-900">{{$direccione->phone}}</div>    
                                            </td>
                                            <td class="px-6 py-4 whitespace-nowrap">                                                
                                                <div class="text-sm text-gray-900">{{$direccione->referencias}}</div>    
                                            </td>
                                            <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                                                <a class="mr-4" href="{{route('cliente.direcciones.edit', $direccione)}}">Editar</a>
                                                <a class="mr-4" href="">Eliminar</a>                            
                                            </td>
                                        </tr>             
                                        <!-- More people... -->
                                        </tbody>
                                    @endforeach  
                            </table>
                    </x-table-responsive>        

            </div>
        </div>

    </div>
</x-app-layout>