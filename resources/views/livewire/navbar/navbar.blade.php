<div>

    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top hlt-menu ">
        <div class="container">
            <a class="navbar-brand" href="{{ route('/') }}">HastalaTumba</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mx-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="{{ route('/') }}">Purgatorio</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('historias') }}">Mausoleo De Historias </a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarScrollingDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            SECCIÓNES </a>
                        <ul class="dropdown-menu dropdown-menu-dark" aria-labelledby="navbarScrollingDropdown">
                            <li><a class="dropdown-item" href="{{ route('sabias-que') }}">¿Sabías Qué?</a></li>

                            <li><a class="dropdown-item" href="{{ route('sepulturero') }}">Sepulturero</a></li>
                            <li><a class="dropdown-item" href="{{ route('preguntas-frecuentes') }}">Preguntas
                                    Frecuentes</a></li>
                            <li><a class="dropdown-item" href="{{ route('que-es-hastalatumba') }}">¿Qué Es
                                    Hastalatumba?</a></li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarScrollingDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            CLUB LLORÓN </a>
                        <ul class="dropdown-menu dropdown-menu-dark" aria-labelledby="navbarScrollingDropdown">
                            <li><a class="dropdown-item" href="#">¿Qué es el Club Llorón?</a></li>
                            <li><a class="dropdown-item" href="">Registro</a></li>
                            <li><a class="dropdown-item" href="">Beneficios</a></li>

                        </ul>
                    </li>

                    <li class="menu-item">
                        <a href="{{ route('registro') }}" title="">
                            <button type="button" class="btn btn-danger">Libérate</button>
                        </a>
                    </li>
                </ul>
                <button id="btn" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasRight" aria-controls="offcanvasRight" class="d-none d-xl-block"><span></span><span></span><span></span>
                </button>
            </div>
        </div>

    </nav>
    <!-- LATERAL SOCIAL-->
    <div class="offcanvas offcanvas-end " tabindex="-1" id="offcanvasRight" aria-labelledby="offcanvasRightLabel">
        <div class="offcanvas-header">
            <h5 id="offcanvasRightLabel">HastaLaTumba</h5>
            <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <div class="offcanvas-body">
            <div class="col-5"><img src="assets/imgs/logo/hlt-logo.webp" alt="Secretos" class="img-fluid"></div>
            <p>Un espacio seguro para contar tus secretos más oscuros y llevarlos contigo hasta la tumba.
                <a href="">¡Únete a nuestra comunidad!</a>
            </p>

            <div class="container RRSS">
                <p>RRSS</p>
                <livewire:social.iconos-sociales />

            </div>
        </div>
    </div>
</div>
