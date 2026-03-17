<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Privacy Policy | JMK Repairs Dubai</title>
  <meta name="description" content="Read JMK Repairs Dubai's privacy policy. Learn how we collect, use and protect your personal information at our Al Karama repair center.">
  <meta name="robots" content="index, follow">
  <link rel="canonical" href="https://jmkrepairs.com/privacy-policy">
  <link rel="icon" type="image/png" href="{{ asset('images/jmk_logo.png') }}">

  <link rel="stylesheet" href="{{ asset('css/style.css') }}">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;700&display=swap" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">

  <style>
    body { font-family: 'Poppins', sans-serif; background: #f8f9fa; }

    .pp-hero {
      background: linear-gradient(135deg, #1a1a2e 0%, #16213e 50%, #0f3460 100%);
      padding: 80px 0 60px;
      color: white;
      position: relative;
      overflow: hidden;
    }

    .pp-hero::before {
      content: '';
      position: absolute;
      top: -50px; right: -50px;
      width: 300px; height: 300px;
      background: radial-gradient(circle, rgba(231,76,60,0.15) 0%, transparent 70%);
      border-radius: 50%;
    }

    .pp-hero h1 { font-size: 2.5rem; font-weight: 700; }
    .pp-hero p { color: rgba(255,255,255,0.7); font-size: 1rem; }

    .pp-badge {
      display: inline-block;
      background: rgba(231,76,60,0.2);
      color: #e74c3c;
      border: 1px solid rgba(231,76,60,0.3);
      padding: 6px 18px;
      border-radius: 50px;
      font-size: 0.85rem;
      font-weight: 600;
      margin-bottom: 20px;
    }

    .pp-body { padding: 60px 0; }

    .pp-card {
      background: white;
      border-radius: 16px;
      padding: 36px;
      margin-bottom: 24px;
      box-shadow: 0 2px 20px rgba(0,0,0,0.06);
      border-left: 4px solid #e74c3c;
      transition: transform 0.2s ease;
    }

    .pp-card:hover { transform: translateY(-3px); }

    .pp-card h2 {
      font-size: 1.25rem;
      font-weight: 700;
      color: #1a1a2e;
      margin-bottom: 15px;
      display: flex;
      align-items: center;
      gap: 12px;
    }

    .pp-card h2 .icon {
      width: 40px; height: 40px;
      background: linear-gradient(135deg, #e74c3c, #c0392b);
      border-radius: 10px;
      display: flex;
      align-items: center;
      justify-content: center;
      color: white;
      font-size: 1.1rem;
      flex-shrink: 0;
    }

    .pp-card p, .pp-card li {
      color: #6b7280;
      font-size: 0.95rem;
      line-height: 1.8;
      margin-bottom: 0;
    }

    .pp-card ul { padding-left: 0; list-style: none; margin-bottom: 0; }

    .pp-card ul li {
      padding: 5px 0 5px 20px;
      position: relative;
    }

    .pp-card ul li::before {
      content: '→';
      position: absolute;
      left: 0;
      color: #e74c3c;
      font-weight: bold;
    }

    .pp-sidebar { position: sticky; top: 20px; }

    .pp-nav {
      background: white;
      border-radius: 16px;
      padding: 28px;
      box-shadow: 0 2px 20px rgba(0,0,0,0.06);
    }

    .pp-nav h6 {
      font-weight: 700;
      color: #1a1a2e;
      margin-bottom: 16px;
      font-size: 0.95rem;
      text-transform: uppercase;
      letter-spacing: 1px;
    }

    .pp-nav a {
      display: block;
      padding: 8px 12px;
      color: #6b7280;
      text-decoration: none;
      font-size: 0.88rem;
      border-radius: 8px;
      transition: all 0.2s;
      margin-bottom: 4px;
    }

    .pp-nav a:hover {
      background: #fff5f5;
      color: #e74c3c;
      padding-left: 18px;
    }

    .pp-contact-box {
      background: linear-gradient(135deg, #1a1a2e, #0f3460);
      border-radius: 16px;
      padding: 28px;
      color: white;
      margin-top: 20px;
      text-align: center;
    }

    .pp-contact-box h6 { font-weight: 700; margin-bottom: 10px; }
    .pp-contact-box p { font-size: 0.85rem; opacity: 0.8; margin-bottom: 15px; }

    .pp-contact-box a {
      background: #e74c3c;
      color: white;
      padding: 10px 24px;
      border-radius: 50px;
      text-decoration: none;
      font-size: 0.88rem;
      font-weight: 600;
      display: inline-block;
      transition: background 0.2s;
    }

    .pp-contact-box a:hover { background: #c0392b; color: white; }

    .pp-updated {
      background: #fff5f5;
      border: 1px solid #fecaca;
      border-radius: 10px;
      padding: 14px 20px;
      font-size: 0.85rem;
      color: #e74c3c;
      margin-bottom: 30px;
      display: flex;
      align-items: center;
      gap: 10px;
    }
  </style>
</head>
<body>
 <nav class="navbar navbar-expand-lg navbar-dark bg-transparent position-absolute top-0 start-0 w-100 py-3">
    <div class="container">

      <!-- LOGO LEFT -->
      <a class="navbar-brand d-flex align-items-center" href="#">
        <img src="{{ asset('images/jmk_logo.png') }}" alt="Logo" height="55" class="me-2">
        <span class="fw-semibold shop-name d-none d-lg-block">Juma khan shoes & watches repairing</span>
      </a>

      <!-- TOGGLER -->
<button class="navbar-toggler border-0 shadow-none red-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mainNavbar" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <!-- LINKS RIGHT -->
      <div class="collapse navbar-collapse justify-content-end" id="mainNavbar">
        <ul class="navbar-nav gap-lg-4 text-center text-lg-start">

          <li class="nav-item">
            <a class="nav-link " href="{{ route('index') }}">Home</a>
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

          <!-- DROPDOWN -->
        

        </ul>
      </div>
    </div>
  </nav>
<!-- HERO -->
<div class="pp-hero">
  <div class="container">
    <div class="pp-badge">📄 Legal Document</div>
    <h1>Privacy Policy</h1>
    <p>How we collect, use and protect your information at JMK Repairs Dubai</p>
  </div>
</div>

<!-- BODY -->
<div class="pp-body">
  <div class="container">
    <div class="row">

      <!-- MAIN CONTENT -->
      <div class="col-lg-8">

        <div class="pp-updated">
          📅 Last updated: March 2026 &nbsp;|&nbsp; JMK Repairs — Al Karama, Dubai, UAE
        </div>

        <div class="pp-card" id="introduction">
          <h2><span class="icon">👋</span> Introduction</h2>
          <p>Welcome to JMK Repairs Dubai. We are a professional repair service center located in Al Karama, Dubai, UAE. This Privacy Policy explains how we handle your personal information when you visit our website, contact us, or use our repair services. By using our services, you agree to the practices described in this policy.</p>
        </div>

        <div class="pp-card" id="information">
          <h2><span class="icon">📋</span> Information We Collect</h2>
          <p>We collect only the information necessary to provide our repair services:</p>
          <ul>
            <li>Name, email address and phone number (from appointment bookings)</li>
            <li>Your location or area in Dubai (to understand service coverage)</li>
            <li>Device or item details submitted for repair</li>
            <li>Messages or inquiries sent via our contact form or WhatsApp</li>
            <li>Basic browser and usage data via standard server logs</li>
          </ul>
        </div>

        <div class="pp-card" id="usage">
          <h2><span class="icon">⚙️</span> How We Use Your Information</h2>
          <p>Your information is used solely to serve you better:</p>
          <ul>
            <li>To confirm and manage your repair appointments</li>
            <li>To contact you regarding your repair status or follow-up</li>
            <li>To respond to your questions and inquiries</li>
            <li>To improve our website and service quality</li>
            <li>To send service updates if you have opted in</li>
          </ul>
        </div>

        <div class="pp-card" id="sharing">
          <h2><span class="icon">🔒</span> We Do Not Sell Your Data</h2>
          <p>JMK Repairs Dubai does not sell, rent or trade your personal information to any third party. Your data is kept strictly within our business operations. We may share information only when required by UAE law or government authority.</p>
        </div>

        <div class="pp-card" id="cookies">
          <h2><span class="icon">🍪</span> Cookies</h2>
          <p>Our website uses basic cookies to ensure proper functionality and improve your browsing experience. These cookies do not collect any personal information. You can disable cookies through your browser settings at any time without affecting your ability to use our services.</p>
        </div>

        <div class="pp-card" id="security">
          <h2><span class="icon">🛡️</span> Data Security</h2>
          <p>We take reasonable precautions to protect your personal information. Our website uses HTTPS encryption and your data is stored securely. While no method of transmission over the internet is 100% secure, we strive to use commercially acceptable means to protect your information.</p>
        </div>

        <div class="pp-card" id="rights">
          <h2><span class="icon">✅</span> Your Rights</h2>
          <p>You have the right to:</p>
          <ul>
            <li>Request access to the personal data we hold about you</li>
            <li>Ask us to correct or delete your information</li>
            <li>Opt out of any future communications from us</li>
            <li>Contact us with any privacy-related concern</li>
          </ul>
        </div>

        <div class="pp-card" id="contact">
          <h2><span class="icon">📬</span> Contact Us</h2>
          <p>If you have any questions about this Privacy Policy or how we handle your data, please reach out to us:</p>
          <ul>
            <li><strong>Email:</strong> Jumakhanzhob1@gmail.com</li>
            <li><strong>Phone:</strong> 0505090296 / 0505481819</li>
            <li><strong>Location:</strong> Al Karama, Dubai, UAE</li>
          </ul>
        </div>

      </div>

      <!-- SIDEBAR -->
      <div class="col-lg-4">
        <div class="pp-sidebar">

          <div class="pp-nav">
            <h6>Quick Navigation</h6>
            <a href="#introduction">👋 Introduction</a>
            <a href="#information">📋 Information We Collect</a>
            <a href="#usage">⚙️ How We Use It</a>
            <a href="#sharing">🔒 Data Sharing</a>
            <a href="#cookies">🍪 Cookies</a>
            <a href="#security">🛡️ Data Security</a>
            <a href="#rights">✅ Your Rights</a>
            <a href="#contact">📬 Contact Us</a>
          </div>

          <div class="pp-contact-box">
            <h6>Have a Question?</h6>
            <p>We are happy to answer any privacy related questions</p>
            <a href="{{ route('contact') }}">Get In Touch</a>
          </div>

        </div>
      </div>

    </div>
  </div>
</div>
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
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" defer></script>

</body>
</html>