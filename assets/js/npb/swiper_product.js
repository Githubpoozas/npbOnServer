jQuery(document).ready(function () {
  //slide 3
  var product = new Swiper(".swiper-container__slide3", {
    // allowTouchMove: true,
    slidesPerView: 1,
    slidesPerGroup: 1,

    breakpoints: {
      600: {
        slidesPerView: 2,
        slidesPerGroup: 2,
      },
      900: {
        slidesPerView: 3,
        slidesPerGroup: 3,
        spaceBetween: 50,
        simulateTouch: false,
      },
    },

    navigation: {
      nextEl: ".swiper-button-next",
      prevEl: ".swiper-button-prev",
    },
  })
  jQuery(".seemore__less").hide()
  jQuery(".seemore__less-fixed").removeClass("show")

  jQuery(".swiper-container__slide3 .seemore").click(function () {
    var mySwiper = jQuery(this).parent()[0].swiper

    var windowSize = window.innerWidth
    var marginRight = jQuery(this)
      .parent()
      .find(".swiper-slide__slide3:first-child")
      .css("margin-right")

    if (
      jQuery(this).parent().find(".swiper-wrapper__slide3").css("flex-wrap") ===
      "nowrap"
    ) {
      jQuery(this).addClass("open")
      jQuery(this).addClass("fixed")

      jQuery(this)
        .parent()
        .find(".swiper-wrapper__slide3")
        .css("flex-wrap", "wrap")

      jQuery(this)
        .parent()
        .find(".swiper-wrapper__slide3")
        .addClass("slideWrap")

      mySwiper.slideTo(0)
      mySwiper.allowTouchMove = false

      if (windowSize >= 600) {
        jQuery(this).parent().find(".swiper-button-next").hide()
        jQuery(this).parent().find(".swiper-button-prev").hide()
      }

      jQuery(this).parent().find(".seemore__more").hide()
      jQuery(this).parent().find(".seemore__less").show()
      jQuery(".seemore__less-fixed").addClass("show")

      if (windowSize >= 900) {
        jQuery(this)
          .parent()
          .find(".swiper-slide__slide3:nth-child(3n+0)")
          .css("margin-right", "0")
      } else if (windowSize < 900 && windowSize >= 600) {
        jQuery(this)
          .parent()
          .find(".swiper-slide__slide3:nth-child(even)")
          .css("margin-right", "0")
      }
    } else {
      jQuery(this).removeClass("open")
      jQuery(this).removeClass("fixed")

      jQuery(this)
        .parent()
        .find(".swiper-wrapper__slide3")
        .css("flex-wrap", "nowrap")
      jQuery(this)
        .parent()
        .find(".swiper-wrapper__slide3")
        .removeClass("slideWrap")

      mySwiper.allowTouchMove = true

      const element = jQuery(this).parent().find(".cloth")[0]
      const elementRect = element.getBoundingClientRect()
      const absoluteElementTop = elementRect.top + window.pageYOffset
      const middle = absoluteElementTop - window.innerHeight / 5
      window.scrollTo(0, middle)

      if (windowSize >= 600) {
        jQuery(this).parent().find(".swiper-button-next").show()
        jQuery(this).parent().find(".swiper-button-prev").show()
      }

      jQuery(this).parent().find(".seemore__more").show()
      jQuery(this).parent().find(".seemore__less").hide()
      jQuery(this).parent().find(".seemore__less-fixed").hide()

      if (windowSize >= 900) {
        jQuery(this)
          .parent()
          .find(".swiper-slide__slide3:nth-child(3n+0)")
          .css("margin-right", marginRight)
      } else if (windowSize < 900 && windowSize >= 600) {
        jQuery(this)
          .parent()
          .find(".swiper-slide__slide3:nth-child(even)")
          .css("margin-right", marginRight)
      }
    }
  })

  jQuery(".cloth__img:not(:first-child)").hide()
  jQuery(".cloth").on("mouseenter", function () {
    jQuery(":nth-child(1)", this).hide()
    jQuery(":nth-child(2)", this).show()
  })
  jQuery(".cloth").on("mouseleave", function () {
    jQuery(":nth-child(1)", this).show()
    jQuery(":nth-child(2)", this).hide()
  })

  if (window.matchMedia("(max-width: 800px").matches) {
    setInterval(function () {
      jQuery(":nth-child(1)", ".cloth").hide()
      jQuery(":nth-child(2)", ".cloth").show()
    }, 3000)
    setInterval(function () {
      jQuery(":nth-child(1)", ".cloth").show()
      jQuery(":nth-child(2)", ".cloth").hide()
    }, 6000)
  }

  // on load hide .seemore if last slide already in viewpoint
  function seemoreHide() {
    var slideWidth = jQuery(".swiper-slide__slide3").outerWidth(true)
    var windowWidth = jQuery(window).width()
    jQuery(".swiper-wrapper__slide3").each(function () {
      var lastSlide = jQuery(this).find(".swiper-slide__slide3").length - 1
      var lastSlidePosition =
        jQuery(this).find(".swiper-slide__slide3").eq(lastSlide).offset().left +
        slideWidth
      if (
        lastSlidePosition <= windowWidth &&
        jQuery(this).parent().find(".seemore__more").is(":visible") &&
        jQuery(this).css("flex-wrap", "nowrap")
      ) {
        jQuery(this).parent().find(".seemore").hide()
      } else if (
        lastSlidePosition > windowWidth &&
        jQuery(this).parent().find(".seemore__more").is(":hidden") &&
        jQuery(this).css("flex-wrap", "nowrap")
      ) {
        jQuery(this).parent().find(".seemore").show()
      }
    })
  }
  seemoreHide()
  jQuery(window).resize(function () {
    seemoreHide()
  })

})

// check positon of seemore
window.addEventListener("scroll", () => {
  let seemore = document.getElementsByClassName("seemore open")
  let windowBottom = window.innerHeight;

  for (let i = 0; i < seemore.length; i++) {
    let wrapperBound = seemore[
      i
    ].parentElement.firstElementChild.getBoundingClientRect()
    let seemoreBound = seemore[i].getBoundingClientRect()

    if (seemore[i].classList.contains("fixed")) {
      if (
        wrapperBound.top >= seemoreBound.bottom ||
        wrapperBound.bottom <= seemoreBound.top
      ) {
        seemore[i].classList.remove("fixed")
      }
    } else {
      if(windowBottom <= seemoreBound.bottom && wrapperBound.top <= windowBottom){
        seemore[i].classList.add("fixed")
      }
    }
  }
})
