<header class="navbar-wrapper">
  <!-- BAGIAN ATAS (BIRU) -->
  <div class="top-bar">
    <div class="container">
      <div class="contact-info">
        <span>
          <i class="fas fa-envelope"></i> Logistic Solution
        </span>
        <span>
          <i class="fas fa-phone"></i> 082331481710 | 089678366832
        </span>
      </div>
      <div class="social-links">
        <a href="#" target="_blank" rel="noopener noreferrer"><i class="fab fa-facebook-f"></i> Facebook</a>
        <a href="#" target="_blank" rel="noopener noreferrer"><i class="fab fa-instagram"></i> Instagram</a>
        <a href="#" target="_blank" rel="noopener noreferrer"><i class="fab fa-youtube"></i> Youtube</a>
      </div>
    </div>
  </div>

  <!-- BAGIAN BAWAH (KREM) -->
  <nav class="bottom-bar">
    <div class="container">
      <div class="navbar-logo">
        <a href="index.php">
          <img src="assets/images/samudera-letari.svg" alt="Samudera Indah Lestari Logo" class="navbar-logo-img" />
        </a>
      </div>

      <!-- Tombol Hamburger Menu (hanya tampil di mobile) -->
      <div class="menu-icon" onclick="toggleMobileMenu()">
        <i class="fas fa-bars"></i>
      </div>

      <!-- Grup baru untuk item di sebelah kanan -->
      <div class="navbar-right">
        <ul class="navbar-links" id="navbarLinks">
          <li><a href="index.php" class="<?php echo (!isset($_GET['page']) || $_GET['page'] == 'home') && (!isset($_GET['company']) || $_GET['company'] != 'mutiara-bunda') ? 'active-link' : ''; ?>">Home</a></li>
          <li><a href="index.php?page=layanan" class="<?php echo isset($_GET['page']) && $_GET['page'] == 'layanan' && (!isset($_GET['company']) || $_GET['company'] != 'mutiara-bunda') ? 'active-link' : ''; ?>">Layanan</a></li>
          <li><a href="index.php?page=news" class="<?php echo isset($_GET['page']) && $_GET['page'] == 'news' && (!isset($_GET['company']) || $_GET['company'] != 'mutiara-bunda') ? 'active-link' : ''; ?>">News</a></li>
          <li><a href="index.php?page=kontak" class="<?php echo isset($_GET['page']) && $_GET['page'] == 'kontak' && (!isset($_GET['company']) || $_GET['company'] != 'mutiara-bunda') ? 'active-link' : ''; ?>">Kontak</a></li>
        </ul>
      </div>
    </div>
  </nav>
</header>