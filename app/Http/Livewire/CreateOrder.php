<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Direccion;
use App\Models\Hijo;
use App\Models\Order;
use Gloudemans\Shoppingcart\Facades\Cart;

class CreateOrder extends Component
{
    public $direcciones, $hijos;
    public $hora, $fecha, $total, $content;
    public $direccion_id = "", $hijo_id = "";

    public $rules = [
        'hora' => 'required',
        'fecha' => 'required',
        'direccion_id' => 'required',
        'hijo_id' => 'required'
    ];

    public function mount(){
        $this->direcciones = Direccion::where('user_id', auth()->user()->id)->get();
        $this->hijos = Hijo::where('user_id', auth()->user()->id)->get();
    }

   public function create_order(){
        $rules = $this->rules;
        $this->validate($rules);

        $order = new Order();
        $order->user_id = auth()->user()->id;
        $order->fecha = $this->fecha;
        $order->hora = $this->hora;
        $order->total = Cart::subtotal();
        $order->content = Cart::content();
        $order->hijo_id = auth()->user()->id;
        $order->direccion_id = auth()->user()->id;

        $order->save();

        Cart::destroy();       

       return redirect()->route('orders.payment', $order);
    }

    public function render()
    {
        return view('livewire.create-order');
    }
}
