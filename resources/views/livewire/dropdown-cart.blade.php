<div>
    {{-- Be like water. --}}
    <x-jet-dropdown width="96">
        <x-slot name="trigger">
            <span class="relative inline-block">
            <i class="fas fa-shopping-cart cursor-pointer text-gray-400 text-xl"></i>
            @if (Cart::count())
            <span class="absolute top-0 right-0 inline-flex items-center justify-center px-2 py-1 text-xs font-bold leading-none text-red-100 transform translate-x-1/2 -translate-y-1/2 bg-red-600 rounded-full">{{Cart::count()}}</span>
            @else
                <span class="absolute top-0 right-0 inline-block w-2 h-2 transform translate-x-1/2 -translate-y-1/2 bg-red-600 rounded-full"></span>
            @endif            
            </span>
        </x-slot>

        <x-slot name="content">
            <ul>
                @forelse (Cart::content() as $item)
                    <li class="flex p-2 border-b border-gray-200">
                        <img class="h-15 w-20 object-cover mr-4" src="{{$item->options->image}}" alt="">

                        <article class="flex-1">
                            <h1 class="font-bold">{{$item->name}}</h1>
                            <p>Cant. Horas: {{$item->qty}}</p>
                            <p>${{$item->price}} MXN</p>
                        </article>
                    </li>
                @empty
                    <li class="py-6 px-4">
                        <p class="text-center text-gray-700">No tiene agregado ningun item en el carrito.</p>
                    </li>   
                @endforelse
            </ul>

            @if (Cart::count())
                
            <div class="py-2 px-3">
                <p class="text-lg text-gray-700 mt-2"><span class="font-bold">Total:</span> ${{Cart::subtotal()}} MXN</p>
            </div>

            <a href="{{route('shopping-cart')}}" class="btn btn-danger btn-block">
                Ir al carrito de compras
            </a>
            
            @endif
                               
        </x-slot>
    </x-jet-dropdown>
</div>
