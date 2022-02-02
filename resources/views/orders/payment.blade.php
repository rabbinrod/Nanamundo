<x-app-layout>
    <div class="container py-8">
        <div class="bg-white rounded-lg shadow-lg px-6 py-4 mb-6">
            <p class="text-gray-700 uppercase "><span class="font-semibold">Número de la orden: </span>orden-{{$order->id}}</p>
        </div>
        <div class="bg-white rounded-lg shadow-lg p-6 mb-6">
            <div class="grid grid-cols-2 gap-6">
                <div>
                    <p class="text-lg font-semibold uppercase">Dirección</p>
                    
                    <p class="text-sm">El servicio se llevará a cabo en:</p>
                    <p class="text-sm">Calle {{$order->direccion->calle}}, Colonia {{$order->direccion->colonia}},                    
                    </p>
                    <p class="text-sm">Num. Int {{$order->direccion->num_int}}, Num. Ext. {{$order->direccion->num_ext}} 
                        C.P. {{$order->direccion->cp}}</p>
                    <p class="text-sm">Telefono: {{$order->direccion->phone}}</p>
                    <p class="text-sm">Referencias: {{$order->direccion->referencias}}</p>                    
                </div>

                <div>
                    <p class="text-lg font-semibold uppercase">Datos de la cita</p>
                    <p class="text-sm">La cita se llevará a cabo:</p>
                    <p class="text-sm">Fecha: {{$order->fecha}}</p>
                    <p class="text-sm">Hora: {{$order->hora}}</p>
                </div>
            </div>
        </div>

        <div class="bg-white rounded-lg shadow-lg p-6 text-gray-700 mb-6">
            <p class="text-xl font-semibold mb-4">RESUMEN</p>
            <table class="table-auto w-full">
                <thead>
                    <tr>
                        <th></th>
                        <th>Precio</th>
                        <th>Cant. Horas</th>
                        <th>Total</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-gray-200">
                    @foreach ($items as $item)
                    <tr>
                        <td>
                            <div class="flex">
                                <img class="h-15 w-20 object-cover mr-4" src="{{$item->options->image}}" alt="">
                                <article>
                                    <h1 class="font-bold">{{$item->name}}</h1>
                                </article>
                            </div>
                        </td>
                        <td class="text-center">${{$item->price}} MXN</td>
                        <td class="text-center">{{$item->qty}}</td>
                        <td class="text-center">${{$item->price * $item->qty}} MXN</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>

        <div class="bg-white rounded-lg shadow-lg p-6 flex justify-between items-center">
            <img class="h-12" src="{{asset('img/home/mercadopago.png')}}" alt="">
            <div class="text-gray-700">
                <p class="text-lg font-semibold uppercase">Pago: ${{$order->total}} MXN</p>
            </div>
        </div>

    </div>
</x-app-layout>