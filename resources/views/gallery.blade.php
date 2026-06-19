<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Gallery – ATI Smart Technology Solution</title>
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
      --light:  #f3f5fb;
    }
    *, *::before, *::after { box-sizing: border-box; margin: 0; padding: 0; }
    html { scroll-behavior: smooth; }
    body { font-family: 'Barlow', sans-serif; color: #1e2235; background: #fff; font-size: 15px; }

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

    /* ─── GALLERY HERO ─────────────────────────── */
    .gallery-hero {
      position: relative;
      padding: 70px 0 55px;
      text-align: center;
      background-image:
       linear-gradient(135deg, rgba(11,22,56,0.75) 0%, rgba(22,45,122,0.65) 100%), url('images/baground2.jpeg');
      background-size: cover;
      background-position: center;
      background-repeat: no-repeat;
    }
    .gallery-hero h1 {
      font-family: 'Barlow Condensed', sans-serif;
      font-weight: 900; font-size: clamp(2.4rem, 6vw, 4rem);
      color: #fff; margin-bottom: 10px;
    }
    .gallery-hero p {
      color: rgba(255,255,255,.72);
      font-size: .9,5rem;
    }

    /* ─── TAB NAV ──────────────────────────────── */
    .tab-wrap {
      background: #fff;
      border-bottom: 2px solid #e4e8f2;
      padding: 0;
      position: sticky; top: 57px; z-index: 900;
    }
    .tab-wrap .nav-tabs {
      border: none;
      gap: 0;
      justify-content: center;
    }
    .tab-wrap .nav-tabs .nav-link {
      border: none;
      border-bottom: 3px solid transparent;
      border-radius: 0;
      padding: 14px 28px;
      font-weight: 700; font-size: .88rem;
      color: #555;
      transition: all .2s;
    }
    .tab-wrap .nav-tabs .nav-link:hover {
      color: var(--blue);
      border-bottom-color: var(--blue);
      background: transparent;
    }
    .tab-wrap .nav-tabs .nav-link.active {
      color: var(--navy);
      border-bottom: 3px solid var(--accent);
      background: transparent;
      font-weight: 900;
    }

    /* ─── GALLERY GRID ─────────────────────────── */
    .gallery-section { padding: 52px 0 60px; background: var(--light); }

    .gallery-grid { }
    .g-item {
      position: relative;
      border-radius: 12px;
      overflow: hidden;
      cursor: pointer;
      background: #dde2f0;
      aspect-ratio: 1 / 1;
    }
    .g-item img {
      width: 100%; height: 100%;
      object-fit: cover;
      transition: transform .35s;
      display: block;
    }
    .g-item:hover img { transform: scale(1.08); }
    .g-item-overlay {
      position: absolute; inset: 0;
      background: rgba(11,22,56,.5);
      display: flex; align-items: center; justify-content: center;
      opacity: 0; transition: opacity .3s;
    }
    .g-item:hover .g-item-overlay { opacity: 1; }
    .g-item-overlay i { font-size: 2rem; color: #fff; }

    /* ─── LIGHTBOX ─────────────────────────────── */
    .lightbox {
      display: none; position: fixed; inset: 0;
      background: rgba(0,0,0,.88);
      z-index: 9999; align-items: center; justify-content: center;
    }
    .lightbox.open { display: flex; }
    .lightbox img {
      max-width: 88vw; max-height: 88vh;
      border-radius: 10px;
      box-shadow: 0 20px 60px rgba(0,0,0,.5);
    }
    .lightbox-close {
      position: absolute; top: 20px; right: 28px;
      font-size: 2rem; color: #fff; cursor: pointer;
      background: none; border: none; line-height: 1;
    }
    .lightbox-prev, .lightbox-next {
      position: absolute; top: 50%; transform: translateY(-50%);
      background: rgba(255,255,255,.15); border: none;
      color: #fff; font-size: 1.8rem;
      width: 50px; height: 50px; border-radius: 50%;
      display: flex; align-items: center; justify-content: center;
      cursor: pointer; transition: background .2s;
    }
    .lightbox-prev:hover, .lightbox-next:hover { background: rgba(255,255,255,.3); }
    .lightbox-prev { left: 20px; }
    .lightbox-next { right: 20px; }

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

<!-- ═══════════════════════════════
     NAVBAR
═══════════════════════════════ -->
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


<!-- ═══════════════════════════════
     GALLERY HERO
═══════════════════════════════ -->
<section class="gallery-hero">
  <div class="container">
    <h1>Gallery</h1>
    <p>PT Arka Teknologi Indonesia project documentation</p>
  </div>
</section>


<!-- ═══════════════════════════════
     TAB NAVIGATION
═══════════════════════════════ -->
<div class="tab-wrap">
  <div class="container">
    <ul class="nav nav-tabs" id="galleryTab" role="tablist">
      <li class="nav-item" role="presentation">
        <button class="nav-link active" id="tab-all" data-bs-toggle="tab"
                data-bs-target="#pane-all" type="button" role="tab">
          Gallery
        </button>
      </li>
      <li class="nav-item" role="presentation">
        <button class="nav-link" id="tab-family" data-bs-toggle="tab"
                data-bs-target="#pane-family" type="button" role="tab">
          Fire Alarm
        </button>
      </li>
      <li class="nav-item" role="presentation">
        <button class="nav-link" id="tab-ramadhan" data-bs-toggle="tab"
                data-bs-target="#pane-ramadhan" type="button" role="tab">
          CCTV
        </button>
      </li>
      <li class="nav-item" role="presentation">
        <button class="nav-link" id="tab-adha" data-bs-toggle="tab"
                data-bs-target="#pane-adha" type="button" role="tab">
          IT Infrastruktur
        </button>
      </li>
      <li class="nav-item" role="presentation">
        <button class="nav-link" id="tab-fitri" data-bs-toggle="tab"
                data-bs-target="#pane-fitri" type="button" role="tab">
          Public Address
        </button>
      </li>
    </ul>
  </div>
</div>


<!-- ═══════════════════════════════
     TAB CONTENT — GALLERY GRIDS
═══════════════════════════════ -->
<section class="gallery-section">
  <div class="container">
    <div class="tab-content" id="galleryTabContent">

      <!-- ── TAB 1: Gallery (All) ── -->
      <div class="tab-pane fade show active" id="pane-all" role="tabpanel">
        <div class="row g-3 gallery-grid">
          <div class="col-6 col-md-4 col-lg-3"><div class="g-item" onclick="openLightbox(0, 'all')"><img src="https://placehold.co/400x400/c5cee0/0b1638?text=Gallery+1" alt="Gallery 1"/><div class="g-item-overlay"><i class="bi bi-zoom-in"></i></div></div></div>
          <div class="col-6 col-md-4 col-lg-3"><div class="g-item" onclick="openLightbox(1, 'all')"><img src="https://placehold.co/400x400/bcc6dc/0b1638?text=Gallery+2" alt="Gallery 2"/><div class="g-item-overlay"><i class="bi bi-zoom-in"></i></div></div></div>
          <div class="col-6 col-md-4 col-lg-3"><div class="g-item" onclick="openLightbox(2, 'all')"><img src="https://placehold.co/400x400/c5cee0/0b1638?text=Gallery+3" alt="Gallery 3"/><div class="g-item-overlay"><i class="bi bi-zoom-in"></i></div></div></div>
          <div class="col-6 col-md-4 col-lg-3"><div class="g-item" onclick="openLightbox(3, 'all')"><img src="https://placehold.co/400x400/bcc6dc/0b1638?text=Gallery+4" alt="Gallery 4"/><div class="g-item-overlay"><i class="bi bi-zoom-in"></i></div></div></div>
          <div class="col-6 col-md-4 col-lg-3"><div class="g-item" onclick="openLightbox(4, 'all')"><img src="https://placehold.co/400x400/c5cee0/0b1638?text=Gallery+5" alt="Gallery 5"/><div class="g-item-overlay"><i class="bi bi-zoom-in"></i></div></div></div>
          <div class="col-6 col-md-4 col-lg-3"><div class="g-item" onclick="openLightbox(5, 'all')"><img src="https://placehold.co/400x400/bcc6dc/0b1638?text=Gallery+6" alt="Gallery 6"/><div class="g-item-overlay"><i class="bi bi-zoom-in"></i></div></div></div>
          <div class="col-6 col-md-4 col-lg-3"><div class="g-item" onclick="openLightbox(6, 'all')"><img src="https://placehold.co/400x400/c5cee0/0b1638?text=Gallery+7" alt="Gallery 7"/><div class="g-item-overlay"><i class="bi bi-zoom-in"></i></div></div></div>
          <div class="col-6 col-md-4 col-lg-3"><div class="g-item" onclick="openLightbox(7, 'all')"><img src="https://placehold.co/400x400/bcc6dc/0b1638?text=Gallery+8" alt="Gallery 8"/><div class="g-item-overlay"><i class="bi bi-zoom-in"></i></div></div></div>
          
        </div>
      </div>

      <!-- ── TAB 2: Fire Alarm ── -->
      <div class="tab-pane fade" id="pane-family" role="tabpanel">
        <div class="row g-3 gallery-grid">
          <div class="col-6 col-md-4 col-lg-3"><div class="g-item" onclick="openLightbox(0, 'family')"><img src="{{ asset('images/fire alarm.jpg') }}" alt="alarm"/><div class="g-item-overlay"><i class="bi bi-zoom-in"></i></div></div></div>
          <div class="col-6 col-md-4 col-lg-3"><div class="g-item" onclick="openLightbox(0, 'family')"><img src="{{ asset('images/fire alarm.jpg') }}" alt="alarm"/><div class="g-item-overlay"><i class="bi bi-zoom-in"></i></div></div></div>
          <div class="col-6 col-md-4 col-lg-3"><div class="g-item" onclick="openLightbox(0, 'family')"><img src="{{ asset('images/fire alarm.jpg') }}" alt="alarm"/><div class="g-item-overlay"><i class="bi bi-zoom-in"></i></div></div></div>
         <div class="col-6 col-md-4 col-lg-3"><div class="g-item" onclick="openLightbox(0, 'family')"><img src="{{ asset('images/fire alarm.jpg') }}" alt="alarm"/><div class="g-item-overlay"><i class="bi bi-zoom-in"></i></div></div></div>
        </div>
      </div>

      <!-- ── TAB 3: CCTV ── -->
      <div class="tab-pane fade" id="pane-ramadhan" role="tabpanel">
        <div class="row g-3 gallery-grid">
         <div class="col-6 col-md-4 col-lg-3"><div class="g-item" onclick="openLightbox(0, 'family')"><img src="{{ asset('images/cctv.jpg') }}" alt="alarm"/><div class="g-item-overlay"><i class="bi bi-zoom-in"></i></div></div></div>
          <div class="col-6 col-md-4 col-lg-3"><div class="g-item" onclick="openLightbox(0, 'family')"><img src="{{ asset('images/cctv.jpg') }}" alt="alarm"/><div class="g-item-overlay"><i class="bi bi-zoom-in"></i></div></div></div>
          <div class="col-6 col-md-4 col-lg-3"><div class="g-item" onclick="openLightbox(0, 'family')"><img src="{{ asset('images/cctv.jpg') }}" alt="alarm"/><div class="g-item-overlay"><i class="bi bi-zoom-in"></i></div></div></div>
         <div class="col-6 col-md-4 col-lg-3"><div class="g-item" onclick="openLightbox(0, 'family')"><img src="{{ asset('images/cctv.jpg') }}" alt="alarm"/><div class="g-item-overlay"><i class="bi bi-zoom-in"></i></div></div></div>
        </div>
      </div>

      <!-- ── TAB 4: Aid Al Adha ── -->
      <div class="tab-pane fade" id="pane-adha" role="tabpanel">
        <div class="row g-3 gallery-grid">
         <div class="col-6 col-md-4 col-lg-3"><div class="g-item" onclick="openLightbox(0, 'family')"><img src="{{ asset('images/IT.jpg') }}" alt="alarm"/><div class="g-item-overlay"><i class="bi bi-zoom-in"></i></div></div></div>
          <div class="col-6 col-md-4 col-lg-3"><div class="g-item" onclick="openLightbox(0, 'family')"><img src="{{ asset('images/IT.jpg') }}" alt="alarm"/><div class="g-item-overlay"><i class="bi bi-zoom-in"></i></div></div></div>
          <div class="col-6 col-md-4 col-lg-3"><div class="g-item" onclick="openLightbox(0, 'family')"><img src="{{ asset('images/IT.jpg') }}" alt="alarm"/><div class="g-item-overlay"><i class="bi bi-zoom-in"></i></div></div></div>
         <div class="col-6 col-md-4 col-lg-3"><div class="g-item" onclick="openLightbox(0, 'family')"><img src="{{ asset('images/IT.jpg') }}" alt="alarm"/><div class="g-item-overlay"><i class="bi bi-zoom-in"></i></div></div></div>
        </div>
      </div>

      <!-- ── TAB 5: Aid Al Fitri ── -->
      <div class="tab-pane fade" id="pane-fitri" role="tabpanel">
        <div class="row g-3 gallery-grid">
          <div class="col-6 col-md-4 col-lg-3"><div class="g-item" onclick="openLightbox(0, 'family')"><img src="{{ asset('images/public addres.jpg') }}" alt="alarm"/><div class="g-item-overlay"><i class="bi bi-zoom-in"></i></div></div></div>
          <div class="col-6 col-md-4 col-lg-3"><div class="g-item" onclick="openLightbox(0, 'family')"><img src="{{ asset('images/public addres.jpg') }}" alt="alarm"/><div class="g-item-overlay"><i class="bi bi-zoom-in"></i></div></div></div>
          <div class="col-6 col-md-4 col-lg-3"><div class="g-item" onclick="openLightbox(0, 'family')"><img src="{{ asset('images/public addres.jpg') }}" alt="alarm"/><div class="g-item-overlay"><i class="bi bi-zoom-in"></i></div></div></div>
         <div class="col-6 col-md-4 col-lg-3"><div class="g-item" onclick="openLightbox(0, 'family')"><img src="{{ asset('images/public addres.jpg') }}" alt="alarm"/><div class="g-item-overlay"><i class="bi bi-zoom-in"></i></div></div></div>
        </div>
      </div>

    </div><!-- /tab-content -->
  </div>
</section>


<!-- ═══════════════════════════════
     LIGHTBOX
═══════════════════════════════ -->
<div class="lightbox" id="lightbox" onclick="closeLightboxOutside(event)">
  <button class="lightbox-close" onclick="closeLightbox()">
    <i class="bi bi-x-lg"></i>
  </button>
  <button class="lightbox-prev" onclick="changeLightbox(-1)">
    <i class="bi bi-chevron-left"></i>
  </button>
  <img id="lightbox-img" src="" alt=""/>
  <button class="lightbox-next" onclick="changeLightbox(1)">
    <i class="bi bi-chevron-right"></i>
  </button>
</div>


<!-- ═══════════════════════════════
     FOOTER
═══════════════════════════════ -->
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
        <p style="color:#fff;font-weight:700;margin-bottom:8px;font-size:.85rem;">Kategori Gallery</p>
        <ul class="list-unstyled" style="line-height:2.1;">
          <li><a href="#" onclick="switchTab('tab-all')">Gallery</a></li>
          <li><a href="#" onclick="switchTab('tab-family')">Fire Alarm</a></li>
          <li><a href="#" onclick="switchTab('tab-ramadhan')">Ramadhan</a></li>
          <li><a href="#" onclick="switchTab('tab-adha')">Aid Al Adha</a></li>
          <li><a href="#" onclick="switchTab('tab-fitri')">Aid Al Fitri</a></li>
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
<script>
  // ── Lightbox ──────────────────────────────
  let currentIndex = 0;
  let currentTab   = 'all';

  function getImages(tab) {
    const pane = document.querySelector('#pane-' + tab);
    return Array.from(pane.querySelectorAll('.g-item img'));
  }

  function openLightbox(index, tab) {
    currentIndex = index;
    currentTab   = tab;
    const imgs = getImages(tab);
    document.getElementById('lightbox-img').src = imgs[index].src;
    document.getElementById('lightbox').classList.add('open');
    document.body.style.overflow = 'hidden';
  }

  function closeLightbox() {
    document.getElementById('lightbox').classList.remove('open');
    document.body.style.overflow = '';
  }

  function closeLightboxOutside(e) {
    if (e.target === document.getElementById('lightbox')) closeLightbox();
  }

  function changeLightbox(dir) {
    const imgs = getImages(currentTab);
    currentIndex = (currentIndex + dir + imgs.length) % imgs.length;
    document.getElementById('lightbox-img').src = imgs[currentIndex].src;
  }

  // Keyboard navigation
  document.addEventListener('keydown', (e) => {
    const lb = document.getElementById('lightbox');
    if (!lb.classList.contains('open')) return;
    if (e.key === 'ArrowRight') changeLightbox(1);
    if (e.key === 'ArrowLeft')  changeLightbox(-1);
    if (e.key === 'Escape')     closeLightbox();
  });

  // ── Footer tab switcher ───────────────────
  function switchTab(tabId) {
    const el = document.getElementById(tabId);
    if (el) {
      el.click();
      window.scrollTo({ top: 0, behavior: 'smooth' });
    }
    return false;
  }
</script>

</body>
</html>
