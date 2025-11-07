<section class="page-section">
  <div class="container">
    <h1>Pesan Layanan</h1>
    <p>Formulir pemesanan layanan pengiriman kami.</p>
    
    <div class="contact-form">
      <form action="index.php?page=submit-pesan" method="POST">
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
          <label for="jenis_barang">Jenis Barang</label>
          <select id="jenis_barang" name="jenis_barang" required>
            <option value="">Pilih Jenis Barang</option>
            <option value="dokumen">Dokumen</option>
            <option value="paket">Paket/Koli</option>
            <option value="kargo">Kargo</option>
            <option value="lainnya">Lainnya</option>
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