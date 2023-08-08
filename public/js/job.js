const jobsGalleryOptions = [
  {
    name: '.jobs.owl-carousel',
    options: {
      margin: 20,
      dots: false,
      responsive: {
        0: {
          items: 1,
        },
        768: {
          items: 2,
        },
        992: {
          items: 3,
        },
        1400: {
          items: 4,
        },
      }
    }
  },
  
];

$(function ($) {
  // generateOwlCarousel(jobsGalleryOptions);

  $('[data-toggle="modal"]').on('click', function(e) {
    e.preventDefault();
    $('#jobModal').modal('show');
  })

  var form = $("#job-form");
    
  form.children("div").steps({
      headerTag: "h3",
      bodyTag: "div",
      transitionEffect: "fade",
      stepsOrientation: "vertical",
      titleTemplate: '<div class="title"><span class="step-number">#index#</span><span class="step-text">#title#</span></div>',
      labels: {
          previous: 'Previous',
          next: 'Next',
          finish: 'Submit',
          current: ''
      },
      onStepChanging: function(event, currentIndex, newIndex) {
          if (currentIndex === 0) {
              form.parent().parent().parent().append('<div class="footer footer-' + currentIndex + '"></div>');
          }
          if (currentIndex === 1) {
              form.parent().parent().parent().find('.footer').removeClass('footer-0').addClass('footer-' + currentIndex + '');
          }
          if (currentIndex === 2) {
              form.parent().parent().parent().find('.footer').removeClass('footer-1').addClass('footer-' + currentIndex + '');
          }
          return true;
      },
      onFinishing: function(event, currentIndex) {
          // form.validate().settings.ignore = ":disabled";
          return true;
      },
      onFinished: function(event, currentIndex) {
          // form.submit();
      },
      onStepChanged: function(event, currentIndex, priorIndex) {

          return true;
      }
  });
});