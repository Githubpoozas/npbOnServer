jQuery(document).ready(function() {
  if (jQuery(".featured-media-inner").css("height")) {
    jQuery(".featured-media-inner").appendTo(".header__banner");
  }

  if (jQuery(".cvwp-video-player").css("height")) {
    jQuery(".cvwp-video-player").appendTo(".header__banner");
  }

  var navHeight = jQuery("#site-header").height();
  var headerHeight = 0;

  function getHeaderHight(){
    if(jQuery('.header__banner').height()){
      headerHeight = jQuery('.header__banner').height();
    } else if(jQuery('.header__banner > iframe').height()){
      headerHeight = jQuery('.header__banner > iframe').height();
    }
  }
  getHeaderHight();

  if (jQuery("#wpadminbar").is(":visible")) {
    var adminTools = true;
  }
 
  var prevScrollpos = jQuery(window).scrollTop();
 
  jQuery(window).on('scroll resize',function() {
    var currentScrollPos = jQuery(window).scrollTop();
    getHeaderHight();

    if (
      headerHeight + navHeight > currentScrollPos ||
      prevScrollpos > currentScrollPos
    ) {
      if (adminTools) {
        jQuery("#site-header").css("top", "32px");
      } else {
        jQuery("#site-header").css("top", 0);
      }
    } else {
      jQuery("#site-header").css("top", "-100px");
    }

    prevScrollpos = currentScrollPos;

  });
  
  jQuery(".header-titles-wrapper").append("<a href='http://noproblem.nupni.ml/' id='appendHome'>HOME หน้าแรก</a>");
});
