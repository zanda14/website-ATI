<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Knowledge Base – ATI Smart Technology Solution</title>
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
  background-repeat: repeat;
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

    /* ─── HERO ─────────────────────────── */
    .kb-hero {
      background: linear-gradient(135deg, #0b1638 0%, #162d7a 100%);
      padding: 68px 0 56px;
      text-align: center;
    }
    .kb-hero h1 {
      font-family: 'Barlow Condensed', sans-serif;
      font-weight: 900;
      font-size: clamp(2.4rem, 5vw, 3.8rem);
      color: #fff; margin-bottom: 12px;
    }
    .kb-hero p {
      color: rgba(255,255,255,.68);
      font-size: .92rem; line-height: 1.7;
      max-width: 440px; margin: 0 auto 28px;
    }
    /* Search bar hero */
    .hero-search {
      position: relative;
      max-width: 500px;
      margin: 0 auto;
    }
    .hero-search input {
      width: 100%;
      padding: 14px 56px 14px 22px;
      border-radius: 40px;
      border: none; outline: none;
      font-size: .92rem;
      font-family: 'Barlow', sans-serif;
      color: #333;
      box-shadow: 0 4px 20px rgba(0,0,0,.2);
    }
    .hero-search button {
      position: absolute; right: 6px; top: 50%;
      transform: translateY(-50%);
      background: var(--navy); border: none;
      width: 40px; height: 40px; border-radius: 50%;
      display: flex; align-items: center; justify-content: center;
      cursor: pointer; transition: background .2s;
    }
    .hero-search button:hover { background: var(--mid); }
    .hero-search button i { color: #fff; font-size: 1rem; }

    /* ─── CATEGORY TABS ────────────────── */
    .cat-tabs {
      background: rgba(255,255,255,0.90);
      border-bottom: 2px solid #e0e4f0;
      padding: 0;
      position: sticky; top: 57px; z-index: 900;
    }
    .cat-tabs .nav-tabs {
      border: none; gap: 0;
      justify-content: center; flex-wrap: wrap;
    }
    .cat-tabs .nav-tabs .nav-link {
      border: none;
      border-bottom: 3px solid transparent;
      border-radius: 0; padding: 13px 20px;
      font-weight: 700; font-size: .82rem;
      color: #555; transition: all .2s;
      display: flex; align-items: center; gap: 6px;
    }
    .cat-tabs .nav-tabs .nav-link:hover {
      color: var(--blue);
      border-bottom-color: var(--blue);
      background: transparent;
    }
    .cat-tabs .nav-tabs .nav-link.active {
      color: var(--navy);
      border-bottom: 3px solid var(--accent);
      background: transparent; font-weight: 900;
    }
    .cat-tabs .nav-tabs .nav-link i { font-size: .95rem; }

    /* ─── MAIN CONTENT ─────────────────── */
    .kb-main { padding: 40px 0 60px; }

    /* ─── ARTICLE CARD ─────────────────── */
    .article-card {
      background: rgba(255,255,255,0.90);
      border-radius: 14px;
      border: 1px solid rgba(255,255,255,0.95);
      box-shadow: 0 4px 16px rgba(11,22,56,.08);
      padding: 22px 24px;
      transition: transform .22s, box-shadow .22s, background .2s;
      cursor: pointer;
      height: 100%;
      text-decoration: none;
      display: block;
      color: inherit;
    }
    .article-card:hover {
      transform: translateY(-4px);
      box-shadow: 0 12px 32px rgba(11,22,56,.14);
      background: rgba(255,255,255,0.98);
      color: inherit;
    }
    .article-cat {
      display: inline-flex; align-items: center; gap: 5px;
      background: #e8ecf8; color: var(--blue);
      border-radius: 12px; padding: 3px 10px;
      font-size: .7rem; font-weight: 700;
      margin-bottom: 10px;
    }
    .article-cat i { font-size: .75rem; }
    .article-card h5 {
      font-weight: 700; color: var(--navy);
      font-size: .96rem; line-height: 1.3;
      margin-bottom: 8px;
    }
    .article-card p {
      color: var(--gray); font-size: .82rem;
      line-height: 1.65; margin: 0 0 14px;
    }
    .article-meta {
      display: flex; align-items: center;
      gap: 14px; font-size: .72rem; color: #aab;
    }
    .article-meta span { display: flex; align-items: center; gap: 4px; }

    /* ─── FEATURED CARD (wide) ─────────── */
    .article-card.featured {
      background: linear-gradient(135deg, var(--navy) 0%, var(--mid) 100%);
      color: #fff;
    }
    .article-card.featured:hover { color: #fff; }
    .article-card.featured .article-cat {
      background: rgba(255,255,255,.15);
      color: #fff;
    }
    .article-card.featured h5 { color: #fff; font-size: 1.15rem; }
    .article-card.featured p  { color: rgba(255,255,255,.72); }
    .article-card.featured .article-meta { color: rgba(255,255,255,.45); }
    .article-card.featured .read-btn {
      display: inline-flex; align-items: center; gap: 6px;
      background: var(--accent); color: var(--navy);
      border-radius: 20px; padding: 7px 18px;
      font-size: .78rem; font-weight: 700;
      text-decoration: none; transition: all .2s;
      margin-top: 4px;
    }
    .article-card.featured .read-btn:hover {
      background: #fff; color: var(--navy);
    }

    /* ─── SECTION TITLE ────────────────── */
    .sec-label {
      font-size: .7rem; font-weight: 700;
      letter-spacing: 2px; text-transform: uppercase;
      color: #999; margin-bottom: 6px;
    }
    .sec-title {
      font-family: 'Barlow Condensed', sans-serif;
      font-weight: 900; font-size: 1.6rem;
      color: var(--light); margin-bottom: 20px;
    }

    /* ─── FAQ ──────────────────────────── */
    .faq-item {
      background: rgba(255,255,255,0.90);
      border-radius: 12px;
      border: 1px solid rgba(255,255,255,0.95);
      box-shadow: 0 3px 12px rgba(11,22,56,.07);
      margin-bottom: 10px;
      overflow: hidden;
    }
    .faq-q {
      padding: 16px 20px;
      font-weight: 700; font-size: .9rem;
      color: var(--navy);
      display: flex; align-items: center;
      justify-content: space-between;
      cursor: pointer;
      transition: background .2s;
      gap: 12px;
    }
    .faq-q:hover { background: rgba(22,45,122,.04); }
    .faq-q i {
      font-size: 1rem; color: var(--blue);
      flex-shrink: 0; transition: transform .25s;
    }
    .faq-q.open i { transform: rotate(180deg); }
    .faq-a {
      display: none;
      padding: 0 20px 16px;
      color: var(--gray); font-size: .85rem;
      line-height: 1.75;
      border-top: 1px solid #edf0f8;
    }
    .faq-a.show { display: block; }

    /* ─── POPULAR TAGS ─────────────────── */
    .tag-cloud { display: flex; flex-wrap: wrap; gap: 8px; }
    .tag {
      display: inline-block;
      background: rgba(255,255,255,0.85);
      border: 1.5px solid #dde2f0;
      border-radius: 20px; padding: 5px 14px;
      font-size: .78rem; font-weight: 700;
      color: var(--blue); cursor: pointer;
      transition: all .18s; text-decoration: none;
    }
    .tag:hover {
      background: var(--navy); color: #fff;
      border-color: var(--navy);
    }

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

<!-- ══════════════ NAVBAR ══════════════ -->
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


<!-- ══════════════ HERO ══════════════ -->
<section class="kb-hero">
  <div class="container">
    <h1>Knowladge Base</h1>
    <p>Find the best guides, solutions, and insights to support your needs.</p>
    <div class="hero-search">
      <input type="text" id="searchInput" placeholder="Search articles, guides, FAQ..."
             oninput="searchArticles(this.value)"/>
      <button type="button">
        <i class="bi bi-search"></i>
      </button>
    </div>
  </div>
</section>


<!-- ══════════════ CATEGORY TABS ══════════════ -->
<div class="cat-tabs">
  <div class="container">
    <ul class="nav nav-tabs" id="kbTab">
      <li class="nav-item">
        <button class="nav-link active" onclick="filterCat('all', this)">
          <i class="bi bi-grid-fill"></i> Semua
        </button>
      </li>
      <li class="nav-item">
        <button class="nav-link" onclick="filterCat('cctv', this)">
          <i class="bi bi-camera-video-fill"></i> CCTV
        </button>
      </li>
      <li class="nav-item">
        <button class="nav-link" onclick="filterCat('fire', this)">
          <i class="bi bi-fire"></i> Fire Alarm
        </button>
      </li>
      <li class="nav-item">
        <button class="nav-link" onclick="filterCat('access', this)">
          <i class="bi bi-shield-lock-fill"></i> Access Control
        </button>
      </li>
      <li class="nav-item">
        <button class="nav-link" onclick="filterCat('network', this)">
          <i class="bi bi-router-fill"></i> Networking
        </button>
      </li>
      <li class="nav-item">
        <button class="nav-link" onclick="filterCat('display', this)">
          <i class="bi bi-display-fill"></i> Display
        </button>
      </li>
    </ul>
  </div>
</div>


<!-- ══════════════ MAIN CONTENT ══════════════ -->
<section class="kb-main">
  <div class="container">
    <div class="row g-4">

      <!-- ─── LEFT: Articles ─── -->
      <div class="col-lg-8">

        <!-- Featured Article -->
        <div class="mb-4" data-cat="cctv">
          <a class="article-card featured d-block text-decoration-none" href="#">
            <span class="article-cat"><i class="bi bi-camera-video-fill"></i> CCTV & Surveillance</span>
            <h5>Panduan Lengkap Memilih Sistem CCTV untuk Gedung Perkantoran</h5>
            <p>Pelajari cara memilih kamera IP yang tepat, menentukan jumlah titik kamera, resolusi yang dibutuhkan, dan sistem penyimpanan NVR yang sesuai kapasitas gedung Anda.</p>
            <a class="read-btn" href="https://ejournal.unhasy.ac.id/index.php/dinamis/article/view/8401">Baca Selengkapnya <i class="bi bi-arrow-right"></i></a>
            <div class="article-meta mt-3">
              <span><i class="bi bi-calendar3"></i> 10 Juni 2024</span>
              <span><i class="bi bi-clock"></i> 5 menit baca</span>
              <span><i class="bi bi-eye"></i> 1.2k views</span>
            </div>
          </a>
        </div>

        <!-- Article Grid -->
        <div class="row g-3" id="articleGrid">

          <div class="col-md-6" data-cat="fire">
            <a class="article-card" href="#">
              <span class="article-cat"><i class="bi bi-fire"></i> Fire Alarm</span>
              <h5>Cara Kerja Fire Alarm Addressable vs Konvensional</h5>
              <p>Perbedaan sistem addressable dan konvensional, kelebihan masing-masing, dan rekomendasi penggunaannya.</p>
              <div class="article-meta">
                <span><i class="bi bi-calendar3"></i> 5 Jun 2024</span>
                <span><i class="bi bi-clock"></i> 4 mnt</span>
              </div>
            </a>
          </div>

          <div class="col-md-6" data-cat="access">
            <a class="article-card" href="#">
              <span class="article-cat"><i class="bi bi-shield-lock-fill"></i> Access Control</span>
              <h5>Fingerprint vs Face Recognition: Mana yang Lebih Aman?</h5>
              <p>Perbandingan teknologi biometrik terkini untuk kebutuhan keamanan akses pintu gedung dan industri.</p>
              <div class="article-meta">
                <span><i class="bi bi-calendar3"></i> 1 Jun 2024</span>
                <span><i class="bi bi-clock"></i> 3 mnt</span>
              </div>
            </a>
          </div>

          <div class="col-md-6" data-cat="network">
            <a class="article-card" href="#">
              <span class="article-cat"><i class="bi bi-router-fill"></i> Networking</span>
              <h5>Panduan Instalasi Fiber Optic untuk Gedung Bertingkat</h5>
              <p>Langkah-langkah instalasi kabel fiber optic, pemilihan jenis kabel, dan konfigurasi switch managed.</p>
              <div class="article-meta">
                <span><i class="bi bi-calendar3"></i> 28 Mei 2024</span>
                <span><i class="bi bi-clock"></i> 6 mnt</span>
              </div>
            </a>
          </div>

          <div class="col-md-6" data-cat="display">
            <a class="article-card" href="#">
              <span class="article-cat"><i class="bi bi-display-fill"></i> Display System</span>
              <h5>Perbedaan Videotron, Video Wall, dan Digital Signage</h5>
              <p>Kapan harus menggunakan videotron outdoor, video wall indoor, atau digital signage untuk kebutuhan informasi publik.</p>
              <div class="article-meta">
                <span><i class="bi bi-calendar3"></i> 22 Mei 2024</span>
                <span><i class="bi bi-clock"></i> 4 mnt</span>
              </div>
            </a>
          </div>

          <div class="col-md-6" data-cat="cctv">
            <a class="article-card" href="#">
              <span class="article-cat"><i class="bi bi-camera-video-fill"></i> CCTV</span>
              <h5>Tips Perawatan CCTV agar Awet dan Tahan Lama</h5>
              <p>Jadwal maintenance rutin, cara membersihkan lensa kamera, dan pengecekan sistem NVR yang perlu dilakukan.</p>
              <div class="article-meta">
                <span><i class="bi bi-calendar3"></i> 18 Mei 2024</span>
                <span><i class="bi bi-clock"></i> 3 mnt</span>
              </div>
            </a>
          </div>

          <div class="col-md-6" data-cat="fire">
            <a class="article-card" href="#">
              <span class="article-cat"><i class="bi bi-fire"></i> Fire Alarm</span>
              <h5>Standar Instalasi Fire Alarm Sesuai NFPA & SNI</h5>
              <p>Regulasi dan standar yang wajib dipenuhi dalam pemasangan sistem fire alarm untuk gedung komersial di Indonesia.</p>
              <div class="article-meta">
                <span><i class="bi bi-calendar3"></i> 14 Mei 2024</span>
                <span><i class="bi bi-clock"></i> 5 mnt</span>
              </div>
            </a>
          </div>

          <div class="col-md-6" data-cat="access">
            <a class="article-card" href="#">
              <span class="article-cat"><i class="bi bi-shield-lock-fill"></i> Access Control</span>
              <h5>Cara Integrasi Access Control dengan CCTV</h5>
              <p>Menggabungkan sistem access control dan CCTV untuk monitoring terpadu yang lebih efisien dan aman.</p>
              <div class="article-meta">
                <span><i class="bi bi-calendar3"></i> 10 Mei 2024</span>
                <span><i class="bi bi-clock"></i> 4 mnt</span>
              </div>
            </a>
          </div>

          <div class="col-md-6" data-cat="network">
            <a class="article-card" href="#">
              <span class="article-cat"><i class="bi bi-router-fill"></i> Networking</span>
              <h5>Mengenal WiFi Enterprise vs WiFi Rumahan</h5>
              <p>Perbedaan access point enterprise dengan consumer grade, dan kenapa gedung komersial wajib pakai enterprise WiFi.</p>
              <div class="article-meta">
                <span><i class="bi bi-calendar3"></i> 6 Mei 2024</span>
                <span><i class="bi bi-clock"></i> 3 mnt</span>
              </div>
            </a>
          </div>

        </div><!-- /articleGrid -->

        <!-- No result -->
        <div id="noResult" style="display:none; text-align:center; padding:40px 0;">
          <i class="bi bi-search" style="font-size:2.5rem;color:#ccc;display:block;margin-bottom:12px;"></i>
          <p style="color:var(--gray);font-size:.92rem;">Tidak ada artikel yang ditemukan.</p>
        </div>

      </div><!-- /col-lg-8 -->


      <!-- ─── RIGHT: Sidebar ─── -->
      <div class="col-lg-4">

        <!-- FAQ -->
        <div class="mb-4">
          <p class="sec-label">FAQ</p>
          <h3 class="sec-title">Pertanyaan Umum</h3>

          <div class="faq-item">
            <div class="faq-q" onclick="toggleFaq(this)">
              Berapa lama proses instalasi CCTV?
              <i class="bi bi-chevron-down"></i>
            </div>
            <div class="faq-a">
              Tergantung jumlah titik kamera. Untuk 8–16 kamera biasanya selesai dalam 1–2 hari kerja. Proyek besar dengan 50+ kamera bisa memakan waktu 3–7 hari.
            </div>
          </div>

          <div class="faq-item">
            <div class="faq-q" onclick="toggleFaq(this)">
              Apakah ada garansi produk dan instalasi?
              <i class="bi bi-chevron-down"></i>
            </div>
            <div class="faq-a">
              Ya, semua produk yang kami jual memiliki garansi resmi dari distributor. Untuk jasa instalasi kami memberikan garansi pengerjaan selama 3 bulan.
            </div>
          </div>

          <div class="faq-item">
            <div class="faq-q" onclick="toggleFaq(this)">
              Apakah tersedia layanan maintenance berkala?
              <i class="bi bi-chevron-down"></i>
            </div>
            <div class="faq-a">
              Tersedia paket maintenance bulanan dan tahunan untuk CCTV, fire alarm, access control, dan jaringan. Hubungi tim kami untuk informasi paket.
            </div>
          </div>

          <div class="faq-item">
            <div class="faq-q" onclick="toggleFaq(this)">
              Apakah bisa survei lokasi sebelum order?
              <i class="bi bi-chevron-down"></i>
            </div>
            <div class="faq-a">
              Tentu. Kami menyediakan layanan survei gratis untuk proyek di area Batam dan Cirebon. Tim teknis kami akan datang ke lokasi untuk analisis kebutuhan.
            </div>
          </div>

          <div class="faq-item">
            <div class="faq-q" onclick="toggleFaq(this)">
              Brand apa saja yang tersedia?
              <i class="bi bi-chevron-down"></i>
            </div>
            <div class="faq-a">
              Kami menyediakan produk dari Hikvision, Dahua, Axis, Bosch, Notifier, Hochiki, Asenware, Ruijie, ZKTeco, CAME, FAAC, Samsung, LG, dan masih banyak lagi.
            </div>
          </div>

        </div>

        <!-- Popular Tags -->
        <div class="mb-4">
          <p class="sec-label">Tags Populer</p>
          <h3 class="sec-title">Topik</h3>
          <div class="tag-cloud">
            <a class="tag" href="#" onclick="filterCat('cctv', null)">CCTV</a>
            <a class="tag" href="#" onclick="filterCat('fire', null)">Fire Alarm</a>
            <a class="tag" href="#" onclick="filterCat('access', null)">Access Control</a>
            <a class="tag" href="#" onclick="filterCat('network', null)">Networking</a>
            <a class="tag" href="#" onclick="filterCat('display', null)">Display</a>
            <a class="tag" href="#">Instalasi</a>
            <a class="tag" href="#">Maintenance</a>
            <a class="tag" href="#">Hikvision</a>
            <a class="tag" href="#">Dahua</a>
            <a class="tag" href="#">Fiber Optic</a>
            <a class="tag" href="#">Smart Building</a>
          </div>
        </div>

        <!-- Contact CTA -->
        <div style="background:linear-gradient(135deg,var(--navy),var(--mid));border-radius:14px;padding:26px 22px;text-align:center;">
          <i class="bi bi-headset" style="font-size:2rem;color:var(--accent);margin-bottom:10px;display:block;"></i>
          <h6 style="color:#fff;font-weight:700;font-size:.95rem;margin-bottom:6px;">Butuh Bantuan?</h6>
          <p style="color:rgba(255,255,255,.65);font-size:.8rem;line-height:1.6;margin-bottom:16px;">
            Tim kami siap membantu Anda menemukan solusi yang tepat.
          </p>
          <a href="contact.html"
             style="display:inline-flex;align-items:center;gap:7px;background:var(--accent);color:var(--navy);border-radius:20px;padding:9px 20px;font-size:.82rem;font-weight:700;text-decoration:none;transition:all .2s;">
            <i class="bi bi-chat-fill"></i> Hubungi Kami
          </a>
        </div>

      </div><!-- /sidebar -->

    </div>
  </div>
</section>


<!-- ══════════════ FOOTER ══════════════ -->
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
        <p style="color:#fff;font-weight:700;margin-bottom:8px;font-size:.85rem;">Knowledge Base</p>
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
  // ── Category Filter ──────────────────────────
  function filterCat(cat, btn) {
    // Update active tab
    if (btn) {
      document.querySelectorAll('.cat-tabs .nav-link').forEach(b => b.classList.remove('active'));
      btn.classList.add('active');
    }
    const items = document.querySelectorAll('#articleGrid [data-cat], [data-cat]');
    items.forEach(item => {
      if (cat === 'all' || item.dataset.cat === cat) {
        item.style.display = '';
      } else {
        item.style.display = 'none';
      }
    });
    return false;
  }

  // ── Search ───────────────────────────────────
  function searchArticles(query) {
    const q = query.toLowerCase().trim();
    const cards = document.querySelectorAll('#articleGrid .col-md-6');
    let found = 0;
    cards.forEach(col => {
      const text = col.innerText.toLowerCase();
      if (!q || text.includes(q)) {
        col.style.display = ''; found++;
      } else {
        col.style.display = 'none';
      }
    });
    document.getElementById('noResult').style.display = found === 0 && q ? 'block' : 'none';
  }

  // ── FAQ Toggle ───────────────────────────────
  function toggleFaq(el) {
    const answer = el.nextElementSibling;
    const isOpen = answer.classList.contains('show');
    // Close all
    document.querySelectorAll('.faq-a').forEach(a => a.classList.remove('show'));
    document.querySelectorAll('.faq-q').forEach(q => q.classList.remove('open'));
    // Open clicked if was closed
    if (!isOpen) {
      answer.classList.add('show');
      el.classList.add('open');
    }
  }
</script>
</body>
</html>
