<nav class="navbar navbar-expand-lg navbar-light fixed-top" id="barra-nav">
    <div class="container">
        <a class="navbar-brand" href="{{ route('home') }}">INICIO</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('turismo.index') }}">PAQUETES</a>
                </li>
                <li class="nav-item disabled">
                    <a class="nav-link">DISABLED</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
