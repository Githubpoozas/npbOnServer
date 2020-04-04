// jQuery(document).ready(function() {
//   jQuery(".item__pick-display:first-child").css('display','grid');
//   jQuery(".item__color-picker").click(function() {
//     var clothColorClass = ".item__pick-display." + jQuery(this)
//         .attr("class")
//         .split(" ")[1];
//     jQuery(".item__pick-display").css('display','none');
//     jQuery(clothColorClass).css('display','grid');
//   });
// });

jQuery(document).ready(function () {
  jQuery(".item__color-picker").on("click", function () {
    let colorName = jQuery(this).attr("class").split(" ")[1];

    let preloadContainer = jQuery(".item__preload-container." + colorName);

    jQuery(preloadContainer).children().each(function (index) {
      let srcImg = jQuery(this).attr("src");
      console.log()
      jQuery("#default-thumb-"+index+" .detail-thumb__img").attr("src",srcImg);
      jQuery("#default-top-"+index+" .detail-top__img").attr("src",srcImg);


      })
  });
});
