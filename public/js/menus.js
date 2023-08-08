const menuClassNames = ['mains', 'doner-box', 'burgers', 'kids-meal', 'pizzas', 'garlic-bread', 'side-orders'];

const menuGalleryOptions = [
  {
    name: '.gallery.mains',
    options: {
      margin: 10,
      dots: false,
      responsive: {
        0: {
          items: 1,
        },
        768: {
          items: 2,
        },
      }
    }
  },
  {
    name: '.gallery.doner-box',
    options: {
      margin: 10,
      dots: false,
      responsive: {
        0: {
          items: 1,
        },
        576: {
          items: 2,
        },
        768: {
          items: 3,
        },
        1024: {
          items: 4,
        }
      }
    }
  },
  {
    name: '.gallery.burgers',
    options: {
      margin: 10,
      dots: false,
      responsive: {
        0: {
          items: 1,
        },
        576: {
          items: 2,
        },
        992: {
          items: 3,
        },
        1200: {
          items: 4,
        }
      }
    }
  },
  {
    name: '.gallery.kids-meal',
    options: {
      margin: 10,
      dots: false,
      responsive: {
        0: {
          items: 1,
        },
        576: {
          items: 2,
        },
        992: {
          items: 3,
        },
        1200: {
          items: 4,
        }
      }
    }
  },
  {
    name: '.gallery.pizzas',
    options: {
      margin: 10,
      dots: false,
      responsive: {
        0: {
          items: 1,
        },
        576: {
          items: 2,
        },
        768: {
          items: 3,
        },
        992: {
          items: 4,
        },
      }
    }
  },
  {
    name: '.gallery.garlic-bread',
    options: {
      margin: 10,
      dots: false,
      responsive: {
        0: {
          items: 1,
        },
        576: {
          items: 2,
        },
        768: {
          items: 3,
        },
        992: {
          items: 4,
        },
      }
    }
  },
  {
    name: '.gallery.side-orders',
    options: {
      margin: 10,
      dots: false,
      responsive: {
        0: {
          items: 1,
        },
        576: {
          items: 2,
        },
        768: {
          items: 3,
        },
        992: {
          items: 4,
        },
        1200: {
          items: 6,
        },
      }
    }
  }
];

$(function ($) {

  generateLightBox(menuClassNames);
  // generateOwlCarousel(menuGalleryOptions);

});