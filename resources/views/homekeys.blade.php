<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Home Locksmith Service Dubai</title>
    <link rel="icon" type="image/png" href="../images/jmk_logo.png">
<link rel="shortcut icon" type="image/png" href="../images/jmk_logo.png">
<link rel="apple-touch-icon" href="../images/jmk_logo.png">

 <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;700&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
     <!-- Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
  </head>
     <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        
        :root {
            --primary-color: #871deb;
            --secondary-color: #5803eb;
            --accent-color: #2629d3;
            --dark-color: #1f2937;
            --light-gray: #6b7280;
            --bg-light: #f9fafb;
        }
        
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            color: var(--dark-color);
            line-height: 1.6;
        }
/* Hero Section Styling */
.hero-section {
    background: #d1f2f8;
    min-height: 500px;
}

.hero-title {
    font-size: 3rem;
    font-weight: 700;
    color: #1f2937;
    line-height: 1.2;
}

.hero-subtitle {
    font-size: 1.2rem;
    color: #6b7280;
    line-height: 1.6;
}

.hero-badges .badge {
    font-size: 0.95rem;
    font-weight: 600;
    border-radius: 50px;
}

/* Hero Image - Responsive for all screens */
.hero-image-wrapper {
    width: 100%;
    overflow: hidden;
}

.hero-image-wrapper img {
    width: 100%;
    height: auto;
    max-height: 450px;
    object-fit: cover;
    object-position: center;
    display: block;
}

/* Tablet Screens */
@media (max-width: 991px) {
    .hero-section {
        min-height: auto;
    }
    
    .hero-title {
        font-size: 2.5rem;
    }
    
    .hero-subtitle {
        font-size: 1.1rem;
    }
    
    .hero-image-wrapper img {
        max-height: 350px;
    }
}

/* Mobile Screens */
@media (max-width: 767px) {
    .hero-section {
        padding-top: 2rem !important;
        padding-bottom: 2rem !important;
    }
    
    .hero-title {
        font-size: 1.8rem;
        margin-bottom: 1rem !important;
    }
    
    .hero-subtitle {
        font-size: 1rem;
        margin-bottom: 1.5rem !important;
    }
    
    .hero-badges {
        margin-bottom: 1.5rem !important;
    }
    
    .hero-badges .badge {
        font-size: 0.85rem;
        padding: 0.6rem 1rem !important;
    }
    
    .hero-image-wrapper {
        margin-bottom: 2rem;
    }
    
    .hero-image-wrapper img {
        max-height: 250px;
        border-radius: 1rem !important;
    }
    
    .d-flex.gap-3 {
        flex-direction: column;
        gap: 0.75rem !important;
    }
    
    .btn-lg {
        width: 100%;
        padding: 0.875rem 1.5rem !important;
        font-size: 1rem;
    }
}

