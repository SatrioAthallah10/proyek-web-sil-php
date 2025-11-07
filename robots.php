User-agent: *
Allow: /

# Sitemap
Sitemap: <?php echo 'http://' . $_SERVER['HTTP_HOST']; ?>/sitemap.php

# Block unnecessary files
Disallow: /assets/css/
Disallow: /assets/js/
Disallow: /.vscode/
Disallow: /node_modules/
Disallow: /*.log$
Disallow: /*.tmp$

# Allow important assets
Allow: /assets/images/
Allow: /assets/css/*.css
Allow: /assets/js/*.js

# Crawl delay (optional)
Crawl-delay: 1