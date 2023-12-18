@extends('layouts.master')

@section('content')
{{-- @include ('layouts.preloader') --}}

<div class="sidebar close">
    <livewire:perfil.menu />
</div>
<section class="home-section">
    <livewire:perfil.dropdown />
    <div class="container">
        <livewire:forms.publicar-historia />
    </div>

</section>
@endsection
