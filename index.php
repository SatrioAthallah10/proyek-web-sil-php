<?php
// Routing sederhana dengan PHP
$page = isset($_GET['page']) ? $_GET['page'] : 'home';
$company = isset($_GET['company']) ? $_GET['company'] : 'samudera';

// Tentukan path berdasarkan parameter
switch($company) {
    case 'mutiara-bunda':
        $base_path = 'mutiara-bunda/';
        break;
    default:
        $base_path = 'samudera-indah/';
        $company = 'samudera';
}

// Include file yang sesuai
switch($page) {
    case 'layanan':
        $content_file = $base_path . 'layanan.php';
        break;
    case 'pesan-layanan':
        $content_file = $base_path . 'pesan-layanan.php';
        break;
    case 'news':
        $content_file = $base_path . 'news.php';
        break;
    case 'kontak':
        $content_file = $base_path . 'kontak.php';
        break;
    case 'home':
    default:
        if ($company === 'mutiara-bunda') {
            $content_file = $base_path . 'home.php';
        } else {
            $content_file = $base_path . 'home.php';
        }
        break;
}

// Fallback jika file tidak ada
if (!file_exists($content_file)) {
    $content_file = 'samudera-indah/home.php';
}

// SEO Meta Tags
$pageTitle = 'Samudera Indah Lestari - Solusi Logistik Terintegrasi';
$pageDescription = 'Solusi logistik terintegrasi untuk masa depan bisnis Anda. Pengiriman kargo laut dan darat dengan jangkauan nasional.';
$pageKeywords = 'logistik, pengiriman, kargo, samudera indah lestari, transportasi, distribusi';
$ogImage = 'assets/images/hero_section.png';

switch($page) {
    case 'layanan':
        $pageTitle = 'Layanan Kami - Area Jangkauan Pengiriman';
        $pageDescription = 'Kami menjangkau kota-kota besar dan daerah terpencil di seluruh nusantara untuk distribusi lancar.';
        $pageKeywords = 'layanan, jangkauan, kota, pengiriman, distribusi';
        break;
    case 'news':
        $pageTitle = 'News & Update - Berita Terkini';
        $pageDescription = 'Berita terkini dan informasi penting seputar layanan pengiriman kami.';
        $pageKeywords = 'news, berita, update, informasi, pengumuman';
        break;
    case 'kontak':
        $pageTitle = 'Kontak Kami - Hubungi Samudera Indah Lestari';
        $pageDescription = 'Hubungi kami untuk informasi lebih lanjut tentang layanan pengiriman dan logistik.';
        $pageKeywords = 'kontak, hubungi, alamat, telepon, email';
        break;
}

