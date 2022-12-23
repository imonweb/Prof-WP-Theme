jQuery(document).ready(function($){
  /*  Make the menu responsive */
  $('#menu-main-menu').slicknav({
    // appendTo: '.site-header'
  });

  // Run the bxSlider library on testimonials.
  // https://bxslider.com/options/
  // $('.testimonials-list').bxSlider();
  $('.testimonials-list').bxSlider({
    controls: false,
    auto: true,
    mode: 'fade'
  });

   // When the page is ready add the fixed menu if position is greater than 300px
    const headerScroll = document.querySelector('.navigation-bar');
    const rect = headerScroll.getBoundingClientRect();
    const topDistance = Math.abs(rect.top);
    fixedMenu(topDistance);
});

window.onscroll = () => {
  const scroll = window.scrollY;
  
  fixedMenu(scroll);
}

// Adds a fixed menu on top
function fixedMenu(scroll) {
  const headerScroll = document.querySelector('.navigation-bar');

  // In the case that the scroll is greater than 300 add some classes
  if(scroll > 300) {
      headerScroll.classList.add('fixed-top');
  } else {
      headerScroll.classList.remove('fixed-top');
  }
}