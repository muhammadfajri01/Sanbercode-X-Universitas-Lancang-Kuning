

  @extends('layout.master')

@section('judul', 'Table Cast | create')

@section('content')

<div class="card w-50">
    <div class="card-body">
        <h2>Detail</h2>
        <hr>
        <h4><strong>Nama :</strong> {{$cast->nama}}</h4>
        <h4><strong>Umur :</strong> {{$cast->umur}}</h4>
        <p class="card-text border"><h4><strong>Bio :</strong></h4>{{$cast->bio}}</p>
        <hr>
        <a href="{{route('cast')}}" class="btn btn-primary card-link">Kembali</a>
    </div>
  </div>
@endsection
