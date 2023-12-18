<!DOCTYPE html>
<html lang="ES">

<head>
    @vite(['resources/js/app.js'])
    <!-- METATAGS -->
    <meta charset="UTF-8" />
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta http-equiv="Cache-Control" content="public, max-age=3600" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="language" content="Spanish" />
    <meta name="author" content="Zona8.cl" />

    {{-- {!! SEOMeta::generate() !!}
    {!! OpenGraph::generate() !!} --}}
    <meta property="og:locale" content="es_ES" />
    <meta property="og:image:secure_url" content="" />
    <meta property="og:image:width" content="1200" />
    <meta property="og:image:height" content="630" />
    <meta property="og:image:alt" content="" />

    <title>hola mundo</title>
    <meta name="description" content="" />
    <meta name="keywords" content="" />
    <meta name="robots" content="index, follow" />
    <meta name="language" content="Spanish" />
    <meta name="author" content="Jaime Ramirez - jrami" />

    <meta name="title" content="Titulo" />
    <!-- OPENGRAPH-->

    <meta property="og:type" content="website" />
    <meta property="og:title" content="" />
    <meta property="og:description" content="" />
    <meta property="og:url" content="" />
    <meta property="og:site_name" content="" />
    <meta property="og:image" content="" />
    <meta property="og:image:secure_url" content="" />
    <meta property="og:image:width" content="1200" />
    <meta property="og:image:height" content="630" />
    <meta property="og:image:alt" content="" />
    <!-- Bootstrap CSS v5.2.1 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous" />
    <!-- SWIPER SLIDER-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css" />
    <!-- ANIMATE -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
    <!-- Estilos propios-->
    <link href="{{ asset('assets/css/hlt.css') }}" rel="stylesheet" async>
    <link href="{{ asset('assets/css/admin.css') }}" rel="stylesheet" async>


    <!-- FAVICOn-->
    <link rel="icon" href="{{ asset('favicon.ico') }}">
    <!-- CANONICAL URL -->
    <link rel="canonical" href="" />

    <!--FONT AWESOME-->
    <script src="https://kit.fontawesome.com/acf431a76a.js" crossorigin="anonymous"></script>
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-XGSX5MQHL9"></script>

    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'G-XGSX5MQHL9');

    </script>

    <meta name="google-site-verification" content="AaLYpDTvDyl7WfMGlIrIIV5ZRaZ5LeSMbLz9iAI5J50" />

</head>

<body>
    @yield('content')



    <div id="cursor"></div>
    <div id="pointer"></div>
    {{-- <a id="to-top"></a> --}}
    <div class="progress-wrap">
        <svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
            <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" />
        </svg>
    </div>



    <script src="https://code.jquery.com/jquery-3.7.0.js" integrity="sha256-JlqSTELeR4TLqP0OG9dxM7yDPqX1ox/HfgiSLBj8+kM=" crossorigin="anonymous"></script>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js" integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous">
    </script>

    <script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Counter-Up/1.0.0/jquery.counterup.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/waypoints/4.0.1/jquery.waypoints.js"></script>

    <!-- MDB -->

    <script src="{{ asset('assets/js/hlt-main.js') }}"></script>


</body>

</html>
