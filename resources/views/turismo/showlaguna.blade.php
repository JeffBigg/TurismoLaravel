<x-layouts.app title="home" meta-description="home meta description">
    <section class="header-laguna" style="background-image: url('{{ asset('img/5lagunas.jpg') }}')">
        <div class="limit page__header__inset">
            <div class="info-oferta-laguna">
                <div class="precio">
                    <strong class="page__header__precio">
                        S/.390
                        <span class="page__header__precio-aterior">
                            antes S/.450
                        </span>
                    </strong>
                </div>
                <div class="info">
                    <strong class="page_header_subtitulo">
                        03 dias/ 02 noches
                    </strong>
                    <h1 class="page_header_titulo">
                        Cinco Lagunas para ti.
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
        <section class="m--actividades">
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
                                            alojamiento
                                        </div>
                                    </div>
                                    <div class="item-text">
                                        02 noches de alojamiento en Hotel Valencia II.
                                    </div>
                                </div>
                                <div class="item" id="alimentacion">
                                    <div class="item-icono">
                                        <img src="" alt="">
                                        <div class="item-titulo">
                                            alimentacion
                                        </div>
                                    </div>
                                    <div class="item-text">
                                        desayuno incluido en Hotel Valencia II.
                                    </div>
                                </div>
                                <div class="item" id="transporte">
                                    <div class="item-titulo">
                                        transporte
                                    </div>
                                    <div class="item-text">
                                        bus-hotel-bus
                                    </div>
                                </div>
                                <div class="item" id="tours">
                                    <div class="item-titulo">
                                        tour
                                    </div>
                                    <div class="item-text">
                                        caminata botes y otros
                                    </div>
                                </div>

                            </div>
                        </section>
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
