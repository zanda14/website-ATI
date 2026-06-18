<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Contact Us – ATI Smart Technology Solution</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"/>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css" rel="stylesheet"/>
  <link href="https://fonts.googleapis.com/css2?family=Barlow:ital,wght@0,400;0,500;0,600;0,700;0,900;1,900&family=Barlow+Condensed:wght@700;900&display=swap" rel="stylesheet"/>

  <style>
    :root {
      --navy:   #0b1638;
      --blue:   #162d7a;
      --mid:    #1e3fa0;
      --accent: #e8a020;
      --gray:   #6b7280;
    }
    *, *::before, *::after { box-sizing: border-box; margin: 0; padding: 0; }
    html { scroll-behavior: smooth; }
    body { font-family: 'Barlow', sans-serif; color: #1e2235; background: #fff; }

    /* ─── NAVBAR ───────────────────────────── */
    .topnav {
      background: #e8eaf2;
      border-bottom: 1px solid #d0d4e4;
      padding: 9px 0;
      position: sticky; top: 0; z-index: 1000;
    }
    .topnav .brand img { height: 38px; }
    .topnav .nav-link {
      font-weight: 600; font-size: .82rem;
      color: #2c2c3e !important; padding: 5px 12px !important;
      transition: color .2s;
    }
    .topnav .nav-link:hover,
    .topnav .nav-link.active { color: var(--blue) !important; }
    .btn-phone {
      border: 1.5px solid var(--navy); border-radius: 24px;
      padding: 6px 15px; font-size: .78rem; font-weight: 700;
      color: var(--navy); text-decoration: none;
      display: inline-flex; align-items: center; gap: 6px;
      transition: all .2s; white-space: nowrap;
    }
    .btn-phone:hover { background: var(--navy); color: #fff; }

    /* ─── SECTION 1 — HERO ─────────────────── */
    .contact-hero {
      position: relative;
      padding: 70px 0 60px;
      text-align: center;
      background-image:
      linear-gradient(135deg, rgba(11,22,56,0.75) 0%, rgba(22,45,122,0.65) 100%), url('images/baground2.jpeg');
      background-size: cover;
      background-position: center;
    }
    .contact-hero h1 {
      font-family: 'Barlow', sans-serif;
      font-weight: 900;
      font-size: clamp(2rem, 5vw, 3rem);
     color: #fff; margin-bottom: 20px;
      margin-bottom: 14px;
      text-transform: lowercase;
    }
    .contact-hero p {
      color: #fbfbfb;
      font-size: .95rem;
      line-height: 1.7;
      max-width: 440px;
      margin: 0 auto;
    }

    /* ─── SECTION 2 — WRITE TO US ──────────── */
    .write-sec {
      background-image:
      linear-gradient(135deg, rgb(240, 242, 247) 0%, rgb(252, 253, 255) 100%), url('images/baground2.jpeg');
      background-size: cover;
      background-position: center;
      padding: 60px 0;
    }

    /* Left column */
    .write-label {
      font-size: 28px; font-weight: 600;
      color: #666; margin-bottom: 4px;
      font-style: italic;
    }
    .write-title {
      font-family: 'Barlow Condensed', sans-serif;
      font-weight: 900; font-size: 3,5rem;
      color: var(--blue); line-height: 1.1;
      margin-bottom: 16px;
    }
    .write-body {
      font-size: .88rem; color: #444;
      line-height: 1.8; max-width: 340px;
    }

    /* Right column — contact items */
    .contact-item {
      display: flex; align-items: flex-start;
      gap: 16px; margin-bottom: 28px;
    }
    .contact-item:last-child { margin-bottom: 0; }
    .ci-icon-wrap {
      width: 44px; height: 44px; flex-shrink: 0;
      display: flex; align-items: center; justify-content: center;
    }
    .ci-icon-wrap i {
      font-size: 1.8rem; color: var(--navy);
    }
    .ci-content {}
    .ci-content .ci-label {
      font-weight: 700; font-size: 1rem;
      color: var(--navy); margin-bottom: 3px;
      display: block;
    }
    .ci-content a, .ci-content span {
      display: block; color: #333;
      font-size: .9rem; text-decoration: none;
      line-height: 1.7;
      transition: color .2s;
    }
    .ci-content a:hover { color: var(--blue); }

    /* divider between two contact items */
    .contact-divider {
      border: none; border-top: 1px solid rgba(0,0,0,.1);
      margin: 24px 0;
    }

    /* ─── SECTION 3 — ADDRESS + SOCIAL ────── */
    .address-sec {
      position: relative;
      padding: 60px 0;
      background-image:
      linear-gradient(135deg, rgba(11,22,56,0.75) 0%, rgba(22,45,122,0.65) 100%), url('images/baground2.jpeg');
      background-size: cover;
      background-position: center;
    }

    /* Left: address */
    .addr-block { margin-bottom: 28px; }
    .addr-block .addr-icon {
      display: flex; align-items: center; gap: 10px;
      margin-bottom: 12px;
    }
    .addr-block .addr-icon i {
      font-size: 1.5rem; color: #fff;
    }
    .addr-block .addr-icon span {
      font-weight: 900; font-size: 1.80rem;
      color: #fff;
    }
    .addr-detail {
      padding-left: 32px;
      color: rgba(255,255,255,.82);
      font-size: 1,2rem; line-height: 1.9;
    }
    .addr-detail strong { color: #fff; }

    /* open hours */
    .open-block { margin-top: 8px; }
    .open-block .open-icon {
      display: flex; align-items: center; gap: 10px;
      margin-bottom: 8px;
    }
    .open-block .open-icon i { font-size: 1.4rem; color: #fff; }
    .open-block .open-icon span {
      font-weight: 900; font-size: 1.80rem; color: #fff;
    }
    .open-detail {
      padding-left: 32px;
      color: rgba(255,255,255,.82);
      font-size: 1,2rem; line-height: 1.9;
    }

    /* Right: illustration + social */
    .social-wrap { text-align: center; }
    .social-wrap img {
      max-width: 220px; margin-bottom: 22px;
    }
    .social-title {
      font-weight: 700; font-size: 1rem;
      color: #fff; margin-bottom: 14px;
    }
    .social-icons { display: flex; justify-content: center; gap: 16px; }
    .social-icons a {
      width: 42px; height: 42px; border-radius: 50%;
      display: flex; align-items: center; justify-content: center;
      font-size: 1.2rem; text-decoration: none;
      transition: transform .2s, opacity .2s;
    }
    .social-icons a:hover { transform: scale(1.15); opacity: .85; }
    .si-ig  { background: #e1306c; color: #fff; }
    .si-tw  { background: #1da1f2; color: #fff; }
    .si-yt  { background: #ff0000; color: #fff; }
    .si-fb  { background: #1877f2; color: #fff; }

    /* ─── FOOTER ────────────────────────────── */
    footer {
      background: #070d25;
      color: rgba(255,255,255,.5);
      padding: 38px 0 16px; font-size: .83rem;
    }
    footer .fb { color: #fff; font-weight: 800; font-size: .9rem; margin-bottom: 6px; }
    footer a { color: rgba(255,255,255,.45); text-decoration: none; transition: color .2s; }
    footer a:hover { color: var(--accent); }
    footer hr { border-color: rgba(255,255,255,.1); margin: 22px 0 12px; }
  </style>
</head>
<body>

<!-- ════════════════════════════════
     NAVBAR
════════════════════════════════ -->
<nav class="topnav navbar navbar-expand-lg">
  <div class="container">
    <a class="brand navbar-brand" href="index.html">
      <img src="{{ asset('images/logo ati.png') }}" alt="ATI">
    </a>
    <button class="navbar-toggler border-0" type="button"
            data-bs-toggle="collapse" data-bs-target="#navMain">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse justify-content-center" id="navMain">
      <ul class="navbar-nav gap-1">
         <li class="nav-item"><a class="nav-link" href="/">Home</a></li>
        <li class="nav-item"><a class="nav-link" href="/about">About</a></li>
        <li class="nav-item dropdown">
          <a class="nav-link" href="/services">Services</a>
        <li class="nav-item"><a class="nav-link" href="/gallery">Gallery</a></li>
        <li class="nav-item"><a class="nav-link" href="/product">Product</a></li>
        <li class="nav-item"><a class="nav-link" href="/contact">Contact</a></li>
          </ul>
        </li>
       
      </ul>
    </div>
    <a href="tel:+6282288366600" class="btn-phone ms-lg-3 mt-2 mt-lg-0">
      <i class="bi bi-telephone-fill"></i> +62-822-8836-6600
    </a>
  </div>
</nav>


<!-- ════════════════════════════════
     SECTION 1 — HERO
     Background blur, judul "contact us" + sub teks
════════════════════════════════ -->
<section class="contact-hero">
  <div class="container">
    <h1>contact us</h1>
    <p>
      If you have questions about projects, technology<br>
      support or personal needs, please contact us
    </p>
  </div>
</section>


<!-- ════════════════════════════════
     SECTION 2 — WRITE TO US
     Kiri: teks Have Question? Contact Us!
     Kanan: Email Us + Contact Us (nomor)
════════════════════════════════ -->
<section class="write-sec">
  <div class="container">
    <div class="row align-items-center gy-5">

      <!-- LEFT -->
      <div class="col-lg-6">
        <p class="write-label">write to us</p>
        <h2 class="write-title">Have Question?<br>Contact Us!</h2>
        <p class="write-body">
          If you want to order the products we provide or want
          to ask further questions about the prices we offer,
          please contact this contact.
        </p>
      </div>

      <!-- RIGHT -->
      <div class="col-lg-5 offset-lg-1">

        <!-- Email Us -->
        <div class="contact-item">
          <div class="ci-icon-wrap">
            <i class="bi bi-envelope-fill"></i>
          </div>
          <div class="ci-content">
            <span class="ci-label">Email Us</span>
            <a href="mailto:sales@arkatekid.com">sales@arkatekid.com</a>
          </div>
        </div>

        <hr class="contact-divider"/>

        <!-- Contact Us -->
        <div class="contact-item">
          <div class="ci-icon-wrap">
            <i class="bi bi-telephone-fill"></i>
          </div>
          <div class="ci-content">
            <span class="ci-label">Contact Us</span>
            <a href="tel:+627784163891">+62-778-4163891</a>
            <a href="tel:+6282288366600">+62-822-8836-6600</a>
          </div>
        </div>

      </div>
    </div>
  </div>
</section>


<!-- ════════════════════════════════
     SECTION 3 — ADDRESS + SOCIAL MEDIA
     Background gambar gelap navy overlay
     Kiri: Alamat Batam & Cirebon + Jam buka
     Kanan: Ilustrasi + Our social media
════════════════════════════════ -->
<section class="address-sec">
  <div class="container">
    <div class="row align-items-center gy-5">

      <!-- LEFT: Address + Hours -->
      <div class="col-lg-6">

        <!-- Address -->
        <div class="addr-block">
          <div class="addr-icon">
            <i class="bi bi-geo-alt-fill"></i>
            <span>Addres</span>
          </div>
          <div class="addr-detail">
            <strong>Batam:</strong> Ruko Botania 2 Blok<br>
            B10 no 10 – 11 Batam Kota.<br><br>
            <strong>Cirebon:</strong> Jl. Sultan Agung No 1<br>
            Sumber – Cirebon
          </div>
        </div>

        <!-- We're Open -->
        <div class="open-block">
          <div class="open-icon">
            <i class="bi bi-clock-fill"></i>
            <span>we're open</span>
          </div>
          <div class="open-detail">
            Monday-Saturday<br>
            8:00 am – 5:00 pm
          </div>
        </div>

      </div>

      <!-- RIGHT: Illustration + Social -->
      <div class="col-lg-5 offset-lg-1">
        <div class="social-wrap">
          <!-- Ilustrasi customer service -->
          <img
            src="{{ asset('images/co.png') }}"
            alt="Customer Service Illustration"/>

          <p class="social-title">Our social media:</p>
          <div class="social-icons">
            <a href="https://www.instagram.com/arkatekid/" class="si-ig">
              <i class="bi bi-instagram"></i>
            </a>
            <a href="#" class="si-tw">
              <i class="bi bi-twitter-x"></i>
            </a>
            <a href="#" class="si-yt">
              <i class="bi bi-youtube"></i>
            </a>
            <a href="#" class="si-fb">
              <i class="bi bi-facebook"></i>
            </a>
          </div>
        </div>
      </div>

    </div>
  </div>
</section>


<!-- ════════════════════════════════
     FOOTER
════════════════════════════════ -->
<footer>
  <div class="container">
    <div class="row g-4">
      <div class="col-lg-4">
        <div class="fb">ATI – PT Arka Teknologi Indonesia</div>
        <p>Smart Technology Solution. Solusi teknologi terpadu untuk keamanan dan infrastruktur gedung modern.</p>
        <p class="mt-2">
          <i class="bi bi-telephone-fill me-2" style="color:var(--accent);"></i>+62-822-8836-6600
        </p>
      </div>
      <div class="col-6 col-lg-2">
        <p style="color:#fff;font-weight:700;margin-bottom:8px;font-size:.85rem;">Menu</p>
        <ul class="list-unstyled" style="line-height:2.1;">
          <li><a href="index.html">Home</a></li>
          <li><a href="about.html">About</a></li>
          <li><a href="services.html">Services</a></li>
          <li><a href="gallery.html">Gallery</a></li>
          <li><a href="project.html">Product</a></li>
          <li><a href="contact.html">Contact</a></li>
        </ul>
      </div>
      <div class="col-6 col-lg-3">
        <p style="color:#fff;font-weight:700;margin-bottom:8px;font-size:.85rem;">Kontak</p>
        <ul class="list-unstyled" style="line-height:2.1;">
          <li><a href="mailto:sales@arkatekid.com">sales@arkatekid.com</a></li>
          <li><a href="tel:+627784163891">+62-778-4163891</a></li>
          <li><a href="tel:+6282288366600">+62-822-8836-6600</a></li>
          <li style="margin-top:6px;">Batam & Cirebon, Indonesia</li>
        </ul>
      </div>
      <div class="col-lg-3">
        <p style="color:#fff;font-weight:700;margin-bottom:8px;font-size:.85rem;">Ikuti Kami</p>
        <div class="d-flex gap-3 mb-3">
          <a href="#" style="font-size:1.25rem;"><i class="bi bi-instagram"></i></a>
          <a href="#" style="font-size:1.25rem;"><i class="bi bi-twitter-x"></i></a>
          <a href="#" style="font-size:1.25rem;"><i class="bi bi-youtube"></i></a>
          <a href="#" style="font-size:1.25rem;"><i class="bi bi-facebook"></i></a>
        </div>
        <p style="font-size:.8rem;">Senin – Sabtu, 08.00 – 17.00 WIB</p>
      </div>
    </div>
    <hr/>
    <p class="text-center" style="opacity:.35;font-size:.76rem;">
      © 2024 PT Arka Teknologi Indonesia. All rights reserved.
    </p>
  </div>
</footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
