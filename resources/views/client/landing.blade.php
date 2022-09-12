@extends('client.template.main')
@section('content')
<!-- Carousel Start -->
<div class="container-fluid p-0 mb-5">
  <div class="owl-carousel header-carousel position-relative">
    <div class="owl-carousel-item position-relative">
      <img class="img-fluid" src={{asset("template/img/carousel-1.jpg")}} alt="">
      <div class="position-absolute top-0 start-0 w-100 h-100 d-flex align-items-center"
        style="background: rgba(24, 29, 56, .7);">
        <div class="container">
          <div class="row justify-content-start">
            <div class="col-sm-10 col-lg-8">
              <h5 class="text-primary text-uppercase mb-3 animated slideInDown">Best Online Courses</h5>
              <h1 class="display-3 text-white animated slideInDown">The Best Online Learning Platform</h1>
              <p class="fs-5 text-white mb-4 pb-2">Vero elitr justo clita lorem. Ipsum dolor at sed stet sit diam no.
                Kasd rebum ipsum et diam justo clita et kasd rebum sea sanctus eirmod elitr.</p>
              <a href="" class="btn btn-primary py-md-3 px-md-5 me-3 animated slideInLeft">Read More</a>
              <a href="" class="btn btn-light py-md-3 px-md-5 animated slideInRight">Join Now</a>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="owl-carousel-item position-relative">
      <img class="img-fluid" src={{asset("template/img/carousel-2.jpg")}} alt="">
      <div class="position-absolute top-0 start-0 w-100 h-100 d-flex align-items-center"
        style="background: rgba(24, 29, 56, .7);">
        <div class="container">
          <div class="row justify-content-start">
            <div class="col-sm-10 col-lg-8">
              <h5 class="text-primary text-uppercase mb-3 animated slideInDown">Best Online Courses</h5>
              <h1 class="display-3 text-white animated slideInDown">Get Educated Online From Your Home</h1>
              <p class="fs-5 text-white mb-4 pb-2">Vero elitr justo clita lorem. Ipsum dolor at sed stet sit diam no.
                Kasd rebum ipsum et diam justo clita et kasd rebum sea sanctus eirmod elitr.</p>
              <a href="" class="btn btn-primary py-md-3 px-md-5 me-3 animated slideInLeft">Read More</a>
              <a href="" class="btn btn-light py-md-3 px-md-5 animated slideInRight">Join Now</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- Carousel End -->


<!-- Service Start -->
<div class="container-xxl py-5">
  <div class="container">
    <div class="row g-4">
      <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.1s">
        <div class="service-item text-center pt-3">
          <div class="p-4">
            <i class="fa fa-3x fa-graduation-cap text-primary mb-4"></i>
            <h5 class="mb-3">Lulusan Berskill</h5>
            <p>Diam elitr kasd sed at elitr sed ipsum justo dolor sed clita amet diam</p>
          </div>
        </div>
      </div>
      <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.3s">
        <div class="service-item text-center pt-3">
          <div class="p-4">
            <i class="fa fa-3x fa-globe text-primary mb-4"></i>
            <h5 class="mb-3">Online Akses</h5>
            <p>Diam elitr kasd sed at elitr sed ipsum justo dolor sed clita amet diam</p>
          </div>
        </div>
      </div>
      <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.5s">
        <div class="service-item text-center pt-3">
          <div class="p-4">
            <i class="fa fa-3x fa-home text-primary mb-4"></i>
            <h5 class="mb-3">Belajar Dirumah</h5>
            <p>Diam elitr kasd sed at elitr sed ipsum justo dolor sed clita amet diam</p>
          </div>
        </div>
      </div>
      <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.7s">
        <div class="service-item text-center pt-3">
          <div class="p-4">
            <i class="fa fa-3x fa-book-open text-primary mb-4"></i>
            <h5 class="mb-3">Akses Materi dimana saja</h5>
            <p>Diam elitr kasd sed at elitr sed ipsum justo dolor sed clita amet diam</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- Service End -->


<!-- About Start -->
<div class="container-xxl py-5">
  <div class="container">
    <div class="row g-5">
      <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s" style="min-height: 400px;">
        <div class="position-relative h-100">
          <img class="img-fluid position-absolute w-100 h-100" src={{asset("template/img/about.jpg")}} alt=""
            style="object-fit: cover;">
        </div>
      </div>
      <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.3s">
        <h6 class="section-title bg-white text-start text-primary pe-3">Tentang Kami</h6>
        <h1 class="mb-4">Selamat datang di SCHOOL APP</h1>
        <p class="mb-4">Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit. Aliqu diam amet diam et eos.
          Clita erat ipsum et lorem et sit.</p>
        <p class="mb-4">Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit. Aliqu diam amet diam et eos.
          Clita erat ipsum et lorem et sit, sed stet lorem sit clita duo justo magna dolore erat amet</p>
        <div class="row gy-2 gx-4 mb-4">
          <div class="col-sm-6">
            <p class="mb-0"><i class="fa fa-arrow-right text-primary me-2"></i>Lulusan Berskill</p>
          </div>
          <div class="col-sm-6">
            <p class="mb-0"><i class="fa fa-arrow-right text-primary me-2"></i>Online Kelas</p>
          </div>
          <div class="col-sm-6">
            <p class="mb-0"><i class="fa fa-arrow-right text-primary me-2"></i>Akses Materi dimana saja</p>
          </div>
        </div>
        <a class="btn btn-primary py-3 px-5 mt-2" href="">Read More</a>
      </div>
    </div>
  </div>
</div>
<!-- About End -->


<!-- Categories Start -->
<div class="container-xxl py-5 category">
  <div class="container">
    <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
      <h6 class="section-title bg-white text-center text-primary px-3">Kelas & Jurusan</h6>
      <h1 class="mb-5">Daftar Kelas dan Jurusan</h1>
    </div>
    <div class="row">
      @foreach ($listKelas as $item)
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
<!-- Categories Start -->


<!-- Courses Start -->
<div class="container-xxl py-5">
  <div class="container">
    <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
      <h6 class="section-title bg-white text-center text-primary px-3">Mapel</h6>
      <h1 class="mb-5">Daftar Mapel</h1>
    </div>
    <div class="row g-4 justify-content-center">
      @foreach ($listMapel as $item)
      <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
        <div class="course-item bg-light">
          <div class="position-relative overflow-hidden">
            <img class="img-fluid" src={{asset("template/img/course-2.jpg")}} alt="">
            <div class="w-100 d-flex justify-content-center position-absolute bottom-0 start-0 mb-4">
              <a href="{{url('materi/mapel/'.$item->id)}}" class="flex-shrink-0 btn btn-sm btn-primary px-3 border-end"
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
<!-- Courses End -->

<div class="container-xxl py-5">
  <div class="container">
    <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
      <h6 class="section-title bg-white text-center text-primary px-3">Materi</h6>
      <h1 class="mb-5">Materi Terbaru</h1>
    </div>
    <div class="row g-4 justify-content-center">
      @foreach ($listMateri as $item)
      <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
        <div class="course-item bg-light">
          <div class="position-relative overflow-hidden">
            <img class="img-fluid" src={{asset("storage/". $item->gambar)}} alt="">
            <div class="text-center p-4 pb-0">
              <h3 class="mb-0">{{$item->judul}}</h3>
              <div class="mb-3">
                <p>{{$item->mapel->nama_mapel}}</p>
                <p>Kelas : {{$item->kelas->nama_kelas}} | {{$item->kelas->jurusan}}</p>
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