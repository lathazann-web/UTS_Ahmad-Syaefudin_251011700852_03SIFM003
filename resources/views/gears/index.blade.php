@extends('layouts.app')

@section('content')
<div class="container py-4">
    <h2 class="text-gold fw-bold mb-4 border-bottom border-gold pb-2">Daftar Peralatan Camping</h2>

    <div class="row row-cols-1 row-cols-md-3 row-cols-lg-4 g-4">
        @foreach($gears as $item)
        <div class="col">
            <div class="card card-custom h-100">
                <img src="{{ asset('assets/images/' . $item->image) }}" class="card-img-top" alt="{{ $item->name }}">
                <div class="card-body d-flex flex-column">
                    <span class="badge bg-gold text-dark mb-2 align-self-start fw-bold">{{ $item->category }}</span>
                    <h5 class="card-title text-white fw-bold">{{ $item->name }}</h5>
                    <p class="text-gold fw-bold mb-1">Rp {{ number_format($item->rent_price, 0, ',', '.') }} <span class="text-muted small">/ hari</span></p>
                    <p class="text-muted small mb-3">Stok: {{ $item->stock }} unit</p>
                    <p class="card-text text-secondary small mb-4">{{ Str::limit($item->description, 60) }}</p>
                    
                    <div class="mt-auto">
                        <a href="{{ route('gears.show', $item->id) }}" class="btn btn-gold w-100 btn-sm py-2">Lihat Detail</a>
                    </div>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>
@endsection