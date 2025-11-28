@extends('layout')

@section('page_title', 'Profil Saya')

@section('content')

<div class="row justify-content-center">
    <div class="col-md-8">
        <div class="card shadow-sm border-0">
            <div class="card-header bg-primary text-white">
                <h5 class="mb-0">Profil Pengguna</h5>
            </div>

            <div class="card-body">

                {{-- Informasi User --}}
                <div class="mb-4">
                    <h4 class="fw-bold mb-3">Informasi Akun</h4>

                    <div class="p-3 border rounded bg-light">
                        <p class="mb-2"><strong>Nama Lengkap:</strong></p>
                        <p class="text-primary fs-5 fw-bold">HADYNATA YUSUF PRATAMA</p>

                        <hr>

                        <p class="mb-2"><strong>Email:</strong></p>
                        <p class="text-primary fs-5">2006HADYNATA@gmail.com</p>

                        <hr>

                        <p class="mb-2"><strong>Status Login:</strong></p>
                        <p class="badge bg-success fs-6">Online</p>
                    </div>
                </div>

                {{-- Tombol --}}
                <div class="d-flex justify-content-between mt-4">
                    <a href="{{ route('dashboard') }}" class="btn btn-secondary">← Kembali ke Dashboard</a>

                    <form action="{{ route('logout') }}" method="POST">
                        @csrf
                        <button class="btn btn-danger">Logout</button>
                    </form>
                </div>

            </div>
        </div>
    </div>
</div>

@endsection
