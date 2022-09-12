@extends('client.template.main')

@section('content')
<div class="container-xxl py-5">
  <div class="container">
    <img src={{asset("storage/". $materi->gambar)}} class="img-fluid mt-4 mb-3" alt="">
    <h1 class="mb-4 text-center" style="color: #06BBCC; font-weight: bolder">{{$materi->judul}}</h1>
    <p class="mb-4">{!!$materi->isi!!}</p>
    <h6 class="text-center py-2"><i class="fa fa-user-tie text-primary me-2"></i>Author / guru
      {{$materi->user->nama_lengkap}}</h6>

    <h6 class="text-center py-2"><i class="fa fa-door-open text-primary me-2"></i>Kelas
      : <a href="{{url('materi/kelas/'.$materi->id_kelas)}}"> {{$materi->kelas->nama_kelas}} |
        {{$materi->kelas->jurusan}}</a></h6>
  </div>
</div>
@endsection