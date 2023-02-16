<!DOCTYPE html>
<html lang="en">
<head>
      <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <link rel="icon" type="image/x-icon" href="./images/head/favicon.ico">
      <title>계명아트센터</title>

      <!-- css -->
      <link rel="stylesheet" href="./css/style.css">
      <link rel="stylesheet" href="./css/header.css">
      <link rel="stylesheet" href="./css/maintopvisual.css">
      <link rel="stylesheet" href="./css/mainsec.css">
      <link rel="stylesheet" href="./css/mainsec1.css">
      <link rel="stylesheet" href="./css/mainsec2.css">
      <link rel="stylesheet" href="./css/mainsec3.css">
      <link rel="stylesheet" href="./css/mainsec4.css">
      <link rel="stylesheet" href="./css/notice.css">
      <link rel="stylesheet" href="./css/quick_btn.css">
      <link rel="stylesheet" href="./css/bigbanner.css">
      <link rel="stylesheet" href="./css/footer.css">
      <link rel="stylesheet" href="./css/login.css">
      <!-- Link Swiper's CSS -->
      <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.css"/>
      <?php
            include "./login/const.php";
      ?>
      <script>
        function check_input(){
            //id필드에 값이 있는지 없는지
            if(!document.login_form.id.value){
                alert("아이디를 입력하세요")
                document.login_form.id.value.focus();
                return;
            }
            if(!document.login_form.pass.value){
                alert("비밀번호를 입력하세요")
                document.login_form.pass.value.focus();
                return;
            }
            document.login_form.submit();
        }
    </script>
    <?php
        session_start();

        function Console_log($data){
            echo "<script>console.log( 'PHP_Console: " . $data . "' );</script>";
          }
        
      //     $testVal = $_SERVER["HTTP_REFERER"];
      //     Console_log($testVal);
        ?>
