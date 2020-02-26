jQuery(document).ready(function() {
  jQuery(".item__color-picker").click(function() {
    var image1 = jQuery(this)
      .children("img")
      .attr("src");
    var image2 = jQuery(this)
      .children("img")
      .attr("src")
      .replace("_1", "_2");

    jQuery(".item__front")
      .children("img")
      .attr("src", image1);
    jQuery(".item__back")
      .children("img")
      .attr("src", image2);
  });
});
