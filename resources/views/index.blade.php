@extends('./layouts/main')

@section('container')
  {{-- Hero --}}
  <div class="container">
    <div class="row justify-content-center align-items-center flex-column-reverse flex-md-row pt-8 pb-8">
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
    <div class="row justify-content-center gap-3 align-items-center pt-8 pb-8">
      <h1 class="section-heading text-center mb-5">
        Pelanggan Kami
      </h1>
      <div class="col-md-4">
        <img src="/images/partner-1.png" alt="" class="img-fluid">
      </div>
      <div class="col-md-4">
        <img src="/images/partner-2.png" alt="" class="img-fluid">
      </div>
    </div>
  </div>

  {{-- Hero --}}
  <div class="container">
    <div class="row justify-content-center align-items-center flex-column-reverse flex-md-row pt-8 pb-8">
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
@endsection
