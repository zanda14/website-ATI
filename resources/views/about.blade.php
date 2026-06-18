<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>About Us – ATI Smart Technology Solution</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"/>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css" rel="stylesheet"/>
  <link href="https://fonts.googleapis.com/css2?family=Barlow:ital,wght@0,400;0,500;0,600;0,700;0,900;1,900&family=Barlow+Condensed:wght@700;900&display=swap" rel="stylesheet"/>
<style>
.about-hero {
    position: relative;
    min-height: 100vh; /* tinggi 1 layar penuh */
    display: flex;
    align-items: center;     /* tengah vertikal */
    justify-content: center; /* tengah horizontal */
    text-align: center;      /* teks rata tengah */
    padding: 0;
}
.about-hero p {
    color: rgba(255,255,255,.78);
    font-size: 1.3rem;
    line-height: 1.8;
    max-width: 800px;
    margin: 0 auto;
}
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
      color: #2c2c3e ; padding: 5px 12px;
    }
    .topnav .nav-link:hover,
    .topnav .nav-link.active { color: var(--blue) ; }
    .btn-phone {
      border: 1.5px solid var(--navy); border-radius: 24px;
      padding: 6px 15px; font-size: .78rem; font-weight: 700;
      color: var(--navy); text-decoration: none;
      display: inline-flex; align-items: center; gap: 6px;
      transition: all .2s; white-space: nowrap;
    }
    .btn-phone:hover { background: var(--navy); color: #fff; }

    /* ─── HELPERS ─────────────────────────────── */
    .sec { padding: 72px 0; }
    .slabel {
      font-size: 1,5rem; font-weight: 700; letter-spacing: 2px;
      text-transform: uppercase; color: #999; margin-bottom: 6px;
    }
    .stitle {
      font-family: 'Barlow Condensed', sans-serif;
      font-weight: 900; font-size: 1.95rem;
      color: #ffffff; 
      line-height: 1.1;
    }
    
    .abar {
      width: 44px; height: 4px; border-radius: 2px;
      background: var(--accent); margin: 10px 0 14px;
    }
    .sbody { color: #ffffff; font-size: .88rem; line-height: 1.8; }
    .img-rd { border-radius: 12px; box-shadow: 0 10px 32px rgba(0,0,0,.12); }
    .btn-solid {
      display: inline-flex; align-items: center; gap: 7px;
      background: var(--navy); color: #fff;
      border: 2px solid var(--navy); border-radius: 28px;
      padding: 11px 28px; font-weight: 700; font-size: .88rem;
      text-decoration: none; transition: all .2s;
    }
    .btn-solid:hover { background: var(--mid); border-color: var(--mid); color: #fff; }

    /* ─── SECTION 1 — ABOUT HERO ─────────────── */
    .baground {
  /* background: linear-gradient(135deg, #0f1e55 0%, ...); */
 
  background-image:linear-gradient(135deg, rgba(11,22,56,0.75) 0%,
   rgba(22,45,122,0.65) 100%), url('images/baground2.jpeg');
  background-size: cover;
  background-position: center;
  background-attachment: fixed;
  background-repeat: repeat;
}
    .about-hero {
      position: relative;
      min-height: 50vh;
      display: flex; align-items: center;
      padding: 80px 0 70px;
      /* background-image:
        linear-gradient(135deg, rgba(11,22,56,0.72) 0%, rgba(22,45,122,0.58) 100%),
        url('images/Baground.jpeg'); */
      background-size: cover;
      background-position: center;
      background-repeat: no-repeat;
    }
    .about-hero h1 {
      font-family: 'Barlow Condensed', sans-serif;
      font-weight: 900; font-size: clamp(2.4rem, 5vw, 4rem);
      color: #fff; margin-bottom: 20px;
    }
    .about-hero p {
      color: rgba(255,255,255,.78);
      font-size: 1.3rem; line-height: 2,4;
      max-width: 560px;
    }

    /* ─── SECTION 2 — United Way ──────────────── */
    .badge-count {
      background: #fff; border-radius: 16px;
      padding: 18px 26px; display: inline-block;
      box-shadow: 0 8px 28px rgba(0,0,0,.10);
      margin-top: 22px;
    }
    .badge-count .num {
      font-family: 'Barlow Condensed', sans-serif;
      font-weight: 900; font-size: 2.6rem;
      color: var(--navy); line-height: 1;
    }
    .badge-count .lbl {
      font-size: .78rem; color: var(--gray);
      font-weight: 600; line-height: 1.4; margin-top: 3px;
    }

    /* ─── SECTION 3 — Experiences ─────────────── */
    .experiences-sec {
      padding: 72px 0;
      /* background-image:
        linear-gradient(rgba(243,245,251,0.93), rgba(243,245,251,0.93)),
        url('images/Baground.jpg'); */
      background-size: cover;
      background-position: center;
    }
    .stitle {
      font-family: 'Barlow Condensed', sans-serif;
      font-weight: 900; font-size: 1.95rem;
      color: #ffffff;
       line-height: 1.1;
    }
    .stitle-lg {
      font-family: 'Barlow Condensed', sans-serif;
      font-weight: 900; font-size: 2.5rem;
      color: #ffffff;
       line-height: 1.1;
    }
    
    .exp-card {
      background: #fff; border-radius: 16px;
      padding: 30px 22px; text-align: center;
      box-shadow: 0 6px 24px rgba(0,0,0,.08);
      height: 100%; transition: transform .25s, box-shadow .25s;
    }
    .exp-card:hover {
      transform: translateY(-6px);
      box-shadow: 0 14px 36px rgba(11,22,56,.13);
    }
    .exp-icon {
      width: 52px; height: 52px;
      background: linear-gradient(135deg, var(--navy), var(--mid));
      border-radius: 14px;
      display: flex; align-items: center; justify-content: center;
      margin: 0 auto 16px;
    }
    .exp-icon i { font-size: 1.4rem; color: #fff; }
    .exp-card h5 { font-weight: 700; color: var(--navy); font-size: .95rem; margin-bottom: 8px; }
    .exp-card p  { color: var(--gray); font-size: .83rem; line-height: 1.6; margin: 0; }

    /* ─── SECTION 4 — Best Team ───────────────── */
    .team-sec {
      position: relative;
      min-height: 40vh;
      display: flex; align-items: center;
      padding: 80px 0;
      /* background-image:
        linear-gradient(135deg, rgba(11,22,56,0.72) 0%, rgba(22,45,122,0.55) 100%),
        url('images/Baground.jpg'); */
      background-size: cover;
      background-position: center;
      background-attachment: fixed;
    }
    .team-sec .slabel { color: rgba(255, 255, 255, 0.71); }
    .team-sec h2 {
      font-family: 'Barlow Condensed', sans-serif;
      font-weight: 900; font-size: clamp(2rem, 5vw, 3.6rem);
      color: #fff; line-height: 1.05;
    }

    /* ─── SECTION 5 — Choose Service ─────────── */
    .social-icon {
      width: 40px; height: 40px; border-radius: 50%;
      display: inline-flex; align-items: center; justify-content: center;
      font-size: 1.1rem; text-decoration: none;
      transition: transform .2s, opacity .2s;
    }
    .social-icon:hover { transform: scale(1.15); opacity: .85; }

    /* ─── SECTION 6 — ACHIEVEMENTS ───────────── */
    .achievements-sec {
      background: linear-gradient(135deg, #0b1638 0%, #162d7a 100%);
      padding: 72px 0;
    }
    .stat-block { text-align: center; padding: 10px 0; }
    .stat-num {
      font-family: 'Barlow Condensed', sans-serif;
      font-weight: 900; font-size: 3.6rem;
      color: #fff; line-height: 1;
    }
    .stat-lbl {
      color: rgba(255,255,255,.6);
      font-size: .88rem; font-weight: 600; margin-top: 7px;
    }
    .stat-sep {
      width: 1px; background: rgba(255,255,255,.15); margin: 0 4px;
    }

    /* ─── FOOTER ──────────────────────────────── */
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
     SECTION 1 — ABOUT HERO
     Background gambar blur + overlay navy
     Teks "About Us" + paragraf company profile
════════════════════════════════ -->
<section class="about-hero">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-lg-8 text-center">
        <h1>About Us</h1>
        <p>
          PT Arka Teknologi Indonesia is a technology company established in the
           field of security and building infrastructure. We are committed to 
           giving our best. We are committed to being a company that can provide the
           best solutions for your business with the services you need and always deliver our best.
        </p>
      </div>
    </div>
  </div>
</section>


<!-- ════════════════════════════════
     SECTION 2 — The United Way
     Kiri: gambar teknologi colorful
     Kanan: judul + deskripsi + badge "25+ Services"
════════════════════════════════ -->
<section class="sec">
  <div class="container">
    <div class="row align-items-center gy-5">

      <!-- LEFT gambar -->
      <div class="col-lg-6">
        <img
          src="{{ asset('images/ro7.jpg') }}"
          class="img-fluid img-rd w-100"
          style="height:320px; object-fit:cover;"
          alt="Technology Services"/>
      </div>

      <!-- RIGHT teks -->
      <div class="col-lg-6 ps-lg-5">
        <p class="slabel">Services We Provide</p>
        <h2 class="stitle">The united way to find<br>specialist services</h2>
        <div class="abar"></div>
        <p class="sbody mb-2">
          We present many technology solutions for industry,
           vertical buildings & dream homes with integrated technology that you 
           can’t imagine. we have professional engineers in every product line to ensure 
           that the technology is appropriate.

        </p>
        <div class="badge-count">
          <div class="num">25+</div>
          <div class="lbl">Services<br>We Provide</div>
        </div>
      </div>

    </div>
  </div>
</section>


<!-- ════════════════════════════════
     SECTION 3 — Experiences on Technology
     Background gambar transparan
     Judul besar + 3 card: Get a price / Book It / Breathe & Relax
════════════════════════════════ -->
<section class="experiences-sec">
  <div class="container">

    <div class="text-center mb-2">
      <p class="slabel">Services We Provide</p>
    </div>
    <div class="text-center mb-5">
      <h2 class="stitle-lg">Experiences on technology with<br>successful project</h2>
      <p class="sbody mt-3 mx-auto" style="max-width:460px; font-size: 1.2rem;">
        Successful projects are not sought but formed
      </p>
    </div>

    <div class="row g-4 justify-content-center">

      <!-- Card 1 -->
      <div class="col-md-4">
        <div class="exp-card">
          <div class="exp-icon"><i class="bi bi-tag-fill"></i></div>
          <h5>Get a price</h5>
          <p>Very affordable price. Kami memberikan penawaran terbaik dan kompetitif untuk setiap kebutuhan proyek Anda.</p>
        </div>
      </div>

      <!-- Card 2 -->
      <div class="col-md-4">
        <div class="exp-card">
          <div class="exp-icon"><i class="bi bi-calendar2-check-fill"></i></div>
          <h5>Book It</h5>
          <p>Order what you need, we are ready to serve. Proses mudah dan tim kami siap membantu kapan saja.</p>
        </div>
      </div>

      <!-- Card 3 -->
      <div class="col-md-4">
        <div class="exp-card">
          <div class="exp-icon"><i class="bi bi-emoji-smile-fill"></i></div>
          <h5>Breathe &amp; Relax</h5>
          <p>Share your experience about our services. Kami pastikan Anda puas dengan hasil instalasi.</p>
        </div>
      </div>

    </div>
  </div>
</section>


<!-- ════════════════════════════════
     SECTION 4 — Best Team
     Background gambar blur, overlay navy
     Teks besar putih di tengah
════════════════════════════════ -->
<section class="team-sec">
  <div class="container">
    <div class="row justify-content-center text-center">
      <div class="col-lg-8">
        <p class="slabel">Awesome team</p>
        <h2>We have the best team to Make<br>your best technology solution</h2>
      </div>
    </div>
  </div>
</section>


<!-- ════════════════════════════════
     SECTION 5 — Choose the Best Service
     Kiri: ilustrasi wanita + laptop
     Kanan: judul + social media + tombol More Details
════════════════════════════════ -->
<section class="sec">
  <div class="container">
    <div class="row align-items-center gy-5">

      <!-- LEFT ilustrasi -->
      <div class="col-lg-5 text-center">
        <img
          src="{{ asset('images/ro8.png') }}"
          class="img-fluid"
          style="max-height:320px; object-fit:contain;"
          alt="Customer Service Illustration"/>
      </div>

      <!-- RIGHT teks -->
      <div class="col-lg-6 offset-lg-1">
        <p class="slabel">Services We Provide</p>
        <h2 class="stitle mb-3">Choose the best<br>service option for you!</h2>
        <p class="sbody mb-4">
          We offer a variety of services tailored to your needs and budget. 
          Talk to us about your needs now and get the best solutions from our professional team.
        </p>

        <p style="font-weight:700;color:var(--navy);font-size:.88rem;margin-bottom:12px;">
          Our social media:
        </p>
        <div class="d-flex gap-3 mb-4 align-items-center">
          <a href="#" class="social-icon"
             style="background:#e1306c;color:#fff;">
            <i class="bi bi-instagram"></i>
          </a>
          <a href="#" class="social-icon"
             style="background:#1877f2;color:#fff;">
            <i class="bi bi-facebook"></i>
          </a>
          <a href="#" class="social-icon"
             style="background:#1da1f2;color:#fff;">
            <i class="bi bi-twitter-x"></i>
          </a>
        </div>

        <a href="services.html" class="btn-solid">
          More Details <i class="bi bi-arrow-right"></i>
        </a>
      </div>

    </div>
  </div>
</section>


<!-- ════════════════════════════════
     SECTION 6 — OUR ACHIEVEMENTS
     Background navy gelap gradient
     4 angka: 98% Satisfied / 750 Success / 120+ Active / 29+ Awards
════════════════════════════════ -->
<section class="achievements-sec">
  <div class="container">

    <div class="text-center mb-5">
      <p class="slabel" style="color:rgba(255,255,255,.4);">About Us</p>
      <h2 style="font-family:'Barlow Condensed',sans-serif;font-weight:900;font-size:2.6rem;color:#fff;">
        OUR ACHIEVEMENTS
      </h2>
      <div class="abar mx-auto mt-3"></div>
    </div>

    <div class="row g-0 justify-content-center">

      <div class="col-6 col-md-3">
        <div class="stat-block">
          <div class="stat-num" data-target="98" data-suffix="%">98%</div>
          <div class="stat-lbl">Satisfied<br>Clients</div>
        </div>
      </div>

      <div class="col-6 col-md-3">
        <div class="stat-block">
          <div class="stat-num" data-target="750" data-suffix="">750</div>
          <div class="stat-lbl">Success<br>Project</div>
        </div>
      </div>

      <div class="col-6 col-md-3">
        <div class="stat-block">
          <div class="stat-num" data-target="120" data-suffix="+">120+</div>
          <div class="stat-lbl">Active<br>Project</div>
        </div>
      </div>

      <div class="col-6 col-md-3">
        <div class="stat-block">
          <div class="stat-num" data-target="29" data-suffix="+">29+</div>
          <div class="stat-lbl">Winning<br>Awards</div>
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
          <li><a href="/">Home</a></li>
          <li><a href="/about">About</a></li>
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

<!-- Counter animasi angka achievements -->
<script>
  const nums = document.querySelectorAll('.stat-num');
  const io = new IntersectionObserver((entries) => {
    entries.forEach(entry => {
      if (!entry.isIntersecting) return;
      const el = entry.target;
      const target = parseInt(el.dataset.target);
      const suffix = el.dataset.suffix || '';
      let cur = 0;
      const step = Math.ceil(target / 55);
      const t = setInterval(() => {
        cur = Math.min(cur + step, target);
        el.textContent = cur + suffix;
        if (cur >= target) clearInterval(t);
      }, 22);
      io.unobserve(el);
    });
  }, { threshold: 0.5 });
  nums.forEach(n => io.observe(n));
</script>

</body>
</html>
