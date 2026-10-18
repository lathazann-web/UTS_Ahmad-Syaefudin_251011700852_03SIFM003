@extends('layouts.app')

@section('content')
<style>
    .hero-section {
        background: linear-gradient(rgba(0, 0, 0, 0.75), rgba(0, 0, 0, 0.75)), url("{{ asset('assets/images/bg-camping.jpg') }}");
        background-size: cover;
        background-position: center;
        background-repeat: no-repeat;
        min-height: calc(100vh - 130px);
        display: flex;
        align-items: center;
        justify-content: center;
        text-align: center;
        padding: 2rem;
    }
</style>

<div class="hero-section">
    <div class="container">
        <h1 class="display-4 fw-bold text-gold mb-3">Selamat Datang di JUNN PEAK CAMP</h1>
        <p class="fs-4 text-light max-w-2xl mx-auto mb-4">
            Penyedia layanan sewa peralatan camping dan outdoor terbaik dengan kualitas premium untuk petualangan Anda.
        </p>
        <a href="{{ route('gears.index') }}" class="btn btn-gold btn-lg px-5 py-3 shadow-lg">
            Jelajahi Peralatan Camping
        </a>
    </div>
</div>
@endsection
