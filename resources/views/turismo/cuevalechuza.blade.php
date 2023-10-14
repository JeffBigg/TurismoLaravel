<x-layouts.app title="Bella-Durmiente" meta-description="home meta description">
    <section class="header-laguna" style="background-image: url('{{ asset('img/lechuza.jpg') }}')">
        <div class="limit page__header__inset">
            <div class="info-oferta-laguna">
                <div class="precio">
                    <strong class="page__header__precio">
                        S/.190
                        <span class="page__header__precio-aterior">
                            antes S/.250
                        </span>
                    </strong>
                </div>
                <div class="info">
                    <strong class="page_header_subtitulo">
                        02 dias/ 01 noches
                    </strong>
                    <h1 class="page_header_titulo">
                        Cueva de Tingo Maria.
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
                                        01 noches de alojamiento en Hotel SJ.
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
                                        Bus-Hotel-Bus, regreso.
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
                                        Toda la ruta de la cueva full day.
                                    </div>
                                </div>

                            </div>
                        </section>
                    </div>
                    <div class="blItem">
                        <div class="seccion-actividades-text">
                            <h3>Actividades</h3>
                            <div class="content-incluye">
                                8:00 a. m.: Recogida en el hotel o terminal de autobuses de Tingo María.
                                8:30 a. m.: Salida hacia la Cueva de las Lechuzas.
                                9:30 a. m.: Llegada a la Cueva de las Lechuzas.
                                10:00 a. m.: Visita guiada a la cueva.
                                12:00 p. m.: Almuerzo en un restaurante local.
                                1:00 p. m.: Visita a la Laguna Milagrosa.
                                3:00 p. m.: Regreso a Tingo María.
                                4:00 p. m.: Llegada a Tingo María. <br><br>

                                El tour incluye una visita guiada a la Cueva de las Lechuzas, que es el punto culminante
                                del recorrido. La cueva es el hogar de una gran colonia de lechuzas, que se pueden ver
                                volando por la cueva. También hay una variedad de otras aves, murciélagos, reptiles e
                                insectos que viven en la cueva. <br> <br>

                                Después de la visita a la cueva, los visitantes pueden visitar la Laguna Milagrosa. La
                                laguna es un lugar tranquilo y hermoso que ofrece un contraste refrescante con el
                                bullicio de la ciudad.
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
