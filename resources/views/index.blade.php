<!doctype html>
<html lang="en">
<head>
  <!-- Google Analytics -->
  <script async src="https://www.googletagmanager.com/gtag/js?id=G-GVZJSM57W3"></script>
  <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());
    gtag('config', 'G-GVZJSM57W3');
  </script>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- SEO Meta Tags -->
  <title>JMK Repairs Dubai - Watch, Phone, Shoe & Lock Repair | Al Karama</title>
  <meta name="description" content="JMK Repairs Dubai offers professional watch repair, phone repair, shoe repair, key duplicating, lock repairing and leather works in Al Karama, Dubai. Fast & affordable service.">
  <meta name="keywords" content="watch repair dubai, phone repair dubai, shoe repair dubai, key duplicating dubai, lock repair dubai, leather repair dubai, al karama repair shop">
  <meta name="robots" content="index, follow">
  <meta name="author" content="JMK Repairs Dubai">
  <link rel="canonical" href="https://jmkrepairs.com/">

  <!-- Geo Tags -->
  <meta name="geo.region" content="AE-DU">
  <meta name="geo.placename" content="Al Karama, Dubai">
  <meta name="geo.position" content="25.2354;55.3000">
  <meta name="ICBM" content="25.2354, 55.3000">

  <!-- Open Graph -->
  <meta property="og:title" content="JMK Repairs Dubai - Professional Repair Services">
  <meta property="og:description" content="Watch, phone, shoe, lock & leather repair in Al Karama Dubai. Fast, affordable & trusted service.">
  <meta property="og:image" content="https://jmkrepairs.com/images/jmk_logo.png">
  <meta property="og:url" content="https://jmkrepairs.com/">
  <meta property="og:type" content="website">
  <meta property="og:site_name" content="JMK Repairs Dubai">
  <meta property="og:locale" content="en_AE">

  <!-- Twitter Card -->
  <meta name="twitter:card" content="summary_large_image">
  <meta name="twitter:title" content="JMK Repairs Dubai - Professional Repair Services">
  <meta name="twitter:description" content="Watch, phone, shoe, lock & leather repair in Al Karama Dubai.">
  <meta name="twitter:image" content="https://jmkrepairs.com/images/jmk_logo.png">

  <!-- Favicon -->
  <link rel="icon" type="image/png" href="{{ asset('images/jmk_logo.png') }}">
  <link rel="shortcut icon" type="image/png" href="{{ asset('images/jmk_logo.png') }}">
  <link rel="apple-touch-icon" href="{{ asset('images/jmk_logo.png') }}">

  <!-- Schema Markup -->
  <script type="application/ld+json">
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
    "image": "https://jmkrepairs.com/images/jmk_logo.png"
  }
  </script>

  <!-- Preload Hero Image -->
  <link rel="preload" as="image" href="{{ asset('images/third-banner.webp') }}">
<!-- Bootstrap - Normal blocking (theek hai, CDN fast hai) -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" 
      integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" 
      crossorigin="anonymous">

<!-- style.css - Normal blocking -->
<link rel="stylesheet" href="{{ asset('css/style.css') }}">

  <!-- Fonts - Local -->
  <style>
    @font-face {
      font-family: 'Poppins';
      src: url('../fonts/poppins-400.woff2') format('woff2');
      font-weight: 400;
      font-display: swap;
    }
    @font-face {
      font-family: 'Poppins';
      src: url('../fonts/poppins-700.woff2') format('woff2');
      font-weight: 700;
      font-display: swap;
    }

    .sticky-navbar {
      position: fixed;
      transition: background 0.3s ease, backdrop-filter 0.3s ease;
    }
    .sticky-navbar.scrolled {
      background: rgba(30, 80, 180, 0.55) !important;
      backdrop-filter: blur(12px);
      -webkit-backdrop-filter: blur(12px);
    }
  </style>

  <!-- Elfsight - Scroll pe load hoga (Non Blocking) -->
  <script>
    window.addEventListener('scroll', function() {
      var s = document.createElement('script');
      s.src = 'https://elfsightcdn.com/platform.js';
      document.body.appendChild(s);
    }, {once: true});
  </script>