if ($company === 'mutiara-bunda') {
    $pageTitle = str_replace('Samudera Indah Lestari', 'Mutiara Bunda Express', $pageTitle);
    $pageDescription = str_replace('Samudera Indah Lestari', 'Mutiara Bunda Express', $pageDescription);
    $pageDescription = str_replace('Solusi logistik terintegrasi', 'Layanan kargo cepat dan terpercaya', $pageDescription);
    $pageKeywords = str_replace('samudera indah lestari', 'mutiara bunda express', $pageKeywords);
    $pageKeywords .= ', pengiriman cepat, kargo express';
}
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo htmlspecialchars($pageTitle); ?></title>
    
    <!-- SEO Meta Tags -->
    <meta name="description" content="<?php echo htmlspecialchars($pageDescription); ?>">
    <meta name="keywords" content="<?php echo htmlspecialchars($pageKeywords); ?>">
    <meta name="author" content="Samudera Indah Lestari">
    <meta name="robots" content="index, follow">
    <meta name="language" content="Indonesian">
    <meta name="geo.region" content="ID-JI">
    <meta name="geo.placename" content="Surabaya">
    <meta name="geo.position" content="-7.2575;112.7521">
    
    <!-- Open Graph Meta Tags -->
    <meta property="og:title" content="<?php echo htmlspecialchars($pageTitle); ?>">
    <meta property="og:description" content="<?php echo htmlspecialchars($pageDescription); ?>">
    <meta property="og:image" content="<?php echo htmlspecialchars($ogImage); ?>">
    <meta property="og:url" content="<?php echo 'http://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI']; ?>">
    <meta property="og:type" content="website">
    <meta property="og:locale" content="id_ID">
    
    <!-- Twitter Card Meta Tags -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="<?php echo htmlspecialchars($pageTitle); ?>">
    <meta name="twitter:description" content="<?php echo htmlspecialchars($pageDescription); ?>">
    <meta name="twitter:image" content="<?php echo htmlspecialchars($ogImage); ?>">
    
    <!-- Canonical URL -->
    <link rel="canonical" href="<?php echo 'http://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI']; ?>">
    
    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="assets/images/favicon.ico">
    <link rel="apple-touch-icon" href="assets/images/apple-touch-icon.png">
    
    <!-- Preconnect to external domains -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="preconnect" href="https://cdnjs.cloudflare.com">
    
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Merriweather+Sans:ital,wght@0,300..800;1,300..800&family=Merriweather:ital,opsz,wght@0,18..144,300..900;1,18..144,300..900&display=swap" rel="stylesheet">
    
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    
    <!-- CSS REFAKTOR -->
    <!-- 1. Global / Base -->
    <link rel="stylesheet" href="assets/css/main.css">
    <!-- 2. Struktur / Layout -->
    <link rel="stylesheet" href="assets/css/layout.css">
    <!-- 3. Komponen (Struktur) -->
    <link rel="stylesheet" href="assets/css/components.css">

    <?php
    if ($company === 'mutiara-bunda') {
        echo '<link rel="stylesheet" href="assets/css/brands/mutiara-bunda.css">';
    } else {
        echo '<link rel="stylesheet" href="assets/css/brands/samudera.css">';
    }
    ?>
    
    <!-- Structured Data (JSON-LD) -->
    <script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "LocalBusiness",
        "name": "<?php echo $company === 'mutiara-bunda' ? 'Mutiara Bunda Express' : 'Samudera Indah Lestari'; ?>",
        "description": "<?php echo htmlspecialchars($pageDescription); ?>",
        "address": {
            "@type": "PostalAddress",
            "streetAddress": "Jl. Sidotopo Lor No. 22 A",
            "addressLocality": "Surabaya",
            "addressRegion": "Jawa Timur",
            "postalCode": "60152",
            "addressCountry": "ID"
        },
        "telephone": "+62-823-3148-1710",
        "telephone": "+62-896-7836-6832",
        "email": "<?php echo $company === 'mutiara-bunda' ? 'logistic@mutiarabundaexpress.com' : 'info@samuderaindahlestari.com'; ?>",
        "url": "<?php echo 'http://' . $_SERVER['HTTP_HOST']; ?>",
        "sameAs": [
            "https://www.facebook.com/<?php echo $company === 'mutiara-bunda' ? 'mutiarabundaexpress' : 'samuderaindahlestari'; ?>",
            "https://www.instagram.com/<?php echo $company === 'mutiara-bunda' ? 'mutiarabundaexpress' : 'samuderaindahlestari'; ?>"
        ],
        "openingHours": "Mo-Fr 08:00-17:00",
        "priceRange": "$$"
    }
    </script>
</head>
<body>
    <?php
    // Include navbar yang sesuai
    if ($company === 'mutiara-bunda') {
        include 'includes/mutiara-bunda-navbar.php';
    } else {
        include 'includes/navbar.php';
    }
    
    // Include content
    include $content_file;
    
    // Include footer yang sesuai
    if ($company === 'mutiara-bunda') {
        include 'includes/mutiara-bunda-footer.php';
    } else {
        include 'includes/footer.php';
    }
    ?>
    
    <!-- JavaScript -->
    <script src="assets/js/script.js"></script>
    
    <!-- Schema.org BreadcrumbList -->
    <?php if ($page !== 'home'): ?>
    <script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "BreadcrumbList",
        "itemListElement": [
            {
                "@type": "ListItem",
                "position": 1,
                "name": "Beranda",
                "item": "<?php echo 'http://' . $_SERVER['HTTP_HOST']; ?>"
            },
            {
                "@type": "ListItem",
                "position": 2,
                "name": "<?php echo ucfirst($page); ?>",
                "item": "<?php echo 'http://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI']; ?>"
            }
        ]
    }
    </script>
    <?php endif; ?>
</body>
</html>