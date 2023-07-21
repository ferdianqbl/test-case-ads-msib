@extends('./layouts/main')

@section('container')
  {{-- Hero --}}
  <div class="overflow-hidden">
    <div class="container position-relative pb-8"
      style="display: flex; align-items-center; justify-content: center; max-height: 100vh;">
      <div class="row">
        <div class="col-md-6 pt-8">
          <h1 class="hero-heading">
            Sajikan hidangan terbaikmu, Bersama DapurPanen
          </h1>
          <a href="/" class="button-primary mt-4 d-inline-block">Langganan Sekarang</a>
        </div>
        <div class="col-md-6">
          <img src="/images/product-hero-img.png" alt=""
            class="img-fluid position-absolute product-hero-img d-none d-md-block">
          <img src="/images/product-hero-img.png" alt="" class="img-fluid d-block d-md-none">
        </div>
      </div>
    </div>
  </div>

  {{-- Product --}}
  <div class="container pt-5">
    <h1 class="section-heading mb-5 text-center">
      Produk Kami
    </h1>

    <div class="row justify-content-start align-items-start gap-3 gap-md-0">
      <div class="col-md-4">
        <div class="product-card">
          <div class="product-img">
            <img src="/images/product-1.png" alt="">
          </div>
          <div class="product-card-body">
            <p class="title">Ready to Cook</p>
            <p class="text">Dapur Panen hadir dengan solusi praktis memasak dengan produk siap masak dari bahan-bahan
              dan bumbu segar berkualitas. Buat hidangan spesial di rumah dengan mudah.</p>
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="product-card">
          <div class="product-img">
            <img src="/images/product-2.png" alt="">
          </div>
          <div class="product-card-body">
            <p class="title">Ready to Eat</p>
            <p class="text">Nikmati hidangan spesial praktis dari Dapur Panen dengan produk siap saji berkualitas
              tinggi, aman dikonsumsi, dan terjaga kebersihannya.</p>
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="product-card">
          <div class="product-img">
            <img src="/images/product-3.png" alt="">
          </div>
          <div class="product-card-body">
            <p class="title">Catering</p>
            <p class="text">Berbagai hidangan lezat dan berkualitas tinggi tersedia dalam produk catering kami, yang
              siap memenuhi kebutuhan acara Anda dengan beragam pilihan menu.</p>
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="product-card">
          <div class="product-img">
            <img src="/images/product-4.png" alt="">
          </div>
          <div class="product-card-body">
            <p class="title">Burger Panen</p>
            <p class="text">Hidangan yang gurih dan praktis ini cocok untuk dinikmati kapan saja dan di mana saja.
              Rasakan kenikmatan sensasi gigitan pertama dari hidangan burger yang lezat dan bergizi!</p>
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="product-card">
          <div class="product-img">
            <img src="/images/product-5.png" alt="">
          </div>
          <div class="product-card-body">
            <p class="title">Kopi Panen</p>
            <p class="text">Nikmati sensasi kopi yang kaya aroma dan cita rasa dengan produk kopi kami yang terbuat dari
              biji kopi pilihan. Segera cicipi dan rasakan pengalaman kopi yang memikat lidah!</p>
          </div>
        </div>
      </div>
    </div>
  </div>

  {{-- About Us --}}
  <div class="container">
    <div class="row justify-content-center align-items-center pt-8">
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
          nutrisi dan selera Anda, serta mempermudah Anda dalam menyediakan makanan berkualitas untuk karyawan atau siswa
          Anda.
        </p>
        <a href="/" class="button-primary mt-4 d-inline-block">Langganan Sekarang</a>
      </div>
    </div>
  </div>
@endsection
