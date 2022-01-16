<x-app-layout>
    {{-- PORTADA --}}
    <section class="bg-cover" style="background-image: url({{asset('img/home/child-g11145bde5_1920.jpg')}})">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-36">
            <div class="w-full md:w-3/4 lg:w-1/2 bg-indigo-300">
                <h1 class="text-white font-fold text-4xl">LOS MEJORES SERVICIOS AL CUIDADO DE LOS NIÑOS</h1>
                <p class="text-white text-lg mt-2">Aquí nos preocupamos por tus hijos para darles los mejores cuidados.</p>
            </div>
        </div>
    </section>

    <section class="mt-24">
        <h1 class="text-gray-600 text-center text-3xl mb-6">CONTENIDO</h1>

        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-x-6 gap-y-8">

            <article>
                <figure>
                    <img class="rounded-xl h-36 w-full object-cover" src="{{asset('img/home/children-g8a822b5da_640.jpg')}}" alt="">
                </figure>

                <header class="mt-2">
                    <h1 class="text-center text-xl text-gray-700">Servicios</h1>
                </header>

                <p class="text-sm text-gray-500">Lorem ipsum dolor sit amet consectetur adipisicing elit. Consectetur reiciendis perspiciatis sit ex, ipsam quod</p>

            </article>

            <article>
                <figure>
                    <img class="rounded-xl h-36 w-full object-cover" src="{{asset('img/home/happiness-gddd144a89_640.jpg')}}" alt="">
                </figure>

                <header class="mt-2">
                    <h1 class="text-center text-xl text-gray-700">¿Quienes somos?</h1>
                </header>

                <p class="text-sm text-gray-500">Lorem ipsum dolor sit amet consectetur adipisicing elit. Consectetur reiciendis perspiciatis sit ex, ipsam quod</p>

            </article>
            
            <article>
                <figure>
                    <img class="rounded-xl h-36 w-full object-cover" src="{{asset('img/home/rubber-duck-g6f384eca8_640.jpg')}}" alt="">
                </figure>

                <header class="mt-2">
                    <h1 class="text-center text-xl text-gray-700">FAQ'S</h1>
                </header>

                <p class="text-sm text-gray-500">Lorem ipsum dolor sit amet consectetur adipisicing elit. Consectetur reiciendis perspiciatis sit ex, ipsam quod</p>

            </article>
            
            <article>
                <figure>
                    <img class="rounded-xl h-36 w-full object-cover" src="{{asset('img/home/table-game-g615d40359_640.jpg')}}" alt="">
                </figure>

                <header class="mt-2">
                    <h1 class="text-center text-xl text-gray-700">Contacto</h1>
                </header>

                <p class="text-sm text-gray-500">Lorem ipsum dolor sit amet consectetur adipisicing elit. Consectetur reiciendis perspiciatis sit ex, ipsam quod</p>

            </article>


        </div>
    </section>

    <section class="mt-24 bg-gray-700 py-12">
        <h1 class="text-center text-white text-3xl">¿No sabes que servicio contratar?</h1>
        <p class="text-center text-white">Lorem ipsum dolor sit amet</p>
        <div class="flex justify-center mt-4">
            <a href="{{route('services.index')}}" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                Catalogo de servicios
            </a>
        </div>
    </section>

    <section class="mt-24">
        <h1 class="text-gray-600 text-center text-3xl">¿POR QUÉ ELEGIRNOS?</h1>
        <p class="text-center text-gray-500 text-sm mb-6">Lorem ipsum dolor sit, amet consectetur adipisicing elit.</p>

        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-x-6 gap-y-8">
            <article>
                <figure>
                    <img class="rounded-xl h-36 w-full object-cover" src="{{asset('img/home/children-g8a822b5da_640.jpg')}}" alt="">
                </figure>

                <header class="mt-2">
                    <h1 class="text-center text-xl text-gray-700">Niñeras seleccionadas</h1>
                </header>

                <p class="text-sm text-gray-500">Lorem ipsum dolor sit amet consectetur adipisicing elit. Consectetur reiciendis perspiciatis sit ex, ipsam quod</p>
            </article>
            <article>
                <figure>
                    <img class="rounded-xl h-36 w-full object-cover" src="{{asset('img/home/children-g8a822b5da_640.jpg')}}" alt="">
                </figure>

                <header class="mt-2">
                    <h1 class="text-center text-xl text-gray-700">Perfil de niñera</h1>
                </header>

                <p class="text-sm text-gray-500">Lorem ipsum dolor sit amet consectetur adipisicing elit. Consectetur reiciendis perspiciatis sit ex, ipsam quod</p>
            </article>
            <article>
                <figure>
                    <img class="rounded-xl h-36 w-full object-cover" src="{{asset('img/home/children-g8a822b5da_640.jpg')}}" alt="">
                </figure>

                <header class="mt-2">
                    <h1 class="text-center text-xl text-gray-700">Ubicacion de nana</h1>
                </header>

                <p class="text-sm text-gray-500">Lorem ipsum dolor sit amet consectetur adipisicing elit. Consectetur reiciendis perspiciatis sit ex, ipsam quod</p>
            </article>
            <article>
                <figure>
                    <img class="rounded-xl h-36 w-full object-cover" src="{{asset('img/home/children-g8a822b5da_640.jpg')}}" alt="">
                </figure>

                <header class="mt-2">
                    <h1 class="text-center text-xl text-gray-700">Diversion</h1>
                </header>

                <p class="text-sm text-gray-500">Lorem ipsum dolor sit amet consectetur adipisicing elit. Consectetur reiciendis perspiciatis sit ex, ipsam quod</p>
            </article>
        </div>
        <div class="flex justify-center mt-4">
            <a href="#" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                Más información
            </a>
        </div>
    </section>

    <section class="mt-24">
        <h1 class="text-center text-3xl text-gray-600">NUESTROS SERVICIOS</h1>
        <p class="text-center text-gray-500 text-sm mb-6">Lorem ipsum dolor sit amet consectetur adipisicing elit. Saepe consequuntur .</p>

        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 grid sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-x-6 gap-y-8">
            @foreach ($services as $service)
                <x-service-card :service="$service"/>
            @endforeach

        </div>
    </section>

    <section class="mt-24">
        <x-footer/>
    </section>
</x-app-layout>
