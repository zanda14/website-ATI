<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Service – ATI Smart Technology Solution</title>
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
      --light:  #f0f2f8;
    }
    *, *::before, *::after { box-sizing: border-box; margin: 0; padding: 0; }
    html { scroll-behavior: smooth; }
    body { font-family: 'Barlow', sans-serif; color: #1e2235; background: #fff; font-size: 15px; }

    /* ─── NAVBAR ──────────────────────────────── */
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

    /* ─── SECTION 1 — SERVICE HERO ───────────── */
    .service-hero {
      background-image:
       linear-gradient(135deg, rgba(11,22,56,0.75) 0%, rgba(22,45,122,0.65) 100%), url('images/baground2.jpeg');
      background-size: cover;
      background-position: center;
      padding: 70px 0 60px;
      text-align: center;
    }
    .service-hero h1 {
      font-family: 'Barlow Condensed', sans-serif;
      font-weight: 900;
      font-size: clamp(2.6rem, 6vw, 4rem);
      color: #fdfafa;
      margin-bottom: 18px;
    }
    .service-hero p {
      color: #fdfafa;
      font-size: .9,5rem;
      line-height: 1.8;
      max-width: 500px;
      margin: 0 auto;
    }

    /* ─── SECTION 2 — BEST PRODUCT ───────────── */
    .best-product {
      background: var(--light);
      padding: 68px 0;
    }
    .bp-title {
      font-family: 'Barlow Condensed', sans-serif;
      font-weight: 900;
      font-size: 2.4rem;
      color: var(--navy);
      text-align: center;
      margin-bottom: 44px;
    }
    /* 3 col separator */
    .bp-col {
      padding: 0 28px;
      border-right: 1px solid #d4d8ea;
    }
    .bp-col:last-child { border-right: none; }
    .bp-col h5 {
      font-family: 'Barlow Condensed', sans-serif;
      font-weight: 900; font-size: 1.15rem;
      color: var(--navy); margin-bottom: 12px;
    }
    .bp-col h5.accent { color: var(--black); }
    .bp-col p {
      color: var(--gray); font-size: .86rem;
      line-height: 1.82;
    }
    @media(max-width:767px) {
      .bp-col { border-right: none; border-bottom: 1px solid #d4d8ea; padding: 24px 0; }
      .bp-col:last-child { border-bottom: none; }
    }

    /* ─── SECTION 3 — 4 ICON BLOCKS ─────────── */
    .icon-grid-sec {
      background-image:
      linear-gradient(135deg, rgba(11,22,56,0.75) 0%, rgba(22,45,122,0.65) 100%), url('images/baground2.jpeg');
      background-size: cover;
      background-position: center;
      padding: 68px 0;
    }
    .icon-block {
      display: flex; align-items: flex-start; gap: 16px;
      padding: 26px 22px;
      background: rgba(255,255,255,0.80);
      border-radius: 14px;
      border: 1px solid rgba(255,255,255,0.92);
      height: 100%;
      transition: transform .25s, box-shadow .25s, background .2s;
    }
    .icon-block:hover {
      transform: translateY(-5px);
      box-shadow: 0 12px 32px rgba(11,22,56,.13);
      background: rgba(255,255,255,0.97);
    }
    .icon-block-img {
      flex-shrink: 0;
      width: 70px; height: 70px;
      border-radius: 50%;
      overflow: hidden;
      background: #dde3f5;
      display: flex; align-items: center; justify-content: center;
    }
    .icon-block-img img { width: 100%; height: 100%; object-fit: cover; }
    .icon-block-img i { font-size: 2rem; color: var(--blue); }
    .icon-block-txt h6 {
      font-weight: 900; color: var(--navy);
      font-size: .92rem; margin-bottom: 6px;
    }
    .icon-block-txt p {
      color: var(--gray); font-size: .82rem;
      line-height: 1.65; margin: 0;
    }

    /* ─── SECTION 4 — KNOWLEDGE BASE ─────────── */
    .knowledge-sec {
      background: linear-gradient(135deg, #0b1638 0%, #162d7a 100%);
      padding: 72px 0;
    }

    /* Left: illustration */
    .kb-illus {
      position: relative;
      display: flex; align-items: flex-end; justify-content: center;
    }
    .kb-illus img {
      max-width: 260px;
      filter: drop-shadow(0 10px 24px rgba(0,0,0,.25));
    }

    /* Right: text */
    .kb-right { color: #fff; }
    .kb-right h2 {
      font-family: 'Barlow Condensed', sans-serif;
      font-weight: 900;
      font-size: clamp(2rem, 4.5vw, 3rem);
      color: #fff; margin-bottom: 10px;
    }
    .kb-right .kb-sub {
      color: rgba(255,255,255,.72);
      font-size: .92rem; line-height: 1.7;
      margin-bottom: 26px;
    }
    /* Search bar */
    .search-wrap {
      position: relative;
      max-width: 420px;
      margin-bottom: 22px;
    }
    .search-wrap input {
      width: 100%;
      padding: 13px 52px 13px 20px;
      border-radius: 36px;
      border: none; outline: none;
      font-size: .9rem;
      font-family: 'Barlow', sans-serif;
      color: #333;
      box-shadow: 0 4px 18px rgba(0,0,0,.15);
    }
    .search-wrap button {
      position: absolute; right: 6px; top: 50%;
      transform: translateY(-50%);
      background: var(--navy); border: none;
      width: 38px; height: 38px; border-radius: 50%;
      display: flex; align-items: center; justify-content: center;
      cursor: pointer; transition: background .2s;
    }
    .search-wrap button:hover { background: var(--mid); }
    .search-wrap button i { color: #fff; font-size: 1rem; }
    /* Review button */
    .btn-review {
      display: inline-flex; align-items: center; gap: 8px;
      background: var(--navy); color: #fff;
      border: 2px solid rgba(255,255,255,.25);
      border-radius: 30px; padding: 12px 34px;
      font-weight: 700; font-size: .95rem;
      text-decoration: none;
      margin-bottom: 20px; transition: all .2s;
      cursor: pointer; font-family: 'Barlow', sans-serif;
    }
    .btn-review:hover { background: rgba(255,255,255,.12); color: #fff; }
    .kb-share {
      color: rgba(255,255,255,.60);
      font-size: .85rem; line-height: 1.65;
      max-width: 300px;
    }

    /* ─── FOOTER ────────────────────────────────── */
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
    </div>
    <a href="tel:+6282288366600" class="btn-phone ms-lg-3 mt-2 mt-lg-0">
      <i class="bi bi-telephone-fill"></i> +62-822-8836-6600
    </a>
  </div>
</nav>


<!-- ════════════════════════════════
     SECTION 1 — SERVICE HERO
     Background gambar blur terang
     Judul "Service" biru besar tengah + paragraf
════════════════════════════════ -->
<section class="service-hero">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-lg-8">
        <h1>Service</h1>
        <p>
          We are committed to providing the best service with high
          professional standards. Every solution we offer is precisely
          designed, fast, and reliable to ensure our customers' needs are
          optimally met. Customer satisfaction is our top priority, as your
          trust is the foundation of our success.
        </p>
      </div>
    </div>
  </div>
</section>


<!-- ════════════════════════════════
     SECTION 2 — BEST PRODUCT
     Background abu-abu terang
     Judul "Best Product" tengah
     3 kolom teks dengan separator vertikal:
     Display System | Conference System | Security Access
════════════════════════════════ -->
<section class="best-product">
  <div class="container">
    <h2 class="bp-title">Best Product</h2>
    <div class="row g-0">

      <!-- Display System -->
      <div class="col-md-4 bp-col">
        <h5>Display System</h5>
        <p>
          The display system is a flat panel display that uses an array of
          light-emitting diodes as pixels for the video display. Their
          brightness allows them to be used outdoors or indoors for shop
          signs and billboards.
        </p>
      </div>

      <!-- Conference System -->
      <div class="col-md-4 bp-col">
        <h5 class="accent">Conference System</h5>
        <p>
          Conference System make communication more convenient,
          clear and ignoring the conversation distance from network.
          Ideal for meetings, presentations, and remote collaboration.
        </p>
      </div>

      <!-- Security Access -->
      <div class="col-md-4 bp-col">
        <h5>Security Access</h5>
        <p>
          The best access control systems allow a business to secure their
          facility, controlling which users can go where, and when, along with
          creating a record of the arrivals and departures of folks to each area.
        </p>
      </div>

    </div>
  </div>
</section>


<!-- ════════════════════════════════
     SECTION 3 — 4 ICON BLOCKS
     Background gambar transparan
     Grid 2x2: Service / Technology / Responsibility / Warranty
════════════════════════════════ -->
<section class="icon-grid-sec">
  <div class="container">
    <div class="row g-4">

      <!-- Service -->
      <div class="col-md-6">
        <div class="icon-block">
          <div class="icon-block-img">
            <img src="{{ asset('images/ro9.png') }}" alt="Service"/>
          </div>
          <div class="icon-block-txt">
            <h6>Service</h6>
            <p>
              We prioritize satisfaction and the best service to customers
              and partners who need our services.
            </p>
          </div>
        </div>
      </div>

      <!-- Technology -->
      <div class="col-md-6">
        <div class="icon-block">
          <div class="icon-block-img">
             <img src="{{ asset('images/ro11.png') }}" alt="Service"/>
          </div>
          <div class="icon-block-txt">
            <h6>Technology</h6>
            <p>
              There are various kinds of security systems and also other
              technologies that you can get here.
            </p>
          </div>
        </div>
      </div>

      <!-- Responsibility -->
      <div class="col-md-6">
        <div class="icon-block">
          <div class="icon-block-img">
             <img src="{{ asset('images/ro10.png') }}" alt="Service"/>
          </div>
          <div class="icon-block-txt">
            <h6>Responsibility</h6>
            <p>
              We always provide the best possible performance, equipped
              with expertise in work.
            </p>
          </div>
        </div>
      </div>

      <!-- Warranty -->
      <div class="col-md-6">
        <div class="icon-block">
          <div class="icon-block-img">
            <img src="{{ asset('images/ro12.png') }}" alt="Service"/>
            <i class="bi bi-shield-check-fill"></i>
          </div>
          <div class="icon-block-txt">
            <h6>warranty</h6>
            <p>
              Any damage related to the Warranty, and Service, will remain
              our priority in giving special attention.
            </p>
          </div>
        </div>
      </div>

    </div>
  </div>
</section>


<!-- ════════════════════════════════
     SECTION 4 — KNOWLEDGE BASE
     Background navy gelap
     Kiri: ilustrasi wanita laptop + ikon $
     Kanan: judul + sub + search bar + tombol Review + teks share
════════════════════════════════ -->
<section class="knowledge-sec">
  <div class="container">
    <div class="row align-items-center gy-5">

      <!-- LEFT: Ilustrasi -->
      <div class="col-lg-5 kb-illus">
        <img
           src="{{ asset('images/ro13.png') }}"
          alt="Customer Illustration"/>
      </div>

      <!-- RIGHT: Text + form -->
      <div class="col-lg-6 offset-lg-1 kb-right">
        <h2>Knowladge Base</h2>
        <p class="kb-sub">
          Find the best guides, solutions, and<br>
          insights to support your needs.
        </p>

        <!-- Search Bar -->
        <div class="search-wrap">
  <input type="text" placeholder="Search..." 
         onkeypress="if(event.key==='Enter') window.location.href='knowledge'"/>
  <button type="button" onclick="window.location.href='knowledge'">
    <i class="bi bi-search"></i>
  </button>
</div>

        <!-- Review Button -->
        <a href="review" class="btn-review">Review &rating</a>
        <div class="d-block mb-3">
          
        </div>

        <!-- Share text -->
        <p class="kb-share">
          Share your experience by filling out<br>
          a review for our service, thank you.
        </p>
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
          <li><a href="services.html">Digital Service</a></li>
          <li><a href="gallery.html">Gallery</a></li>
          <li><a href="project.html">Project</a></li>
          <li><a href="contact.html">Contact</a></li>
        </ul>
      </div>
      <div class="col-6 col-lg-3">
        <p style="color:#fff;font-weight:700;margin-bottom:8px;font-size:.85rem;">Layanan</p>
        <ul class="list-unstyled" style="line-height:2.1;">
          <li><a href="#">Display System</a></li>
          <li><a href="#">Conference System</a></li>
          <li><a href="#">Security Access</a></li>
          <li><a href="#">Knowledge Base</a></li>
        </ul>
      </div>
      <div class="col-lg-3">
        <p style="color:#fff;font-weight:700;margin-bottom:8px;font-size:.85rem;">Ikuti Kami</p>
        <div class="d-flex gap-3 mb-3">
          <a href="#" style="font-size:1.25rem;"><i class="bi bi-instagram"></i></a>
          <a href="#" style="font-size:1.25rem;"><i class="bi bi-facebook"></i></a>
          <a href="#" style="font-size:1.25rem;"><i class="bi bi-linkedin"></i></a>
          <a href="https://wa.me/6282288366600" target="_blank" style="font-size:1.25rem;">
            <i class="bi bi-whatsapp"></i>
          </a>
        </div>
        <p style="font-size:.8rem;">Batam, Kepulauan Riau<br>Indonesia</p>
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
