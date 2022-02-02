<x-app-layout>

    <section class="bg-gray-700 py-12 mb-12">
        <div class="container grid grid-cols-1 lg:grid-cols-2 gap-6">
            <figure>
                <img class="h-60 w-full object-cover" src="{{Storage::url($service->image->url)}}" alt="">
            </figure>

            <div class="text-white">
                <h1 class="text-4xl mb-6">{{$service->name}}</h1>
                <p class="mb-4"><i class="far fa-file-alt"></i> Descrpcion: {{$service->descripcion}}</p>
                <p class="mb-4"><i class="far fa-star"></i> Calificacion: {{$service->calificacion}} </p>
                <p class="mb-4"><i class="fas fa-users"></i> Usuarios que contrataron el servicio: {{$service->users_count}} </p>
            </div>
        </div>
    </section>
    <div class="container grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3">
        <div class="col-span-2">
            <section class="card">
                <div class="card-body">
                    <h1 class="font-bold text-2xl mb-2">Antes de contratar</h1>
                    <ul class="grid grid-cols-2 gap-x-6 gap-y-2">
                        @foreach ($service->requirements as $requirement)
                            <li class="text-gray-700 text-base"><i class="fas fa-check-circle mr-2"></i>{{$requirement->name}}</li>
                        @endforeach
                    </ul>
                </div>
            </section>
        </div>

        <div>
            <section class="card">
                <div class="card-body">

                    <p class="text-2xl font-bold text-gray-500 mt-3 mb-2">${{$service->precio}} MXN</p>
                    @livewire('add-cart-item', ['service' => $service])
                    
                     {{-- 
                        <form action="{{route('service.enrolled', $service)}}" method="POST"> 
                            @csrf
                            <p class="text-2xl font-bold text-gray-500 mt-3 mb-2">${{$service->precio}} MXN</p>
                        
                            <button class="btn btn-danger btn-block" type="submit">Contratar</button>

                        </form>

                    <p class="text-2xl font-bold text-gray-500 mt-3 mb-2">${{$service->precio->value}} MXN</p>
                    <a class="btn btn-danger btn-block" href="{{route('orders.create')}}">Contratar</a>
                    --}}
                </div>
            </section>
        </div>
    </div>



</x-app-layout>