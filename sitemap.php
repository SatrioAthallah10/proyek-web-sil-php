<?php
header('Content-Type: application/xml');
echo '<?xml version="1.0" encoding="UTF-8"?>';
?>

<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">
    <url>
        <loc><?php echo 'http://' . $_SERVER['HTTP_HOST']; ?></loc>
        <lastmod><?php echo date('Y-m-d'); ?></lastmod>
        <changefreq>weekly</changefreq>
        <priority>1.0</priority>
    </url>
    
    <url>
        <loc><?php echo 'http://' . $_SERVER['HTTP_HOST']; ?>/index.php?page=layanan</loc>
        <lastmod><?php echo date('Y-m-d'); ?></lastmod>
        <changefreq>monthly</changefreq>
        <priority>0.8</priority>
    </url>
    
    <url>
        <loc><?php echo 'http://' . $_SERVER['HTTP_HOST']; ?>/index.php?page=news</loc>
        <lastmod><?php echo date('Y-m-d'); ?></lastmod>
        <changefreq>weekly</changefreq>
        <priority>0.7</priority>
    </url>
    
    <url>
        <loc><?php echo 'http://' . $_SERVER['HTTP_HOST']; ?>/index.php?page=kontak</loc>
        <lastmod><?php echo date('Y-m-d'); ?></lastmod>
        <changefreq>monthly</changefreq>
        <priority>0.6</priority>
    </url>
    
    <url>
        <loc><?php echo 'http://' . $_SERVER['HTTP_HOST']; ?>/index.php?page=pesan-layanan</loc>
        <lastmod><?php echo date('Y-m-d'); ?></lastmod>
        <changefreq>monthly</changefreq>
        <priority>0.6</priority>
    </url>
    
    <url>
        <loc><?php echo 'http://' . $_SERVER['HTTP_HOST']; ?>/index.php?company=mutiara-bunda</loc>
        <lastmod><?php echo date('Y-m-d'); ?></lastmod>
        <changefreq>weekly</changefreq>
        <priority>1.0</priority>
    </url>
    
    <url>
        <loc><?php echo 'http://' . $_SERVER['HTTP_HOST']; ?>/index.php?company=mutiara-bunda&page=layanan</loc>
        <lastmod><?php echo date('Y-m-d'); ?></lastmod>
        <changefreq>monthly</changefreq>
        <priority>0.8</priority>
    </url>
    
    <url>
        <loc><?php echo 'http://' . $_SERVER['HTTP_HOST']; ?>/index.php?company=mutiara-bunda&page=news</loc>
        <lastmod><?php echo date('Y-m-d'); ?></lastmod>
        <changefreq>weekly</changefreq>
        <priority>0.7</priority>
    </url>
    
    <url>
        <loc><?php echo 'http://' . $_SERVER['HTTP_HOST']; ?>/index.php?company=mutiara-bunda&page=kontak</loc>
        <lastmod><?php echo date('Y-m-d'); ?></lastmod>
        <changefreq>monthly</changefreq>
        <priority>0.6</priority>
    </url>
    
    <url>
        <loc><?php echo 'http://' . $_SERVER['HTTP_HOST']; ?>/index.php?company=mutiara-bunda&page=pesan-layanan</loc>
        <lastmod><?php echo date('Y-m-d'); ?></lastmod>
        <changefreq>monthly</changefreq>
        <priority>0.6</priority>
    </url>
</urlset>