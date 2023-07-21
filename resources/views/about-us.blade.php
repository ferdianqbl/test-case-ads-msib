@extends('./layouts/main')

@section('container')
  {{-- Hero --}}
  <div class="container pt-8 mb-5">
    <div class="row align-items-end justify-content-center">
      <div class="col-lg-7 col-md-6">
        <h1 class="hero-heading">
          Kami hanya akan memberikan hidangan <span>terbaik dan berkualitas</span> untukmu.
        </h1>
      </div>
      <div class="col-lg-5 col-md-6">
        <p class="text-dark-grey">
          Lorem ipsum dolor sit amet consectetur. Sodales fermentum aenean nisi dui purus accumsan sit amet vel.
        </p>
      </div>
    </div>
  </div>
  <div class="about-us-hero-img">
    <img src="/images/about-us-hero-img.png" alt="" class="img-fluid">
  </div>
  {{-- Reason --}}
  <div class="container pt-8 mb-5">
    <div class="row align-items-start justify-content-center">
      <div class="col-md-6">
        <h1 class="hero-heading">
          Pelayanan terbaik dengan harga terjangkau
        </h1>
      </div>
      <div class="col-md-6">
        <p class="text-dark-grey" style="font-weight: 600;">
          Lorem ipsum dolor sit amet consectetur. Sodales fermentum aenean nisi dui purus accumsan sit amet vel.
        </p>
        <p class="text-dark-grey">
          Lorem ipsum dolor sit amet consectetur. Ultrices nisi ornare non nunc sit. Sem turpis sit tellus sed fringilla
          suspendisse. Faucibus in in velit mauris amet tempor tempor. Vestibulum at amet vivamus ridiculus nibh aenean
          purus vitae. Enim urna adipiscing massa dictum faucibus. Nulla porttitor cras fermentum justo. Nisl in purus non
          adipiscing placerat.
          Velit risus mattis dolor nam vitae vulputate augue. Scelerisque tortor viverra in libero malesuada augue
          viverra. Consequat vehicula fringilla et velit habitant tincidunt mollis sem quis. Sit cras auctor rutrum
          feugiat. Faucibus ante at tempor laoreet. Pharetra risus libero bibendum posuere consequat consequat nibh.
          Feugiat cras nunc eget cras gravida in nam aliquet imperdiet. Suspendisse egestas pulvinar ut pulvinar est
          ligula. Sollicitudin dui nibh eu tellus. Condimentum amet integer elit in cras.
        </p>
      </div>
    </div>
  </div>

  {{-- Partners --}}
  <div class="container">
    <div class="row justify-content-center align-items-center pt-8">
      <h1 class="section-heading text-center mb-5">
        Pelanggan Kami
      </h1>
      <div class="col-md-4 col-sm-5 col-6">
        <img src="/images/partner-1.png" alt="" class="img-fluid">
      </div>
      <div class="col-md-4 col-sm-5 col-6">
        <img src="/images/partner-3.png" alt="" class="img-fluid">
      </div>
      <div class="col-md-4 col-sm-5 col-6">
        <img src="/images/partner-2.png" alt="" class="img-fluid">
      </div>
    </div>
  </div>

  {{-- About Us --}}
  <div style="background: #EDF5E7; margin-top: 8rem;">
    <div class="container">
      <div class="row justify-content-center align-items-center pt-8 pb-8">
        <div class="col-md-5">
          <img src="/images/product-about-us.png" alt="" class="img-fluid">
        </div>
        <div class="col-md-7 mt-5 mt-md-0">
          <h1 class="section-heading mb-3">
            Pesan catering, solusi makan bebas pusing
          </h1>
          <p class="text-black">
            Kami mengerti bahwa di kantor atau sekolah, makanan bukanlah hanya kebutuhan, tetapi juga faktor penting dalam
            produktivitas dan kesehatan. Oleh karena itu, kami menawarkan layanan catering yang dapat memenuhi kebutuhan
            nutrisi dan selera Anda, serta mempermudah Anda dalam menyediakan makanan berkualitas untuk karyawan atau
            siswa
            Anda.
          </p>
          <a href="/" class="button-primary mt-4 d-inline-block">Langganan Sekarang</a>
        </div>
      </div>
    </div>
  </div>
@endsection
