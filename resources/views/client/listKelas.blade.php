@extends('client.template.main')

@section('content')
<div class="container-xxl py-5 category">
  <div class="container">
    <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
      <h6 class="section-title bg-white text-center text-primary px-3">Kelas & Jurusan</h6>
      <h1 class="mb-5">Daftar Kelas dan Jurusan</h1>
    </div>
    <div class="row">
      @foreach ($kelas as $item)
      <div class="col-md-4">
        <div class="card">
          <img src={{asset("template/img/cat-3.jpg")}} class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title text-center fw-bold">{{$item->jurusan}}</h5>
            <p class="card-title text-center fw-bold">{{$item->nama_kelas}}</p>
          </div>
          <div class="d-flex border-top">
            <a href="{{url('materi/kelas/'.$item->id)}}" class="flex-fill text-center border-end py-2"><i
                class="fa fa-book text-primary me-2"></i>Lihat
              Materi</a>
          </div>
        </div>
      </div>
      @endforeach
    </div>
  </div>
</div>
@endsection