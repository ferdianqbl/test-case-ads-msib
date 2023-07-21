@extends('./layouts/main')

@section('container')
  {{-- Hero --}}
  <div class="container mb-5">
    <div class="row justify-content-center align-items-center flex-column-reverse flex-md-row pt-8">
      <div class="col-md-7 mt-5 mt-md-0">
        <h1 class="hero-heading">
          <span>GRATIS</span> <br>
          Burger Panen
        </h1>
        <p class="text-dark-grey">
          Hanya dengan Download Aplikasi Panenpanen.id dan Klaim Voucher gratis burger panen untuk pengguna baru
        </p>
        <a href="/" class="button-primary mt-4 d-inline-block">Download Aplikasi Sekarang</a>
      </div>
      <div class="col-md-5">
        <img src="/images/promo-hero-img.png" alt="" class="img-fluid">
      </div>
    </div>
  </div>

  {{-- promo --}}
  <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
    <path fill="#EDF5E7" fill-opacity="1"
      d="M0,160L48,133.3C96,107,192,53,288,32C384,11,480,21,576,58.7C672,96,768,160,864,154.7C960,149,1056,75,1152,42.7C1248,11,1344,21,1392,26.7L1440,32L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z">
    </path>
  </svg>
  <div style="background: #EDF5E7;">
    <div class="container pb-8">
      <nav class="d-flex flex-wrap align-items-center justify-content-center gap-3 mb-5">
        <a class="nav-link content-nav-link active" href="#">Semua Promo</a>
        <a class="nav-link content-nav-link" href="#">Promo Ready to Cook</a>
        <a class="nav-link content-nav-link" href="#">Promo Ready to Eat</a>
        <a class="nav-link content-nav-link" href="#">Promo Kopi</a>
        <a class="nav-link content-nav-link" href="#">Promo Burger Panen</a>
        <a class="nav-link content-nav-link" href="#">Promo Catering</a>
      </nav>
      <div class="row justify-content-center align-items-start gap-3 gap-md-0">
        @for ($i = 0; $i < 6; $i++)
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
                      xmlns="http://www.w3.org/2000/svg" width="25" height="24" viewBox="0 0 25 24" fill="none">
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
    </div>
  </div>
@endsection
