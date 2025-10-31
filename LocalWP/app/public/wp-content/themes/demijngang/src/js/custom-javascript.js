document.addEventListener('DOMContentLoaded', () => {
  const menuButton = document.querySelector('.navbar-toggler');
  const HEADER_SELECTOR = '.wrapper-header';           // adjust to your sticky header
  const MENU_SELECTOR   = '#main-menu';  // adjust to your menu container

  const header = document.querySelector(HEADER_SELECTOR);
  const menu = document.querySelector(MENU_SELECTOR);

  if (!menuButton) {
    console.warn('No menu button found. Adjust the selector in the JS.');
    return;
  }

  // --- Toggle body class based on menu state ---
  menuButton.addEventListener('click', () => {
    // small delay to let Bootstrap update aria-expanded
    setTimeout(() => {
      const isExpanded = menuButton.getAttribute('aria-expanded') === 'true';
      document.body.classList.toggle('menu-open', isExpanded);

      // also resize menu when opened/closed
      adjustMenuHeight();
    }, 10);
  });

  // --- Dynamically set mobile menu height ---
  function getViewportHeight() {
    return window.visualViewport ? window.visualViewport.height : window.innerHeight;
  }

  function adjustMenuHeight() {
    if (!menu) return;

    const headerHeight = header ? header.getBoundingClientRect().height : 0;
    const viewportHeight = getViewportHeight();

    menu.style.top = `${headerHeight-125}px`;
    menu.style.height = `${viewportHeight - (headerHeight-125)}px`;
  }

  // Initial sizing
  adjustMenuHeight();

  // Resize/viewport/orientation events
  const resizeEvents = ['resize', 'orientationchange'];
  resizeEvents.forEach(ev => window.addEventListener(ev, adjustMenuHeight));
  if (window.visualViewport) {
    window.visualViewport.addEventListener('resize', adjustMenuHeight);
    window.visualViewport.addEventListener('scroll', adjustMenuHeight);
  }

  // If using Bootstrap collapse events
  if (menu) {
    menu.addEventListener('shown.bs.collapse', adjustMenuHeight);
    menu.addEventListener('hidden.bs.collapse', adjustMenuHeight);
  }
});
