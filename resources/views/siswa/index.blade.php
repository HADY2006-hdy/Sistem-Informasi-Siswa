@extends('layout')

@section('page_title', 'Daftar Siswa')

@section('content')

<div class="d-flex justify-content-between align-items-center mb-3">
    <h3 class="mb-0">Daftar Siswa</h3>

    <div class="d-flex">

        <!-- FORM SEARCH -->
        <form action="{{ route('siswa.index') }}" method="GET" class="d-flex">
            <input type="text" name="search" class="form-control"
                   placeholder="Cari nama siswa..."
                   value="{{ request()->search }}">

            <button class="btn btn-primary ms-2">Cari</button>

            @if(request()->search)
                <a href="{{ route('siswa.index') }}" class="btn btn-secondary ms-2">
                    Reset
                </a>
            @endif
        </form>

        <a href="{{ route('siswa.create') }}" class="btn btn-success ms-3">
            + Tambah Siswa
        </a>
    </div>
</div>

@if(session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@endif

<div class="card shadow-sm">
    <div class="card-body">

        <table class="table table-striped table-hover align-middle">
            <thead class="table-primary">
                <tr>
                    <th>ID</th>
                    <th>Nama</th>
                    <th>NIS</th>
                    <th>Kelas</th>
                    <th>Alamat</th>
                    <th>Gender</th>
                    <th class="text-center">Aksi</th>
                </tr>
            </thead>

            <tbody>
                @forelse($siswas as $siswa)
                    <tr>
                        <td>{{ $siswa->id }}</td>
                        <td>{{ $siswa->nama }}</td>
                        <td>{{ $siswa->nis }}</td>
                        <td>{{ $siswa->kelas }}</td>
                        <td>{{ $siswa->alamat }}</td>
                        <td>{{ $siswa->gender }}</td>
                        <td class="text-center">
                            <a href="{{ route('siswa.edit', $siswa->id) }}" class="btn btn-warning btn-sm">
                                Edit
                            </a>

                            <form action="{{ route('siswa.destroy', $siswa->id) }}"
                                  method="POST" class="d-inline">
                                @csrf
                                @method('DELETE')
                                <button onclick="return confirm('Yakin hapus?')"
                                        class="btn btn-danger btn-sm">
                                    Hapus
                                </button>
                            </form>
                        </td>
                    </tr>

                @empty
                    <tr>
                        <td colspan="7" class="text-center text-muted py-3">
                            Belum ada data siswa.
                        </td>
                    </tr>
                @endforelse
            </tbody>
        </table>

    </div>
</div>

@endsection
