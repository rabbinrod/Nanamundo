<div>
    {{-- If you look to others for fulfillment, you will never truly be fulfilled. --}}
    <div class="flex justify-between items-center my-4">
        <p class="text-xl font-bold text-gray-500">Cant. Horas </p>
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
    <div class="my-2">
        <x-jet-button class="btn btn-danger btn-block" 
        wire:click="addItem"
        wire:loading.attr="disabled"
        wire:target="addItem">
            Agregar al carrito
        </x-jet-button>
    </div>
</div>