/* Extra Small Screens */
@media (max-width: 480px) {
    .hero-title {
        font-size: 1.5rem;
    }
    
    .hero-subtitle {
        font-size: 0.95rem;
    }
    
    .hero-badges .badge {
        font-size: 0.8rem;
        padding: 0.5rem 0.875rem !important;
    }
    
    .hero-image-wrapper img {
        max-height: 220px;
    }
}
        @keyframes float {
            0%, 100% { transform: translateY(0px); }
            50% { transform: translateY(-20px); }
        }
        
        /* Services Section */
        .services-section {
            padding: 80px 0;
            background: var(--bg-light);
        }
        
        .section-title {
            text-align: center;
            margin-bottom: 60px;
        }
        
        .section-title h2 {
            font-size: 2.5rem;
            font-weight: 700;
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
        
        .service-card {
            background: white;
            border-radius: 15px;
            padding: 30px;
            height: 100%;
            transition: all 0.3s ease;
            border: 2px solid transparent;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.05);
        }
        
        .service-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 15px 35px rgba(147, 51, 234, 0.2);
            border-color: var(--primary-color);
        }
        
        .service-icon {
            width: 70px;
            height: 70px;
            background: linear-gradient(135deg, var(--primary-color), var(--accent-color));
            border-radius: 15px;
            display: flex;
            align-items: center;
            justify-content: center;
            margin-bottom: 20px;
            font-size: 2rem;
            color: white;
        }
        
        .service-card h4 {
            font-size: 1.3rem;
            font-weight: 700;
            margin-bottom: 15px;
            color: var(--dark-color);
        }
        
        .service-card p {
            color: var(--light-gray);
            margin-bottom: 0;
        }
        
        /* Key Types Section */
        .key-types-section {
            padding: 80px 0;
            background: white;
        }
        
        .key-type-card {
            background: linear-gradient(135deg, #faf5ff 0%, #f3e8ff 100%);
            border-radius: 15px;
            padding: 25px;
            height: 100%;
            border: 2px solid #e9d5ff;
            transition: all 0.3s ease;
        }
        
        .key-type-card:hover {
            border-color: var(--primary-color);
            transform: translateY(-5px);
            box-shadow: 0 10px 25px rgba(147, 51, 234, 0.15);
        }
        
        .key-type-card h5 {
            font-size: 1.2rem;
            font-weight: 700;
            color: var(--primary-color);
            margin-bottom: 15px;
            display: flex;
            align-items: center;
            gap: 10px;
        }
        
        .key-type-card ul {
            list-style: none;
            padding: 0;
            margin: 0;
        }
        
        .key-type-card ul li {
            padding: 8px 0;
            color: var(--light-gray);
            display: flex;
            align-items: flex-start;
            gap: 10px;
        }
        
        .key-type-card ul li::before {
            content: '✓';
            color: var(--primary-color);
            font-weight: bold;
            flex-shrink: 0;
        }
        
        /* Location Section */
        .location-section {
            padding: 80px 0;
            background: linear-gradient(135deg, var(--primary-color), var(--accent-color));
            color: white;
        }
        
        .location-card {
            background: rgba(255, 255, 255, 0.15);
            border-radius: 20px;
            padding: 40px;
            backdrop-filter: blur(10px);
            border: 2px solid rgba(255, 255, 255, 0.2);
        }
        
        .location-card h3 {
            font-size: 2rem;
            font-weight: 700;
            margin-bottom: 20px;
        }
        
        .location-info {
            display: flex;
            flex-direction: column;
            gap: 20px;
        }
        
        .location-item {
            display: flex;
            align-items: center;
            gap: 15px;
            font-size: 1.1rem;
        }
        
        .location-item i {
            font-size: 1.5rem;
            color: #fbbf24;
        }
        
        .coverage-areas {
            background: rgba(255, 255, 255, 0.1);
            border-radius: 15px;
            padding: 30px;
            margin-top: 30px;
        }
        
        .coverage-areas h4 {
            font-size: 1.5rem;
            font-weight: 700;
            margin-bottom: 20px;
        }
        
        .areas-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(150px, 1fr));
            gap: 15px;
        }
        
        .area-badge {
            background: rgba(255, 255, 255, 0.2);
            padding: 10px 15px;
            border-radius: 10px;
            text-align: center;
            font-weight: 600;
        }
        
        /* Why Choose Us Section */
        .why-choose-section {
            padding: 80px 0;
            background: var(--bg-light);
        }
        
        .feature-box {
            background: white;
            border-radius: 15px;
            padding: 30px;
            text-align: center;
            height: 100%;
            transition: all 0.3s ease;
            border: 2px solid transparent;
        }
        
        .feature-box:hover {
            border-color: var(--primary-color);
            transform: translateY(-5px);
            box-shadow: 0 10px 25px rgba(147, 51, 234, 0.15);
        }
        
        .feature-box i {
            font-size: 3rem;
            color: var(--primary-color);
            margin-bottom: 20px;
        }
        
        .feature-box h5 {
            font-size: 1.3rem;
            font-weight: 700;
            margin-bottom: 15px;
            color: var(--dark-color);
        }
        
        .feature-box p {
            color: var(--light-gray);
            margin-bottom: 0;
        }
        
        /* Emergency Banner */
        .emergency-banner {
            background: #ef4444;
            color: white;
            padding: 30px 0;
            text-align: center;
        }
        
        .emergency-banner h3 {
            font-size: 2rem;
            font-weight: 700;
            margin-bottom: 15px;
        }
        
        .emergency-banner p {
            font-size: 1.2rem;
            margin-bottom: 20px;
        }
        
        .emergency-phone {
            font-size: 2.5rem;
            font-weight: 800;
            color: #fbbf24;
            text-decoration: none;
            display: inline-flex;
            align-items: center;
            gap: 15px;
        }
        
        .emergency-phone:hover {
            color: white;
        }
        
        /* Responsive */
        @media (max-width: 768px) {
            .hero-content h1 {
                font-size: 2rem;
            }
            
            .hero-content p {
                font-size: 1.1rem;
            }
            
            .cta-buttons {
                flex-direction: column;
            }
            
            .btn-emergency, .btn-whatsapp {
                width: 100%;
                justify-content: center;
            }
            
            .section-title h2 {
                font-size: 2rem;
            }
            
            .emergency-phone {
                font-size: 1.8rem;
            }
        }
    </style>
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


    <!-- Hero Section -->
