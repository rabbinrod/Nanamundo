<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Service;

class HomeController extends Controller
{
    public function __invoke(){

        $services = Service::all();
        
        return view('welcome', compact('services'));
    }
}
