<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Product – ATI Smart Technology Solution</title>
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
    body {
      font-family: 'Barlow', sans-serif;
      color: #1e2235;
      /* Background gambar blur di seluruh halaman seperti screenshot */
      background-image:
         linear-gradient(135deg, rgba(11,22,56,0.75) 0%, rgba(22,45,122,0.65) 100%), url('images/baground2.jpeg');
      background-size: cover;
      background-position: center;
      background-attachment: fixed;
    }

    /* ─── NAVBAR ───────────────────────────────── */
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

    /* ─── HERO ─────────────────────────────────── */
    .prod-hero {
      text-align: center;
      padding: 52px 0 36px;
    }
    .prod-hero h1 {
      font-family: 'Barlow Condensed', sans-serif;
      font-weight: 900;
      font-size: clamp(2.6rem, 6vw, 4.2rem);
      color: #fff; margin-bottom: 20px;
      margin-bottom: 16px;
    }
    .show-btn {
      display: inline-flex; align-items: center; gap: 8px;
      background: var(--navy); color: #fff;
      border-radius: 30px; padding: 11px 28px;
      font-weight: 700; font-size: .92rem;
      text-decoration: none; transition: background .2s;
      border: none; cursor: pointer;
    }
    .show-btn:hover { background: var(--mid); color: #fff; }

    /* ─── CATEGORY GRID ────────────────────────── */
    .cat-grid { padding: 10px 0 60px; }

    .cat-card {
      background: rgba(255,255,255,0.82);
      border-radius: 14px;
      overflow: hidden;
      border: 1px solid rgba(255,255,255,0.9);
      box-shadow: 0 4px 20px rgba(11,22,56,.10);
      transition: transform .25s, box-shadow .25s;
      cursor: pointer;
      text-decoration: none;
      display: block;
      height: 100%;
    }
    .cat-card:hover {
      transform: translateY(-6px);
      box-shadow: 0 14px 38px rgba(11,22,56,.18);
      background: rgba(255,255,255,0.96);
    }

    /* Image area */
    .cat-img {
  width: 100%;
  height: 175px;
  overflow: hidden;
  display: flex;
  justify-content: center;
  align-items: center;
}

.cat-img img {
  width: auto;
  height: 100%;
  object-fit: contain;
}
    .cat-card:hover .cat-img img { transform: scale(1.06); }

    /* Label bar at bottom */
    .cat-label {
      background: var(--navy);
      color: #fff;
      padding: 11px 16px;
      display: flex; align-items: center; justify-content: space-between;
      font-family: 'Barlow Condensed', sans-serif;
      font-weight: 900; font-size: 1rem;
      letter-spacing: .4px;
    }
    .cat-label i {
      font-size: 1rem;
      color: var(--accent);
      transition: transform .2s;
    }
    .cat-card:hover .cat-label i { transform: translateX(4px); }

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

<!-- ══════════════════════════════
     NAVBAR
══════════════════════════════ -->
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
        <li class="nav-item"><a class="nav-link" href="/project">Product</a></li>
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


<!-- ══════════════════════════════
     HERO — "Product" + Show My Product
══════════════════════════════ -->
<section class="prod-hero">
  <div class="container">
    <h1>Product</h1>
    <a href="#cat-grid" class="show-btn">
      Show My Product <i class="bi bi-arrow-right-circle-fill"></i>
    </a>
  </div>
</section>


<!-- ══════════════════════════════
     CATEGORY GRID
     Row 1: Fire Alarm | IT Infrastructure | Public Address
     Row 2: CCTV & Surveillance | Conference System | Display System
     Row 3: Security Access | Intrusion Alarms
══════════════════════════════ -->
<section class="cat-grid" id="cat-grid">
  <div class="container">
    <div class="row g-3 justify-content-center">

      <!-- Fire Alarm System -->
      <div class="col-12 col-md-6 col-lg-4">
        <a class="cat-card" href="product-fire">
          <div class="cat-img">
            <img src="{{ asset('images/pro1.png') }}"
                 alt="Fire Alarm System"/>
          </div>
          <div class="cat-label">
            Fire Alarm System <i class="bi bi-arrow-right-circle-fill"></i>
          </div>
        </a>
      </div>

      <!-- IT Infrastructure -->
      <div class="col-12 col-md-6 col-lg-4">
        <a class="cat-card" href="product-it">
          <div class="cat-img">
            <img src="{{ asset('images/pro2.png') }}"
                 alt="IT Infrastructure"/>
          </div>
          <div class="cat-label">
            IT Infrastructure <i class="bi bi-arrow-right-circle-fill"></i>
          </div>
        </a>
      </div>

      <!-- Public Address -->
      <div class="col-12 col-md-6 col-lg-4">
        <a class="cat-card" href="product-pa">
          <div class="cat-img">
            <img src="{{ asset('images/pro3.png') }}"
                 alt="Public Address"/>
          </div>
          <div class="cat-label">
            Public Address <i class="bi bi-arrow-right-circle-fill"></i>
          </div>
        </a>
      </div>

      <!-- CCTV & Surveillance -->
      <div class="col-12 col-md-6 col-lg-4">
        <a class="cat-card" href="product-cctv">
          <div class="cat-img">
            <img src="{{ asset('images/pro4.png') }}"
                 alt="CCTV & Surveillance"/>
          </div>
          <div class="cat-label">
            CCTV & Surveillance <i class="bi bi-arrow-right-circle-fill"></i>
          </div>
        </a>
      </div>

      <!-- Conference System -->
      <div class="col-12 col-md-6 col-lg-4">
        <a class="cat-card" href="product-conference">
          <div class="cat-img">
            <img src="{{ asset('images/pro5.png') }}"
                 alt="Conference System"/>
          </div>
          <div class="cat-label">
            Conference System <i class="bi bi-arrow-right-circle-fill"></i>
          </div>
        </a>
      </div>

      <!-- Display System -->
      <div class="col-12 col-md-6 col-lg-4">
        <a class="cat-card" href="product-display">
          <div class="cat-img">
            <img src="{{ asset('images/pro6.png') }}"
                 alt="Display System"/>
          </div>
          <div class="cat-label">
            Display System <i class="bi bi-arrow-right-circle-fill"></i>
          </div>
        </a>
      </div>

      <!-- Security Access -->
      <div class="col-12 col-md-6 col-lg-4">
        <a class="cat-card" href="product-security">
          <div class="cat-img">
            <img src="{{ asset('images/pro7.png') }}"
                 alt="Security Access"/>
          </div>
          <div class="cat-label">
            Security Access <i class="bi bi-arrow-right-circle-fill"></i>
          </div>
        </a>
      </div>

      <!-- Intrusion Alarms -->
      <div class="col-12 col-md-6 col-lg-4">
        <a class="cat-card" href="product-intrusion">
          <div class="cat-img">
            <img src="{{ asset('images/pro8.png') }}"
                 alt="Intrusion Alarms"/>
          </div>
          <div class="cat-label">
            Intrusion Alarms <i class="bi bi-arrow-right-circle-fill"></i>
          </div>
        </a>
      </div>

    </div>
  </div>
</section>


<!-- ══════════════════════════════
     FOOTER
══════════════════════════════ -->
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
          <li><a href="project.html">Project</a></li>
          <li><a href="contact.html">Contact</a></li>
        </ul>
      </div>
      <div class="col-6 col-lg-3">
        <p style="color:#fff;font-weight:700;margin-bottom:8px;font-size:.85rem;">Kategori Produk</p>
        <ul class="list-unstyled" style="line-height:2.1;">
          <li><a href="product-fire.html">Fire Alarm System</a></li>
          <li><a href="product-it.html">IT Infrastructure</a></li>
          <li><a href="product-pa.html">Public Address</a></li>
          <li><a href="product-cctv.html">CCTV & Surveillance</a></li>
          <li><a href="product-security.html">Security Access</a></li>
          <li><a href="product-display.html">Display System</a></li>
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
