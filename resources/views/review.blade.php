<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Review & Rating – ATI Smart Technology Solution</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"/>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css" rel="stylesheet"/>
  <link href="https://fonts.googleapis.com/css2?family=Barlow:wght@400;500;600;700;900&family=Barlow+Condensed:wght@700;900&display=swap" rel="stylesheet"/>

  <style>
    :root {
      --navy:   #0b1638;
      --blue:   #162d7a;
      --mid:    #1e3fa0;
      --accent: #e8a020;
      --gray:   #6b7280;
      --light:  #f0f2f8;
      --star:   #f5c518;
      --white: #ffffff;
    }
    *, *::before, *::after { box-sizing: border-box; margin: 0; padding: 0; }
    html { scroll-behavior: smooth; }
    body {
      font-family: 'Barlow', sans-serif;
      color: #1e2235;
      background-image:linear-gradient(135deg, rgba(11,22,56,0.75) 0%, 
  rgba(22,45,122,0.65) 100%), url('images/baground2.jpeg');
      background-size: cover;
      background-position: center;
      background-attachment: fixed;
      min-height: 100vh;
    }

    /* ─── NAVBAR ───────────────────────── */
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

    /* ─── PAGE HERO ────────────────────── */
    .page-hero {
      text-align: center;
      padding: 52px 0 36px;
    }
    .page-hero h1 {
      font-family: 'Barlow Condensed', sans-serif;
      font-weight: 900;
      font-size: clamp(2.2rem, 5vw, 3.6rem);
      color: var(--white); margin-bottom: 10px;
    }
    .page-hero p {
      color: var(--white); font-size: .92rem;
    }

    /* ─── MAIN CARD ────────────────────── */
    .review-card {
      background: rgba(255,255,255,0.93);
      border-radius: 20px;
      box-shadow: 0 8px 32px rgba(11,22,56,.12);
      padding: 40px 38px;
      margin-bottom: 50px;
    }

    /* ─── STAR RATING ──────────────────── */
    .star-section { text-align: center; margin-bottom: 32px; }
    .star-section h5 {
      font-weight: 700; color: var(--navy);
      font-size: 1rem; margin-bottom: 14px;
    }
    .stars {
      display: flex; justify-content: center;
      gap: 8px; flex-direction: row-reverse;
    }
    .stars input { display: none; }
    .stars label {
      font-size: 2.4rem;
      color: #ccc; cursor: pointer;
      transition: color .15s, transform .15s;
    }
    /* CSS-only star rating trick */
    .stars label:hover,
    .stars label:hover ~ label,
    .stars input:checked ~ label {
      color: var(--star);
    }
    .stars label:hover { transform: scale(1.15); }
    .star-desc {
      margin-top: 10px; font-size: .85rem;
      color: var(--gray); min-height: 20px;
    }

    /* ─── DIVIDER ──────────────────────── */
    .sec-divider {
      border: none; border-top: 1px solid #e4e8f4;
      margin: 28px 0;
    }

    /* ─── FORM FIELDS ──────────────────── */
    .field-label {
      font-weight: 700; font-size: .82rem;
      color: var(--navy); margin-bottom: 6px;
      display: block;
    }
    .form-f {
      width: 100%;
      background: #f5f7fe;
      border: 1.5px solid #dde2f0;
      border-radius: 10px;
      padding: 11px 14px;
      font-size: .88rem;
      font-family: 'Barlow', sans-serif;
      color: #333; outline: none; resize: none;
      transition: border-color .2s, box-shadow .2s;
      margin-bottom: 16px;
    }
    .form-f::placeholder { color: #aab; }
    .form-f:focus {
      border-color: var(--blue);
      box-shadow: 0 0 0 3px rgba(22,45,122,.08);
    }

    /* ─── SERVICE CHECKBOX ─────────────── */
    .service-checks {
      display: flex; flex-wrap: wrap; gap: 8px;
      margin-bottom: 16px;
    }
    .service-checks input { display: none; }
    .service-checks label {
      background: #edf0fc; color: var(--blue);
      border: 1.5px solid #dde2f0;
      border-radius: 20px; padding: 5px 14px;
      font-size: .8rem; font-weight: 700;
      cursor: pointer; transition: all .18s;
      user-select: none;
    }
    .service-checks input:checked + label {
      background: var(--navy); color: #fff;
      border-color: var(--navy);
    }
    .service-checks label:hover {
      background: var(--blue); color: #fff;
      border-color: var(--blue);
    }

    /* ─── SUBMIT BUTTON ────────────────── */
    .btn-submit {
      display: flex; align-items: center;
      justify-content: center; gap: 9px;
      width: 100%;
      background: var(--navy); color: #fff;
      border: none; border-radius: 30px;
      padding: 14px;
      font-weight: 800; font-size: .95rem;
      font-family: 'Barlow', sans-serif;
      cursor: pointer; transition: all .2s;
      letter-spacing: .5px;
      margin-top: 8px;
    }
    .btn-submit:hover { background: var(--mid); transform: translateY(-2px); }
    .btn-submit:active { transform: translateY(0); }

    /* ─── SUCCESS STATE ────────────────── */
    .success-box {
      display: none;
      text-align: center; padding: 40px 20px;
    }
    .success-box .check-icon {
      width: 72px; height: 72px;
      background: linear-gradient(135deg, var(--navy), var(--mid));
      border-radius: 50%;
      display: flex; align-items: center; justify-content: center;
      margin: 0 auto 20px;
      animation: popIn .4s cubic-bezier(.175,.885,.32,1.275);
    }
    .success-box .check-icon i { font-size: 2rem; color: #fff; }
    @keyframes popIn {
      0% { transform: scale(0); opacity: 0; }
      100% { transform: scale(1); opacity: 1; }
    }
    .success-box h4 {
      font-family: 'Barlow Condensed', sans-serif;
      font-weight: 900; font-size: 1.8rem;
      color: var(--navy); margin-bottom: 8px;
    }
    .success-box p { color: var(--gray); font-size: .9rem; }
    .btn-back {
      display: inline-flex; align-items: center; gap: 7px;
      background: var(--navy); color: #fff;
      border-radius: 24px; padding: 10px 24px;
      font-size: .85rem; font-weight: 700;
      text-decoration: none; margin-top: 20px;
      transition: background .2s;
    }
    .btn-back:hover { background: var(--mid); color: #fff; }

    /* ─── EXISTING REVIEWS ─────────────── */
    .reviews-section { padding: 0 0 60px; }
    .reviews-title {
      font-family: 'Barlow Condensed', sans-serif;
      font-weight: 900; font-size: 1.6rem;
      color: var(--navy); margin-bottom: 20px;
    }
    .review-item {
      background: rgba(255,255,255,0.88);
      border-radius: 14px;
      padding: 20px 22px;
      margin-bottom: 14px;
      box-shadow: 0 3px 12px rgba(11,22,56,.08);
      border: 1px solid rgba(255,255,255,.9);
    }
    .review-item .rv-head {
      display: flex; align-items: center;
      justify-content: space-between; margin-bottom: 8px;
    }
    .rv-name { font-weight: 700; color: var(--navy); font-size: .92rem; }
    .rv-date { color: #aab; font-size: .75rem; }
    .rv-stars { color: var(--star); font-size: .9rem; margin-bottom: 6px; }
    .rv-service {
      display: inline-block;
      background: #e8ecf8; color: var(--blue);
      border-radius: 12px; padding: 2px 10px;
      font-size: .72rem; font-weight: 700;
      margin-bottom: 8px;
    }
    .rv-text { color: var(--gray); font-size: .85rem; line-height: 1.65; }

    /* ─── FOOTER ───────────────────────── */
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

<!-- ══════════════════ NAVBAR ══════════════════ -->
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


<!-- ══════════════════ HERO ══════════════════ -->
<div class="page-hero">
  <div class="container">
    <h1>Review &amp; Rating</h1>
    <p>Share your experience with our service, thank you.</p>
  </div>
</div>


<!-- ══════════════════ MAIN CONTENT ══════════════════ -->
<div class="container pb-2">
  <div class="row justify-content-center">
    <div class="col-lg-7 col-md-9">

      <!-- REVIEW FORM CARD -->
      <div class="review-card" id="formCard">

        <!-- Form content -->
        <div id="formContent">

          <!-- STAR RATING -->
          <div class="star-section">
            <h5>Berikan Penilaian Anda</h5>
            <div class="stars">
              <input type="radio" name="rating" id="s5" value="5"/>
              <label for="s5" title="Sangat Baik"><i class="bi bi-star-fill"></i></label>
              <input type="radio" name="rating" id="s4" value="4"/>
              <label for="s4" title="Baik"><i class="bi bi-star-fill"></i></label>
              <input type="radio" name="rating" id="s3" value="3"/>
              <label for="s3" title="Cukup"><i class="bi bi-star-fill"></i></label>
              <input type="radio" name="rating" id="s2" value="2"/>
              <label for="s2" title="Kurang"><i class="bi bi-star-fill"></i></label>
              <input type="radio" name="rating" id="s1" value="1"/>
              <label for="s1" title="Sangat Kurang"><i class="bi bi-star-fill"></i></label>
            </div>
            <p class="star-desc" id="starDesc">Klik bintang untuk memberi nilai</p>
          </div>

          <hr class="sec-divider"/>

          <!-- FORM FIELDS -->
          <div class="row g-0">
            <div class="col-md-6 pe-md-2">
              <label class="field-label">Nama Lengkap *</label>
              <input class="form-f" type="text" id="fname" placeholder="Masukkan nama Anda"/>
            </div>
            <div class="col-md-6 ps-md-2">
              <label class="field-label">Perusahaan</label>
              <input class="form-f" type="text" id="fcompany" placeholder="Nama perusahaan (opsional)"/>
            </div>
          </div>

          <label class="field-label">Layanan yang Digunakan</label>
          <div class="service-checks">
            <input type="checkbox" id="sc1"/><label for="sc1">CCTV & Surveillance</label>
            <input type="checkbox" id="sc2"/><label for="sc2">Fire Alarm</label>
            <input type="checkbox" id="sc3"/><label for="sc3">Access Control</label>
            <input type="checkbox" id="sc4"/><label for="sc4">Networking & IT</label>
            <input type="checkbox" id="sc5"/><label for="sc5">Display System</label>
            <input type="checkbox" id="sc6"/><label for="sc6">Conference System</label>
          </div>

          <label class="field-label">Ulasan Anda *</label>
          <textarea class="form-f" id="freview" rows="4"
            placeholder="Ceritakan pengalaman Anda menggunakan layanan kami..."></textarea>

          <button class="btn-submit" onclick="submitReview()">
            <i class="bi bi-send-fill"></i> Kirim Review
          </button>

        </div><!-- /formContent -->

        <!-- SUCCESS STATE (hidden by default) -->
        <div class="success-box" id="successBox">
          <div class="check-icon">
            <i class="bi bi-check-lg"></i>
          </div>
          <h4>Terima Kasih!</h4>
          <p>Review Anda telah berhasil dikirim.<br>Kami sangat menghargai masukan Anda.</p>
          <a href="services" class="btn-back">
            <i class="bi bi-arrow-left"></i> Kembali ke Layanan
          </a>
        </div>

      </div><!-- /review-card -->


      <!-- EXISTING REVIEWS -->
      <div class="reviews-section">
        <h3 class="reviews-title">Ulasan Pelanggan</h3>

        <div class="review-item">
          <div class="rv-head">
            <span class="rv-name">Budi Santoso</span>
            <span class="rv-date">15 Mei 2024</span>
          </div>
          <div class="rv-stars">
            <i class="bi bi-star-fill"></i>
            <i class="bi bi-star-fill"></i>
            <i class="bi bi-star-fill"></i>
            <i class="bi bi-star-fill"></i>
            <i class="bi bi-star-fill"></i>
          </div>
          <span class="rv-service">CCTV & Surveillance</span>
          <p class="rv-text">Pelayanan sangat profesional dan cepat. Tim instalasi datang tepat waktu dan hasil pemasangan CCTV sangat rapi. Sangat puas dengan hasilnya!</p>
        </div>

        <div class="review-item">
          <div class="rv-head">
            <span class="rv-name">Sari Dewi</span>
            <span class="rv-date">3 April 2024</span>
          </div>
          <div class="rv-stars">
            <i class="bi bi-star-fill"></i>
            <i class="bi bi-star-fill"></i>
            <i class="bi bi-star-fill"></i>
            <i class="bi bi-star-fill"></i>
            <i class="bi bi-star"></i>
          </div>
          <span class="rv-service">Access Control</span>
          <p class="rv-text">Sistem access control yang dipasang bekerja dengan baik. Proses konsultasi juga mudah dan tim sangat membantu menjelaskan pilihan produk.</p>
        </div>

        <div class="review-item">
          <div class="rv-head">
            <span class="rv-name">PT. Maju Bersama</span>
            <span class="rv-date">20 Maret 2024</span>
          </div>
          <div class="rv-stars">
            <i class="bi bi-star-fill"></i>
            <i class="bi bi-star-fill"></i>
            <i class="bi bi-star-fill"></i>
            <i class="bi bi-star-fill"></i>
            <i class="bi bi-star-fill"></i>
          </div>
          <span class="rv-service">Fire Alarm</span>
          <p class="rv-text">ATI memasang sistem fire alarm di gedung kantor kami. Pekerjaan selesai sesuai jadwal dan sudah tersertifikasi. Highly recommended!</p>
        </div>

      </div>

    </div>
  </div>
</div>


<!-- ══════════════════ FOOTER ══════════════════ -->
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
          <li><a href="#">CCTV & Surveillance</a></li>
          <li><a href="#">Fire Alarm</a></li>
          <li><a href="#">Access Control</a></li>
          <li><a href="#">Networking & IT</a></li>
          <li><a href="#">Display System</a></li>
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
  // Star description
  const starLabels = {
    1: 'Sangat Kurang ⭐',
    2: 'Kurang ⭐⭐',
    3: 'Cukup ⭐⭐⭐',
    4: 'Baik ⭐⭐⭐⭐',
    5: 'Sangat Baik ⭐⭐⭐⭐⭐'
  };
  document.querySelectorAll('.stars input').forEach(inp => {
    inp.addEventListener('change', () => {
      document.getElementById('starDesc').textContent = starLabels[inp.value];
    });
  });

  // Submit
  function submitReview() {
    const name   = document.getElementById('fname').value.trim();
    const review = document.getElementById('freview').value.trim();
    const rating = document.querySelector('.stars input:checked');

    if (!name) {
      alert('Mohon isi nama lengkap Anda.');
      document.getElementById('fname').focus();
      return;
    }
    if (!rating) {
      alert('Mohon berikan penilaian bintang terlebih dahulu.');
      return;
    }
    if (!review) {
      alert('Mohon tulis ulasan Anda.');
      document.getElementById('freview').focus();
      return;
    }

    // Show success
    document.getElementById('formContent').style.display = 'none';
    document.getElementById('successBox').style.display  = 'block';
    window.scrollTo({ top: 0, behavior: 'smooth' });
  }
</script>

</body>
</html>
