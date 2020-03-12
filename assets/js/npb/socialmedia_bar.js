// socialmedia bar
jQuery(document).ready(function() {
  var ckbox = jQuery(".socialmedia__checkbox");

  jQuery("input").on("click", function() {
    if (ckbox.is(":checked")) {
      jQuery(".socialmedia").animate({ right: "0px" }, "slow");
      jQuery(".socialmedia__rotated").animate({ opacity: "0" }, "slow");
      jQuery(".socialmedia__rotated").css("visibility", "hidden");
      jQuery(".socialmedia__item").animate({ opacity: "1" }, "slow");
      jQuery(".socialmedia__icon").animate(
        { margin: "8px 7px 8px 22px" },
        "slow"
      );
    } else {
      jQuery(".socialmedia").animate({ right: "-22px" }, "slow");
      jQuery(".socialmedia__rotated").animate({ opacity: "1" }, "slow");
      jQuery(".socialmedia__rotated").css("visibility", "visible");
      jQuery(".socialmedia__item").animate({ opacity: "0" }, "slow");
      jQuery(".socialmedia__icon").animate({ margin: "8px 7px" }, "slow");
    }
  });

  // jQuery(".copyicon").on("click", function() {
  //   jQuery(this)
  //     .find(".popuptext")
  //     .toggleClass("show");
  // var copyText = document.getElementById("wechatqr2");
  // copyText.select();
  // copyText.setSelectionRange(0, 99999)
  // document.execCommand("copy");
  // });
});
function copyqr() {
  var copyText = document.getElementById("wechatqr");
  copyText.select();
  copyText.setSelectionRange(0, 99999)
  document.execCommand("copy");
  var popup = document.getElementById("myPopup");
  popup.classList.toggle("show");
}

function copyqr2() {
  var copyText = document.getElementById("wechatqr2");
  copyText.select();
  copyText.setSelectionRange(0, 99999)
  document.execCommand("copy");
  var popup = document.getElementById("myPopup2");
  popup.classList.toggle("show");
}
