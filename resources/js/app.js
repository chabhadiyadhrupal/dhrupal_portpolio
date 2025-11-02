import './bootstrap';
import '../css/app.css';

// navbar background on scroll
window.addEventListener('scroll', () => {
  const header = document.getElementById('site-header');
  if (!header) return;
  if (window.scrollY > 40) {
    header.classList.add('bg-white/90', 'backdrop-blur-sm', 'shadow-sm');
  } else {
    header.classList.remove('bg-white/90', 'backdrop-blur-sm', 'shadow-sm');
  }
});
