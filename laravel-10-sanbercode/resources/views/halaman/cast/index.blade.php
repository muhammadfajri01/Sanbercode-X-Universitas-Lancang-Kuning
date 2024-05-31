@extends('layout.master')

@section('judul', 'Table Cast')

@section('content')

@if(session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@endif

<a href="{{route('cast.create')}}" class="btn btn-primary mb-3">Tambah</a>
        <table class="table table-striped table-bordered">
            <thead>
                <tr>
                    <th scope="col">No</th>
                    <th scope="col">Nama</th>
                    <th scope="col">Umur</th>
                    <th scope="col">Bio</th>
                    <th>Action</th>
                  </tr>
            </thead>
            <tbody>
                @foreach ($cast as $c)
                <tr>
                    <td>{{$loop->iteration}}</th>
                    <td>{{$c->nama}}</td>
                    <td>{{$c->umur}}</td>
                    <td>{{$c->bio}}</td>
                    <td>
                        <a href="{{route('cast.show', $c->id)}}" class="btn btn-info">Show</a>
                        <a href="{{route('cast.edit', $c->id)}}" class="btn btn-primary">Edit</a>
                        <form action="{{route('cast.destroy', $c->id)}}" method="POST">
                            @csrf
                            @method('DELETE')
                            <input type="submit" class="btn btn-danger my-1" value="Delete">
                        </form>
                    </td>
                </tr>
                @endforeach
          </table>
@endsection

