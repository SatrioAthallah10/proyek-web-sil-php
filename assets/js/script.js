// Slider functionality
let currentSlideIndex = 0;
const slides = document.querySelectorAll('.slide');
const dots = document.querySelectorAll('.dot');

function showSlide(index) {
  // Hide all slides
  slides.forEach(slide => slide.classList.remove('active'));
  dots.forEach(dot => dot.classList.remove('active'));
  
  // Show current slide
  slides[index].classList.add('active');
  dots[index].classList.add('active');
}

function changeSlide(direction) {
  currentSlideIndex += direction;
  
  if (currentSlideIndex >= slides.length) {
    currentSlideIndex = 0;
  } else if (currentSlideIndex < 0) {
    currentSlideIndex = slides.length - 1;
  }
  
  showSlide(currentSlideIndex);
}

function currentSlide(index) {
  currentSlideIndex = index - 1;
  showSlide(currentSlideIndex);
}

// Auto-slide
setInterval(() => {
  changeSlide(1);
}, 5000);

// Mobile menu toggle
function toggleMobileMenu() {
  const navbarLinks = document.getElementById('navbarLinks');
  if (navbarLinks) {
    navbarLinks.classList.toggle('active');
  }
}

function toggleMobileMenuMBE() {
  const mbeNavbarLinks = document.getElementById('mbeNavbarLinks');
  if (mbeNavbarLinks) {
    mbeNavbarLinks.classList.toggle('active');
  }
}

// Close mobile menu when clicking outside
document.addEventListener('click', function(event) {
  const navbarLinks = document.getElementById('navbarLinks');
  const mbeNavbarLinks = document.getElementById('mbeNavbarLinks');
  const menuIcon = document.querySelector('.menu-icon');
  const mbeMenuIcon = document.querySelector('.mbe-menu-icon');
  
  if (navbarLinks && !navbarLinks.contains(event.target) && !menuIcon.contains(event.target)) {
    navbarLinks.classList.remove('active');
  }
  
  if (mbeNavbarLinks && !mbeNavbarLinks.contains(event.target) && !mbeMenuIcon.contains(event.target)) {
    mbeNavbarLinks.classList.remove('active');
  }
});

// Smooth scrolling for anchor links
document.querySelectorAll('a[href^="#"]').forEach(anchor => {
  anchor.addEventListener('click', function (e) {
    e.preventDefault();
    const target = document.querySelector(this.getAttribute('href'));
    if (target) {
      target.scrollIntoView({
        behavior: 'smooth'
      });
    }
  });
});

// ==========================================
// HORIZONTAL SCROLL FUNCTIONALITY
// ==========================================
function scrollCities(direction) {
  const citiesGrid = document.getElementById('citiesGrid');
  const scrollAmount = 220; // Width of one card + gap
  
  if (direction === 'left') {
    citiesGrid.scrollBy({
      left: -scrollAmount,
      behavior: 'smooth'
    });
  } else {
    citiesGrid.scrollBy({
      left: scrollAmount,
      behavior: 'smooth'
    });
  }
  
  // Update navigation buttons state
  updateScrollButtons();
}

function updateScrollButtons() {
  const citiesGrid = document.getElementById('citiesGrid');
  const prevBtn = document.getElementById('scrollPrev');
  const nextBtn = document.getElementById('scrollNext');
  
  if (!citiesGrid || !prevBtn || !nextBtn) return;
  
  // Check if at start
  if (citiesGrid.scrollLeft <= 0) {
    prevBtn.classList.add('disabled');
  } else {
    prevBtn.classList.remove('disabled');
  }
  
  // Check if at end
  if (citiesGrid.scrollLeft >= citiesGrid.scrollWidth - citiesGrid.clientWidth) {
    nextBtn.classList.add('disabled');
  } else {
    nextBtn.classList.remove('disabled');
  }
}

