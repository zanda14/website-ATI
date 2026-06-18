<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>ATI – Smart Technology Solution</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"/>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css" rel="stylesheet"/>
  <link href="https://fonts.googleapis.com/css2?family=Barlow:ital,wght@0,400;0,500;0,600;0,700;0,900;1,900&family=Barlow+Condensed:wght@700;900&display=swap" rel="stylesheet"/>

  <style>
    :root {
      --navy:  #0b1638;
      --blue:  #162d7a;
      --mid:   #1e3fa0;
      --accent: #e8a020;
      --gray:  #6b7280;
      --light: #f0f2f7;
      --white: #ffffff;
    }
    *, *::before, *::after { box-sizing: border-box; margin: 0; padding: 0; }
    html { scroll-behavior: smooth; }
    body { font-family: 'Barlow', sans-serif; color: #1e2235; background: #fff; font-size: 15px; }

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
    }
    .topnav .nav-link:hover,
    .topnav .nav-link.active { color: var(--blue) !important; }
    .topnav .nav-link.dropdown-toggle::after { border-color: #555; }
    .btn-phone {
      border: 1.5px solid var(--navy); border-radius: 24px;
      padding: 6px 15px; font-size: .78rem; font-weight: 700;
      color: var(--navy); text-decoration: none;
      display: inline-flex; align-items: center; gap: 6px;
      transition: all .2s; white-space: nowrap;
    }
    .btn-phone:hover { background: var(--navy); color: #fff; }

    /* ─── HERO ─────────────────────────────── */
    .baground {
  /* background: linear-gradient(135deg, #0f1e55 0%, ...); */
 
  background-image:
  linear-gradient(135deg, rgba(11,22,56,0.75) 0%, 
  rgba(22,45,122,0.65) 100%), url('images/baground2.jpeg');
  background-size: cover;
  background-position: center;
  background-attachment: fixed;
  background-repeat: repeat;
}
    .hero {
      /* background: linear-gradient(135deg, #0f1e55 0%, #1a2f7a 35%, #1e3da8 65%, #1a3090 100%); */
      padding: 70px 0 60px;
      position: relative; overflow: hidden;
      min-height: 88vh; display: flex; align-items: center;
    }
    .hero::after {
      content: '';
      position: absolute; inset: 0;
      background: radial-gradient(ellipse at 70% 50%, rgba(255,255,255,.04) 0%, transparent 60%);
      pointer-events: none;
    }
    .hero-label {
      font-size: 2,5rem; font-weight: 700; letter-spacing: 2.5px;
      text-transform: uppercase; color: rgba(255, 255, 255, 0.72); margin-bottom: 10px;
    }
    .hero-title {
      font-family: 'Barlow Condensed', sans-serif;
      font-weight: 900; color: #fff;
      font-size: clamp(2.6rem, 6vw, 4.8rem);
      line-height: 1.0; margin-bottom: 16px;
    }
    .hero-desc {
      font-size: .2,5rem; color: rgb(255, 255, 255); line-height: 1.75;
      max-width: 400px; margin-bottom: 28px;
    }
    .hero-desc strong { color: rgba(255,255,255,.9); }
    .tagline-pill {
      display: inline-block; background: var(--navy); color: #fff;
      border: 1px solid rgba(255,255,255,.25);
      border-radius: 40px; padding: 12px 26px;
      font-size: .95rem; font-weight: 900; font-style: italic;
      margin-top: 30px;
    }
    .hero-img img {
      max-width: 100%;
      filter: drop-shadow(0 20px 50px rgba(0,0,0,.35));
      animation: floatY 5s ease-in-out infinite;
    }
    @keyframes floatY {
      0%,100% { transform: translateY(0); }
      50%      { transform: translateY(-14px); }
    }

    /* ─── BUTTONS ───────────────────────────── */
    .btn-solid {
      display: inline-flex; align-items: center; gap: 7px;
      background: var(--navy); color: #fff;
      border: 2px solid var(--navy);
      border-radius: 28px; padding: 10px 24px;
      font-weight: 700; font-size: .85rem;
      text-decoration: none; transition: all .2s; cursor: pointer;
    }
    .btn-solid:hover { background: var(--mid); border-color: var(--mid); color: #fff; }
    .btn-outline {
      display: inline-flex; align-items: center; gap: 7px;
      background: transparent; color: var(--navy);
      border: 2px solid var(--navy);
      border-radius: 28px; padding: 10px 22px;
      font-weight: 700; font-size: .85rem;
      text-decoration: none; transition: all .2s;
    }
    .btn-outline:hover { background: var(--navy); color: #fff; }
    .btn-white {
      display: inline-flex; align-items: center; gap: 7px;
      background: #fff; color: var(--navy);
      border: 2px solid #fff;
      border-radius: 28px; padding: 10px 26px;
      font-weight: 700; font-size: .88rem;
      text-decoration: none; transition: all .2s;
    }
    .btn-white:hover { background: transparent; color: #fff; }

    /* ─── SECTION COMMON ────────────────────── */
    .sec { padding: 68px 0; }
    /* .sec-gray { background: #f3f5fb; } */
    .slabel {
      font-size: .2,5rem; font-weight: 700; letter-spacing: 2px;
      text-transform: uppercase; color: #fff9f9be; margin-bottom: 6px;
    }
    .stitle {
      font-family: 'Barlow Condensed', sans-serif;
      font-weight: 900; font-size: 1.95rem;
      color: var(--white); line-height: 1.1;
    }
    .abar {
      width: 100px; height: 4px; border-radius: 2px;
      background: var(--accent); margin: 10px 0 14px;
    }
    .sbody { color: var(--white); font-size: 1rem; line-height: 1.8; }
    .img-rd { border-radius: 12px; box-shadow: 0 10px 32px rgba(0,0,0,.12); }

    /* ─── SECTION 2 ─────────────────────────── */
    .s2-right { background: var(--navy); border-radius: 14px; padding: 36px 32px; }
    .s2-right .stitle { color: #fff; }
    .s2-right .sbody  { color: rgba(255, 255, 255, 0.81); }
    .s2-right .slabel { color: rgba(255,255,255,.4); }
    .wa-link {
      display: inline-flex; align-items: center; gap: 6px;
      color: rgba(255,255,255,.6); font-size: .8rem; font-weight: 600;
      text-decoration: none; margin-top: 10px;
    }
    .wa-link i { color: #25d366; }

    /* ─── SECTION 3 — A to Z ─────────────────── */
    .feat-cols { column-count: 2; column-gap: 20px; list-style: none; padding: 0; }
    .feat-cols li {
      display: flex; align-items: flex-start; gap: 7px;
      font-size: .83rem; color: rgb(253, 253, 255); padding: 5px 0;
      break-inside: avoid;
    }
    .feat-cols li i { color: var(--blue); font-size: .9rem; margin-top: 2px; flex-shrink: 0; }

    /* ─── SECTION 4 — Popular ───────────────── */
    .prod-img-wrap {
      background: #f0f2f8; border-radius: -100px;
      padding: 16px; text-align: center;
    }
    .prod-img-wrap img { max-width: 100%; height: 180px; object-fit: contain; }
    .prod-label {
      font-size: 1rem; font-weight: 700; letter-spacing: 1.5px;
      text-transform: uppercase; color: #f5efefc5; margin-bottom: 4px;
      margin-top: 12px;
    }

    /* ─── SECTION 5 — Enterprise ────────────── */
    .ent-list { list-style: none; padding: 0; margin: 0; }
    .ent-list li {
      display: flex; align-items: flex-start; gap: 9px;
      font-size: .85rem; color: rgb(248, 248, 249); padding: 6px 0;
      border-bottom: 1px solid #e8eaf4;
    }
    .ent-list li:last-child { border-bottom: none; }
    .ent-list li i { color: var(--blue); font-size: 1rem; margin-top: 1px; flex-shrink: 0; }

    /* ─── CONTACT SECTION ───────────────────── */
    .contact-sec {
      background: linear-gradient(135deg, #0b1638 0%, #162d7a 100%);
      padding: 68px 0;
    }
    .contact-label {
      font-size: .68rem; font-weight: 700; letter-spacing: 2px;
      text-transform: uppercase; color: rgba(255,255,255,.4); margin-bottom: 6px;
    }
    .contact-title {
      font-family: 'Barlow Condensed', sans-serif;
      font-weight: 900; font-size: 1.7rem; color: #fff; margin-bottom: 6px;
    }
    .contact-subtitle { color: rgba(255,255,255,.55); font-size: .85rem; margin-bottom: 18px; }
    .contact-phone {
      font-size: 1.3rem; font-weight: 900; color: #fff; margin-top: 8px;
    }
    .form-f {
      background: rgba(255,255,255,.09);
      border: 1px solid rgba(255,255,255,.2);
      border-radius: 8px; color: #fff;
      padding: 10px 13px; font-size: .85rem;
      width: 100%; font-family: 'Barlow', sans-serif;
      transition: border-color .2s; outline: none; resize: none;
      margin-bottom: 10px;
    }
    .form-f::placeholder { color: rgba(255,255,255,.35); }
    .form-f:focus { border-color: var(--accent); }
    .form-f option { color: #333; }
    .btn-send {
      background: var(--accent); color: var(--navy);
      font-weight: 800; border-radius: 28px;
      padding: 11px 32px; font-size: .88rem;
      border: none; cursor: pointer;
      display: inline-flex; align-items: center; gap: 7px;
      font-family: 'Barlow', sans-serif;
      letter-spacing: .5px; transition: all .2s;
    }
    .btn-send:hover { background: #fff; color: var(--navy); }

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
<body class="baground">
<!-- ════════════════════════════
     NAVBAR
════════════════════════════ -->
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


<!-- ════════════════════════════
     SECTION 1 — HERO
     Dark navy/blue gradient bg, white text, devices image right
════════════════════════════ -->
<section class="hero">
  <div class="container" style="position:relative;z-index:2;">
    <div class="row align-items-center gy-5">

      <!-- LEFT -->
      <div class="col-lg-5">
        <p class="hero-label">Professional Development</p>
        <h1 class="hero-title">Smart<br>Technology<br>Solution.</h1>
        <p class="hero-desc">
          We can provide the latest and integrated technology solutions,
          cross-technology all brands around the world,
          <strong>Honeywell, Bosch, ITC, Hikvision, Dahua, Pelco, Axis,
          Notifier, Hochiki, Asenware, Schneider, Atta, Mitsubishi, Ruijie</strong>
          and others
        </p>
        <div>
          <span class="tagline-pill">"Success isn't given<br>it's earned"</span>
        </div>
      </div>

      <!-- RIGHT: devices image -->
      <div class="col-lg-7 hero-img text-center">
        <img
    src="{{ asset('images/ro.png') }}"
    style="height:500px;object-fit:cover;"/>
   
      </div>

    </div>
  </div>
</section>


<!-- ════════════════════════════
     SECTION 2 — United Way
     Left: grey bg image (filing cabinet/folder) + text
     Right: dark navy card "The united way to find specialist services"
════════════════════════════ -->
<section class="sec">
  <div class="container">
    <div class="row align-items-stretch gy-4">

      <!-- LEFT col: label + image + small desc -->
      <div class="col-lg-6">
        <p class="slabel">Fire Alarm System</p>
        <img
          src="{{ asset('images/ro2.png') }}"
          class="img-fluid" alt="Fire Alarm System"
          style="height:500px;object-fit:cover;"/>
        <div class="mt-3">
          <p class="sbody">
            International standard addressable and conventional fire alarm systems. We provide installation, maintenance, and certification of fire protection systems from the brands Notifier, Hochiki, Asenware, and Bosch.
          </p>
        </div>
      </div>

      <!-- RIGHT col: dark navy card -->
      <div class="col-lg-6 d-flex">
        <div class="s2-right w-100 d-flex flex-column justify-content-center">
          <p class="slabel">The Next Opening</p>
          <h2 class="stitle mb-2">The united way to<br>find specialist<br>services</h2>
          <div class="abar"></div>
          <p class="sbody mb-4">
            we believe that our seriousness in maintaining professional service 
            quality can lead us to become a company that can provide 
            the best solutions for our customers

          </p>
          <p class="sbody mb-4">
            We present many technology solutions for industry, vertical buildings & dream homes 
            with integrated technology that you can’t imagine. we have professional 
            engineers in every product line to ensure that the technology is appropriate.
          </p>
          <div class="d-flex flex-wrap gap-3 align-items-center">
            <a href="services.html" class="btn-white">View our service</a>
            <a href="https://wa.me/6282288366600" target="_blank" class="wa-link">
              <i class="bi bi-whatsapp"></i> +6282288366600
            </a>
          </div>
        </div>
      </div>

    </div>
  </div>
</section>


<!-- ════════════════════════════
     SECTION 3 — Get Satisfied A to Z
     Left: title + 2-col feature list + button
     Right: product image (CCTV/access devices)
════════════════════════════ -->
<section class="sec sec-gray">
  <div class="container">
    <div class="row align-items-center gy-5">

      <!-- LEFT -->
      <div class="col-lg-5">
        <p class="slabel">Security Access</p>
        <h2 class="stitle">Get Satisfied with the service<br>we provide A to Z in Technology</h2>
        <div class="abar"></div>
        <p class="sbody mb-4">
          Feel free to contact us, get the best solution according to your needs
        </p>
        <ul class="feat-cols mb-4">
          <li><i class="bi bi-check2-circle"></i> Building Integration</li>
          <li><i class="bi bi-check2-circle"></i> Safety Entry</li>
          <li><i class="bi bi-check2-circle"></i> Fire Alarm</li>
          <li><i class="bi bi-check2-circle"></i> Access</li>
          <li><i class="bi bi-check2-circle"></i> Starter Suite</li>
          <li><i class="bi bi-check2-circle"></i> Automation System</li>
          <li><i class="bi bi-check2-circle"></i> Network System</li>
          <li><i class="bi bi-check2-circle"></i> CPOS/NPOS</li>
        </ul>
        <a href="services.html" class="btn-solid">More Details <i class="bi bi-arrow-right"></i></a>
      </div>

      <!-- RIGHT: product image -->
      <div class="col-lg-7">
        <img
          src={{ asset('images/ro3.png') }}
          class="img-fluid" alt="Products" style="height:500px;object-fit:cover;"/>
      </div>

    </div>
  </div>
</section>
<!-- ════════════════════════════
     SECTION 4 — Most Popular Technology
     Left: image Network Controller + label + small text
     Right: "Our most popular Technology Solution for you" + desc + conference image
════════════════════════════ -->
<section class="sec">
  <div class="container">
    <div class="row align-items-start gy-5">

      <!-- LEFT: Network Controller -->
      <div class="col-lg-5">
        <div class="col-lg-7">
        <<img
    src="{{ asset('images/ro4.png') }}"
    class="img-fluid"
    alt="Network Controller"
    style="max-width:150%; height:auto;">
      </div>
        <p class="prod-label">T-7700 IP Network Controller</p>
        <p class="sbody mt-1">
          The combination of the IP services and the edge computing provides a new approach
          to analytics and intelligence at edge location for the security market such as
          installation, transit and Parking Public spaces.
        </p>
      </div>

      <!-- RIGHT: Popular solution text + conference image -->
      <div class="col-lg-7 ps-lg-5">
        <p class="slabel">Public Address System</p>
        <h2 class="stitle mb-2">Our most popular<br>Technology Solution<br>for you</h2>
        <div class="abar"></div>
        <p class="sbody mb-4">
          Intelligent Public Address system for public
          broadcast and information, more widely spread, more fast and stable
        </p>
        <img
           src="{{ asset('images/ro5.png') }}"
    class="img-fluid"
    alt="Network Controller"
    style="max-width:100%; height:auto;">
        <p class="sbody mt-2" style="font-size:1rem;">
           ITC Voice Evacuation System always keep your safety top 
            priority with Sensitive Fire detection and quick intelligent Public address system.
        </p>
      </div>

    </div>
  </div>
</section>


<!-- ════════════════════════════
     SECTION 5 — Enterprise Display System
     Left: title + bullet list
     Right: large display/TV image
════════════════════════════ -->
<section class="sec sec-gray">
  <div class="container">
    <div class="row align-items-center gy-5">

      <!-- LEFT -->
      <div class="col-lg-5">
        <p class="slabel">Display System</p>
        <h2 class="stitle">Get Satisfied with Enterprise<br>Display System</h2>
        <div class="abar"></div>
        <p class="sbody mb-4">
          Find how to the best display the best solution according to the needs.
          Kami menyediakan solusi layar interaktif dan display profesional untuk
          ruang rapat, lobby, dan pusat komando.
        </p>
        <ul class="ent-list">
          <li><i class="bi bi-check-circle-fill"></i> Video Tron Indoor</li>
          <li><i class="bi bi-check-circle-fill"></i> Video Trim</li>
          <li><i class="bi bi-check-circle-fill"></i> Video Wall</li>
          <li><i class="bi bi-check-circle-fill"></i> Digital Signage</li>
          <li><i class="bi bi-check-circle-fill"></i> Lighting System</li>
          <li><i class="bi bi-check-circle-fill"></i> Running Text</li>
        </ul>
      </div>

      <!-- RIGHT: TV/display image -->
      <div class="col-lg-7 text-center">
        <img
          src="{{ asset('images/ro6.png') }}"
    class="img-fluid"
    alt="Network Controller"
    style="max-width:100%; height:auto;">
      </div>

    </div>
  </div>
</section>


<!-- ════════════════════════════
     SECTION 6 — CONTACT / FORM
     Dark navy gradient
     Left: label, title, subtitle, phone number
     Right: form fields + SEND button
════════════════════════════ -->
<section class="contact-sec">
  <div class="container">
    <div class="row gy-5">

      <!-- LEFT: contact info -->
      <div class="col-lg-4">
        <p class="contact-label">Contact Us</p>
        <h2 class="contact-title">FEEL FREE TO ASK US!</h2>
        <p class="contact-subtitle">
          For technical equipment on the leading technology<br>
          products in all brands
        </p>
        <p class="sbody mb-1" style="color:rgba(255,255,255,.55);font-size:.83rem;">
          Call us for a quote today!
        </p>
        <p class="contact-phone">+62-8228-8366-000</p>
      </div>

      <!-- RIGHT: form -->
      <div class="col-lg-7 offset-lg-1">
        <input  class="form-f" type="text"  placeholder="NAME"/>
        <input  class="form-f" type="email" placeholder="EMAIL"/>
        <input  class="form-f" type="tel"   placeholder="PHONE NUMBER"/>
        <select class="form-f" style="cursor:pointer;">
          <option value="">PRODUCT / SERVICE</option>
          <option>CCTV & Surveillance</option>
          <option>Access Control</option>
          <option>Fire Alarm System</option>
          <option>Networking & IT</option>
          <option>Enterprise Display</option>
          <option>Lainnya</option>
        </select>
        <textarea class="form-f" rows="3" placeholder="MESSAGE"></textarea>
        <div class="mt-2">
          <button class="btn-send"
            onclick="alert('Pesan terkirim! Tim kami akan segera menghubungi Anda.')">
            SEND
          </button>
        </div>
      </div>

    </div>
  </div>
</section>


<!-- ════════════════════════════
     FOOTER
════════════════════════════ -->
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
        <p style="color:#fff;font-weight:700;margin-bottom:8px;font-size:.85rem;">Layanan</p>
        <ul class="list-unstyled" style="line-height:2.1;">
          <li><a href="services.html#cctv">CCTV & Surveillance</a></li>
          <li><a href="services.html#access">Access Control</a></li>
          <li><a href="services.html#fire">Fire Alarm</a></li>
          <li><a href="services.html#network">Networking & IT</a></li>
          <li><a href="services.html#display">Enterprise Display</a></li>
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
