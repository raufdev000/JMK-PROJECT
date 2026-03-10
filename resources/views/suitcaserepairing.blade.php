<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Suitcase</title>
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
    /* ===================== SUITCASE REPAIR SECTION ===================== */
    :root {
        --primary-color: #871deb;
        --secondary-color: #5803eb;
        --accent-color: #2629d3;
        --dark-color: #1f2937;
        --light-gray: #6b7280;
        --bg-light: #f9fafb;
    }

    /* ===================== HERO ===================== */
    .sc-hero-section {
        background: linear-gradient(135deg, #ede9fe 0%, #ddd6fe 50%, #c4b5fd 100%);
        min-height: 520px;
        padding: 60px 0;
        position: relative;
        overflow: hidden;
    }

    .sc-hero-section::before {
        content: '';
        position: absolute;
        top: -100px; right: -100px;
        width: 400px; height: 400px;
        background: radial-gradient(circle, rgba(135,29,235,0.15) 0%, transparent 70%);
        border-radius: 50%;
    }

    .sc-hero-section::after {
        content: '';
        position: absolute;
        bottom: -80px; left: -80px;
        width: 300px; height: 300px;
        background: radial-gradient(circle, rgba(38,41,211,0.12) 0%, transparent 70%);
        border-radius: 50%;
    }

    .sc-hero-title {
        font-size: 3rem;
        font-weight: 800;
        color: #1f2937;
        line-height: 1.2;
    }

    .sc-hero-subtitle {
        font-size: 1.15rem;
        color: #4b5563;
        line-height: 1.7;
    }

    .sc-hero-badges .badge {
        font-size: 0.92rem;
        font-weight: 600;
        border-radius: 50px;
        background: white !important;
        color: #1f2937 !important;
        box-shadow: 0 2px 8px rgba(0,0,0,0.1);
    }

    .sc-hero-image-wrapper {
        width: 100%;
        overflow: hidden;
        border-radius: 1.25rem;
        box-shadow: 0 20px 50px rgba(135,29,235,0.25);
    }

    .sc-hero-image-wrapper img {
        width: 100%;
        height: auto;
        max-height: 460px;
        object-fit: cover;
        display: block;
    }

    /* ===================== SECTION TITLE ===================== */
    .sc-section-title h2 {
        font-size: 2.4rem;
        font-weight: 800;
        color: var(--dark-color);
        margin-bottom: 15px;
    }

    .sc-section-title .underline {
        width: 80px;
        height: 4px;
        background: linear-gradient(90deg, var(--primary-color), var(--accent-color));
        margin: 0 auto 20px;
        border-radius: 2px;
    }

    /* ===================== SERVICES CARDS ===================== */
    .sc-services-section {
        padding: 80px 0;
        background: var(--bg-light);
    }

    .sc-service-card {
        background: white;
        border-radius: 18px;
        padding: 32px;
        height: 100%;
        transition: all 0.3s ease;
        border: 2px solid transparent;
        box-shadow: 0 4px 15px rgba(0,0,0,0.06);
    }

    .sc-service-card:hover {
        transform: translateY(-10px);
        box-shadow: 0 20px 40px rgba(135,29,235,0.18);
        border-color: var(--primary-color);
    }

    .sc-service-icon {
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

    .sc-service-card h4 {
        font-size: 1.25rem;
        font-weight: 700;
        margin-bottom: 12px;
        color: var(--dark-color);
    }

    .sc-service-card p {
        color: var(--light-gray);
        margin-bottom: 0;
        font-size: 0.93rem;
        line-height: 1.65;
    }

    /* ===================== BRANDS SECTION ===================== */
    .sc-brands-section {
        padding: 80px 0;
        background: white;
    }

    .sc-brand-card {
        background: white;
        border-radius: 14px;
        padding: 20px 16px;
        text-align: center;
        transition: all 0.3s ease;
        border: 2px solid #f0ebff;
        box-shadow: 0 2px 10px rgba(0,0,0,0.05);
    }

    .sc-brand-card:hover {
        border-color: var(--primary-color);
        transform: translateY(-5px);
        box-shadow: 0 10px 25px rgba(135,29,235,0.15);
    }

    .sc-brand-card i {
        font-size: 2rem;
        color: var(--primary-color);
        margin-bottom: 10px;
        display: block;
    }

    .sc-brand-card .sc-brand-name {
        font-weight: 700;
        font-size: 0.98rem;
        color: var(--dark-color);
        margin-bottom: 4px;
    }

    .sc-brand-card .sc-brand-type {
        font-size: 0.78rem;
        color: var(--light-gray);
    }

    /* ===================== LUGGAGE TYPES ===================== */
    .sc-types-section {
        padding: 80px 0;
        background: var(--bg-light);
    }

    .sc-type-card {
        background: linear-gradient(135deg, #faf5ff 0%, #f3e8ff 100%);
        border-radius: 18px;
        padding: 28px;
        height: 100%;
        border: 2px solid #e9d5ff;
        transition: all 0.3s ease;
    }

    .sc-type-card:hover {
        border-color: var(--primary-color);
        transform: translateY(-6px);
        box-shadow: 0 12px 30px rgba(135,29,235,0.18);
    }

    .sc-type-card h5 {
        font-size: 1.15rem;
        font-weight: 700;
        color: var(--primary-color);
        margin-bottom: 15px;
        display: flex;
        align-items: center;
        gap: 10px;
    }

    .sc-type-card ul {
        list-style: none;
        padding: 0; margin: 0;
    }

    .sc-type-card ul li {
        padding: 7px 0;
        color: var(--light-gray);
        display: flex;
        align-items: flex-start;
        gap: 10px;
        font-size: 0.92rem;
    }

    .sc-type-card ul li::before {
        content: '✓';
        color: var(--primary-color);
        font-weight: bold;
        flex-shrink: 0;
    }

    /* ===================== LOCATION SECTION ===================== */
    .sc-location-section {
        padding: 80px 0;
        background: linear-gradient(135deg, var(--primary-color), var(--accent-color));
        color: white;
    }

    .sc-location-card {
        background: rgba(255,255,255,0.15);
        border-radius: 22px;
        padding: 44px;
        backdrop-filter: blur(12px);
        border: 2px solid rgba(255,255,255,0.25);
    }

    .sc-location-card h3 {
        font-size: 2rem;
        font-weight: 800;
        margin-bottom: 12px;
    }

    .sc-location-info {
        display: flex;
        flex-direction: column;
        gap: 18px;
        margin-bottom: 30px;
    }

    .sc-location-item {
        display: flex;
        align-items: center;
        gap: 15px;
        font-size: 1.05rem;
    }

    .sc-location-item i {
        font-size: 1.5rem;
        color: #fbbf24;
        flex-shrink: 0;
    }

    .sc-service-areas {
        background: rgba(255,255,255,0.12);
        border-radius: 16px;
        padding: 28px;
    }

    .sc-service-areas h4 {
        font-size: 1.4rem;
        font-weight: 700;
        margin-bottom: 18px;
    }

    .sc-areas-grid {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(140px, 1fr));
        gap: 12px;
    }

    .sc-area-badge {
        background: rgba(255,255,255,0.2);
        padding: 9px 14px;
        border-radius: 10px;
        text-align: center;
        font-weight: 600;
        font-size: 0.88rem;
    }

    /* ===================== WHY CHOOSE US ===================== */
    .sc-why-section {
        padding: 80px 0;
        background: white;
    }

    .sc-feature-box {
        background: var(--bg-light);
        border-radius: 18px;
        padding: 32px 24px;
        text-align: center;
        height: 100%;
        transition: all 0.3s ease;
        border: 2px solid transparent;
    }

    .sc-feature-box:hover {
        border-color: var(--primary-color);
        transform: translateY(-6px);
        box-shadow: 0 12px 28px rgba(135,29,235,0.15);
        background: white;
    }

    .sc-feature-box i {
        font-size: 2.8rem;
        color: var(--primary-color);
        margin-bottom: 18px;
        display: block;
    }

    .sc-feature-box h5 {
        font-size: 1.1rem;
        font-weight: 700;
        margin-bottom: 10px;
        color: var(--dark-color);
    }

    .sc-feature-box p {
        color: var(--light-gray);
        margin-bottom: 0;
        font-size: 0.91rem;
    }

    /* ===================== EMERGENCY BANNER ===================== */
    .sc-emergency-banner {
        background: linear-gradient(135deg, #dc2626, #b91c1c);
        color: white;
        padding: 50px 0;
        text-align: center;
        position: relative;
        overflow: hidden;
    }

    .sc-emergency-banner::before {
        content: '';
        position: absolute;
        top: 0; left: 0; right: 0; bottom: 0;
        background: url("data:image/svg+xml,%3Csvg width='60' height='60' viewBox='0 0 60 60' xmlns='http://www.w3.org/2000/svg'%3E%3Cg fill='none' fill-rule='evenodd'%3E%3Cg fill='%23ffffff' fill-opacity='0.04'%3E%3Cpath d='M36 34v-4h-2v4h-4v2h4v4h2v-4h4v-2h-4zm0-30V0h-2v4h-4v2h4v4h2V6h4V4h-4zM6 34v-4H4v4H0v2h4v4h2v-4h4v-2H6zM6 4V0H4v4H0v2h4v4h2V6h4V4H6z'/%3E%3C/g%3E%3C/g%3E%3C/svg%3E");
    }

    .sc-emergency-banner h3 {
        font-size: 2.2rem;
        font-weight: 800;
        margin-bottom: 10px;
        position: relative;
    }

    .sc-emergency-banner p {
        font-size: 1.2rem;
        margin-bottom: 20px;
        opacity: 0.9;
        position: relative;
    }

    .sc-emergency-phone {
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

    .sc-emergency-phone:hover { color: white; }

    /* ===================== RESPONSIVE ===================== */
    @media (max-width: 991px) {
        .sc-hero-title { font-size: 2.4rem; }
    }

    @media (max-width: 767px) {
        .sc-hero-title { font-size: 1.9rem; }
        .sc-hero-subtitle { font-size: 1rem; }
        .sc-section-title h2 { font-size: 1.9rem; }
        .sc-emergency-phone { font-size: 1.7rem; }
        .sc-emergency-banner h3 { font-size: 1.7rem; }
        .d-flex.gap-3 { flex-direction: column; gap: 0.75rem !important; }
        .btn-lg { width: 100%; }
        .sc-location-card { padding: 28px 20px; }
    }

    @media (max-width: 480px) {
        .sc-hero-title { font-size: 1.6rem; }
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
            <a class="nav-link" href="{{ route('contact') }}">Contact</a>
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
<section class="sc-hero-section py-5 font-ui">
    <div class="container position-relative" style="z-index:1;">
        <div class="row align-items-center g-4">
            <!-- LEFT: Content -->
            <div class="col-lg-6 order-lg-1 order-2">
                <h1 class="sc-hero-title mb-4">
                    Suitcase Damaged? <span style="color: var(--primary-color);">We Fix It Fast!</span>
                </h1>
                <p class="sc-hero-subtitle mb-4">
                    Complete suitcase repair and servicing for all luggage types — wheels, handles, zippers, locks, and body damage. From cabin bags to large hard-shell suitcases, we restore your luggage to travel-ready condition.
                </p>

                <div class="sc-hero-badges mb-4 d-flex flex-wrap gap-2">
                    <span class="badge p-3"><i class="bi bi-clock me-2"></i>Same Day Repair</span>
                    <span class="badge p-3"><i class="bi bi-geo-alt me-2"></i>Al Karama, Dubai</span>
                    <span class="badge p-3"><i class="bi bi-stars me-2"></i>All Luxury Brands</span>
                    <span class="badge p-3"><i class="bi bi-shield-check me-2"></i>Quality Guaranteed</span>
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
                <div class="sc-hero-image-wrapper">
                    <img src="../images/5ca01bfb6130937062e2212884654589.jpg" alt="Suitcase Repair Dubai">
                </div>
            </div>
        </div>
    </div>
</section>


<!-- ============================= SERVICES SECTION ============================= -->
<section class="sc-services-section font-ui">
    <div class="container">
        <div class="sc-section-title text-center mb-5">
            <h2>Our Suitcase Repair Services</h2>
            <div class="underline"></div>
            <p class="text-muted">Complete luggage repair solutions for all damage types and all brands</p>
        </div>

        <div class="row g-4">
            <!-- Wheel Replacement -->
            <div class="col-lg-4 col-md-6">
                <div class="sc-service-card">
                    <div class="sc-service-icon"><i class="bi bi-arrow-repeat"></i></div>
                    <h4>Wheel Replacement</h4>
                    <p>We replace damaged or broken suitcase wheels with smooth, durable wheels that ensure effortless movement through airports, streets, and travel terminals. Compatible with all major brands including Samsonite, American Tourister, Delsey, and more. Both spinner and inline wheel systems serviced.</p>
                </div>
            </div>

            <!-- Handle Repair -->
            <div class="col-lg-4 col-md-6">
                <div class="sc-service-card">
                    <div class="sc-service-icon"><i class="bi bi-grip-vertical"></i></div>
                    <h4>Handle Repair</h4>
                    <p>From telescopic retractable handles to top and side carry grips, we repair and replace all suitcase handle types. Handles are rebuilt to withstand heavy lifting and frequent travel use. Expert servicing for premium brands like Rimowa, Tumi, and Louis Vuitton with original-quality replacements.</p>
                </div>
            </div>

            <!-- Zipper Repair -->
            <div class="col-lg-4 col-md-6">
                <div class="sc-service-card">
                    <div class="sc-service-icon"><i class="bi bi-slash-circle"></i></div>
                    <h4>Zipper Repair & Replacement</h4>
                    <p>Stuck, broken, split, or misaligned zippers carefully repaired or fully replaced to keep your luggage secure and easy to use. We work with YKK and branded zippers to maintain quality standards. All zipper slider, pull tab, and track issues fixed with durable, travel-tested components.</p>
                </div>
            </div>

            <!-- Lock Repair -->
            <div class="col-lg-4 col-md-6">
                <div class="sc-service-card">
                    <div class="sc-service-icon"><i class="bi bi-lock"></i></div>
                    <h4>Lock Repair & Replacement</h4>
                    <p>We repair and replace broken combination locks, TSA-approved locks, and key locks on all suitcase types. Forgotten combinations reset, damaged lock mechanisms replaced, and lost key locks substituted with new hardware. Compatible with built-in and add-on lock systems for all luggage brands.</p>
                </div>
            </div>

            <!-- Body Damage -->
            <div class="col-lg-4 col-md-6">
                <div class="sc-service-card">
                    <div class="sc-service-icon"><i class="bi bi-shield-check"></i></div>
                    <h4>Body Damage Fix</h4>
                    <p>We fix cracks, dents, torn fabric, broken shell panels, and structural damage in both soft and hard-shell suitcases. Professional restoration for polycarbonate, ABS plastic, aluminum, and fabric materials. Restores strength, appearance, and long-term durability to pre-damage condition.</p>
                </div>
            </div>

            <!-- Full Servicing -->
            <div class="col-lg-4 col-md-6">
                <div class="sc-service-card">
                    <div class="sc-service-icon"><i class="bi bi-tools"></i></div>
                    <h4>Full Luggage Servicing</h4>
                    <p>Complete suitcase overhaul including deep cleaning, wheel lubrication, handle tightening, zipper conditioning, lock servicing, and interior lining repair. Perfect pre-travel service to ensure your luggage is in top condition before your next trip. Available for all brands and sizes.</p>
                </div>
            </div>
        </div>
    </div>
</section>


<!-- ============================= BRANDS SECTION ============================= -->
<section class="sc-brands-section font-ui">
    <div class="container">
        <div class="sc-section-title text-center mb-5">
            <h2>Premium & Luxury Brands We Service</h2>
            <div class="underline"></div>
            <p class="text-muted">From everyday luggage to high-end designer brands — every suitcase gets expert care</p>
        </div>

        <div class="row g-3">
            <div class="col-lg-2 col-md-3 col-6">
                <div class="sc-brand-card">
                    <i class="bi bi-bag-check-fill"></i>
                    <div class="sc-brand-name">Louis Vuitton</div>
                    <div class="sc-brand-type">Luxury Brand</div>
                </div>
            </div>
            <div class="col-lg-2 col-md-3 col-6">
                <div class="sc-brand-card">
                    <i class="bi bi-bag-check-fill"></i>
                    <div class="sc-brand-name">Gucci</div>
                    <div class="sc-brand-type">Luxury Brand</div>
                </div>
            </div>
            <div class="col-lg-2 col-md-3 col-6">
                <div class="sc-brand-card">
                    <i class="bi bi-bag-check-fill"></i>
                    <div class="sc-brand-name">Rimowa</div>
                    <div class="sc-brand-type">Premium Brand</div>
                </div>
            </div>
            <div class="col-lg-2 col-md-3 col-6">
                <div class="sc-brand-card">
                    <i class="bi bi-bag-check-fill"></i>
                    <div class="sc-brand-name">Tumi</div>
                    <div class="sc-brand-type">Premium Brand</div>
                </div>
            </div>
            <div class="col-lg-2 col-md-3 col-6">
                <div class="sc-brand-card">
                    <i class="bi bi-bag-check-fill"></i>
                    <div class="sc-brand-name">Samsonite</div>
                    <div class="sc-brand-type">Top Brand</div>
                </div>
            </div>
            <div class="col-lg-2 col-md-3 col-6">
                <div class="sc-brand-card">
                    <i class="bi bi-bag-check-fill"></i>
                    <div class="sc-brand-name">Delsey</div>
                    <div class="sc-brand-type">Top Brand</div>
                </div>
            </div>
            <div class="col-lg-2 col-md-3 col-6">
                <div class="sc-brand-card">
                    <i class="bi bi-bag-check-fill"></i>
                    <div class="sc-brand-name">American Tourister</div>
                    <div class="sc-brand-type">Popular Brand</div>
                </div>
            </div>
            <div class="col-lg-2 col-md-3 col-6">
                <div class="sc-brand-card">
                    <i class="bi bi-bag-check-fill"></i>
                    <div class="sc-brand-name">Travelpro</div>
                    <div class="sc-brand-type">Travel Brand</div>
                </div>
            </div>
            <div class="col-lg-2 col-md-3 col-6">
                <div class="sc-brand-card">
                    <i class="bi bi-bag-check-fill"></i>
                    <div class="sc-brand-name">IT Luggage</div>
                    <div class="sc-brand-type">Popular Brand</div>
                </div>
            </div>
            <div class="col-lg-2 col-md-3 col-6">
                <div class="sc-brand-card">
                    <i class="bi bi-bag-check-fill"></i>
                    <div class="sc-brand-name">Victorinox</div>
                    <div class="sc-brand-type">Premium Brand</div>
                </div>
            </div>
            <div class="col-lg-2 col-md-3 col-6">
                <div class="sc-brand-card">
                    <i class="bi bi-bag-check-fill"></i>
                    <div class="sc-brand-name">Briggs & Riley</div>
                    <div class="sc-brand-type">Premium Brand</div>
                </div>
            </div>
            <div class="col-lg-2 col-md-3 col-6">
                <div class="sc-brand-card">
                    <i class="bi bi-bag-check-fill"></i>
                    <div class="sc-brand-name">& All Brands</div>
                    <div class="sc-brand-type">Every Brand</div>
                </div>
            </div>
        </div>
    </div>
</section>


<!-- ============================= LUGGAGE TYPES SECTION ============================= -->
<section class="sc-types-section font-ui">
    <div class="container">
        <div class="sc-section-title text-center mb-5">
            <h2>All Luggage Types We Repair</h2>
            <div class="underline"></div>
            <p class="text-muted">Hard shell, soft fabric, carry-on, or oversized — we repair every type of travel luggage</p>
        </div>

        <div class="row g-4">
            <div class="col-lg-3 col-md-6">
                <div class="sc-type-card">
                    <h5><i class="bi bi-box-seam"></i> Hard Shell Suitcases</h5>
                    <ul>
                        <li>Polycarbonate suitcases</li>
                        <li>ABS plastic suitcases</li>
                        <li>Aluminum suitcases</li>
                        <li>Hybrid hard-soft cases</li>
                        <li>Cracked shell repair</li>
                        <li>Dent removal</li>
                        <li>Panel replacement</li>
                    </ul>
                </div>
            </div>

            <div class="col-lg-3 col-md-6">
                <div class="sc-type-card">
                    <h5><i class="bi bi-bag"></i> Soft Fabric Luggage</h5>
                    <ul>
                        <li>Nylon & polyester bags</li>
                        <li>Canvas suitcases</li>
                        <li>Expandable soft cases</li>
                        <li>Torn fabric repair</li>
                        <li>Stitching & seam repair</li>
                        <li>Interior lining repair</li>
                        <li>Pocket & divider repair</li>
                    </ul>
                </div>
            </div>

            <div class="col-lg-3 col-md-6">
                <div class="sc-type-card">
                    <h5><i class="bi bi-luggage"></i> By Size</h5>
                    <ul>
                        <li>Cabin / carry-on bags</li>
                        <li>Medium checked bags</li>
                        <li>Large checked suitcases</li>
                        <li>Oversized luggage</li>
                        <li>Duffle bags</li>
                        <li>Garment bags</li>
                        <li>Travel backpacks</li>
                    </ul>
                </div>
            </div>

            <div class="col-lg-3 col-md-6">
                <div class="sc-type-card">
                    <h5><i class="bi bi-tools"></i> Parts We Fix</h5>
                    <ul>
                        <li>Spinner & inline wheels</li>
                        <li>Telescopic handles</li>
                        <li>Top & side carry grips</li>
                        <li>YKK & branded zippers</li>
                        <li>TSA combination locks</li>
                        <li>Key locks</li>
                        <li>Corner guards & feet</li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="text-center mt-5">
            <p class="text-muted mb-2"><strong>All Materials Supported:</strong></p>
            <p class="text-muted">Polycarbonate • ABS Plastic • Aluminum • Nylon • Polyester • Canvas • Leather • Hybrid Materials • And More!</p>
        </div>
    </div>
</section>


<!-- ============================= LOCATION SECTION ============================= -->
<section class="sc-location-section font-ui">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-10">
                <div class="sc-location-card">
                    <h3><i class="bi bi-geo-alt-fill me-2"></i>Based in Al Karama, Dubai</h3>
                    <p class="mb-4" style="opacity:0.9;">Your trusted suitcase repair specialist in the heart of Al Karama, serving all of Dubai</p>

                    <div class="sc-location-info">
                        <div class="sc-location-item">
                            <i class="bi bi-building"></i>
                            <span><strong>Location:</strong> Al Karama, Dubai, UAE</span>
                        </div>
                        <div class="sc-location-item">
                            <i class="bi bi-clock-fill"></i>
                            <span><strong>Working Hours:</strong> 24 Hours — 7 Days a Week</span>
                        </div>
                        <div class="sc-location-item">
                            <i class="bi bi-lightning-charge-fill"></i>
                            <span><strong>Repair Time:</strong> Most Repairs Completed Same Day</span>
                        </div>
                        <div class="sc-location-item">
                            <i class="bi bi-truck"></i>
                            <span><strong>Pickup & Delivery:</strong> Available Across Dubai</span>
                        </div>
                    </div>

                    <div class="sc-service-areas">
                        <h4>We Serve All Dubai Areas</h4>
                        <div class="sc-areas-grid">
                            <div class="sc-area-badge">Al Karama</div>
                            <div class="sc-area-badge">Bur Dubai</div>
                            <div class="sc-area-badge">Deira</div>
                            <div class="sc-area-badge">Downtown Dubai</div>
                            <div class="sc-area-badge">Dubai Marina</div>
                            <div class="sc-area-badge">JBR</div>
                            <div class="sc-area-badge">Business Bay</div>
                            <div class="sc-area-badge">JLT</div>
                            <div class="sc-area-badge">Dubai Mall</div>
                            <div class="sc-area-badge">Sheikh Zayed Rd</div>
                            <div class="sc-area-badge">Al Barsha</div>
                            <div class="sc-area-badge">Motor City</div>
                            <div class="sc-area-badge">Silicon Oasis</div>
                            <div class="sc-area-badge">International City</div>
                            <div class="sc-area-badge">Jumeirah</div>
                            <div class="sc-area-badge">Al Quoz</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<!-- ============================= WHY CHOOSE US ============================= -->
<section class="sc-why-section font-ui">
    <div class="container">
        <div class="sc-section-title text-center mb-5">
            <h2>Why Choose Our Repair Service?</h2>
            <div class="underline"></div>
        </div>

        <div class="row g-4">
            <div class="col-lg-3 col-md-6">
                <div class="sc-feature-box">
                    <i class="bi bi-lightning-charge"></i>
                    <h5>Same Day Repair</h5>
                    <p>Most repairs completed the same day. Flying tomorrow? Bring it in and we'll have it ready before your trip.</p>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="sc-feature-box">
                    <i class="bi bi-gem"></i>
                    <h5>Genuine Quality Parts</h5>
                    <p>We use original or OEM-grade replacement parts to ensure your suitcase performs and looks like new.</p>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="sc-feature-box">
                    <i class="bi bi-person-check"></i>
                    <h5>Expert Technicians</h5>
                    <p>Skilled repair specialists trained to handle all luggage types — from budget bags to luxury designer brands.</p>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="sc-feature-box">
                    <i class="bi bi-shield-check"></i>
                    <h5>All Brands Accepted</h5>
                    <p>We service every brand from Louis Vuitton and Rimowa to Samsonite and no-brand luggage equally well.</p>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="sc-feature-box">
                    <i class="bi bi-cash-coin"></i>
                    <h5>Affordable Pricing</h5>
                    <p>Fair and transparent repair costs. Repairing is always cheaper than replacing — we help you save money.</p>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="sc-feature-box">
                    <i class="bi bi-truck"></i>
                    <h5>Pickup & Delivery</h5>
                    <p>Can't travel to us? We offer pickup and delivery of your luggage across all Dubai areas at your convenience.</p>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="sc-feature-box">
                    <i class="bi bi-award"></i>
                    <h5>Repair Warranty</h5>
                    <p>All repairs come with a service warranty. If the same issue returns, we fix it at no additional charge.</p>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="sc-feature-box">
                    <i class="bi bi-star-fill"></i>
                    <h5>Trusted in Dubai</h5>
                    <p>Hundreds of happy customers trust us with their valued luggage for fast, reliable, professional repair.</p>
                </div>
            </div>
        </div>
    </div>
</section>


<!-- ============================= EMERGENCY BANNER ============================= -->
<section class="sc-emergency-banner font-ui">
    <div class="container">
        <h3>Suitcase Broken Before Your Flight?</h3>
        <p>Don't Stress — We Fix It the Same Day!</p>
        <a href="tel:+9710505090296" class="sc-emergency-phone">
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