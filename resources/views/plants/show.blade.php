@extends('layouts.app')

@section('content')
<div class="container">
    <nav aria-label="breadcrumb" class="mb-4">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ route('plants.index') }}" class="text-success text-decoration-none">Beranda</a></li>
            <li class="breadcrumb-item active" aria-current="page">Detail Tanaman</li>
        </ol>
    </nav>

    <div class="row bg-white p-4 rounded-3 shadow-sm align-items-center">
        <div class="col-md-5">
            <img src="{{ asset('assets/images/' . $plant->image) }}" class="img-fluid rounded shadow-sm" alt="{{ $plant->name }}">
        </div>
        <div class="col-md-7">
            <h2 class="fw-bold mb-2">{{ $plant->name }}</h2>
            <h4 class="text-success fw-bold mb-3">Rp {{ number_format($plant->price, 0, ',', '.') }}</h4>
            <hr>
            <p><strong>Spesies:</strong> {{ $plant->species }}</p>
            <p><strong>Kebutuhan Cahaya:</strong> {{ $plant->sunlight_requirements }}</p>
            <p><strong>Deskripsi:</strong><br>{{ $plant->description }}</p>
            
            <a href="{{ route('plants.index') }}" class="btn btn-success mt-3">Kembali ke Katalog</a>
        </div>
    </div>
</div>
@endsection