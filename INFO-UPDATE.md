# ✅ Information Section - Updated Layout

## 🎯 **Perubahan yang Dilakukan**

Bagian informasi telah diubah agar sesuai dengan screenshot yang diminta:

### 📐 **Layout Structure:**
```
┌─────────────────────────────────────────┐
│      📍 Alamat (Tengah)                │
├─────────────────────────────────────────┤
│  🖼️ Gambar    │    📝 Teks Konten      │
│  (Kiri)       │    (Kanan)             │
│               │                        │
│               │   ❓ Judul Pertanyaan   │
│               │   📄 Deskripsi         │
│               │   🟢 Tombol CTA        │
└─────────────────────────────────────────┘
```

### 🎨 **Visual Elements:**

1. **Alamat Section** (Bagian Atas)
   - Icon lokasi merah (📍)
   - Teks alamat: "Jln.Sidotopo Lor No:22 A, Kota Surabaya, Indonesia"
   - Center alignment

2. **Two-Column Layout**
   - **Kiri**: Gambar logistik dengan rounded corners
   - **Kanan**: Konten teks dengan judul, deskripsi, dan tombol

3. **Typography**
   - **Judul**: "Mengapa Memilih [Brand]?"
   - **Deskripsi**: Penjelasan layanan
   - **Tombol**: "Lihat Layanan Kami" (hijau)

### 🎯 **Brand Differences:**

#### Samudera Indah Lestari:
- Icon lokasi: Merah (#c00000)
- Tombol: Hijau (#28a745)
- Link ke: `index.php?page=layanan`

#### Mutiara Bunda Express:
- Icon lokasi: Merah (#F03433)
- Tombol: Hijau (#28a745)
- Link ke: `index.php?company=mutiara-bunda&page=layanan`

## 📱 **Responsive Design**

### Desktop (>768px):
- Grid 2 kolom (50% - 50%)
- Gambar di kiri, teks di kanan
- Gap 60px antar kolom

### Mobile (<768px):
- Grid 1 kolom (100%)
- Gambar di atas, teks di bawah
- Gap 40px antar elemen

## 🎨 **Styling Details:**

### Gambar:
- Width: 100%
- Border radius: 10px
- Box shadow: 0 10px 30px rgba(0,0,0,0.1)
- Object fit: cover

### Tombol:
- Background: #28a745 (hijau)
- Padding: 15px 30px
- Border radius: 5px
- Box shadow: 0 4px 6px rgba(40,167,69,0.2)
- Hover effect: +2px translateY, darker shadow

### Typography:
- Font family: Merriweather Sans
- Judul: 2.5rem (desktop), 2rem (mobile)
- Teks: 1.1rem dengan line-height 1.8

## 🚀 **Cara Test:**

1. **Start XAMPP Apache**
2. **Copy project ke htdocs**
3. **Buka browser:**
   - Samudera: `http://localhost/proyek-web-sil-php`
   - Mutiara Bunda: `http://localhost/proyek-web-sil-php?company=mutiara-bunda`

4. **Scroll ke bagian informasi** (setelah hero slider)

## ✨ **Hasil Akhir:**

Sekarang bagian informasi sudah:
- ✅ **Layout gambar kiri, teks kanan** (sesuai screenshot)
- ✅ **Alamat di bagian atas** dengan icon lokasi
- ✅ **Responsive design** untuk mobile
- ✅ **Consistent styling** untuk kedua brand
- ✅ **Smooth hover effects** pada tombol
- ✅ **Proper spacing** dan typography

**Website siap di-test!** 🎉