</head>
<body>

<header class="hero-section font-ui">

  <!-- NAVBAR -->
  <nav class="navbar navbar-expand-lg navbar-dark bg-transparent sticky-navbar top-0 start-0 w-100 py-3">
    <div class="container">

      <!-- LOGO LEFT -->
      <a class="navbar-brand d-flex align-items-center" href="{{ route('index') }}"">
        <img src="{{ asset('images/jmk_logo.png') }}" alt="Logo" height="55" class="me-2">
        <span class="fw-semibold shop-name d-none d-lg-block"></span>
      </a>

      <!-- TOGGLER -->
<button class="navbar-toggler border-0 shadow-none red-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mainNavbar" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <!-- LINKS RIGHT -->
      <div class="collapse navbar-collapse justify-content-end" id="mainNavbar">
        <ul class="navbar-nav gap-lg-4 text-center text-lg-start">

          <li class="nav-item">
            <a class="nav-link active-nav" href="{{ route('index') }}">Home</a>
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
            <a class="nav-link" href="{{ route('about') }}">About</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ route('contact') }}">Contact</a>
          </li>

     <li class="nav-item d-none d-lg-block ms-2">
<a class="btn btn-primary btn-sm rounded-pill d-flex align-items-center gap-2 px-3 py-2" href="tel:+971505090296">
        <i class="bi bi-telephone-fill"></i> Call Us
    </a>
