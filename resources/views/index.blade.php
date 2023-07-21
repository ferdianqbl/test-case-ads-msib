@extends('./layouts/main')

@section('container')
  {{-- Hero --}}
  <div class="container">
    <div class="row justify-content-center align-items-center flex-column-reverse flex-md-row pt-8">
      <div class="col-md-7 mt-5 mt-md-0">
        <h1 class="hero-heading">
          Sajikan hidangan terbaikmu, Bersama DapurPanen
        </h1>
        <p class="text-dark-grey">
          Kualitas terbaik selalu jadi prioritas kami. Berkomitmen memberikan pengalaman terbaik, produk aman, halal, dan
          legal, serta memenuhi standar pelanggan. Tepat waktu dan mutu produk kami jadi fokus utama untuk kepuasan
          pelanggan.
        </p>
        <a href="/" class="button-primary mt-4 d-inline-block">Langganan Sekarang</a>
      </div>
      <div class="col-md-5">
        <img src="/images/hero-img.png" alt="" class="img-fluid">
      </div>
    </div>
  </div>

  {{-- Partners --}}
  <div class="container">
    <div class="row justify-content-center gap-3 align-items-center pt-8">
      <h1 class="section-heading text-center mb-5">
        Pelanggan Kami
      </h1>
      <div class="col-md-4 col-sm-5 col-6">
        <img src="/images/partner-1.png" alt="" class="img-fluid">
      </div>
      <div class="col-md-4 col-sm-5 col-6">
        <img src="/images/partner-2.png" alt="" class="img-fluid">
      </div>
    </div>
  </div>

  {{-- About Us --}}
  <div class="container">
    <div class="row justify-content-center align-items-center pt-8">
      <div class="col-md-5">
        <img src="/images/home-about-us-img.png" alt="" class="img-fluid">
      </div>
      <div class="col-md-7 mt-5 mt-md-0">
        <h1 class="section-heading mb-3">
          Tentang Kami
        </h1>
        <p class="text-black">
          Kami menyediakan berbagai macam pilihan menu yang sudah matang, siap masak untuk memudahkan anda dalam memilih
          makanan yang diinginkan. Kami berkomitmen untuk menggunakan bahan-bahan berkualitas dan segar untuk menjaga
          kualitas dan rasa dari setiap hidangan yang kami sajikan. Selain itu, kami juga menyediakan layanan catering
          untuk berbagai acara seperti pesta ulang tahun, pernikahan, dan acara bisnis. Kami dapat menyesuaikan menu
          sesuai dengan kebutuhan dan preferensi pelanggan untuk memastikan bahwa setiap acara berjalan dengan sukses.
        </p>
        <a href="/" class="button-primary mt-4 d-inline-block">Lihat Selengkapnya</a>
      </div>
    </div>
  </div>

  {{-- Product --}}
  <div class="container pt-8">
    <h1 class="section-heading mb-5 text-center">
      Produk Kami
    </h1>

    <div class="row justify-content-center align-items-start">
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
    </div>

    <div class="text-center">
      <a href="/" class="button-primary mt-4 d-inline-block">Lihat Selengkapnya <svg
          xmlns="http://www.w3.org/2000/svg" width="25" height="24" viewBox="0 0 25 24" fill="none">
          <path
            d="M13.8 17.275C13.6 17.075 13.504 16.8334 13.512 16.55C13.5207 16.2667 13.625 16.025 13.825 15.825L16.65 13H5.5C5.21667 13 4.979 12.904 4.787 12.712C4.59567 12.5207 4.5 12.2834 4.5 12C4.5 11.7167 4.59567 11.479 4.787 11.287C4.979 11.0957 5.21667 11 5.5 11H16.65L13.8 8.15005C13.6 7.95005 13.5 7.71238 13.5 7.43705C13.5 7.16238 13.6 6.92505 13.8 6.72505C14 6.52505 14.2377 6.42505 14.513 6.42505C14.7877 6.42505 15.025 6.52505 15.225 6.72505L19.8 11.3C19.9 11.4 19.971 11.5084 20.013 11.625C20.0543 11.7417 20.075 11.8667 20.075 12C20.075 12.1334 20.0543 12.2584 20.013 12.375C19.971 12.4917 19.9 12.6 19.8 12.7L15.2 17.3C15.0167 17.4834 14.7877 17.575 14.513 17.575C14.2377 17.575 14 17.475 13.8 17.275Z"
            fill="white" />
        </svg></a>
    </div>
  </div>
@endsection
