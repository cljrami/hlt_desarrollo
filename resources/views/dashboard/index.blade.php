@extends('layouts.master')

@section('content')
{{-- @include ('layouts.preloader') --}}

<div class="sidebar close">
    <livewire:perfil.menu />
</div>
<section class="home-section">
    <livewire:perfil.dropdown />
    <div class="container-fluid">
        {{-- MAINS DASHBOARD --}}
        <h1>Dashboard</h1>
        <livewire:dashboard.estadisticas />

    </div>
</section>



@endsection
