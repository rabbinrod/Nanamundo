<x-app-layout>
    @php
        // SDK de Mercado Pago
        require base_path('vendor/autoload.php');
        // Agrega credenciales
        MercadoPago\SDK::setAccessToken(config('services.mercadopago.token'));

        // Crea un objeto de preferencia
        $preference = new MercadoPago\Preference();

        // Crea un ítem en la preferencia
        foreach ($items as $product) {
            $item = new MercadoPago\Item();
            $item->title = $product->name;
            $item->quantity = $product->qty;
            $item->unit_price = $product->price;

            $products[] = $item;
        }

        $preference->back_urls = array(
            "success" => "https://www.tu-sitio/success",
            "failure" => "http://www.tu-sitio/failure",
            "pending" => "http://www.tu-sitio/pending"
        );
        
        $preference->auto_return = "approved";

        $preference->items = $products;
        $preference->save();
    @endphp

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

                <div class="cho-container">

                </div>
            </div>
        </div>

    </div>

    <script src="https://sdk.mercadopago.com/js/v2"></script>

    <script>
        // Agrega credenciales de SDK
        const mp = new MercadoPago("{{config('services.mercadopago.key')}}", {
          locale: "es-AR",
        });
      
        // Inicializa el checkout
        mp.checkout({
          preference: {
            id: "{{$preference->id}}",
          },
          render: {
            container: ".cho-container", // Indica el nombre de la clase donde se mostrará el botón de pago
            label: "Pagar", // Cambia el texto del botón de pago (opcional)
          },
        });
      </script>

</x-app-layout>