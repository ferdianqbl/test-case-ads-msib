<nav class="navbar navbar-expand-lg bg-body-white fixed-top" id="navbar">
  <div class="container">
    <a class="navbar-brand" href="#">
      <img src="/images/logo.svg" alt="" class="img-fluid d-none d-lg-block">
      <img src="/images/logo-icon.svg" alt="" class="img-fluid d-lg-none d-block">
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
      aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse text-center py-3 py-md-0" id="navbarSupportedContent">
      <ul class="navbar-nav text-center mx-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link @if (Request::is('/')) active @endif" href="/">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link @if (Request::is('product')) active @endif" href="/product">Produk</a>
        </li>
        <li class="nav-item">
          <a class="nav-link @if (Request::is('promo')) active @endif" href="/promo">Promo</a>
        </li>
        <li class="nav-item">
          <a class="nav-link @if (Request::is('blog')) active @endif" href="/blog">Blog</a>
        </li>
        <li class="nav-item">
          <a class="nav-link @if (Request::is('about-us')) active @endif" href="/about-us">About Us</a>
        </li>
        <li class="nav-item">
          <a class="nav-link @if (Request::is('contact-us')) active @endif" href="/contact-us">Contact Us</a>
        </li>
      </ul>
      <a class="button-primary" href="#">Download App</a>
    </div>
  </div>
</nav>
