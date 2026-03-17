<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Phone</title>
    <meta name="description" content="Professional phone repairing in Dubai. Screen replacement, battery change, charging port fix for all brands at JMK Repairs Al Karama.">
<meta name="robots" content="index, follow">
<link rel="canonical" href="https://jmkrepairs.com/phone-repairing">
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
    /* ===================== PHONE REPAIR SECTION VARIABLES ===================== */
    :root {
        --primary-color: #871deb;
        --secondary-color: #5803eb;
        --accent-color: #2629d3;
        --dark-color: #1f2937;
        --light-gray: #6b7280;
        --bg-light: #f9fafb;
    }

    /* ===================== HERO SECTION ===================== */
    .phone-hero-section {
        background: linear-gradient(135deg, #ede9fe 0%, #ddd6fe 50%, #c4b5fd 100%);
        min-height: 520px;
        padding: 60px 0;
        position: relative;
        overflow: hidden;
    }

    .phone-hero-section::before {
        content: '';
        position: absolute;
        top: -100px; right: -100px;
        width: 400px; height: 400px;
        background: radial-gradient(circle, rgba(135,29,235,0.15) 0%, transparent 70%);
        border-radius: 50%;
    }

    .phone-hero-section::after {
        content: '';
        position: absolute;
        bottom: -80px; left: -80px;
        width: 300px; height: 300px;
        background: radial-gradient(circle, rgba(38,41,211,0.12) 0%, transparent 70%);
        border-radius: 50%;
    }

    .phone-hero-title {
        font-size: 3rem;
        font-weight: 800;
        color: #1f2937;
        line-height: 1.2;
    }

    .phone-hero-subtitle {
        font-size: 1.15rem;
        color: #4b5563;
        line-height: 1.7;
    }

    .phone-hero-badges .badge {
        font-size: 0.92rem;
        font-weight: 600;
        border-radius: 50px;
        background: white !important;
        color: #1f2937 !important;
        box-shadow: 0 2px 8px rgba(0,0,0,0.1);
    }

    .phone-hero-image-wrapper {
        width: 100%;
        overflow: hidden;
        border-radius: 1.25rem;
        box-shadow: 0 20px 50px rgba(135,29,235,0.25);
    }

    .phone-hero-image-wrapper img {
        width: 100%;
        height: auto;
        max-height: 460px;
        object-fit: cover;
        display: block;
    }

    /* ===================== SECTION TITLE ===================== */
    .phone-section-title h2 {
        font-size: 2.4rem;
        font-weight: 800;
        color: var(--dark-color);
        margin-bottom: 15px;
    }

    .phone-section-title .underline {
        width: 80px;
        height: 4px;
        background: linear-gradient(90deg, var(--primary-color), var(--accent-color));
        margin: 0 auto 20px;
        border-radius: 2px;
    }

    /* ===================== BRAND HIGHLIGHT CARDS ===================== */
    .phone-brand-section {
        padding: 80px 0;
        background: white;
    }

    .phone-brand-card {
        background: linear-gradient(135deg, #faf5ff 0%, #f3e8ff 100%);
        border-radius: 20px;
        padding: 36px;
        height: 100%;
        border: 2px solid #e9d5ff;
        transition: all 0.3s ease;
    }

    .phone-brand-card:hover {
        border-color: var(--primary-color);
        transform: translateY(-8px);
        box-shadow: 0 16px 40px rgba(135,29,235,0.2);
    }

    .phone-brand-card .brand-icon {
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

    .phone-brand-card h4 {
        font-size: 1.4rem;
        font-weight: 700;
        margin-bottom: 14px;
        color: var(--dark-color);
    }

    .phone-brand-card p {
        color: var(--light-gray);
        font-size: 0.95rem;
        line-height: 1.65;
        margin-bottom: 0;
    }

    /* ===================== SERVICES CARDS ===================== */
    .phone-services-section {
        padding: 80px 0;
        background: var(--bg-light);
    }

    .phone-service-card {
        background: white;
        border-radius: 18px;
        padding: 32px;
        height: 100%;
        transition: all 0.3s ease;
        border: 2px solid transparent;
        box-shadow: 0 4px 15px rgba(0,0,0,0.06);
    }

    .phone-service-card:hover {
        transform: translateY(-10px);
        box-shadow: 0 20px 40px rgba(135,29,235,0.18);
        border-color: var(--primary-color);
    }

    .phone-service-icon {
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

    .phone-service-card h4 {
        font-size: 1.25rem;
        font-weight: 700;
        margin-bottom: 12px;
        color: var(--dark-color);
    }

    .phone-service-card p {
        color: var(--light-gray);
        margin-bottom: 0;
        font-size: 0.93rem;
        line-height: 1.65;
    }

    /* ===================== DEVICE TYPES ===================== */
    .phone-devices-section {
        padding: 80px 0;
        background: white;
    }

    .phone-device-card {
        background: linear-gradient(135deg, #faf5ff 0%, #f3e8ff 100%);
        border-radius: 18px;
        padding: 28px;
        height: 100%;
        border: 2px solid #e9d5ff;
        transition: all 0.3s ease;
    }

    .phone-device-card:hover {
        border-color: var(--primary-color);
        transform: translateY(-6px);
        box-shadow: 0 12px 30px rgba(135,29,235,0.18);
    }

    .phone-device-card h5 {
        font-size: 1.15rem;
        font-weight: 700;
        color: var(--primary-color);
        margin-bottom: 15px;
        display: flex;
        align-items: center;
        gap: 10px;
    }

    .phone-device-card ul {
        list-style: none;
        padding: 0; margin: 0;
    }

    .phone-device-card ul li {
        padding: 7px 0;
        color: var(--light-gray);
        display: flex;
        align-items: flex-start;
        gap: 10px;
        font-size: 0.92rem;
    }

    .phone-device-card ul li::before {
        content: '✓';
        color: var(--primary-color);
        font-weight: bold;
        flex-shrink: 0;
    }

    /* ===================== WHY CHOOSE US ===================== */
    .phone-why-section {
        padding: 80px 0;
        background: var(--bg-light);
    }

    .phone-feature-box {
        background: white;
        border-radius: 18px;
        padding: 32px 24px;
        text-align: center;
        height: 100%;
        transition: all 0.3s ease;
        border: 2px solid transparent;
    }

    .phone-feature-box:hover {
        border-color: var(--primary-color);
        transform: translateY(-6px);
        box-shadow: 0 12px 28px rgba(135,29,235,0.15);
    }

    .phone-feature-box i {
        font-size: 2.8rem;
        color: var(--primary-color);
        margin-bottom: 18px;
        display: block;
    }

    .phone-feature-box h5 {
        font-size: 1.1rem;
        font-weight: 700;
        margin-bottom: 10px;
        color: var(--dark-color);
    }

    .phone-feature-box p {
        color: var(--light-gray);
        margin-bottom: 0;
        font-size: 0.91rem;
    }

    /* ===================== LOCATION SECTION ===================== */
    .phone-location-section {
        padding: 80px 0;
        background: linear-gradient(135deg, var(--primary-color), var(--accent-color));
        color: white;
    }

    .phone-location-card {
        background: rgba(255,255,255,0.15);
        border-radius: 22px;
        padding: 44px;
        backdrop-filter: blur(12px);
        border: 2px solid rgba(255,255,255,0.25);
    }

    .phone-location-card h3 {
        font-size: 2rem;
        font-weight: 800;
        margin-bottom: 12px;
    }

    .phone-location-info {
        display: flex;
        flex-direction: column;
        gap: 18px;
        margin-bottom: 30px;
    }

    .phone-location-item {
        display: flex;
        align-items: center;
        gap: 15px;
        font-size: 1.05rem;
    }

    .phone-location-item i {
        font-size: 1.5rem;
        color: #fbbf24;
        flex-shrink: 0;
    }

    .phone-service-areas {
        background: rgba(255,255,255,0.12);
        border-radius: 16px;
        padding: 28px;
    }

    .phone-service-areas h4 {
        font-size: 1.4rem;
        font-weight: 700;
        margin-bottom: 18px;
    }

    .phone-areas-grid {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(140px, 1fr));
        gap: 12px;
    }

    .phone-area-badge {
        background: rgba(255,255,255,0.2);
        padding: 9px 14px;
        border-radius: 10px;
        text-align: center;
        font-weight: 600;
        font-size: 0.88rem;
    }

    /* ===================== EMERGENCY BANNER ===================== */
    .phone-emergency-banner {
        background: linear-gradient(135deg, #dc2626, #b91c1c);
        color: white;
        padding: 50px 0;
        text-align: center;
        position: relative;
        overflow: hidden;
    }

    .phone-emergency-banner::before {
        content: '';
        position: absolute;
        top: 0; left: 0; right: 0; bottom: 0;
        background: url("data:image/svg+xml,%3Csvg width='60' height='60' viewBox='0 0 60 60' xmlns='http://www.w3.org/2000/svg'%3E%3Cg fill='none' fill-rule='evenodd'%3E%3Cg fill='%23ffffff' fill-opacity='0.04'%3E%3Cpath d='M36 34v-4h-2v4h-4v2h4v4h2v-4h4v-2h-4zm0-30V0h-2v4h-4v2h4v4h2V6h4V4h-4zM6 34v-4H4v4H0v2h4v4h2v-4h4v-2H6zM6 4V0H4v4H0v2h4v4h2V6h4V4H6z'/%3E%3C/g%3E%3C/g%3E%3C/svg%3E");
    }

    .phone-emergency-banner h3 {
        font-size: 2.2rem;
        font-weight: 800;
        margin-bottom: 10px;
        position: relative;
    }

    .phone-emergency-banner p {
        font-size: 1.2rem;
        margin-bottom: 20px;
        opacity: 0.9;
        position: relative;
    }

    .phone-emergency-phone {
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

    .phone-emergency-phone:hover { color: white; }

    /* ===================== RESPONSIVE ===================== */
    @media (max-width: 991px) {
        .phone-hero-title { font-size: 2.4rem; }
    }

    @media (max-width: 767px) {
        .phone-hero-title { font-size: 1.9rem; }
        .phone-hero-subtitle { font-size: 1rem; }
        .phone-section-title h2 { font-size: 1.9rem; }
        .phone-emergency-phone { font-size: 1.7rem; }
        .phone-emergency-banner h3 { font-size: 1.7rem; }
        .d-flex.gap-3 { flex-direction: column; gap: 0.75rem !important; }
        .btn-lg { width: 100%; }
        .phone-location-card { padding: 28px 20px; }
        .phone-brand-card { padding: 24px; }
    }

    @media (max-width: 480px) {
        .phone-hero-title { font-size: 1.6rem; }
    }
</style>
</head>
  <body>
  <header>
      <nav class="navbar navbar-expand-lg navbar-dark bg-dark top-0 start-0 w-100 py-3 font-ui" aria-label="Main Navigation">
        <div class="container">

          <!-- LOGO LEFT -->
          <a class="navbar-brand d-flex align-items-center" href="{{ route('index') }}" aria-label="JMK Repairs Home">
            <img src="../images/jmk_logo.png" alt="JMK Repairs Dubai Logo" height="55" width="70" class="me-2">
          </a>

          <!-- TOGGLER -->
          <button class="navbar-toggler border-0 shadow-none red-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mainNavbar" aria-controls="mainNavbar" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>

          <!-- LINKS RIGHT -->
          <div class="collapse navbar-collapse justify-content-end" id="mainNavbar">
            <ul class="navbar-nav gap-lg-4 text-center text-lg-start">

              <li class="nav-item">
                <a class="nav-link" href="{{ route('index') }}">Home</a>
              </li>
                     <li class="nav-item dropdown">
            <a class="nav-link " href="{{ route('services') }}" role="button" data-bs-toggle="dropdown">
              Services
            </a>
            <ul class="dropdown-menu dropdown-menu-dark dropdown-menu-end">
                   <li><a class="dropdown-item" href="{{ route('suitcase') }}">Suitcase repairing</a></li>
                   <li><a class="dropdown-item" href="{{ route('Key') }}">Key duplicating</a></li>
                       <li><a class="dropdown-item" href="{{ route('lostcar') }}">Lost car keys</a></li>
                     <li><a class="dropdown-item" href="{{ route('Watches') }}">Watch Repairing</a></li>
              <li><a class="dropdown-item" href="{{ route('Lock') }}">lock Repairing</a></li>
              <li><a class="dropdown-item" href="{{ route('Phone') }}">Phone Repairing</a></li>
     <li><a class="dropdown-item" href="{{ route('Shoe') }}">Shoe Repairing</a></li>
              <li><a class="dropdown-item" href="{{ route('leather') }}">Leather work's</a></li>
              <li><a class="dropdown-item" href="{{ route('Access') }}">Access card repairing</a></li>
              <li><a class="dropdown-item" href="{{ route('losthome') }}">Lost home kyes</a></li>
            </ul>
          </li>
              <li class="nav-item">
                <a class="nav-link " href="{{ route('about') }}" aria-current="page">About</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{ route('contact') }}">Contact</a>
              </li>

              <!-- DROPDOWN -->
       

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
<section class="phone-hero-section py-5 font-ui">
    <div class="container position-relative" style="z-index:1;">
        <div class="row align-items-center g-4">
            <!-- LEFT: Content -->
            <div class="col-lg-6 order-lg-1 order-2">
                <h1 class="phone-hero-title mb-4">
                    Phone Broken? <span style="color: var(--primary-color);">We Fix It Fast!</span>
                </h1>
                <p class="phone-hero-subtitle mb-4">
                    Fast, reliable, and affordable phone repair services for all smartphone brands — iPhone, Samsung, and all Android devices. Certified technicians, genuine parts, and same-day repairs.
                </p>

                <div class="phone-hero-badges mb-4 d-flex flex-wrap gap-2">
                    <span class="badge p-3"><i class="bi bi-clock me-2"></i>Same Day Repair</span>
                    <span class="badge p-3"><i class="bi bi-geo-alt me-2"></i>Al Karama, Dubai</span>
                    <span class="badge p-3"><i class="bi bi-phone me-2"></i>All Brands</span>
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
                <div class="phone-hero-image-wrapper">
                    <img src="../images/iphone17 (1).webp" alt="Phone Repairing Dubai">
                </div>
            </div>
        </div>
    </div>
</section>


<!-- ============================= BRAND SPECIALIST SECTION ============================= -->
<section class="phone-brand-section font-ui">
    <div class="container">
        <div class="phone-section-title text-center mb-5">
            <h2>Brand Specialist Services</h2>
            <div class="underline"></div>
            <p class="text-muted">Expert technicians trained specifically for every major smartphone brand</p>
        </div>

        <div class="row g-4">
            <!-- iPhone -->
            <div class="col-lg-6">
                <div class="phone-brand-card">
                    <div class="brand-icon"><i class="bi bi-phone-fill"></i></div>
                    <h4>iPhone Repair Specialists</h4>
                    <p>Expert repair services for all iPhone models — from iPhone 16 Pro Max and iPhone 15 all the way back to iPhone 6. We handle screen replacements, battery swaps, camera repairs, Face ID fixes, charging port issues, and back glass replacement. We use genuine or high-quality aftermarket parts specifically designed for Apple devices, maintaining full iOS compatibility and Face ID / Touch ID functionality. All repairs come with a warranty.</p>
                </div>
            </div>

            <!-- Samsung -->
            <div class="col-lg-6">
                <div class="phone-brand-card">
                    <div class="brand-icon"><i class="bi bi-phone"></i></div>
                    <h4>Samsung Galaxy Repair Experts</h4>
                    <p>Professional repair for all Samsung Galaxy models — Galaxy S24 Ultra, S23 FE, Z Fold 5, Z Flip 5, A-series, and Note series. We repair AMOLED screens, replace batteries, fix charging issues, camera problems, and water damage. Our team is trained to handle curved displays, under-display fingerprint sensors, fast charging circuits, and S Pen functionality using OEM-quality parts.</p>
                </div>
            </div>
        </div>
    </div>
</section>


<!-- ============================= SERVICES SECTION ============================= -->
<section class="phone-services-section font-ui">
    <div class="container">
        <div class="phone-section-title text-center mb-5">
            <h2>Our Phone Repair Services</h2>
            <div class="underline"></div>
            <p class="text-muted">Complete smartphone repair solutions for all issues and all brands</p>
        </div>

        <div class="row g-4">
            <!-- Screen Replacement -->
            <div class="col-lg-4 col-md-6">
                <div class="phone-service-card">
                    <div class="phone-service-icon"><i class="bi bi-display"></i></div>
                    <h4>Screen Replacement</h4>
                    <p>Cracked or broken screen? We replace LCD and OLED displays with precision-fitted glass that restores full touch sensitivity and visual clarity. Testing includes touch response, display colors, brightness, and Face ID / fingerprint sensor functionality. All screen types supported — standard LCD to LTPO AMOLED.</p>
                </div>
            </div>

            <!-- Battery Replacement -->
            <div class="col-lg-4 col-md-6">
                <div class="phone-service-card">
                    <div class="phone-service-icon"><i class="bi bi-battery-charging"></i></div>
                    <h4>Battery Replacement</h4>
                    <p>Phone dying too fast or overheating? We replace it with a genuine or high-capacity battery matched to your exact model. After installation we calibrate the battery and run diagnostics to ensure optimal charging speed, accurate battery health reporting, and safe operation without swelling.</p>
                </div>
            </div>

            <!-- Software Fixes -->
            <div class="col-lg-4 col-md-6">
                <div class="phone-service-card">
                    <div class="phone-service-icon"><i class="bi bi-code-slash"></i></div>
                    <h4>Software Fixes & Updates</h4>
                    <p>Boot loops, frozen screens, app crashes, iOS/Android update failures? We diagnose and resolve all software issues without data loss. Services include OS reinstallation, firmware updates, virus removal, iCloud/Google account unlocking, and full system optimization.</p>
                </div>
            </div>

            <!-- Water Damage -->
            <div class="col-lg-4 col-md-6">
                <div class="phone-service-card">
                    <div class="phone-service-icon"><i class="bi bi-droplet"></i></div>
                    <h4>Water Damage Repair</h4>
                    <p>Dropped your phone in water? We use ultrasonic cleaning and drying techniques to remove corrosion and moisture before permanent damage sets in. Our process includes immediate disassembly, motherboard cleaning, micro-soldering if needed, and full function testing to save your device and data.</p>
                </div>
            </div>

            <!-- Camera Repair -->
            <div class="col-lg-4 col-md-6">
                <div class="phone-service-card">
                    <div class="phone-service-icon"><i class="bi bi-camera"></i></div>
                    <h4>Camera Repair</h4>
                    <p>Blurry photos, black camera screen, or broken lens glass? We repair and replace front and rear camera modules for all phone models. We fix autofocus issues, OIS (optical image stabilization) problems, and lens cracks — restoring full photo and video quality to original standards.</p>
                </div>
            </div>

            <!-- Charging Port Repair -->
            <div class="col-lg-4 col-md-6">
                <div class="phone-service-card">
                    <div class="phone-service-icon"><i class="bi bi-plug"></i></div>
                    <h4>Charging Port Repair</h4>
                    <p>Phone not charging or loose connector? We clean, repair, or replace charging ports for all USB-C, Lightning, and Micro-USB devices. We also fix wireless charging coils and fast charging circuit issues. Quick same-day turnaround to get your phone charging reliably again.</p>
                </div>
            </div>
        </div>
    </div>
</section>


<!-- ============================= DEVICE TYPES SECTION ============================= -->
<section class="phone-devices-section font-ui">
    <div class="container">
        <div class="phone-section-title text-center mb-5">
            <h2>All Brands & Devices Supported</h2>
            <div class="underline"></div>
            <p class="text-muted">From the latest flagships to older models — we repair every smartphone</p>
        </div>

        <div class="row g-4">
            <div class="col-lg-3 col-md-6">
                <div class="phone-device-card">
                    <h5><i class="bi bi-phone-fill"></i> Apple iPhone</h5>
                    <ul>
                        <li>iPhone 16 Pro Max</li>
                        <li>iPhone 15 / 15 Pro</li>
                        <li>iPhone 14 / 14 Pro</li>
                        <li>iPhone 13 / 12 / 11</li>
                        <li>iPhone X / XS / XR</li>
                        <li>iPhone 8 / 7 / 6</li>
                        <li>All older models</li>
                    </ul>
                </div>
            </div>

            <div class="col-lg-3 col-md-6">
                <div class="phone-device-card">
                    <h5><i class="bi bi-phone"></i> Samsung Galaxy</h5>
                    <ul>
                        <li>Galaxy S24 Ultra</li>
                        <li>Galaxy S23 / S22</li>
                        <li>Galaxy Z Fold 5</li>
                        <li>Galaxy Z Flip 5</li>
                        <li>Galaxy A-Series</li>
                        <li>Galaxy Note Series</li>
                        <li>All older models</li>
                    </ul>
                </div>
            </div>

            <div class="col-lg-3 col-md-6">
                <div class="phone-device-card">
                    <h5><i class="bi bi-grid-3x3-gap"></i> Android Brands</h5>
                    <ul>
                        <li>Google Pixel</li>
                        <li>OnePlus</li>
                        <li>Xiaomi / Redmi</li>
                        <li>OPPO / Realme</li>
                        <li>Vivo</li>
                        <li>Huawei / Honor</li>
                        <li>Motorola / Nokia</li>
                    </ul>
                </div>
            </div>

            <div class="col-lg-3 col-md-6">
                <div class="phone-device-card">
                    <h5><i class="bi bi-tools"></i> Repair Types</h5>
                    <ul>
                        <li>Screen replacement</li>
                        <li>Battery replacement</li>
                        <li>Water damage repair</li>
                        <li>Camera repair</li>
                        <li>Charging port repair</li>
                        <li>Software / firmware</li>
                        <li>Motherboard repair</li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="text-center mt-5">
            <p class="text-muted mb-2"><strong>All Brands Supported:</strong></p>
            <p class="text-muted">Apple • Samsung • Google • OnePlus • Xiaomi • OPPO • Vivo • Realme • Huawei • Honor • Motorola • Nokia • Sony • LG • HTC • And More!</p>
        </div>
    </div>
</section>


<!-- ============================= WHY CHOOSE US ============================= -->
<section class="phone-why-section font-ui">
    <div class="container">
        <div class="phone-section-title text-center mb-5">
            <h2>Why Choose Our Repair Service?</h2>
            <div class="underline"></div>
        </div>

        <div class="row g-4">
            <div class="col-lg-3 col-md-6">
                <div class="phone-feature-box">
                    <i class="bi bi-lightning-charge"></i>
                    <h5>Same Day Repair</h5>
                    <p>Most repairs completed within 1–2 hours. Walk in and walk out with a fully working phone the same day.</p>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="phone-feature-box">
                    <i class="bi bi-gem"></i>
                    <h5>Genuine Quality Parts</h5>
                    <p>We use genuine or OEM-grade parts to ensure your phone performs exactly like it did when new.</p>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="phone-feature-box">
                    <i class="bi bi-person-check"></i>
                    <h5>Certified Technicians</h5>
                    <p>Highly trained and experienced repair experts with specialist knowledge of all major phone brands.</p>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="phone-feature-box">
                    <i class="bi bi-shield-check"></i>
                    <h5>Warranty on All Repairs</h5>
                    <p>Every repair comes with a warranty. If the same issue returns, we fix it at no additional charge.</p>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="phone-feature-box">
                    <i class="bi bi-cash-coin"></i>
                    <h5>Transparent Pricing</h5>
                    <p>Clear upfront pricing with no hidden fees. You know the full cost before we start any repair work.</p>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="phone-feature-box">
                    <i class="bi bi-lock"></i>
                    <h5>Data Safe & Private</h5>
                    <p>Your personal data stays private and untouched. We repair only the hardware — never access your data.</p>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="phone-feature-box">
                    <i class="bi bi-star-fill"></i>
                    <h5>1000+ Happy Customers</h5>
                    <p>Trusted by thousands of customers across Dubai for fast, reliable, and affordable phone repairs.</p>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="phone-feature-box">
                    <i class="bi bi-tools"></i>
                    <h5>Advanced Equipment</h5>
                    <p>State-of-the-art tools including ultrasonic cleaners, micro-soldering stations, and diagnostic software.</p>
                </div>
            </div>
        </div>
    </div>
</section>


<!-- ============================= LOCATION SECTION ============================= -->
<section class="phone-location-section font-ui">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-10">
                <div class="phone-location-card">
                    <h3><i class="bi bi-geo-alt-fill me-2"></i>Based in Al Karama, Dubai</h3>
                    <p class="mb-4" style="opacity:0.9;">Your trusted phone repair centre in the heart of Al Karama, serving all of Dubai</p>

                    <div class="phone-location-info">
                        <div class="phone-location-item">
                            <i class="bi bi-building"></i>
                            <span><strong>Location:</strong> Al Karama, Dubai, UAE</span>
                        </div>
                        <div class="phone-location-item">
                            <i class="bi bi-clock-fill"></i>
                            <span><strong>Working Hours:</strong> 24 Hours — 7 Days a Week</span>
                        </div>
                        <div class="phone-location-item">
                            <i class="bi bi-lightning-charge-fill"></i>
                            <span><strong>Repair Time:</strong> Most Repairs Done in 1–2 Hours</span>
                        </div>
                        <div class="phone-location-item">
                            <i class="bi bi-truck"></i>
                            <span><strong>Pickup & Delivery:</strong> Available Across Dubai</span>
                        </div>
                    </div>

                    <div class="phone-service-areas">
                        <h4>We Serve All Dubai Areas</h4>
                        <div class="phone-areas-grid">
                            <div class="phone-area-badge">Al Karama</div>
                            <div class="phone-area-badge">Bur Dubai</div>
                            <div class="phone-area-badge">Deira</div>
                            <div class="phone-area-badge">Downtown Dubai</div>
                            <div class="phone-area-badge">Dubai Marina</div>
                            <div class="phone-area-badge">JBR</div>
                            <div class="phone-area-badge">Business Bay</div>
                            <div class="phone-area-badge">JLT</div>
                            <div class="phone-area-badge">Dubai Mall</div>
                            <div class="phone-area-badge">Sheikh Zayed Rd</div>
                            <div class="phone-area-badge">Al Barsha</div>
                            <div class="phone-area-badge">Motor City</div>
                            <div class="phone-area-badge">Silicon Oasis</div>
                            <div class="phone-area-badge">International City</div>
                            <div class="phone-area-badge">Jumeirah</div>
                            <div class="phone-area-badge">Al Quoz</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<!-- ============================= EMERGENCY BANNER ============================= -->
<section class="phone-emergency-banner font-ui">
    <div class="container">
        <h3>Phone Broken? Screen Cracked?</h3>
        <p>Don't Worry — We Fix It Fast!</p>
        <a href="tel:+9710505090296" class="phone-emergency-phone">
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
        <img src="{{ asset('images/jmk_logo.png') }}" alt="Logo" height="60" class="mb-2">
      </div>

      <!-- CENTER: Navigation Links -->
      <div class="col-md-4 mb-4 mb-md-0 text-center">
        <h4 class="fw-bold mb-3">Quick Links</h4>
        <ul class="list-unstyled">
          <li><a href="{{ route('index') }}" class="footer-link">Home</a></li>
          <li><a href="{{ route('about') }}" class="footer-link">About</a></li>
          <li><a href="{{ route('services') }}" class="footer-link">Services</a></li>
          <li><a href="{{ route('contact') }}" class="footer-link">Contact</a></li>
          <li><a href="{{ route('privacy') }}" class="footer-link">Privacy & Policy</a></li>
        </ul>
      </div>

      <!-- RIGHT: Contact & Social Icons -->
      <div class="col-md-5 d-flex flex-column align-items-md-end align-items-center">
      <h4 class="fw-bold mb-3">Contact us</h4>
        <p class="mb-1 small">📍 JMk – Al Karama, Dubai, UAE</p>
        <p class="mb-1 small">Jumakhanzhob1@gmail.com</p>
        <p class="mb-3 small">0505090296 <br> 0505481819</p>

        <div class="d-flex gap-3">
          <a href="#" class="social-icon" aria-label="JMK Repairs on Facebook">
            <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor" viewBox="0 0 24 24">
              <path d="M13.5 9H15.5L16 6H13.5V4.5C13.5 3.7 13.8 3.2 15 3.2H16V1.1C15.4 1 14.7 0.9 14 0.9C11.8 0.9 10.3 2.2 10.3 4.6V6H8V9H10.3V24H13.5V9Z"/>
            </svg>
          </a>
          <a href="#" class="social-icon" aria-label="JMK Repairs on Twitter">
            <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor" class="bi bi-twitter" viewBox="0 0 16 16">
              <path d="M5 15c6 0 9.3-5 9.3-9.3v-.4A6.7 6.7 0 0 0 16 3.1a6.6 6.6 0 0 1-1.9.5A3.3 3.3 0 0 0 15.5 2a6.6 6.6 0 0 1-2.1.8A3.3 3.3 0 0 0 7.9 5.7 9.4 9.4 0 0 1 1.1 1.1a3.3 3.3 0 0 0 1 4.4 3.2 3.2 0 0 1-1.5-.4v.1A3.3 3.3 0 0 0 3.3 9.1a3.3 3.3 0 0 1-.9.1 3.3 3.3 0 0 0 3.1 2.3A6.6 6.6 0 0 1 0 13.5a9.3 9.3 0 0 0 5 1.5"/>
            </svg>
          </a>
          <a href="#" class="social-icon" aria-label="JMK Repairs on Instagram">
            <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor" class="bi bi-instagram" viewBox="0 0 16 16">
              <path d="M8 4.5a3.5 3.5 0 1 0 0 7 3.5 3.5 0 0 0 0-7zM8 11a3 3 0 1 1 0-6 3 3 0 0 1 0 6z"/>
              <path d="M12.5 1h-9A2.5 2.5 0 0 0 1 3.5v9A2.5 2.5 0 0 0 3.5 15h9a2.5 2.5 0 0 0 2.5-2.5v-9A2.5 2.5 0 0 0 12.5 1zm1 11.5a1 1 0 0 1-1 1h-9a1 1 0 0 1-1-1v-9a1 1 0 0 1 1-1h9a1 1 0 0 1 1 1v9z"/>
            </svg>
          </a>
          <a href="#" class="social-icon" aria-label="JMK Repairs on Youtube">
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