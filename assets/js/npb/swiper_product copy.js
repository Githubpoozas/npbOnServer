jQuery(document).ready(function() {
  //slide 3
  var product = new Swiper(".swiper-container__slide3", {
    slidesPerView: "auto",
    slidesPerGroup: 1,
    spaceBetween: 3,
    breakpoints: {
      600: {
        slidesPerView: 2,
        slidesPerGroup: 2,
        spaceBetween: 5,
      },
      900: {
        slidesPerView: 3,
        slidesPerGroup: 3,
        spaceBetween: 10,
        simulateTouch:false
      }
    },

    navigation: {
      nextEl: ".swiper-button-next",
      prevEl: ".swiper-button-prev"
    }
  });
  jQuery(".seemore__less").hide();

  jQuery(".swiper-container__slide3 .seemore").click(function() {
    var mySwiper = jQuery(this).parent()[0].swiper;

    var windowSize = window.innerWidth;
    var marginRight = jQuery(this)
      .parent()
      .find(".swiper-slide__slide3:first-child")
      .css("margin-right");

    if (
      jQuery(this)
        .parent()
        .find(".swiper-wrapper__slide3")
        .css("flex-wrap") === "nowrap"
    ) {
      jQuery(this)
        .parent()
        .find(".swiper-wrapper__slide3")
        .css("flex-wrap", "wrap");

      jQuery(this)
        .parent()
        .find(".swiper-wrapper__slide3")
        .addClass("slideWrap");

      mySwiper.slideTo(0);
      mySwiper.allowTouchMove = false;

      if (windowSize >= 600) {
        jQuery(this)
          .parent()
          .find(".swiper-button-next")
          .hide();
        jQuery(this)
          .parent()
          .find(".swiper-button-prev")
          .hide();
      }

      jQuery(this)
        .parent()
        .find(".seemore__more")
        .hide();
      jQuery(this)
        .parent()
        .find(".seemore__less")
        .show();

      if (windowSize >= 900) {
        jQuery(this)
          .parent()
          .find(".swiper-slide__slide3:nth-child(3n+0)")
          .css("margin-right", "0");
      } else if (windowSize < 900 && windowSize >= 600) {
        jQuery(this)
          .parent()
          .find(".swiper-slide__slide3:nth-child(even)")
          .css("margin-right", "0");
      }
    } else {
      jQuery(this)
        .parent()
        .find(".swiper-wrapper__slide3")
        .css("flex-wrap", "nowrap");
      jQuery(this)
        .parent()
        .find(".swiper-wrapper__slide3")
        .removeClass("slideWrap");

      mySwiper.allowTouchMove = true;

      const element = jQuery(this)
        .parent()
        .find(".cloth")[0];
      const elementRect = element.getBoundingClientRect();
      const absoluteElementTop = elementRect.top + window.pageYOffset;
      const middle = absoluteElementTop - window.innerHeight / 5;
      window.scrollTo(0, middle);

      if (windowSize >= 600) {
        jQuery(this)
          .parent()
          .find(".swiper-button-next")
          .show();
        jQuery(this)
          .parent()
          .find(".swiper-button-prev")
          .show();
      }

      jQuery(this)
        .parent()
        .find(".seemore__more")
        .show();
      jQuery(this)
        .parent()
        .find(".seemore__less")
        .hide();

      if (windowSize >= 900) {
        jQuery(this)
          .parent()
          .find(".swiper-slide__slide3:nth-child(3n+0)")
          .css("margin-right", marginRight);
      } else if (windowSize < 900 && windowSize >= 600) {
        jQuery(this)
          .parent()
          .find(".swiper-slide__slide3:nth-child(even)")
          .css("margin-right", marginRight);
      }
    }
  });

  jQuery(window).resize(function() {
    var windowSize = window.innerWidth;

    if (windowSize >= 900) {
      jQuery(".slideWrap")
        .find(".swiper-slide__slide3:nth-child(3n+0)")
        .css("margin-right", "0");
    } else if (windowSize < 900 && windowSize >= 600) {
      jQuery(".slideWrap")
        .find(".swiper-slide__slide3:nth-child(even)")
        .css("margin-right", "0");
    }
  });

  jQuery(".cloth__img").mouseenter(function() {
    jQuery(this).attr(
      "src",
      jQuery(this)
        .attr("src")
        .replace("_1", "_2")
    );
  });
  jQuery(".cloth__img").mouseleave(function() {
    jQuery(this).attr(
      "src",
      jQuery(this)
        .attr("src")
        .replace("_2", "_1")
    );
  });
});
