document.addEventListener('DOMContentLoaded', () => {
  const pathname = window.location.pathname;
  const segments = pathname.split('/').filter(s => s);
  const lastSegment = segments.pop();

  // Hanya jalankan kode jika berada di halaman admin
  const ACTIVE_CLASS = 'text-green-600';
  const INACTIVE_CLASS = 'text-gray-400';
  const JS_PREFIX = '.js-';

  const setActive = (selector) => {
    const element = document.querySelector(selector);
    if (element) {
      element.classList.add(ACTIVE_CLASS);
      element.classList.remove(INACTIVE_CLASS);
    } else {
      console.error(`Element with selector "${selector}" not found.`);
    }
  };

  // Mapping of last segments to selectors
  const segmentMap = {
    'home': `${JS_PREFIX}home`,
    'kantor': `${JS_PREFIX}kantor`,
    'kontak': `${JS_PREFIX}kontak`,
    'sambutan': `${JS_PREFIX}sambutan`,
    'galery': `${JS_PREFIX}galery`,
  };

  let activeSelector;
  let inActiveSelector;
  activeSelector = segmentMap[lastSegment] || `${JS_PREFIX}home`; // Default to dashboard
  inActiveSelector = segmentMap[lastSegment] || `${JS_PREFIX}home`; // Default to dashboard

  // Set active class based on the last segment
  setActive(activeSelector);
  setActive(inActiveSelector);
  console.log('hello');
});