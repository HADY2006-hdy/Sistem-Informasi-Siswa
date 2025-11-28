@extends('layout')

@section('content')
<div class="card shadow-sm">
    <div class="card-body">
        <h4 class="mb-4">Edit Data Siswa</h4>

        <form action="{{ route('siswa.update', $siswa->id) }}" method="POST">
            @csrf
            @method('PUT')

            <div class="mb-3">
                <label class="form-label">Nama</label>
                <input type="text" name="nama" class="form-control" value="{{ $siswa->nama }}" required>
            </div>

            <div class="mb-3">
                <label class="form-label">NIS</label>
                <input type="text" name="nis" class="form-control" value="{{ $siswa->nis }}" required>
            </div>

            <div class="mb-3">
                <label class="form-label">Kelas</label>
                <input type="text" name="kelas" class="form-control" value="{{ $siswa->kelas }}" required>
            </div>

            <div class="mb-3">
                <label class="form-label">Alamat</label>
                <textarea name="alamat" class="form-control" required>{{ $siswa->alamat }}</textarea>
            </div>

            <div class="mb-3">
                <label class="form-label">Gender</label>
                <select name="gender" class="form-select" required>
                    <option value="L" {{ $siswa->gender=='L' ? 'selected' : '' }}>Laki-laki</option>
                    <option value="P" {{ $siswa->gender=='P' ? 'selected' : '' }}>Perempuan</option>
                </select>
            </div>

            <button type="submit" class="btn btn-warning">Update</button>
            <a href="/siswa" class="btn btn-secondary">Kembali</a>
        </form>
    </div>
</div>
@endsection
