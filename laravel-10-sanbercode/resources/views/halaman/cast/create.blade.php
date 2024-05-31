@extends('layout.master')

@section('judul', 'Table Cast | create')

@section('content')

<h2>Tambah Data</h2>
        <form action="{{route('cast.store')}}" method="POST">
            @csrf
            <div class="form-group">
                <label for="nama">Nama</label>
                <input type="text" class="form-control" name="nama" id="nama" placeholder="Masukkan nama">
                @error('nama')
                    <div class="alert alert-danger">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="form-group">
                <label for="umur">Umur</label>
                <input type="text" class="form-control" name="umur" id="umur" placeholder="Masukkan umur">
                @error('umur')
                    <div class="alert alert-danger">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="form-group">
                <label for="bio" class="form-label">Bio</label>
                <textarea class="form-control" id="bio" rows="3" name="bio" placeholder="Masukkan bio"></textarea>
                @error('bio')
                    <div class="alert alert-danger">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <button type="submit" class="btn btn-success">Tambah</button>
            <a href="{{route('cast')}}" class="btn btn-primary card-link">Kembali</a>
        </form>

@endsection
