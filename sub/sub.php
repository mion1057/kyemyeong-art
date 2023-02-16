
<!DOCTYPE html>

<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="icon" type="image/x-icon" href="./images/head/favicon.ico" />
    <title>뮤지컬 미세스 다웃파이어</title>

    <!-- css -->
    <link rel="stylesheet" href="./css/style.css" />
    <link rel="stylesheet" href="./css/sub_page.css" />
    <link rel="stylesheet" href="./css/header.css" />
    <link rel="stylesheet" href="./css/bigbanner.css" />
    <link rel="stylesheet" href="./css/footer.css" />
    <link rel="stylesheet" href="./css/tab.css" />
    <link rel="stylesheet" href="./css/login.css" />
    
    <!-- Link Swiper's CSS -->
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.css"
    />
    <!--tailwind cdn-->
    <link
      href="https://cdn.jsdelivr.net/npm/tailwindcss/dist/tailwind.min.css"
      rel="stylesheet"
    />

    <script src="./js/jquery-3.6.1.js"></script>
    <script src="./js/sub_main.js"></script>
    <script src="./js/calendar.js"></script>
    <script src="./js/tab.js"></script>
    <?php
        session_start();
        
        function Console_log($data){
          echo "<script>console.log( 'PHP_Console: " . $data . "' );</script>";
        }
      
        $testVal = $_SERVER["HTTP_REFERER"];
        Console_log($testVal);
        ?>
  </head>
  <body>
    <div id="container">
      <header>
        <div id="m_header">
          <div id="mh_left">
            <button class="btn_lang">KOR</button>
          </div>
          <div id="mh_center">
            <a href="#" class="svg_box">
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
                    points="44.32,48.47 36.95,41.83 89.28,11.34 96.65,17.98"
                  />
                  <polygon
                    class="st0"
                    points="96.93,78.72 89.46,85.29 34.34,52.38 41.81,45.8"
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
            </a>
          </div>
          <!-- 수정 필요 -->
          <div id="mh_right">
            <input type="checkbox" id="toggle" />
            <label for="toggle">
              <span></span>
              <span></span>
              <span></span>
            </label>
            <div id="mh_box">
              <div id="mh_box_top">
                <a href="tel: 053-580-6600">
                  <div class="svg_box">
                    <svg
                      xmlns="http://www.w3.org/2000/svg"
                      height="24"
                      width="24"
                    >
                      <path
                        d="M7 23q-.825 0-1.412-.587Q5 21.825 5 21V3q0-.825.588-1.413Q6.175 1 7 1h10q.825 0 1.413.587Q19 2.175 19 3v18q0 .825-.587 1.413Q17.825 23 17 23Zm0-5h10V6H7Z"
                      />
                    </svg>
                  </div>
                </a>
              </div>
              <nav class="gnb">
                <div class="main_menu">
                  <button class="menubtn1">공연예약/안내</button>
                  <ul class="sub_menu sub_menu1">
                    <li>
                      <a href="#"> 현재공연작 </a>
                    </li>
                    <li>
                      <a href="#"> 공연예정작 </a>
                    </li>
                    <li>
                      <a href="#"> 좌석배치도 </a>
                    </li>
                    <li>
                      <a href="#"> 관람예절 </a>
                    </li>
                  </ul>
                </div>
                <div class="main_menu">
                  <button class="menubtn2">대관신청/안내</button>
                  <ul class="sub_menu sub_menu2">
                    <li>
                      <a href="#"> 대관신청 </a>
                    </li>
                    <li>
                      <a href="#"> 대관규약 </a>
                    </li>
                    <li>
                      <a href="#"> 대관료 </a>
                    </li>
                    <li>
                      <a href="#"> 기술/장치 </a>
                    </li>
                  </ul>
                </div>
                <div class="main_menu">
                  <button class="menubtn3">커뮤니티</button>
                  <ul class="sub_menu sub_menu3">
                    <li>
                      <a href="#"> 공지사항 </a>
                    </li>
                    <li>
                      <a href="#"> 이벤트 </a>
                    </li>
                    <li>
                      <a href="#"> 자주하는 질문 </a>
                    </li>
                    <li>
                      <a href="#"> 1:1 상담 </a>
                    </li>
                  </ul>
                </div>
                <div class="main_menu">
                  <button class="menubtn4">계명아트센터</button>
                  <ul class="sub_menu sub_menu4">
                    <li>
                      <a href="#"> 인사말 </a>
                    </li>
                    <li>
                      <a href="#"> 연혁/조직 </a>
                    </li>
                    <li>
                      <a href="#"> 시설안내 </a>
                    </li>
                    <li>
                      <a href="#"> 위치/주차 </a>
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
                      <svg
                        xmlns="http://www.w3.org/2000/svg"
                        height="24px"
                        viewBox="0 0 24 24"
                        width="24px"
                        fill="#fff"
                      >
                        <path d="M0 0h24v24H0z" fill="none" />
                        <path
                          d="M17 1.01L7 1c-1.1 0-2 .9-2 2v18c0 1.1.9 2 2 2h10c1.1 0 2-.9 2-2V3c0-1.1-.9-1.99-2-1.99zM17 19H7V5h10v14z"
                        />
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
                    id="레이어_1"
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
      <div id="contents">
        <div id="sub_contents">
          <div id="sub_video">
            <video autoplay loop muted class="video1">
              <source src="./img/movie1.mp4" type="video/mp4" class="video" />
            </video>
            <video autoplay loop muted class="video2">
              <source src="./img/movie2.mp4" type="video/mp4" class="video" />
            </video>
          </div>
          <div id="sub_all">
            <div class="sub_wrap">
              <div id="sub_main">
                <div id="sub_main_img">
                  <img src="./img/picture.png" alt="sub_main_img" />
                </div>
                <div id="sub_main_intro">
                  <div id="sub_name">
                    <h2>뮤지컬</h2>
                    <p>미세스 다웃파이어</p>
                    <p></p>
                  </div>

                  <div id="sub_name_info">
                    <div class="sub_first">
                      <span class="sub_gra">공연시간</span>
                      <span class="sub_tab_margin">
                        <p>175분&nbsp;</p>
                        <p>(인터미션:20분)</p>
                      </span>
                    </div>
                    <div class="sub_first">
                      <span class="sub_gra">공연기간</span>
                      <span class="sub_tab_margin">
                        <p>2022.10.16~&nbsp;</p>
                        <p>2022.12.12</p>
                      </span>
                    </div>
                    <div class="sub_first">
                      <span class="sub_gra">관람연령</span>
                      <span class="sub_tab_margin">
                        <p>8세 이상&nbsp;</p>
                        <p>관람 가능</p>
                      </span>
                    </div>
                  </div>
                  <div id="sub_mo_sa">
                    <div id="sub_moneyinfo">
                      <div class="sub_ch_head">
                        <div style="color: #818181">가격정보</div>
                        <div class="sub_head_more">
                          <a href="#">전체보기</a>
                        </div>
                      </div>
                      <div class="sub_ch_body">
                        <p class="sub_ch">
                          <span class="sub_info_left">VIP석</span>
                          <span class="sub_info_right">150,000원</span>
                        </p>
                        <p class="sub_ch">
                          <span class="sub_info_left">R석 </span>
                          <span class="sub_info_right">130,000원</span>
                        </p>
                        <p class="sub_ch">
                          <span class="sub_info_left">S석 </span>
                          <span class="sub_info_right">100,000원</span>
                        </p>
                        <p class="sub_ch">
                          <span class="sub_info_left">A석 </span>
                          <span class="sub_info_right">70,000원</span>
                        </p>
                        <div class="sub_more">
                          <a href="#">전체보기</a>
                        </div>
                      </div>
                    </div>
                    <div id="sub_saleinfo">
                      <div class="sub_ch_head">
                        <div style="color: #818181">할인정보</div>
                        <div class="sub_head_more">
                          <a href="#">전체보기</a>
                        </div>
                      </div>
                      <div class="sub_ch_body">
                        <p class="sub_ch">무이자 할부</p>
                        <p class="sub_ch">청소년 할인 30%</p>
                        <p class="sub_ch">장애인 할인 50%</p>
                        <p class="sub_ch">국가유공자 할인 50%</p>
                        <div class="sub_more">
                          <a href="#">전체보기</a>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div id="sub_wrap">
                <div id="sub_ticketing_btn">
                  <a href="#"><h2>예매하기</h2></a>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div id="sub_ad_wrap">
          <div class="sub_wrap">
            <div id="sub_advannce">
              <div id="sub_day">
                <span>관람날짜</span>
              </div>
              <div id="sub_date">
                <p class="today">
                  <script>
                  date = new Date().toLocaleDateString();
                  document.write(date);
                  </script>
                </p>
              </div>
              <div id="sub_train">
                <span>관람회차</span>
              </div>
              <div id="sub_training">
                <span>1회차 19:30</span>
                <span></span>
              </div>
              <div id="sub_advan">
                <button>예매하기</button>
              </div>
            </div>
            <div id="sec_cal" class="sec_cal off">
              <div class="cal_nav">
                <a href="javascript:;" class="nav-btn go-prev">prev</a>
                <div class="year-month"></div>
                <a href="javascript:;" class="nav-btn go-next">next</a>
              </div>
              <div class="cal_wrap">
                <div class="days">
                  <div class="day">SUN</div>
                  <div class="day">MON</div>
                  <div class="day">TUE</div>
                  <div class="day">WED</div>
                  <div class="day">THU</div>
                  <div class="day">FRI</div>
                  <div class="day">SAT</div>
                </div>
                <div class="dates"></div>
              </div>
            </div>
            <div id="preview"></div>
          </div>
        </div>
        <section id="sub_tab_center">
          <div class="sub_wrap">
            <div id="sub_main_tab">
              <div id="sub_tab" role="tablist">
                <div class="sub_sos_tab" role="none">
                  <a class="sub_tab1" href="#" onclick="return false"
                    >공연정보</a
                  >
                </div>
                <div class="sub_sos_tab" role="none">
                  <a class="sub_tab2" href="#" onclick="return false"
                    >캐스팅 정보</a
                  >
                </div>
                <div class="sub_sos_tab" role="none">
                  <a class="sub_tab3" href="#" onclick="return false"
                    >부가정보</a
                  >
                </div>
                <div class="sub_sos_tab" role="none">
                  <a class="sub_tab5" onclick="return false" href="#">관람후기</a>
                </div>
                <div class="sub_sos_tab" role="none">
                  <a href="#" onclick="return false" class="sub_tab6">기대평</a>
                </div>
                <div class="sub_sos_tab" role="none">
                  <a class="sub_tab4" onclick="return false" href="#"
                    >예매/취소안내</a
                  >
                </div>
                <div class="sub_sos_tab" role="none">
                  <a href="#" onclick="return false" class="sub_tab7">Q&A</a>
                </div>
              </div>
            </div>
          </div>
        </section>
        <section id="sub_contents">
          <div class="sub_wrap">
            <section id="sub_notice" class="sub_tab1_on">
              <!--공연정보-->
              <p class="sub_notice">공지사항</p>
              <img src="img/notice_1.jpg" class="sub_notice_1" />
              <p class="sub_notice">할인정보</p>
              <img src="img/notice_2.jpg" class="sub_notice_1" />
            </section>

            <section id="sub_casting" class="sub_tab2_on">
              <!--캐스팅정보-->
              <div class="slick">
                <div class="sub_cas_m">
                  <div class="sub_cas_img">
                    <img src="img/c_1.JPG" class="sub_cas" />
                  </div>
                  <p>김나윤</p>
                  <p>완다</p>
                </div>
                <div class="sub_cas_m">
                  <div class="sub_cas_img">
                    <img src="img/c_2.JPG" class="sub_cas" />
                  </div>
                  <p>김다현</p>
                  <p>스튜어트</p>
                </div>
                <div class="sub_cas_m">
                  <div class="sub_cas_img">
                    <img src="img/c_3.JPG" class="sub_cas" />
                  </div>
                  <p>김산호</p>
                  <p>스튜어트</p>
                </div>
                <div class="sub_cas_m">
                  <div class="sub_cas_img">
                    <img src="img/c_4.JPG" class="sub_cas" />
                  </div>
                  <p>박준면</p>
                  <p>완다</p>
                </div>
                <div class="sub_cas_m">
                  <div class="sub_cas_img">
                    <img src="img/c_5.JPG" class="sub_cas" />
                  </div>
                  <p>박혜나</p>
                  <p>미란다</p>
                </div>
                <div class="sub_cas_m">
                  <div class="sub_cas_img">
                    <img src="img/c_6.JPG" class="sub_cas" />
                  </div>
                  <p>신영숙</p>
                  <p>미란다</p>
                </div>
                <div class="sub_cas_m">
                  <div class="sub_cas_img">
                    <img src="img/c_7.JPG" class="sub_cas" />
                  </div>
                  <p>양준모</p>
                  <p>다니엘</p>
                </div>
                <div class="sub_cas_m">
                  <div class="sub_cas_img">
                    <img src="img/c_8.JPG" class="sub_cas" />
                  </div>
                  <p>영오</p>
                  <p>안드레</p>
                </div>
                <div class="sub_cas_m">
                  <div class="sub_cas_img">
                    <img src="img/c_9.JPG" class="sub_cas" />
                  </div>
                  <p>육현욱</p>
                  <p>프랭크</p>
                </div>
                <div class="sub_cas_m">
                  <div class="sub_cas_img">
                    <img src="img/c_10.JPG" class="sub_cas" />
                  </div>
                  <p>이경욱</p>
                  <p>안드레</p>
                </div>
                <div class="sub_cas_m">
                  <div class="sub_cas_img">
                    <img src="img/c_11.JPG" class="sub_cas" />
                  </div>
                  <p>임기홍</p>
                  <p>프랭크</p>
                </div>
                <div class="sub_cas_m">
                  <div class="sub_cas_img">
                    <img src="img/c_12.JPG" class="sub_cas" />
                  </div>
                  <p>임창정</p>
                  <p>다니엘</p>
                </div>
                <div class="sub_cas_m">
                  <div class="sub_cas_img">
                    <img src="img/c_13.JPG" class="sub_cas" />
                  </div>
                  <p>정성화</p>
                  <p>다니엘</p>
                </div>
              </div>
              <div class="sub_cast">
                <h3 class="sub_call">
                  공연일 및 선호하는 배우별 캐스팅일정을 조회할 수 있습니다.<br />자세히
                  캐스팅 일정은 배우 및 제작사의 사정에 따라 사전공지 없이
                  변경될 수 있습니다.
                </h3>
                <!--달력              달력-->
                <img src="./img/casting.jpg" id="sub_cast_ing" />
              </div>
            </section>
                      
            <!--부가 정보-->
            <section id="sub_side_info" class="sub_tab3_on">
              <h2 style="color: #dc941b">기획사 정보</h2>
              <p>주최,제작: 샘컴퍼니, 스튜디오선데이</p>
              <p>
                제작투자: 미시간벤처캐피탈㈜, ㈜아떼오드, ㈜마인드마크,
                일신창업투자주식회사
              </p>
              <p>협찬: KDB산업은행, 앰배서더 서울 풀만 호텔</p>
            </section>
            <section id="sub_side_info" class="sub_tab5_on">
              <iframe src="http://localhost/g6/bbs/board.php?bo_table=qa" frameborder="0" scrolling="no">
              </iframe>
            </section>
            <section id="sub_side_info" class="sub_tab6_on">
              <iframe src="http://localhost/g6/bbs/board.php?bo_table=qa" frameborder="0" scrolling="no">
              </iframe>
            </section>
            <section id="sub_side_info" class="sub_tab7_on">
              <iframe src="http://localhost/g6/bbs/board.php?bo_table=qa" frameborder="0" scrolling="no"
                style = "background-color:#000">
              </iframe>
            </section>
            <!--예매정보-->
            <section id="sub_book" class="sub_tab4_on">
              <div class="sub_reser_1">
                <h3>예매 취소 시 유의 사항</h3>
                <p>① 예매 후 7일까지 취소 시에는 취소수수료가 없습니다.</p>
                <p>② 관람일 기준은 아래와 같이 취소수수료가 적용됩니다.</p>
                <div class="sub_reser_ul">
                  <ul>
                    <li>
                      ~관람일 10일전까지 : 뮤지컬/콘서트/클래식 장당 4,000원,
                      연극/전시 등 장당 2,000원 (단, 최대 티켓금액의 10% 한도)
                    </li>
                    <li>관람일 9일전~관람일 7일전까지 : 티켓금액의 10%</li>
                    <li>관람일 6일전~관람일 3일전까지 : 티켓금액의 20%</li>
                    <li>관람일 2일전~관람일 1일전까지 : 티켓금액의 30%</li>
                  </ul>
                </div>
                <p>
                  - ①번과 ②번 모두 해당되는 경우, ②번 기준이 우선 적용됩니다
                </p>
                <p>
                  - ②번의 경우에도 예매 당일 밤 12시 이전 취소 시에는
                  취소수수료가 없습니다. (취소기간 내에 한함)
                </p>
              </div>
              <div class="sub_reser_2">
                <p style="color: #dc941b">
                  ① 취소 시 예매수수료는 예매 당일 밤 12시 이전까지 환불되며, 그
                  이후 기간에는 환불되지 않습니다.
                </p>
                <p>
                  ② 웹 취소가능시간 이후에는 취소가 불가합니다. 단, 관람일 당일
                  취소가능 한 상품의 경우 관람일 당일 취소 시에는 티켓금액의
                  90%가 과금됩니다.
                </p>
                <p style="color: #dc941b">
                  ③ 상품의 특성에 따라서, 취소수수료 정책이 달라질 수
                  있습니다.(각 상품 예매 시 취소수수료 확인)
                </p>
                <p>④ 배송 및 반송처리 된 티켓의 배송료는 환불되지 않습니다.</p>
                <p>
                  ⑤ 금주 주말 (토/일)공연 취소를 원할 경우 내사수령 바랍니다.
                  우편으로 보낼 시 우체국이 토요일 근무를 안하는 관계로
                  수취인(인터파크)수령이 불가능하여 취소처리가 되지 않을 수
                  있습니다.
                </p>
                <p>
                  ⑥ 취소는 관람일 하루 전(평일/주말/공휴일 오후 5시, 토요일 오전
                  11시 이전)까지 직접 취소가 가능합니다. 배송이 시작된 티켓의
                  경우 티켓이 인터파크 티켓 고객센터로 공연 전일까지 반송되어야
                  취소가능하며, 취소수수료는 도착일자 기준으로 부과됩니다.
                </p>
                <p>
                  ⑦ (공연 전일이 휴일인 경우, 휴일 전날까지) 반송이 확인되지
                  않은 티켓은 현장에서도 수령하실 수 없으며, 공연 관람 및 환불이
                  불가합니다.
                </p>
              </div>
              <div class="sub_hell">
                <p>
                  궁금하신 사항이나 분쟁처리 등에 관한 문의는 이용안내 참조 또는
                  고객센터를 이용해주시기 바랍니다.
                </p>
                <div class="sub_ahref">
                  <span><a href="#">이용 안내 보기</a></span
                  ><span><a href="#">고객센터 바로가기</a></span>
                </div>
              </div>
            </section>
          </div>
        </section>
        <div class="swiper bigBanner">
          <div class="swiper-wrapper">
            <script>
              let bigBannerBg = ["black", "#f38f1f;", "#f2f1ed"];
              let bigBannerAlt = ["시카고", "젠틀맨스 가이드", "헤드윅"];

              for (i = 0; i < bigBannerAlt.length; i++) {
                document.write(
                  '\
                                                <div class="swiper-slide">\
                                                      <div class="bigbanner_bg" style="background-color:',
                  bigBannerBg[i],
                  '"></div>\
                                                      <a href="#">\
                                                            <img src="./images/bigbanner/bigbanner_0',
                  i + 1,
                  '.png" alt="',
                  bigBannerAlt[i],
                  '">\
                                                      </a>\
                                                </div>\
                                          '
                );
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
                <a href="#"> 개인정보처리방침 </a>
              </li>
              <li>
                <a href="#"> 저작권보호정책 </a>
              </li>
              <li>
                <a href="#"> 이메일주소 무단수집거부 </a>
              </li>
            </ul>
          </div>
          <div id="ft_bottom">
            <a href="https://www.kmu.ac.kr/uni/main/main.jsp"> 계명대학교 </a>
          </div>
        </div>
        <div id="f_bottom">
          <div id="fb_top" class="wrap">
            <a href="#">
              [42601] 대구광역시 달서구 달구벌대로 1095 계명대학교 성서캠퍼스
              계명아트센터
            </a>
            <a href="tel: 053-580-6600"> Tel : 053-580-6600 </a>
            <a href="tel: 053-715-2030"> Fax : 053-715-2030 </a>
            <a href="mailto: kmarts@gw.kmw.ac.kr">
              Mail : kmarts@gw.kmw.ac.kr
            </a>
          </div>
          <div id="fb_bottom" class="wrap">
            <p>Copyrightⓒ 계명아트센터 All Rights Reserved.</p>
          </div>
        </div>
      </footer>
    </div>

    <!-- js -->
    <script src="./js/jquery-3.6.1.js"></script>
    <script src="./js/script.js"></script>
    <!-- Swiper JS -->
    <script src="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.js"></script>

    <!-- Initialize Swiper -->
    <script>
      var swiper = new Swiper(".bigBanner", {
        autoplay: {
          delay: 2000,
          disableOnInteraction: false,
        },
        loop: true,
      });

      $(".swiper").each(function (elem, target) {
        var swp = target.swiper;
        $(this).hover(
          function () {
            swp.autoplay.stop();
          },
          function () {
            swp.autoplay.start();
          }
        );
      });
    </script>


    <!--로그인 모달-->
    <!--//////////////////////////////////////////////////////////////-->
    <div class="background">
      <div class="window">
        <div class="popup">
            <div id="login_i">
              <span><p>로그인</p></span>
            </div>
              <div class="shit">
                <div class="container">
                    <form name="login_form" method ="post" action="../login/login.php">
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
                      <div id="login_block">
                        <button id="login_fuck" class="account">로그인</button>
                      </div>
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
                  <img src="./images/google_m.png" />
                </div>
                <div id="naver">
                  <img src="./images/naver_m.png" />
                </div>
                <div id="kakao">
                  <img src="./images/kakao_m.png" />
                </div>
              </div>

              <div id="close">
               <button class="close">취소</button>
              </div>
        </div>
      </div>
    </div>
      <script>
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
