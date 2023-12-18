@extends('layouts.master')

@section('content')
{{-- @include ('layouts.preloader') --}}

<div class="sidebar close">
    <livewire:perfil.menu />
</div>
<section class="home-section">
    <livewire:perfil.dropdown />
    <div class="container-fluid">
        <h1>Dashboard</h1>
        <h2>Contenedor Historias</h2>
        <div class="dashbox">
            <div class="table-responsive">
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">id</th>
                            <th>Título</th>
                            <th>Categoría</th>
                            <th>Autor</th>
                            <th>Estado</th>
                            <th>Likes</th>
                            <th>Comentarios </th>
                            <th>acciónes</th>

                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</th>
                            <td>

                                Cell

                            </td>
                            <td>Cell</td>
                            <td><span class="si">Publicada</span></td>
                            <td>Cell</td>
                            <td>Cell</td>
                            <td>Cell</td>
                            <td>
                                <div class="d-flex">
                                    <a href="" class="icono">
                                        <i class="fas fa-lock-open" aria-hidden="true"></i>
                                    </a>
                                    <a href="" class="icono">
                                        <i class="fas fa-eye" aria-hidden="true"></i>
                                    </a>
                                    <a href="" class="icono">
                                        <i class="fas fa-cog" aria-hidden="true"></i>
                                    </a>
                                    <a href="" class="icono">
                                        <i class="far fa-trash-alt" aria-hidden="true"></i>
                                    </a>
                                </div>
                            </td>
                        </tr>

                    </tbody>
                </table>
            </div>
            <nav aria-label="Page navigation example">
                <ul class="pagination justify-content-end">

                    <li class="page-item"><a class="page-link" href="#">1</a></li>
                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                    <li class="page-item"><a class="page-link" href="#">3</a></li>

                </ul>
            </nav>
        </div>
    </div>
</section>




@endsection
