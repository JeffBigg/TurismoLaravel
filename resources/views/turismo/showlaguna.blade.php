<x-layouts.app title="Cinco lagunas" meta-description="home meta description">
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
                                            alojamiento
                                        </div>
                                    </div>
                                    <div class="item-text">
                                        02 noches de alojamiento en Hotel Valencia II.
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
                                        Desayuno incluido en Hotel Valencia II.
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
                                        bus-hotel-bus
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
                                        caminata botes y otros
                                    </div>
                                </div>

                            </div>
                        </section>
                    </div>
                    <div class="blItem">
                        <div class="seccion-actividades-text">
                            <h3>Actividades</h3>
                            <div class="content-incluye">
                                Día 01: <br><br> Laguna Willcacocha
                                Partiremos desde la ciudad de Huaraz, por 50 minutos rumbo hasta la Laguna de
                                Willcacocha 3470 msnm; punto estratégico que nos permite apreciar casi toda la
                                cordillera blanca y los nevados: Huandoy, Huascarán, Chopicalqui, Hualcán, Copa,
                                Vallunaraju, Ocshapalca, Ranrapalca y Palcaraju.
                                Al retorno pasaremos por el centro poblado de Santa Cruz, donde nos esperará nuestra
                                movilidad para dirigirnos a Huaraz.

                                <br><br>Día 02: <br><br> Laguna Churup
                                En nuestro transporte privado nos dirigimos a Pitec, puesto de control en el Parque
                                Nacional Huascarán.
                                Luego, un camino en zigzag de moderada dificultad te lleva hasta la laguna, pasando
                                cerca y requiriéndote escalar una pequeña pared de roca.
                                Luego de una breve parada, llegaremos a la laguna de Churup.
                                Después descendemos por el mismo camino durante 2 horas hasta Pitec, para nuestro
                                transporte de regreso a Huaraz.

                                Día 03: Laguna 69
                                Salimos de Huaraz.
                                Siguiendo con el recorrido, haremos una parada en la ruta para el desayuno. El recorrido
                                dura todo un día, siguiendo la ruta hacia el sector Llanganuco, este alberga 2 lagunas:
                                Orconcocha y Chinancocha.
                                Inicio del trekking desde Cebollapampa (3850 m.s.n.m) hacia la laguna 69, subiendo un
                                sendero zigzag (3 horas de caminata aproximadamente).
                                Llegada a la laguna 69 (4 604 m.s.n.m) La laguna está rodeada por los nevados de
                                Chacraraju y Pisco.
                                Luego, retorno a la ciudad de Huaraz.
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
