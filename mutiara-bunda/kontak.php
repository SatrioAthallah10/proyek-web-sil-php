<section class="page-section">
  <div class="container">
    <h1>Kontak Kami</h1>
    <p>Hubungi kami untuk informasi lebih lanjut tentang layanan pengiriman cepat.</p>
    
    <div class="contact-grid">
      <!-- Kirim Pesan Section -->
      <div class="contact-form-section">
        <h2>Kirim Pesan</h2>
        <form class="contact-form" action="index.php?company=mutiara-bunda&page=submit-contact" method="POST">
          <div class="form-group">
            <label for="nama">Nama</label>
            <input type="text" id="nama" name="nama" required>
          </div>
          
          <div class="form-group">
            <label for="email">Email</label>
            <input type="email" id="email" name="email" required>
          </div>
          
          <div class="form-group">
            <label for="telepon">Telepon</label>
            <input type="tel" id="telepon" name="telepon" required>
          </div>
          
          <div class="form-group">
            <label for="subjek">Subjek</label>
            <input type="text" id="subjek" name="subjek" required>
          </div>
          
          <div class="form-group">
            <label for="pesan">Pesan</label>
            <textarea id="pesan" name="pesan" rows="5" required></textarea>
          </div>
          
          <button type="submit" class="submit-btn">Kirim Pesan</button>
        </form>
      </div>
      
      <!-- Lokasi Kami Section -->
      <div class="location-section">
        <h2>Lokasi Kami</h2>
        
        <!-- Map Placeholder -->
        <div class="map-container">
          <div class="map-placeholder">
            <i class="fas fa-map-marked-alt map-icon"></i>
            <p>Jl. Sidotopo Lor No.22 A, Kota Surabaya, Indonesia</p>
          </div>
        </div>
        
        <!-- Quick Help -->
        <div class="quick-help">
          <h3>Butuh Bantuan Cepat?</h3>
          <div class="contact-items">
            <div class="contact-item">
              <i class="fab fa-whatsapp whatsapp-icon"></i>
              <div class="contact-info">
                <span class="contact-label">WhatsApp 1</span>
                <span class="contact-value">082331481710</span>
              </div>
            </div>
            
            <div class="contact-item">
              <i class="fab fa-whatsapp whatsapp-icon"></i>
              <div class="contact-info">
                <span class="contact-label">WhatsApp 2</span>
                <span class="contact-value">089678366832</span>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>