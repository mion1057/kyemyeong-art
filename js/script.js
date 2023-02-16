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


/* mainSec */
var today = new Date();
var nowFullYear = today.getFullYear();
var nowMonth = today.getMonth() + 1;
var nowDate = today.getDate();
var nowTime = today.getTime();

$(function(){
      $('.mainSec_today span:nth-of-type(1)').text(nowFullYear);
      $('.mainSec_today span:nth-of-type(2)').text(nowMonth);
      $('.mainSec_today span:nth-of-type(3)').text(nowDate);
});

/* mainSec1 */
var openDate = new Date();
openDate.setDate(openDate.getDate() + 7);
var openNowFullYear1 = openDate.getFullYear();
var openNowMonth1 = openDate.getMonth() + 1;
var openNowDate1 = openDate.getDate();
var openNowTime1 = openDate.getTime();
var openNowDay1 = openDate - nowTime;
var openNowDayResult1 = Math.floor(openNowDay1 / (1000 * 60 * 60 * 24)) - 1;
$(function(){
      $('.mainSec101 .mainSec_text span:nth-of-type(1)').text(openNowFullYear1);
      $('.mainSec101 .mainSec_text span:nth-of-type(2)').text(openNowMonth1);
      $('.mainSec101 .mainSec_text span:nth-of-type(3)').text(openNowDate1);
      $('.mainSec101 .mainSec_imgtextbox span:nth-of-type(2)').text(openNowDayResult1);
})

openDate.setDate(openDate.getDate() + 1);
var openNowFullYear2 = openDate.getFullYear();
var openNowMonth2 = openDate.getMonth() + 1;
var openNowDate2 = openDate.getDate();
var openNowTime2 = openDate.getTime();
var openNowDay2 = openDate - nowTime;
var openNowDayResult2 = Math.floor(openNowDay2 / (1000 * 60 * 60 * 24)) - 1;
$(function(){
      $('.mainSec102 .mainSec_text span:nth-of-type(1)').text(openNowFullYear2);
      $('.mainSec102 .mainSec_text span:nth-of-type(2)').text(openNowMonth2);
      $('.mainSec102 .mainSec_text span:nth-of-type(3)').text(openNowDate2);
      $('.mainSec102 .mainSec_imgtextbox span:nth-of-type(2)').text(openNowDayResult2);
})

openDate.setDate(openDate.getDate() + 3);
var openNowFullYear3 = openDate.getFullYear();
var openNowMonth3 = openDate.getMonth() + 1;
var openNowDate3 = openDate.getDate();
var openNowTime3 = openDate.getTime();
var openNowDay3 = openDate - nowTime;
var openNowDayResult3 = Math.floor(openNowDay3 / (1000 * 60 * 60 * 24)) - 1;
$(function(){
      $('.mainSec103 .mainSec_text span:nth-of-type(1)').text(openNowFullYear3);
      $('.mainSec103 .mainSec_text span:nth-of-type(2)').text(openNowMonth3);
      $('.mainSec103 .mainSec_text span:nth-of-type(3)').text(openNowDate3);
      $('.mainSec103 .mainSec_imgtextbox span:nth-of-type(2)').text(openNowDayResult3);
})

openDate.setDate(openDate.getDate() + 2);
var openNowFullYear4 = openDate.getFullYear();
var openNowMonth4 = openDate.getMonth() + 1;
var openNowDate4 = openDate.getDate();
var openNowTime4 = openDate.getTime();
var openNowDay4 = openDate - nowTime;
var openNowDayResult4 = Math.floor(openNowDay4 / (1000 * 60 * 60 * 24)) - 1;
$(function(){
      $('.mainSec104 .mainSec_text span:nth-of-type(1)').text(openNowFullYear4);
      $('.mainSec104 .mainSec_text span:nth-of-type(2)').text(openNowMonth4);
      $('.mainSec104 .mainSec_text span:nth-of-type(3)').text(openNowDate4);
      $('.mainSec104 .mainSec_imgtextbox span:nth-of-type(2)').text(openNowDayResult4);
})

openDate.setDate(openDate.getDate() + 3);
var openNowFullYear5 = openDate.getFullYear();
var openNowMonth5 = openDate.getMonth() + 1;
var openNowDate5 = openDate.getDate();
var openNowTime5 = openDate.getTime();
var openNowDay5 = openDate - nowTime;
var openNowDayResult5 = Math.floor(openNowDay5 / (1000 * 60 * 60 * 24)) - 1;
$(function(){
      $('.mainSec105 .mainSec_text span:nth-of-type(1)').text(openNowFullYear5);
      $('.mainSec105 .mainSec_text span:nth-of-type(2)').text(openNowMonth5);
      $('.mainSec105 .mainSec_text span:nth-of-type(3)').text(openNowDate5);
      $('.mainSec105 .mainSec_imgtextbox span:nth-of-type(2)').text(openNowDayResult5);
})

