<x-layouts.app title="Bella-Durmiente" meta-description="home meta description">
    <section class="header-laguna" style="background-image: url('{{ asset('img/cordillera.jpg') }}')">
        <div class="limit page__header__inset">
            <div class="info-oferta-laguna">
                <div class="precio">
                    <strong class="page__header__precio">
                        S/.799
                        <span class="page__header__precio-aterior">
                            antes S/.880
                        </span>
                    </strong>
                </div>
                <div class="info">
                    <strong class="page_header_subtitulo">
                        05 dias/ 04 noches
                    </strong>
                    <h1 class="page_header_titulo">
                        Mejor nevado.
                    </h1>
                    <div class="flex-btns">
                        <div class="boton m--enlace m--grande m--comprar" data-href="https://wa.me/51981183416"
                            id="btnCompra">
                            <strong>
                                comprar
                            </strong>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <main class="seccion">
        <section class="container m--actividades">
            <div class="limit">
                <div class="seccion-actividades">
                    <div class="blItem">
                        <section class="seccion m--incluye">
                            <h3>
                                ¿Que ofrecemos?
                            </h3>
                            <div class="seccion-incluye">
                                <div class="item" id="alojamiento">
                                    <div class="item-icono">
                                        <img src="{{ asset('img/hogar.png') }}" alt="">
                                        <div class="item-titulo">
                                            Alojamiento
                                        </div>
                                    </div>
                                    <div class="item-text">
                                        04 noches de alojamiento en Hotel Huaylash.
                                    </div>
                                </div>
                                <div class="item" id="alimentacion">
                                    <div class="item-icono">
                                        <img src="{{ asset('img/alimentacion.png') }}" alt="">
                                        <div class="item-titulo">
                                            Alimentacion
                                        </div>
                                    </div>
                                    <div class="item-text">
                                        Desayuno, almuerzo y cena en el hotel.
                                    </div>
                                </div>
                                <div class="item" id="transporte">
                                    <div class="item-icono">
                                        <img src="{{ asset('img/transporte.png') }}" alt="">
                                        <div class="item-titulo">
                                            Transporte
                                        </div>
                                    </div>
                                    <div class="item-text">
                                        Bus-Hotel-Bus, extras.
                                    </div>
                                </div>
                                <div class="item" id="tours">
                                    <div class="item-icono">
                                        <img src="{{ asset('img/realidad.png') }}" alt="">
                                        <div class="item-titulo">
                                            tour
                                        </div>
                                    </div>
                                    <div class="item-text">
                                        Conoceremos de punta a punta.
                                    </div>
                                </div>
                            </div>
                        </section>
                    </div>
                    <div class="blItem">
                        <div class="seccion-actividades-text">
                            <h3>Actividades</h3>
                            <div class="content-incluye">
                                Día 1: <br>

                                Llegada a Huánuco: Recogida en el aeropuerto o en la terminal de autobuses y traslado al
                                hotel.
                                Visita al Museo de Huánuco: El museo alberga una colección de artefactos preincaicos y
                                coloniales.
                                Cena en un restaurante local.
                                <br> Día 2: <br>

                                Traslado a Carpish: Salida desde Huánuco en autobús o vehículo privado.
                                Alojamiento en Carpish.
                                Cena en un restaurante local.
                                <br> Día 3: <br>

                                Caminata a la Laguna de Llanganuco: Una caminata de 3 horas hasta la laguna ofrece
                                vistas panorámicas de la cordillera Huaylash.
                                Almuerzo en un restaurante local.
                                Visita a la Laguna de Chinancocha: Una laguna de aguas cristalinas ubicada a 4,500
                                metros sobre el nivel del mar.
                                Regreso a Carpish.
                                Cena en un restaurante local.
                                <br> Día 4: <br>

                                Caminata al Nevado de Pastoruri: Una caminata de 4 horas hasta el glaciar Pastoruri, uno
                                de los más grandes del Perú.
                                Almuerzo en un restaurante local.
                                Visita a las Puyas de Raymondi: Una especie de planta endémica de la Cordillera
                                Huaylash.
                                Regreso a Carpish.
                                Cena en un restaurante local.
                                <br> Día 5: <br>

                                Traslado a Huánuco.
                                Cena en un restaurante local.
                                Salida de Huánuco.
                                Recomendaciones:

                                Llevar ropa abrigadora para el frío de la montaña.
                                Llevar zapatos cómodos para caminar.
                                Llevar protector solar y repelente de insectos.
                                Beber mucha agua para mantenerse hidratado.
                                Respetar el medio ambiente y no dejar basura.
                                Consejos:

                                Este itinerario es solo una sugerencia, y se puede adaptar a las preferencias de cada
                                viajero.
                                Es importante consultar con un guía local para obtener información sobre las condiciones
                                climáticas y el terreno.
                                Se recomienda contratar un seguro de viaje que cubra accidentes y enfermedades.
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>




    <script>
        var btnCompra = document.getElementById('btnCompra');
        btnCompra.addEventListener('click', function() {
            var dataHref = btnCompra.getAttribute('data-href');

            window.open(dataHref, '_blank');
        });
    </script>
</x-layouts.app>
