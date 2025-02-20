document.addEventListener('DOMContentLoaded', () => {
  const pathname = window.location.pathname;
  const segments = pathname.split('/').filter(s => s);
  const lastSegment = segments.pop();

  // Hanya jalankan kode jika berada di halaman admin
  if (segments.includes('admin')) {
    const ACTIVE_CLASS = 'bg-green-700';
    const ACTIVE_CLASS_BOTTOM = 'text-green-600';
    const JS_PREFIX = '.js-';

    const setActive = (selector) => {
      const element = document.querySelector(selector);
      if (element) {
        element.classList.add(ACTIVE_CLASS);
      } else {
        console.error(`Element with selector "${selector}" not found.`);
      }
    };

    // Mapping of last segments to selectors
    const segmentMap = {
      'dashboard': `${JS_PREFIX}dashboard`,
      'paket': `${JS_PREFIX}paket`,
      'create': `${JS_PREFIX}paket`,
      'pengaturan': `${JS_PREFIX}pengaturan`,
      'ubah-password': `${JS_PREFIX}ubah-password`,
    };

    // Handle dynamic segments (e.g., 'edit/:num')
    let activeSelector;
    if (segments.includes('edit')) {
      activeSelector = `${JS_PREFIX}paket`; // Set selector for edit pages
    } else {
      activeSelector = segmentMap[lastSegment] || `${JS_PREFIX}dashboard`; // Default to dashboard
    }

    // Set active class based on the last segment
    setActive(activeSelector);
  }
});