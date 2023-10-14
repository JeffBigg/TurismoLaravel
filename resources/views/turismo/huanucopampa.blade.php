<x-layouts.app title="Huanuco-Pampa" meta-description="home meta description">
    <section class="header-laguna" style="background-image: url('{{ asset('img/huanuco-pampa.jpg') }}')">
        <div class="limit page__header__inset">
            <div class="info-oferta-laguna">
                <div class="precio">
                    <strong class="page__header__precio">
                        S/.359
                        <span class="page__header__precio-aterior">
                            antes S/.429
                        </span>
                    </strong>
                </div>
                <div class="info">
                    <strong class="page_header_subtitulo">
                        02 dias/ 01 noches
                    </strong>
                    <h1 class="page_header_titulo">
                        Portada del sol.
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
                                        01 noches de alojamiento en Hotel el Sol.
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
                                        Todo el viaje en un solo dia.
                                    </div>
                                </div>

                            </div>
                        </section>
                    </div>
                    <div class="blItem">
                        <div class="seccion-actividades-text">
                            <h3>Actividades</h3>
                            <div class="content-incluye">
                                Día 1 <br><br>

                                8:00 a. m.: Salida desde Huánuco hacia Huánuco Pampa.
                                10:00 a. m.: Llegada a Huánuco Pampa.
                                10:30 a. m.: Visita guiada a la ciudadela inca de Huánuco Pampa.
                                1:00 p. m.: Almuerzo en un restaurante local.
                                2:00 p. m.: Visita al Ushnu, el templo principal de la ciudadela.
                                3:00 p. m.: Visita al Templo de las Tres Puertas, un importante complejo ceremonial.
                                4:00 p. m.: Traslado a un hotel en Huánuco Pampa.
                                6:00 p. m.: Cena en un restaurante local.
                                7:00 p. m.: Tiempo libre para descansar o explorar la ciudad. <br> <br>
                                Día 2 <br> <br>

                                8:00 a. m.: Desayuno en el hotel.
                                9:00 a. m.: Visita al Baño del Inca, un complejo de baños termales.
                                10:00 a. m.: Visita a las Colcas, depósitos de alimentos.
                                11:00 a. m.: Salida de Huánuco Pampa.
                                1:00 p. m.: Almuerzo en un restaurante local en Huánuco.
                                2:00 p. m.: Regreso a Huánuco.
                                Actividades opcionales
                                <br>

                                Caminata por la montaña de Huánuco Viejo: Una caminata de 3 horas hasta la cima de la
                                montaña ofrece vistas panorámicas de la ciudadela y el valle circundante.
                                Visita al Museo Arqueológico de Huánuco: El museo alberga una colección de artefactos
                                incas y de otras culturas preincaicas.
                                Visita a las cataratas de Palacancha: Un hermoso conjunto de cascadas ubicado a 10
                                kilómetros de Huánuco Pampa.
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
