$(function () {
  // Tirgger
  $(".trigger").click(function () {
    $(this).toggleClass("active");
  });
});

$(document).ready(function () {
  $(".wrap").bxSlider({
    auto: true,
    speed: 500,
    pager: false
  });
});
