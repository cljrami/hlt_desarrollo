@extends('layouts.master')

@section('content')
<div class="sidebar close">
    <livewire:perfil.menu />
</div>
<section class="home-section">
    <livewire:perfil.dropdown />
    <div class="container-fluid">
        <livewire:botones.boton-publicar />
        <div class="row">
            <div class="col-12 col-md-8">
                <div class="wraper-info-perfil">
                    <img src="../assets/imgs/fondos/herohome.webp" class="img-fluid img-perfil">
                    <span>"Mi mejor historia en MI VIDA"</span>
                    <h3>@delaspampas</h3>
                    <p><span class="counter">22</span> Historias</p>
                    <div class="contenedor-botones">
                        <button type="button" class="btn btn-success"><i class="far fa-edit"></i> Editar Perfíl</button>
                        <button type="button" class="btn btn-danger"><i class="far fa-trash-alt"></i> Borrar Cuenta</button>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-4">
                <div class="stats">
                    <span>Historias Publicadas</span>
                    <span class="counter">172</span>
                    <i class="fas fa-book-reader" aria-hidden="true"></i>
                </div>
                <div class="stats">
                    <span>Me Gusta A Mis Historias</span>
                    <span class="counter">172</span>
                    <i class="fas fa-heart" aria-hidden="true"></i>
                </div>
                <div class="stats">
                    <span>Historias Gusrdadas</span>
                    <span class="counter">172</span>
                    <i class="fas fa-bookmark" aria-hidden="true"></i>
                </div>
            </div>


            <div class="tabset">
                <!-- Tab 1 -->
                <input type="radio" name="tabset" id="tab1" checked>
                <label for="tab1"><i class="fa-regular fa-pen-to-square"></i> Mís Historias</label>
                <!-- Tab 2 -->
                <input type="radio" name="tabset" id="tab2">
                <label for="tab2"><i class="fa-regular fa-bookmark"></i> Favoritos</label>
                <!-- Tab 3 -->
                <input type="radio" name="tabset" id="tab3" aria-controls="dunkles">
                <label for="tab3"><i class="fa-regular fa-heart"></i> Me Gusta</label>

                <div class="tab-panels">
                    <section id="tab1" class="tab-panel">
                        <div class="swiper mis-historias">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                    <div class="dropdown-custom ">
                                        <button class="btn btn-secondary" type="button" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <i class="fas fa-ellipsis"></i>
                                        </button>
                                        <div class="dropdown-menu dropdown-menu-end" aria-labelledby="dropdownMenuButton">
                                            <a class="dropdown-item" href="#">Action2</a>
                                            <a class="dropdown-item" href="#">Another action</a>
                                            <a class="dropdown-item" href="#">Something else </a>
                                        </div>
                                    </div>
                                    <img src="/assets/imgs/historias/hombre.webp" alt="">
                                </div>
                                <div class="swiper-slide">
                                    <div class="dropdown-custom ">
                                        <button class="btn btn-secondary" type="button" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <i class="fas fa-ellipsis"></i>
                                        </button>
                                        <div class="dropdown-menu dropdown-menu-end" aria-labelledby="dropdownMenuButton">
                                            <a class="dropdown-item" href="#">Action2</a>
                                            <a class="dropdown-item" href="#">Another action</a>
                                            <a class="dropdown-item" href="#">Something else </a>
                                        </div>
                                    </div>
                                    <img src="/assets/imgs/historias/hombre.webp" alt="">
                                </div>
                                <div class="swiper-slide">
                                    <div class="dropdown-custom ">
                                        <button class="btn btn-secondary" type="button" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <i class="fas fa-ellipsis"></i>
                                        </button>
                                        <div class="dropdown-menu dropdown-menu-end" aria-labelledby="dropdownMenuButton">
                                            <a class="dropdown-item" href="#">Action2</a>
                                            <a class="dropdown-item" href="#">Another action</a>
                                            <a class="dropdown-item" href="#">Something else </a>
                                        </div>
                                    </div>
                                    <img src="/assets/imgs/historias/hombre.webp" alt="">
                                </div>
                                <div class="swiper-slide">
                                    <div class="dropdown-custom ">
                                        <button class="btn btn-secondary" type="button" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <i class="fas fa-ellipsis"></i>
                                        </button>
                                        <div class="dropdown-menu dropdown-menu-end" aria-labelledby="dropdownMenuButton">
                                            <a class="dropdown-item" href="#">Action2</a>
                                            <a class="dropdown-item" href="#">Another action</a>
                                            <a class="dropdown-item" href="#">Something else </a>
                                        </div>
                                    </div>
                                    <img src="/assets/imgs/historias/hombre.webp" alt="">
                                </div>
                                <div class="swiper-slide">
                                    <div class="dropdown-custom ">
                                        <button class="btn btn-secondary" type="button" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <i class="fas fa-ellipsis"></i>
                                        </button>
                                        <div class="dropdown-menu dropdown-menu-end" aria-labelledby="dropdownMenuButton">
                                            <a class="dropdown-item" href="#">Action2</a>
                                            <a class="dropdown-item" href="#">Another action</a>
                                            <a class="dropdown-item" href="#">Something else </a>
                                        </div>
                                    </div>
                                    <img src="/assets/imgs/historias/hombre.webp" alt="">
                                </div>
                                <div class="swiper-slide">
                                    <div class="dropdown-custom ">
                                        <button class="btn btn-secondary" type="button" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <i class="fas fa-ellipsis"></i>
                                        </button>
                                        <div class="dropdown-menu dropdown-menu-end" aria-labelledby="dropdownMenuButton">
                                            <a class="dropdown-item" href="#">Action2</a>
                                            <a class="dropdown-item" href="#">Another action</a>
                                            <a class="dropdown-item" href="#">Something else </a>
                                        </div>
                                    </div>
                                    <img src="/assets/imgs/historias/hombre.webp" alt="">
                                </div>
                                <div class="swiper-slide">
                                    <div class="dropdown-custom ">
                                        <button class="btn btn-secondary" type="button" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <i class="fas fa-ellipsis"></i>
                                        </button>
                                        <div class="dropdown-menu dropdown-menu-end" aria-labelledby="dropdownMenuButton">
                                            <a class="dropdown-item" href="#">Action2</a>
                                            <a class="dropdown-item" href="#">Another action</a>
                                            <a class="dropdown-item" href="#">Something else </a>
                                        </div>
                                    </div>
                                    <img src="/assets/imgs/historias/hombre.webp" alt="">
                                </div>
                                <div class="swiper-slide">
                                    <div class="dropdown-custom ">
                                        <button class="btn btn-secondary" type="button" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <i class="fas fa-ellipsis"></i>
                                        </button>
                                        <div class="dropdown-menu dropdown-menu-end" aria-labelledby="dropdownMenuButton">
                                            <a class="dropdown-item" href="#">Action2</a>
                                            <a class="dropdown-item" href="#">Another action</a>
                                            <a class="dropdown-item" href="#">Something else </a>
                                        </div>
                                    </div>
                                    <img src="/assets/imgs/historias/hombre.webp" alt="">
                                </div>
                                <div class="swiper-slide">
                                    <div class="dropdown-custom ">
                                        <button class="btn btn-secondary" type="button" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <i class="fas fa-ellipsis"></i>
                                        </button>
                                        <div class="dropdown-menu dropdown-menu-end" aria-labelledby="dropdownMenuButton">
                                            <a class="dropdown-item" href="#">Action2</a>
                                            <a class="dropdown-item" href="#">Another action</a>
                                            <a class="dropdown-item" href="#">Something else </a>
                                        </div>
                                    </div>
                                    <img src="/assets/imgs/historias/hombre.webp" alt="">
                                </div>
                                <div class="swiper-slide">
                                    <div class="dropdown-custom ">
                                        <button class="btn btn-secondary" type="button" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <i class="fas fa-ellipsis"></i>
                                        </button>
                                        <div class="dropdown-menu dropdown-menu-end" aria-labelledby="dropdownMenuButton">
                                            <a class="dropdown-item" href="#">Action2</a>
                                            <a class="dropdown-item" href="#">Another action</a>
                                            <a class="dropdown-item" href="#">Something else </a>
                                        </div>
                                    </div>
                                    <img src="/assets/imgs/historias/hombre.webp" alt="">
                                </div>
                            </div>
                            {{-- <div class="swiper-pagination"></div> --}}
                        </div>
                    </section>
                    <section id="tab2" class="tab-panel">
                        2
                    </section>
                    <section id="tab3" class="tab-panel">
                        3
                    </section>
                </div>

            </div>

            <div class="col-12">asdsa</div>
        </div>

    </div>

</section>
@endsection
