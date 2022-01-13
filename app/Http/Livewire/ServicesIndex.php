<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Service;

class ServicesIndex extends Component
{
    public function render()
    {
        $services = Service::all();
        return view('livewire.services-index', compact('services'));
    }
}
