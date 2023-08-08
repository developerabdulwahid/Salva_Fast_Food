const generateLightBox = items => {
  let menuBox;
  items.forEach( item => {
    menuBox = new SimpleLightbox('.gallery.' + item + ' a', {
      navText: ['<i class="fa fa-chevron-left"></i>', '<i class="fa fa-chevron-right"></i>'],
    });
  });
}

const generateOwlCarousel = items => {
  items.forEach((item) => {
    $(item.name).owlCarousel({
      responsiveClass: true,
      nav: true,
      navElement: "div",
      navText: ['', ''],
      smartSpeed: 1000,
      fluidSpeed: 1000,
      ...item.options,
    });
  });
}

$('a[href*="#"]')
    .not('[href="#"]')
    .not('[href="#0"]')
    .click(function (event) {
      if (
        location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '')
        &&
        location.hostname == this.hostname
      ) {
        var target = $(this.hash);
        target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
        if (target.length) {
          event.preventDefault();
          $('html, body').animate({
            scrollTop: target.offset().top
          }, 1000, function () {
            var $target = $(target);
            $target.focus();
            if ($target.is(":focus")) {
              return false;
            } else {
              $target.attr('tabindex', '-1');
              $target.focus();
            };
          });
        }
      }
    });