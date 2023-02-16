/* #m_header button */
$("#m_header button").click(function(e){
      var target_class = e.target.className;
      console.log(target_class);
      var dot_target_class = "." + target_class;
      console.log(dot_target_class);
      $(dot_target_class).toggleClass("active");
      $(dot_target_class).next().slideToggle();
      $("#m_header button:not(" + dot_target_class + ")").removeClass("active");
      $("#m_header button:not(" + dot_target_class + ")")
            .next()
            .slideUp();
});