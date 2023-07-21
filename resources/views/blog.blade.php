@extends('./layouts/main')

@section('container')
  {{-- Hero --}}
  <div class="position-relative">
    <div class="container pt-8">
      <h1 class="banner-heading text-center">
        Berita Terbaru <span>Dapur Panen</span>
      </h1>

      <p class="text-center" style="color: #747474; font-size: 1.25rem;">Berita mengenai informasi makanan dan produk kami
      </p>

      <div class="card border-0 blog-banner-card">
        <img src="/images/blog-hero-img.png" class="img-fluid" alt="">
        <div class="card-img-overlay row justify-content-start align-items-end">
          <div class="col-lg-7 col-md-9">
            <p class="date">20 September 2022 &#x2022; by <span>Najwa Putri</span></p>
            <h1 class="title">3 Makanan yang Bikin Kecerdasan Menurun, Penting Dihindari!</h1>
            <p class="text">Apa saja makanan yang dapat membuat kecerdasan menurun?</p>
          </div>

        </div>
      </div>

    </div>
    <img src="/images/wave.svg" alt="" class="img-fluid position-absolute"
      style="z-index: -1; top: 50%; left: 0; right: 0; transform: translateY(-20%);">
  </div>
  {{-- Blog --}}
  <div class="container pt-8">
    <div class="row justify-content-center align-items-start gap-3 gap-md-0">
      @for ($i = 0; $i < 9; $i++)
        <div class="col-lg-4 col-md-6 p-0 p-md-3">
          <div class="blog-card">
            <div class="blog-img">
              <img src="/images/blog-1.png" alt="">
            </div>
            <div class="blog-card-body">
              <p class="date"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                  fill="none">
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
  </div>
@endsection
