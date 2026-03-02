document.addEventListener('DOMContentLoaded', () => {
  const backToTop = document.getElementById('backToTop');

  const setGradientFallback = (image) => {
    const label = encodeURIComponent(image.alt || 'Image Unavailable');
    image.src = `data:image/svg+xml;utf8,<svg xmlns='http://www.w3.org/2000/svg' width='900' height='700'><defs><linearGradient id='g' x1='0' y1='0' x2='1' y2='1'><stop stop-color='%2327ae60' offset='0'/><stop stop-color='%232ecc71' offset='1'/></linearGradient></defs><rect width='100%25' height='100%25' fill='url(%23g)'/><text x='50%25' y='50%25' dominant-baseline='middle' text-anchor='middle' font-family='Poppins, Arial, sans-serif' font-size='34' fill='white'>${label}</text></svg>`;
  };

  document.querySelectorAll('img[data-fallback-gradient]').forEach((image) => {
    image.addEventListener('error', () => {
      setGradientFallback(image);
    }, { once: true });
  });

  window.addEventListener('scroll', () => {
    if (!backToTop) return;
    backToTop.style.display = window.scrollY > 240 ? 'inline-flex' : 'none';
  });

  if (backToTop) {
    backToTop.addEventListener('click', () => {
      window.scrollTo({ top: 0, behavior: 'smooth' });
    });
  }

  const galleryImages = document.querySelectorAll('[data-lightbox-image]');
  if (galleryImages.length) {
    const overlay = document.createElement('div');
    overlay.className = 'lightbox-overlay';
    overlay.innerHTML = '<img src="" alt="Gallery Preview" />';
    document.body.appendChild(overlay);

    const overlayImage = overlay.querySelector('img');

    galleryImages.forEach((image) => {
      image.addEventListener('click', () => {
        overlayImage.src = image.getAttribute('src');
        overlay.style.display = 'flex';
        document.body.style.overflow = 'hidden';
      });
    });

    const closeLightbox = () => {
      overlay.style.display = 'none';
      overlayImage.src = '';
      document.body.style.overflow = '';
    };

    overlay.addEventListener('click', closeLightbox);

    document.addEventListener('keydown', (event) => {
      if (event.key === 'Escape' && overlay.style.display === 'flex') {
        closeLightbox();
      }
    });
  }
});