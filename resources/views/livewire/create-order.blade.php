<div class="container py-8 grid grid-cols-5 gap-6">
    {{-- Do your work, then step back. --}}
    <div class="col-span-3">
        <p class="mt-6 mb-3 text-lg text-gray-700 font-semibold">Información adicional</p>
        <div class="bg-white rounded-lg shadow p-6">
            <div>
                <x-jet-label value="Seleecionar direccion"/>
                <select class="form-control w-full" wire:model="direccion_id">
                    <option value="" disabled selected>Seleccione una direccion</option>

                    @foreach ($direcciones as $direccione)
                        <option value="{{$direccione->id}}">{{$direccione->calle}}</option>
                    @endforeach
                </select>
                <x-jet-input-error for="direccion_id"/>
            </div>
            <div class="mt-4">
                <x-jet-label value="Seleecionar hijo"/>
                <select class="form-control w-full" wire:model="hijo_id">
                    <option value="" disabled selected>Seleccione un hijo</option>
                    
                    @foreach ($hijos as $hijo)
                        <option value="hijo_id">{{$hijo->name}}</option>
                    @endforeach
                </select>
                <x-jet-input-error for="hijo_id"/>
            </div>
            <div class="mt-4">
                <x-jet-label value="Seleccione una fecha"/>
                <x-jet-input wire:model="fecha" type="date"/>                
                <x-jet-input-error for="fecha"/>
            </div>
            <div class="mt-4">
                <x-jet-label value="Ingrese hora del servicio"/>
                <x-jet-input wire:model="hora" type="time" min="00:00" max="24:00" value="00:00"/>
                <x-jet-input-error for="hora"/>
            </div>
            <div>
                <x-jet-button class="mt-6 mb-4" 
                wire:loading.attr="disabled"
                wire:target="create_order"
                wire:click="create_order">
                    Continuar la compra
                </x-jet-button>

                <hr>
                <p class="text-sm text-gray-700 mt-2">Lorem ipsum dolor sit amet consectetur adipisicing elit. Repudiandae porro velit rerum eveniet <a href="" class="font-semibold text-red-500">Politicas y privacidad</a></p>
            </div>
        </div>        
    </div>
    <div class="col-span-2">
        <div class="bg-white rounded-lg shadow p-6">
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
            
            <hr class="mt-4 mb-3">
            <div class="text-gray-700">
                <p class="flex justify-between items-center font-semibold">                    
                    <span class="text-lg">Total</span>
                    ${{Cart::subtotal()}} MXN
                </p>
                
            </div>
        </div>
    </div>
</div>
