<header class="mbe-navbar-wrapper">
  <div class="mbe-top-bar">
    <div class="mbe-container">
      <div class="mbe-contact-info">
        <span><i class="fas fa-envelope"></i> logistic@mutiarabundaexpress.com</span>
        <span><i class="fas fa-phone"></i> 082331481710 | 089678366832</span>
      </div>
      <div class="mbe-social-links">
        <a href="#" target="_blank" rel="noopener noreferrer"><i class="fab fa-facebook-f"></i> Facebook</a>
        <a href="#" target="_blank" rel="noopener noreferrer"><i class="fab fa-instagram"></i> Instagram</a>
        <a href="#" target="_blank" rel="noopener noreferrer"><i class="fab fa-youtube"></i> Youtube</a>
      </div>
    </div>
  </div>

  <nav class="mbe-bottom-bar">
    <div class="mbe-container">
      <div class="mbe-navbar-logo">
        <a href="index.php?company=mutiara-bunda">
          <img src="assets/images/mbe-logo.png" alt="Mutiara Bunda Express Logo" class="mbe-navbar-logo-img" />
        </a>
      </div>

      <div class="mbe-menu-icon" onclick="toggleMobileMenuMBE()">
        <i class="fas fa-bars"></i>
      </div>

      <div class="mbe-navbar-right">
        <ul class="mbe-navbar-links" id="mbeNavbarLinks">
          <li><a href="index.php?company=mutiara-bunda" class="<?php echo isset($_GET['company']) && $_GET['company'] == 'mutiara-bunda' && (!isset($_GET['page']) || $_GET['page'] == 'home') ? 'active-link' : ''; ?>">Home</a></li>
          <li><a href="index.php?company=mutiara-bunda&page=layanan" class="<?php echo isset($_GET['company']) && $_GET['company'] == 'mutiara-bunda' && isset($_GET['page']) && $_GET['page'] == 'layanan' ? 'active-link' : ''; ?>">Layanan</a></li>
          <li><a href="index.php?company=mutiara-bunda&page=news" class="<?php echo isset($_GET['company']) && $_GET['company'] == 'mutiara-bunda' && isset($_GET['page']) && $_GET['page'] == 'news' ? 'active-link' : ''; ?>">News</a></li>
          <li><a href="index.php?company=mutiara-bunda&page=kontak" class="<?php echo isset($_GET['company']) && $_GET['company'] == 'mutiara-bunda' && isset($_GET['page']) && $_GET['page'] == 'kontak' ? 'active-link' : ''; ?>">Kontak</a></li>
        </ul>
      </div>
    </div>
  </nav>
</header>