// Initialize scroll buttons on page load
document.addEventListener('DOMContentLoaded', function() {
  const citiesGrid = document.getElementById('citiesGrid');
  if (citiesGrid) {
    citiesGrid.addEventListener('scroll', updateScrollButtons);
    updateScrollButtons(); // Initial state
  }
  
  // Touch/swipe support for mobile
  let isDown = false;
  let startX;
  let scrollLeft;
  
  if (citiesGrid) {
    citiesGrid.addEventListener('mousedown', (e) => {
      isDown = true;
      startX = e.pageX - citiesGrid.offsetLeft;
      scrollLeft = citiesGrid.scrollLeft;
      citiesGrid.style.cursor = 'grabbing';
    });
    
    citiesGrid.addEventListener('mouseleave', () => {
      isDown = false;
      citiesGrid.style.cursor = 'grab';
    });
    
    citiesGrid.addEventListener('mouseup', () => {
      isDown = false;
      citiesGrid.style.cursor = 'grab';
    });
    
    citiesGrid.addEventListener('mousemove', (e) => {
      if (!isDown) return;
      e.preventDefault();
      const x = e.pageX - citiesGrid.offsetLeft;
      const walk = (x - startX) * 2;
      citiesGrid.scrollLeft = scrollLeft - walk;
    });
  }
});

// ==========================================
// CITIES FILTER FUNCTIONALITY
// ==========================================
function filterCities() {
  const searchInput = document.getElementById('citySearch');
  const citiesGrid = document.getElementById('citiesGrid');
  const cityCards = citiesGrid.querySelectorAll('.city-card');
  const searchTerm = searchInput.value.toLowerCase();
  
  cityCards.forEach(card => {
    const cityName = card.querySelector('.city-name').textContent.toLowerCase();
    if (cityName.includes(searchTerm)) {
      card.style.display = 'flex';
    } else {
      card.style.display = 'none';
    }
  });
}

// ==========================================
// NEWS FILTER FUNCTIONALITY
// ==========================================
function filterNews() {
  const searchInput = document.getElementById('newsSearch');
  const searchTerm = searchInput.value.toLowerCase();
  
  // Since news is empty, this will be used when news is added
  console.log('Filtering news:', searchTerm);
}

function filterByCategory(category) {
  const tags = document.querySelectorAll('.tag');
  const emptyState = document.getElementById('emptyState');
  const newsGrid = document.getElementById('newsGrid');
  
  // Update active tag
  tags.forEach(tag => {
    tag.classList.remove('active');
    if (tag.textContent.toLowerCase().includes(category) || 
        (category === 'all' && tag.textContent === 'Semua')) {
      tag.classList.add('active');
    }
  });
  
  // Since news is empty, always show empty state
  emptyState.style.display = 'block';
  newsGrid.style.display = 'none';
}

function resetFilter() {
  const searchInput = document.getElementById('newsSearch');
  const tags = document.querySelectorAll('.tag');
  
  // Clear search
  searchInput.value = '';
  
  // Reset to "Semua" category
  filterByCategory('all');
}

function filterByCategory(category) {
  const tags = document.querySelectorAll('.tag');
  const emptyState = document.getElementById('emptyState');
  const newsGrid = document.getElementById('newsGrid');
  
  // Update active tag
  tags.forEach(tag => {
    tag.classList.remove('active');
    if (tag.textContent.toLowerCase().includes(category) || 
        (category === 'all' && tag.textContent === 'Semua')) {
      tag.classList.add('active');
    }
  });
  
  // Since news is empty, always show empty state
  emptyState.style.display = 'block';
  newsGrid.style.display = 'none';
}

function resetFilter() {
  const searchInput = document.getElementById('newsSearch');
  const tags = document.querySelectorAll('.tag');
  
  // Clear search
  searchInput.value = '';
  
  // Reset to "Semua" category
  filterByCategory('all');
}

// ==========================================
// CITY CARD CLICK HANDLER
// ==========================================
document.addEventListener('DOMContentLoaded', function() {
  const cityCards = document.querySelectorAll('.city-card');
  cityCards.forEach(card => {
    card.addEventListener('click', function() {
      const cityName = this.querySelector('.city-name').textContent;
      
      // Create form data for pesan-layanan
      const form = document.createElement('form');
      form.method = 'POST';
      form.action = window.location.href.includes('mutiara-bunda') ? 
        'index.php?company=mutiara-bunda&page=pesan-layanan' : 
        'index.php?page=pesan-layanan';
      
      // Add city as hidden input
      const cityInput = document.createElement('input');
      cityInput.type = 'hidden';
      cityInput.name = 'kota_tujuan';
      cityInput.value = cityName;
      form.appendChild(cityInput);
      
      document.body.appendChild(form);
      form.submit();
    });
  });
});

