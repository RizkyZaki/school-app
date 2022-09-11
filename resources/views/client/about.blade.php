@extends('client.template.main')

@section('content')
<div class="container-xxl py-5">
  <div class="container">
    <div class="text-center wow fadeInUp mb-5 mt-5" data-wow-delay="0.1s">
      <h6 class="section-title bg-white text-center text-primary px-3">Tentang Kami</h6>

    </div>
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
@endsection