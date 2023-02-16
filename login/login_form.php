<!DOCTYPE html>
<html lang="ko">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="./css/login.css">
    <title>Document</title>
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
  </head>
  <body>
  <button id="show">팝업열기</button>
  <div class="background">
    <div class="window">
      <div class="popup">
          <div id="login_i">
            <span><p>로그인</p></span>
          </div>
            <div class="main">
              <div class="container">
                  <form name="login_form" method ="post" action="./login.php">
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
                    <div id="find">
                      <span><a href="#">아이디/비밀번호찾기</a></span>
                      <span><a href="#">회원가입</a></span>
                    </div>
                    <button id="login" class="account">로그인</button>
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
            <div id="icon_m">
              <div id="google">
                <img src="./img/google_m.png" />
              </div>
              <div id="naver">
                <img src="./img/naver_m.png" />
              </div>
              <div id="kakao">
                <img src="./img/kakao_m.png" />
              </div>
            </div>
      </div>
    </div>
  </div>
            

            <!--pc버전-->
            <div id="icon">
              <div id="google">
                <span class="google_pc">
                  <p>구글로그인</p>
                </span>
              </div>
              <div id="naver">
                <span class="naver_pc">
                  <p>네이버로그인</p>
                </span>
              </div>
              <div id="kakao">
                <span class="kakao_pc">
                  <p>카카오로그인</p>
                </span>
              </div>
            </div>
    <!--************************************-->
    <script>
      function show () {
  document.querySelector(".background").className = "background show";
}

function close () { 
  document.querySelector(".background").className = "background";
}

document.querySelector("#show").addEventListener('click', show);
document.querySelector("#close").addEventListener('click', close);
    </script>
</body>
</html>