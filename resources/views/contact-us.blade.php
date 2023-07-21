<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>DapurPanen</title>
  <link rel="stylesheet" href="/css/bootstrap.min.css">
  <link rel="stylesheet" href="/css/style.css">
</head>

<body>
  @include('components.navbar')

  <div class="pt-8" id="contact-us">
    <div class="container">
      <div class="row justify-content-center align-items-center gap-2">
        <div class="col-lg-6">
          <h1 class="mb-5" style="color: #0F172A; font-size: 2.25rem; font-weight: 600;">Contact Us</h1>

          <form class="form" id="form">
            <div class="mb-3">
              <label for="name" class="form-label">Nama Lengkap</label>
              <input type="text" class="form-control" id="name" placeholder="Masukkan Nama Lengkap">
            </div>
            <div class="mb-3">
              <label for="phone" class="form-label">Nomor HP</label>
              <input type="tel" class="form-control" id="phone" placeholder="Masukkan Nomor HP">
            </div>
            <div class="mb-3">
              <label for="email" class="form-label">Email</label>
              <input type="email" class="form-control" id="email" placeholder="Masukkan Email">
            </div>
            <div class="mb-3">
              <label for="message" class="form-label">Pesan</label>
              <textarea class="form-control" id="message" rows="3" placeholder="Masukkan Pesan"></textarea>
            </div>

            <button type="submit" class="button-primary" style="border-radius: 5px;">Kirim</button>
          </form>
        </div>
        <div class="col-lg-4 d-none d-lg-block p-4" style="border-radius: 12px; background: rgba(71, 158, 16, 0.75);">
          <h1 style="color: #0F172A; font-size: 2.25rem; font-weight: 600;">Hubungi Kami untuk info lebih lanjut</h1>
          <p style="color: #303030; ">Untuk pertanyaan lebih lanjut, jangan ragu untuk menghubungi kami dengan mengisi
            formulir disamping. Kami akan menghubungi anda sesegera mungkin.</p>
          <img src="/images/cta.png" alt="" class="img-fluid">
        </div>
      </div>
    </div>
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320" class="position-absolute right-0 left-0"
      style="z-index: -1; top: 100vh;">
      <path fill="#EDF5E7" fill-opacity="1"
        d="M0,160L48,133.3C96,107,192,53,288,32C384,11,480,21,576,58.7C672,96,768,160,864,154.7C960,149,1056,75,1152,42.7C1248,11,1344,21,1392,26.7L1440,32L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z">
      </path>
    </svg>
  </div>
  <script src="/js/bootstrap.bundle.min.js"></script>
</body>

</html>
