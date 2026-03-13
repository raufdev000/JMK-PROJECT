<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Watches</title>
    <meta name="description" content="Professional shoe repairing in Dubai. Sole replacement, stitching, heel repair and more at JMK Repairs Al Karama.">
<meta name="robots" content="index, follow">
<link rel="canonical" href="https://jmkrepairs.com/shoe-repairing">
        <link rel="stylesheet" href="{{ asset('css/style.css') }}">
            <link rel="icon" type="image/png" href="../images/jmk_logo.png">
<link rel="shortcut icon" type="image/png" href="../images/jmk_logo.png">
<link rel="apple-touch-icon" href="../images/jmk_logo.png">
 <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <link href="https://fonts.googleapis.com/css2?family=Outfit:wght@400;500;600;700;800&family=DM+Sans:ital,wght@0,400;0,500;0,600;1,400&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;700&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
<style>
    /* ===================== WATCH REPAIR SECTION ===================== */
    :root {
        --primary-color: #871deb;
        --secondary-color: #5803eb;
        --accent-color: #2629d3;
        --dark-color: #1f2937;
        --light-gray: #6b7280;
        --bg-light: #f9fafb;
    }

    /* ===================== HERO ===================== */
    .wr-hero-section {
        background: linear-gradient(135deg, #ede9fe 0%, #ddd6fe 50%, #c4b5fd 100%);
        min-height: 520px;
        padding: 60px 0;
        position: relative;
        overflow: hidden;
    }

    .wr-hero-section::before {
        content: '';
        position: absolute;
        top: -100px; right: -100px;
        width: 400px; height: 400px;
        background: radial-gradient(circle, rgba(135,29,235,0.15) 0%, transparent 70%);
        border-radius: 50%;
    }

    .wr-hero-section::after {
        content: '';
        position: absolute;
        bottom: -80px; left: -80px;
        width: 300px; height: 300px;
        background: radial-gradient(circle, rgba(38,41,211,0.12) 0%, transparent 70%);
        border-radius: 50%;
    }

    .wr-hero-title {
        font-size: 3rem;
        font-weight: 800;
        color: #1f2937;
        line-height: 1.2;
    }

    .wr-hero-subtitle {
        font-size: 1.15rem;
        color: #4b5563;
        line-height: 1.7;
    }

    .wr-hero-badges .badge {
        font-size: 0.92rem;
        font-weight: 600;
        border-radius: 50px;
        background: white !important;
        color: #1f2937 !important;
        box-shadow: 0 2px 8px rgba(0,0,0,0.1);
    }

    .wr-hero-image-wrapper {
        width: 100%;
        overflow: hidden;
        border-radius: 1.25rem;
        box-shadow: 0 20px 50px rgba(135,29,235,0.25);
    }

    .wr-hero-image-wrapper img {
        width: 100%;
        height: auto;
        max-height: 460px;
        object-fit: cover;
        display: block;
    }

    /* ===================== SECTION TITLE ===================== */
    .wr-section-title h2 {
        font-size: 2.4rem;
        font-weight: 800;
        color: var(--dark-color);
        margin-bottom: 15px;
    }

    .wr-section-title .underline {
        width: 80px;
        height: 4px;
        background: linear-gradient(90deg, var(--primary-color), var(--accent-color));
        margin: 0 auto 20px;
        border-radius: 2px;
    }

    /* ===================== SERVICES CARDS ===================== */
    .wr-services-section {
        padding: 80px 0;
        background: var(--bg-light);
    }

    .wr-service-card {
        background: white;
        border-radius: 18px;
        padding: 32px;
        height: 100%;
        transition: all 0.3s ease;
        border: 2px solid transparent;
        box-shadow: 0 4px 15px rgba(0,0,0,0.06);
    }

    .wr-service-card:hover {
        transform: translateY(-10px);
        box-shadow: 0 20px 40px rgba(135,29,235,0.18);
        border-color: var(--primary-color);
    }

    .wr-service-icon {
        width: 72px;
        height: 72px;
        background: linear-gradient(135deg, var(--primary-color), var(--accent-color));
        border-radius: 18px;
        display: flex;
        align-items: center;
        justify-content: center;
        margin-bottom: 20px;
        font-size: 2rem;
        color: white;
        box-shadow: 0 8px 20px rgba(135,29,235,0.3);
    }

    .wr-service-card h4 {
        font-size: 1.25rem;
        font-weight: 700;
        margin-bottom: 12px;
        color: var(--dark-color);
    }

    .wr-service-card p {
        color: var(--light-gray);
        margin-bottom: 0;
        font-size: 0.93rem;
        line-height: 1.65;
    }

    /* ===================== BRANDS SECTION ===================== */
    .wr-brands-section {
        padding: 80px 0;
        background: white;
    }

    .wr-brand-card {
        background: white;
        border-radius: 14px;
        padding: 20px 16px;
        text-align: center;
        transition: all 0.3s ease;
        border: 2px solid #f0ebff;
        box-shadow: 0 2px 10px rgba(0,0,0,0.05);
    }

    .wr-brand-card:hover {
        border-color: var(--primary-color);
        transform: translateY(-5px);
        box-shadow: 0 10px 25px rgba(135,29,235,0.15);
    }

    .wr-brand-card i {
        font-size: 2rem;
        color: var(--primary-color);
        margin-bottom: 10px;
        display: block;
    }

    .wr-brand-card .wr-brand-name {
        font-weight: 700;
        font-size: 0.98rem;
        color: var(--dark-color);
        margin-bottom: 4px;
    }

    .wr-brand-card .wr-brand-type {
        font-size: 0.78rem;
        color: var(--light-gray);
    }

    /* ===================== WATCH TYPES ===================== */
    .wr-types-section {
        padding: 80px 0;
        background: var(--bg-light);
    }

    .wr-type-card {
        background: linear-gradient(135deg, #faf5ff 0%, #f3e8ff 100%);
        border-radius: 18px;
        padding: 28px;
        height: 100%;
        border: 2px solid #e9d5ff;
        transition: all 0.3s ease;
    }

    .wr-type-card:hover {
        border-color: var(--primary-color);
        transform: translateY(-6px);
        box-shadow: 0 12px 30px rgba(135,29,235,0.18);
    }

    .wr-type-card h5 {
        font-size: 1.15rem;
        font-weight: 700;
        color: var(--primary-color);
        margin-bottom: 15px;
        display: flex;
        align-items: center;
        gap: 10px;
    }

    .wr-type-card ul {
        list-style: none;
        padding: 0; margin: 0;
    }

    .wr-type-card ul li {
        padding: 7px 0;
        color: var(--light-gray);
        display: flex;
        align-items: flex-start;
        gap: 10px;
        font-size: 0.92rem;
    }

    .wr-type-card ul li::before {
        content: '✓';
        color: var(--primary-color);
        font-weight: bold;
        flex-shrink: 0;
    }

    /* ===================== LOCATION SECTION ===================== */
    .wr-location-section {
        padding: 80px 0;
        background: linear-gradient(135deg, var(--primary-color), var(--accent-color));
        color: white;
    }

    .wr-location-card {
        background: rgba(255,255,255,0.15);
        border-radius: 22px;
        padding: 44px;
        backdrop-filter: blur(12px);
        border: 2px solid rgba(255,255,255,0.25);
    }

    .wr-location-card h3 {
        font-size: 2rem;
        font-weight: 800;
        margin-bottom: 12px;
    }

    .wr-location-info {
        display: flex;
        flex-direction: column;
        gap: 18px;
        margin-bottom: 30px;
    }

    .wr-location-item {
        display: flex;
        align-items: center;
        gap: 15px;
        font-size: 1.05rem;
    }

    .wr-location-item i {
        font-size: 1.5rem;
        color: #fbbf24;
        flex-shrink: 0;
    }

    .wr-service-areas {
        background: rgba(255,255,255,0.12);
        border-radius: 16px;
        padding: 28px;
    }

    .wr-service-areas h4 {
        font-size: 1.4rem;
        font-weight: 700;
        margin-bottom: 18px;
    }

    .wr-areas-grid {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(140px, 1fr));
        gap: 12px;
    }

    .wr-area-badge {
        background: rgba(255,255,255,0.2);
        padding: 9px 14px;
        border-radius: 10px;
        text-align: center;
        font-weight: 600;
        font-size: 0.88rem;
    }

    /* ===================== WHY CHOOSE US ===================== */
    .wr-why-section {
        padding: 80px 0;
        background: white;
    }

    .wr-feature-box {
        background: var(--bg-light);
        border-radius: 18px;
        padding: 32px 24px;
        text-align: center;
        height: 100%;
        transition: all 0.3s ease;
        border: 2px solid transparent;
    }

    .wr-feature-box:hover {
        border-color: var(--primary-color);
        transform: translateY(-6px);
        box-shadow: 0 12px 28px rgba(135,29,235,0.15);
        background: white;
    }

    .wr-feature-box i {
        font-size: 2.8rem;
        color: var(--primary-color);
        margin-bottom: 18px;
        display: block;
    }

    .wr-feature-box h5 {
        font-size: 1.1rem;
        font-weight: 700;
        margin-bottom: 10px;
        color: var(--dark-color);
    }

    .wr-feature-box p {
        color: var(--light-gray);
        margin-bottom: 0;
        font-size: 0.91rem;
    }

    /* ===================== EMERGENCY BANNER ===================== */
    .wr-emergency-banner {
        background: linear-gradient(135deg, #dc2626, #b91c1c);
        color: white;
        padding: 50px 0;
        text-align: center;
        position: relative;
        overflow: hidden;
    }

    .wr-emergency-banner::before {
        content: '';
        position: absolute;
        top: 0; left: 0; right: 0; bottom: 0;
        background: url("data:image/svg+xml,%3Csvg width='60' height='60' viewBox='0 0 60 60' xmlns='http://www.w3.org/2000/svg'%3E%3Cg fill='none' fill-rule='evenodd'%3E%3Cg fill='%23ffffff' fill-opacity='0.04'%3E%3Cpath d='M36 34v-4h-2v4h-4v2h4v4h2v-4h4v-2h-4zm0-30V0h-2v4h-4v2h4v4h2V6h4V4h-4zM6 34v-4H4v4H0v2h4v4h2v-4h4v-2H6zM6 4V0H4v4H0v2h4v4h2V6h4V4H6z'/%3E%3C/g%3E%3C/g%3E%3C/svg%3E");
    }

    .wr-emergency-banner h3 {
        font-size: 2.2rem;
        font-weight: 800;
        margin-bottom: 10px;
        position: relative;
    }

    .wr-emergency-banner p {
        font-size: 1.2rem;
        margin-bottom: 20px;
        opacity: 0.9;
        position: relative;
    }

    .wr-emergency-phone {
        font-size: 2.4rem;
        font-weight: 800;
        color: #fbbf24;
        text-decoration: none;
        display: inline-flex;
        align-items: center;
        gap: 14px;
        position: relative;
        transition: color 0.2s;
    }

    .wr-emergency-phone:hover { color: white; }

    /* ===================== RESPONSIVE ===================== */
    @media (max-width: 991px) {
        .wr-hero-title { font-size: 2.4rem; }
    }

    @media (max-width: 767px) {
        .wr-hero-title { font-size: 1.9rem; }
        .wr-hero-subtitle { font-size: 1rem; }
        .wr-section-title h2 { font-size: 1.9rem; }
        .wr-emergency-phone { font-size: 1.7rem; }
        .wr-emergency-banner h3 { font-size: 1.7rem; }
        .d-flex.gap-3 { flex-direction: column; gap: 0.75rem !important; }
        .btn-lg { width: 100%; }
        .wr-location-card { padding: 28px 20px; }
    }

    @media (max-width: 480px) {
        .wr-hero-title { font-size: 1.6rem; }
    }
</style>
  </head>
  <body>
 <header>
   <nav class="navbar navbar-expand-lg navbar-dark bg-dark   top-0 start-0 w-100 py-3 font-ui">
    <div class="container">

      <!-- LOGO LEFT -->
      <a class="navbar-brand d-flex align-items-center" href="#">
        <img src="../images/jmk_logo.png" alt="Logo" height="55" class="me-2">
      </a>

      <!-- TOGGLER -->
      <button class="navbar-toggler border-0 shadow-none red-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mainNavbar">
        <span class="navbar-toggler-icon"></span>
      </button>

      <!-- LINKS RIGHT -->
      <div class="collapse navbar-collapse justify-content-end" id="mainNavbar">
        <ul class="navbar-nav gap-lg-4 text-center text-lg-start">

          <li class="nav-item">
            <a class="nav-link " href="{{ route('index') }}">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link " href="{{ route('about') }}">About</a>
          </li>
       
          <li class="nav-item">
            <a class="nav-link " href="{{ route('contact') }}">Contact</a>
          </li>

          <!-- DROPDOWN -->
    <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle active-nav" href="#" role="button" data-bs-toggle="dropdown">
              Services
            </a>
            <ul class="dropdown-menu dropdown-menu-dark dropdown-menu-end">
                <li><a class="dropdown-item" href="{{ route('Lock') }}">lock Repairing</a></li>
              <li><a class="dropdown-item" href="{{ route('Phone') }}">Phone Repairing</a></li>
              <li><a class="dropdown-item" href="{{ route('Watches') }}">Watch Repairing</a></li>
              <li><a class="dropdown-item" href="{{ route('leather') }}">Leather work's</a></li>
              <li><a class="dropdown-item" href="{{ route('Shoe') }}">Shoe Repairing</a></li>
              <li><a class="dropdown-item" href="{{ route('Key') }}">Key duplicating</a></li>
                            <li><a class="dropdown-item" href="{{ route('suitcase') }}">Suitcase repairing</a></li>
                            <li><a class="dropdown-item" href="{{ route('Access') }}">Access card repairing</a></li>
                            <li><a class="dropdown-item" href="{{ route('lostcar') }}">Lost car keys</a></li>
                            <li><a class="dropdown-item" href="{{ route('losthome') }}">Lost home kyes</a></li>
            </ul>
          </li>

        </ul>
      </div>
    </div>
  </nav>
  <div class="whatsapp-floating-btn">
 <a href="https://wa.me/+9710505090296" target="_blank" class="whatsapp-float-link">
    <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" fill="currentColor" class="bi bi-whatsapp" viewBox="0 0 16 16">
      <path d="M13.601 2.326A7.854 7.854 0 0 0 7.994 0C3.627 0 .068 3.558.064 7.926c0 1.399.366 2.76 1.057 3.965L0 16l4.204-1.102a7.933 7.933 0 0 0 3.79.965h.004c4.368 0 7.926-3.558 7.93-7.93A7.898 7.898 0 0 0 13.6 2.326zM7.994 14.521a6.573 6.573 0 0 1-3.356-.92l-.24-.144-2.494.654.666-2.433-.156-.251a6.56 6.56 0 0 1-1.007-3.505c0-3.626 2.957-6.584 6.591-6.584a6.56 6.56 0 0 1 4.66 1.931 6.557 6.557 0 0 1 1.928 4.66c-.004 3.639-2.961 6.592-6.592 6.592zm3.615-4.934c-.197-.099-1.17-.578-1.353-.646-.182-.065-.315-.099-.445.099-.133.197-.513.646-.627.775-.114.133-.232.148-.43.05-.197-.1-.836-.308-1.592-.985-.59-.525-.985-1.175-1.103-1.372-.114-.198-.011-.304.088-.403.087-.088.197-.232.296-.346.1-.114.133-.198.198-.33.065-.134.034-.248-.015-.347-.05-.099-.445-1.076-.612-1.47-.16-.389-.323-.335-.445-.34-.114-.007-.247-.007-.38-.007a.729.729 0 0 0-.529.247c-.182.198-.691.677-.691 1.654 0 .977.71 1.916.81 2.049.098.133 1.394 2.132 3.383 2.992.47.205.84.326 1.129.418.475.152.904.129 1.246.08.38-.058 1.171-.48 1.338-.943.164-.464.164-.86.114-.943-.049-.084-.182-.133-.38-.232z"/>
    </svg>
    <span class="whatsapp-text">Call Us</span>
    <span class="online-dot"></span>
  </a>
</div>
 </header>  
 <main>

<!-- ============================= HERO SECTION ============================= -->
<section class="wr-hero-section py-5 font-ui">
    <div class="container position-relative" style="z-index:1;">
        <div class="row align-items-center g-4">
            <!-- LEFT: Content -->
            <div class="col-lg-6 order-lg-1 order-2">
                <h1 class="wr-hero-title mb-4">
                    Watch Stopped? <span style="color: var(--primary-color);">We Fix It with Precision!</span>
                </h1>
                <p class="wr-hero-subtitle mb-4">
                    Professional watch repair and servicing for all timepiece brands — from luxury Swiss watches like Rolex and Omega to everyday Casio and Fossil. Battery replacement, strap fitting, glass replacement, and full internal servicing with expert care.
                </p>

                <div class="wr-hero-badges mb-4 d-flex flex-wrap gap-2">
                    <span class="badge p-3"><i class="bi bi-clock me-2"></i>Same Day Service</span>
                    <span class="badge p-3"><i class="bi bi-geo-alt me-2"></i>Al Karama, Dubai</span>
                    <span class="badge p-3"><i class="bi bi-stars me-2"></i>All Luxury Brands</span>
                    <span class="badge p-3"><i class="bi bi-shield-check me-2"></i>Warranty Included</span>
                </div>

                <div class="d-flex flex-wrap gap-3">
                    <a href="tel:+9710505090296" class="btn btn-danger btn-lg px-4 py-3">
                        <i class="bi bi-telephone-fill me-2"></i>Call Now
                    </a>
                    <a href="https://wa.me/+9710505090296" class="btn btn-success btn-lg px-4 py-3">
                        <i class="bi bi-whatsapp me-2"></i>WhatsApp Us
                    </a>
                </div>
            </div>

            <!-- RIGHT: Image -->
            <div class="col-lg-6 order-lg-2 order-1">
                <div class="wr-hero-image-wrapper">
                    <img src="../images/watchmain (1).webp" alt="Watch Repair Dubai">
                </div>
            </div>
        </div>
    </div>
</section>


<!-- ============================= SERVICES SECTION ============================= -->
<section class="wr-services-section font-ui">
    <div class="container">
        <div class="wr-section-title text-center mb-5">
            <h2>Our Watch Repair Services</h2>
            <div class="underline"></div>
            <p class="text-muted">Complete watch repair and servicing for all brands, movements, and damage types</p>
        </div>

        <div class="row g-4">
            <!-- Battery Replacement -->
            <div class="col-lg-4 col-md-6">
                <div class="wr-service-card">
                    <div class="wr-service-icon"><i class="bi bi-battery-charging"></i></div>
                    <h4>Battery Replacement</h4>
                    <p>Quick and reliable battery changes for all analog and digital watches. We use high-quality branded batteries matched exactly to your watch model. Service includes full functionality check, seal inspection, and water resistance testing. All battery types covered — button cells to specialized rechargeable units — with perfect timekeeping guaranteed after service.</p>
                </div>
            </div>

            <!-- Strap Replacement -->
            <div class="col-lg-4 col-md-6">
                <div class="wr-service-card">
                    <div class="wr-service-icon"><i class="bi bi-link-45deg"></i></div>
                    <h4>Strap Replacement</h4>
                    <p>Stylish and durable strap options fitted perfectly for your watch. Choose from genuine leather, stainless steel, silicone, rubber, or premium fabric straps in various colors and finishes. Professional metal bracelet, sports band, or elegant leather strap — all carefully selected for compatibility with your specific watch model and fitted with expert precision.</p>
                </div>
            </div>

            <!-- Glass Replacement -->
            <div class="col-lg-4 col-md-6">
                <div class="wr-service-card">
                    <div class="wr-service-icon"><i class="bi bi-circle"></i></div>
                    <h4>Glass / Crystal Replacement</h4>
                    <p>Cracked, scratched, or shattered watch glass replaced professionally with precision-cut sapphire crystal, mineral glass, or acrylic. We restore complete clarity and protect your watch dial while maintaining original aesthetic and water resistance. Includes cleaning of watch face and bezel, new glass installation, and proper sealing for a perfect fit.</p>
                </div>
            </div>

            <!-- Internal Servicing -->
            <div class="col-lg-4 col-md-6">
                <div class="wr-service-card">
                    <div class="wr-service-icon"><i class="bi bi-gear"></i></div>
                    <h4>Internal Servicing & Movement Repair</h4>
                    <p>Precision servicing of mechanical, automatic, and quartz movements by expert watchmakers. Complete disassembly, ultrasonic cleaning, lubrication, and reassembly of all internal components. We fix gears, springs, jewels, and balance wheels — diagnosing stopped watches, fast/slow running issues, and all movement problems with professional craftsmanship.</p>
                </div>
            </div>

            <!-- Crown & Pusher Repair -->
            <div class="col-lg-4 col-md-6">
                <div class="wr-service-card">
                    <div class="wr-service-icon"><i class="bi bi-arrows-move"></i></div>
                    <h4>Crown & Pusher Repair</h4>
                    <p>Repair and replacement of broken, loose, or missing watch crowns and pushers. We fix winding and setting crowns for all watch types — including screw-down crowns for water-resistant watches — and replace chrono pushers on sports and dress watches. Proper sealing restored after crown replacement to maintain water resistance.</p>
                </div>
            </div>

            <!-- Case & Bezel Polishing -->
            <div class="col-lg-4 col-md-6">
                <div class="wr-service-card">
                    <div class="wr-service-icon"><i class="bi bi-stars"></i></div>
                    <h4>Case Polishing & Restoration</h4>
                    <p>Professional case and bracelet polishing to remove scratches and restore the original shine of your watch. We work with stainless steel, titanium, gold-plated, and PVD-coated cases using precision polishing equipment. Bezel restoration, lug refinishing, and full case cleaning included — making your timepiece look brand new again.</p>
                </div>
            </div>
        </div>
    </div>
</section>


<!-- ============================= BRANDS SECTION ============================= -->
<section class="wr-brands-section font-ui">
    <div class="container">
        <div class="wr-section-title text-center mb-5">
            <h2>All Watch Brands We Service</h2>
            <div class="underline"></div>
            <p class="text-muted">From prestigious Swiss luxury to everyday fashion watches — every brand receives expert care</p>
        </div>

        <div class="row g-3">
            <div class="col-lg-2 col-md-3 col-6">
                <div class="wr-brand-card">
                    <i class="bi bi-watch"></i>
                    <div class="wr-brand-name">Rolex</div>
                    <div class="wr-brand-type">Swiss Luxury</div>
                </div>
            </div>
            <div class="col-lg-2 col-md-3 col-6">
                <div class="wr-brand-card">
                    <i class="bi bi-watch"></i>
                    <div class="wr-brand-name">Omega</div>
                    <div class="wr-brand-type">Swiss Luxury</div>
                </div>
            </div>
            <div class="col-lg-2 col-md-3 col-6">
                <div class="wr-brand-card">
                    <i class="bi bi-watch"></i>
                    <div class="wr-brand-name">TAG Heuer</div>
                    <div class="wr-brand-type">Swiss Luxury</div>
                </div>
            </div>
            <div class="col-lg-2 col-md-3 col-6">
                <div class="wr-brand-card">
                    <i class="bi bi-watch"></i>
                    <div class="wr-brand-name">Tissot</div>
                    <div class="wr-brand-type">Swiss Premium</div>
                </div>
            </div>
            <div class="col-lg-2 col-md-3 col-6">
                <div class="wr-brand-card">
                    <i class="bi bi-watch"></i>
                    <div class="wr-brand-name">Longines</div>
                    <div class="wr-brand-type">Swiss Premium</div>
                </div>
            </div>
            <div class="col-lg-2 col-md-3 col-6">
                <div class="wr-brand-card">
                    <i class="bi bi-watch"></i>
                    <div class="wr-brand-name">Rado</div>
                    <div class="wr-brand-type">Swiss Premium</div>
                </div>
            </div>
            <div class="col-lg-2 col-md-3 col-6">
                <div class="wr-brand-card">
                    <i class="bi bi-watch"></i>
                    <div class="wr-brand-name">Seiko</div>
                    <div class="wr-brand-type">Japanese Brand</div>
                </div>
            </div>
            <div class="col-lg-2 col-md-3 col-6">
                <div class="wr-brand-card">
                    <i class="bi bi-watch"></i>
                    <div class="wr-brand-name">Citizen</div>
                    <div class="wr-brand-type">Japanese Brand</div>
                </div>
            </div>
            <div class="col-lg-2 col-md-3 col-6">
                <div class="wr-brand-card">
                    <i class="bi bi-watch"></i>
                    <div class="wr-brand-name">Casio</div>
                    <div class="wr-brand-type">Japanese Brand</div>
                </div>
            </div>
            <div class="col-lg-2 col-md-3 col-6">
                <div class="wr-brand-card">
                    <i class="bi bi-watch"></i>
                    <div class="wr-brand-name">Fossil</div>
                    <div class="wr-brand-type">Fashion Brand</div>
                </div>
            </div>
            <div class="col-lg-2 col-md-3 col-6">
                <div class="wr-brand-card">
                    <i class="bi bi-watch"></i>
                    <div class="wr-brand-name">Emporio Armani</div>
                    <div class="wr-brand-type">Fashion Brand</div>
                </div>
            </div>
            <div class="col-lg-2 col-md-3 col-6">
                <div class="wr-brand-card">
                    <i class="bi bi-watch"></i>
                    <div class="wr-brand-name">& All Brands</div>
                    <div class="wr-brand-type">Every Watch</div>
                </div>
            </div>
        </div>
    </div>
</section>


<!-- ============================= WATCH TYPES SECTION ============================= -->
<section class="wr-types-section font-ui">
    <div class="container">
        <div class="wr-section-title text-center mb-5">
            <h2>All Watch Types We Repair</h2>
            <div class="underline"></div>
            <p class="text-muted">Mechanical, automatic, quartz, digital, or smartwatch — we service every type</p>
        </div>

        <div class="row g-4">
            <div class="col-lg-3 col-md-6">
                <div class="wr-type-card">
                    <h5><i class="bi bi-gear"></i> Mechanical Watches</h5>
                    <ul>
                        <li>Manual wind movements</li>
                        <li>Automatic / self-winding</li>
                        <li>Pocket watches</li>
                        <li>Vintage movements</li>
                        <li>Chronograph servicing</li>
                        <li>Tourbillon care</li>
                        <li>Full movement overhaul</li>
                    </ul>
                </div>
            </div>

            <div class="col-lg-3 col-md-6">
                <div class="wr-type-card">
                    <h5><i class="bi bi-battery-half"></i> Quartz Watches</h5>
                    <ul>
                        <li>Standard quartz analog</li>
                        <li>Solar-powered watches</li>
                        <li>Kinetic watches</li>
                        <li>Radio-controlled watches</li>
                        <li>Alarm watches</li>
                        <li>Multi-function quartz</li>
                        <li>Battery & coil repair</li>
                    </ul>
                </div>
            </div>

            <div class="col-lg-3 col-md-6">
                <div class="wr-type-card">
                    <h5><i class="bi bi-display"></i> Digital Watches</h5>
                    <ul>
                        <li>Casio G-Shock</li>
                        <li>Digital sports watches</li>
                        <li>Military digital watches</li>
                        <li>Dual-display watches</li>
                        <li>LCD replacement</li>
                        <li>Button repair</li>
                        <li>Water seal restoration</li>
                    </ul>
                </div>
            </div>

            <div class="col-lg-3 col-md-6">
                <div class="wr-type-card">
                    <h5><i class="bi bi-smartwatch"></i> Parts We Fix</h5>
                    <ul>
                        <li>Watch batteries</li>
                        <li>Leather & metal straps</li>
                        <li>Sapphire / mineral glass</li>
                        <li>Watch crowns & pushers</li>
                        <li>Case & bezel polishing</li>
                        <li>Hands & indices</li>
                        <li>Water resistance seals</li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="text-center mt-5">
            <p class="text-muted mb-2"><strong>All Movements Supported:</strong></p>
            <p class="text-muted">ETA • Sellita • Miyota • NH35 / NH36 • Valjoux • Unitas • Ronda • Harley • In-house Movements • And All Other Calibers!</p>
        </div>
    </div>
</section>


<!-- ============================= LOCATION SECTION ============================= -->
<section class="wr-location-section font-ui">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-10">
                <div class="wr-location-card">
                    <h3><i class="bi bi-geo-alt-fill me-2"></i>Based in Al Karama, Dubai</h3>
                    <p class="mb-4" style="opacity:0.9;">Your trusted watch repair specialist in the heart of Al Karama, serving all of Dubai</p>

                    <div class="wr-location-info">
                        <div class="wr-location-item">
                            <i class="bi bi-building"></i>
                            <span><strong>Location:</strong> Al Karama, Dubai, UAE</span>
                        </div>
                        <div class="wr-location-item">
                            <i class="bi bi-clock-fill"></i>
                            <span><strong>Working Hours:</strong> 24 Hours — 7 Days a Week</span>
                        </div>
                        <div class="wr-location-item">
                            <i class="bi bi-lightning-charge-fill"></i>
                            <span><strong>Service Time:</strong> Battery Changes in Minutes — Full Service Same Day</span>
                        </div>
                        <div class="wr-location-item">
                            <i class="bi bi-truck"></i>
                            <span><strong>Pickup & Delivery:</strong> Available Across Dubai</span>
                        </div>
                    </div>

                    <div class="wr-service-areas">
                        <h4>We Serve All Dubai Areas</h4>
                        <div class="wr-areas-grid">
                            <div class="wr-area-badge">Al Karama</div>
                            <div class="wr-area-badge">Bur Dubai</div>
                            <div class="wr-area-badge">Deira</div>
                            <div class="wr-area-badge">Downtown Dubai</div>
                            <div class="wr-area-badge">Dubai Marina</div>
                            <div class="wr-area-badge">JBR</div>
                            <div class="wr-area-badge">Business Bay</div>
                            <div class="wr-area-badge">JLT</div>
                            <div class="wr-area-badge">Dubai Mall</div>
                            <div class="wr-area-badge">Sheikh Zayed Rd</div>
                            <div class="wr-area-badge">Al Barsha</div>
                            <div class="wr-area-badge">Motor City</div>
                            <div class="wr-area-badge">Silicon Oasis</div>
                            <div class="wr-area-badge">International City</div>
                            <div class="wr-area-badge">Jumeirah</div>
                            <div class="wr-area-badge">Al Quoz</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<!-- ============================= WHY CHOOSE US ============================= -->
<section class="wr-why-section font-ui">
    <div class="container">
        <div class="wr-section-title text-center mb-5">
            <h2>Why Choose Our Watch Service?</h2>
            <div class="underline"></div>
        </div>

        <div class="row g-4">
            <div class="col-lg-3 col-md-6">
                <div class="wr-feature-box">
                    <i class="bi bi-person-check"></i>
                    <h5>Expert Watchmakers</h5>
                    <p>Trained and experienced watchmakers with specialist knowledge of mechanical, automatic, and quartz movements.</p>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="wr-feature-box">
                    <i class="bi bi-gem"></i>
                    <h5>Genuine Quality Parts</h5>
                    <p>We use genuine or OEM-grade parts — batteries, glass, straps, and movement parts — matched to your exact watch model.</p>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="wr-feature-box">
                    <i class="bi bi-lightning-charge"></i>
                    <h5>Fast Turnaround</h5>
                    <p>Battery changes in minutes, strap fitting on the spot, and most complex repairs completed same day.</p>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="wr-feature-box">
                    <i class="bi bi-shield-check"></i>
                    <h5>Luxury Brand Specialists</h5>
                    <p>We handle the most prestigious brands — Rolex, Omega, TAG Heuer — with the precision and care they deserve.</p>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="wr-feature-box">
                    <i class="bi bi-cash-coin"></i>
                    <h5>Transparent Pricing</h5>
                    <p>Clear upfront pricing before any work begins. No hidden costs — you always know exactly what you'll pay.</p>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="wr-feature-box">
                    <i class="bi bi-award"></i>
                    <h5>Repair Warranty</h5>
                    <p>Every repair comes with a service warranty. If the same issue returns, we fix it at no additional charge.</p>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="wr-feature-box">
                    <i class="bi bi-droplet"></i>
                    <h5>Water Resistance Testing</h5>
                    <p>Full water resistance testing and seal replacement after any service that opens the watch case.</p>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="wr-feature-box">
                    <i class="bi bi-star-fill"></i>
                    <h5>Trusted in Dubai</h5>
                    <p>Hundreds of satisfied customers trust us with their valued timepieces for professional, reliable watch care.</p>
                </div>
            </div>
        </div>
    </div>
</section>


<!-- ============================= EMERGENCY BANNER ============================= -->
<section class="wr-emergency-banner font-ui">
    <div class="container">
        <h3>Watch Stopped or Damaged?</h3>
        <p>Bring It In — We Restore It to Perfect Condition!</p>
        <a href="tel:+9710505090296" class="wr-emergency-phone">
            <i class="bi bi-telephone-fill"></i>
            +971 0505090296
        </a>
    </div>
</section>

 </main>
    <footer class="footer-section py-5 bg-white text-dark font-ui">
  <div class="container">
    <div class="row align-items-start">

      <!-- LEFT: Logo & Brand -->
      <div class="col-md-3 mb-4 mb-md-0 d-flex flex-row align-items-md-start align-items-center text-center text-md-start">
        <img src="../images/jmk_logo.png" alt="Logo" height="60" class="mb-2">
      </div>

      <!-- CENTER: Navigation Links -->
      <div class="col-md-4 mb-4 mb-md-0 text-center">
        <h6 class="fw-bold mb-3">Quick Links</h6>
        <ul class="list-unstyled">
          <li><a href="{{ route('index') }}" class="footer-link">Home</a></li>
          <li><a href="{{ route('about') }}" class="footer-link">About</a></li>
          <li><a href="{{ route('services') }}" class="footer-link">Services</a></li>
          <li><a href="{{ route('contact') }}" class="footer-link">Contact</a></li>
         
        </ul>
      </div>

      <!-- RIGHT: Contact & Social Icons -->
      <div class="col-md-5 d-flex flex-column align-items-md-end align-items-center">
        <h6 class="fw-bold mb-3">Contact Us</h6>
        <p class="mb-1 small">📍 JMk – Al Karama, Dubai, UAE</p>
        <p class="mb-1 small">Jumakhanzhob1@gmail.com</p>
        <p class="mb-3 small">0505090296 <br> 0505481819</p>

        <div class="d-flex gap-3">
       <a href="#" class="social-icon">
  <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor" viewBox="0 0 24 24">
    <path d="M13.5 9H15.5L16 6H13.5V4.5C13.5 3.7 13.8 3.2 15 3.2H16V1.1C15.4 1 14.7 0.9 14 0.9C11.8 0.9 10.3 2.2 10.3 4.6V6H8V9H10.3V24H13.5V9Z"/>
  </svg>
</a>

          <a href="#" class="social-icon">
            <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor" class="bi bi-twitter" viewBox="0 0 16 16">
              <path d="M5 15c6 0 9.3-5 9.3-9.3v-.4A6.7 6.7 0 0 0 16 3.1a6.6 6.6 0 0 1-1.9.5A3.3 3.3 0 0 0 15.5 2a6.6 6.6 0 0 1-2.1.8A3.3 3.3 0 0 0 7.9 5.7 9.4 9.4 0 0 1 1.1 1.1a3.3 3.3 0 0 0 1 4.4 3.2 3.2 0 0 1-1.5-.4v.1A3.3 3.3 0 0 0 3.3 9.1a3.3 3.3 0 0 1-.9.1 3.3 3.3 0 0 0 3.1 2.3A6.6 6.6 0 0 1 0 13.5a9.3 9.3 0 0 0 5 1.5"/>
            </svg>
          </a>
          <a href="#" class="social-icon">
            <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor" class="bi bi-instagram" viewBox="0 0 16 16">
              <path d="M8 4.5a3.5 3.5 0 1 0 0 7 3.5 3.5 0 0 0 0-7zM8 11a3 3 0 1 1 0-6 3 3 0 0 1 0 6z"/>
              <path d="M12.5 1h-9A2.5 2.5 0 0 0 1 3.5v9A2.5 2.5 0 0 0 3.5 15h9a2.5 2.5 0 0 0 2.5-2.5v-9A2.5 2.5 0 0 0 12.5 1zm1 11.5a1 1 0 0 1-1 1h-9a1 1 0 0 1-1-1v-9a1 1 0 0 1 1-1h9a1 1 0 0 1 1 1v9z"/>
            </svg>
          </a>
          <a href="#" class="social-icon">
            <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor" class="bi bi-youtube" viewBox="0 0 16 16">
              <path d="M8.051 1.999h-.102c-1.23.003-3.656.022-5.333.15-1.452.114-2.24 1.003-2.374 2.374C.07 5.17.051 7.595.051 8c0 .404.02 2.83.191 3.477.134 1.37.922 2.26 2.374 2.374 1.677.128 4.103.147 5.333.15h.102c1.23-.003 3.656-.022 5.333-.15 1.452-.114 2.24-1.003 2.374-2.374.17-.648.191-3.073.191-3.477s-.02-2.83-.191-3.477c-.134-1.37-.922-2.26-2.374-2.374-1.677-.128-4.103-.147-5.333-.15zM6.625 5.5l3.5 2.5-3.5 2.5v-5z"/>
            </svg>
          </a>

        </div>

      </div>

    </div>
  </div>
</footer>
 <script src="{{ asset('js/script.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
  </body>
</html>