<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Direccion;
use App\Models\Hijo;
use App\Models\Order;
use App\Models\Service;

class CreateOrder extends Component
{
    public $direcciones, $hijos, $service, $qty = 1, $quantity=8;
    public $hora, $fecha, $total, $content, $direccion_id, $hijo_id;

    public $rules = [
        'hora' => 'required',
        'fecha' => 'required',
        'direccion_id' => 'required',
        'hijo_id' => 'required'
    ];

    public function mount(Service $service){
        $this->direcciones = Direccion::where('user_id', auth()->user()->id)->get();
        $this->hijos = Hijo::where('user_id', auth()->user()->id)->get();
        $this->service = $service;
    }

    public function decrement(){
        $this->qty = $this->qty - 1;
    }

    public function increment(){
        $this->qty = $this->qty + 1;
    }

   public function create_order(){
        $rules = $this->rules;
        $this->validate($rules);

        $order = new Order();
        $order->user_id = auth()->user()->id;
        $order->qty = $this->qty;
        $order->total = $this->total;
        $order->fecha = $this->fecha;
        $order->hora = $this->hora;
    }

    public function render()
    {
        return view('livewire.create-order');
    }
}
