$(document).ready(function () {
  $(".sub_sos_tab").click(function (e) {
    var target_class = "." + e.target.className;
    console.log(target_class);
    var dot_target_class = target_class + "_on";
    $(target_class).css("color" , "#FFBF40");
    $(".sub_sos_tab a:not("+target_class+")").css("color","#fff");
    $(dot_target_class).css({
          "display":"block",
        });
    $("#sub_contents section:not(" + dot_target_class + ")").css(
      "display",
      "none"
    );
  });

});
