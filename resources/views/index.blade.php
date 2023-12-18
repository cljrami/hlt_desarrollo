@extends('layouts.master')
@section('content')

@include ('layouts.preloader')


<livewire:navbar.navbar />

<livewire:heroes.hero />
<livewire:estadisticas.estadisticas />
<livewire:sliders.nuevas-historias />
<livewire:sliders.historias-destacadas />
<livewire:sliders.team />
<livewire:faq.faq />
<livewire:sliders.saludmental />
<livewire:cta.cta />
<livewire:sliders.testimonios />
<livewire:sliders.mercado />
<livewire:marquee.marquee />
<livewire:sliders.auspiciadores />
<livewire:footer.footer />

@endsection