</li>

        

        </ul>
      </div>
    </div>
  </nav>

  <!-- WhatsApp Floating Button -->
  <div class="whatsapp-floating-btn">
    <a href="https://wa.me/+9710505090296" target="_blank" class="whatsapp-float-link">
      <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" fill="currentColor" class="bi bi-whatsapp" viewBox="0 0 16 16">
        <path d="M13.601 2.326A7.854 7.854 0 0 0 7.994 0C3.627 0 .068 3.558.064 7.926c0 1.399.366 2.76 1.057 3.965L0 16l4.204-1.102a7.933 7.933 0 0 0 3.79.965h.004c4.368 0 7.926-3.558 7.93-7.93A7.898 7.898 0 0 0 13.6 2.326zM7.994 14.521a6.573 6.573 0 0 1-3.356-.92l-.24-.144-2.494.654.666-2.433-.156-.251a6.56 6.56 0 0 1-1.007-3.505c0-3.626 2.957-6.584 6.591-6.584a6.56 6.56 0 0 1 4.66 1.931 6.557 6.557 0 0 1 1.928 4.66c-.004 3.639-2.961 6.592-6.592 6.592zm3.615-4.934c-.197-.099-1.17-.578-1.353-.646-.182-.065-.315-.099-.445.099-.133.197-.513.646-.627.775-.114.133-.232.148-.43.05-.197-.1-.836-.308-1.592-.985-.59-.525-.985-1.175-1.103-1.372-.114-.198-.011-.304.088-.403.087-.088.197-.232.296-.346.1-.114.133-.198.198-.33.065-.134.034-.248-.015-.347-.05-.099-.445-1.076-.612-1.47-.16-.389-.323-.335-.445-.34-.114-.007-.247-.007-.38-.007a.729.729 0 0 0-.529.247c-.182.198-.691.677-.691 1.654 0 .977.71 1.916.81 2.049.098.133 1.394 2.132 3.383 2.992.47.205.84.326 1.129.418.475.152.904.129 1.246.08.38-.058 1.171-.48 1.338-.943.164-.464.164-.86.114-.943-.049-.084-.182-.133-.38-.232z"/>
      </svg>
      <span class="whatsapp-text">Call Us</span>
      <span class="online-dot"></span>
    </a>
  </div>

  <div class="hero-image mb-0">
    <img src="{{ asset('images/third-banner.webp') }}"  alt="Hero Image"  fetchpriority="high">>

    <!-- Hero Text Carousel Overlay -->
    <div class="hero-text-overlay">
      <div class="container">
        <div class="hero-content">

          <!-- Carousel Text Container -->
          <div class="carousel-text-wrapper">
            <h1 class="hero-main-title">Jumma Khan</h1>
            <div class="rotating-text-container">
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
            <a href="tel:+9710505090296" class="cta-btn primary-cta">
              <span>Emergency Call</span>
              <svg width="20" height="20" viewBox="0 0 24 24" fill="none">
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

  <!-- APPOINTMENT SECTION -->
  <section class="appointment-section d-flex align-items-center font-ui" aria-labelledby="appointment-heading">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-lg-6 col-md-8 slide-right">
          <div class="appointment-card p-4 p-md-5">
            <h2 id="appointment-heading" class="text-center mb-4 fw-bold">Get Free Appointment</h2>

            @if(session('success'))
              <div class="alert alert-success" role="alert">{{ session('success') }}</div>
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

  <!-- OUR WORKS CAROUSEL -->
  <div class="carousel-wrapper py-5 font-ui">
    <div class="container">
      <div class="section-header mb-5">
        <h2 class="works-title">
          <span class="title-word">Our</span>
          <span class="title-word highlight">Work's</span>
        </h2>
        <div class="title-underline"></div>
        <p class="works-subtitle">Crafting Excellence in Every Repair</p>
      </div>

      <div class="infinite-carousel">
        <div class="carousel-track">

          <div class="card custom-card">
            <img src="{{ asset('images/watchmain (1).webp') }}" alt="Watch repair Dubai" width="400" height="300" loading="lazy">
            <div class="card-body text-center">
              <a href="{{ route('Watches') }}" class="btn custom-btn">Watch Repairing</a>
            </div>
          </div>

          <div class="card custom-card">
            <img src="{{ asset('images/iphone17 (1).webp') }}" alt="Phone repair Dubai" width="400" height="300" loading="lazy">
            <div class="card-body text-center">
              <a href="{{ route('Phone') }}" class="btn custom-btn">Phone Repairing</a>
            </div>
          </div>

          <div class="card custom-card">
            <img src="{{ asset('images/a7229581b2a0d278c195c34c7a68f088 (1).webp') }}" alt="Key duplicating Dubai" width="400" height="300" loading="lazy">
            <div class="card-body text-center">
              <a href="{{ route('Key') }}" class="btn custom-btn">Key Duplicating</a>
            </div>
          </div>

          <div class="card custom-card">
            <img src="{{ asset('images/5ca01bfb6130937062e2212884654589.jpg') }}" alt="Suitcase repair Dubai" width="400" height="300" loading="lazy">
            <div class="card-body text-center">
              <a href="{{ route('suitcase') }}" class="btn custom-btn">Suitcase Repairing</a>
            </div>
          </div>

          <div class="card custom-card">
            <img src="{{ asset('images/Elevate Your Style with Premium Handmade Leather Accessories for a Classic Look! (1).webp') }}" alt="Leather repair Dubai" width="400" height="300" loading="lazy">
            <div class="card-body text-center">
              <a href="{{ route('leather') }}" class="btn custom-btn">Leather Works</a>
            </div>
          </div>

          <div class="card custom-card">
            <img src="{{ asset('images/download (12) (1).webp') }}" alt="Lock repair Dubai" width="400" height="300" loading="lazy">
            <div class="card-body text-center">
              <a href="{{ route('Lock') }}" class="btn custom-btn">Lock Repairing</a>
            </div>
          </div>

          <div class="card custom-card">
            <img src="{{ asset('images/shoerepair.webp') }}" alt="Shoe repair Dubai" width="400" height="300" loading="lazy">
            <div class="card-body text-center">
              <a href="{{ route('Shoe') }}" class="btn custom-btn">Shoe Repairing</a>
            </div>
          </div>

          <div class="card custom-card">
            <img src="{{ asset('images/accescard (2).webp') }}" alt="Access card repair Dubai" width="400" height="300" loading="lazy">
            <div class="card-body text-center">
              <a href="{{ route('Access') }}" class="btn custom-btn">Access Card Repairing</a>
            </div>
          </div>

          <!-- DUPLICATES FOR INFINITE LOOP -->
          <div class="card custom-card">
            <img src="{{ asset('images/watchmain (1).webp') }}" alt="Watch repair Dubai" width="400" height="300" loading="lazy">
            <div class="card-body text-center">
              <a href="{{ route('Watches') }}" class="btn custom-btn">Watch Repairing</a>
            </div>
          </div>

          <div class="card custom-card">
            <img src="{{ asset('images/iphone17 (1).webp') }}" alt="Phone repair Dubai" width="400" height="300" loading="lazy">
            <div class="card-body text-center">
              <a href="{{ route('Phone') }}" class="btn custom-btn">Phone Repairing</a>
            </div>
          </div>

          <div class="card custom-card">
            <img src="{{ asset('images/a7229581b2a0d278c195c34c7a68f088 (1).webp') }}" alt="Key duplicating Dubai" width="400" height="300" loading="lazy">
            <div class="card-body text-center">
              <a href="{{ route('Key') }}" class="btn custom-btn">Key Duplicating</a>
            </div>
          </div>

          <div class="card custom-card">
            <img src="{{ asset('images/leather.webp') }}" alt="Leather repair Dubai" width="400" height="300" loading="lazy">
            <div class="card-body text-center">
              <a href="{{ route('leather') }}" class="btn custom-btn">Leather Work's</a>
            </div>
          </div>

          <div class="card custom-card">
            <img src="{{ asset('images/download (12) (1).webp') }}" alt="Lock repair Dubai" width="400" height="300" loading="lazy">
            <div class="card-body text-center">
              <a href="{{ route('Lock') }}" class="btn custom-btn">Lock Repairing</a>
            </div>
          </div>

          <div class="card custom-card">
            <img src="{{ asset('images/shoerepair.webp') }}" alt="Shoe repair Dubai" width="400" height="300" loading="lazy">
            <div class="card-body text-center">
              <a href="{{ route('Shoe') }}" class="btn custom-btn">Shoe Repairing</a>
            </div>
          </div>

          <div class="card custom-card">
            <img src="{{ asset('images/5ca01bfb6130937062e2212884654589.jpg') }}" alt="Suitcase repair Dubai" width="400" height="300" loading="lazy">
            <div class="card-body text-center">
              <a href="{{ route('suitcase') }}" class="btn custom-btn">Suitcase Repairing</a>
            </div>
          </div>

          <div class="card custom-card">
            <img src="{{ asset('images/accescard (2).webp') }}" alt="Access card repair Dubai" width="400" height="300" loading="lazy">
            <div class="card-body text-center">
              <a href="{{ route('Access') }}" class="btn custom-btn">Access Card Repairing</a>
            </div>
          </div>

        </div>
      </div>
    </div>
  </div>
   
  <section class="modern-faq py-5 slide-left" aria-labelledby="faq-heading">
    <div class="container">
      <h2 id="faq-heading" class="text-center mb-4">Frequently Asked Questions</h2>
      <div class="row g-4 align-items-center">

        <div class="col-lg-6">
          <div class="faq-list">

            <div class="faq-item">
              <div class="faq-header d-flex justify-content-between align-items-center">
                <h3>Fast Service</h3>
                <span class="faq-plus" aria-hidden="true">+</span>
              </div>
              <div class="faq-body font-ui">
                Most repairs are completed the same day with professional care. We focus on quick turnaround without compromising on quality. Your time matters to us.
              </div>
            </div>

            <div class="faq-item">
              <div class="faq-header d-flex justify-content-between align-items-center">
                <h3>Certified Technicians</h3>
                <span class="faq-plus" aria-hidden="true">+</span>
              </div>
              <div class="faq-body font-ui">
                Our services are carried out by highly trained and experienced technicians. Each repair is handled with precision, care, and industry-standard practices.
              </div>
            </div>

            <div class="faq-item">
              <div class="faq-header d-flex justify-content-between align-items-center">
                <h3>Affordable Pricing</h3>
                <span class="faq-plus" aria-hidden="true">+</span>
              </div>
              <div class="faq-body font-ui">
                We believe in complete pricing transparency. No surprises — honest work every time.
              </div>
            </div>

            <div class="faq-item">
              <div class="faq-header d-flex justify-content-between align-items-center">
                <h3>Quality Parts</h3>
                <span class="faq-plus" aria-hidden="true">+</span>
              </div>
              <div class="faq-body font-ui">
                We use high-quality, certified parts for every repair ensuring long-lasting durability.
              </div>
            </div>

          </div>
        </div>

        <div class="col-lg-6">
          <div class="faq-image-box">
            <img src="../images/faq.webp"
                 class="img-fluid rounded"
                 alt="Professional repair technician working at JMK Repairs Dubai"
                 width="800" height="600"
                 loading="lazy">
          </div>
        </div>

      </div>
    </div>
  </section>

  <!-- ABOUT SECTION -->
  <section class="about-section d-flex align-items-center font-ui" aria-labelledby="about-heading">
    <div class="container">
      <div class="row g-4 align-items-center">

        <div class="col-lg-6">
          <div class="glass-card p-4 p-md-5">
            <h3 class="text-danger fw-bold mb-2">About Our Repair Shop</h3>
            <h2 id="about-heading" class="fw-bold mb-3">We Bring Your Devices Back to Life</h2>
           <h3 class="text-muted mb-3">Fast • Reliable • Affordable Services</h3>
            <p class="mb-2">We specialize in professional repair services for phones, watches, shoes, locks, and leather goods in Al Karama, Dubai.</p>
            <p class="mb-2">Our expert technicians use modern tools and genuine parts to ensure long-lasting results.</p>
            <p class="mb-2">Customer satisfaction is our top priority, and we guarantee quality workmanship on every repair.</p>
            <p class="mb-0">Visit us today and experience fast service with honest pricing and trusted expertise.</p>
          </div>
        </div>

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



  <!-- SPECIALISTS SECTION -->
  <section class="specialists-section py-5">
    <div class="container font-ui">
      <h3 class="text-center mb-5 slide-right">Our Specialists</h3>

      <div class="row justify-content-center align-items-center g-4">

        <div class="col-md-6 d-flex justify-content-around">
          <div class="specialist-img-box" data-id="1">
            <img src="{{ asset('images/specialist (2).webp') }}" class="img-fluid rounded-circle specialist-img" alt="Specialist 1">
         <h5 class="text-center mt-2">John Doe</h5>
          </div>
          <div class="specialist-img-box" data-id="2">
            <img src="{{ asset('images/specialist (1).webp') }}" class="img-fluid rounded-circle specialist-img" alt="Specialist 2">
         <h5 class="text-center mt-2">Jane smith</h5>
          </div>
        </div>

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
    <div class="col-12 text-center mt-3">
          <div class="brand-badge d-inline-flex">
            <div class="elfsight-app-626bae25-7b87-4b87-95b9-4452c96330ea" data-elfsight-app-lazy></div>
          </div>
        </div>

      </div>
    </div>
</section>
  </section>
<section class="map-section">
  <div class="container-fluid p-0">
    <div class="map-responsive">
      <iframe 
    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3609.417559824508!2d55.27547501502843!3d25.234988983865432!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3e5f437cd6392817%3A0xcc79ee19d31144a4!2sAl%20Karama%2C%20Dubai%2C%20UAE!5e0!3m2!1sen!2s!4v1706490000000!5m2!1sen!2s"
        width="100%" 
        height="100%" 
        style="border:0;" 
        allowfullscreen="" 
        loading="lazy">
      </iframe>
    </div>
  </div>
</section>
</main>

<!-- FOOTER -->
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

<!-- JS -->
<script src="{{ asset('js/script.js') }}" defer></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" defer></script>

</body>
</html>