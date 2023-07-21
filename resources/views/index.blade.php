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

    <div class="row justify-content-center align-items-start gap-3 gap-md-0">
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

  <div style="background: #EDF5E7; margin-top: 8rem;">
    {{-- Promo --}}
    <div class="container pt-8">
      <h1 class="section-heading mb-5 text-center">
        Promo Menarik
      </h1>

      <div class="row justify-content-center align-items-start gap-3 gap-md-0">
        @for ($i = 0; $i < 3; $i++)
          <div class="col-lg-4 col-md-6 p-0 p-md-3">
            <div class="promo-card">
              <div class="promo-img">
                <img src="/images/promo-1.png" alt="">
              </div>
              <div class="promo-card-body">
                <p class="date"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                    viewBox="0 0 24 24" fill="none">
                    <path d="M2.5 19V7H21.5V19C21.5 20.1 20.6 21 19.5 21H4.5C3.4 21 2.5 20.1 2.5 19Z" fill="#EAEAEB" />
                    <path d="M21.5 5V8H2.5V5C2.5 3.9 3.4 3 4.5 3H19.5C20.6 3 21.5 3.9 21.5 5Z" fill="#479E10" />
                    <path
                      d="M16.5 6.5C17.3284 6.5 18 5.82843 18 5C18 4.17157 17.3284 3.5 16.5 3.5C15.6716 3.5 15 4.17157 15 5C15 5.82843 15.6716 6.5 16.5 6.5Z"
                      fill="#35770C" />
                    <path
                      d="M7.5 6.5C8.32843 6.5 9 5.82843 9 5C9 4.17157 8.32843 3.5 7.5 3.5C6.67157 3.5 6 4.17157 6 5C6 5.82843 6.67157 6.5 7.5 6.5Z"
                      fill="#35770C" />
                    <path
                      d="M16.5 1.5C15.95 1.5 15.5 1.95 15.5 2.5V5C15.5 5.55 15.95 6 16.5 6C17.05 6 17.5 5.55 17.5 5V2.5C17.5 1.95 17.05 1.5 16.5 1.5ZM7.5 1.5C6.95 1.5 6.5 1.95 6.5 2.5V5C6.5 5.55 6.95 6 7.5 6C8.05 6 8.5 5.55 8.5 5V2.5C8.5 1.95 8.05 1.5 7.5 1.5Z"
                      fill="#B0BEC5" />
                    <path
                      d="M6.5 10H8.5V12H6.5V10ZM9.5 10H11.5V12H9.5V10ZM12.5 10H14.5V12H12.5V10ZM15.5 10H17.5V12H15.5V10ZM6.5 13H8.5V15H6.5V13ZM9.5 13H11.5V15H9.5V13ZM12.5 13H14.5V15H12.5V13ZM15.5 13H17.5V15H15.5V13ZM6.5 16H8.5V18H6.5V16ZM9.5 16H11.5V18H9.5V16ZM12.5 16H14.5V18H12.5V16ZM15.5 16H17.5V18H15.5V16Z"
                      fill="#479E10" />
                  </svg> Berlaku hingga 31 May 2023</p>
                <p class="title">Rasakan Kelezatan Hidangan Premium Kami, Dalam Promo Catering Khusus!</p>
                <div class="text-end mt-3">
                  <a href="/" class="button-primary mt-4 d-inline-block">Selengkapnya <svg
                      xmlns="http://www.w3.org/2000/svg" width="25" height="24" viewBox="0 0 25 24"
                      fill="none">
                      <path
                        d="M13.8 17.275C13.6 17.075 13.504 16.8334 13.512 16.55C13.5207 16.2667 13.625 16.025 13.825 15.825L16.65 13H5.5C5.21667 13 4.979 12.904 4.787 12.712C4.59567 12.5207 4.5 12.2834 4.5 12C4.5 11.7167 4.59567 11.479 4.787 11.287C4.979 11.0957 5.21667 11 5.5 11H16.65L13.8 8.15005C13.6 7.95005 13.5 7.71238 13.5 7.43705C13.5 7.16238 13.6 6.92505 13.8 6.72505C14 6.52505 14.2377 6.42505 14.513 6.42505C14.7877 6.42505 15.025 6.52505 15.225 6.72505L19.8 11.3C19.9 11.4 19.971 11.5084 20.013 11.625C20.0543 11.7417 20.075 11.8667 20.075 12C20.075 12.1334 20.0543 12.2584 20.013 12.375C19.971 12.4917 19.9 12.6 19.8 12.7L15.2 17.3C15.0167 17.4834 14.7877 17.575 14.513 17.575C14.2377 17.575 14 17.475 13.8 17.275Z"
                        fill="white" />
                    </svg></a>
                </div>
              </div>
            </div>
          </div>
        @endfor
      </div>

      <div class="text-center">
        <a href="/" class="button-link mt-4 d-inline-block">Lihat Semua Promo</a>
      </div>
    </div>

    {{-- Review --}}
    <div class="container pt-8 pb-8">
      <h1 class="section-heading mb-5 text-center">
        Kata Mereka
      </h1>

      <div class="owl-carousel owl-theme">
        <div class="review-card item">
          <div class="review-card-body mb-3">
            <p class="title">Murah, Cepet bree</p>
            <p class="text">Udah enak murah dan praktis lagi buat makan siang di kampus sama temen2 hehehe ^^</p>
          </div>

          <div class="review-card-profile d-flex flex-column gap-1 justify-content-center align-items-center">
            <img src="https://source.unsplash.com/random/300×300?person" alt=""
              class="img-fluid rounded-circle">
            <p class="name p-0 mb-0">Asep M</p>
            <p class="job p-0 mb-0">Mahasiswa</p>
          </div>
        </div>
        <div class="review-card item">
          <div class="review-card-body mb-3">
            <p class="title">Murah, Cepet bree</p>
            <p class="text">Udah enak murah dan praktis lagi buat makan siang di kampus sama temen2 hehehe ^^</p>
          </div>

          <div class="review-card-profile d-flex flex-column gap-1 justify-content-center align-items-center">
            <img src="https://source.unsplash.com/random/300×300?person" alt=""
              class="img-fluid rounded-circle">
            <p class="name p-0 mb-0">Asep M</p>
            <p class="job p-0 mb-0">Mahasiswa</p>
          </div>
        </div>
        <div class="review-card item">
          <div class="review-card-body mb-3">
            <p class="title">Murah, Cepet bree</p>
            <p class="text">Udah enak murah dan praktis lagi buat makan siang di kampus sama temen2 hehehe ^^</p>
          </div>

          <div class="review-card-profile d-flex flex-column gap-1 justify-content-center align-items-center">
            <img src="https://source.unsplash.com/random/300×300?person" alt=""
              class="img-fluid rounded-circle">
            <p class="name p-0 mb-0">Asep M</p>
            <p class="job p-0 mb-0">Mahasiswa</p>
          </div>
        </div>
        <div class="review-card item">
          <div class="review-card-body mb-3">
            <p class="title">Murah, Cepet bree</p>
            <p class="text">Udah enak murah dan praktis lagi buat makan siang di kampus sama temen2 hehehe ^^</p>
          </div>

          <div class="review-card-profile d-flex flex-column gap-1 justify-content-center align-items-center">
            <img src="https://source.unsplash.com/random/300×300?person" alt=""
              class="img-fluid rounded-circle">
            <p class="name p-0 mb-0">Asep M</p>
            <p class="job p-0 mb-0">Mahasiswa</p>
          </div>
        </div>
        <div class="review-card item">
          <div class="review-card-body mb-3">
            <p class="title">Murah, Cepet bree</p>
            <p class="text">Udah enak murah dan praktis lagi buat makan siang di kampus sama temen2 hehehe ^^</p>
          </div>

          <div class="review-card-profile d-flex flex-column gap-1 justify-content-center align-items-center">
            <img src="https://source.unsplash.com/random/300×300?person" alt=""
              class="img-fluid rounded-circle">
            <p class="name p-0 mb-0">Asep M</p>
            <p class="job p-0 mb-0">Mahasiswa</p>
          </div>
        </div>
        <div class="review-card item">
          <div class="review-card-body mb-3">
            <p class="title">Murah, Cepet bree</p>
            <p class="text">Udah enak murah dan praktis lagi buat makan siang di kampus sama temen2 hehehe ^^</p>
          </div>

          <div class="review-card-profile d-flex flex-column gap-1 justify-content-center align-items-center">
            <img src="https://source.unsplash.com/random/300×300?person" alt=""
              class="img-fluid rounded-circle">
            <p class="name p-0 mb-0">Asep M</p>
            <p class="job p-0 mb-0">Mahasiswa</p>
          </div>
        </div>
      </div>
    </div>
  </div>

  {{-- Blog --}}
  <div class="container pt-8">
    <h1 class="section-heading mb-5 text-center">
      Blog Terbaru Kami
    </h1>

    <div class="row justify-content-center align-items-start gap-3 gap-md-0">
      @for ($i = 0; $i < 3; $i++)
        <div class="col-lg-4 col-md-6 p-0 p-md-3">
          <div class="blog-card">
            <div class="blog-img">
              <img src="/images/blog-1.png" alt="">
            </div>
            <div class="blog-card-body">
              <p class="date"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                  viewBox="0 0 24 24" fill="none">
                  <path d="M2.5 19V7H21.5V19C21.5 20.1 20.6 21 19.5 21H4.5C3.4 21 2.5 20.1 2.5 19Z" fill="#EAEAEB" />
                  <path d="M21.5 5V8H2.5V5C2.5 3.9 3.4 3 4.5 3H19.5C20.6 3 21.5 3.9 21.5 5Z" fill="#479E10" />
                  <path
                    d="M16.5 6.5C17.3284 6.5 18 5.82843 18 5C18 4.17157 17.3284 3.5 16.5 3.5C15.6716 3.5 15 4.17157 15 5C15 5.82843 15.6716 6.5 16.5 6.5Z"
                    fill="#35770C" />
                  <path
                    d="M7.5 6.5C8.32843 6.5 9 5.82843 9 5C9 4.17157 8.32843 3.5 7.5 3.5C6.67157 3.5 6 4.17157 6 5C6 5.82843 6.67157 6.5 7.5 6.5Z"
                    fill="#35770C" />
                  <path
                    d="M16.5 1.5C15.95 1.5 15.5 1.95 15.5 2.5V5C15.5 5.55 15.95 6 16.5 6C17.05 6 17.5 5.55 17.5 5V2.5C17.5 1.95 17.05 1.5 16.5 1.5ZM7.5 1.5C6.95 1.5 6.5 1.95 6.5 2.5V5C6.5 5.55 6.95 6 7.5 6C8.05 6 8.5 5.55 8.5 5V2.5C8.5 1.95 8.05 1.5 7.5 1.5Z"
                    fill="#B0BEC5" />
                  <path
                    d="M6.5 10H8.5V12H6.5V10ZM9.5 10H11.5V12H9.5V10ZM12.5 10H14.5V12H12.5V10ZM15.5 10H17.5V12H15.5V10ZM6.5 13H8.5V15H6.5V13ZM9.5 13H11.5V15H9.5V13ZM12.5 13H14.5V15H12.5V13ZM15.5 13H17.5V15H15.5V13ZM6.5 16H8.5V18H6.5V16ZM9.5 16H11.5V18H9.5V16ZM12.5 16H14.5V18H12.5V16ZM15.5 16H17.5V18H15.5V16Z"
                    fill="#479E10" />
                </svg> 20 September 2022</p>
              <p class="title">3 Makanan yang Bikin Kecerdasan Menurun, Penting Dihindari</p>
              <p class="author">by <span>Najwa Putri</span></p>
            </div>
          </div>
        </div>
      @endfor
    </div>

    <div class="text-center">
      <a href="/" class="button-primary mt-4 d-inline-block">Lihat Semuanya <svg
          xmlns="http://www.w3.org/2000/svg" width="25" height="24" viewBox="0 0 25 24" fill="none">
          <path
            d="M13.8 17.275C13.6 17.075 13.504 16.8334 13.512 16.55C13.5207 16.2667 13.625 16.025 13.825 15.825L16.65 13H5.5C5.21667 13 4.979 12.904 4.787 12.712C4.59567 12.5207 4.5 12.2834 4.5 12C4.5 11.7167 4.59567 11.479 4.787 11.287C4.979 11.0957 5.21667 11 5.5 11H16.65L13.8 8.15005C13.6 7.95005 13.5 7.71238 13.5 7.43705C13.5 7.16238 13.6 6.92505 13.8 6.72505C14 6.52505 14.2377 6.42505 14.513 6.42505C14.7877 6.42505 15.025 6.52505 15.225 6.72505L19.8 11.3C19.9 11.4 19.971 11.5084 20.013 11.625C20.0543 11.7417 20.075 11.8667 20.075 12C20.075 12.1334 20.0543 12.2584 20.013 12.375C19.971 12.4917 19.9 12.6 19.8 12.7L15.2 17.3C15.0167 17.4834 14.7877 17.575 14.513 17.575C14.2377 17.575 14 17.475 13.8 17.275Z"
            fill="white" />
        </svg></a>
    </div>
  </div>
@endsection
