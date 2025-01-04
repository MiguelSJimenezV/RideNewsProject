<section class="bg-none py-8 px-4">
    <div class="container mx-auto">
        <h2 class="text-center text-2xl font-semibold mb-8">Nuestros Servicios</h2>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
            <!-- Servicio 1 -->
            <x-card image="{{ asset('images/maps.png') }}" title="Mapa Interactivo"
                description="Accede a un mapa diseñado para motociclistas con puntos de encuentro, eventos, estaciones de servicio, talleres, hospitales y radares, todo en un solo lugar."
                link="https://www.google.com.ar/maps/@-34.6000793,-58.4105205,12.5z?entry=ttu&g_ep=EgoyMDI0MDkyNC4wIKXMDSoASAFQAw%3D%3D"
                linkText="Explorar mapa" posted="" />

            <!-- Servicio 2 -->
            <x-card image="{{ asset('images/user.png') }}" title="Perfil Personalizado"
                description="Crea un perfil donde puedes subir fotos, compartir tus experiencias en moto y conectar con otros motociclistas. Sé parte de la comunidad RideHub."
                link="{{ route('register') }}" linkText="Crear perfil" posted="" />

            <!-- Servicio 3 -->
            <x-card image="{{ asset('images/msg.png') }}" title="Chat en Tiempo Real"
                description="Chatea en tiempo real, organiza rodadas, comparte ubicaciones y mantente en contacto con amigos y grupos durante tus viajes."
                link="{{ url('/blog') }}" linkText="Abrir chat" posted="" />

            <!-- Servicio 4 -->
            <x-card image="{{ asset('images/soporte.png') }}" title="Asistencia en Ruta"
                description="Solicita ayuda mecánica, remolque o asistencia de emergencia cuando lo necesites, asegurándote que siempre tendrás soporte en el camino."
                link="#contact" linkText="Pedir asistencia" posted="" />
        </div>

    </div>
</section>
