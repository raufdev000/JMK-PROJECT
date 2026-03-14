<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- SEO Meta Tags -->
    <title>JMK Repairs Dubai - Watch, Phone, Shoe & Lock Repair | Al Karama</title>
    <meta name="description" content="JMK Repairs Dubai offers professional watch repair, phone repair, shoe repair, key duplicating, lock repairing and leather works in Al Karama, Dubai. Fast & affordable service.">
    <meta name="keywords" content="watch repair dubai, phone repair dubai, shoe repair dubai, key duplicating dubai, lock repair dubai, leather repair dubai, al karama repair shop">
    <meta name="robots" content="index, follow">
    <link rel="canonical" href="https://jmkrepairs.com/">

    <!-- Open Graph (WhatsApp/Facebook sharing) -->
    <meta property="og:title" content="JMK Repairs Dubai - Professional Repair Services">
    <meta property="og:description" content="Watch, phone, shoe, lock & leather repair in Al Karama Dubai. Fast, affordable & trusted service.">
    <meta property="og:image" content="{{ asset('images/jmk_logo.png') }}">
    <meta property="og:url" content="https://jmkrepairs.com/">
    <meta property="og:type" content="website">

    <!-- Twitter Card -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="JMK Repairs Dubai - Professional Repair Services">
    <meta name="twitter:description" content="Watch, phone, shoe, lock & leather repair in Al Karama Dubai.">
    <meta name="twitter:image" content="{{ asset('images/jmk_logo.png') }}">

    <!-- Favicon -->
    <link rel="icon" type="image/png" href="{{ asset('images/jmk_logo.png') }}">
    <link rel="shortcut icon" type="image/png" href="{{ asset('images/jmk_logo.png') }}">
    <link rel="apple-touch-icon" href="{{ asset('images/jmk_logo.png') }}">

    <!-- CSS -->
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;700&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">

    <!-- GSAP -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.5/gsap.min.js" defer></script>

    <!-- Schema Markup for Local Business -->
    <!-- <script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@type": "LocalBusiness",
      "name": "JMK Repairs Dubai",
      "description": "Professional repair services for watches, phones, shoes, locks, keys and leather goods in Al Karama, Dubai.",
      "url": "https://jmkrepairs.com",
      "telephone": "+9710505090296",
      "email": "Jumakhanzhob1@gmail.com",
      "address": {
        "@type": "PostalAddress",
        "streetAddress": "Al Karama",
        "addressLocality": "Dubai",
        "addressCountry": "AE"
      },
      "geo": {
        "@type": "GeoCoordinates",
        "latitude": "25.2354",
        "longitude": "55.3000"
      },
      "openingHours": "Mo-Su 09:00-21:00",
      "priceRange": "$$",
      "image": "https://jmkrepairs.com/images/jmk_logo.png",
      "sameAs": []
    }
    </script> -->

     <style>
      /* Loading Screen Styles */
      .loading-screen {
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background: #0a0a0a;
        display: flex;
        justify-content: center;
        align-items: center;
        flex-direction: column;
        z-index: 9999;
        overflow: hidden;
      }

      .lock-container {
        position: relative;
        width: 300px;
        height: 300px;
      }

      /* SVG Animations */
      #lockSvg {
        width: 100%;
        height: 100%;
        filter: drop-shadow(0 10px 30px rgba(0,0,0,0.5));
      }

      .lock-body-svg {
        fill: url(#lockGradient);
      }

      .lock-shackle-svg {
        fill: none;
        stroke: #b8b8b8;
        stroke-width: 12;
        stroke-linecap: round;
        transform-origin: 30% 100%;
      }

      .keyhole-svg {
        fill: #1a1a1a;
      }

      .key-svg {
        fill: url(#keyGradient);
        opacity: 0;
        transform-origin: center;
      }

      .glow-circle {
        fill: url(#glowGradient);
        opacity: 0;
      }

      /* Loading Text */
      .loading-text-container {
        margin-top: 40px;
        text-align: center;
      }

      .loading-text {
        font-family: 'Poppins', sans-serif;
        font-size: 1.5rem;
        font-weight: 600;
        color: #fff;
        letter-spacing: 4px;
        text-transform: uppercase;
        opacity: 0;
      }

      .dots {
        display: inline-block;
      }

      .dot {
        display: inline-block;
        width: 8px;
        height: 8px;
        background: #FFD700;
        border-radius: 50%;
        margin: 0 3px;
        animation: dotPulse 1.5s infinite;
      }

      .dot:nth-child(2) { animation-delay: 0.2s; }
      .dot:nth-child(3) { animation-delay: 0.4s; }

      @keyframes dotPulse {
        0%, 100% { opacity: 0.3; transform: scale(0.8); }
        50% { opacity: 1; transform: scale(1.2); }
      }

      @media (max-width: 768px) {
        .lock-container {
          width: 250px;
          height: 250px;
        }
        .loading-text {
          font-size: 1.2rem;
        }
      }

      @media (max-width: 576px) {
        .lock-container {
          width: 200px;
          height: 200px;
        }
        .loading-text {
          font-size: 1rem;
          letter-spacing: 2px;
        }
      }

      /* Hide main content initially */
      body.loading {
        overflow: hidden;
      }

      .main-content {
        opacity: 0;
      }
    </style>
  </head>
  <body class="loading">

 <div class="loading-screen">
  <div class="lock-container">
    <svg id="lockSvg" viewBox="0 0 200 220" role="img" aria-label="JMK Repairs Loading Animation">
      <!-- Gradients -->
      <defs>
        <linearGradient id="lockGradient" x1="0%" y1="0%" x2="100%" y2="100%">
          <stop offset="0%" style="stop-color:#d4d4d4;stop-opacity:1" />
          <stop offset="100%" style="stop-color:#a0a0a0;stop-opacity:1" />
        </linearGradient>

        <linearGradient id="keyGradient" x1="0%" y1="0%" x2="100%" y2="100%">
          <stop offset="0%" style="stop-color:#FFD700;stop-opacity:1" />
          <stop offset="100%" style="stop-color:#FFA500;stop-opacity:1" />
        </linearGradient>

        <radialGradient id="glowGradient">
          <stop offset="0%" style="stop-color:#FFD700;stop-opacity:0.6" />
          <stop offset="100%" style="stop-color:#FFD700;stop-opacity:0" />
        </radialGradient>
      </defs>

      <!-- Glow Effect -->
      <circle class="glow-circle" cx="100" cy="110" r="80"/>

      <!-- Lock Shackle -->
      <path class="lock-shackle-svg"
            d="M 70 70 Q 70 40, 100 40 Q 130 40, 130 70"
            stroke-width="14"/>

      <!-- Lock Body -->
      <rect class="lock-body-svg" x="55" y="85" width="90" height="70" rx="12"/>

      <!-- Keyhole -->
      <circle class="keyhole-svg" cx="100" cy="115" r="8"/>
      <path class="keyhole-svg" d="M 96 120 L 104 120 L 102 135 L 98 135 Z"/>

      <!-- Key (starts off-screen) -->
      <g class="key-svg" transform="translate(-100, 110)">
        <!-- Key Bow (handle) -->
        <circle cx="0" cy="0" r="15" fill="url(#keyGradient)"/>
        <circle cx="0" cy="0" r="6" fill="#1a1a1a"/>

        <!-- Key Blade -->
        <rect x="12" y="-4" width="60" height="8" rx="2" fill="url(#keyGradient)"/>

        <!-- Key Teeth -->
        <rect x="52" y="-8" width="4" height="6" fill="url(#keyGradient)"/>
        <rect x="58" y="-10" width="4" height="10" fill="url(#keyGradient)"/>
        <rect x="64" y="-8" width="4" height="7" fill="url(#keyGradient)"/>

        <!-- Key Tip -->
        <polygon points="72,-4 78,0 72,4" fill="url(#keyGradient)"/>
      </g>
    </svg>
  </div>

  <!-- Loading Text -->
  <div class="loading-text-container">
    <div class="loading-text"></div>
  </div>
</div>

    <!-- Main Content -->
    <div class="main-content">
<header class="hero-section font-ui">

  <!-- NAVBAR -->
 <nav class="navbar navbar-expand-lg navbar-dark bg-transparent position-absolute top-0 start-0 w-100 py-3" aria-label="Main Navigation">
    <div class="container">

      <!-- LOGO LEFT -->
      <a class="navbar-brand d-flex align-items-center" href="{{ route('index') }}" aria-label="JMK Repairs Home">
        <img src="../images/jmk_logo.png" alt="JMK Repairs Dubai Logo" height="55" width="70" class="me-2">
        <span class="fw-semibold shop-name d-none d-lg-block">Juma khan shoes & watches repairing</span>
      </a>

      <!-- TOGGLER -->
      <button class="navbar-toggler border-0 shadow-none red-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mainNavbar" aria-controls="mainNavbar" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <!-- LINKS RIGHT -->
      <div class="collapse navbar-collapse justify-content-end" id="mainNavbar">
        <ul class="navbar-nav gap-lg-4 text-center text-lg-start">

          <li class="nav-item">
            <a class="nav-link active-nav" href="{{ route('index') }}" aria-current="page">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ route('about') }}">About</a>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="{{ route('contact') }}">Contact</a>
          </li>

         <!-- DROPDOWN -->
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="{{ route('services') }}" role="button" data-bs-toggle="dropdown" aria-expanded="false" aria-label="Services dropdown">
              Services
            </a>
            <ul class="dropdown-menu dropdown-menu-dark dropdown-menu-end">
              <li><a class="dropdown-item" href="{{ route('Lock') }}">Lock Repairing</a></li>
              <li><a class="dropdown-item" href="{{ route('Phone') }}">Phone Repairing</a></li>
              <li><a class="dropdown-item" href="{{ route('Watches') }}">Watch Repairing</a></li>
              <li><a class="dropdown-item" href="{{ route('leather') }}">Leather Work's</a></li>
              <li><a class="dropdown-item" href="{{ route('Shoe') }}">Shoe Repairing</a></li>
              <li><a class="dropdown-item" href="{{ route('Key') }}">Key Duplicating</a></li>
              <li><a class="dropdown-item" href="{{ route('suitcase') }}">Suitcase Repairing</a></li>
              <li><a class="dropdown-item" href="{{ route('Access') }}">Access Card Repairing</a></li>
              <li><a class="dropdown-item" href="{{ route('lostcar') }}">Lost Car Keys</a></li>
              <li><a class="dropdown-item" href="{{ route('losthome') }}">Lost Home Keys</a></li>
            </ul>
          </li>

        </ul>
      </div>
    </div>
  </nav>

<!-- WhatsApp Floating Button -->
<div class="whatsapp-floating-btn">
  <a href="https://wa.me/+9710505090296" target="_blank" rel="noopener noreferrer" class="whatsapp-float-link" aria-label="Contact JMK Repairs on WhatsApp">
    <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" fill="currentColor" class="bi bi-whatsapp" viewBox="0 0 16 16" aria-hidden="true">
      <path d="M13.601 2.326A7.854 7.854 0 0 0 7.994 0C3.627 0 .068 3.558.064 7.926c0 1.399.366 2.76 1.057 3.965L0 16l4.204-1.102a7.933 7.933 0 0 0 3.79.965h.004c4.368 0 7.926-3.558 7.93-7.93A7.898 7.898 0 0 0 13.6 2.326zM7.994 14.521a6.573 6.573 0 0 1-3.356-.92l-.24-.144-2.494.654.666-2.433-.156-.251a6.56 6.56 0 0 1-1.007-3.505c0-3.626 2.957-6.584 6.591-6.584a6.56 6.56 0 0 1 4.66 1.931 6.557 6.557 0 0 1 1.928 4.66c-.004 3.639-2.961 6.592-6.592 6.592zm3.615-4.934c-.197-.099-1.17-.578-1.353-.646-.182-.065-.315-.099-.445.099-.133.197-.513.646-.627.775-.114.133-.232.148-.43.05-.197-.1-.836-.308-1.592-.985-.59-.525-.985-1.175-1.103-1.372-.114-.198-.011-.304.088-.403.087-.088.197-.232.296-.346.1-.114.133-.198.198-.33.065-.134.034-.248-.015-.347-.05-.099-.445-1.076-.612-1.47-.16-.389-.323-.335-.445-.34-.114-.007-.247-.007-.38-.007a.729.729 0 0 0-.529.247c-.182.198-.691.677-.691 1.654 0 .977.71 1.916.81 2.049.098.133 1.394 2.132 3.383 2.992.47.205.84.326 1.129.418.475.152.904.129 1.246.08.38-.058 1.171-.48 1.338-.943.164-.464.164-.86.114-.943-.049-.084-.182-.133-.38-.232z"/>
    </svg>
    <span class="whatsapp-text">Call Us</span>
    <span class="online-dot"></span>
  </a>
</div>

 <div class="hero-image mb-0">
  <img src="{{ asset('images/pexels-parimoofarhaan-29625344 (1).webp') }}"
       alt="JMK Repairs Dubai - Professional Repair Services in Al Karama"
       width="1200" height="600"
       fetchpriority="high">

  <!-- Hero Text Carousel Overlay -->
  <div class="hero-text-overlay">
    <div class="container">
      <div class="hero-content">
        <!-- Brand Badge -->
        <div class="brand-badge">
          <span class="badge-icon" aria-hidden="true">⚡</span>
          <span>Trusted Since Years</span>
        </div>

        <!-- Carousel Text Container -->
        <div class="carousel-text-wrapper">
          <h1 class="hero-main-title">Jumma Khan</h1>
          <div class="rotating-text-container" aria-live="polite">
            <div class="rotating-text">
              <span class="text-item active">Watches & Shoes Repairing</span>
              <span class="text-item">Expert Watch Restoration</span>
              <span class="text-item">Premium Shoe Care Service</span>
              <span class="text-item">Quality You Can Trust</span>
            </div>
          </div>
        </div>

        <!-- Tagline -->
        <p class="hero-tagline font-ui">Where Precision Meets Craftsmanship</p>

        <!-- CTA Buttons -->
        <div class="hero-cta-buttons font-ui">
          <a href="tel:+9710505090296" class="cta-btn primary-cta" aria-label="Call JMK Repairs for emergency service">
            <span>Emergency Call</span>
            <svg width="20" height="20" viewBox="0 0 24 24" fill="none" aria-hidden="true">
              <path d="M5 12h14M12 5l7 7-7 7" stroke="currentColor" stroke-width="2" stroke-linecap="round"/>
            </svg>
          </a>
          <a href="{{ route('contact') }}" class="cta-btn secondary-cta">
            <span>Get In Touch</span>
          </a>
        </div>
      </div>
    </div>
  </div>
</div>
</header>

<main>
  <section class="appointment-section d-flex align-items-center font-ui" aria-labelledby="appointment-heading">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-lg-6 col-md-8 slide-right">

        <div class="appointment-card p-4 p-md-5">
          <h2 id="appointment-heading" class="text-center mb-4 fw-bold">Get Free Appointment</h2>

@if(session('success'))
<div class="alert alert-success" role="alert">
    {{ session('success') }}
</div>
@endif

<form method="POST" action="{{ route('appointment.send') }}">
@csrf

  <div class="mb-2">
    <label for="name" class="form-label fw-semibold">Full Name</label>
    <input type="text" id="name" name="name" class="form-control custom-input" required autocomplete="name">
  </div>

  <div class="mb-2">
    <label for="email" class="form-label fw-semibold">Email Address</label>
    <input type="email" id="email" name="email" class="form-control custom-input" required autocomplete="email">
  </div>

  <div class="mb-2">
    <label for="phone" class="form-label fw-semibold">Phone Number</label>
    <input type="tel" id="phone" name="phone" class="form-control custom-input" required autocomplete="tel">
  </div>

  <div class="mb-2">
    <label for="service" class="form-label fw-semibold">Services</label>
    <select id="service" name="service" class="form-control custom-input" required>
      <option value="">Choose a service</option>
      <option>Key repairing</option>
      <option>Shoe repairing</option>
      <option>Suitcase repairing</option>
      <option>Phone repairing</option>
      <option>Watch repairing</option>
      <option>Leather work's</option>
      <option>Lost key's recover</option>
    </select>
  </div>

  <div class="mb-2">
    <label for="location" class="form-label fw-semibold">Location</label>
    <input type="text" id="location" name="location" class="form-control custom-input" required>
  </div>

  <div class="mb-2">
    <label for="time" class="form-label fw-semibold">Time Required</label>
    <select id="time" name="time" class="form-control custom-input" required>
      <option value="">Select time</option>
      <option>ASAP</option>
      <option>Today</option>
      <option>Tomorrow</option>
      <option>In 3 day's</option>
      <option>In a week</option>
      <option>Next week</option>
      <option>I'm flexible</option>
    </select>
  </div>

  <button type="submit" class="btn submit-btn w-100">Book Appointment</button>

</form>
        </div>

      </div>
    </div>
  </div>
</section>

<div class="carousel-wrapper py-5 font-ui">
  <div class="container">
    <div>
      <div class="section-header mb-5">
      <h2 class="works-title">
        <span class="title-word">Our</span>
        <span class="title-word highlight">Work's</span>
      </h2>
      <div class="title-underline"></div>
      <p class="works-subtitle">Crafting Excellence in Every Repair</p>
    </div>
    </div>
    <div class="infinite-carousel">
      <div class="carousel-track">

        <!-- CARD 1 -->
        <div class="card custom-card">
          <img src="{{ asset('images/watchmain (1).webp') }}" alt="Watch repair service Dubai - JMK Repairs" width="400" height="300" loading="lazy">
          <div class="card-body text-center">
            <a href="{{ route('Watches') }}" class="btn custom-btn">Watch Repairing</a>
          </div>
        </div>

        <!-- CARD 2 -->
        <div class="card custom-card">
          <img src="{{ asset('images/iphone17 (1).webp') }}" alt="Phone repair service Dubai - Screen & battery fix" width="400" height="300" loading="lazy">
          <div class="card-body text-center">
            <a href="{{ route('Phone') }}" class="btn custom-btn">Phone Repairing</a>
          </div>
        </div>

        <!-- CARD 3 -->
        <div class="card custom-card">
          <img src="../images/a7229581b2a0d278c195c34c7a68f088 (1).webp" alt="Key duplicating service Dubai - All key types" width="400" height="300" loading="lazy">
          <div class="card-body text-center">
            <a href="{{ route('Key') }}" class="btn custom-btn">Key Duplicating</a>
          </div>
        </div>

        <!-- CARD 4 -->
        <div class="card custom-card">
          <img src="{{ asset('images/5ca01bfb6130937062e2212884654589.jpg') }}" alt="Suitcase repair service Dubai - All brands" width="400" height="300" loading="lazy">
          <div class="card-body text-center">
            <a href="{{ route('suitcase') }}" class="btn custom-btn">Suitcase Repairing</a>
          </div>
        </div>

        <!-- CARD 5 -->
        <div class="card custom-card">
          <img src="{{ asset('images/Elevate Your Style with Premium Handmade Leather Accessories for a Classic Look! (1).webp') }}" alt="Leather repair service Dubai - Bags belts wallets" width="400" height="300" loading="lazy">
          <div class="card-body text-center">
            <a href="{{ route('leather') }}" class="btn custom-btn">Leather Work's</a>
          </div>
        </div>

        <!-- CARD 6 -->
        <div class="card custom-card">
          <img src="{{ asset('images/download (12) (1).webp') }}" alt="Lock repair service Dubai - All lock types" width="400" height="300" loading="lazy">
          <div class="card-body text-center">
            <a href="{{ route('Lock') }}" class="btn custom-btn">Lock Repairing</a>
          </div>
        </div>

        <!-- CARD 7 -->
        <div class="card custom-card">
          <img src="{{ asset('images/shoemain (1).webp') }}" alt="Shoe repair service Dubai - Expert cobbler" width="400" height="300" loading="lazy">
          <div class="card-body text-center">
            <a href="{{ route('Shoe') }}" class="btn custom-btn">Shoe Repairing</a>
          </div>
        </div>

        <!-- CARD 8 -->
        <div class="card custom-card">
          <img src="{{ asset('images/accescard (2).webp') }}" alt="Access card repair Dubai - RFID & smart cards" width="400" height="300" loading="lazy">
          <div class="card-body text-center">
            <a href="{{ route('Access') }}" class="btn custom-btn">Access Card Repairing</a>
          </div>
        </div>

        <!-- DUPLICATES FOR INFINITE LOOP -->

        <div class="card custom-card">
          <img src="{{ asset('images/watchmain (1).webp') }}" alt="Watch repair service Dubai - JMK Repairs" width="400" height="300" loading="lazy">
          <div class="card-body text-center">
            <a href="{{ route('Watches') }}" class="btn custom-btn">Watch Repairing</a>
          </div>
        </div>

        <div class="card custom-card">
          <img src="{{ asset('images/iphone17 (1).webp') }}" alt="Phone repair service Dubai - Screen & battery fix" width="400" height="300" loading="lazy">
          <div class="card-body text-center">
            <a href="{{ route('Phone') }}" class="btn custom-btn">Phone Repairing</a>
          </div>
        </div>

        <div class="card custom-card">
          <img src="../images/a7229581b2a0d278c195c34c7a68f088 (1).webp" alt="Key duplicating service Dubai - All key types" width="400" height="300" loading="lazy">
          <div class="card-body text-center">
            <a href="{{ route('Key') }}" class="btn custom-btn">Key Duplicating</a>
          </div>
        </div>

        <div class="card custom-card">
          <img src="{{ asset('images/leather.webp') }}" alt="Leather repair service Dubai - Premium restoration" width="400" height="300" loading="lazy">
          <div class="card-body text-center">
            <a href="{{ route('leather') }}" class="btn custom-btn">Leather Work's</a>
          </div>
        </div>

        <div class="card custom-card">
          <img src="{{ asset('images/download (12) (1).webp') }}" alt="Lock repair service Dubai - All lock types" width="400" height="300" loading="lazy">
          <div class="card-body text-center">
            <a href="{{ route('Lock') }}" class="btn custom-btn">Lock Repairing</a>
          </div>
        </div>

        <div class="card custom-card">
          <img src="{{ asset('images/shoemain (1).webp') }}" alt="Shoe repair service Dubai - Expert cobbler" width="400" height="300" loading="lazy">
          <div class="card-body text-center">
            <a href="{{ route('Shoe') }}" class="btn custom-btn">Shoe Repairing</a>
          </div>
        </div>

        <div class="card custom-card">
          <img src="{{ asset('images/5ca01bfb6130937062e2212884654589.jpg') }}" alt="Suitcase repair service Dubai - All brands" width="400" height="300" loading="lazy">
          <div class="card-body text-center">
            <a href="{{ route('suitcase') }}" class="btn custom-btn">Suitcase Repairing</a>
          </div>
        </div>

        <div class="card custom-card">
          <img src="{{ asset('images/accescard (2).webp') }}" alt="Access card repair Dubai - RFID & smart cards" width="400" height="300" loading="lazy">
          <div class="card-body text-center">
            <a href="{{ route('Access') }}" class="btn custom-btn">Access Card Repairing</a>
          </div>
        </div>

      </div>
    </div>
  </div>
</div>

<section class="about-section d-flex align-items-center font-ui" aria-labelledby="about-heading">
  <div class="container">
    <div class="row g-4 align-items-center">

      <!-- LEFT GLASS CARD -->
      <div class="col-lg-6">
        <div class="glass-card p-4 p-md-5">
          <h3 class="text-danger fw-bold mb-2">About Our Repair Shop</h3>
          <h2 id="about-heading" class="fw-bold mb-3">We Bring Your Devices Back to Life</h2>
          <h4 class="text-muted mb-3">Fast • Reliable • Affordable Services</h4>

          <p class="mb-2">
            We specialize in professional repair services for phones, watches, shoes, locks, and leather goods in Al Karama, Dubai.
          </p>
          <p class="mb-2">
            Our expert technicians use modern tools and genuine parts to ensure long-lasting results.
          </p>
          <p class="mb-2">
            Customer satisfaction is our top priority, and we guarantee quality workmanship on every repair.
          </p>
          <p class="mb-0">
            Visit us today and experience fast service with honest pricing and trusted expertise.
          </p>
        </div>
      </div>

      <!-- RIGHT GLASS CARD -->
      <div class="col-lg-6 font-ui">
        <div class="glass-card highlight-card p-4 p-md-5 text-center text-lg-start">
          <h3 class="fw-bold mb-3">Why Choose Us?</h3>

          <div class="feature-item mb-3">
            <h4 class="fw-bold mb-1">⚡ Quick Turnaround</h4>
            <p class="mb-0 text-muted">Most repairs completed the same day.</p>
          </div>

          <div class="feature-item mb-3">
            <h4 class="fw-bold mb-1">🛠 Skilled Professionals</h4>
            <p class="mb-0 text-muted">Experienced technicians for every repair type.</p>
          </div>

          <div class="feature-item mb-3">
            <h4 class="fw-bold mb-1">💰 Affordable Pricing</h4>
            <p class="mb-0 text-muted">High-quality service without high costs.</p>
          </div>

          <div class="feature-item">
            <h4 class="fw-bold mb-1">⭐ Trusted by Customers</h4>
            <p class="mb-0 text-muted">Hundreds of satisfied clients every month.</p>
          </div>
        </div>
      </div>

    </div>
  </div>
</section>

<section class="modern-faq py-5 slide-left" aria-labelledby="faq-heading">
  <div class="container">
    <h2 id="faq-heading" class="text-center mb-4">Frequently Asked Questions</h2>
    <div class="row g-4 align-items-center">

      <!-- LEFT: FAQ LIST -->
      <div class="col-lg-6">
        <div class="faq-list">

          <div class="faq-item">
            <div class="faq-header d-flex justify-content-between align-items-center">
              <h3>Fast Service</h3>
              <span class="faq-plus" aria-hidden="true">+</span>
            </div>
            <div class="faq-body font-ui">
              Most repairs are completed the same day with professional care.
              We focus on quick turnaround without compromising on quality.
              Your time matters to us and we respect it.
            </div>
          </div>

          <div class="faq-item">
            <div class="faq-header d-flex justify-content-between align-items-center">
              <h3>Certified Technicians</h3>
              <span class="faq-plus" aria-hidden="true">+</span>
            </div>
            <div class="faq-body font-ui">
              Our services are carried out by highly trained and experienced technicians.
              Each repair is handled with precision, care, and industry-standard practices.
            </div>
          </div>

          <div class="faq-item">
            <div class="faq-header d-flex justify-content-between align-items-center">
              <h3>Affordable Pricing</h3>
              <span class="faq-plus" aria-hidden="true">+</span>
            </div>
            <div class="faq-body font-ui">
              We believe in complete pricing transparency. No surprises—honest work every time.
            </div>
          </div>

          <div class="faq-item">
            <div class="faq-header d-flex justify-content-between align-items-center">
              <h3>Quality Parts</h3>
              <span class="faq-plus" aria-hidden="true">+</span>
            </div>
            <div class="faq-body font-ui">
              We use high-quality, certified parts for every repair ensuring durability.
            </div>
          </div>

        </div>
      </div>

      <!-- RIGHT: IMAGE -->
      <div class="col-lg-6">
        <div class="faq-image-box">
          <img src="https://images.unsplash.com/photo-1593642634367-d91a135587b5?auto=format&fit=crop&w=800&q=80"
               class="img-fluid rounded"
               alt="Professional repair technician working at JMK Repairs Dubai"
               width="800" height="600"
               loading="lazy">
        </div>
      </div>

    </div>
  </div>
</section>

<section class="specialists-section py-5">
  <div class="container font-ui">
    <h3 class="text-center mb-5 slide-right">Our Specialists</h3>

    <div class="row justify-content-center align-items-center g-4">

      <!-- Specialists Images -->
      <div class="col-md-6 d-flex justify-content-around">
        <div class="specialist-img-box" data-id="1">
          <img src="../images/specialist (1).webp" class="img-fluid rounded-circle specialist-img" alt="Specialist 1">
          <h6 class="text-center mt-2">John Doe</h6>
          
        </div>
        <div class="specialist-img-box" data-id="2">
          <img src="../images/specialist.webp" class="img-fluid rounded-circle specialist-img" alt="Specialist 2">
          <h6 class="text-center mt-2">Jane Smith</h6>
        </div>
      </div>

      <!-- Specialist Data -->
      <div class="col-md-8 mt-4">
        <div class="specialist-data">
          <div class="specialist-info text-dark" data-id="1">
            <h4>John Doe</h4>
            <p>John is our lead technician with 10 years of experience in phone and electronic repairs. He ensures precision and quality in every service.</p>
          </div>
          <div class="specialist-info" data-id="2" style="display:none;">
            <h4>Jane Smith</h4>
            <p>Jane specializes in leather, watch, and shoe repairs. Her meticulous approach guarantees client satisfaction and flawless results.</p>
          </div>
        </div>
      </div>

    </div>
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

 <script src="{{ asset('js/script.js') }}" defer></script>
<script>
        function runLoadingAnimation() {
            const tl = gsap.timeline({
                defaults: { ease: 'power2.out' }
            });

            tl.to('.loading-text', {
                opacity: 1,
                duration: 0.5
            })

            .to('.key-svg', {
                opacity: 1,
                x: 180,
                duration: 1,
                ease: 'power2.inOut'
            }, '+=0.5')

            .to('.key-svg', {
                x: 185,
                duration: 0.3,
                ease: 'power1.in'
            })

            .to('.key-svg', {
                rotation: 90,
                transformOrigin: '100px 110px',
                duration: 0.5,
                ease: 'back.out(2)'
            })

            .to('.glow-circle', {
                opacity: 1,
                scale: 1.2,
                transformOrigin: 'center',
                duration: 0.4
            }, '-=0.4')

            .to('.lock-shackle-svg', {
                rotation: -45,
                transformOrigin: '30% 100%',
                duration: 0.5,
                ease: 'elastic.out(1, 0.5)'
            }, '-=0.3')

            .to('.loading-text', {
                scale: 1.1,
                duration: 0.3,
                onStart: function() {
                    document.querySelector('.loading-text').innerHTML = 'Jumma Khan';
                }
            })

            .to({}, { duration: 0.5 })

            .to('.glow-circle', {
                opacity: 0,
                duration: 0.4
            })

            .to(['.loading-text', '#lockSvg'], {
                opacity: 0,
                duration: 0.6
            }, '-=0.2')

            .to('.loading-screen', {
                opacity: 0,
                duration: 0.8,
                ease: 'power2.inOut'
            })

            .set('.loading-screen', {
                display: 'none'
            })

            .to('.main-content', {
                opacity: 1,
                duration: 0.8,
                ease: 'power2.out',
                onComplete: function() {
                    document.body.classList.remove('loading');
                    sessionStorage.setItem('loadingAnimationPlayed', 'true');
                }
            });
        }

        function skipLoadingAnimation() {
            const loadingScreen = document.querySelector('.loading-screen');
            const mainContent = document.querySelector('.main-content');
            gsap.set(loadingScreen, { display: 'none' });
            gsap.set(mainContent, { opacity: 1 });
            document.body.classList.remove('loading');
        }

        window.addEventListener('load', function() {
            const hasPlayed = sessionStorage.getItem('loadingAnimationPlayed');
            if (hasPlayed === 'true') {
                skipLoadingAnimation();
            } else {
                runLoadingAnimation();
            }
        });
    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" defer></script>
  </body>
</html>