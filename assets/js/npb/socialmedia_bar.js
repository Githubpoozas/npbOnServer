// socialmedia bar
jQuery(document).ready(function() {
  var ckbox = jQuery(".socialmedia__checkbox");

  jQuery("input").on("click", function() {
    if (ckbox.is(":checked")) {
      jQuery(".socialmedia").animate({right: '0px'},"slow");
      jQuery(".socialmedia__rotated").animate({opacity: '0'},"slow");
      jQuery(".socialmedia__rotated").css("visibility", "hidden");
      jQuery(".socialmedia__item").animate({opacity: '1'},"slow");
      jQuery(".socialmedia__icon").animate({margin: '8px 7px 8px 22px'},"slow");



    } else {
      jQuery(".socialmedia").animate({right: '-22px'},"slow");
      jQuery(".socialmedia__rotated").animate({opacity: '1'},"slow");
      jQuery(".socialmedia__rotated").css("visibility", "visible");
      jQuery(".socialmedia__item").animate({opacity: '0'},"slow");
      jQuery(".socialmedia__icon").animate({margin: '8px 7px'},"slow");

    }
  });
  jQuery('.wechat').on('click',function(){
    jQuery('#wechatId').css('border','solid 2px red').fadeOut(500);
    jQuery('#wechatId').fadeIn(500);
    setTimeout(function(){
      jQuery('#wechatId').css('border','solid 2px transparent');
    },800);
    setTimeout(function(){
      jQuery('#wechatId').css('border','solid 2px red').fadeOut(500);
      jQuery('#wechatId').fadeIn(500);
      setTimeout(function(){
        jQuery('#wechatId').css('border','solid 2px transparent');
      },1000);
    },1000);
    

  })
console.log('socialmedia loaded')
});