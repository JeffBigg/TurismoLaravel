<x-layouts.app title="Bella-Durmiente" meta-description="home meta description">
    <section class="header-laguna" style="background-image: url('{{ asset('img/bella2.jpg') }}')">
        <div class="limit page__header__inset">
            <div class="info-oferta-laguna">
                <div class="precio">
                    <strong class="page__header__precio">
                        S/.590
                        <span class="page__header__precio-aterior">
                            antes S/.800
                        </span>
                    </strong>
                </div>
                <div class="info">
                    <strong class="page_header_subtitulo">
                        04 dias/ 03 noches
                    </strong>
                    <h1 class="page_header_titulo">
                        Lo mejor de la bella.
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
                                        03 noches de alojamiento en Hotel.
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
                                        Visitas lugares mas recorridos.
                                    </div>
                                </div>

                            </div>
                        </section>
                    </div>
                    <div class="blItem">
                        <div class="seccion-actividades-text">
                            <h3>Actividades</h3>
                            <div class="content-incluye">
                                La montaña se llama así porque su silueta se asemeja a la de una mujer dormida. La
                                cabeza de la mujer está formada por la cima de la montaña, el cuerpo por la parte
                                central y las piernas por las laderas. La montaña está cubierta de vegetación, lo que le
                                da un aspecto aún más realista.

                                La leyenda cuenta que la montaña es la tumba de una princesa inca. La princesa fue
                                asesinada por un brujo malvado y su cuerpo fue enterrado en la montaña. La montaña se
                                convirtió en piedra para proteger el cuerpo de la princesa.

                                Los visitantes de la montaña pueden realizar caminatas, paseos en bote y otras
                                actividades al aire libre. También pueden visitar el mirador de la Bella Durmiente, que
                                ofrece una vista panorámica de la montaña.

                                Aquí hay algunas actividades que se pueden realizar en la Bella Durmiente de Tingo
                                María:

                                Caminata: La montaña es un destino popular para los excursionistas. Hay varios senderos
                                que conducen a la cima de la montaña, que ofrece vistas impresionantes del paisaje
                                circundante.
                                Paseo en bote: El río Monzón fluye a los pies de la montaña. Los visitantes pueden
                                realizar un paseo en bote por el río para disfrutar de la vista de la montaña desde el
                                agua.
                                Visita al mirador: El mirador de la Bella Durmiente ofrece una vista panorámica de la
                                montaña. Los visitantes pueden llegar al mirador en automóvil o en autobús.
                                Camping: La montaña ofrece oportunidades para acampar. Los visitantes pueden acampar en
                                la base de la montaña o en la cima de la montaña.
                                La Bella Durmiente de Tingo María es una atracción natural impresionante que ofrece una
                                variedad de actividades para los visitantes de todas las edades.
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
