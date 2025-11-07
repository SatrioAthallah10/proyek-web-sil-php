# Proyek Web SIL - Versi PHP/HTML/CSS

Website ini telah dikonversi dari React.js menjadi PHP murni dengan HTML dan CSS agar dapat dihosting di server non-VPS.

## Struktur Folder

```
proyek-web-sil-php/
├── index.php                 # File utama dengan routing PHP
├── assets/
│   ├── css/
│   │   ├── style.css         # CSS utama
│   │   └── components.css    # CSS komponen
│   ├── js/
│   │   └── script.js         # JavaScript interaktif
│   └── images/               # Semua gambar dan aset
├── includes/
│   ├── navbar.php            # Navbar Samudera Indah
│   ├── mutiara-bunda-navbar.php # Navbar Mutiara Bunda
│   ├── footer.php            # Footer Samudera Indah
│   └── mutiara-bunda-footer.php # Footer Mutiara Bunda
├── samudera-indah/           # Halaman Samudera Indah Lestari
│   ├── home.php
│   ├── layanan.php
│   ├── pesan-layanan.php
│   ├── news.php
│   ├── kontak.php
│   ├── hero.php
│   ├── marquee.php
│   ├── information-section.php
│   ├── destinations.php
│   └── client-ticker.php
└── mutiara-bunda/            # Halaman Mutiara Bunda Express
    ├── home.php
    ├── layanan.php
    ├── pesan-layanan.php
    ├── news.php
    ├── kontak.php
    ├── hero.php
    ├── marquee.php
    ├── information-section.php
    └── destinations.php
```

## Cara Mengakses Halaman

### Samudera Indah Lestari:
- Home: `index.php` atau `index.php?page=home`
- Layanan: `index.php?page=layanan`
- Pesan Layanan: `index.php?page=pesan-layanan`
- News: `index.php?page=news`
- Kontak: `index.php?page=kontak`

### Mutiara Bunda Express:
- Home: `index.php?company=mutiara-bunda`
- Layanan: `index.php?company=mutiara-bunda&page=layanan`
- Pesan Layanan: `index.php?company=mutiara-bunda&page=pesan-layanan`
- News: `index.php?company=mutiara-bunda&page=news`
- Kontak: `index.php?company=mutiara-bunda&page=kontak`

## Fitur

1. **Dua Brand dalam Satu Website**: Samudera Indah Lestari dan Mutiara Bunda Express
2. **Responsive Design**: Tampilan optimal di desktop dan mobile
3. **Hero Slider**: Otomatis berganti setiap 5 detik
4. **Navigasi Dinamis**: Navbar yang berubah sesuai brand
5. **Form Interaktif**: Form pemesanan dan kontak
6. **Animasi Smooth**: Transisi dan hover effects

## Persyaratan Server

- PHP 7.4 atau lebih tinggi
- Web server (Apache, Nginx, atau LiteSpeed)
- Tidak memerlukan database atau VPS

## Cara Install

1. Upload semua file ke folder hosting Anda
2. Pastikan folder `assets/images` memiliki permission yang benar
3. Akses website melalui browser

## Kustomisasi

### Mengubah Informasi Kontak:
- Edit file `includes/navbar.php` dan `includes/mutiara-bunda-navbar.php`
- Edit file `samudera-indah/kontak.php` dan `mutiara-bunda/kontak.php`

### Mengubah Gambar:
- Ganti gambar di folder `assets/images/`
- Pastikan nama file sama dengan yang ada di kode

### Mengubah Warna:
- Edit file `assets/css/style.css` untuk warna utama
- Edit file `assets/css/components.css` untuk warna komponen

## Notes

- Website ini 100% compatible dengan shared hosting
- Tidak memerlukan Node.js atau npm
- Semua styling menggunakan CSS murni dengan Font Awesome untuk icons
- JavaScript vanilla untuk interaktivitas (tidak memerlukan library eksternal)

## Browser Support

- Chrome 60+
- Firefox 55+
- Safari 12+
- Edge 79+