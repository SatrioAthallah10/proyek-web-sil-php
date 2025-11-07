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
      <button class="tag active" onclick="filterByCategory('all')">Semua</button>
      <button class="tag" onclick="filterByCategory('ekspansi')">Ekspansi</button>
      <button class="tag" onclick="filterByCategory('promosi')">Promosi</button>
      <button class="tag" onclick="filterByCategory('update')">Update</button>
      <button class="tag" onclick="filterByCategory('pengumuman')">Pengumuman</button>
    </div>
    
    <!-- Empty State -->
    <div class="empty-state" id="emptyState">
      <i class="fas fa-newspaper empty-icon"></i>
      <h2>Hasil Tidak Ditemukan</h2>
      <p>tidak ada berita yang sesuai dengan kriteria pencarian Anda</p>
      <button class="reset-btn" onclick="resetFilter()">Reset Filter</button>
    </div>
    
    <!-- News Grid (Hidden by default, will show when news is added) -->
    <div class="news-grid" id="newsGrid" style="display: none;">
      <!-- News items will be added here dynamically -->
    </div>
  </div>
</section>