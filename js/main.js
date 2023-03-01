$(document).ready(function () {

  // Scroll speed
  $('.link-scroll').on('click','a', function (event) {
    event.preventDefault();
    var id  = $(this).attr('href'),
      top = $(id).offset().top;
      $('body,html').animate({scrollTop: top}, 800);
  });

  // Header add class
  $(window).scroll(function() { 
    var top = $(document).scrollTop();
    if (top > 0) {
      $('.header').addClass('header-sticky');
    }
    else {
      $('.header').removeClass('header-sticky');
    }
  });

  // Show menu mobail
  $('.navbar-toggle').on('click', function () {
    $(this).toggleClass('active');
    $('.nav').slideToggle(200, function() {});
  });

  // Modal
  $('.open-modal-feedback').on('click', function(e) {
    e.preventDefault();
    $('.modal--feedback').fadeIn(200);
  });

  // Close
  $('.close--modal').on('click', function(e) {
    e.preventDefault();
    $('.modal--feedback').fadeOut(200);
  });

  $('.modal').mouseup(function (e) {
    let modalContent = $(".modal__box");
    if (!modalContent.is(e.target) && modalContent.has(e.target).length === 0) {
      $(this).fadeOut(200);
    }
  });

  // Reviews sl
  var swiper = new Swiper(".reviews__sl", {
    spaceBetween: 0,
    autoHeight: true,
    slidesPerView: 1,
    observer: true,
    observeSlideChildren: true,
    observeParents: true,
    pagination: {
      el: ".swiper-pagination",
      clickable: true
    },
  });
});