// ==========================================
// WHATSAPP CLICK HANDLER
// ==========================================
document.addEventListener('DOMContentLoaded', function() {
  const whatsappIcons = document.querySelectorAll('.whatsapp-icon');
  whatsappIcons.forEach(icon => {
    icon.addEventListener('click', function() {
      const contactValue = this.parentElement.querySelector('.contact-value').textContent;
      const whatsappUrl = `https://wa.me/${contactValue.replace(/[^0-9]/g, '')}`;
      window.open(whatsappUrl, '_blank');
    });
  });
});

// ==========================================
// FORM VALIDATION
// ==========================================
document.addEventListener('DOMContentLoaded', function() {
  const forms = document.querySelectorAll('.contact-form');
  forms.forEach(form => {
    form.addEventListener('submit', function(e) {
      const requiredFields = form.querySelectorAll('[required]');
      let isValid = true;
      
      requiredFields.forEach(field => {
        if (!field.value.trim()) {
          isValid = false;
          field.style.borderColor = 'red';
          
          // Remove red border after 3 seconds
          setTimeout(() => {
            field.style.borderColor = '';
          }, 3000);
        }
      });
      
      if (!isValid) {
        e.preventDefault();
        alert('Mohon lengkapi semua field yang wajib diisi.');
      }
    });
  });
});

// Add some CSS for additional components
const additionalCSS = `
.info-button {
  display: inline-block;
  background-color: #28a745;
  color: white;
  padding: 12px 24px;
  text-decoration: none;
  border-radius: 5px;
  font-weight: 600;
  transition: background-color 0.3s ease;
  font-family: "Merriweather Sans", sans-serif;
}

.info-button:hover {
  background-color: #218838;
  color: white;
}

.destinations-subtitle {
  text-align: center;
  font-size: 1.2rem;
  color: #666;
  margin-bottom: 40px;
  font-family: "Merriweather Sans", sans-serif;
}

.destination-card-link {
  text-decoration: none;
  color: inherit;
}

.see-more-link {
  display: inline-flex;
  align-items: center;
  gap: 8px;
  margin-top: 40px;
  text-decoration: none;
  color: #28a745;
  font-weight: 600;
  font-size: 1.1rem;
  transition: color 0.3s ease;
  font-family: "Merriweather Sans", sans-serif;
}

.see-more-link:hover {
  color: #218838;
}

.social-icons {
  display: flex;
  gap: 15px;
}

.social-icons a {
  display: flex;
  align-items: center;
  justify-content: center;
  width: 40px;
  height: 40px;
  background-color: rgba(255, 255, 255, 0.1);
  border-radius: 50%;
  color: white;
  text-decoration: none;
  transition: background-color 0.3s ease;
}

.social-icons a:hover {
  background-color: rgba(255, 255, 255, 0.2);
  color: white;
}

.footer-section ul {
  list-style: none;
  padding: 0;
  margin: 0;
}

.footer-section ul li {
  margin-bottom: 8px;
}

.footer-section ul li a {
  color: #ccc;
  text-decoration: none;
  transition: color 0.3s ease;
}

.footer-section ul li a:hover {
  color: white;
}

.footer-links-bottom {
  margin-top: 10px;
}

.footer-links-bottom a {
  color: #999;
  text-decoration: none;
  margin: 0 10px;
}

.footer-links-bottom a:hover {
  color: #ccc;
}

/* Responsive for new components */
@media (max-width: 768px) {
  .cities-grid {
    grid-template-columns: repeat(auto-fit, minmax(150px, 1fr));
    gap: 15px;
  }
  
  .city-card {
    padding: 15px 10px;
  }
  
  .category-tags {
    gap: 10px;
  }
  
  .tag {
    padding: 6px 15px;
    font-size: 0.85rem;
  }
  
  .contact-grid {
    grid-template-columns: 1fr;
    gap: 40px;
  }
  
  .contact-form {
    padding: 30px 20px;
  }
  
  .map-placeholder {
    padding: 40px 20px;
  }
  
  .map-icon {
    font-size: 2rem;
  }
}
`;

// Create and append additional CSS
const style = document.createElement('style');
style.textContent = additionalCSS;
document.head.appendChild(style);