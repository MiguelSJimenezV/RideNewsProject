<section class="bg-none dark:bg-none">
    <section class="p-5">
        <div class="container mx-auto">
            <div class="grid grid-cols-2">
                <div class="flex flex-wrap">
                    <div class="w-full md:w-1/2 p-5">
                        <h2 class="text-lg font-semibold">Beneficios</h2>
                        <p class="text-2xl font-bold mb-4">Conéctate con otros motociclistas</p>
                        <p class="bg-gray-900 p-6 text-white rounded-lg shadow-md">
                            RideHub te permite unirte a una comunidad apasionada por las motos, compartir tus rutas,
                            experiencias y participar en los mejores eventos y rodadas. ¡Conéctate, crea nuevas
                            amistades y disfruta del viaje!
                        </p>
                        <div>
                            <a href="{{ url('/blog') }}"
                                class="my-3 inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                                Únete ahora
                                <svg class="rtl:rotate-180 w-3.5 h-3.5 ms-2" aria-hidden="true"
                                    xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                        stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9" />
                                </svg>
                            </a>
                            <button id="shareButton"
                                class="my-3 inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                                Compartir
                                <svg class="rtl:rotate-180 w-3.5 h-3.5 ms-2" aria-hidden="true"
                                    xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                        stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9" />
                                </svg>
                            </button>
                        </div>
                    </div>
                </div>
                <div class="w-full md:w-1/2">
                    <div class="grid grid-cols-1 gap-4 p-8">
                        <img src="{{ asset('images/panigale.png') }}" alt="imagen"
                            class="  w-full h-full rounded-xl shadow-xl">
                    </div>
                </div>
            </div>
        </div>
    </section>

</section>
