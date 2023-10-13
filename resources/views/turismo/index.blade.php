<x-layouts.app title="home" meta-description="home meta description">
    <br><br><br>
    <div class="container paquete">
        <div class="row">
            <div class="col-md-4">
                <div class="card">
                    <figure>
                        <img src="{{ asset('img/5lagunas.jpg') }}" alt="">
                    </figure>
                    <div class="contenido">
                        <h3>Las 5 lagunas</h3>
                        <p>Las lagunas están conectadas entre sí por cascadas y arroyos, y sus aguas son cristalinas y
                            de color turquesa. El paisaje que las rodea es de alta montaña, con picos nevados y bosques
                            de queñua.

                        </p>
                        <a href="{{ route('turismo.showlaguna') }}">Ver paquete ...</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <figure>
                        <img src="{{ asset('img/bella.jpg') }}" alt="">
                    </figure>
                    <div class="contenido">
                        <h3>Bella Durmiente</h3>
                        <p> Tingo María es conocida como la "Ciudad de la Bella Durmiente" porque desde allí se puede
                            ver una formación de montañas cuya silueta se asemeja a la de una mujer dormida.</p>
                        <a href="#">Ver paquete ...</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <figure>
                        <img src="{{ asset('img/lechuza.jpg') }}" alt="">
                    </figure>
                    <div class="contenido">
                        <h3>Cueva de las Lechuzas</h3>
                        <p> La Cueva de las Lechuzas es una cueva ubicada en el Parque Nacional Tingo María. La cueva
                            alberga una gran colonia de guácharos, que son aves que se alimentan de insectos.</p>
                        <a href="#">Ver paquete ...</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container paquete">
        <div class="row">
            <div class="col-md-4">
                <div class="card">
                    <figure>
                        <img src="{{ asset('img/huanuco-pampa.jpg') }}" alt="">
                    </figure>
                    <div class="contenido">
                        <h3>Centro Arqueológico Huánuco-Pampa</h3>
                        <p> Huánuco-Pampa fue una importante ciudad inca que se encuentra a unos 10 kilómetros de la
                            ciudad de Huánuco. El sitio arqueológico alberga una gran variedad de edificios, plazas y
                            templos.</p>
                        <a href="#">Ver paquete ...</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <figure>
                        <img src="{{ asset('img/kotosh.jpg') }}" alt="">
                    </figure>
                    <div class="contenido">
                        <h3>Templo de las Manos Cruzadas</h3>
                        <p>Es un sitio arqueológico ubicado en el distrito de San José de Quero, en la provincia de
                            Huánuco. El sitio es conocido por sus esculturas de manos humanas cruzadas.</p>
                        <a href="#">Ver paquete ...</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <figure>
                        <img src="{{ asset('img/cordillera.jpg') }}" alt="">
                    </figure>
                    <div class="contenido">
                        <h3>Cordillera de Huayhuash</h3>
                        <p> La Cordillera de Huayhuash es una cadena montañosa ubicada en el departamento de Huánuco. La
                            cordillera alberga varios picos nevados, incluyendo el Huascarán, la montaña más alta del
                            Perú y las mas frias y hermosas.</p>
                        <a href="#">Ver paquete ...</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-layouts.app>
