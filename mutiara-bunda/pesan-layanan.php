<section class="page-section">
  <div class="container">
    <h1>Pesan Layanan</h1>
    <p>Formulir pemesanan layanan pengiriman cepat kami.</p>
    
    <div class="contact-form">
      <form action="index.php?company=mutiara-bunda&page=submit-pesan" method="POST">
        <div class="form-group">
          <label for="nama">Nama Lengkap</label>
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
          <label for="kota_asal">Kota Asal</label>
          <input type="text" id="kota_asal" name="kota_asal" required>
        </div>
        
        <div class="form-group">
          <label for="kota_tujuan">Kota Tujuan</label>
          <input type="text" id="kota_tujuan" name="kota_tujuan" required>
        </div>
        
        <div class="form-group">
          <label for="jenis_layanan">Jenis Layanan</label>
          <select id="jenis_layanan" name="jenis_layanan" required>
            <option value="">Pilih Jenis Layanan</option>
            <option value="express">Express</option>
            <option value="regular">Regular</option>
            <option value="kargo">Kargo</option>
          </select>
        </div>
        
        <div class="form-group">
          <label for="pesan">Pesan Tambahan</label>
          <textarea id="pesan" name="pesan" rows="4"></textarea>
        </div>
        
        <button type="submit" class="submit-btn">Kirim Pesanan</button>
      </form>
    </div>
  </div>
</section>