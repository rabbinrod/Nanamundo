<div>
    {{-- If your happiness depends on money, you will never be happy with yourself. --}}
    <div class="container py-8 grid grid-cols-5">
        <aside>
            <h1 class="font-bold text-lg mb-4">Información cliente</h1>
            <ul class="text-gray-600">
                <li>
                    <a class="leading-7 mb-1 border-l-4 border-indigo-400 pl-2" href="">Servicios</a>
                </li>
                <li>
                    <a class="leading-7 mb-1 border-l-4 border-transparent pl-2 " href="{{route('cliente.hijos.index')}}">Hijos</a>
                </li>
                <li>
                    <a class="leading-7 mb-1 border-l-4 border-transparent pl-2" href="{{route('cliente.direcciones.index')}}">Direcciones</a>
                </li>
            </ul>
            
        </aside>
        <div class="col-span-4 card">
            <div class="card-body text-gray-600">
                <h1 class="text-2xl font-bold">INFORMACION SERVICIOS</h1>
                <hr class="mt-2 mb-6">

                    <x-table-responsive>
                            
                            <table class="min-w-full divide-y divide-gray-200">
                                <thead class="bg-gray-50">
                                <tr>
                                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                    Nombre
                                    </th>
                                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                    Direccion
                                    </th>
                                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                    Status
                                    </th>
                                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                    Horas
                                    </th>
                                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                    Total
                                    </th>
                                </tr>
                                </thead>
                                    @foreach ($services as $service)                                                     
                                        <tbody class="bg-white divide-y divide-gray-200">
                                        <tr>
                                            <td class="px-6 py-4 whitespace-nowrap">
                                                <div class="flex items-center">
                                                    <div class="flex-shrink-0 h-10 w-10">
                                                    <img class="h-10 w-10 rounded-full" src="{{Storage::url($service->image->url)}}" alt="">
                                                    </div>
                                                    <div class="ml-4">
                                                    <div class="text-sm font-medium text-gray-900">
                                                        {{$service->name}}
                                                    </div>            
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="px-6 py-4 whitespace-nowrap">
                                                <div class="text-sm text-gray-900">Regional Paradigm Technician</div>                                
                                            </td>
                                            <td class="px-6 py-4 whitespace-nowrap">
                                                @switch($service->status)
                                                    @case(1)
                                                        <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-yellow-100 text-yellow-800">
                                                            Pendiente
                                                        </span>
                                                        @break
                                                    @case(2)
                                                        <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-100 text-green-800">
                                                            Aprobado
                                                        </span>
                                                        @break
                                                        @case(3)
                                                            <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-red-100 text-red-800">
                                                                Rechazado
                                                            </span>
                                                        @break
                                                        @case(4)
                                                            <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-blue-100 text-blue-800">
                                                                Finalizado
                                                            </span>
                                                        @break
                                                    @default
                                                        
                                                @endswitch
                                                
                                            </td>
                                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500 text-center">
                                                1
                                            </td>
                                            <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                                                99.00
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
</div>
