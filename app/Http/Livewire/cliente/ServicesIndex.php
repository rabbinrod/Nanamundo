<?php

namespace App\Http\Livewire\Cliente;

use Livewire\Component;
use App\Models\Service;

class ServicesIndex extends Component
{
    public function render()
    {
        $services = Service::where('user_id', auth()->user()->id)->get();
        return view('livewire.cliente.services-index', compact('services'));
    }
}
