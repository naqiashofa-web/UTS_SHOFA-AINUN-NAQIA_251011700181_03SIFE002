@extends('layouts.app')

@section('content')
<div class="container">
    <div class="p-5 mb-4 bg-white rounded-3 shadow-sm text-center">
        <h1 class="display-5 fw-bold">Selamat Datang di Katalog Tanaman Hias</h1>
        <p class="col-md-8 fs-4 mx-auto text-muted">Temukan berbagai jenis tanaman hias terbaik untuk mempercantik ruangan Anda.</p>
        
        <!-- Bagian Identitas (Nama, NIM, Kelas) -->
        <hr class="my-4 w-50 mx-auto">
        <div class="text-secondary fw-semibold">
            <p class="mb-1">Nama: Shofa Ainun Naqia</p>
            <p class="mb-1">NIM: 251011700181</p>
            <p class="mb-0">Kelas: 03SIFE002</p>
        </div>
    </div>

    <h3 class="mb-4 fw-bold">Daftar Tanaman Hias</h3>
    <div class="row">
        @foreach($plants as $plant)
            <div class="col-md-4 mb-4">
                <div class="card h-100 shadow-sm border-0">
                    <img src="{{ asset('assets/images/' . $plant->image) }}" class="card-img-top" alt="{{ $plant->name }}" style="height: 220px; object-fit: cover;">
                    <div class="card-body d-flex flex-column">
                        <h5 class="card-title fw-bold">{{ $plant->name }}</h5>
                        <p class="text-success fw-semibold mb-1">Rp {{ number_format($plant->price, 0, ',', '.') }}</p>
                        <p class="card-text text-muted small">{{ Str::limit($plant->description, 80) }}</p>
                        <a href="{{ route('plants.show', $plant->id) }}" class="btn btn-outline-success mt-auto">Lihat Detail</a>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>
@endsection