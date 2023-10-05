<x-layouts.app title="home" meta-description="home meta description">

    <header class="bg-primary text-white text-center py-5">
        <div class="container">
            <h1>Bienvenido a ExpresTour</h1>
            <p class="lead">Tu portal para experiencias de viaje inolvidables</p>
        </div>
    </header>

    <section id="por-que-elegirnos" class="container my-5">
    <div class="container">
        <h2 class="text-center">¿Por qué elegirnos?</h2>
        <div class="row">
            <div class="col-md-4 text-start seccion">
                <h3>Destinos Exclusivos</h3>
                <p>Nos enorgullece ofrecerte destinos únicos y emocionantes en todo el mundo. Desde playas tropicales hasta ciudades históricas, tenemos algo para cada tipo de viajero.</p>
                <div class="imagen1">
                    <img src="{{asset('img/laguna.jpg')}}" alt="Destinos Exclusivos" class="img-fluid">
                </div>
            </div>
            <div class="col-md-4 text-start seccion">

                <h3>Experiencias a Medida</h3>
                <p>Sabemos que cada viajero es diferente, por lo que personalizamos cada viaje según tus preferencias y necesidades. Tu satisfacción es nuestra máxima prioridad.</p>
                <div class="imagen1">
                    <img src="{{asset('img/experiencia.avif')}}" alt="experiencia" class="img-fluid">
                </div>
            </div>
            <div class="col-md-4 text-start seccion">
                <h3>Equipo de Expertos</h3>
                <p>Nuestro equipo de expertos en turismo está listo para brindarte asesoramiento y recomendaciones para que tu viaje sea perfecto. ¡Déjanos encargarnos de los detalles para que tú puedas relajarte y disfrutar!</p>
                <div class="imagen1">
                    <img src="{{asset('img/expertos.jpg')}}" alt="expertos" class="img-fluid">
                </div>
            </div>
        </div>
    </div>
</section>

    <section id="nuestros-servicios" class="bg-light py-6">
        <div class="container">
            <h2 class="text-center">Nuestros Servicios</h2>
            <div class="row">
                <div class="col-md-3">
                    <h4>Alojamiento de lujo</h4>
                </div>
                <div class="col-md-3">
                    <h4>Transporte seguro y cómodo</h4>
                </div>
                <div class="col-md-3">
                    <h4>Excursiones y actividades emocionantes</h4>
                </div>
                <div class="col-md-3">
                    <h4>Asesoramiento personalizado</h4>
                </div>
            </div>
        </div>
    </section>

    <footer class="bg-dark text-white text-center py-3">
        <div class="container">
            <p>&copy; 2023 ExpresTour. Todos los derechos reservados.</p>
        </div>
    </footer>

</x-layouts.app>