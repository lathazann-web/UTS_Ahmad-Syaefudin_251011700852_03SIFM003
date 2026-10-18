@extends('layouts.app')

@section('content')
<div class="container my-5">
    <div class="mb-4">
        <a href="{{ route('gears.index') }}" class="btn btn-outline-gold btn-sm">&larr; Kembali ke Daftar Produk</a>
    </div>

    <div class="card card-custom p-4 p-md-5">
        <div class="row align-items-center g-4">
            <div class="col-md-5">
                <img src="{{ asset('assets/images/' . $gear->image) }}" class="img-fluid rounded border border-gold w-100 shadow" alt="{{ $gear->name }}" style="height: 350px; object-fit: cover;">
            </div>
            <div class="col-md-7">
                <span class="badge bg-gold text-dark mb-3 px-3 py-2 fw-bold">{{ $gear->category }}</span>
                <h2 class="text-white fw-bold mb-3">{{ $gear->name }}</h2>
                <h4 class="text-gold fw-bold mb-3">Rp {{ number_format($gear->rent_price, 0, ',', '.') }} <span class="text-muted fs-6">/ hari</span></h4>
                <p class="text-light mb-4"><strong>Ketersediaan Stok:</strong> <span class="badge bg-secondary fs-6">{{ $gear->stock }} unit</span></p>
                
                <hr class="border-gold opacity-50 mb-3">
                
                <h5 class="text-gold fw-semibold mb-2">Deskripsi Produk:</h5>
                <p class="text-secondary leading-relaxed mb-0">{{ $gear->description }}</p>
            </div>
        </div>
    </div>
</div>
@endsection