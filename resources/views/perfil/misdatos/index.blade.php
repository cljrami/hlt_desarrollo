@extends('layouts.master')

@section('content')
{{-- @include ('layouts.preloader') --}}

<div class="sidebar close">
    <livewire:MenuPerfil />
</div>
<section class="home-section">
    <livewire:MenuProfileDropdown />
    <div class="container-fluid">
        <h2>MIS DATOS</h2>
        Psuedonimo
        email
        cambiar contraseña
    </div>
</section>
@endsection