openDate.setDate(openDate.getDate() + 2);
var openNowFullYear6 = openDate.getFullYear();
var openNowMonth6 = openDate.getMonth() + 1;
var openNowDate6 = openDate.getDate();
var openNowTime6 = openDate.getTime();
var openNowDay6 = openDate - nowTime;
var openNowDayResult6 = Math.floor(openNowDay6 / (1000 * 60 * 60 * 24)) - 1;
$(function(){
      $('.mainSec106 .mainSec_text span:nth-of-type(1)').text(openNowFullYear6);
      $('.mainSec106 .mainSec_text span:nth-of-type(2)').text(openNowMonth6);
      $('.mainSec106 .mainSec_text span:nth-of-type(3)').text(openNowDate6);
      $('.mainSec106 .mainSec_imgtextbox span:nth-of-type(2)').text(openNowDayResult6);
})

openDate.setDate(openDate.getDate() + 3);
var openNowFullYear7 = openDate.getFullYear();
var openNowMonth7 = openDate.getMonth() + 1;
var openNowDate7 = openDate.getDate();
var openNowTime7 = openDate.getTime();
var openNowDay7 = openDate - nowTime;
var openNowDayResult7 = Math.floor(openNowDay7 / (1000 * 60 * 60 * 24)) - 1;
$(function(){
      $('.mainSec107 .mainSec_text span:nth-of-type(1)').text(openNowFullYear7);
      $('.mainSec107 .mainSec_text span:nth-of-type(2)').text(openNowMonth7);
      $('.mainSec107 .mainSec_text span:nth-of-type(3)').text(openNowDate7);
      $('.mainSec107 .mainSec_imgtextbox span:nth-of-type(2)').text(openNowDayResult7);
})


/* mainSec2 */
var timeToday = new Date();
var todayHours = today.getHours();
const opentime = new Date();
opentime.setHours(14);
var openNow = opentime.getHours();

$(function(){
      $('.mainSec2_slide .mainSec_text span:nth-of-type(1)').text(nowFullYear);
      $('.mainSec2_slide .mainSec_text span:nth-of-type(2)').text(nowMonth);
      $('.mainSec2_slide .mainSec_text span:nth-of-type(3)').text(nowDate);
      $('.mainSec2_slide .mainSec_text span:nth-of-type(4)').text(openNow);

      if (todayHours > openNow) {
            $('.mainSec2_slide .mainSec_text span:nth-of-type(5)').text('오픈');
      } else {
            $('.mainSec2_slide .mainSec_text span:nth-of-type(5)').text('오픈예정');
      }
      
})


// mainSec4
$(function(){
      var mainSec4vedio = new Array();
      mainSec4vedio[mainSec4vedio.length] = [
            "뮤지컬",
            "https://www.youtube.com/embed/oOlpIJlwXr8?start=5",
            "뮤지컬 '위키드'",
            "Popular - 정선아, 차지연",
            "01"
      ];
      mainSec4vedio[mainSec4vedio.length] = [
            "뮤지컬",
            "https://www.youtube.com/embed/okNP9YWf5oY",
            "뮤지컬 '미세스 다웃파이어'",
            "2022 초연 프레스콜 하이라이트",
            "02"
      ];
      mainSec4vedio[mainSec4vedio.length] = [
            "뮤지컬",
            "https://www.youtube.com/embed/G0ZuPjha-c8?start=5",
            "뮤지컬 '시카고'",
            "We Both Reached For the Gun - 민경아, 최재림 외",
            "03"
      ];

      var mainSec4Order = Math.floor(Math.random()*(mainSec4vedio.length));
      mainSec4Order = (isNaN(mainSec4Order)) ? 0 : mainSec4Order;
      $('.mainSec:nth-of-type(4) .mainSec_subtitle').text(mainSec4vedio[mainSec4Order][0]);
      $('.mainSec:nth-of-type(4) iframe').attr('src', mainSec4vedio[mainSec4Order][1]);
      $('.mainSec:nth-of-type(4) .mainSec_maintitle').text(mainSec4vedio[mainSec4Order][2]);
      $('.mainSec:nth-of-type(4) .mainSec_imgbox img').attr('alt', mainSec4vedio[mainSec4Order][2]);
      $('.mainSec:nth-of-type(4) .mainSec_text').text(mainSec4vedio[mainSec4Order][3]);
      $('.mainSec:nth-of-type(4) .mainSec_imgbox img').attr('src', './images/mainsec4/mainsec4_' + mainSec4vedio[mainSec4Order][4] + '.jpg');
});