</head>
<body>
      <div id="main_container">
            <header>
                  <div id="m_header">
                        <div id="mh_left">
                              <button class="btn_lang">
                                    KOR
                              </button>
                        </div>
                        <div id="mh_center">
                              <a href="#" class="svg_box">
                                    <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                                    viewBox="0 0 124.72 136.06" style="enable-background:new 0 0 124.72 136.06;" xml:space="preserve">
                                          <g>
                                                <rect x="31.76" y="11.34" class="st0" width="11.76" height="73.96"/>
                                                <polygon class="st0" points="44.32,48.47 36.95,41.83 89.28,11.34 96.65,17.98"/>
                                                <polygon class="st0" points="96.93,78.72 89.46,85.29 34.34,52.38 41.81,45.8"/>
                                                <rect x="69.03" y="24.84" class="st0" width="11.76" height="46.96"/>
                                                <g>
                                                      <path class="st0" d="M113.39,74.71c0-0.98-0.04-1.95-0.09-2.91H101.1c0.07,0.96,0.12,1.93,0.12,2.91c0,21.04-17.4,38.1-38.86,38.1
                                                      c-21.46,0-38.86-17.06-38.86-38.1c0-0.98,0.05-1.95,0.12-2.91H11.43c-0.06,0.96-0.09,1.93-0.09,2.91
                                                      c0,27.62,22.84,50.02,51.02,50.02C90.54,124.72,113.39,102.33,113.39,74.71z"/>
                                                </g>
                                          </g>
                                    </svg>
                              </a>
                        </div>
                        <!-- 수정 필요 -->
                        <div id="mh_right">
                              <input type="checkbox" id="toggle">
                              <label for="toggle">
                                    <span></span>
                                    <span></span>
                                    <span></span>
                              </label>
                              <div id="mh_box">
                                    <div id="mh_box_top">
                                          <a href="tel: 053-580-6600">
                                                <div class="svg_box">
                                                      <svg xmlns="http://www.w3.org/2000/svg" height="24" width="24">
                                                            <path d="M7 23q-.825 0-1.412-.587Q5 21.825 5 21V3q0-.825.588-1.413Q6.175 1 7 1h10q.825 0 1.413.587Q19 2.175 19 3v18q0 .825-.587 1.413Q17.825 23 17 23Zm0-5h10V6H7Z"/>
                                                      </svg>
                                                </div>
                                          </a>
                                    </div>
                                    <nav class="gnb">
                                          <div class="main_menu">
                                                <button class="menubtn1">
                                                      공연예약/안내
                                                </button>
                                                <ul class="sub_menu sub_menu1">
                                                      <li>
                                                            <a href="#">
                                                                  현재공연작
                                                            </a>
                                                      </li>
                                                      <li>
                                                            <a href="#">
                                                                  공연예정작
                                                            </a>
                                                      </li>
                                                      <li>
                                                            <a href="#">
                                                                  좌석배치도
                                                            </a>
                                                      </li>
                                                      <li>
                                                            <a href="#">
                                                                  관람예절
                                                            </a>
                                                      </li>
                                                </ul>
                                          </div>
                                          <div class="main_menu">
                                                <button class="menubtn2">
                                                      대관신청/안내
                                                </button>
                                                <ul class="sub_menu sub_menu2">
                                                      <li>
                                                            <a href="#">
                                                                  대관신청
                                                            </a>
                                                      </li>
                                                      <li>
                                                            <a href="#">
                                                                  대관규약
                                                            </a>
                                                      </li>
                                                      <li>
                                                            <a href="#">
                                                                  대관료
                                                            </a>
                                                      </li>
                                                      <li>
                                                            <a href="#">
                                                                  기술/장치
                                                            </a>
                                                      </li>
                                                </ul>
                                          </div>
                                          <div class="main_menu">
                                                <button class="menubtn3">
                                                      커뮤니티
                                                </button>
                                                <ul class="sub_menu sub_menu3">
                                                      <li>
                                                            <a href="#">
                                                                  공지사항
                                                            </a>
                                                      </li>
                                                      <li>
                                                            <a href="#">
                                                                  이벤트
                                                            </a>
                                                      </li>
                                                      <li>
                                                            <a href="#">
                                                                  자주하는 질문
                                                            </a>
                                                      </li>
                                                      <li>
                                                            <a href="#">
                                                                  1:1 상담
                                                            </a>
                                                      </li>
                                                </ul>
                                          </div>
                                          <div class="main_menu">
                                                <button class="menubtn4">
                                                      계명아트센터
                                                </button>
                                                <ul class="sub_menu sub_menu4">
                                                      <li>
                                                            <a href="#">
                                                                  인사말
                                                            </a>
                                                      </li>
                                                      <li>
                                                            <a href="#">
                                                                  연혁/조직
                                                            </a>
                                                      </li>
                                                      <li>
                                                            <a href="#">
                                                                  시설안내
                                                            </a>
                                                      </li>
                                                      <li>
                                                            <a href="#">
                                                                  위치/주차
                                                            </a>
                                                      </li>
                                                </ul>
                                          </div>
                                    </nav>
                              </div>
                        </div>
                  </div>
                  <div id="sub_container">
                        <div id="sub_header_wrap">
                            <div id="sub_header_top">
                                <div id="sub_header_title">
                                    <div id="header_tel">
                                        <a href="#">
                                            <div id="header_tel_icon">
                                                <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 0 24 24" width="24px" fill="#fff">
                                                    <path d="M0 0h24v24H0z" fill="none"/>
                                                    <path d="M17 1.01L7 1c-1.1 0-2 .9-2 2v18c0 1.1.9 2 2 2h10c1.1 0 2-.9 2-2V3c0-1.1-.9-1.99-2-1.99zM17 19H7V5h10v14z"/>
                                                </svg>
                                            </div>
                                            <div id="header_tel_text">
                                                <p>053-580-6600</p>
                                            </div>
                                        </a>
                                    </div>
                                    <div id="header_logo">
                                        <svg
                                            version="1.1"
                                            xmlns="http://www.w3.org/2000/svg"
                                            xmlns:xlink="http://www.w3.org/1999/xlink"
                                            x="0px"
                                            y="0px"
                                            viewBox="0 0 124.72 136.06"
                                            style="enable-background: new 0 0 124.72 136.06"
                                            xml:space="preserve"
                                        >
                                            <style type="text/css">
                                            .st0 {
                                                fill: #f6ba44;
                                            }
                                            </style>
                                            <g>
                                                <rect
                                                    x="31.76"
                                                    y="11.34"
                                                    class="st0"
                                                    width="11.76"
                                                    height="73.96"
                                                />
                                                <polygon
                                                    class="st0"
                                                    points="44.32,48.47 36.95,41.83 89.28,11.34 96.65,17.98 	"
                                                />
                                                <polygon
                                                    class="st0"
                                                    points="96.93,78.72 89.46,85.29 34.34,52.38 41.81,45.8 	"
                                                />
                                                <rect
                                                    x="69.03"
                                                    y="24.84"
                                                    class="st0"
                                                    width="11.76"
                                                    height="46.96"
                                                />
                                                <g>
                                                    <path
                                                    class="st0"
                                                    d="M113.39,74.71c0-0.98-0.04-1.95-0.09-2.91H101.1c0.07,0.96,0.12,1.93,0.12,2.91c0,21.04-17.4,38.1-38.86,38.1
                                                                c-21.46,0-38.86-17.06-38.86-38.1c0-0.98,0.05-1.95,0.12-2.91H11.43c-0.06,0.96-0.09,1.93-0.09,2.91
                                                                c0,27.62,22.84,50.02,51.02,50.02C90.54,124.72,113.39,102.33,113.39,74.71z"
                                                    />
                                                </g>
                                            </g>
                                        </svg>
                                    </div>
                                </div>
                                <?php
                                    if(isset($_SESSION['userid']))
                                            $userid = $_SESSION['userid'];
                                    else $userid = '';
                                    if(isset($_SESSION['username']))
                                            $username = $_SESSION['username'];
                                    else $username = '';
                                    if (isset($_SESSION["userlevel"])) $userlevel = $_SESSION["userlevel"];
                                    else $userlevel = "";
                                    if (isset($_SESSION["userpoint"])) $userpoint = $_SESSION["userpoint"];
                                    else $userpoint = "";
                                    
                                    if(!$userid){
                                ?>
                                <nav id="sub_header_top_nav">
                                    <div id="sub_header_option">
                                        <ul>
                                            <li><a id="login" href="#" name="login">로그인</a></li>
                                            <li><a href="../signup/sign_up_form.php">회원가입</a></li>
                                        </ul>
                                    </div>
                                    <button type="button" id="btn_language">
                                          <a href="../sub/sub.php">KOR</a>
                                    </button>
                                    <a href="#" id="toggle">
                                        <div class="trigger">
                                            <span></span>
                                            <span></span>
                                            <span></span>
                                        </div>
                                    </a>  
                                </nav> 
                            <?php
                                }else{
                                    $logged = $username."(".$userid.")님";
                            ?>
                                <nav id="sub_header_top_nav">
                                    <div id="sub_header_option">
                                        <ul>
                                            <li><a href="../signup/modify_form.php"><?=$logged?></a></li>
                                            <li><a href="../login/logout.php">로그아웃</a></li>
                                            <?php
                                                if($userlevel == 1){
                                            ?>
                                            <li><a href="../user/admin.php">관리자 제어</a></li>
                                            <?php
                                                }
                                            ?>
                                        </ul>
                                    </div>
                                    <button type="button" id="btn_language"><a href="../sub/sub.php">KOR</a></button>
                                    <a href="#" id="toggle">
                                        <div class="trigger">
                                            <span></span>
                                            <span></span>
                                            <span></span>
                                        </div>
                                    </a>  
                                </nav> 
                            <?php
                                }
                            ?>
                            </div>
                            
                            <div id="sub_header_bottom">
                                <ul>
                                    <li>
                                      <p>공연예약/안내</p>
                                      <ul>
                                        <li><a href="#"> 현재공연작</a></li>
                                        <li><a href="#"> 공연예정작</a></li>
                                        <li><a href="#"> 좌석배치도</a></li>
                                        <li><a href="#"> 관람예절</a></li>
                                      </ul>
                                    </li>
                                    <li>
                                      <p>대관신청/안내</p>
                                      <ul>
                                        <li><a href="#"> 대관신청</a></li>
                                        <li><a href="#"> 대관규약</a></li>
                                        <li><a href="#"> 대관료</a></li>
                                        <li><a href="#"> 기술/장치</a></li>
                                      </ul>
                                    </li>
                                    <li>
                                      <p>커뮤니티</p>
                                      <ul>
                                        <li><a href="#"> 공지사항</a></li>
                                        <li><a href="#"> 이벤트</a></li>
                                        <li><a href="#"> 자주하는 질문</a></li>
                                        <li><a href="#"> 1:1질문</a></li>
                                      </ul>
                                    </li>
                                    <li>
                                      <p>계명아트센터</p>
                                      <ul>
                                        <li><a href="#"> 인사말</a></li>
                                        <li><a href="#"> 연혁 및 조직</a></li>
                                        <li><a href="#"> 시설 안내</a></li>
                                        <li><a href="#"> 위치/주차</a></li>
                                      </ul>
                                    </li>
                                  </ul>
                            </div>
                        </div>
                  </div>
            </header>
            <div id="main_contents">
                  <div class="swiper mainTopvisual">
                        <div class="swiper-wrapper">
                              <script>
                                    let mainTopvisualBg = [
                                          '#0290e9',
                                          '#ffffff',
                                          '#000000',
                                    ];

                                    let mainTopvisualAlt = [
                                          '미세스 다웃파이어',
                                          '킹키부츠',
                                          '캣츠',
                                    ];

                                    let mainTopvisualLink = [
                                          './02_sub/sub.html',
                                          '#',
                                          '#',
                                    ];

                                    for (i = 0; i < mainTopvisualAlt.length; i++) {
                                          document.write ('\
                                                <div class="swiper-slide">\
                                                      <a href="', mainTopvisualLink[i],'" style="background-color:', mainTopvisualBg[i], ';">\
                                                            <picture>\
                                                                  <source media="(min-width: 480px)" srcset="./images/maintopvisual/maintopvisual_pc_0', i+1, '.png">\
                                                                  <img src="./images/maintopvisual/maintopvisual_m_0', i+1, '.png" alt="', mainTopvisualAlt[i], '">\
                                                            </picture>\
                                                      </a>\
                                                </div>\
                                          ');
                                    }
                              </script>
                        </div>
                        <div class="mainTopvisualBg">
                        </div>
                  </div>
                  <section class="mainSec">
                        <div class="mainSec_title wrap">
                              <div class="mainSec_titleleft">
                                    <p>공연예정작</p>
                                    <p class="mainSec_today">
                                          <span></span>년
                                          <span></span>월
                                          <span></span>일
                                    </p>
                              </div>
                              <div class="mainSec_titleright">
                                    <a href="#">
                                          전체보기
                                    </a>
                              </div>
                        </div>
                        <div class="mainSec_contents">
                              <div class="swiper mainSec1Swiper">
                                    <div class="swiper-wrapper">
                                          <script>
                                                let mainSec1SubTitle = ['뮤지컬']
                                                let mainSec1MainTitle = ['엘리자벳', '레베카', '시카고', '종의 기원', '스위니토드', '랭보', '테레즈 라캥'];
            
                                                for (i = 0; i < mainSec1MainTitle.length; i++) {
                                                      document.write('\
                                                            <div class="swiper-slide mainSec10', i+1 ,'">\
                                                                  <a href="#">\
                                                                        <div class="mainSec_imgbox">\
                                                                              <div class="mainSec_imgtextbox">\
                                                                                    <span>D-</span>\
                                                                                    <span></span>\
                                                                              </div>\
                                                                              <img src="./images/mainsec1/mainsec1_0', i+1 ,'.png" alt="', mainSec1MainTitle[i], '">\
                                                                        </div>\
                                                                        <div class="mainSec_textbox">\
                                                                              <p class="mainSec_subtitle">#', mainSec1SubTitle[0], '</p>\
                                                                              <p class="mainSec_maintitle">', mainSec1MainTitle[i], '</p>\
                                                                              <div class="mainSec_text">\
                                                                                    <span></span>년\
                                                                                    <span></span>월\
                                                                                    <span></span>일\
                                                                                    첫 공연\
                                                                              </div>\
                                                                        </div>\
                                                                  </a>\
                                                            </div>\
                                                      ')
                                                }
                                          </script>
                                    </div>
                              </div>
                        </div>
                  </section>
                  <section class="mainSec">
                        <div class="mainSec_title wrap">
                              <div class="mainSec_titleleft">
                                    <p>티켓오픈</p>
                                    <p class="mainSec_today">
                                          <span></span>년
                                          <span></span>월
                                          <span></span>일
                                    </p>
                              </div>
                              <div class="mainSec_titleright">
                                    <a href="#">
                                          전체보기
                                    </a>
                              </div>
                        </div>
                        <div class="mainSec_contents wrap">
                              <script>
                                    let mainSec2SubTitle = ['뮤지컬', '뮤지컬', '연극', '콘서트']
                                    let mainSec2MainTitle = ['브로드웨이 42번가', '알로하, 나의 엄마들', 'ART', '임재범 2022 전국투어 콘서트'];
                              
                                    for (i = 0; i < mainSec2MainTitle.length; i++) {
                                          document.write('\
                                                <div class="mainSec2_slide">\
                                                      <a href="#">\
                                                            <div class="mainSec_imgbox">\
                                                                  <img src="./images/mainsec2/mainsec2_0', i+1 ,'.png" alt="', mainSec2MainTitle[i], '">\
                                                            </div>\
                                                            <div class="mainSec_textbox">\
                                                                  <p class="mainSec_subtitle">#', mainSec2SubTitle[i], '</p>\
                                                                  <p class="mainSec_maintitle">', mainSec2MainTitle[i], '</p>\
                                                                  <p class="mainSec_text">\
                                                                        <span></span>년\
                                                                        <span></span>월\
                                                                        <span></span>일\
                                                                        <span></span>시\
                                                                        <span>오픈 예정</span>\
                                                                  </p>\
                                                            </div>\
                                                      </a>\
                                                </div>\
                                          ')
                                    }
                              </script>
                        </div>
                  </section>
                  <section class="mainSec">
                  </section>
                  <section class="mainSec">
                        <div class="mainSec_title wrap">
                              <div class="mainSec_titleleft">
                                    <p>추천영상</p>
                              </div>
                        </div>
                        <div class="mainSec_contents wrap">
                              <div class="mainSec_top">
                                    <a href="#">
                                          <div class="mainSec_imgbox">
                                                <img src="" alt="">
                                          </div>
                                          <div class="mainSec_textbox">
                                                <p class="mainSec_subtitle"></p>
                                                <p class="mainSec_maintitle"></p>
                                                <p class="mainSec_text"></p>
                                          </div>
                                    </a>
                              </div>
                              <div class="mainSec_bottom">
                                    <div class="video-wrap">
                                          <iframe width="1280" height="720" src="" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                    </div>
                              </div>
                        </div>
                  </section>
                  <div id="notice_box">
                        <div class="wrap">
                              <div class="notice_left">
                                    <p>
                                          공지사항
                                    </p>
                              </div>
                              <div class="swiper notice">
                                    <div class="swiper-wrapper">
                                          <script>
                                                let notice = ['계명아트센터 플랫폼 UXUI 개편안내', '계명아트센터 무대조명계약직원(무기계약직 전환대상) 공개채용 공고', '주차요금 무인정산기 운영 안내'];
            
                                                for (i = 0; i < notice.length; i++) {
                                                      document.write('\
                                                            <div class="swiper-slide">\
                                                                  <a href="#">', notice[i] , '</a>\
                                                            </div>\
                                                      ')
                                                }
                                          </script>
                                    </div>
                              </div>
                              <div class="notice_right">
                                    <a href="#">
                                          전체보기
                                    </a>
                              </div>
                        </div>
                  </div>
                  <div id="quick_btn">
                        <ul>
                              <li>
                                    <a href="#">
                                          <div class="svg_box">
                                                <svg version="1.1" xmlns="http://www.w3.org/2000/svg"
                                                      xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 72 72"
                                                      style="enable-background:new 0 0 72 72;" xml:space="preserve">
                                                      <ellipse cx="31.82" cy="10.06" rx="7.99" ry="8.06" />
                                                      <path d="M23.83,47.72v3.74c0,2.08,1.68,3.77,3.74,3.77h23.57V70H56V51.46v-3.74l0,0l-0.07-0.75c-0.34-1.72-1.86-3.02-3.66-3.02
                                                            H41.18v-16.6c0-4.82-3.89-8.74-8.68-8.74c-4.78,0-8.68,3.92-8.68,8.74v19.14V47.72z" />
                                                      <polygon points="21.69,19.44 16,19.44 16,58.13 16,65.55 21.69,65.55 49.01,65.55 49.01,58.13 21.69,58.13 " />
                                                </svg>
                                          </div>
                                          <div class="qbtn_name">
                                                <p>
                                                      좌석배치도
                                                </p>
                                          </div>
                                    </a>
                              </li>
                              <li>
                              </li>
                              <li>
                                    <a href="#">
                                          <div class="svg_box">
                                                <svg version="1.1" xmlns="http://www.w3.org/2000/svg"
                                                      xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 72 72"
                                                      style="enable-background:new 0 0 72 72;" xml:space="preserve">
                                                      <g>
                                                            <path d="M2.19,51.8C3.43,61.5,11.35,69,20.97,69s17.54-7.5,18.78-17.2l0.09-0.7c0.06-0.64,0.09-1.29,0.09-1.95v-2.27
                                                            c0-0.66-0.03-1.31-0.09-1.95v-17.9H2.09v17.9C2.03,45.58,2,46.22,2,46.88v2.27c0,0.66,0.03,1.31,0.09,1.95L2.19,51.8z M7.05,50.28
                                                            C7,49.81,6.98,49.33,6.98,48.85v-1.66c0-0.48,0.03-0.96,0.07-1.43V32.61h27.85v13.15c0.04,0.47,0.07,0.95,0.07,1.43v1.66
                                                            c0,0.48-0.03,0.96-0.07,1.43l-0.07,0.51c-0.91,7.13-6.76,12.63-13.85,12.63S8.03,57.92,7.12,50.79L7.05,50.28z" />
                                                            <path d="M16.01,44.47c1.3-0.91,1.65-2.75,0.78-4.11c-0.87-1.36-2.63-1.73-3.93-0.82c-1.3,0.91-1.65,2.75-0.78,4.11
                                                            C12.95,45.01,14.71,45.38,16.01,44.47z" />
                                                            <path d="M25.93,39.53c-1.3,0.91-1.65,2.75-0.78,4.11c0.87,1.36,2.63,1.73,3.93,0.82c1.3-0.91,1.65-2.75,0.78-4.11
                                                            C28.99,38.99,27.23,38.62,25.93,39.53z" />
                                                            <path d="M20.77,57c4,0,7.3-2.07,7.95-4.78h-15.9C13.47,54.93,16.77,57,20.77,57z" />
                                                            <path d="M43.08,32.37h15.9c-0.65-2.71-3.95-4.78-7.95-4.78C47.03,27.59,43.73,29.66,43.08,32.37z" />
                                                            <path d="M69.91,27.07c0.06-0.64,0.09-1.29,0.09-1.95v-2.27c0-0.66-0.03-1.31-0.09-1.95V3H32.15v17.9v3.56h4.95l0-15.88
                                                            h27.85v13.15c0.04,0.47,0.07,0.95,0.07,1.43v1.66c0,0.48-0.03,0.96-0.07,1.43l-0.07,0.51c-0.91,7.13-6.76,12.63-13.85,12.63
                                                            c-3.62,0-6.91-1.44-9.39-3.79v6.75c2.77,1.66,5.97,2.63,9.39,2.63c9.62,0,17.54-7.5,18.78-17.2L69.91,27.07z" />
                                                            <path d="M42.92,15.5c-1.3,0.91-1.65,2.75-0.78,4.11c0.87,1.36,2.63,1.73,3.93,0.82c1.3-0.91,1.65-2.75,0.78-4.11
                                                            C45.99,14.96,44.23,14.59,42.92,15.5z" />
                                                            <path d="M59.13,20.44c1.3-0.91,1.65-2.75,0.78-4.11c-0.87-1.36-2.63-1.73-3.93-0.82c-1.3,0.91-1.65,2.75-0.78,4.11
                                                            C56.07,20.98,57.83,21.35,59.13,20.44z" />
                                                      </g>
                                                </svg>
                                          </div>
                                          <div class="qbtn_name">
                                                <p>
                                                      대관신청
                                                </p>
                                          </div>
                                    </a>
                              </li>
                              <li>
                              </li>
                              <li>
                                    <a href="#">
                                          <div class="svg_box">
                                                <svg version="1.1" xmlns="http://www.w3.org/2000/svg"
                                                      xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 72 72"
                                                      style="enable-background:new 0 0 72 72;" xml:space="preserve">
                                                      <g>
                                                            <path d="M54,19.01c0,2.93-0.49,5.53-1.46,7.81c-0.97,2.28-2.26,4.29-3.88,6.02c-1.61,1.73-3.45,3.33-5.49,4.79
                                                                  c-2.05,1.46-4.21,2.88-6.48,4.25v10.21h-8.02V38.44c1.67-1.01,3.62-2.23,5.85-3.65c2.23-1.42,3.97-2.74,5.22-3.96
                                                                  c1.61-1.52,2.87-3.19,3.77-4.99c0.9-1.81,1.34-3.86,1.34-6.16c0-3.37-1.06-5.89-3.18-7.54c-2.12-1.66-4.89-2.48-8.29-2.48
                                                                  c-2.99,0-5.81,0.5-8.45,1.5c-2.65,1-4.79,2.04-6.43,3.11H18V5.13c2-0.81,4.53-1.53,7.58-2.17C28.63,2.32,31.51,2,34.23,2
                                                                  c6.13,0,10.95,1.56,14.48,4.68C52.24,9.8,54,13.91,54,19.01z M37.41,70h-9.15v-9.45h9.15V70z" />
                                                      </g>
                                                </svg>
                                          </div>
                                          <div class="qbtn_name">
                                                <p>자주하는 질문</p>
                                          </div>
                                    </a>
                              </li>
                              <li>
                              </li>
                              <li>
                                    <a href="#">
                                          <div class="svg_box">
                                                <svg version="1.1" xmlns="http://www.w3.org/2000/svg"
                                                      xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 72 72"
                                                      style="enable-background:new 0 0 72 72;" xml:space="preserve">
                                                      <g>
                                                            <path d="M11.5,2h26.3c13.49,0,22.7,7.53,22.7,20.03c0,13.54-9.87,20.52-23.21,20.52H21.66V70H11.5V2z M21.66,34.18
                                                            h14.92c8.85,0,13.55-4.18,13.55-11.91c0-8.05-5.55-11.9-13.2-11.9H21.66V34.18z" />
                                                      </g>
                                                </svg>
                                          </div>
                                          <div class="qbtn_name">
                                                <p>위치/주차</p>
                                          </div>
                                    </a>
                              </li>
                        </ul>
                  </div>
                  <div class="swiper bigBanner">
                        <div class="swiper-wrapper">
                              <script>
                                    let bigBannerBg = ['black', '#f38f1f;', '#f2f1ed'];
                                    let bigBannerAlt = ['시카고', '젠틀맨스 가이드', '헤드윅']

                                    for (i = 0; i < bigBannerAlt.length; i++) {
                                          document.write('\
                                                <div class="swiper-slide">\
                                                      <div class="bigbanner_bg" style="background-color:', bigBannerBg[i], '"></div>\
                                                      <a href="#">\
                                                            <img src="./images/bigbanner/bigbanner_0', i+1, '.png" alt="', bigBannerAlt[i], '">\
                                                      </a>\
                                                </div>\
                                          ')
                                    }
                              </script>
                        </div>
                  </div>
            </div>
            <footer>
                  <div id="f_top">
                        <div id="ft_top">
                              <ul>
                                    <li>
                                          <a href="#">
                                                개인정보처리방침
                                          </a>
                                    </li>
                                    <li>
                                          <a href="#">
                                                저작권보호정책
                                          </a>
                                    </li>
                                    <li>
                                          <a href="#">
                                                이메일주소 무단수집거부
                                          </a>
                                    </li>
                              </ul>
                        </div>
                        <div id="ft_bottom">
                              <a href="https://www.kmu.ac.kr/uni/main/main.jsp">
                                    계명대학교
                              </a>
                        </div>
                  </div>
                  <div id="f_bottom">
                        <div id="fb_top" class="wrap">
                              <a href="#">
                                    [42601] 대구광역시 달서구 달구벌대로 1095 계명대학교 성서캠퍼스 계명아트센터
                              </a>
                              <a href="tel: 053-580-6600">
                                    Tel : 053-580-6600
                              </a>
                              <a href="tel: 053-715-2030">
                                    Fax : 053-715-2030
                              </a>
                              <a href="mailto: kmarts@gw.kmw.ac.kr">
                                    Mail : kmarts@gw.kmw.ac.kr
                              </a>
                        </div>
                        <div id="fb_bottom" class="wrap">
                              <p>
                                    Copyrightⓒ 계명아트센터 All Rights Reserved.
                              </p>
                        </div>
                  </div>
            </footer>
      </div>

  <div class="background">
    <div class="window">
      <div class="popup">
          <div id="login_i">
            <span><p>로그인</p></span>
          </div>
            <div class="shit">
              <div class="container">
                  <form name="login_form" method ="post" action="./login/login.php">
                    <div>
                      <input
                        type="text"
                        placeholder="아이디를 입력해주세요"
                        id="id"
                        name="userid"
                        class="account"
                      />
                      <input
                        type="password"
                        placeholder="비밀번호를 입력해주세요"
                        id="password"
                        name="pass"
                        class="account"
                      />
                    </div>
                    <div id="fuck">
                      <span><a href="#">아이디/비밀번호찾기</a></span>
                      <span><a href="#">회원가입</a></span>
                    </div>
                 
                        <button id="login_fuck" class="account">로그인</button>
                
                    
                    <p id="alert" class="account"></p>
                  </form>
              </div>
            </div>

            <!--또는-->
            <section id="divider">
              <div id="or">
                <span class="stick"></span>
                <span class="or">또는</span>
                <span class="stick"></span>
              </div>
            </section>

            <!--아이콘-->
            <div id="icon_fuck">
              <div id="google">
                <a href="https://accounts.google.com/o/oauth2/v2/auth?client_id=<?php echo SocialLoginKey::$googleApi ?>&redirect_uri=<?php echo SocialLoginKey::$redirectUrl ?>&response_type=code&state=google&scope=https://www.googleapis.com/auth/userinfo.email+https://www.googleapis.com/auth/userinfo.profile&access_type=offline&prompt=consent"><img src="./images/Google_m.png" /></a>
              </div>
              <div id="naver">
                <a href="https://nid.naver.com/oauth2.0/authorize?response_type=code&client_id=YdzS0WPmGl3X0f2p5Viy&redirect_uri=http://localhost/kye/login/social_login.php&state=naver"><img src="./images/naver_m.png" /></a>
              </div>
              <div id="kakao">
                <a href="https://kauth.kakao.com/oauth/authorize?response_type=code&client_id=7f9faecded20dd1c25c3891e926c4a7c&redirect_uri=http://localhost/kye/login/social_login.php&state=kakao"><img src="./images/kakao_m.png" /></a>
              </div>
            </div>
            <div id="close">
               <button class="close">취소</button>
            </div>
            
      </div>
    </div>
  </div>

      <!-- js -->
      <script src="./js/jquery-3.6.1.js"></script>
      <script src="./js/script.js"></script>
      <!-- Swiper JS -->
      <script src="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.js"></script>

      <!-- Initialize Swiper -->
      <script>
            var swiper = new Swiper(".mainTopvisual", {
                  centeredSlides: true,
                  autoplay: {
                        delay: 2000,
                        disableOnInteraction: false,
                  },
            });

            var mainSec1BigSwiper = undefined;
            function mainSec1SwiperWrap(){ 
                  var screenWidth = $(window).width();
                  if(screenWidth < 1024 && mainSec1BigSwiper == undefined){
                        mainSec1BigSwiper = new Swiper(".mainSec1Swiper", {
                              slidesPerView : 'auto',
                              autoplay: {
                                    delay: 2000,
                                    disableOnInteraction: false,
                              },
                              loop: true
                        });
                  } else if(screenWidth >= 1024 && mainSec1BigSwiper != undefined){
                        mainSec1BigSwiper.destroy();
                        mainSec1BigSwiper = undefined;
                        $('.swiper-wrapper').removeAttr('style');
                        $('.swiper-slide').removeAttr('style');
                  }
            }
            
            mainSec1SwiperWrap();
            
            $(window).on('resize', function(){
                  mainSec1SwiperWrap();
            });

            var swiper = new Swiper(".notice", {
                  autoplay: {
                        delay: 2000,
                        disableOnInteraction: false,
                  },
                  loop: true,
                  direction: "vertical"
            });

            var swiper = new Swiper(".bigBanner", {
                  autoplay: {
                        delay: 2000,
                        disableOnInteraction: false,
                  },
                  loop: true
            });

            $(".swiper").each(function(elem, target){
                  var swp = target.swiper;
                  $(this).hover(function() {
                        swp.autoplay.stop();
                  }, function() {
                        swp.autoplay.start();
                  });
            });
            function show () {
                  document.querySelector(".background").className = "background show";
                  document.querySelector("body").className = "body show";

            }

            function close () { 
                  document.querySelector(".background").className = "background";
                  document.querySelector("body").className = "body";
            }

            document.querySelector("#login").addEventListener('click', show);
            document.querySelector("#close").addEventListener('click', close);
      </script>
</body>
</html>