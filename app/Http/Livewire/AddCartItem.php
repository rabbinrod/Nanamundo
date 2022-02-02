<?php

namespace App\Http\Livewire;

use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Support\Facades\Storage;
use Livewire\Component;

class AddCartItem extends Component
{
    public $service, $qty = 1, $quantity=8;
    public $options = [];

    public function mount(){
        $this->options['image'] = Storage::url($this->service->image->url);
    }

    public function decrement(){
        $this->qty = $this->qty - 1;
    }

    public function increment(){
        $this->qty = $this->qty + 1;
    }

    public function addItem(){
        Cart::add(['id' => $this->service->id,
             'name' => $this->service->name,
             'qty' => $this->qty,
             'price' => $this->service->precio,
             'weight' => 550,
             'options' => $this->options
            ]);

        $this->emitTo('dropdown-cart', 'render');
    }

    public function render()
    {
        return view('livewire.add-cart-item');
    }
}
