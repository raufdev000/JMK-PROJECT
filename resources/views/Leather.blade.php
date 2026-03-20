<!doctype html>
<html lang="en">
  <head>
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-GVZJSM57W3"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-GVZJSM57W3');
</script> 
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Leather works</title>
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
    /* ===================== LEATHER REPAIR SECTION ===================== */
    :root {
        --primary-color: #871deb;
        --secondary-color: #5803eb;
        --accent-color: #2629d3;
        --dark-color: #1f2937;
        --light-gray: #6b7280;
        --bg-light: #f9fafb;
    }

    /* ===================== HERO ===================== */
    .lr-hero-section {
        background: linear-gradient(135deg, #ede9fe 0%, #ddd6fe 50%, #c4b5fd 100%);
        min-height: 520px;
        padding: 60px 0;
        position: relative;
        overflow: hidden;
    }

    .lr-hero-section::before {
        content: '';
        position: absolute;
        top: -100px; right: -100px;
        width: 400px; height: 400px;
        background: radial-gradient(circle, rgba(135,29,235,0.15) 0%, transparent 70%);
        border-radius: 50%;
    }

    .lr-hero-section::after {
        content: '';
        position: absolute;
        bottom: -80px; left: -80px;
        width: 300px; height: 300px;
        background: radial-gradient(circle, rgba(38,41,211,0.12) 0%, transparent 70%);
        border-radius: 50%;
    }

    .lr-hero-title {
        font-size: 3rem;
        font-weight: 800;
        color: #1f2937;
        line-height: 1.2;
    }

    .lr-hero-subtitle {
        font-size: 1.15rem;
        color: #4b5563;
        line-height: 1.7;
    }

    .lr-hero-badges .badge {
        font-size: 0.92rem;
        font-weight: 600;
        border-radius: 50px;
        background: white !important;
        color: #1f2937 !important;
        box-shadow: 0 2px 8px rgba(0,0,0,0.1);
    }

    .lr-hero-image-wrapper {
        width: 100%;
        overflow: hidden;
        border-radius: 1.25rem;
        box-shadow: 0 20px 50px rgba(135,29,235,0.25);
    }

    .lr-hero-image-wrapper img {
        width: 100%;
        height: auto;
        max-height: 460px;
        object-fit: cover;
        display: block;
    }

    /* ===================== SECTION TITLE ===================== */
    .lr-section-title h2 {
        font-size: 2.4rem;
        font-weight: 800;
        color: var(--dark-color);
        margin-bottom: 15px;
    }

    .lr-section-title .underline {
        width: 80px;
        height: 4px;
        background: linear-gradient(90deg, var(--primary-color), var(--accent-color));
        margin: 0 auto 20px;
        border-radius: 2px;
    }

    /* ===================== SERVICES CARDS ===================== */
    .lr-services-section {
        padding: 80px 0;
        background: var(--bg-light);
    }

    .lr-service-card {
        background: white;
        border-radius: 18px;
        padding: 32px;
        height: 100%;
        transition: all 0.3s ease;
        border: 2px solid transparent;
        box-shadow: 0 4px 15px rgba(0,0,0,0.06);
    }

    .lr-service-card:hover {
        transform: translateY(-10px);
        box-shadow: 0 20px 40px rgba(135,29,235,0.18);
        border-color: var(--primary-color);
    }

    .lr-service-icon {
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

    .lr-service-card h4 {
        font-size: 1.25rem;
        font-weight: 700;
        margin-bottom: 12px;
        color: var(--dark-color);
    }

    .lr-service-card p {
        color: var(--light-gray);
        margin-bottom: 0;
        font-size: 0.93rem;
        line-height: 1.65;
    }

    /* ===================== BRANDS SECTION ===================== */
    .lr-brands-section {
        padding: 80px 0;
        background: white;
    }

    .lr-brand-card {
        background: white;
        border-radius: 14px;
        padding: 20px 16px;
        text-align: center;
        transition: all 0.3s ease;
        border: 2px solid #f0ebff;
        box-shadow: 0 2px 10px rgba(0,0,0,0.05);
    }

    .lr-brand-card:hover {
        border-color: var(--primary-color);
        transform: translateY(-5px);
        box-shadow: 0 10px 25px rgba(135,29,235,0.15);
    }

    .lr-brand-card i {
        font-size: 2rem;
        color: var(--primary-color);
        margin-bottom: 10px;
        display: block;
    }

    .lr-brand-card .lr-brand-name {
        font-weight: 700;
        font-size: 0.98rem;
        color: var(--dark-color);
        margin-bottom: 4px;
    }

    .lr-brand-card .lr-brand-type {
        font-size: 0.78rem;
        color: var(--light-gray);
    }

    /* ===================== LEATHER TYPES ===================== */
    .lr-types-section {
        padding: 80px 0;
        background: var(--bg-light);
    }

    .lr-type-card {
        background: linear-gradient(135deg, #faf5ff 0%, #f3e8ff 100%);
        border-radius: 18px;
        padding: 28px;
        height: 100%;
        border: 2px solid #e9d5ff;
        transition: all 0.3s ease;
    }

    .lr-type-card:hover {
        border-color: var(--primary-color);
        transform: translateY(-6px);
        box-shadow: 0 12px 30px rgba(135,29,235,0.18);
    }

    .lr-type-card h5 {
        font-size: 1.15rem;
        font-weight: 700;
        color: var(--primary-color);
        margin-bottom: 15px;
        display: flex;
        align-items: center;
        gap: 10px;
    }

    .lr-type-card ul {
        list-style: none;
        padding: 0; margin: 0;
    }

    .lr-type-card ul li {
        padding: 7px 0;
        color: var(--light-gray);
        display: flex;
        align-items: flex-start;
        gap: 10px;
        font-size: 0.92rem;
    }

    .lr-type-card ul li::before {
        content: '✓';
        color: var(--primary-color);
        font-weight: bold;
        flex-shrink: 0;
    }

    /* ===================== COLORS SECTION ===================== */
    .lr-colors-section {
        padding: 80px 0;
        background: white;
    }

    .lr-color-card {
        background: var(--bg-light);
        border-radius: 18px;
        padding: 28px 24px;
        text-align: center;
        height: 100%;
        transition: all 0.3s ease;
        border: 2px solid transparent;
    }

    .lr-color-card:hover {
        border-color: var(--primary-color);
        transform: translateY(-6px);
        box-shadow: 0 12px 28px rgba(135,29,235,0.15);
        background: white;
    }

    .lr-color-dot {
        width: 56px;
        height: 56px;
        border-radius: 50%;
        margin: 0 auto 14px;
        border: 3px solid rgba(0,0,0,0.1);
        box-shadow: 0 4px 12px rgba(0,0,0,0.15);
    }

    .lr-color-card h5 {
        font-size: 1rem;
        font-weight: 700;
        margin-bottom: 6px;
        color: var(--dark-color);
    }

    .lr-color-card p {
        color: var(--light-gray);
        font-size: 0.85rem;
        margin-bottom: 0;
    }

    /* ===================== LOCATION SECTION ===================== */
    .lr-location-section {
        padding: 80px 0;
        background: linear-gradient(135deg, var(--primary-color), var(--accent-color));
        color: white;
    }

    .lr-location-card {
        background: rgba(255,255,255,0.15);
        border-radius: 22px;
        padding: 44px;
        backdrop-filter: blur(12px);
        border: 2px solid rgba(255,255,255,0.25);
    }

    .lr-location-card h3 {
        font-size: 2rem;
        font-weight: 800;
        margin-bottom: 12px;
    }

    .lr-location-info {
        display: flex;
        flex-direction: column;
        gap: 18px;
        margin-bottom: 30px;
    }

    .lr-location-item {
        display: flex;
        align-items: center;
        gap: 15px;
        font-size: 1.05rem;
    }

    .lr-location-item i {
        font-size: 1.5rem;
        color: #fbbf24;
        flex-shrink: 0;
    }

    .lr-service-areas {
        background: rgba(255,255,255,0.12);
        border-radius: 16px;
        padding: 28px;
    }

    .lr-service-areas h4 {
        font-size: 1.4rem;
        font-weight: 700;
        margin-bottom: 18px;
    }

    .lr-areas-grid {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(140px, 1fr));
        gap: 12px;
    }

    .lr-area-badge {
        background: rgba(255,255,255,0.2);
        padding: 9px 14px;
        border-radius: 10px;
        text-align: center;
        font-weight: 600;
        font-size: 0.88rem;
    }

    /* ===================== WHY CHOOSE US ===================== */
    .lr-why-section {
        padding: 80px 0;
        background: var(--bg-light);
    }

    .lr-feature-box {
        background: white;
        border-radius: 18px;
        padding: 32px 24px;
        text-align: center;
        height: 100%;
        transition: all 0.3s ease;
        border: 2px solid transparent;
    }

    .lr-feature-box:hover {
        border-color: var(--primary-color);
        transform: translateY(-6px);
        box-shadow: 0 12px 28px rgba(135,29,235,0.15);
    }

    .lr-feature-box i {
        font-size: 2.8rem;
        color: var(--primary-color);
        margin-bottom: 18px;
        display: block;
    }

    .lr-feature-box h5 {
        font-size: 1.1rem;
        font-weight: 700;
        margin-bottom: 10px;
        color: var(--dark-color);
    }

    .lr-feature-box p {
        color: var(--light-gray);
        margin-bottom: 0;
        font-size: 0.91rem;
    }

    /* ===================== EMERGENCY BANNER ===================== */
    .lr-emergency-banner {
        background: linear-gradient(135deg, #dc2626, #b91c1c);
        color: white;
        padding: 50px 0;
        text-align: center;
        position: relative;
        overflow: hidden;
    }

    .lr-emergency-banner::before {
        content: '';
        position: absolute;
        top: 0; left: 0; right: 0; bottom: 0;
        background: url("data:image/svg+xml,%3Csvg width='60' height='60' viewBox='0 0 60 60' xmlns='http://www.w3.org/2000/svg'%3E%3Cg fill='none' fill-rule='evenodd'%3E%3Cg fill='%23ffffff' fill-opacity='0.04'%3E%3Cpath d='M36 34v-4h-2v4h-4v2h4v4h2v-4h4v-2h-4zm0-30V0h-2v4h-4v2h4v4h2V6h4V4h-4zM6 34v-4H4v4H0v2h4v4h2v-4h4v-2H6zM6 4V0H4v4H0v2h4v4h2V6h4V4H6z'/%3E%3C/g%3E%3C/g%3E%3C/svg%3E");
    }

    .lr-emergency-banner h3 {
        font-size: 2.2rem;
        font-weight: 800;
        margin-bottom: 10px;
        position: relative;
    }

    .lr-emergency-banner p {
        font-size: 1.2rem;
        margin-bottom: 20px;
        opacity: 0.9;
        position: relative;
    }

    .lr-emergency-phone {
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

    .lr-emergency-phone:hover { color: white; }

    /* ===================== RESPONSIVE ===================== */
    @media (max-width: 991px) { .lr-hero-title { font-size: 2.4rem; } }

    @media (max-width: 767px) {
        .lr-hero-title { font-size: 1.9rem; }
        .lr-hero-subtitle { font-size: 1rem; }
        .lr-section-title h2 { font-size: 1.9rem; }
        .lr-emergency-phone { font-size: 1.7rem; }
        .lr-emergency-banner h3 { font-size: 1.7rem; }
        .d-flex.gap-3 { flex-direction: column; gap: 0.75rem !important; }
        .btn-lg { width: 100%; }
        .lr-location-card { padding: 28px 20px; }
    }

    @media (max-width: 480px) { .lr-hero-title { font-size: 1.6rem; } }
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
<section class="lr-hero-section py-5 font-ui">
    <div class="container position-relative" style="z-index:1;">
        <div class="row align-items-center g-4">
            <div class="col-lg-6 order-lg-1 order-2">
                <h1 class="lr-hero-title mb-4">
                    Leather Damaged? <span style="color: var(--primary-color);">We Restore It Perfectly!</span>
                </h1>
                <p class="lr-hero-subtitle mb-4">
                    Professional leather repair and restoration for handbags, jackets, shoes, belts, wallets, and furniture. From everyday items to luxury designer brands — Gucci, Louis Vuitton, Prada, Hermès, Coach, and more. All leather types, all colors, all restored to premium condition.
                </p>

                <div class="lr-hero-badges mb-4 d-flex flex-wrap gap-2">
                    <span class="badge p-3"><i class="bi bi-clock me-2"></i>Same Day Service</span>
                    <span class="badge p-3"><i class="bi bi-geo-alt me-2"></i>Al Karama, Dubai</span>
                    <span class="badge p-3"><i class="bi bi-stars me-2"></i>All Luxury Brands</span>
                    <span class="badge p-3"><i class="bi bi-palette me-2"></i>Custom Color Match</span>
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
                <div class="lr-hero-image-wrapper">
                    <img src="../images/leather.webp" alt="Leather Repair Dubai">
                </div>
            </div>
        </div>
    </div>
</section>


<!-- ============================= SERVICES SECTION ============================= -->
<section class="lr-services-section font-ui">
    <div class="container">
        <div class="lr-section-title text-center mb-5">
            <h2>Our Leather Repair Services</h2>
            <div class="underline"></div>
            <p class="text-muted">Complete leather restoration for all item types, brands, and damage levels</p>
        </div>

        <div class="row g-4">
            <div class="col-lg-4 col-md-6">
                <div class="lr-service-card">
                    <div class="lr-service-icon"><i class="bi bi-handbag"></i></div>
                    <h4>Handbag & Purse Repair</h4>
                    <p>Full restoration of ladies' handbags, clutches, tote bags, crossbody bags, satchels, and designer purses. We fix torn handles, broken zippers, worn corners, scratched surfaces, peeling edges, loose stitching, and damaged lining. Hardware replacement (buckles, chains, clasps) and complete handle reconstruction. Specialists in Louis Vuitton, Gucci, Prada, Coach, Michael Kors, and Kate Spade.</p>
                </div>
            </div>

            <div class="col-lg-4 col-md-6">
                <div class="lr-service-card">
                    <div class="lr-service-icon"><i class="bi bi-person-standing"></i></div>
                    <h4>Leather Jacket & Garment Restoration</h4>
                    <p>Scratches, cracks, tears, scuffs, and faded spots on leather jackets, blazers, coats, vests, and pants professionally restored. We handle biker jackets, bomber jackets, motorcycle jackets, vintage outerwear, and fashion jackets. Includes zipper replacement, lining fixes, pocket repair, collar restoration, and complete color restoration for fading or sun damage.</p>
                </div>
            </div>

            <div class="col-lg-4 col-md-6">
                <div class="lr-service-card">
                    <div class="lr-service-icon"><i class="bi bi-boot"></i></div>
                    <h4>Leather Shoe & Boot Repair</h4>
                    <p>Complete repair for leather shoes, boots, sandals, loafers, and oxfords for men and women. We fix scuffs, scratches, heel damage, sole separation, torn stitching, and cracked leather. Services include heel replacement, sole stitching, zipper repair, buckle replacement, and full reconditioning. Color restoration in black, brown, tan, burgundy, navy, or any custom shade.</p>
                </div>
            </div>

            <div class="col-lg-4 col-md-6">
                <div class="lr-service-card">
                    <div class="lr-service-icon"><i class="bi bi-palette"></i></div>
                    <h4>Color Refinishing & Dyeing</h4>
                    <p>Expert color matching and refinishing to restore faded, stained, discolored, or sun-bleached leather to brand new condition. Full recoloring, touch-up dyeing, color change service, edge painting, patina restoration, and protective finishing. Premium leather dyes that penetrate deeply for long-lasting, fade-resistant results on all leather types including smooth, nubuck, suede, and patent leather.</p>
                </div>
            </div>

            <div class="col-lg-4 col-md-6">
                <div class="lr-service-card">
                    <div class="lr-service-icon"><i class="bi bi-scissors"></i></div>
                    <h4>Stitching & Patching</h4>
                    <p>Strong stitching, seam reinforcement, lining repair, and professional patchwork for all leather brands. We repair torn seams, burst stitching, frayed edges, ripped lining, and structural damage. Hand-stitching for delicate items, machine-stitching for strength. Invisible patches for holes, tears, and burn marks using matching leather pieces and color-matched waxed thread.</p>
                </div>
            </div>

            <div class="col-lg-4 col-md-6">
                <div class="lr-service-card">
                    <div class="lr-service-icon"><i class="bi bi-house-heart"></i></div>
                    <h4>Furniture & Upholstery Repair</h4>
                    <p>Complete restoration of leather sofas, chairs, recliners, ottomans, car seats, and office furniture. We fix cracks, peeling, fading, scratches, cat/dog damage, tears, and burns. Services include crack filling, tear patching, seam repair, cushion restuffing, and full reupholstery. Color restoration through professional dyeing in any shade with protective coatings to prevent future damage.</p>
                </div>
            </div>
        </div>
    </div>
</section>


<!-- ============================= BRANDS SECTION ============================= -->
<section class="lr-brands-section font-ui">
    <div class="container">
        <div class="lr-section-title text-center mb-5">
            <h2>Luxury & Designer Brands We Restore</h2>
            <div class="underline"></div>
            <p class="text-muted">From prestigious fashion houses to everyday leather goods — every brand gets expert craftsmanship</p>
        </div>

        <div class="row g-3">
            <div class="col-lg-2 col-md-3 col-6">
                <div class="lr-brand-card">
                    <i class="bi bi-bag-heart-fill"></i>
                    <div class="lr-brand-name">Louis Vuitton</div>
                    <div class="lr-brand-type">Luxury Fashion</div>
                </div>
            </div>
            <div class="col-lg-2 col-md-3 col-6">
                <div class="lr-brand-card">
                    <i class="bi bi-bag-heart-fill"></i>
                    <div class="lr-brand-name">Gucci</div>
                    <div class="lr-brand-type">Luxury Fashion</div>
                </div>
            </div>
            <div class="col-lg-2 col-md-3 col-6">
                <div class="lr-brand-card">
                    <i class="bi bi-bag-heart-fill"></i>
                    <div class="lr-brand-name">Hermès</div>
                    <div class="lr-brand-type">Ultra Luxury</div>
                </div>
            </div>
            <div class="col-lg-2 col-md-3 col-6 font-ui">
                <div class="lr-brand-card">
                    <i class="bi bi-bag-heart-fill"></i>
                    <div class="lr-brand-name">Prada</div>
                    <div class="lr-brand-type">Luxury Fashion</div>
                </div>
            </div>
            <div class="col-lg-2 col-md-3 col-6">
                <div class="lr-brand-card">
                    <i class="bi bi-bag-heart-fill"></i>
                    <div class="lr-brand-name">Chanel</div>
                    <div class="lr-brand-type">Luxury Fashion</div>
                </div>
            </div>
            <div class="col-lg-2 col-md-3 col-6">
                <div class="lr-brand-card">
                    <i class="bi bi-bag-heart-fill"></i>
                    <div class="lr-brand-name">Coach</div>
                    <div class="lr-brand-type">Premium Brand</div>
                </div>
            </div>
            <div class="col-lg-2 col-md-3 col-6">
                <div class="lr-brand-card">
                    <i class="bi bi-bag-heart-fill"></i>
                    <div class="lr-brand-name">Michael Kors</div>
                    <div class="lr-brand-type">Premium Brand</div>
                </div>
            </div>
            <div class="col-lg-2 col-md-3 col-6">
                <div class="lr-brand-card">
                    <i class="bi bi-bag-heart-fill"></i>
                    <div class="lr-brand-name">Kate Spade</div>
                    <div class="lr-brand-type">Fashion Brand</div>
                </div>
            </div>
            <div class="col-lg-2 col-md-3 col-6">
                <div class="lr-brand-card">
                    <i class="bi bi-bag-heart-fill"></i>
                    <div class="lr-brand-name">Burberry</div>
                    <div class="lr-brand-type">Luxury Brand</div>
                </div>
            </div>
            <div class="col-lg-2 col-md-3 col-6">
                <div class="lr-brand-card">
                    <i class="bi bi-bag-heart-fill"></i>
                    <div class="lr-brand-name">Bottega Veneta</div>
                    <div class="lr-brand-type">Luxury Brand</div>
                </div>
            </div>
            <div class="col-lg-2 col-md-3 col-6">
                <div class="lr-brand-card">
                    <i class="bi bi-bag-heart-fill"></i>
                    <div class="lr-brand-name">Dior</div>
                    <div class="lr-brand-type">Luxury Fashion</div>
                </div>
            </div>
            <div class="col-lg-2 col-md-3 col-6">
                <div class="lr-brand-card">
                    <i class="bi bi-bag-heart-fill"></i>
                    <div class="lr-brand-name">& All Brands</div>
                    <div class="lr-brand-type">Every Brand</div>
                </div>
            </div>
        </div>
    </div>
</section>


<!-- ============================= LEATHER TYPES SECTION ============================= -->
<section class="lr-types-section font-ui">
    <div class="container">
        <div class="lr-section-title text-center mb-5">
            <h2>All Leather Types We Work With</h2>
            <div class="underline"></div>
            <p class="text-muted">Full-grain to exotic leathers — we restore every material with the right technique</p>
        </div>

        <div class="row g-4">
            <div class="col-lg-3 col-md-6">
                <div class="lr-type-card">
                    <h5><i class="bi bi-layers"></i> Leather Grades</h5>
                    <ul>
                        <li>Full-grain leather</li>
                        <li>Top-grain leather</li>
                        <li>Genuine leather</li>
                        <li>Bonded leather</li>
                        <li>Corrected-grain leather</li>
                        <li>Split leather</li>
                        <li>Reconstituted leather</li>
                    </ul>
                </div>
            </div>

            <div class="col-lg-3 col-md-6">
                <div class="lr-type-card">
                    <h5><i class="bi bi-grid-1x2"></i> Leather Finishes</h5>
                    <ul>
                        <li>Smooth / polished leather</li>
                        <li>Nubuck leather</li>
                        <li>Suede leather</li>
                        <li>Patent leather</li>
                        <li>Waxed / pull-up leather</li>
                        <li>Distressed leather</li>
                        <li>Matte & glossy finishes</li>
                    </ul>
                </div>
            </div>

            <div class="col-lg-3 col-md-6">
                <div class="lr-type-card">
                    <h5><i class="bi bi-bag"></i> Items We Repair</h5>
                    <ul>
                        <li>Handbags & purses</li>
                        <li>Jackets & coats</li>
                        <li>Shoes & boots</li>
                        <li>Belts & wallets</li>
                        <li>Sofas & chairs</li>
                        <li>Car seats & interiors</li>
                        <li>Gloves & accessories</li>
                    </ul>
                </div>
            </div>

            <div class="col-lg-3 col-md-6">
                <div class="lr-type-card">
                    <h5><i class="bi bi-wrench"></i> Damage We Fix</h5>
                    <ul>
                        <li>Scratches & scuffs</li>
                        <li>Cracks & tears</li>
                        <li>Color fading & stains</li>
                        <li>Peeling & flaking</li>
                        <li>Broken hardware</li>
                        <li>Torn stitching & seams</li>
                        <li>Water & ink damage</li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="text-center mt-5">
            <p class="text-muted mb-2"><strong>Colors We Restore & Match:</strong></p>
            <p class="text-muted">Black • Brown • Tan • Burgundy • Navy • Grey • Cream • White • Beige • Red • Green • Blue • Pink • Purple • And Any Custom Color!</p>
        </div>
    </div>
</section>


<!-- ============================= COLORS SECTION ============================= -->
<section class="lr-colors-section font-ui">
    <div class="container">
        <div class="lr-section-title text-center mb-5">
            <h2>Expert Color Matching & Restoration</h2>
            <div class="underline"></div>
            <p class="text-muted">We match and restore any leather color — from classic shades to completely custom hues</p>
        </div>

        <div class="row g-3 justify-content-center">
            <div class="col-lg-2 col-md-3 col-4">
                <div class="lr-color-card">
                    <div class="lr-color-dot" style="background:#1a1a1a;"></div>
                    <h5>Black</h5>
                    <p>Classic & Formal</p>
                </div>
            </div>
            <div class="col-lg-2 col-md-3 col-4">
                <div class="lr-color-card">
                    <div class="lr-color-dot" style="background:#6b3a2a;"></div>
                    <h5>Brown</h5>
                    <p>Warm & Natural</p>
                </div>
            </div>
            <div class="col-lg-2 col-md-3 col-4">
                <div class="lr-color-card">
                    <div class="lr-color-dot" style="background:#c19a6b;"></div>
                    <h5>Tan</h5>
                    <p>Light & Casual</p>
                </div>
            </div>
            <div class="col-lg-2 col-md-3 col-4">
                <div class="lr-color-card">
                    <div class="lr-color-dot" style="background:#722f37;"></div>
                    <h5>Burgundy</h5>
                    <p>Rich & Elegant</p>
                </div>
            </div>
            <div class="col-lg-2 col-md-3 col-4">
                <div class="lr-color-card">
                    <div class="lr-color-dot" style="background:#1b3a6b;"></div>
                    <h5>Navy</h5>
                    <p>Deep & Refined</p>
                </div>
            </div>
            <div class="col-lg-2 col-md-3 col-4">
                <div class="lr-color-card">
                    <div class="lr-color-dot" style="background:#6b7280;"></div>
                    <h5>Grey</h5>
                    <p>Modern & Sleek</p>
                </div>
            </div>
            <div class="col-lg-2 col-md-3 col-4">
                <div class="lr-color-card">
                    <div class="lr-color-dot" style="background:#f5f0e8; border:3px solid #ddd;"></div>
                    <h5>Cream</h5>
                    <p>Soft & Classic</p>
                </div>
            </div>
            <div class="col-lg-2 col-md-3 col-4">
                <div class="lr-color-card">
                    <div class="lr-color-dot" style="background: linear-gradient(135deg, #871deb, #2629d3);"></div>
                    <h5>Custom</h5>
                    <p>Any Color You Need</p>
                </div>
            </div>
        </div>
    </div>
</section>


<!-- ============================= LOCATION SECTION ============================= -->
<section class="lr-location-section font-ui">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-10">
                <div class="lr-location-card">
                    <h3><i class="bi bi-geo-alt-fill me-2"></i>Based in Al Karama, Dubai</h3>
                    <p class="mb-4" style="opacity:0.9;">Your trusted leather restoration specialist in the heart of Al Karama, serving all of Dubai</p>

                    <div class="lr-location-info">
                        <div class="lr-location-item">
                            <i class="bi bi-building"></i>
                            <span><strong>Location:</strong> Al Karama, Dubai, UAE</span>
                        </div>
                        <div class="lr-location-item">
                            <i class="bi bi-clock-fill"></i>
                            <span><strong>Working Hours:</strong> 24 Hours — 7 Days a Week</span>
                        </div>
                        <div class="lr-location-item">
                            <i class="bi bi-lightning-charge-fill"></i>
                            <span><strong>Service Time:</strong> Minor Repairs Same Day — Full Restoration 1–3 Days</span>
                        </div>
                        <div class="lr-location-item">
                            <i class="bi bi-truck"></i>
                            <span><strong>Pickup & Delivery:</strong> Available Across All Dubai Areas</span>
                        </div>
                    </div>

                    <div class="lr-service-areas">
                        <h4>We Serve All Dubai Areas</h4>
                        <div class="lr-areas-grid">
                            <div class="lr-area-badge">Al Karama</div>
                            <div class="lr-area-badge">Bur Dubai</div>
                            <div class="lr-area-badge">Deira</div>
                            <div class="lr-area-badge">Downtown Dubai</div>
                            <div class="lr-area-badge">Dubai Marina</div>
                            <div class="lr-area-badge">JBR</div>
                            <div class="lr-area-badge">Business Bay</div>
                            <div class="lr-area-badge">JLT</div>
                            <div class="lr-area-badge">Dubai Mall</div>
                            <div class="lr-area-badge">Sheikh Zayed Rd</div>
                            <div class="lr-area-badge">Al Barsha</div>
                            <div class="lr-area-badge">Motor City</div>
                            <div class="lr-area-badge">Silicon Oasis</div>
                            <div class="lr-area-badge">International City</div>
                            <div class="lr-area-badge">Jumeirah</div>
                            <div class="lr-area-badge">Al Quoz</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<!-- ============================= WHY CHOOSE US ============================= -->
<section class="lr-why-section font-ui">
    <div class="container">
        <div class="lr-section-title text-center mb-5">
            <h2>Why Choose Our Leather Service?</h2>
            <div class="underline"></div>
        </div>

        <div class="row g-4">
            <div class="col-lg-3 col-md-6">
                <div class="lr-feature-box">
                    <i class="bi bi-person-check"></i>
                    <h5>Master Craftsmen</h5>
                    <p>Skilled leather artisans with years of experience restoring all leather types from everyday to ultra-luxury designer goods.</p>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="lr-feature-box">
                    <i class="bi bi-gem"></i>
                    <h5>Premium Materials</h5>
                    <p>We use only premium leather dyes, waxed threads, and hardware that match the original quality of your item.</p>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="lr-feature-box">
                    <i class="bi bi-palette"></i>
                    <h5>Perfect Color Match</h5>
                    <p>Expert color matching for any shade — classic or custom. We mix and match dyes until the color is indistinguishable from the original.</p>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="lr-feature-box">
                    <i class="bi bi-stars"></i>
                    <h5>Luxury Brand Experts</h5>
                    <p>Specialists in high-end brands — Louis Vuitton, Gucci, Hermès, Prada — handled with the care and respect they deserve.</p>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="lr-feature-box">
                    <i class="bi bi-cash-coin"></i>
                    <h5>Affordable Restoration</h5>
                    <p>Professional restoration always costs less than replacing your valued leather item. We help you preserve what matters.</p>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="lr-feature-box">
                    <i class="bi bi-truck"></i>
                    <h5>Pickup & Delivery</h5>
                    <p>We collect your item from anywhere in Dubai and deliver it back fully restored. Convenient, insured, and hassle-free.</p>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="lr-feature-box">
                    <i class="bi bi-award"></i>
                    <h5>Quality Guarantee</h5>
                    <p>Every restoration comes with a quality guarantee. We're not done until you're completely satisfied with the result.</p>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="lr-feature-box">
                    <i class="bi bi-star-fill"></i>
                    <h5>Trusted in Dubai</h5>
                    <p>Hundreds of happy customers trust us to restore their most valued leather goods to like-new condition.</p>
                </div>
            </div>
        </div>
    </div>
</section>


<!-- ============================= EMERGENCY BANNER ============================= -->
<section class="lr-emergency-banner font-ui">
    <div class="container">
        <h3>Leather Scratched, Torn, or Faded?</h3>
        <p>Don't Replace It — Let Us Restore It!</p>
        <a href="tel:+9710505090296" class="lr-emergency-phone">
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