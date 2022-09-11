@extends('client.template.main')

@section('content')
<div class="container-xxl py-5">
  <div class="container">
    <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
      <h6 class="section-title bg-white text-center text-primary px-3">Mapel</h6>
      <h1 class="mb-5">Daftar Mapel</h1>
    </div>
    <div class="row g-4 justify-content-center">
      @foreach ($mapel as $item)
      <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
        <div class="course-item bg-light">
          <div class="position-relative overflow-hidden">
            <img class="img-fluid" src={{asset("template/img/course-2.jpg")}} alt="">
            <div class="w-100 d-flex justify-content-center position-absolute bottom-0 start-0 mb-4">
              <a href="{{url('mapels/'.$item->id)}}" class="flex-shrink-0 btn btn-sm btn-primary px-3 border-end"
                style="border-radius: 30px 0 0 30px;">Semua Materi</a>
            </div>
          </div>
          <div class="text-center p-4 pb-0">
            <h3 class="mb-0">{{$item->nama_mapel}}</h3>
            <div class="mb-3">
              <small class="fa fa-star text-primary"></small>
              <small class="fa fa-star text-primary"></small>
              <small class="fa fa-star text-primary"></small>
              <small class="fa fa-star text-primary"></small>
              <small class="fa fa-star text-primary"></small>
              <small>(123)</small>
            </div>
          </div>
          <div class="d-flex border-top">
            <small class="flex-fill text-center border-end py-2"><i class="fa fa-user-tie text-primary me-2"></i>Free
              Access</small>
            <small class="flex-fill text-center border-end py-2"><i
                class="fa fa-clock text-primary me-2"></i>Flexible</small>
          </div>
        </div>
      </div>
      @endforeach

    </div>
  </div>
</div>
@endsection