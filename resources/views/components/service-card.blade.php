@props(['service'])

<article class="card">
    <img class="h-36 w-full object-cover" src="{{Storage::url($service->image->url)}}" alt="">

    <div class="card-body">
        <h1 class="card-title">{{Str::limit($service->name, 20)}}</h1>
        <p class="text-gray-500 text-sm mb-2">Description: {{Str::limit($service->descripcion, 40)}}</p>

        <div class="flex">
            <ul class="flex text-sm">
                <li class="mr-1"><i class="fas fa-star text-{{$service->calificacion >= 1 ? 'yellow' : 'gray'}}-400"></i></li>
                <li class="mr-1"><i class="fas fa-star text-{{$service->calificacion >= 2 ? 'yellow' : 'gray'}}-400"></i></li>
                <li class="mr-1"><i class="fas fa-star text-{{$service->calificacion >= 3 ? 'yellow' : 'gray'}}-400"></i></li>
                <li class="mr-1"><i class="fas fa-star text-{{$service->calificacion >= 4 ? 'yellow' : 'gray'}}-400"></i></li>
                <li class="mr-1"><i class="fas fa-star text-{{$service->calificacion == 5 ? 'yellow' : 'gray'}}-400"></i></li>
            </ul>
            <p class="text-sm text-gray-500 ml-auto"><i class="fas fa-users"> ({{$service->users_count}}) </i></p>
        </div>
        
        <a href="{{route('services.show', $service)}}" class="mt-4 btn btn-primary btn-block">
            Más información
        </a>
    </div>

</article>