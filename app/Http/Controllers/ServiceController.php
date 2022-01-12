<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Service;

class ServiceController extends Controller
{
    public function index(){
        return view('services.index');
    }

    public function show(Service $service){
        return view('services.show', compact('service'));
    }

    public function enrolled(Service $service){
        $service->users()->attach(auth()->user());

        return redirect()->route('services.cita', $service);
    }

   /* public function cita(Service $service){
        return view('services.cita', compact('service'));
    } */
}
