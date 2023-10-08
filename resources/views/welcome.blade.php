<x-layouts.app title="home" meta-description="home meta description">
    <header>
        <div class="cont-slider">
            <div class="row">
                <div class="imagenhead col-md-7 ">
                    <img src="img/huanucoletra.jpg" alt="">
                </div>
                <div class=" text-slider col-md-5">
                    <div class="info-banner">
                        <h2>Huanuco el mejor clima del mundo.</h2>
                        <p>No pierdas la oportunidad de conocer los diferentes climas que esta ciudad te ofrese ven y
                            visitanos.</p>
                    </div>

                </div>
            </div>
        </div>
    </header>
    <main>
        <section class="sec-informe">
            <div class="container-fluid">
                <div class="titulo d-flex">
                    <h2 class="text-center">¿Por qué elegirnos?</h2>
                </div>
                <div class="row">
                    <div class="col-md-4 text-center seccion">
                        <h3>Destinos Exclusivos</h3>
                        <p class=" w-100">Nos enorgullece ofrecerte destinos únicos y emocionantes en todo el mundo.
                            Desde playas tropicales hasta ciudades históricas, tenemos algo para cada tipo de viajero.
                        </p>
                        <div class="d-flex align-items-center justify-content-center">
                            <img src="{{ asset('img/laguna.jpg') }}" alt="Destinos Exclusivos" class="img-responsive"
                                width="400" height="200">
                        </div>
                    </div>
                    <div class="col-md-4 text-center seccion">

                        <h3>Experiencias a Medida</h3>

                        <p class=" w-100">Sabemos que cada viajero es diferente, por lo que personalizamos cada viaje
                            según tus preferencias y necesidades. Tu satisfacción es nuestra máxima prioridad.</p>

                        <div class="d-flex align-items-center justify-content-center">
                            <img src="{{ asset('img/experiencia.avif') }}" alt="experiencia" class="img-responsive"
                                width="400" height="200">
                        </div>
                    </div>
                    <div class="col-md-4 text-center seccion">
                        <h3>Equipo de Expertos</h3>

                        <p class=" w-100">Nuestro equipo de expertos en turismo está listo para brindarte asesoramiento
                            y recomendaciones para que tu viaje sea perfecto. ¡Déjanos encargarnos de los detalles para
                            que tú puedas relajarte y disfrutar!</p>

                        <div class="d-flex align-items-center justify-content-center">
                            <img src="{{ asset('img/expertos.jpg') }}" alt="expertos" class="img-responsive"
                                width="400" height="200">
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="sec-informe">
            <div class="container-fluid">
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
    </main>
    <footer class="bg-dark text-white text-center py-3">
        <div class="container">
            <p>&copy; 2023 ExpresTour. Todos los derechos reservados.</p>
        </div>
    </footer>

</x-layouts.app>
