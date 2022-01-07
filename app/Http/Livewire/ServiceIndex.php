<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Service;

class ServiceIndex extends Component
{
    public function render()
    {
        $services = Service::all();
        return view('livewire.service-index', compact('services'));
    }
}
