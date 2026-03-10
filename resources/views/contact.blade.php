<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Contact</title>
    <link rel="icon" type="image/png" href="../images/jmk_logo.png">
<link rel="shortcut icon" type="image/png" href="../images/jmk_logo.png">
<link rel="apple-touch-icon" href="../images/jmk_logo.png">

       <link rel="stylesheet" href="{{ asset('css/style.css') }}">
 <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;700&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
  <style>
    .map-section {
  margin-top: 60px;
}

.map-responsive {
  position: relative;
  width: 100%;
  height: 400px;
}

.map-responsive iframe {
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  filter: grayscale(20%) contrast(105%);
}

    .contact-section {
  background: #f8f9fa;
}

/* LEFT SIDE */
.contact-info {
  background: #ffffff;
  border-radius: 14px;
  box-shadow: 0 8px 25px rgba(0,0,0,0.05);
}

.info-card {
  padding: 14px 16px;
  border-radius: 10px;
  background: #f8f9fa;
  transition: all 0.3s ease;
}

.info-card:hover {
  background: #0d6efd;
  color: #fff;
  transform: translateY(-4px);
}

.info-card:hover p {
  color: #fff;
}

/* RIGHT SIDE */
.contact-form {
  background: #ffffff;
  border-radius: 14px;
  box-shadow: 0 8px 25px rgba(0,0,0,0.05);
}

/* INPUT STYLE */
.custom-input {
  border-radius: 8px;
  padding: 10px 14px;
  border: 1px solid #ddd;
  transition: 0.3s;
}

.custom-input:focus {
  border-color: #0d6efd;
  box-shadow: 0 0 0 0.15rem rgba(13,110,253,0.15);
}

/* BUTTON */
.submit-btn {
  background: #0d6efd;
  border: none;
  padding: 12px;
  font-weight: 600;
  border-radius: 8px;
  transition: 0.3s;
}

.glass-card {
  backdrop-filter: blur(8px);
  background: rgba(43, 50, 110, 0.7);
  transition: 0.3s ease;
}

.glass-card:hover {
  background: rgba(255,255,255,0.9);
  box-shadow: 0 15px 35px rgba(13,110,253,0.25);
}/* More noticeable float */
@keyframes floatY {
  0%   { transform: translateY(0px); }
  25%  { transform: translateY(-15px); }  /* more lift */
  50%  { transform: translateY(0px); }
  75%  { transform: translateY(15px); }   /* move down too */
  100% { transform: translateY(0px); }
}

/* Apply animation */
.float-animate {
  animation: floatY 5s ease-in-out infinite;  /* slower & smoother */
  will-change: transform;
}



@media (max-width: 768px) {
  .map-responsive { height: 350px; }
}

@media (max-width: 500px) {
  .map-responsive { height: 280px; }
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
            <a class="nav-link active-nav" href="{{ route('contact') }}">Contact</a>
          </li>

          <!-- DROPDOWN -->
    <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown">
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
  <section class="contact-section py-5 font-ui">
  <div class="container">
    <div class="row g-5 align-items-stretch">

      <!-- LEFT: CONTACT INFO -->
      <div class="col-lg-5">
        <div class="contact-info h-100 p-4 slide-left">

          <h3 class="mb-4 fw-bold">Get in Touch</h3>
          <p class="text-muted mb-4">Have a repair request or question? Our team is ready to help you with fast and reliable service.</p>

          <div class="info-card mb-3">
            <h6>📍 Shop Address</h6>
            <p class="mb-0">JMk Suitcase, Watch & Shoes Repairing & Key Cutting – Al Karama, Dubai, UAE</p>
          </div>

          <div class="info-card mb-3">
            <h6>📞 Phone</h6>
            <p class="mb-0">0505090296 <br> 0505481819</p>
          </div>

          <div class="info-card mb-3">
            <h6>✉ Email</h6>
            <p class="mb-0">Jumakhanzhob1@gmail.com</p>
          </div>

          <div class="info-card">
            <h6>🕒 Working Hours</h6>
            <p class="mb-0">24/7 open</p>
          </div>

        </div>
      </div>

      <!-- RIGHT: CONTACT FORM -->
      <div class="col-lg-7">
        <div class="contact-form p-4 p-md-5 h-100 float-animate font-ui">
          <h3 class="fw-bold mb-4">Send a Message</h3>

         
      <!-- RIGHT: CONTACT FORM -->
 {{-- SUCCESS MESSAGE --}}
@if(session('success'))
  <div class="alert alert-success">
    {{ session('success') }}
  </div>
@endif

{{-- ERROR MESSAGE --}}
@if($errors->any())
  <div class="alert alert-danger">
    Please fill all required fields correctly.
  </div>
@endif

<form method="POST" action="{{ route('contact.send') }}">
  @csrf

  <div class="row g-3">
    <div class="col-md-6">
      <input type="text" name="name" class="form-control custom-input" placeholder="Your Name" value="{{ old('name') }}" required>
    </div>
    <div class="col-md-6">
      <input type="email" name="email" class="form-control custom-input" placeholder="Your Email" value="{{ old('email') }}" required>
    </div>
    <div class="col-12">
      <input type="text" name="subject" class="form-control custom-input" placeholder="Subject" value="{{ old('subject') }}">
    </div>
    <div class="col-12">
      <textarea name="message" class="form-control custom-input" rows="5" placeholder="Your Message" required>{{ old('message') }}</textarea>
    </div>
    <div class="col-12">
      <button type="submit" class="btn submit-btn w-100 glass-card">Send Message</button>
    </div>
  </div>
</form>




        </div>
      </div>

    </div>
  </div>
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