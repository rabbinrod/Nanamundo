<div class="container py-8 grid grid-cols-5 gap-6">
    {{-- Do your work, then step back. --}}
    <div class="col-span-3">
        <p class="mt-6 mb-3 text-lg text-gray-700 font-semibold">Información adicional</p>
        <div class="bg-white rounded-lg shadow p-6">
            <div>
                <x-jet-label value="Seleecionar direccion"/>
                <select class="form-control w-full" wire:model="direccion_id">
                    @foreach ($direcciones as $direccione)
                        <option value="{{$direccione->id}}">{{$direccione->calle}}</option>
                    @endforeach
                </select>
                <x-jet-input-error for="direccion_id"/>
            </div>
            <div class="mt-4">
                <x-jet-label value="Seleecionar hijo"/>
                <select class="form-control w-full" wire:model="hijo_id">
                    @foreach ($hijos as $hijo)
                        <option value="{{$hijo->id}}">{{$hijo->name}}</option>
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
                <x-jet-button class="mt-6 mb-4" wire:click="create_order">
                    Continuar la compra
                </x-jet-button>

                <hr>
                <p class="text-sm text-gray-700 mt-2">Lorem ipsum dolor sit amet consectetur adipisicing elit. Repudiandae porro velit rerum eveniet <a href="" class="font-semibold text-red-500">Politicas y privacidad</a></p>
            </div>
        </div>        
    </div>
    <div class="col-span-2">
        <div class="bg-white rounded-lg shadow p-6">
            <article class="">
               <img class="h-12 w-12 object-cover" src="{{Storage::url($service->image->url)}}">
                <h1 class="text-lg ml-2">{{$service->name}}</h1>
            </article>
            
            <hr class="mt-4 mb-3">
            <div class="text-gray-700 ">
                <p class="flex justify-between items-center">Subtotal
                    <span class="font-semibold">${{$service->precio}} MXN</span>
                </p>
                    <div class="flex justify-between items-center">
                        <p>Cant. Horas </p>
                        <div x-data>
                            <x-jet-secondary-button disabled                            
                            x-bind:disabled="$wire.qty <= 1"
                            wire:loading.attr="disabled"
                            wire:target="decrement" 
                            wire:click="decrement">
                                -
                            </x-jet-secondary-button>
                            <span class="mx-2 text-gray-700">{{$qty}}</span>
                            <x-jet-secondary-button disabled                            
                            x-bind:disabled="$wire.qty >= $wire.quantity"
                            wire:loading.attr="disabled"
                            wire:target="increment"
                            wire:click="increment">
                                +
                            </x-jet-secondary-button>
                        </div>
                    </div>

                

                <hr class="mt-4 mb-3">
                <p class="flex justify-between items-center ont-semibold">
                    <span class="text-lg">Total</span>
                   {{($qty * $service->precio)}} MXN
                </p>
                
            </div>
        </div>
    </div>
</div>
