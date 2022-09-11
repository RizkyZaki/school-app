@extends('dashboard.template.main')

@section('content')
<div class="container p-5">
  <h1 class="fw-bolder mb-4">{{$materi->judul}}</h1>
  <img src="{{asset('storage/'. $materi->gambar)}}" class="img-fluid mb-3" alt="">
  <p>Pelajaran : <span class="fw-bold">{{$materi->mapel->nama_mapel}}</span> | Kelas : <span
      class="fw-bold">{{$materi->kelas->nama_kelas}}</span>
  </p>
  <p>{!!$materi->isi!!}</p>
</div>
@endsection