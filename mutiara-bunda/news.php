<section class="page-section">
  <div class="container">
    <h1>News & Update</h1>
    <p>Berita terkini dan informasi penting seputar layanan kami.</p>
    
    <!-- Search Box -->
    <div class="search-container">
      <input type="text" id="newsSearch" placeholder="Cari berita atau artikel..." onkeyup="filterNews()">
      <i class="fas fa-search search-icon"></i>
    </div>
    
    <!-- Category Tags -->
    <div class="category-tags">
      <button class="tag active" onclick="filterByCategory('all', this)">Semua</button>
      <button class="tag" onclick="filterByCategory('ekspansi', this)">Ekspansi</button>
      <button class="tag" onclick="filterByCategory('promosi', this)">Promosi</button>
      <button class="tag" onclick="filterByCategory('update', this)">Update</button>
    </div>
    
    <!-- Empty State (Sekarang disembunyikan by default) -->
    <div class="empty-state" id="emptyState" style="display: none;">
      <i class="fas fa-newspaper empty-icon"></i>
      <h2>Hasil Tidak Ditemukan</h2>
      <p>Tidak ada berita yang sesuai dengan kriteria pencarian Anda.</p>
      <button class="reset-btn" onclick="resetFilter()">Reset Filter</button>
    </div>
    
    <!-- News Grid (Sekarang ditampilkan) -->
    <div class="news-grid" id="newsGrid">
      
      <!-- Artikel 1 (SEO Target: Jasa Pengiriman Surabaya Jakarta Cepat) -->
      <article class="news-card" data-category="ekspansi">
        <a href="index.php?company=mutiara-bunda&page=article&slug=jasa-pengiriman-surabaya-jakarta" class="news-card-link">
          <div class="news-image">
            <img src="assets/images/jkt.jpg" alt="Jasa Pengiriman Kargo Cepat Surabaya ke Jakarta">
          </div>
          <div class="news-content">
            <span class="news-date">14 November 2025</span>
            <h3>Ekspansi Rute: Jasa Pengiriman Surabaya Jakarta Kini Lebih Cepat!</h3>
            <p>
              Kami resmi membuka rute harian baru untuk jasa pengiriman Surabaya Jakarta. Nikmati layanan logistik terpercaya dengan estimasi waktu yang lebih singkat...
            </p>
            <span class="read-more">Baca Selengkapnya <i class="fas fa-arrow-right"></i></span>
          </div>
        </a>
      </article>
      
      <!-- Artikel 2 (SEO Target: Tarif Ekspedisi Surabaya Jakarta Murah) -->
      <article class="news-card" data-category="promosi">
        <a href="index.php?company=mutiara-bunda&page=article&slug=tarif-ekspedisi-surabaya-jakarta" class="news-card-link">
          <div class="news-image">
            <img src="assets/images/hero_section.png" alt="Tarif Ekspedisi Kargo Murah Surabaya Jakarta">
          </div>
          <div class="news-content">
            <span class="news-date">10 November 2025</span>
            <h3>Promo Spesial: Tarif Ekspedisi Surabaya Jakarta Paling Kompetitif</h3>
            <p>
              Dapatkan tarif ekspedisi Surabaya Jakarta terbaik bulan ini. Layanan kargo darat kami menjamin pengiriman barang Anda aman, cepat, dan hemat biaya...
            </p>
            <span class="read-more">Baca Selengkapnya <i class="fas fa-arrow-right"></i></span>
          </div>
        </a>
      </article>
      
      <!-- Artikel 3 (SEO Target: Logistik Aman Surabaya Jakarta) -->
      <article class="news-card" data-category="update">
        <a href="index.php?company=mutiara-bunda&page=article&slug=layanan-logistik-aman-surabaya-jakarta" class="news-card-link">
          <div class="news-image">
            <img src="assets/images/sby.jpg" alt="Layanan Logistik Aman Surabaya ke Jakarta Terpercaya">
          </div>
          <div class="news-content">
            <span class="news-date">05 November 2025</span>
            <h3>Update Layanan: Peningkatan Keamanan Logistik Rute Surabaya - Jakarta</h3>
            <p>
              Kepercayaan Anda adalah prioritas. Kami meningkatkan sistem pelacakan dan keamanan untuk semua pengiriman kargo dari Surabaya ke Jakarta...
            </p>
            <span class="read-more">Baca Selengkapnya <i class="fas fa-arrow-right"></i></span>
          </div>
        </a>
      </article>

    </div>
  </div>
</section>