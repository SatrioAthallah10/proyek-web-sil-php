<section class="page-section">
  <div class="container">
    <h1>Area Jangkauan Layanan Kami</h1>
    <p>Kami menjangkau kota - kota besar dan daerah terpencil di seluruh nusantara untuk memastikan distribusi Anda berjalan lancar.</p>
    
    <!-- Search Box -->
    <div class="search-container">
      <input type="text" id="citySearch" placeholder="Cari kota atau daerah..." onkeyup="filterCities()">
      <i class="fas fa-search search-icon"></i>
    </div>
    
    <!-- Cities Container dengan Navigation -->
    <div class="cities-container">
      <!-- Navigation Arrows -->
      <button class="scroll-nav prev" id="scrollPrev" onclick="scrollCities('left')">
        <i class="fas fa-chevron-left"></i>
      </button>
      <button class="scroll-nav next" id="scrollNext" onclick="scrollCities('right')">
        <i class="fas fa-chevron-right"></i>
      </button>
      
      <!-- Cities Grid Horizontal -->
      <div class="cities-grid" id="citiesGrid">
        <!-- Baris 1 -->
        <div class="city-card">
          <i class="fas fa-map-marker-alt city-icon"></i>
          <span class="city-name">Aceh</span>
        </div>
        <div class="city-card">
          <i class="fas fa-map-marker-alt city-icon"></i>
          <span class="city-name">Ambon</span>
        </div>
        <div class="city-card">
          <i class="fas fa-map-marker-alt city-icon"></i>
          <span class="city-name">Atambua</span>
        </div>
        <div class="city-card">
          <i class="fas fa-map-marker-alt city-icon"></i>
          <span class="city-name">Bacan</span>
        </div>
        
        <!-- Baris 2 -->
        <div class="city-card">
          <i class="fas fa-map-marker-alt city-icon"></i>
          <span class="city-name">Bima</span>
        </div>
        <div class="city-card">
          <i class="fas fa-map-marker-alt city-icon"></i>
          <span class="city-name">Bintan</span>
        </div>
        <div class="city-card">
          <i class="fas fa-map-marker-alt city-icon"></i>
          <span class="city-name">Bontang</span>
        </div>
        <div class="city-card">
          <i class="fas fa-map-marker-alt city-icon"></i>
          <span class="city-name">Bulukumba</span>
        </div>
        
        <!-- Baris 3 -->
        <div class="city-card">
          <i class="fas fa-map-marker-alt city-icon"></i>
          <span class="city-name">Denpasar</span>
        </div>
        <div class="city-card">
          <i class="fas fa-map-marker-alt city-icon"></i>
          <span class="city-name">Jambi</span>
        </div>
        <div class="city-card">
          <i class="fas fa-map-marker-alt city-icon"></i>
          <span class="city-name">Kupang</span>
        </div>
        <div class="city-card">
          <i class="fas fa-map-marker-alt city-icon"></i>
          <span class="city-name">Labuan Bajo</span>
        </div>
        
        <!-- Baris 4 -->
        <div class="city-card">
          <i class="fas fa-map-marker-alt city-icon"></i>
          <span class="city-name">Lampung</span>
        </div>
        <div class="city-card">
          <i class="fas fa-map-marker-alt city-icon"></i>
          <span class="city-name">Larantuka</span>
        </div>
        <div class="city-card">
          <i class="fas fa-map-marker-alt city-icon"></i>
          <span class="city-name">Lombok</span>
        </div>
        <div class="city-card">
          <i class="fas fa-map-marker-alt city-icon"></i>
          <span class="city-name">Makassar</span>
        </div>
        
        <!-- Baris 5 -->
        <div class="city-card">
          <i class="fas fa-map-marker-alt city-icon"></i>
          <span class="city-name">Maumere</span>
        </div>
        <div class="city-card">
          <i class="fas fa-map-marker-alt city-icon"></i>
          <span class="city-name">Medan</span>
        </div>
        <div class="city-card">
          <i class="fas fa-map-marker-alt city-icon"></i>
          <span class="city-name">Padang</span>
        </div>
        <div class="city-card">
          <i class="fas fa-map-marker-alt city-icon"></i>
          <span class="city-name">Palu</span>
        </div>
        
        <!-- Baris 6 -->
        <div class="city-card">
          <i class="fas fa-map-marker-alt city-icon"></i>
          <span class="city-name">Panajam</span>
        </div>
        <div class="city-card">
          <i class="fas fa-map-marker-alt city-icon"></i>
          <span class="city-name">Pekan Baru</span>
        </div>
        <div class="city-card">
          <i class="fas fa-map-marker-alt city-icon"></i>
          <span class="city-name">Polewali</span>
        </div>
        <div class="city-card">
          <i class="fas fa-map-marker-alt city-icon"></i>
          <span class="city-name">Ruteng</span>
        </div>
        
        <!-- Baris 7 -->
        <div class="city-card">
          <i class="fas fa-map-marker-alt city-icon"></i>
          <span class="city-name">Samarinda</span>
        </div>
        <div class="city-card">
          <i class="fas fa-map-marker-alt city-icon"></i>
          <span class="city-name">Sorong</span>
        </div>
        <div class="city-card">
          <i class="fas fa-map-marker-alt city-icon"></i>
          <span class="city-name">Ternate</span>
        </div>
        <div class="city-card">
          <i class="fas fa-map-marker-alt city-icon"></i>
          <span class="city-name">Waikabubak</span>
        </div>
        
        <!-- Baris 8 -->
        <div class="city-card">
          <i class="fas fa-map-marker-alt city-icon"></i>
          <span class="city-name">Waikelo</span>
        </div>
        <div class="city-card">
          <i class="fas fa-map-marker-alt city-icon"></i>
          <span class="city-name">Waingapu</span>
        </div>
        <div class="city-card">
          <i class="fas fa-map-marker-alt city-icon"></i>
          <span class="city-name">Watampone</span>
        </div>
        <div class="city-card">
          <i class="fas fa-map-marker-alt city-icon"></i>
          <span class="city-name">Weda</span>
        </div>
      </div>
    </div>
  </div>
</section>