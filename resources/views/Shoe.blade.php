<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Shoe repairing</title>
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
    /* ===================== SHOE REPAIR SECTION ===================== */
    :root {
        --primary-color: #651deb;
        --secondary-color: #5803eb;
        --accent-color: #2629d3;
        --dark-color: #1f2937;
        --light-gray: #6b7280;
        --bg-light: #f9fafb;
    }

    /* ===================== HERO ===================== */
    .sr-hero-section {
        background: linear-gradient(135deg, #ede9fe 0%, #ddd6fe 50%, #c4b5fd 100%);
        min-height: 520px;
        padding: 60px 0;
        position: relative;
        overflow: hidden;
    }

    .sr-hero-section::before {
        content: '';
        position: absolute;
        top: -100px; right: -100px;
        width: 400px; height: 400px;
        background: radial-gradient(circle, rgba(135,29,235,0.15) 0%, transparent 70%);
        border-radius: 50%;
    }

    .sr-hero-section::after {
        content: '';
        position: absolute;
        bottom: -80px; left: -80px;
        width: 300px; height: 300px;
        background: radial-gradient(circle, rgba(38,41,211,0.12) 0%, transparent 70%);
        border-radius: 50%;
    }

    .sr-hero-title {
        font-size: 3rem;
        font-weight: 800;
        color: #1f2937;
        line-height: 1.2;
    }

    .sr-hero-subtitle {
        font-size: 1.15rem;
        color: #4b5563;
        line-height: 1.7;
    }

    .sr-hero-badges .badge {
        font-size: 0.92rem;
        font-weight: 600;
        border-radius: 50px;
        background: white !important;
        color: #1f2937 !important;
        box-shadow: 0 2px 8px rgba(0,0,0,0.1);
    }

    .sr-hero-image-wrapper {
        width: 100%;
        overflow: hidden;
        border-radius: 1.25rem;
        box-shadow: 0 20px 50px rgba(135,29,235,0.25);
    }

    .sr-hero-image-wrapper img {
        width: 100%;
        height: auto;
        max-height: 460px;
        object-fit: cover;
        display: block;
    }

    /* ===================== SECTION TITLE ===================== */
    .sr-section-title h2 {
        font-size: 2.4rem;
        font-weight: 800;
        color: var(--dark-color);
        margin-bottom: 15px;
    }

    .sr-section-title .underline {
        width: 80px;
        height: 4px;
        background: linear-gradient(90deg, var(--primary-color), var(--accent-color));
        margin: 0 auto 20px;
        border-radius: 2px;
    }

    /* ===================== SERVICES CARDS ===================== */
    .sr-services-section {
        padding: 80px 0;
        background: var(--bg-light);
    }

    .sr-service-card {
        background: white;
        border-radius: 18px;
        padding: 32px;
        height: 100%;
        transition: all 0.3s ease;
        border: 2px solid transparent;
        box-shadow: 0 4px 15px rgba(0,0,0,0.06);
    }

    .sr-service-card:hover {
        transform: translateY(-10px);
        box-shadow: 0 20px 40px rgba(135,29,235,0.18);
        border-color: var(--primary-color);
    }

    .sr-service-icon {
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

    .sr-service-card h4 {
        font-size: 1.25rem;
        font-weight: 700;
        margin-bottom: 12px;
        color: var(--dark-color);
    }

    .sr-service-card p {
        color: var(--light-gray);
        margin-bottom: 0;
        font-size: 0.93rem;
        line-height: 1.65;
    }

    /* ===================== SHOE CATEGORIES ===================== */
    .sr-categories-section {
        padding: 80px 0;
        background: white;
    }

    .sr-category-card {
        background: linear-gradient(135deg, #faf5ff 0%, #f3e8ff 100%);
        border-radius: 20px;
        padding: 36px;
        height: 100%;
        border: 2px solid #e9d5ff;
        transition: all 0.3s ease;
    }

    .sr-category-card:hover {
        border-color: var(--primary-color);
        transform: translateY(-8px);
        box-shadow: 0 16px 40px rgba(135,29,235,0.2);
    }

    .sr-category-card .cat-icon {
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

    .sr-category-card h4 {
        font-size: 1.3rem;
        font-weight: 700;
        margin-bottom: 12px;
        color: var(--dark-color);
    }

    .sr-category-card p {
        color: var(--light-gray);
        font-size: 0.93rem;
        line-height: 1.65;
        margin-bottom: 0;
    }

    /* ===================== BRANDS SECTION ===================== */
    .sr-brands-section {
        padding: 80px 0;
        background: var(--bg-light);
    }

    .sr-brand-card {
        background: white;
        border-radius: 14px;
        padding: 20px 16px;
        text-align: center;
        transition: all 0.3s ease;
        border: 2px solid #f0ebff;
        box-shadow: 0 2px 10px rgba(0,0,0,0.05);
    }

    .sr-brand-card:hover {
        border-color: var(--primary-color);
        transform: translateY(-5px);
        box-shadow: 0 10px 25px rgba(135,29,235,0.15);
    }

    .sr-brand-card i {
        font-size: 2rem;
        color: var(--primary-color);
        margin-bottom: 10px;
        display: block;
    }

    .sr-brand-card .sr-brand-name {
        font-weight: 700;
        font-size: 0.98rem;
        color: var(--dark-color);
        margin-bottom: 4px;
    }

    .sr-brand-card .sr-brand-type {
        font-size: 0.78rem;
        color: var(--light-gray);
    }

    /* ===================== SHOE TYPES CARDS ===================== */
    .sr-types-section {
        padding: 80px 0;
        background: white;
    }

    .sr-type-card {
        background: linear-gradient(135deg, #faf5ff 0%, #f3e8ff 100%);
        border-radius: 18px;
        padding: 28px;
        height: 100%;
        border: 2px solid #e9d5ff;
        transition: all 0.3s ease;
    }

    .sr-type-card:hover {
        border-color: var(--primary-color);
        transform: translateY(-6px);
        box-shadow: 0 12px 30px rgba(135,29,235,0.18);
    }

    .sr-type-card h5 {
        font-size: 1.15rem;
        font-weight: 700;
        color: var(--primary-color);
        margin-bottom: 15px;
        display: flex;
        align-items: center;
        gap: 10px;
    }

    .sr-type-card ul {
        list-style: none;
        padding: 0; margin: 0;
    }

    .sr-type-card ul li {
        padding: 7px 0;
        color: var(--light-gray);
        display: flex;
        align-items: flex-start;
        gap: 10px;
        font-size: 0.92rem;
    }

    .sr-type-card ul li::before {
        content: '✓';
        color: var(--primary-color);
        font-weight: bold;
        flex-shrink: 0;
    }

    /* ===================== LOCATION SECTION ===================== */
    .sr-location-section {
        padding: 80px 0;
        background: linear-gradient(135deg, var(--primary-color), var(--accent-color));
        color: white;
    }

    .sr-location-card {
        background: rgba(255,255,255,0.15);
        border-radius: 22px;
        padding: 44px;
        backdrop-filter: blur(12px);
        border: 2px solid rgba(255,255,255,0.25);
    }

    .sr-location-card h3 {
        font-size: 2rem;
        font-weight: 800;
        margin-bottom: 12px;
    }

    .sr-location-info {
        display: flex;
        flex-direction: column;
        gap: 18px;
        margin-bottom: 30px;
    }

    .sr-location-item {
        display: flex;
        align-items: center;
        gap: 15px;
        font-size: 1.05rem;
    }

    .sr-location-item i {
        font-size: 1.5rem;
        color: #fbbf24;
        flex-shrink: 0;
    }

    .sr-service-areas {
        background: rgba(255,255,255,0.12);
        border-radius: 16px;
        padding: 28px;
    }

    .sr-service-areas h4 {
        font-size: 1.4rem;
        font-weight: 700;
        margin-bottom: 18px;
    }

    .sr-areas-grid {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(140px, 1fr));
        gap: 12px;
    }

    .sr-area-badge {
        background: rgba(255,255,255,0.2);
        padding: 9px 14px;
        border-radius: 10px;
        text-align: center;
        font-weight: 600;
        font-size: 0.88rem;
    }

    /* ===================== WHY CHOOSE US ===================== */
    .sr-why-section {
        padding: 80px 0;
        background: var(--bg-light);
    }

    .sr-feature-box {
        background: white;
        border-radius: 18px;
        padding: 32px 24px;
        text-align: center;
        height: 100%;
        transition: all 0.3s ease;
        border: 2px solid transparent;
    }

    .sr-feature-box:hover {
        border-color: var(--primary-color);
        transform: translateY(-6px);
        box-shadow: 0 12px 28px rgba(135,29,235,0.15);
    }

    .sr-feature-box i {
        font-size: 2.8rem;
        color: var(--primary-color);
        margin-bottom: 18px;
        display: block;
    }

    .sr-feature-box h5 {
        font-size: 1.1rem;
        font-weight: 700;
        margin-bottom: 10px;
        color: var(--dark-color);
    }

    .sr-feature-box p {
        color: var(--light-gray);
        margin-bottom: 0;
        font-size: 0.91rem;
    }

    /* ===================== EMERGENCY BANNER ===================== */
    .sr-emergency-banner {
        background: linear-gradient(135deg, #dc2626, #b91c1c);
        color: white;
        padding: 50px 0;
        text-align: center;
        position: relative;
        overflow: hidden;
    }

    .sr-emergency-banner::before {
        content: '';
        position: absolute;
        top: 0; left: 0; right: 0; bottom: 0;
        background: url("data:image/svg+xml,%3Csvg width='60' height='60' viewBox='0 0 60 60' xmlns='http://www.w3.org/2000/svg'%3E%3Cg fill='none' fill-rule='evenodd'%3E%3Cg fill='%23ffffff' fill-opacity='0.04'%3E%3Cpath d='M36 34v-4h-2v4h-4v2h4v4h2v-4h4v-2h-4zm0-30V0h-2v4h-4v2h4v4h2V6h4V4h-4zM6 34v-4H4v4H0v2h4v4h2v-4h4v-2H6zM6 4V0H4v4H0v2h4v4h2V6h4V4H6z'/%3E%3C/g%3E%3C/g%3E%3C/svg%3E");
    }

    .sr-emergency-banner h3 {
        font-size: 2.2rem;
        font-weight: 800;
        margin-bottom: 10px;
        position: relative;
    }

    .sr-emergency-banner p {
        font-size: 1.2rem;
        margin-bottom: 20px;
        opacity: 0.9;
        position: relative;
    }

    .sr-emergency-phone {
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

    .sr-emergency-phone:hover { color: white; }

    /* ===================== RESPONSIVE ===================== */
    @media (max-width: 991px) { .sr-hero-title { font-size: 2.4rem; } }

    @media (max-width: 767px) {
        .sr-hero-title { font-size: 1.9rem; }
        .sr-hero-subtitle { font-size: 1rem; }
        .sr-section-title h2 { font-size: 1.9rem; }
        .sr-emergency-phone { font-size: 1.7rem; }
        .sr-emergency-banner h3 { font-size: 1.7rem; }
        .d-flex.gap-3 { flex-direction: column; gap: 0.75rem !important; }
        .btn-lg { width: 100%; }
        .sr-location-card { padding: 28px 20px; }
    }

    @media (max-width: 480px) { .sr-hero-title { font-size: 1.6rem; } }
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
<section class="sr-hero-section py-5 font-ui">
    <div class="container position-relative" style="z-index:1;">
        <div class="row align-items-center g-4">
            <div class="col-lg-6 order-lg-1 order-2">
                <h1 class="sr-hero-title mb-4">
                    Shoes Damaged? <span style="color: var(--primary-color);">We Repair Them Like New!</span>
                </h1>
                <p class="sr-hero-subtitle mb-4">
                    Expert shoe repair for all types of footwear — formal shoes, sneakers, boots, sandals, and luxury designer brands. All materials, all colors, all restored to perfect comfort and original appearance with professional craftsmanship.
                </p>

                <div class="sr-hero-badges mb-4 d-flex flex-wrap gap-2">
                    <span class="badge p-3"><i class="bi bi-clock me-2"></i>Same Day Repair</span>
                    <span class="badge p-3"><i class="bi bi-geo-alt me-2"></i>Al Karama, Dubai</span>
                    <span class="badge p-3"><i class="bi bi-stars me-2"></i>All Luxury Brands</span>
                    <span class="badge p-3"><i class="bi bi-palette me-2"></i>All Colors Matched</span>
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

            <div class="col-lg-6 order-lg-2 order-1">
                <div class="sr-hero-image-wrapper">
                    <img src="../images/shoerepair.webp" alt="Shoe Repair Dubai">
                </div>
            </div>
        </div>
    </div>
</section>



<section class="sr-services-section font-ui">
    <div class="container">
        <div class="sr-section-title text-center mb-5">
            <h2>Our Shoe Repair Services</h2>
            <div class="underline"></div>
            <p class="text-muted">Complete shoe repair solutions for all footwear types, brands, and damage</p>
        </div>

        <div class="row g-4">
            <div class="col-lg-4 col-md-6">
                <div class="sr-service-card">
                    <div class="sr-service-icon"><i class="bi bi-layers"></i></div>
                    <h4>Sole Replacement</h4>
                    <p>Worn-out soles fully replaced with durable, high-quality rubber, leather, or synthetic materials matched to your shoe brand and style. We handle Goodyear welt repairs, Blake stitch resoling, cemented sole replacement, and half-sole repairs for all shoe types — formal, casual, boots, and sneakers.</p>
                </div>
            </div>

            <div class="col-lg-4 col-md-6">
                <div class="sr-service-card">
                    <div class="sr-service-icon"><i class="bi bi-scissors"></i></div>
                    <h4>Stitching & Seam Repair</h4>
                    <p>We fix torn seams, burst stitching, loose parts, and structural damage for shoes of every brand, style, and material. Hand-stitching for delicate repairs, heavy-duty machine-stitching for strength. Color-matched thread ensures invisible repairs on leather, canvas, suede, and synthetic uppers.</p>
                </div>
            </div>

            <div class="col-lg-4 col-md-6">
                <div class="sr-service-card">
                    <div class="sr-service-icon"><i class="bi bi-hammer"></i></div>
                    <h4>Heel Repair & Replacement</h4>
                    <p>Broken, worn, or damaged heels repaired and rebuilt. We replace heel tips, rebuild collapsed heels, fix stiletto pins, and restore block heels on women's and men's footwear. Compatible with all heel types — stacked leather, rubber, wooden, and metal-tipped heels for all brands and styles.</p>
                </div>
            </div>

            <div class="col-lg-4 col-md-6">
                <div class="sr-service-card">
                    <div class="sr-service-icon"><i class="bi bi-palette"></i></div>
                    <h4>Polishing & Color Restoration</h4>
                    <p>Professional polishing and color touch-ups that restore shine and refresh faded leather, suede, patent, and nubuck finishes. We match any color — black, brown, tan, burgundy, navy, white, red, or custom shades. Full recoloring, scuff removal, midsole repainting, and protective finishing included for a brand-new look.</p>
                </div>
            </div>

            <div class="col-lg-4 col-md-6">
                <div class="sr-service-card">
                    <div class="sr-service-icon"><i class="bi bi-droplet"></i></div>
                    <h4>Waterproofing & Protection</h4>
                    <p>Premium protective treatments applied to all shoe materials and colors to guard against water, weather, stains, and everyday damage. We treat leather, suede, nubuck, canvas, and synthetic uppers with specialist waterproofing agents. Ideal for boots, formal shoes, and luxury designer footwear to extend their lifespan.</p>
                </div>
            </div>

            <div class="col-lg-4 col-md-6">
                <div class="sr-service-card">
                    <div class="sr-service-icon"><i class="bi bi-stars"></i></div>
                    <h4>Deep Cleaning & Restoration</h4>
                    <p>Professional deep cleaning for all shoe types including sneakers, leather shoes, suede boots, and designer footwear. We remove dirt, stains, yellowing, and odors using specialist cleaning solutions. Sneaker restoration includes sole brightening, midsole cleaning, lace replacement, and complete upper restoration back to box-fresh condition.</p>
                </div>
            </div>
        </div>
    </div>
</section>


<!-- ============================= SHOE CATEGORIES ============================= -->
<section class="sr-categories-section font-ui">
    <div class="container">
        <div class="sr-section-title text-center mb-5">
            <h2>All Footwear Types We Repair</h2>
            <div class="underline"></div>
            <p class="text-muted">From everyday shoes to rare collectibles — every pair gets expert attention</p>
        </div>

        <div class="row g-4">
            <div class="col-lg-3 col-md-6">
                <div class="sr-category-card">
                    <div class="cat-icon"><i class="bi bi-briefcase"></i></div>
                    <h4>Formal & Dress Shoes</h4>
                    <p>Oxfords, Derbys, Brogues, and Loafers repaired with premium care. Goodyear welt repairs, leather sole replacement, heel rebuilding, and complete restoration of vintage dress shoes. Specialists in Allen Edmonds, Church's, Alden, and Crockett & Jones.</p>
                </div>
            </div>

            <div class="col-lg-3 col-md-6">
                <div class="sr-category-card">
                    <div class="cat-icon"><i class="bi bi-lightning-charge"></i></div>
                    <h4>Sneakers & Athletic Shoes</h4>
                    <p>Professional sneaker restoration for Nike, Adidas, Jordan, Yeezy, New Balance, and limited-edition collectibles. Sole regluing, midsole repainting, yellowing removal, upper cleaning, and complete customization for every color and material including leather, suede, mesh, and canvas.</p>
                </div>
            </div>

            <div class="col-lg-3 col-md-6">
                <div class="sr-category-card">
                    <div class="cat-icon"><i class="bi bi-moisture"></i></div>
                    <h4>Boots & Work Shoes</h4>
                    <p>Comprehensive boot repair for work boots, hiking boots, Chelsea boots, and combat boots. We service Red Wing, Timberland, Dr. Martens, Wolverine, and Thursday Boot Company. Sole replacement, zipper repair, waterproofing, re-stitching, and full reconditioning for all boot types.</p>
                </div>
            </div>

            <div class="col-lg-3 col-md-6">
                <div class="sr-category-card">
                    <div class="cat-icon"><i class="bi bi-gem"></i></div>
                    <h4>Luxury & Designer Footwear</h4>
                    <p>Specialist repairs for Gucci, Louis Vuitton, Christian Louboutin, Prada, Balenciaga, and Hermès. Red sole restoration, logo plate replacement, hand-stitched repairs, and color matching for limited-edition pieces. Exotic materials including patent leather, crocodile, python, and ostrich all handled with precision.</p>
                </div>
            </div>
        </div>
    </div>
</section>


<!-- ============================= BRANDS SECTION ============================= -->
<section class="sr-brands-section font-ui">
    <div class="container">
        <div class="sr-section-title text-center mb-5">
            <h2>All Shoe Brands We Service</h2>
            <div class="underline"></div>
            <p class="text-muted">From everyday wear to ultra-luxury designer — every brand repaired with expert skill</p>
        </div>

        <div class="row g-3">
            <div class="col-lg-2 col-md-3 col-6">
                <div class="sr-brand-card">
                    <i class="bi bi-award-fill"></i>
                    <div class="sr-brand-name">Nike</div>
                    <div class="sr-brand-type">Athletic</div>
                </div>
            </div>
            <div class="col-lg-2 col-md-3 col-6">
                <div class="sr-brand-card">
                    <i class="bi bi-award-fill"></i>
                    <div class="sr-brand-name">Adidas</div>
                    <div class="sr-brand-type">Athletic</div>
                </div>
            </div>
            <div class="col-lg-2 col-md-3 col-6">
                <div class="sr-brand-card">
                    <i class="bi bi-award-fill"></i>
                    <div class="sr-brand-name">Jordan</div>
                    <div class="sr-brand-type">Sneakers</div>
                </div>
            </div>
            <div class="col-lg-2 col-md-3 col-6">
                <div class="sr-brand-card">
                    <i class="bi bi-award-fill"></i>
                    <div class="sr-brand-name">Gucci</div>
                    <div class="sr-brand-type">Luxury Brand</div>
                </div>
            </div>
            <div class="col-lg-2 col-md-3 col-6">
                <div class="sr-brand-card">
                    <i class="bi bi-award-fill"></i>
                    <div class="sr-brand-name">Louis Vuitton</div>
                    <div class="sr-brand-type">Luxury Brand</div>
                </div>
            </div>
            <div class="col-lg-2 col-md-3 col-6">
                <div class="sr-brand-card">
                    <i class="bi bi-award-fill"></i>
                    <div class="sr-brand-name">Louboutin</div>
                    <div class="sr-brand-type">Luxury Brand</div>
                </div>
            </div>
            <div class="col-lg-2 col-md-3 col-6">
                <div class="sr-brand-card">
                    <i class="bi bi-award-fill"></i>
                    <div class="sr-brand-name">Dr. Martens</div>
                    <div class="sr-brand-type">Boots</div>
                </div>
            </div>
            <div class="col-lg-2 col-md-3 col-6">
                <div class="sr-brand-card">
                    <i class="bi bi-award-fill"></i>
                    <div class="sr-brand-name">Timberland</div>
                    <div class="sr-brand-type">Boots</div>
                </div>
            </div>
            <div class="col-lg-2 col-md-3 col-6">
                <div class="sr-brand-card">
                    <i class="bi bi-award-fill"></i>
                    <div class="sr-brand-name">Red Wing</div>
                    <div class="sr-brand-type">Work Boots</div>
                </div>
            </div>
            <div class="col-lg-2 col-md-3 col-6">
                <div class="sr-brand-card">
                    <i class="bi bi-award-fill"></i>
                    <div class="sr-brand-name">Allen Edmonds</div>
                    <div class="sr-brand-type">Formal</div>
                </div>
            </div>
            <div class="col-lg-2 col-md-3 col-6">
                <div class="sr-brand-card">
                    <i class="bi bi-award-fill"></i>
                    <div class="sr-brand-name">Balenciaga</div>
                    <div class="sr-brand-type">Designer</div>
                </div>
            </div>
            <div class="col-lg-2 col-md-3 col-6">
                <div class="sr-brand-card">
                    <i class="bi bi-award-fill"></i>
                    <div class="sr-brand-name">& All Brands</div>
                    <div class="sr-brand-type">Every Shoe</div>
                </div>
            </div>
        </div>
    </div>
</section>


<!-- ============================= SHOE TYPES SECTION ============================= -->
<section class="sr-types-section font-ui">
    <div class="container">
        <div class="sr-section-title text-center mb-5">
            <h2>Materials & Repairs We Handle</h2>
            <div class="underline"></div>
            <p class="text-muted">Every material, every color, every repair — we cover it all</p>
        </div>

        <div class="row g-4">
            <div class="col-lg-3 col-md-6">
                <div class="sr-type-card">
                    <h5><i class="bi bi-layers"></i> Materials We Work With</h5>
                    <ul>
                        <li>Full-grain leather</li>
                        <li>Suede & nubuck</li>
                        <li>Patent leather</li>
                        <li>Canvas & fabric</li>
                        <li>Mesh & knit uppers</li>
                        <li>Exotic skins</li>
                        <li>Synthetic & vegan materials</li>
                    </ul>
                </div>
            </div>

            <div class="col-lg-3 col-md-6">
                <div class="sr-type-card">
                    <h5><i class="bi bi-tools"></i> Repairs We Do</h5>
                    <ul>
                        <li>Sole replacement</li>
                        <li>Heel repair & rebuild</li>
                        <li>Stitching & seam repair</li>
                        <li>Zipper replacement</li>
                        <li>Buckle & eyelet repair</li>
                        <li>Insole replacement</li>
                        <li>Upper reconstruction</li>
                    </ul>
                </div>
            </div>

            <div class="col-lg-3 col-md-6">
                <div class="sr-type-card">
                    <h5><i class="bi bi-palette"></i> Colors We Restore</h5>
                    <ul>
                        <li>Black & all dark shades</li>
                        <li>Brown, tan & cognac</li>
                        <li>Burgundy & wine</li>
                        <li>Navy & dark blue</li>
                        <li>White & cream</li>
                        <li>Grey & silver</li>
                        <li>Custom color matching</li>
                    </ul>
                </div>
            </div>

            <div class="col-lg-3 col-md-6">
                <div class="sr-type-card">
                    <h5><i class="bi bi-wrench"></i> Finishing Services</h5>
                    <ul>
                        <li>Professional polishing</li>
                        <li>Waterproofing treatment</li>
                        <li>Deep cleaning</li>
                        <li>Deodorizing</li>
                        <li>Shoe stretching</li>
                        <li>Conditioning & softening</li>
                        <li>Protective coating</li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="text-center mt-5">
            <p class="text-muted mb-2"><strong>All Shoe Styles Supported:</strong></p>
            <p class="text-muted">Oxfords • Derbys • Brogues • Loafers • Sneakers • Boots • Sandals • Heels • Stilettos • Wedges • Moccasins • Slip-ons • And More!</p>
        </div>
    </div>
</section>


<!-- ============================= LOCATION SECTION ============================= -->
<section class="sr-location-section font-ui">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-10">
                <div class="sr-location-card">
                    <h3><i class="bi bi-geo-alt-fill me-2"></i>Based in Al Karama, Dubai</h3>
                    <p class="mb-4" style="opacity:0.9;">Your trusted shoe repair specialist in the heart of Al Karama, serving all of Dubai</p>

                    <div class="sr-location-info">
                        <div class="sr-location-item">
                            <i class="bi bi-building"></i>
                            <span><strong>Location:</strong> Al Karama, Dubai, UAE</span>
                        </div>
                        <div class="sr-location-item">
                            <i class="bi bi-clock-fill"></i>
                            <span><strong>Working Hours:</strong> 24 Hours — 7 Days a Week</span>
                        </div>
                        <div class="sr-location-item">
                            <i class="bi bi-lightning-charge-fill"></i>
                            <span><strong>Repair Time:</strong> Most Repairs Completed Same Day</span>
                        </div>
                        <div class="sr-location-item">
                            <i class="bi bi-truck"></i>
                            <span><strong>Pickup & Delivery:</strong> Available Across All Dubai Areas</span>
                        </div>
                    </div>

                    <div class="sr-service-areas">
                        <h4>We Serve All Dubai Areas</h4>
                        <div class="sr-areas-grid">
                            <div class="sr-area-badge">Al Karama</div>
                            <div class="sr-area-badge">Bur Dubai</div>
                            <div class="sr-area-badge">Deira</div>
                            <div class="sr-area-badge">Downtown Dubai</div>
                            <div class="sr-area-badge">Dubai Marina</div>
                            <div class="sr-area-badge">JBR</div>
                            <div class="sr-area-badge">Business Bay</div>
                            <div class="sr-area-badge">JLT</div>
                            <div class="sr-area-badge">Dubai Mall</div>
                            <div class="sr-area-badge">Sheikh Zayed Rd</div>
                            <div class="sr-area-badge">Al Barsha</div>
                            <div class="sr-area-badge">Motor City</div>
                            <div class="sr-area-badge">Silicon Oasis</div>
                            <div class="sr-area-badge">International City</div>
                            <div class="sr-area-badge">Jumeirah</div>
                            <div class="sr-area-badge">Al Quoz</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<!-- ============================= WHY CHOOSE US ============================= -->
<section class="sr-why-section font-ui">
    <div class="container">
        <div class="sr-section-title text-center mb-5">
            <h2>Why Choose Our Shoe Repair Service?</h2>
            <div class="underline"></div>
        </div>

        <div class="row g-4">
            <div class="col-lg-3 col-md-6">
                <div class="sr-feature-box">
                    <i class="bi bi-lightning-charge"></i>
                    <h5>Same Day Repair</h5>
                    <p>Most repairs completed the same day. Drop off your shoes and collect them fully repaired within hours.</p>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="sr-feature-box">
                    <i class="bi bi-person-check"></i>
                    <h5>Expert Cobblers</h5>
                    <p>Skilled shoe craftsmen trained in all repair techniques from Goodyear welt resoling to luxury brand restoration.</p>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="sr-feature-box">
                    <i class="bi bi-gem"></i>
                    <h5>Premium Materials</h5>
                    <p>We use only high-quality replacement materials — soles, heels, thread, and dyes matched to your original shoe.</p>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="sr-feature-box">
                    <i class="bi bi-stars"></i>
                    <h5>Luxury Brand Care</h5>
                    <p>Specialists in Louboutin red soles, LV logos, Gucci hardware, and all designer footwear restoration.</p>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="sr-feature-box">
                    <i class="bi bi-cash-coin"></i>
                    <h5>Affordable Prices</h5>
                    <p>Repair always costs less than replacing your favorite pair. We offer fair, transparent pricing for all repairs.</p>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="sr-feature-box">
                    <i class="bi bi-truck"></i>
                    <h5>Pickup & Delivery</h5>
                    <p>We collect and deliver your shoes anywhere in Dubai. Convenient, insured, and hassle-free doorstep service.</p>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="sr-feature-box">
                    <i class="bi bi-award"></i>
                    <h5>Repair Guarantee</h5>
                    <p>Every repair comes with a quality guarantee. We stand behind our work and fix any issues at no extra cost.</p>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="sr-feature-box">
                    <i class="bi bi-star-fill"></i>
                    <h5>Trusted in Dubai</h5>
                    <p>Hundreds of happy customers trust us to restore their most valued footwear to perfect, wearable condition.</p>
                </div>
            </div>
        </div>
    </div>
</section>


<!-- ============================= EMERGENCY BANNER ============================= -->
<section class="sr-emergency-banner font-ui">
    <div class="container">
        <h3>Sole Worn Out? Heel Broken? Stitching Torn?</h3>
        <p>Bring Them In — We'll Have Them Good as New!</p>
        <a href="tel:+9710505090296" class="sr-emergency-phone">
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