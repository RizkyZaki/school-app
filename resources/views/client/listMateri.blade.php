@extends('client.template.main')

@section('content')
<div class="container-xxl py-5">
  <div class="container">
    <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
      <h6 class="section-title bg-white text-center text-primary px-3">Materi</h6>
      <h1 class="mb-5">List Materi</h1>
    </div>
    <div class="row g-4 justify-content-center">
      @foreach ($materi as $item)
      <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
        <div class="course-item bg-light">
          <div class="position-relative overflow-hidden">
            <img class="img-fluid" src={{asset("storage/". $item->gambar)}} alt="">
            <div class="text-center p-4 pb-0">
              <h3 class="mb-0">{{$item->judul}}</h3>
              <div class="mb-3">
                <a href="{{url('mapels/'.$item->id_mapel)}}">{{$item->mapel->nama_mapel}}</a>
              </div>
            </div>
            <div class="d-flex border-top">
              <a href="{{url('detail/'.$item->slug)}}" style="cursor: pointer"
                class="flex-fill text-center border-end py-2"><i class="fa fa-pencil text-primary me-2"></i>Detail
                Materi</a>
            </div>
          </div>
        </div>
      </div>
      @endforeach
    </div>
  </div>
</div>
@endsection