<section class="hero-section py-5 font-ui">
    <div class="container">
        <div class="row align-items-center g-4">
            <!-- LEFT: Content -->
            <div class="col-lg-6 order-lg-1 order-2">
                <h1 class="hero-title mb-4">Locked Out of Home? <span class="text-warning">We're Here 24/7!</span></h1>
                <p class="hero-subtitle mb-4">Emergency Home Locksmith Service in Dubai - Fast, Professional & Available Anytime</p>
                
                <div class="hero-badges mb-4">
                    <span class="badge bg-light text-dark me-2 mb-2 p-3">
                        <i class="bi bi-clock me-2"></i>24/7 Available
                    </span>
                    <span class="badge bg-light text-dark me-2 mb-2 p-3">
                        <i class="bi bi-geo-alt me-2"></i>Al Karama, Dubai
                    </span>
                    <span class="badge bg-light text-dark mb-2 p-3">
                        <i class="bi bi-lightning me-2"></i>15 Min Response
                    </span>
                </div>
                
                <div class="d-flex flex-wrap gap-3">
                    <a href="tel:+9710505090296" class="btn btn-danger btn-lg px-4 py-3">
                        <i class="bi bi-telephone-fill me-2"></i>
                        Emergency Call Now
                    </a>
                    <a href="https://wa.me/+9710505090296" class="btn btn-success btn-lg px-4 py-3">
                        <i class="bi bi-whatsapp me-2"></i>
                        WhatsApp Us
                    </a>
                </div>
            </div>
            
            <!-- RIGHT: Image -->
            <div class="col-lg-6 order-lg-2 order-1">
                <div class="hero-image-wrapper">
                    <img src="../images/losthome.jpg" class="img-fluid rounded-4 shadow" alt="Home Locksmith Services Dubai">
                </div>
            </div>
        </div>
    </div>
