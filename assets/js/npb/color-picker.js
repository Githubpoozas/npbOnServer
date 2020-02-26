jQuery(document).ready(function() {
  jQuery(".item__pick-display:first-child").css('display','grid');
  jQuery(".item__color-picker").click(function() {
    var clothColorClass = ".item__pick-display." + jQuery(this)
        .attr("class")
        .split(" ")[1];
    jQuery(".item__pick-display").css('display','none');
    jQuery(clothColorClass).css('display','grid');
  });
});