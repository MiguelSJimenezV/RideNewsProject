<section class="py-8" id="contact">
    <div class="container mx-auto px-5">
        <h2 class="text-2xl font-semibold mb-4">Contáctanos</h2>
        <p class="mb-6 max-w-2xl">
            ¡Únete a nuestra comunidad o ponte en contacto con nosotros hoy mismo!
            Completa el formulario a continuación para empezar. Nuestro equipo
            estará encantado de ayudarte en lo que necesites.
        </p>
        <form action="{{ route('contact.store') }}" method="POST" class="max-w-4xl mx-auto">
            @csrf

            <div class="relative z-0 w-full mb-5 group">
                <label for="name" class="block text-sm font-medium mb-1">Nombre</label>
                <input type="text" name="name" id="name" placeholder="Miguel Jimenez"
                    class="form-input w-full border-gray-300 rounded-lg shadow-sm" required />
            </div>



            <div class="relative z-0 w-full mb-5 group">
                <label for="email" class="block text-sm font-medium mb-1">E-mail</label>
                <input type="email" name="email" id="email" placeholder="example@gmail.com"
                    class="form-input w-full border-gray-300 rounded-lg shadow-sm" required />
            </div>

            <div class="relative z-0 w-full mb-5 group">
                <label for="mensaje" class="block text-sm font-medium mb-1">Mensaje</label>
                <textarea name="mensaje" id="mensaje" class="form-input w-full border-gray-300 rounded-lg shadow-sm" required>
                </textarea>

            </div>

            <button id="btn" type="submit"
                class="my-3 inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                Enviar
                <svg class="rtl:rotate-180 w-3.5 h-3.5 ms-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                    fill="none" viewBox="0 0 14 10">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M1 5h12m0 0L9 1m4 4L9 9" />
                </svg>
            </button>
        </form>

    </div>
</section>
