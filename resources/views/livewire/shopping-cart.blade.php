<div class="container py-8">
    {{-- Success is as dangerous as failure. --}}
    <section class="bg-white rounded-lg shadow-lg p-6 text-gray-700">
        <h1 class="text-lg font-bold mb-6">CARRO DE COMPRAS</h1>

        @if (Cart::count())           
        

            <table class="table-auto w-full">
                <thead>
                    <tr>
                        <th></th>
                        <th>Precio</th>
                        <th>Cant. Horas</th>
                        <th>Total</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach (Cart::content() as $item)
                    
                        <tr>
                            <td>
                                <div class="flex">
                                    <img class="h-15 w-20 object-cover mr-4" src="{{$item->options->image}}" alt="">
                                    <div>
                                        <p class="font-bold">{{$item->name}}</p>
                                    </div>
                                </div>
                            </td>
                            <td class="text-center">
                                <span>${{$item->price}} MXN</span>
                                <a class="ml-6 cursor-pointer hover:text-red-600" 
                                wire:click="delete('{{$item->rowId}}')" 
                                wire:loading.class="text-red-600 opacity-25"
                                wire:target="delete('{{$item->rowId}}')">
                                    <i class="fas fa-trash"></i>
                                </a>
                            </td>
                            <td>
                                <div class="flex justify-center">
                                    @livewire('update-cart-item', ['rowId' => $item->rowId], key($item->rowId))
                                </div>
                            </td>
                            <td class="text-center">
                                ${{$item->price * $item->qty}} MXN
                            </td>
                        </tr>

                    @endforeach
                </tbody>
            </table>

            <a class="text-sm cursor-pointer hover:underline mt-3 inline-block" wire:click="destroy">
                <i class="fas fa-trash"></i>
                Borrar carrito de compras</a>

        @else
            <div class="flex flex-col items-center">
                <i class="fas fa-shopping-cart"></i>
                <p class="text-lg text-gray-700 mt-4">TU CARRO DE COMPRAS ESTÁ VACÍO</p>
                <br>
                <a class="btn btn-danger" href="/">Ir al inicio</a>
            </div>
        @endif
    </section>

    @if (Cart::count())
        <div class="bg-white rounded-lg shadow-lg px-6 py-4 mt-4">
            <div class="flex justify-between items-center">
                <div>
                    <p class="text-gray-700 ">
                        <span class="font-bold text-lg">Total:</span>
                        ${{Cart::subTotal()}} MXN
                    </p>
                </div>

                <div>
                    <a class="btn btn-danger" href="{{route('orders.create')}}">Continuar</a>
                </div>
            </div>
        </div>
        
    @endif
</div>
