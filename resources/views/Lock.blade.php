<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>lock repair</title>
    <meta name="description" content="Professional lock repairing services in Dubai. Broken lock? We fix all types of locks quickly and affordably at JMK Repairs Al Karama.">
<meta name="robots" content="index, follow">
<link rel="canonical" href="https://jmkrepairs.com/lock-repairing">
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
        * { margin: 0; padding: 0; box-sizing: border-box; }

        :root {
            --primary-color: #871deb;
            --secondary-color: #5803eb;
            --accent-color: #2629d3;
            --dark-color: #1f2937;
            --light-gray: #6b7280;
            --bg-light: #f9fafb;
        }

        body {
            font-family: 'DM Sans', sans-serif;
            color: var(--dark-color);
            line-height: 1.6;
        }

        h1, h2, h3, h4, h5 {
            font-family: 'Outfit', sans-serif;
        }

        /* ===================== HERO SECTION ===================== */
        .hero-section {
            background: linear-gradient(135deg, #ede9fe 0%, #ddd6fe 50%, #c4b5fd 100%);
            min-height: 520px;
            padding: 60px 0;
            position: relative;
            overflow: hidden;
        }

        .hero-section::before {
            content: '';
            position: absolute;
            top: -100px;
            right: -100px;
            width: 400px;
            height: 400px;
            background: radial-gradient(circle, rgba(135,29,235,0.15) 0%, transparent 70%);
            border-radius: 50%;
        }

        .hero-section::after {
            content: '';
            position: absolute;
            bottom: -80px;
            left: -80px;
            width: 300px;
            height: 300px;
            background: radial-gradient(circle, rgba(38,41,211,0.12) 0%, transparent 70%);
            border-radius: 50%;
        }

        .hero-title {
            font-size: 3rem;
            font-weight: 800;
            color: #1f2937;
            line-height: 1.2;
        }

        .hero-subtitle {
            font-size: 1.15rem;
            color: #4b5563;
            line-height: 1.7;
        }

        .hero-badges .badge {
            font-size: 0.92rem;
            font-weight: 600;
            border-radius: 50px;
            background: white !important;
            color: #1f2937 !important;
            box-shadow: 0 2px 8px rgba(0,0,0,0.1);
        }

        .hero-image-wrapper {
            width: 100%;
            overflow: hidden;
            border-radius: 1.25rem;
            box-shadow: 0 20px 50px rgba(135,29,235,0.25);
        }

        .hero-image-wrapper img {
            width: 100%;
            height: auto;
            max-height: 460px;
            object-fit: cover;
            display: block;
        }

        /* ===================== SECTION STYLES ===================== */
        .section-title h2 {
            font-size: 2.4rem;
            font-weight: 800;
            color: var(--dark-color);
            margin-bottom: 15px;
        }

        .section-title .underline {
            width: 80px;
            height: 4px;
            background: linear-gradient(90deg, var(--primary-color), var(--accent-color));
            margin: 0 auto 20px;
            border-radius: 2px;
        }

        /* ===================== SERVICES CARDS ===================== */
        .services-section {
            padding: 80px 0;
            background: var(--bg-light);
        }

        .service-card {
            background: white;
            border-radius: 18px;
            padding: 32px;
            height: 100%;
            transition: all 0.3s ease;
            border: 2px solid transparent;
            box-shadow: 0 4px 15px rgba(0,0,0,0.06);
        }

        .service-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 20px 40px rgba(135,29,235,0.18);
            border-color: var(--primary-color);
        }

        .service-icon {
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

        .service-card h4 {
            font-size: 1.25rem;
            font-weight: 700;
            margin-bottom: 12px;
            color: var(--dark-color);
        }

        .service-card p {
            color: var(--light-gray);
            margin-bottom: 0;
            font-size: 0.95rem;
            line-height: 1.65;
        }

        /* ===================== LOCK TYPES ===================== */
        .lock-types-section {
            padding: 80px 0;
            background: white;
        }

        .lock-type-card {
            background: linear-gradient(135deg, #faf5ff 0%, #f3e8ff 100%);
            border-radius: 18px;
            padding: 28px;
            height: 100%;
            border: 2px solid #e9d5ff;
            transition: all 0.3s ease;
        }

        .lock-type-card:hover {
            border-color: var(--primary-color);
            transform: translateY(-6px);
            box-shadow: 0 12px 30px rgba(135,29,235,0.18);
        }

        .lock-type-card h5 {
            font-size: 1.15rem;
            font-weight: 700;
            color: var(--primary-color);
            margin-bottom: 15px;
            display: flex;
            align-items: center;
            gap: 10px;
        }

        .lock-type-card ul {
            list-style: none;
            padding: 0;
            margin: 0;
        }

        .lock-type-card ul li {
            padding: 7px 0;
            color: var(--light-gray);
            display: flex;
            align-items: flex-start;
            gap: 10px;
            font-size: 0.93rem;
        }

        .lock-type-card ul li::before {
            content: '✓';
            color: var(--primary-color);
            font-weight: bold;
            flex-shrink: 0;
        }

        /* ===================== BRANDS SECTION ===================== */
        .brands-section {
            padding: 80px 0;
            background: var(--bg-light);
        }

        .brand-card {
            background: white;
            border-radius: 14px;
            padding: 20px 16px;
            text-align: center;
            transition: all 0.3s ease;
            border: 2px solid #f0ebff;
            box-shadow: 0 2px 10px rgba(0,0,0,0.05);
        }

        .brand-card:hover {
            border-color: var(--primary-color);
            transform: translateY(-5px);
            box-shadow: 0 10px 25px rgba(135,29,235,0.15);
        }

        .brand-card i {
            font-size: 2rem;
            color: var(--primary-color);
            margin-bottom: 10px;
            display: block;
        }

        .brand-card .brand-name {
            font-weight: 700;
            font-size: 1rem;
            color: var(--dark-color);
            margin-bottom: 4px;
        }

        .brand-card .brand-type {
            font-size: 0.78rem;
            color: var(--light-gray);
        }

        /* ===================== LOCATION SECTION ===================== */
        .location-section {
            padding: 80px 0;
            background: linear-gradient(135deg, var(--primary-color), var(--accent-color));
            color: white;
        }

        .location-card {
            background: rgba(255,255,255,0.15);
            border-radius: 22px;
            padding: 44px;
            backdrop-filter: blur(12px);
            border: 2px solid rgba(255,255,255,0.25);
        }

        .location-card h3 {
            font-size: 2rem;
            font-weight: 800;
            margin-bottom: 12px;
        }

        .location-info {
            display: flex;
            flex-direction: column;
            gap: 18px;
            margin-bottom: 30px;
        }

        .location-item {
            display: flex;
            align-items: center;
            gap: 15px;
            font-size: 1.05rem;
        }

        .location-item i {
            font-size: 1.5rem;
            color: #fbbf24;
            flex-shrink: 0;
        }

        .service-areas {
            background: rgba(255,255,255,0.12);
            border-radius: 16px;
            padding: 28px;
        }

        .service-areas h4 {
            font-size: 1.4rem;
            font-weight: 700;
            margin-bottom: 18px;
        }

        .areas-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(140px, 1fr));
            gap: 12px;
        }

        .area-badge {
            background: rgba(255,255,255,0.2);
            padding: 9px 14px;
            border-radius: 10px;
            text-align: center;
            font-weight: 600;
            font-size: 0.88rem;
        }

        /* ===================== WHY CHOOSE US ===================== */
        .why-choose-section {
            padding: 80px 0;
            background: white;
        }

        .feature-box {
            background: var(--bg-light);
            border-radius: 18px;
            padding: 32px 24px;
            text-align: center;
            height: 100%;
            transition: all 0.3s ease;
            border: 2px solid transparent;
        }

        .feature-box:hover {
            border-color: var(--primary-color);
            transform: translateY(-6px);
            box-shadow: 0 12px 28px rgba(135,29,235,0.15);
            background: white;
        }

        .feature-box i {
            font-size: 2.8rem;
            color: var(--primary-color);
            margin-bottom: 18px;
            display: block;
        }

        .feature-box h5 {
            font-size: 1.15rem;
            font-weight: 700;
            margin-bottom: 12px;
            color: var(--dark-color);
        }

        .feature-box p {
            color: var(--light-gray);
            margin-bottom: 0;
            font-size: 0.92rem;
        }

        /* ===================== EMERGENCY BANNER ===================== */
        .emergency-banner {
            background: linear-gradient(135deg, #dc2626, #b91c1c);
            color: white;
            padding: 50px 0;
            text-align: center;
            position: relative;
            overflow: hidden;
        }

        .emergency-banner::before {
            content: '';
            position: absolute;
            top: 0; left: 0; right: 0; bottom: 0;
            background: url("data:image/svg+xml,%3Csvg width='60' height='60' viewBox='0 0 60 60' xmlns='http://www.w3.org/2000/svg'%3E%3Cg fill='none' fill-rule='evenodd'%3E%3Cg fill='%23ffffff' fill-opacity='0.04'%3E%3Cpath d='M36 34v-4h-2v4h-4v2h4v4h2v-4h4v-2h-4zm0-30V0h-2v4h-4v2h4v4h2V6h4V4h-4zM6 34v-4H4v4H0v2h4v4h2v-4h4v-2H6zM6 4V0H4v4H0v2h4v4h2V6h4V4H6z'/%3E%3C/g%3E%3C/g%3E%3C/svg%3E");
        }

        .emergency-banner h3 {
            font-size: 2.2rem;
            font-weight: 800;
            margin-bottom: 10px;
            position: relative;
        }

        .emergency-banner p {
            font-size: 1.2rem;
            margin-bottom: 20px;
            opacity: 0.9;
            position: relative;
        }

        .emergency-phone {
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

        .emergency-phone:hover { color: white; }

        /* ===================== RESPONSIVE ===================== */
        @media (max-width: 991px) {
            .hero-title { font-size: 2.4rem; }
        }

        @media (max-width: 767px) {
            .hero-title { font-size: 1.9rem; }
            .hero-subtitle { font-size: 1rem; }
            .section-title h2 { font-size: 1.9rem; }
            .emergency-phone { font-size: 1.7rem; }
            .emergency-banner h3 { font-size: 1.7rem; }
            .d-flex.gap-3 { flex-direction: column; gap: 0.75rem !important; }
            .btn-lg { width: 100%; }
            .location-card { padding: 28px 20px; }
        }

        @media (max-width: 480px) {
            .hero-title { font-size: 1.6rem; }
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
<section class="hero-section py-5">
    <div class="container position-relative" style="z-index:1;">
        <div class="row align-items-center g-4">
            <!-- LEFT: Content -->
            <div class="col-lg-6 order-lg-1 order-2">
                <h1 class="hero-title mb-4">
                    Expert Lock Repair? <span style="color: var(--primary-color);">We're Here 24/7!</span>
                </h1>
                <p class="hero-subtitle mb-4">
                    Professional Lock Repair & Installation Services — Fast, Reliable & Available Anytime. 
                    We handle all mechanical, digital, smart &amp; biometric lock systems with expert precision.
                </p>

                <div class="hero-badges mb-4 d-flex flex-wrap gap-2">
                    <span class="badge p-3"><i class="bi bi-clock me-2"></i>24/7 Available</span>
                    <span class="badge p-3"><i class="bi bi-geo-alt me-2"></i>All Dubai Areas</span>
                    <span class="badge p-3"><i class="bi bi-lightning me-2"></i>Fast Response</span>
                    <span class="badge p-3"><i class="bi bi-shield-check me-2"></i>All Lock Brands</span>
                </div>

                <div class="d-flex flex-wrap gap-3">
                    <a href="tel:+9710505090296" class="btn btn-danger btn-lg px-4 py-3">
                        <i class="bi bi-telephone-fill me-2"></i>Emergency Call Now
                    </a>
                    <a href="https://wa.me/+9710505090296" class="btn btn-success btn-lg px-4 py-3">
                        <i class="bi bi-whatsapp me-2"></i>WhatsApp Us
                    </a>
                </div>
            </div>

            <!-- RIGHT: Image -->
            <div class="col-lg-6 order-lg-2 order-1">
                <div class="hero-image-wrapper">
                    <img src="https://images.unsplash.com/photo-1558618666-fcd25c85cd64?w=800&h=600&fit=crop" 
                         alt="Lock Repair Services Dubai">
                </div>
            </div>
        </div>
    </div>
</section>


<!-- ============================= SERVICES SECTION ============================= -->
<section class="services-section font-ui">
    <div class="container">
        <div class="section-title text-center mb-5">
            <h2>Our Lock Repair & Installation Services</h2>
            <div class="underline"></div>
            <p class="text-muted">Complete locksmith solutions for homes, offices, and commercial properties</p>
        </div>

        <div class="row g-4">
            <!-- Door Lock Repair -->
            <div class="col-lg-4 col-md-6">
                <div class="service-card">
                    <div class="service-icon"><i class="bi bi-door-open"></i></div>
                    <h4>Door Lock Repair</h4>
                    <p>Fix jammed, broken, or misaligned locks efficiently. We repair cylinder locks, mortise locks, deadbolts, padlocks, and cam locks. We handle mechanical failures, key breakage extraction, lock cylinder replacement, and realignment issues for residential, commercial &amp; industrial locks.</p>
                </div>
            </div>

            <!-- New Lock Installation -->
            <div class="col-lg-4 col-md-6">
                <div class="service-card">
                    <div class="service-icon"><i class="bi bi-tools"></i></div>
                    <h4>New Lock Installation</h4>
                    <p>Secure installation of modern and high-security locks including deadbolts, smart locks, digital keypad locks, biometric fingerprint locks, and multi-point locking systems. Covers main doors, bedroom, bathroom, office &amp; commercial premises with proper alignment and testing.</p>
                </div>
            </div>

            <!-- Lock Replacement -->
            <div class="col-lg-4 col-md-6">
                <div class="service-card">
                    <div class="service-icon"><i class="bi bi-arrow-repeat"></i></div>
                    <h4>Lock Replacement</h4>
                    <p>Upgrade old or damaged locks for better protection. We handle complete lock replacement for mechanical, electronic, mortise, cylindrical, and rim locks. Compatible with all door materials: wood, metal, UPVC, and glass doors — from basic privacy locks to Grade 1 high-security deadbolts.</p>
                </div>
            </div>

            <!-- Digital & Smart Lock Installation -->
            <div class="col-lg-4 col-md-6">
                <div class="service-card">
                    <div class="service-icon"><i class="bi bi-cpu"></i></div>
                    <h4>Digital & Smart Lock Installation</h4>
                    <p>Professional installation of keypad locks, fingerprint locks, RFID card locks, Bluetooth &amp; Wi-Fi smart locks. Includes mobile app setup, user code programming, fingerprint enrollment, remote access configuration &amp; home automation integration. Full training provided.</p>
                </div>
            </div>

            <!-- Biometric Lock Systems -->
            <div class="col-lg-4 col-md-6">
                <div class="service-card">
                    <div class="service-icon"><i class="bi bi-fingerprint"></i></div>
                    <h4>Biometric Lock Systems</h4>
                    <p>Installation and servicing of advanced biometric access control systems including fingerprint readers, retina scanners, face recognition locks, and multi-factor authentication systems. Ideal for offices, server rooms, and high-security residential premises.</p>
                </div>
            </div>

            <!-- Security Upgrades -->
            <div class="col-lg-4 col-md-6">
                <div class="service-card">
                    <div class="service-icon"><i class="bi bi-shield-lock"></i></div>
                    <h4>Security Upgrades & Advanced Systems</h4>
                    <p>Anti-theft, bump-proof, and drill-resistant lock upgrades. We install multi-point locking systems, panic bars, electromagnetic locks, and master key systems for commercial buildings. Security assessment and vulnerability analysis included for complete protection.</p>
                </div>
            </div>
        </div>
    </div>
</section>


<!-- ============================= LOCK TYPES SECTION ============================= -->
<section class="lock-types-section font-ui">
    <div class="container">
        <div class="section-title text-center mb-5">
            <h2>We Handle All Types of Locks</h2>
            <div class="underline"></div>
            <p class="text-muted">From basic mechanical locks to advanced smart systems — we repair, replace &amp; install everything</p>
        </div>

        <div class="row g-4">
            <div class="col-lg-3 col-md-6">
                <div class="lock-type-card">
                    <h5><i class="bi bi-key-fill"></i> Mechanical Locks</h5>
                    <ul>
                        <li>Pin tumbler locks</li>
                        <li>Mortise locks</li>
                        <li>Deadbolt locks</li>
                        <li>Padlocks</li>
                        <li>Rim locks</li>
                        <li>Cam locks</li>
                        <li>Euro cylinder locks</li>
                    </ul>
                </div>
            </div>

            <div class="col-lg-3 col-md-6">
                <div class="lock-type-card">
                    <h5><i class="bi bi-display"></i> Digital / Keypad Locks</h5>
                    <ul>
                        <li>Numeric keypad locks</li>
                        <li>Touch screen locks</li>
                        <li>RFID card access locks</li>
                        <li>Electronic deadbolts</li>
                        <li>Code + key combo locks</li>
                        <li>Battery-operated locks</li>
                        <li>Hotel-style card locks</li>
                    </ul>
                </div>
            </div>

            <div class="col-lg-3 col-md-6">
                <div class="lock-type-card">
                    <h5><i class="bi bi-phone"></i> Smart Locks</h5>
                    <ul>
                        <li>Bluetooth smart locks</li>
                        <li>Wi-Fi connected locks</li>
                        <li>App-controlled locks</li>
                        <li>Remote access locks</li>
                        <li>Alexa / Google Home locks</li>
                        <li>Auto-lock systems</li>
                        <li>Access log tracking</li>
                    </ul>
                </div>
            </div>

            <div class="col-lg-3 col-md-6">
                <div class="lock-type-card">
                    <h5><i class="bi bi-fingerprint"></i> Biometric Locks</h5>
                    <ul>
                        <li>Fingerprint locks</li>
                        <li>Face recognition locks</li>
                        <li>Retina scan locks</li>
                        <li>Multi-factor auth locks</li>
                        <li>High-capacity user storage</li>
                        <li>Commercial access control</li>
                        <li>Tamper alarm locks</li>
                    </ul>
                </div>
            </div>
        </div>

        <!-- All Brands Text -->
        <div class="text-center mt-5">
            <p class="text-muted mb-2"><strong>All Lock Types Supported:</strong></p>
            <p class="text-muted">Cylindrical Locks • Mortise Locks • Multi-Point Locks • Rim Locks • Padlocks • Electromagnetic Locks • Panic Bars • Master Key Systems • Restricted Keyway Systems • Access Control Infrastructure</p>
        </div>
    </div>
</section>


<!-- ============================= BRANDS SECTION ============================= -->
<section class="brands-section font-ui">
    <div class="container">
        <div class="section-title text-center mb-5">
            <h2>All Major Lock Brands Supported</h2>
            <div class="underline"></div>
            <p class="text-muted">We service and install locks from all leading international and local manufacturers</p>
        </div>

        <div class="row g-3">
            <div class="col-lg-2 col-md-3 col-6">
                <div class="brand-card">
                    <i class="bi bi-shield-fill-check"></i>
                    <div class="brand-name">Yale</div>
                    <div class="brand-type">Smart & Mechanical</div>
                </div>
            </div>
            <div class="col-lg-2 col-md-3 col-6">
                <div class="brand-card">
                    <i class="bi bi-shield-fill-check"></i>
                    <div class="brand-name">Schlage</div>
                    <div class="brand-type">High-Security</div>
                </div>
            </div>
            <div class="col-lg-2 col-md-3 col-6">
                <div class="brand-card">
                    <i class="bi bi-shield-fill-check"></i>
                    <div class="brand-name">Kwikset</div>
                    <div class="brand-type">Residential</div>
                </div>
            </div>
            <div class="col-lg-2 col-md-3 col-6">
                <div class="brand-card">
                    <i class="bi bi-shield-fill-check"></i>
                    <div class="brand-name">Godrej</div>
                    <div class="brand-type">Digital Locks</div>
                </div>
            </div>
            <div class="col-lg-2 col-md-3 col-6">
                <div class="brand-card">
                    <i class="bi bi-shield-fill-check"></i>
                    <div class="brand-name">Harrison</div>
                    <div class="brand-type">Mechanical</div>
                </div>
            </div>
            <div class="col-lg-2 col-md-3 col-6">
                <div class="brand-card">
                    <i class="bi bi-shield-fill-check"></i>
                    <div class="brand-name">Dorset</div>
                    <div class="brand-type">Architectural</div>
                </div>
            </div>
            <div class="col-lg-2 col-md-3 col-6">
                <div class="brand-card">
                    <i class="bi bi-shield-fill-check"></i>
                    <div class="brand-name">Europa</div>
                    <div class="brand-type">Commercial</div>
                </div>
            </div>
            <div class="col-lg-2 col-md-3 col-6">
                <div class="brand-card">
                    <i class="bi bi-shield-fill-check"></i>
                    <div class="brand-name">August</div>
                    <div class="brand-type">Smart Locks</div>
                </div>
            </div>
            <div class="col-lg-2 col-md-3 col-6">
                <div class="brand-card">
                    <i class="bi bi-shield-fill-check"></i>
                    <div class="brand-name">Samsung</div>
                    <div class="brand-type">Digital Locks</div>
                </div>
            </div>
            <div class="col-lg-2 col-md-3 col-6">
                <div class="brand-card">
                    <i class="bi bi-shield-fill-check"></i>
                    <div class="brand-name">Mul-T-Lock</div>
                    <div class="brand-type">High-Security</div>
                </div>
            </div>
            <div class="col-lg-2 col-md-3 col-6">
                <div class="brand-card">
                    <i class="bi bi-shield-fill-check"></i>
                    <div class="brand-name">Medeco</div>
                    <div class="brand-type">High-Security</div>
                </div>
            </div>
            <div class="col-lg-2 col-md-3 col-6">
                <div class="brand-card">
                    <i class="bi bi-shield-fill-check"></i>
                    <div class="brand-name">ASSA ABLOY</div>
                    <div class="brand-type">Commercial</div>
                </div>
            </div>
            <div class="col-lg-2 col-md-3 col-6">
                <div class="brand-card">
                    <i class="bi bi-shield-fill-check"></i>
                    <div class="brand-name">Abloy</div>
                    <div class="brand-type">Disc Detainer</div>
                </div>
            </div>
            <div class="col-lg-2 col-md-3 col-6">
                <div class="brand-card">
                    <i class="bi bi-shield-fill-check"></i>
                    <div class="brand-name">Dorma</div>
                    <div class="brand-type">Door Systems</div>
                </div>
            </div>
            <div class="col-lg-2 col-md-3 col-6">
                <div class="brand-card">
                    <i class="bi bi-shield-fill-check"></i>
                    <div class="brand-name">Norton</div>
                    <div class="brand-type">Commercial</div>
                </div>
            </div>
            <div class="col-lg-2 col-md-3 col-6">
                <div class="brand-card">
                    <i class="bi bi-shield-fill-check"></i>
                    <div class="brand-name">& More</div>
                    <div class="brand-type">All Brands</div>
                </div>
            </div>
        </div>
    </div>
</section>


<!-- ============================= LOCATION SECTION ============================= -->
<section class="location-section">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-10">
                <div class="location-card">
                    <h3><i class="bi bi-geo-alt-fill me-2"></i>Based in Al Karama, Dubai</h3>
                    <p class="mb-4" style="opacity:0.9;">Your trusted locksmith located in the heart of Al Karama, serving all of Dubai 24/7</p>

                    <div class="location-info">
                        <div class="location-item">
                            <i class="bi bi-building"></i>
                            <span><strong>Main Office:</strong> Al Karama, Dubai, UAE</span>
                        </div>
                        <div class="location-item">
                            <i class="bi bi-clock-fill"></i>
                            <span><strong>Working Hours:</strong> 24 Hours — 7 Days a Week</span>
                        </div>
                        <div class="location-item">
                            <i class="bi bi-lightning-charge-fill"></i>
                            <span><strong>Response Time:</strong> 15–30 Minutes Anywhere in Dubai</span>
                        </div>
                        <div class="location-item">
                            <i class="bi bi-truck"></i>
                            <span><strong>Mobile Service:</strong> We Come to Your Location</span>
                        </div>
                    </div>

                    <div class="service-areas">
                        <h4>We Cover All Dubai Areas</h4>
                        <div class="areas-grid">
                            <div class="area-badge">Al Karama</div>
                            <div class="area-badge">Bur Dubai</div>
                            <div class="area-badge">Deira</div>
                            <div class="area-badge">Downtown Dubai</div>
                            <div class="area-badge">Dubai Marina</div>
                            <div class="area-badge">JBR</div>
                            <div class="area-badge">Business Bay</div>
                            <div class="area-badge">JLT</div>
                            <div class="area-badge">Dubai Mall</div>
                            <div class="area-badge">Sheikh Zayed Rd</div>
                            <div class="area-badge">Al Barsha</div>
                            <div class="area-badge">Motor City</div>
                            <div class="area-badge">Silicon Oasis</div>
                            <div class="area-badge">International City</div>
                            <div class="area-badge">Jumeirah</div>
                            <div class="area-badge">Al Quoz</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<!-- ============================= WHY CHOOSE US SECTION ============================= -->
<section class="why-choose-section">
    <div class="container">
        <div class="section-title text-center mb-5">
            <h2>Why Choose Our Locksmith Service?</h2>
            <div class="underline"></div>
        </div>

        <div class="row g-4">
            <div class="col-lg-3 col-md-6">
                <div class="feature-box">
                    <i class="bi bi-alarm"></i>
                    <h5>24/7 Emergency Service</h5>
                    <p>Available round the clock every day of the year. Call us anytime — day or night, weekends or holidays.</p>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="feature-box">
                    <i class="bi bi-lightning-charge"></i>
                    <h5>Fast Response Time</h5>
                    <p>Our mobile technicians reach your location quickly. Get back into your home or office as fast as possible.</p>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="feature-box">
                    <i class="bi bi-person-check"></i>
                    <h5>Expert Technicians</h5>
                    <p>Highly trained and certified locksmiths with years of experience handling all lock brands and types.</p>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="feature-box">
                    <i class="bi bi-shield-check"></i>
                    <h5>No Damage Guarantee</h5>
                    <p>Professional tools and precision techniques ensure your doors and locks remain undamaged during service.</p>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="feature-box">
                    <i class="bi bi-cash-coin"></i>
                    <h5>Transparent Pricing</h5>
                    <p>Clear upfront pricing with no hidden charges. You know the full cost before we begin any work.</p>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="feature-box">
                    <i class="bi bi-tools"></i>
                    <h5>On-Site Service</h5>
                    <p>All services performed at your location — home, office, or shop. No need to remove doors or hardware.</p>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="feature-box">
                    <i class="bi bi-star-fill"></i>
                    <h5>100% Satisfaction</h5>
                    <p>Trusted by thousands of customers across Dubai for residential, commercial &amp; industrial lock services.</p>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="feature-box">
                    <i class="bi bi-gem"></i>
                    <h5>Latest Technology</h5>
                    <p>State-of-the-art equipment for all modern lock types — from traditional mechanical to advanced smart systems.</p>
                </div>
            </div>
        </div>
    </div>
</section>


<!-- ============================= EMERGENCY BANNER ============================= -->
<section class="emergency-banner">
    <div class="container">
        <h3>Locked Out? Need Lock Repair or Installation?</h3>
        <p>Don't Panic! We're Just One Call Away</p>
        <a href="tel:+9710505090296" class="emergency-phone">
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
      <div class="col-md-2 mb-4 mb-md-0 d-flex flex-row align-items-md-start align-items-center text-center text-md-start">
        <img src="{{ asset('images/jmk_logo.png') }}" alt="Logo" height="60" class="mb-2">
      </div>

      <!-- CENTER: Navigation Links -->
      <div class="col-md-2 mb-4 mb-md-0 text-center">
        <h4 class="fw-bold mb-3">Quick Links</h4>
        <ul class="list-unstyled">
          <li><a href="{{ route('index') }}" class="footer-link">Home</a></li>
          <li><a href="{{ route('about') }}" class="footer-link">About</a></li>
          <li><a href="{{ route('services') }}" class="footer-link">Services</a></li>
          <li><a href="{{ route('contact') }}" class="footer-link">Contact</a></li>
          <li><a href="{{ route('privacy') }}" class="footer-link">Privacy & Policy</a></li>
        </ul>
      </div>
<!-- SERVICES LINKS -->
<div class="col-md-4 mb-4 mb-md-0 text-center">
    <h4 class="fw-bold mb-3">Our Services</h4>
    <ul class="list-unstyled">
        <li><a href="{{ route('Shoe') }}" class="footer-link">Shoe Repairing</a></li>
        <li><a href="{{ route('Watches') }}" class="footer-link">Watch Repairing</a></li>
        <li><a href="{{ route('Phone') }}" class="footer-link">Phone Repairing</a></li>
        <li><a href="{{ route('suitcase') }}" class="footer-link">Suitcase Repairing</a></li>
        <li><a href="{{ route('Access') }}" class="footer-link">Access Card Repairing</a></li>
        <li><a href="{{ route('leather') }}" class="footer-link">Leather Works</a></li>
        <li><a href="{{ route('losthome') }}" class="footer-link">Lost Home Keys</a></li>
        <li><a href="{{ route('lostcar') }}" class="footer-link">Lost Car Keys</a></li>
        <li><a href="{{ route('Key') }}" class="footer-link">Key Duplicating</a></li>
        <li><a href="{{ route('Lock') }}" class="footer-link">Lock Repairing</a></li>
    </ul>
</div>
      <!-- RIGHT: Contact & Social Icons -->
      <div class="col-md-3 d-flex flex-column align-items-md-end align-items-center">
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