</section>
    <!-- Services Section -->
    <section class="services-section font-ui">
        <div class="container">
            <div class="section-title">
                <h2>Our Home Locksmith Services in Dubai</h2>
                <div class="underline"></div>
                <p class="text-muted">Complete residential locksmith solutions for all your home security emergencies</p>
            </div>
            
            <div class="row g-4">
                <div class="col-lg-4 col-md-6">
                    <div class="service-card">
                        <div class="service-icon">
                            <i class="bi bi-house-door"></i>
                        </div>
                        <h4>Lost Home Key Replacement</h4>
                        <p>Lost your house keys? We create new keys on the spot for all types of home locks including deadbolts, knob locks, lever locks, and smart locks. No need to wait - we come to you anywhere in Dubai.</p>
                    </div>
                </div>
                
                <div class="col-lg-4 col-md-6">
                    <div class="service-card">
                        <div class="service-icon">
                            <i class="bi bi-unlock"></i>
                        </div>
                        <h4>Home Door Unlocking Service</h4>
                        <p>Locked out of your house or apartment? Our expert technicians unlock any home door without damage using professional tools. Works for all residential properties - villas, apartments, townhouses, and flats.</p>
                    </div>
                </div>
                
                <div class="col-lg-4 col-md-6">
                    <div class="service-card">
                        <div class="service-icon">
                            <i class="bi bi-key"></i>
                        </div>
                        <h4>Home Key Duplication Dubai</h4>
                        <p>Need spare keys for family members? We duplicate all types of house keys including deadbolt keys, mailbox keys, garage keys, and padlock keys. Get backup keys made while you wait.</p>
                    </div>
                </div>
                
                <div class="col-lg-4 col-md-6">
                    <div class="service-card">
                        <div class="service-icon">
                            <i class="bi bi-tools"></i>
                        </div>
                        <h4>Broken Key Extraction</h4>
                        <p>Key broke in the door lock? We safely extract broken keys from door locks, deadbolts, and gate locks without damaging your lock mechanism. Then we create a new key immediately on-site.</p>
                    </div>
                </div>
                
                <div class="col-lg-4 col-md-6">
                    <div class="service-card">
                        <div class="service-icon">
                            <i class="bi bi-arrow-repeat"></i>
                        </div>
                        <h4>Lock Rekeying Service</h4>
                        <p>Moving into a new home? We rekey all your locks so old keys won't work anymore. This provides fresh security without replacing expensive lock hardware. Perfect for new residents and landlords.</p>
                    </div>
                </div>
                
                <div class="col-lg-4 col-md-6">
                    <div class="service-card">
                        <div class="service-icon">
                            <i class="bi bi-shield-lock"></i>
                        </div>
                        <h4>Lock Installation & Replacement</h4>
                        <p>Need new locks installed? We install and replace all types of residential locks including high-security deadbolts, smart locks, keypad locks, and multi-point locking systems for maximum home security.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Key Types Section -->
    <section class="key-types-section font-ui">
        <div class="container">
            <div class="section-title">
                <h2>We Handle All Types of Home Keys & Locks</h2>
                <div class="underline"></div>
                <p class="text-muted">From basic keys to advanced smart locks - we repair, replace, and duplicate everything</p>
            </div>
            
            <div class="row g-4">
                <div class="col-lg-3 col-md-6">
                    <div class="key-type-card">
                        <h5><i class="bi bi-key-fill"></i> Standard House Keys</h5>
                        <ul>
                            <li>Basic door keys</li>
                            <li>Single cylinder keys</li>
                            <li>Double cylinder keys</li>
                            <li>Apartment keys</li>
                            <li>Villa keys</li>
                        </ul>
                    </div>
                </div>
                
                <div class="col-lg-3 col-md-6">
                    <div class="key-type-card">
                        <h5><i class="bi bi-lock"></i> Deadbolt Keys</h5>
                        <ul>
                            <li>Single deadbolts</li>
                            <li>Double deadbolts</li>
                            <li>Schlage deadbolts</li>
                            <li>Kwikset deadbolts</li>
                            <li>Yale deadbolts</li>
                        </ul>
                    </div>
                </div>
                
                <div class="col-lg-3 col-md-6">
                    <div class="key-type-card">
                        <h5><i class="bi bi-shield-check"></i> High-Security Keys</h5>
                        <ul>
                            <li>Medeco keys</li>
                            <li>Mul-T-Lock keys</li>
                            <li>Abloy keys</li>
                            <li>Restricted keyways</li>
                            <li>Patented key systems</li>
                        </ul>
                    </div>
                </div>
                
                <div class="col-lg-3 col-md-6">
                    <div class="key-type-card">
                        <h5><i class="bi bi-phone"></i> Smart Lock Keys</h5>
                        <ul>
                            <li>Keypad entry codes</li>
                            <li>Smart lock programming</li>
                            <li>Digital lock keys</li>
                            <li>Biometric locks</li>
                            <li>App-controlled locks</li>
                        </ul>
                    </div>
                </div>
            </div>
            
            <div class="text-center mt-5 font-ui">
                <p class="text-muted mb-3"><strong>All Lock Brands Supported:</strong></p>
                <p class="text-muted">Schlage • Kwikset • Yale • Baldwin • Medeco • Mul-T-Lock • Abloy • Master Lock • Weiser • August • Nest • Ring • Lockly • Igloohome • Samsung • And More!</p>
            </div>
        </div>
    </section>

    <!-- Location Section -->
    <section class="location-section font-ui">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-10">
                    <div class="location-card">
                        <h3><i class="bi bi-geo-alt-fill"></i> Based in Al Karama, Dubai</h3>
                        <p class="mb-4">Your trusted home locksmith located in the heart of Al Karama, serving all of Dubai 24/7</p>
                        
                        <div class="location-info">
                            <div class="location-item">
                                <i class="bi bi-building"></i>
                                <span><strong>Main Office:</strong> Al Karama, Dubai, UAE</span>
                            </div>
                            <div class="location-item">
                                <i class="bi bi-clock-fill"></i>
                                <span><strong>Working Hours:</strong> 24 Hours - 7 Days a Week</span>
                            </div>
                            <div class="location-item">
                                <i class="bi bi-lightning-charge-fill"></i>
                                <span><strong>Response Time:</strong> 15-30 Minutes Anywhere in Dubai</span>
                            </div>
                            <div class="location-item">
                                <i class="bi bi-truck"></i>
                                <span><strong>Mobile Service:</strong> We Come to Your Location</span>
                            </div>
                        </div>
                        
                        <div class="coverage-areas">
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
                                <div class="area-badge">Sheikh Zayed Road</div>
                                <div class="area-badge">Al Barsha</div>
                                <div class="area-badge">Motor City</div>
                                <div class="area-badge">Dubai Silicon Oasis</div>
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

    <!-- Why Choose Us Section -->
    <section class="why-choose-section font-ui">
        <div class="container">
            <div class="section-title">
                <h2>Why Choose Our Home Locksmith Service?</h2>
                <div class="underline"></div>
            </div>
            
            <div class="row g-4">
                <div class="col-lg-3 col-md-6">
                    <div class="feature-box">
                        <i class="bi bi-alarm"></i>
                        <h5>24/7 Emergency Service</h5>
                        <p>Available round the clock, every day of the year. Call us anytime - day or night, weekends or holidays.</p>
                    </div>
                </div>
                
                <div class="col-lg-3 col-md-6">
                    <div class="feature-box">
                        <i class="bi bi-lightning-charge"></i>
                        <h5>15 Min Response Time</h5>
                        <p>Our mobile units reach your location fast. Quick arrival means you're back home sooner.</p>
                    </div>
                </div>
                
                <div class="col-lg-3 col-md-6">
                    <div class="feature-box">
                        <i class="bi bi-person-check"></i>
                        <h5>Expert Technicians</h5>
                        <p>Highly trained and certified residential locksmiths with years of experience handling all lock types.</p>
                    </div>
                </div>
                
                <div class="col-lg-3 col-md-6">
                    <div class="feature-box">
                        <i class="bi bi-shield-check"></i>
                        <h5>No Damage Guarantee</h5>
                        <p>Professional tools and techniques ensure your door and lock remain undamaged during any service.</p>
                    </div>
                </div>
                
                <div class="col-lg-3 col-md-6">
                    <div class="feature-box">
                        <i class="bi bi-cash-coin"></i>
                        <h5>Transparent Pricing</h5>
                        <p>Clear upfront pricing with no hidden charges. You know the cost before we start working.</p>
                    </div>
                </div>
                
                <div class="col-lg-3 col-md-6">
                    <div class="feature-box">
                        <i class="bi bi-tools"></i>
                        <h5>On-Site Service</h5>
                        <p>All services performed at your home - villa, apartment, townhouse, or flat. We bring all equipment.</p>
                    </div>
                </div>
                
                <div class="col-lg-3 col-md-6">
                    <div class="feature-box">
                        <i class="bi bi-star-fill"></i>
                        <h5>100% Satisfaction</h5>
                        <p>Thousands of happy homeowners across Dubai trust us for their home locksmith emergencies.</p>
                    </div>
                </div>
                
                <div class="col-lg-3 col-md-6">
                    <div class="feature-box">
                        <i class="bi bi-gem"></i>
                        <h5>Latest Technology</h5>
                        <p>State-of-the-art equipment for key cutting, lock installation, and unlocking all modern home locks.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Emergency Call Banner -->
    <section class="emergency-banner font-ui">
        <div class="container">
            <h3>Locked Out of Your Home? Lost Your Keys?</h3>
            <p>Don't Panic! We're Just One Call Away</p>
            <a href="tel:+9710505090296" class="emergency-phone">
                <i class="bi bi-telephone-fill"></i>
                +9710505090296
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