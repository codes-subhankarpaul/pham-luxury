// JavaScript Document
jQuery('#luxury-car-owl').owlCarousel({
    loop:false,
    autoplay: false,
    margin:10,
    navText : ["←","→"],
    nav:true,
    dots: false,
    responsive:{
        0:{
            items:1
        },
        576:{
            items:1
        },
        768:{
            items:2
        },
        1200:{
            items:3
        }
    }
});

jQuery('.nested-slider').owlCarousel({
    loop:false,
    autoplay: false,
    margin:10,
    navText : ["←","→"],
    nav:true,
    dots: false,
    responsive:{
        0:{
            items:1
        },
        576:{
            items:1
        },
        768:{
            items:1
        },
        1200:{
            items:1
        }
    }
});



jQuery('#brands-owl').owlCarousel({
    loop:true,
    autoplay: true,
    margin:20,
    navText : ["←","→"],
    nav:true,
    dots: false,
    responsive:{
        0:{
            items:2
        },
        576:{
            items:3
        },
        768:{
            items:5
        },
        1200:{
            items:7
        }
    }
});


jQuery('#car-hire-owl').owlCarousel({
    loop:false,
    autoplay: false,
    margin:10,
    navText : ["←","→"],
    nav:true,
    dots: false,
    responsive:{
        0:{
            items:1
        },
        576:{
            items:2
        },
        992:{
            items:3
        },
    }
});

jQuery('#car-hire-owl-2').owlCarousel({
    loop:false,
    autoplay: false,
    margin:10,
    navText : ["←","→"],
    nav:true,
    dots: false,
    responsive:{
        0:{
            items:1
        },
        576:{
            items:2
        },
        992:{
            items:3
        },
    }
});



jQuery(document).ready(function() {
    var bigimage = jQuery("#big");
    var thumbs = jQuery("#thumbs");
    //var totalslides = 10;
    var syncedSecondary = true;
  
    bigimage
      .owlCarousel({
      items: 1,
      slideSpeed: 2000,
      nav: true,
      autoplay: true,
      dots: false,
      loop: true,
      responsiveRefreshRate: 200,
      navText: [
        '<i class="fa fa-angle-left" aria-hidden="true"></i>',
        '<i class="fa fa-angle-right" aria-hidden="true"></i>'
      ]
    })
      .on("changed.owl.carousel", syncPosition);
  
    thumbs
      .on("initialized.owl.carousel", function() {
      thumbs
        .find(".owl-item")
        .eq(0)
        .addClass("current");
    })
      .owlCarousel({
      items: 4,
      dots: true,
      nav: true,
      margin:10,
      navText: [
        '<i class="fa fa-angle-left" aria-hidden="true"></i>',
        '<i class="fa fa-angle-right" aria-hidden="true"></i>'
      ],
      smartSpeed: 200,
      slideSpeed: 500,
      slideBy: 4,
      responsiveRefreshRate: 100
    })
      .on("changed.owl.carousel", syncPosition2);
  
    function syncPosition(el) {
      //if loop is set to false, then you have to uncomment the next line
      //var current = el.item.index;
  
      //to disable loop, comment this block
      var count = el.item.count - 1;
      var current = Math.round(el.item.index - el.item.count / 2 - 0.5);
  
      if (current < 0) {
        current = count;
      }
      if (current > count) {
        current = 0;
      }
      //to this
      thumbs
        .find(".owl-item")
        .removeClass("current")
        .eq(current)
        .addClass("current");
      var onscreen = thumbs.find(".owl-item.active").length - 1;
      var start = thumbs
      .find(".owl-item.active")
      .first()
      .index();
      var end = thumbs
      .find(".owl-item.active")
      .last()
      .index();
  
      if (current > end) {
        thumbs.data("owl.carousel").to(current, 100, true);
      }
      if (current < start) {
        thumbs.data("owl.carousel").to(current - onscreen, 100, true);
      }
    }
  
    function syncPosition2(el) {
      if (syncedSecondary) {
        var number = el.item.index;
        bigimage.data("owl.carousel").to(number, 100, true);
      }
    }
  
    thumbs.on("click", ".owl-item", function(e) {
      e.preventDefault();
      var number = jQuery(this).index();
      bigimage.data("owl.carousel").to(number, 300, true);
    });
  });
  