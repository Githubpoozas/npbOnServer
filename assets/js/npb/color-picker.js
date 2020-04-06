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

  function changeColor(colorName){
    let preloadContainer = jQuery(".item__preload-container." + colorName);
    let displayName = preloadContainer.find(".item__preload-colorName").text();
    jQuery("#colorName1").text(displayName);
    jQuery("#colorName2").text(displayName);

    jQuery(preloadContainer).find(".item__preload__img").each(function (index) {
      let srcImg = jQuery(this).attr("src");
      jQuery("#default-thumb-"+index+" .detail-thumb__img").attr("src",srcImg);
      jQuery("#default-top-"+index+" .detail-top__img").attr("src",srcImg);
      })
  }

  let url = jQuery(location).attr("href");
  let urlArr = url.split("?");
  if(urlArr[1]){
    let color = urlArr[1].split("=");
    let colorName = color[1];
    changeColor(colorName);

  }


  jQuery(".item__color-picker").on("click", function () {
    let colorName = jQuery(this).attr("class").split(" ")[1];
    changeColor(colorName);

  });
});
