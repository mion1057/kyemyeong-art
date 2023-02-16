// var lastScrollTop = 0;

// $(document).ready(function () {
//   /*스크롤 시 헤더 숨기고 보여주는 기능*/
//     $(window).scroll(function () {
//       var scrollTop = $(this).scrollTop();
//       if (scrollTop >= 10) {
//         if (scrollTop > lastScrollTop && lastScrollTop > 0) {
//           $("header").css({
//             top: "-60px",
//             transition: "1s",
//             "z-index": "999",
//           });
          
//         } else {
//           $("header").css({
//             top: "0px",
//             transition: "1s",
//             "z-index": "999"
//           });
//         }
//         lastScrollTop = scrollTop;
//       }
//     });
// });

$(function(){
    var lastScrollTop = 0, delta = 15;
    $(window).scroll(function(event){
       var st = $(this).scrollTop();
       
       if(Math.abs(lastScrollTop - st) <= delta)
          return; // 스크롤값을 받아서 리턴한다.
if ((st > lastScrollTop) && (lastScrollTop>0)) {
       // downscroll code
      $("#sub_header_wrap").css({
         "top":"-80px",
         "transition":"1s"
      }); // 스크롤을 내렸을때 #header의 CSS 속성중 top 값을 -50px로 변경한다.
  
   } else {
      // upscroll code
      $("#sub_header_wrap").css({
         "top":"0px",
         "transition":"1s"
      }); // 스크롤을 올렸을때 #header의 CSS 속성중 top 값을 0px로 변경한다.
   }
       lastScrollTop = st;
    });
});