// JavaScript code

// Function to handle smooth scrolling for anchor links
function smoothScroll(target) {
    const element = document.querySelector(target);
    window.scrollTo({
      top: element.offsetTop,
      behavior: 'smooth'
    });
  }
  
  // Event listeners for smooth scrolling
  document.querySelectorAll('a[href^="#"]').forEach(anchor => {
    anchor.addEventListener('click', (e) => {
      e.preventDefault();
      smoothScroll(anchor.getAttribute('href'));
    });
  });
  
  // Function to toggle mobile menu
  function toggleMenu() {
    const nav = document.querySelector('nav');
    nav.classList.toggle('active');
  }
  
  // Event listener for mobile menu toggle
  document.querySelector('.menu-toggle').addEventListener('click', toggleMenu);
  