<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Transport Services</title>
  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
    :root{
      --bg:#0f1724;
      --muted:#94a3b8;
      --accent:#06b6d4;
      --icon-size:28px;
      --gap:14px;
    }
     footer.site-footer{
      background: linear-gradient(180deg, rgba(2,6,23,0.95), rgba(2,6,23,0.98));
      color:var(--muted);
      padding:20px 16px;
      display:flex;
      align-items:center;
      justify-content:space-between;
      gap:20px;
      flex-wrap:wrap;
    }

    .footer-brand{
      display:flex;
      align-items:center;
      gap:12px;
      color:var(--muted);
      text-decoration:none;
    }

    .footer-brand .logo{
      width:36px;
      height:36px;
      background:var(--accent);
      border-radius:8px;
      display:inline-grid;
      place-items:center;
      color:#042027;
      font-weight:700;
      font-size:16px;
    }

    .social-links{
      display:flex;
      gap:var(--gap);
      align-items:center;
    }

    .social-links a{
      display:inline-flex;
      align-items:center;
      justify-content:center;
      width:44px;
      height:44px;
      border-radius:10px;
      text-decoration:none;
      color:var(--muted);
      background:transparent;
      transition:transform .12s ease, background .12s ease, color .12s ease;
      box-shadow: none;
      border:1px solid rgba(255,255,255,0.03);
    }

    .social-links a svg{
      width:var(--icon-size);
      height:var(--icon-size);
      display:block;
      fill:currentColor;
    }

    .social-links a:hover,
    .social-links a:focus{
      transform:translateY(-4px);
      color:#071b1f;
      background:linear-gradient(180deg, #06b6d4, #0891b2);
      box-shadow:0 6px 18px rgba(6,182,212,0.18);
      outline: none;
    }

    .footer-note{
      font-size:13px;
      color:rgba(255,255,255,0.7);
    }

    @media (max-width:520px){
      footer.site-footer{
        flex-direction:column;
        align-items:center;
        text-align:center;
      }
      .social-links{
        margin-top:8px;
      }
    }



    body {
      font-family: Arial, sans-serif;
    }
    .hero {
      /*background: url('https://images.unsplash.com/photo-1503736334956-4c8f8e92946d') no-repeat center center/cover;*/
      background: url('images/1508.jpeg') no-repeat center center/cover;
      height: 80vh;
      color: white;
      display: flex;
      align-items: center;
      justify-content: center;
      text-align: right;
    }
    .hero h1 {
      font-size: 3rem;
      font-weight: bold;
    }
    .service-card {
      transition: transform 0.3s;
    }
    .service-card:hover {
      transform: scale(1.05);
    }
    footer {
      background: #343a40;
      color: white;
      padding: 20px 0;
    }
  </style>
</head>
<body>

  <!-- Navbar -->
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container">
      <a class="navbar-brand" href="#">Bhatt Transport</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ms-auto">
          <li class="nav-item"><a class="nav-link" href="#services">Services</a></li>
          <li class="nav-item"><a class="nav-link" href="#contact">Contact</a></li>
          <li class="nav-item"><a class="nav-link" href="admin/login.php" target="_blank">admin</a></li>
        </ul>
      </div>
    </div>
  </nav>

  <!-- Hero Section -->
  <section class="hero">
    <div>
      <h1>Bhatt Transport Solutions</h1>
      <p>Connecting cities, businesses, and people with ease.</p>
      <a href="#services" class="btn btn-primary btn-lg">Explore Services</a>
    </div>
  </section>

  <!-- Services Section -->
  <section id="services" class="py-5">
    <div class="container">
      <h2 class="text-center mb-4">Our Services</h2>
      <div class="row">
        <div class="col-md-4">
          <div class="card service-card">
            <img src="images/1839.jpeg" class="card-img-top" alt="Cargo">
            <div class="card-body">
              <h5 class="card-title">Cargo Transport</h5>
              <p class="card-text">Safe and efficient cargo delivery across the country.</p>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="card service-card">
            <img src="images/Construction.png" class="card-img-top" alt="Passenger">
            <div class="card-body">
              <h5 class="card-title">Passenger Transport</h5>
              <p class="card-text">Comfortable and affordable travel for individuals and groups.</p>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="card service-card">
            <img src="images/banner.jpeg" class="card-img-top" alt="Logistics">
            <div class="card-body">
              <h5 class="card-title">Logistics Solutions</h5>
              <p class="card-text">End-to-end logistics management tailored to your business needs.</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Contact Section -->
  <section id="contact" class="py-5 bg-light">
    <div class="container">
      <h2 class="text-center mb-4">Contact Us</h2>
      <form id="contactForm" class="col-md-8 mx-auto">
        <div class="mb-3">
          <label for="name" class="form-label">Name</label>
          <input type="text" id="name" class="form-control" required>
        </div>
        <div class="mb-3">
          <label for="email" class="form-label">Email</label>
          <input type="email" id="email" class="form-control" required>
        </div>
        <div class="mb-3">
          <label for="message" class="form-label">Message</label>
          <textarea id="message" class="form-control" rows="4" required></textarea>
        </div>
        <button type="submit" class="btn btn-primary">Send Message</button>
      </form>
    </div>
  </section>

  <!-- Footer -->
  <footer class="text-center">
    <p>&copy; 2025 Bhatt Transport. All rights reserved.</p>
 

    <footer class="site-footer" role="contentinfo">
    <a class="footer-brand" href="/" aria-label="Homepage">
      <span class="logo">AB</span>
      <span class="footer-note">Acme Brand</span>
    </a>

    <div class="social-links" aria-label="Social links">
      <!-- Facebook -->
      <a href="https://www.facebook.com/yourpage" target="_blank" rel="noopener noreferrer" aria-label="Facebook">
        <svg viewBox="0 0 24 24" aria-hidden="true" focusable="false">
          <path d="M22 12.07C22 6.48 17.52 2 11.93 2S2 6.48 2 12.07c0 4.99 3.66 9.13 8.44 9.93v-7.03H7.9v-2.9h2.54V9.41c0-2.5 1.49-3.88 3.77-3.88 1.09 0 2.23.2 2.23.2v2.45h-1.25c-1.23 0-1.61.77-1.61 1.56v1.87h2.74l-.44 2.9h-2.3V22c4.78-.8 8.44-4.94 8.44-9.93z"/>
        </svg>
      </a>

      <!-- Instagram -->
      <a href="https://www.instagram.com/yourprofile" target="_blank" rel="noopener noreferrer" aria-label="Instagram">
        <svg viewBox="0 0 24 24" aria-hidden="true" focusable="false">
          <path d="M7 2h10a5 5 0 0 1 5 5v10a5 5 0 0 1-5 5H7a5 5 0 0 1-5-5V7a5 5 0 0 1 5-5zm5 6.2A4.8 4.8 0 1 0 16.8 13 4.8 4.8 0 0 0 12 8.2zm6.4-3.6a1.12 1.12 0 1 0 1.12 1.12A1.12 1.12 0 0 0 18.4 4.6zM12 10.6A1.4 1.4 0 1 1 10.6 12 1.4 1.4 0 0 1 12 10.6z"/>
        </svg>
      </a>

      <!-- WhatsApp -->
      <a href="#" id="whatsapp-link" aria-label="WhatsApp chat">
        <svg viewBox="0 0 24 24" aria-hidden="true" focusable="false">
          <path d="M20.52 3.48A11.94 11.94 0 0 0 12 0C5.37 0 .02 5.35.02 12a11.9 11.9 0 0 0 2.07 6.6L0 24l5.6-1.47A11.94 11.94 0 0 0 12 24c6.63 0 12-5.35 12-12 0-1.98-.46-3.86-1.48-5.52zM12 21.6a9.5 9.5 0 0 1-4.84-1.33l-.35-.21-3.33.87.89-3.25-.23-.34A9.5 9.5 0 1 1 21.5 12 9.5 9.5 0 0 1 12 21.6zM17.1 14.1c-.3-.15-1.78-.88-2.06-.98-.28-.1-.48-.15-.68.15s-.78.98-.96 1.18c-.18.2-.36.22-.66.07-.3-.15-1.26-.46-2.4-1.48-.89-.79-1.48-1.77-1.65-2.07-.17-.3-.02-.46.13-.61.13-.13.3-.36.45-.54.15-.18.2-.3.3-.5.1-.2 0-.38-.05-.53-.05-.15-.68-1.64-.93-2.25-.24-.59-.49-.51-.68-.52l-.58-.01c-.2 0-.52.07-.8.37-.28.3-1.07 1.05-1.07 2.56s1.1 2.97 1.25 3.18c.15.2 2.15 3.3 5.2 4.63 3.05 1.33 3.05.89 3.6.83.55-.06 1.78-.72 2.03-1.42.25-.7.25-1.3.18-1.42-.07-.12-.28-.2-.58-.35z"/>
        </svg>
      </a>
    </div>
  </footer>

  <!-- Bootstrap JS -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
  <script>
    // Simple form submission alert
    document.getElementById('contactForm').addEventListener('submit', function(e) {
      e.preventDefault();
      alert('Thank you for contacting us! We will get back to you soon.');
      this.reset();
    });
    // JavaScript helper for WhatsApp link
    (function(){
      // Replace with your phone number in international format without plus or spaces
      // Example India: 919876543210  Example US: 15551234567
      const phoneNumber = "919876543210";

      // Optional default message
      const defaultMessage = encodeURIComponent("Hello! I found you on the website and would like to chat.");

      const waLink = document.getElementById("whatsapp-link");
      if(waLink){
        waLink.addEventListener("click", function (e) {
          e.preventDefault();
          // Use wa.me link which opens WhatsApp or WhatsApp Web
          const url = `https://wa.me/${phoneNumber}?text=${defaultMessage}`;
          window.open(url, "_blank", "noopener,noreferrer");
        });

        // Make it keyboard accessible
        waLink.addEventListener("keydown", function(ev){
          if(ev.key === "Enter" || ev.key === " "){
            ev.preventDefault();
            waLink.click();
          }
        });
      }
    })();
  </script>
</body>
</html>