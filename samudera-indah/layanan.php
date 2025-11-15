<?php
// (BARU) Daftar kota lengkap
$service_areas = [
  'Balikpapan', 'Samarinda', 'Panajam', 'Berau', 'Nunukan', 'Sendawar', 
  'Tenggarong', 'Sanggata', 'Tanah Grogot', 'Bontang', 'Banjarmasin', 
  'Watampone', 'Enrekang', 'Banggae', 'Mamuju', 'Polewali', 
  'Kolaka', 'Manado', 'Gorontalo', 'Luwuk', 'Taliabu', 'Palu', 'Kendari', 
  'Makassar', 'Konawe', 'Muna', 'Baubau', 'Jeneponto', 'Sorong', 
  'Manokwari', 'Merauke', 'Timika', 'Jayapura', 'Kaimana', 'Biak', 
  'Tarakan', 'Kutai Kartanegara', 'Bulukumba', 'Minahasa', 'Nabire',
  'Lampung', 'Palembang', 'Jambi', 'Pekan Baru', 'Medan', 'Aceh', 
  'Tanjung Pinang', 'Batam', 'Denpasar', 'Lombok', 'Sumbawa', 'Bima', 
  'Labuan Bajo', 'Ruteng', 'Bajawa', 'Ende', 'Maumere', 'Larantuka', 
  'Waingapu', 'Waikelo', 'Waikabubak', 'Atambua', 'Kupang', 'Soe', 
  'Kefa', 'Kalabahi', 'Ternate', 'Tidore', 'Sofifi', 'Jailolo', 'Weda', 
  'Maba', 'Merotai', 'Tanjung Balai Karimun', 'Natuna', 'Bintan', 'Ambon', 
  'Masohi', 'Saumlaki', 'Bacan'
];
// (BARU) Mengurutkan kota berdasarkan abjad
sort($service_areas);
?>
<section class="page-section">
  <div class="container">
    <div class="layanan-header-centered">
      <h1>Area Jangkauan Layanan Kami</h1>
      <p>Kami menjangkau kota-kota besar dan daerah terpencil di seluruh nusantara untuk memastikan distribusi Anda berjalan lancar.</p>
    </div>
    
    <div class="search-container">
      <i class="fas fa-search search-icon"></i>
      <input type="text" id="citySearch" placeholder="Cari kota atau daerah..." onkeyup="filterCities()">
    </div>
    
    <div class="cities-grid" id="citiesGrid">
      
      <?php foreach ($service_areas as $city): ?>
      <div class="city-card">
        <div class="city-icon-wrapper">
          <i class="fas fa-map-marker-alt"></i>
        </div>
        <span class="city-name"><?php echo htmlspecialchars($city); ?></span>
      </div>
      <?php endforeach; ?>

    </div>
  </div>
</section>