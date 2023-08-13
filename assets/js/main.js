
(function() {
  "use strict";

  /**
   * Easy selector helper function
   */
  const select = (el, all = false) => {
    el = el.trim()
    if (all) {
      return [...document.querySelectorAll(el)]
    } else {
      return document.querySelector(el)
    }
  }

  /**
   * Easy event listener function
   */
  const on = (type, el, listener, all = false) => {
    let selectEl = select(el, all)
    if (selectEl) {
      if (all) {
        selectEl.forEach(e => e.addEventListener(type, listener))
      } else {
        selectEl.addEventListener(type, listener)
      }
    }
  }

  /**
   * Easy on scroll event listener 
   */
  const onscroll = (el, listener) => {
    el.addEventListener('scroll', listener)
  }

  /**
   * Navbar links active state on scroll
   */
  let navbarlinks = select('#navbar .scrollto', true)
  const navbarlinksActive = () => {
    let position = window.scrollY + 200
    navbarlinks.forEach(navbarlink => {
      if (!navbarlink.hash) return
      let section = select(navbarlink.hash)
      if (!section) return
      if (position >= section.offsetTop && position <= (section.offsetTop + section.offsetHeight)) {
        navbarlink.classList.add('active')
      } else {
        navbarlink.classList.remove('active')
      }
    })
  }
  window.addEventListener('load', navbarlinksActive)
  onscroll(document, navbarlinksActive)

  /**
   * Scrolls to an element with header offset
   */
  const scrollto = (el) => {
    let header = select('#header')
    let offset = header.offsetHeight

    if (!header.classList.contains('header-scrolled')) {
      offset -= 16
    }

    let elementPos = select(el).offsetTop
    window.scrollTo({
      top: elementPos - offset,
      behavior: 'smooth'
    })
  }

  /**
   * Toggle .header-scrolled class to #header when page is scrolled
   */
  let selectHeader = select('#header')
  if (selectHeader) {
    const headerScrolled = () => {
      if (window.scrollY > 100) {
        selectHeader.classList.add('header-scrolled')
      } else {
        selectHeader.classList.remove('header-scrolled')
      }
    }
    window.addEventListener('load', headerScrolled)
    onscroll(document, headerScrolled)
  }

  /**
   * Back to top button
   */
  let backtotop = select('.back-to-top')
  if (backtotop) {
    const toggleBacktotop = () => {
      if (window.scrollY > 100) {
        backtotop.classList.add('active')
      } else {
        backtotop.classList.remove('active')
      }
    }
    window.addEventListener('load', toggleBacktotop)
    onscroll(document, toggleBacktotop)
  }

  /**
   * Mobile nav toggle
   */
  on('click', '.mobile-nav-toggle', function(e) {
    select('#navbar').classList.toggle('navbar-mobile')
    this.classList.toggle('bi-list')
    this.classList.toggle('bi-x')
  })

  /**
   * Mobile nav dropdowns activate
   */
  on('click', '.navbar .dropdown > a', function(e) {
    if (select('#navbar').classList.contains('navbar-mobile')) {
      e.preventDefault()
      this.nextElementSibling.classList.toggle('dropdown-active')
    }
  }, true)

  /**
   * Scrool with ofset on links with a class name .scrollto
   */
  on('click', '.scrollto', function(e) {
    if (select(this.hash)) {
      e.preventDefault()

      let navbar = select('#navbar')
      if (navbar.classList.contains('navbar-mobile')) {
        navbar.classList.remove('navbar-mobile')
        let navbarToggle = select('.mobile-nav-toggle')
        navbarToggle.classList.toggle('bi-list')
        navbarToggle.classList.toggle('bi-x')
      }
      scrollto(this.hash)
    }
  }, true)

  /**
   * Scroll with ofset on page load with hash links in the url
   */
  window.addEventListener('load', () => {
    if (window.location.hash) {
      if (select(window.location.hash)) {
        scrollto(window.location.hash)
      }
    }
  });
  /**
   * Clients Slider
   */
  new Swiper('.clients-slider', {
    speed: 250,
    loop: true,
    autoplay: {
      delay: 5000,
      disableOnInteraction: false
    },
    slidesPerView: 'auto',
    pagination: {
      el: '.swiper-pagination',
      type: 'bullets',
      clickable: true
    },
    breakpoints: {
      320: {
        slidesPerView: 2,
        spaceBetween: 40
      },
      480: {
        slidesPerView: 3,
        spaceBetween: 60
      },
      640: {
        slidesPerView: 4,
        spaceBetween: 80
      },
      992: {
        slidesPerView: 6,
        spaceBetween: 120
      }
    }
  });

  /**
   * Porfolio isotope and filter
   */
  window.addEventListener('load', () => {
    let portfolioContainer = select('.portfolio-container');
    if (portfolioContainer) {
      let portfolioIsotope = new Isotope(portfolioContainer, {
        itemSelector: '.portfolio-item',
        layoutMode: 'fitRows'
      });

      let portfolioFilters = select('#portfolio-flters li', true);

      on('click', '#portfolio-flters li', function(e) {
        e.preventDefault();
        portfolioFilters.forEach(function(el) {
          el.classList.remove('filter-active');
        });
        this.classList.add('filter-active');

        portfolioIsotope.arrange({
          filter: this.getAttribute('data-filter')
        });
        portfolioIsotope.on('arrangeComplete', function() {
          AOS.refresh()
        });
      }, true);
    }

  });

  /**
   * Initiate portfolio lightbox 
   */
  const portfolioLightbox = GLightbox({
    selector: '.portfolio-lightbox'
  });

  /**
   * Portfolio details slider
   */
  new Swiper('.portfolio-details-slider', {
    speed: 400,
    loop: true,
    autoplay: {
      delay: 5000,
      disableOnInteraction: false
    },
    pagination: {
      el: '.swiper-pagination',
      type: 'bullets',
      clickable: true
    }
  });

  /**
   * Testimonials slider
   */
  new Swiper('.testimonials-slider', {
    speed: 600,
    loop: true,
    autoplay: {
      delay: 5000,
      disableOnInteraction: false
    },
    slidesPerView: 'auto',
    pagination: {
      el: '.swiper-pagination',
      type: 'bullets',
      clickable: true
    },
    breakpoints: {
      320: {
        slidesPerView: 1,
        spaceBetween: 20
      },

      1200: {
        slidesPerView: 3,
        spaceBetween: 20
      }
    }
  });

  /**
   * Animation on scroll
   */
  window.addEventListener('load', () => {
    AOS.init({
      duration: 1000,
      easing: 'ease-in-out',
      once: true,
      mirror: false
    })
  });

  /**
   * Initiate Pure Counter 
   */
  new PureCounter();

})()
function progressBarScroll() {
  let winScroll = document.body.scrollTop || document.documentElement.scrollTop,
      height = document.documentElement.scrollHeight - document.documentElement.clientHeight,
      scrolled = (winScroll / height) * 100;
  document.getElementById("progressBar").style.width = scrolled + "%";
}

