@extends('client.template.main')

@section('content')
<div class="container-xxl py-5">
  <div class="container">
    <img src={{asset("storage/". $materi->gambar)}} class="img-fluid mt-4 mb-3" alt="">
    <h1 class="mb-4 text-center" style="color: #06BBCC; font-weight: bolder">{{$materi->judul}}</h1>
    <p class="mb-4">{!!$materi->isi!!}</p>
    <small class="flex-fill text-center py-2"><i class="fa fa-user-tie text-primary me-2"></i>Author / guru
      {{$materi->user->nama_lengkap}}</small>
  </div>
</div>
@endsection