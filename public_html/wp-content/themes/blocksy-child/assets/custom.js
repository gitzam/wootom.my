document.addEventListener('DOMContentLoaded', () => {
    const navElement = document.querySelector('nav.ct-breadcrumbs');
    const links = Array.from(navElement.querySelectorAll('a[href*="/product-category/"]'));
  
    links.forEach((link) => {
      let href = link.getAttribute('href');
  
      if (href.includes('/accessories/')) {
        href = href.replace('/product-category/', '/');
        link.setAttribute('href', href);
      } else if (href.includes('/cap/')) {
        href = href.replace('/product-category/', '/');
        link.setAttribute('href', href);
      }
    });
  });