let currentSlideIndex = 0;
const slides = document.querySelectorAll('.slide');
const dots = document.querySelectorAll('.dot');

function showSlide(index) {
  slides.forEach(slide => slide.classList.remove('active'));
  dots.forEach(dot => dot.classList.remove('active'));
  
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

setInterval(() => {
  changeSlide(1);
}, 5000);

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

let activeCategory = 'all';

function updateNewsView() {
  const searchInput = document.getElementById('newsSearch');
  const newsGrid = document.getElementById('newsGrid');
  const emptyState = document.getElementById('emptyState');
  
  if (!newsGrid || !emptyState || !searchInput) return; 

  const searchTerm = searchInput.value.toLowerCase();
  const allCards = newsGrid.querySelectorAll('.news-card');
  let visibleCount = 0;

  allCards.forEach(card => {
    const title = card.querySelector('h3').textContent.toLowerCase();
    const description = card.querySelector('p').textContent.toLowerCase();
    const category = card.dataset.category;

    const categoryMatch = (activeCategory === 'all' || category === activeCategory);
    const searchMatch = (title.includes(searchTerm) || description.includes(searchTerm));

    if (categoryMatch && searchMatch) {
      card.style.display = 'block';
      visibleCount++;
    } else {
      card.style.display = 'none';
    }
  });

  if (visibleCount > 0) {
    emptyState.style.display = 'none';
  } else {
    emptyState.style.display = 'block';
  }
}

function filterNews() {
  updateNewsView();
}

function filterByCategory(category, element) {
  activeCategory = category;

  const tags = document.querySelectorAll('.tag');
  tags.forEach(tag => tag.classList.remove('active'));
  element.classList.add('active');

  updateNewsView();
}

function resetFilter() {
  const searchInput = document.getElementById('newsSearch');
  if (searchInput) {
    searchInput.value = '';
  }

  const allTag = document.querySelector('.tag[onclick*="\'all\'"]');
  if (allTag) {
    allTag.click();
  } else {
    activeCategory = 'all';
    updateNewsView();
  }
}

document.addEventListener('DOMContentLoaded', function() {
  const cityCards = document.querySelectorAll('.city-card');
  cityCards.forEach(card => {
    card.addEventListener('click', function() {
      const cityName = this.querySelector('.city-name').textContent;
      
      const form = document.createElement('form');
      form.method = 'POST';
      form.action = window.location.href.includes('mutiara-bunda') ? 
        'index.php?company=mutiara-bunda&page=pesan-layanan' : 
        'index.php?page=pesan-layanan';
      
      const cityInput = document.createElement('input');
      cityInput.type = 'hidden';
      cityInput.name = 'kota_tujuan';
      cityInput.value = cityName;
      form.appendChild(cityInput);
      
      document.body.appendChild(form);
      form.submit();
    });
  });

  const whatsappIcons = document.querySelectorAll('.whatsapp-icon');
  whatsappIcons.forEach(icon => {
    icon.addEventListener('click', function() {
      const contactValue = this.parentElement.querySelector('.contact-value').textContent;
      const whatsappUrl = `https://wa.me/${contactValue.replace(/[^0-9]/g, '')}`;
      window.open(whatsappUrl, '_blank');
    });
  });

  const forms = document.querySelectorAll('.contact-form');
  forms.forEach(form => {
    form.addEventListener('submit', function(e) {
      const requiredFields = form.querySelectorAll('[required]');
      let isValid = true;
      
      requiredFields.forEach(field => {
        if (!field.value.trim()) {
          isValid = false;
          field.style.borderColor = 'red';
          
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

  if (document.getElementById('newsGrid')) {
    updateNewsView();
  }
});

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

@media (max-width: 768px) {
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

const style = document.createElement('style');
style.textContent = additionalCSS;
document.head.appendChild(style);