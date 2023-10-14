<x-layouts.app title="Bella-Durmiente" meta-description="home meta description">
    <section class="header-laguna" style="background-image: url('{{ asset('img/kotosh.jpg') }}')">
        <div class="limit page__header__inset">
            <div class="info-oferta-laguna">
                <div class="precio">
                    <strong class="page__header__precio">
                        S/.199
                        <span class="page__header__precio-aterior">
                            antes S/.250
                        </span>
                    </strong>
                </div>
                <div class="info">
                    <strong class="page_header_subtitulo">
                        Full day
                    </strong>
                    <h1 class="page_header_titulo">
                        Manos cruzadas.
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
                                            Estancia.
                                        </div>
                                    </div>
                                    <div class="item-text">
                                        Alojamiento todo el dia.
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
                                        Desayuno, almuerzo.
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
                                        Huanuco - Kotosh - Huanuco.
                                    </div>
                                </div>
                                <div class="item" id="tours">
                                    <div class="item-icono">
                                        <img src="{{ asset('img/realidad.png') }}" alt="">
                                        <div class="item-titulo">
                                            Tour
                                        </div>
                                    </div>
                                    <div class="item-text">
                                        Recorrido a al templo historico.
                                    </div>
                                </div>

                            </div>
                        </section>
                    </div>
                    <div class="blItem">
                        <div class="seccion-actividades-text">
                            <h3>Actividades</h3>
                            <div class="content-incluye">
                                8:00 a. m.: Recogida en el hotel o terminal de autobuses de Huánuco.
                                8:30 a. m.: Salida hacia Kotosh.
                                9:30 a. m.: Llegada a Kotosh.
                                10:00 a. m.: Visita guiada al Templo de las Manos Cruzadas.
                                12:00 p. m.: Almuerzo en un restaurante local.
                                1:00 p. m.: Visita al Templo de la Cruz.
                                3:00 p. m.: Regreso a Huánuco.
                                4:00 p. m.: Llegada a Huánuco. <br>
                                Actividades <br><br>

                                El tour incluye una visita guiada a los principales sitios arqueológicos de Kotosh, que
                                son:

                                Templo de las Manos Cruzadas: Este templo es uno de los más antiguos de América, y su
                                característica más distintiva son las manos cruzadas talladas en la piedra.
                                Templo de la Cruz: Este templo es más reciente que el Templo de las Manos Cruzadas, y su
                                nombre se debe a una cruz tallada en la piedra.
                                Recomendaciones

                                El tour es adecuado para personas de todas las edades y niveles de condición física.
                                Se recomienda llevar zapatos cómodos para caminar, una cámara y ropa adecuada para el
                                clima.
                                Es importante ser respetuoso con el medio ambiente y no dejar basura en los sitios
                                arqueológicos.
                                Conclusión

                                El tour full day en Kotosh es una excelente manera de conocer uno de los principales
                                sitios arqueológicos del Perú. El tour ofrece una combinación de actividades culturales
                                e históricas, y es una experiencia que los visitantes no olvidarán.
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
