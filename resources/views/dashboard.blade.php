@extends('layout')

@section('page_title', 'Dashboard')

@section('content')

<div class="row g-4">

    {{-- CARD TOTAL SISWA --}}
    <div class="col-md-4">
        <div class="card shadow-sm border-0 p-3" style="border-left: 5px solid #2563eb;">
            <div class="d-flex justify-content-between align-items-center">
                <div>
                    <h5 class="fw-bold mb-1">Total Siswa</h5>
                    <h2 class="fw-bold text-primary">{{ \App\Models\Siswa::count() }}</h2>
                </div>
                <div class="p-3 bg-primary bg-opacity-10 rounded">
                    <span style="font-size: 40px;">🎓</span>
                </div>
            </div>
        </div>
    </div>

    {{-- USER LOGIN --}}
    <div class="col-md-4">
        <div class="card shadow-sm border-0 p-3" style="border-left: 5px solid #10b981;">
            <div class="d-flex justify-content-between align-items-center">
                <div>
                    <h5 class="fw-bold mb-1">Selamat Datang</h5>
                    <h4 class="fw-bold text-success">{{ auth()->user()->name }}</h4>
                </div>
                <div class="p-3 bg-success bg-opacity-10 rounded">
                    <span style="font-size: 40px;">👋</span>
                </div>
            </div>
        </div>
    </div>

    {{-- ROLE USER --}}
    <div class="col-md-4">
        <div class="card shadow-sm border-0 p-3" style="border-left: 5px solid #f59e0b;">
            <div class="d-flex justify-content-between align-items-center">
                <div>
                    <h5 class="fw-bold mb-1">Role Anda</h5>
                    <h4 class="fw-bold text-warning text-capitalize">{{ auth()->user()->role }}</h4>
                </div>
                <div class="p-3 bg-warning bg-opacity-10 rounded">
                    <span style="font-size: 40px;">🛡️</span>
                </div>
            </div>
        </div>
    </div>

</div>

{{-- GRAFIK / INFO LAIN --}}
<div class="row mt-4">
    <div class="col-md-12">
        <div class="card shadow-sm border-0">
            <div class="card-body">
                <h5 class="fw-bold">Statistik Sistem</h5>
                <p class="text-muted mb-0">Fitur grafik bisa ditambahkan nanti, misalnya chart jumlah siswa tiap kelas.</p>
            </div>
        </div>
    </div>
</div>

@endsection