function showEngineering(element){
  var eligibilityList = document.getElementById("eligibilitylist");
  eligibilityList.style.opacity = "0"; // Set initial opacity to 0
  element.classList.add('highlighteligibility')
  document.getElementById('eligibilityhsc').classList.remove('highlighteligibility')
  document.getElementById('eligibilitynonengineering').classList.remove('highlighteligibility')
  // Set new content after a brief delay
  setTimeout(function() {
    eligibilityList.innerHTML = `
        <li>Computer Science Engineering</li>
        <li>Information Technology Engineering</li>
        <li>Electronics and Telecommunications Engineering</li>
        <li>Electrical Engineering</li>
        <li>Mechanical Engineering</li>
        <li>Civil Engineering</li>
    `;

    // Trigger fade-in animation
    eligibilityList.style.transition = "opacity 1s";
    eligibilityList.style.opacity = "1";
  }, 300); // Adjust the delay time (in milliseconds) as needed
}
function showNonengineering(element){
  var eligibilityList = document.getElementById("eligibilitylist");
  eligibilityList.style.opacity = "0"; // Set initial opacity to 0
  element.classList.add('highlighteligibility')
  document.getElementById('eligibilityengineering').classList.remove('highlighteligibility')
  document.getElementById('eligibilityhsc').classList.remove('highlighteligibility')
  // Set new content after a brief delay
  setTimeout(function() {
    eligibilityList.innerHTML = `
    <li>Diploma</li>
    <li>Commerce</li>
    <li>Pharma</li>
    <li>BSC Computer Science</li>
    <li>BSC Information Technology</li>
    `;

    // Trigger fade-in animation
    eligibilityList.style.transition = "opacity 1s";
    eligibilityList.style.opacity = "1";
  }, 300); // Adjust the delay time (in milliseconds) as needed
}
function showHsc(element){
  var eligibilityList = document.getElementById("eligibilitylist");
  eligibilityList.style.opacity = "0"; // Set initial opacity to 0
  element.classList.add('highlighteligibility')
  document.getElementById('eligibilityengineering').classList.remove('highlighteligibility')
  document.getElementById('eligibilitynonengineering').classList.remove('highlighteligibility')
  // Set new content after a brief delay
  setTimeout(function() {
    eligibilityList.innerHTML = `
    <li>Class 12th passouts (HSC)</li>
    `;

    // Trigger fade-in animation
    eligibilityList.style.transition = "opacity 1s";
    eligibilityList.style.opacity = "1";
  }, 300); // Adjust the delay time (in milliseconds) as needed
}
 
function handleCategoryChange() {
  const selectElement = document.getElementById('regcategory');
  const selectedValue = selectElement.value;
  const fieldElement = document.getElementById('regfield')
  if (selectedValue=="Engineering"){
    fieldElement.innerHTML=`
    <option value="" disabled selected>Select an option</option>
    <option value="Computer Science">Computer Science Engineering</option>
    <option value="Information Technology">Information Technology Engineering</option>
    <option value="Electronics and Telecommunications">Electronics and Telecommunications Engineering</option>
    <option value="Electrical">Electrical Engineering</option>
    <option value="Mechanical">Mechanical Engineering</option>
    <option value="Civil">Civil Engineering</option>
    `
  }
  if (selectedValue=="Non-Engineering/Diploma"){
    fieldElement.innerHTML=`
    <option value="" disabled selected>Select an option</option>
    <option value="Diploma">Diploma</option>
    <option value="Commerce">Commerce</option>
    <option value="Pharma">Pharma</option>
    <option value="BSC Computer Science">BSC Computer Science</option>
    <option value="BSC Information Technology">BSC Information Technology</option>
    `
  }
  if (selectedValue=="12th HSC"){
    fieldElement.innerHTML=`
    <option value="12th HSC" selected>HSC (12th passed/pursuing)</option>
    `
  }
}

window.onscroll = function () {
  progressBarScroll();
};