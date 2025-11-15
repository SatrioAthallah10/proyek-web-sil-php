<?php
// Template ini dipanggil oleh index.php
// Variabel $article sudah disiapkan oleh index.php sebelum file ini di-include.

if (!isset($article)) {
    // Pengaman jika file diakses langsung atau slug tidak ditemukan
    echo "<p>Artikel tidak ditemukan.</p>";
    return;
}
?>

<!-- Bagian Header Artikel dengan Gambar Penuh -->
<header class="article-header" style="background-image: url('<?php echo htmlspecialchars($article['image']); ?>');">
  <div class="article-header-overlay"></div>
  <div class="article-header-content">
    <span class="article-category"><?php echo htmlspecialchars($article['category']); ?></span>
    <h1 class="article-title"><?php echo htmlspecialchars($article['title']); ?></h1>
    <span class="article-date">Dipublikasikan pada <?php echo htmlspecialchars($article['date']); ?></span>
  </div>
</header>

<!-- Bagian Konten Artikel -->
<section class="page-section article-page-section">
  <div class="article-container">
    
    <!-- Konten Utama Artikel -->
    <div class="article-content">
      <?php echo $article['content']; // Output HTML dari data artikel ?>
    </div>
    
    <!-- Sidebar (Sederhana) -->
    <aside class="article-sidebar">
      <div class="sidebar-widget">
        <h3>Bagikan Artikel Ini</h3>
        <div class="share-buttons">
          <a href="#" class="share-btn facebook"><i class="fab fa-facebook-f"></i> Facebook</a>
          <a href="#" class="share-btn twitter"><i class="fab fa-twitter"></i> Twitter</a>
          <a href="#" class="share-btn whatsapp"><i class="fab fa-whatsapp"></i> WhatsApp</a>
          <a href="#" class="share-btn link"><i class="fas fa-link"></i> Salin Link</a>
        </div>
      </div>
      
      <div class="sidebar-widget">
        <h3>Butuh Penawaran?</h3>
        <p>Hubungi kami sekarang untuk mendapatkan tarif pengiriman terbaik rute Surabaya - Jakarta.</p>
        <a href="index.php?<?php echo isset($_GET['company']) ? 'company=' . htmlspecialchars($_GET['company']) . '&' : ''; ?>page=kontak" class="info-button" style="width: 70%; text-align: center;">Hubungi Kami</a>
      </div>
    </aside>

  </div>
</section>