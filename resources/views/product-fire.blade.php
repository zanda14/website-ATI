<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Fire Alarm System – ATI</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"/>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css" rel="stylesheet"/>
  <link href="https://fonts.googleapis.com/css2?family=Barlow:wght@400;600;700;900&family=Barlow+Condensed:wght@700;900&display=swap" rel="stylesheet"/>
  <style>
    :root { --navy:#0b1638; --blue:#162d7a; --mid:#1e3fa0; --accent:#e8a020; --gray:#6b7280; }
    *,*::before,*::after{box-sizing:border-box;margin:0;padding:0;}
    html{scroll-behavior:smooth;}
    body{font-family:'Barlow',sans-serif;color:#1e2235;
    background-image:linear-gradient(135deg, rgba(11,22,56,0.75) 0%,
   rgba(22,45,122,0.65) 100%),
    url('{{ asset("images/baground2.jpeg") }}');
     background-size:cover;background-position:center;background-attachment:fixed;}
    /* NAVBAR */
    .topnav{background:#e8eaf2;border-bottom:1px solid #d0d4e4;padding:9px 0;position:sticky;top:0;z-index:1000;}
    .topnav .brand img{height:38px;}
    .topnav .nav-link{font-weight:600;font-size:.82rem;color:#2c2c3e!important;padding:5px 12px!important;transition:color .2s;}
    .topnav .nav-link:hover,.topnav .nav-link.active{color:var(--blue)!important;}
    .btn-phone{border:1.5px solid var(--navy);border-radius:24px;padding:6px 15px;font-size:.78rem;font-weight:700;color:var(--navy);text-decoration:none;display:inline-flex;align-items:center;gap:6px;transition:all .2s;white-space:nowrap;}
    .btn-phone:hover{background:var(--navy);color:#fff;}
    /* PAGE HERO */
    .page-hero{text-align:center;padding:52px 0 32px;}
   .page-hero h1{
    font-family:'Barlow Condensed',sans-serif;
    font-weight:900;
    font-size:clamp(2.2rem,5vw,3.6rem);
    color:#fff;
    margin-bottom:8px;
}
    .page-hero .back-btn{display:inline-flex;align-items:center;gap:7px;background:var(--navy);color:#fff;border-radius:24px;padding:8px 20px;font-size:.82rem;font-weight:700;text-decoration:none;transition:background .2s;}
    .page-hero .back-btn:hover{background:var(--mid);color:#fff;}
    /* PRODUCT CARDS */
    .prod-section{padding:10px 0 60px;}
    .prod-card{background:rgba(255,255,255,0.88);border-radius:14px;overflow:hidden;border:1px solid rgba(255,255,255,0.9);box-shadow:0 4px 18px rgba(11,22,56,.10);transition:transform .25s,box-shadow .25s;margin-bottom:20px;}
    .prod-card:hover{transform:translateY(-4px);box-shadow:0 12px 32px rgba(11,22,56,.16);background:rgba(255,255,255,0.97);}
    .prod-card-img{width:100%;height:200px;object-fit:cover;display:block;}
    .prod-card-body{padding:20px 22px;}
    .prod-card-body h4{font-family:'Barlow Condensed',sans-serif;font-weight:900;font-size:1.25rem;color:var(--navy);margin-bottom:8px;}
    .prod-card-body p{color:var(--gray);font-size:.87rem;line-height:1.75;margin-bottom:12px;}
    .brand-tag{display:inline-block;background:#e8ecf8;color:var(--blue);border-radius:10px;padding:2px 10px;font-size:.72rem;font-weight:700;margin-right:4px;margin-bottom:4px;}
    /* FOOTER */
    footer{background:#070d25;color:rgba(255,255,255,.5);padding:38px 0 16px;font-size:.83rem;}
    footer .fb{color:#fff;font-weight:800;font-size:.9rem;margin-bottom:6px;}
    footer a{color:rgba(255,255,255,.45);text-decoration:none;transition:color .2s;}
    footer a:hover{color:var(--accent);}
    footer hr{border-color:rgba(255,255,255,.1);margin:22px 0 12px;}
  </style>
</head>
<body>
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
        </li>
        
    </div>
    <a href="tel:+6282288366600" class="btn-phone ms-lg-3 mt-2 mt-lg-0"><i class="bi bi-telephone-fill"></i> +62-822-8836-6600</a>
  </div>
</nav>

<section class="page-hero">
  <div class="container">
    <h1>Fire Alarm System</h1>
    <a href="product" class="back-btn mt-3"><i class="bi bi-arrow-left"></i> Kembali ke Product</a>
  </div>
</section>

<section class="prod-section">
  <div class="container">
    <div class="row g-4">

      <div class="col-md-6 col-lg-4">
        <div class="prod-card">
          <img class="prod-card-img" src="https://placehold.co/480x200/fde8e8/8b0000?text=Fire+Alarm" alt="Fire Alarm"/>
          <div class="prod-card-body">
            <h4>FIRE ALARM</h4>
            <p>Smart Detection System, Alarm Monitoring, Fire Security, Early Warning System. Sistem deteksi dini kebakaran berstandar internasional dengan response time yang cepat.</p>
            <span class="brand-tag">Notifier</span>
            <span class="brand-tag">Hochiki</span>
            <span class="brand-tag">Bosch</span>
          </div>
        </div>
      </div>

      <div class="col-md-6 col-lg-4">
        <div class="prod-card">
          <img class="prod-card-img" src="https://placehold.co/480x200/fde8e8/8b0000?text=Fire+Suppression" alt="Fire Suppression"/>
          <div class="prod-card-body">
            <h4>FIRE SUPPRESSION</h4>
            <p>Annual Inspections, Detection Address, Extinguishing System. Sistem pemadaman otomatis untuk melindungi aset dan gedung dari bahaya kebakaran.</p>
            <span class="brand-tag">Asenware</span>
            <span class="brand-tag">Hochiki</span>
          </div>
        </div>
      </div>

      <div class="col-md-6 col-lg-4">
        <div class="prod-card">
          <img class="prod-card-img" src="https://placehold.co/480x200/fde8e8/8b0000?text=Fire+Hydrant" alt="Fire Hydrant"/>
          <div class="prod-card-body">
            <h4>FIRE HYDRANT</h4>
            <p>Fire Protection System, Water Supply, Emergency Response. Sistem hidran kebakaran untuk proteksi maksimal area gedung dan kawasan industri.</p>
            <span class="brand-tag">Notifier</span>
            <span class="brand-tag">Viking</span>
          </div>
        </div>
      </div>

    </div>
  </div>
</section>

<footer>
  <div class="container">
    <div class="row g-4">
      <div class="col-lg-4"><div class="fb">ATI – PT Arka Teknologi Indonesia</div><p>Smart Technology Solution.</p><p class="mt-2"><i class="bi bi-telephone-fill me-2" style="color:var(--accent);"></i>+62-822-8836-6600</p></div>
      <div class="col-6 col-lg-2"><p style="color:#fff;font-weight:700;margin-bottom:8px;font-size:.85rem;">Menu</p><ul class="list-unstyled" style="line-height:2.1;"><li><a href="index.html">Home</a></li><li><a href="about.html">About</a></li><li><a href="services.html">Services</a></li><li><a href="gallery.html">Gallery</a></li><li><a href="product">Product</a></li><li><a href="contact.html">Contact</a></li></ul></div>
      <div class="col-6 col-lg-3"><p style="color:#fff;font-weight:700;margin-bottom:8px;font-size:.85rem;">Kategori Produk</p><ul class="list-unstyled" style="line-height:2.1;"><li><a href="product-fire.html">Fire Alarm System</a></li><li><a href="product-it.html">IT Infrastructure</a></li><li><a href="product-pa.html">Public Address</a></li><li><a href="product-cctv.html">CCTV & Surveillance</a></li><li><a href="product-security.html">Security Access</a></li><li><a href="product-display.html">Display System</a></li></ul></div>
      <div class="col-lg-3"><p style="color:#fff;font-weight:700;margin-bottom:8px;font-size:.85rem;">Ikuti Kami</p><div class="d-flex gap-3 mb-3"><a href="#" style="font-size:1.25rem;"><i class="bi bi-instagram"></i></a><a href="#" style="font-size:1.25rem;"><i class="bi bi-facebook"></i></a><a href="#" style="font-size:1.25rem;"><i class="bi bi-linkedin"></i></a><a href="https://wa.me/6282288366600" target="_blank" style="font-size:1.25rem;"><i class="bi bi-whatsapp"></i></a></div><p style="font-size:.8rem;">Batam, Kepulauan Riau<br>Indonesia</p></div>
    </div>
    <hr/><p class="text-center" style="opacity:.35;font-size:.76rem;">© 2024 PT Arka Teknologi Indonesia. All rights reserved.</p>
  </div>
</footer>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
