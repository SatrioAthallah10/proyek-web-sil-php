<?php
// Halaman konfirmasi pengiriman pesan
$page_title = "Pesan Terkirim";
?>
<section class="page-section">
  <div class="container">
    <div class="success-message">
      <i class="fas fa-check-circle"></i>
      <h1>Terima Kasih!</h1>
      <p>Pesan Anda telah berhasil dikirim. Kami akan segera menghubungi Anda.</p>
      <a href="index.php" class="submit-btn">Kembali ke Beranda</a>
    </div>
  </div>
</section>

<style>
.success-message {
  text-align: center;
  max-width: 600px;
  margin: 50px auto;
  padding: 40px;
  background: white;
  border-radius: 10px;
  box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
}

.success-message i {
  font-size: 4rem;
  color: #28a745;
  margin-bottom: 20px;
}

.success-message h1 {
  color: #333;
  margin-bottom: 15px;
}

.success-message p {
  color: #666;
  margin-bottom: 30px;
  font-size: 1.1rem;
}
</style>