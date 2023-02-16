<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/SIGN UP_page.css" />
    <title>Document</title>
</head>
<body>
<script>
   function check_input()
   {

      if (!document.user_modify.user_pw.value) {
          alert("비밀번호를 입력하세요!");    
          document.member_form.user_pw.focus();
          return;
      }

      if (!document.user_modify.user_pw_chk.value) {
          alert("비밀번호확인을 입력하세요!");    
          document.member_form.user_pw_chk.focus();
          return;
      }

      if (!document.user_modify.user_name.value) {
          alert("이름을 입력하세요!");    
          document.member_form.user_name.focus();
          return;
      }

      if (!document.user_modify.user_email.value) {
          alert("이메일 주소를 입력하세요!");    
          document.member_form.user_email.focus();
          return;
      }

      if (!document.user_modify.sel_email.value) {
          alert("이메일 주소를 입력하세요!");    
          document.member_form.sel_email.focus();
          return;
      }

      if (document.user_modify.user_pw.value != 
            document.user_modify.user_pw_chk.value) {
          alert("비밀번호가 일치하지 않습니다.\n다시 입력해 주세요!");
          document.user_modify.pass.focus();
          document.user_modify.pass.select();
          return;
      }

      document.user_modify.submit();
   }


   function check_id() {
     window.open("member_check_id.php?id=" + document.member_form.id.value,
         "IDcheck",
          "left=700,top=300,width=350,height=200,scrollbars=no,resizable=yes");
   }
</script>
<div id="membership_contianer">
    <?php
      session_start();

      $user_id = $_SESSION["userid"];
      $user_name = $_SESSION["username"];

      // $con = mysqli_connect("localhost", "user2", 12345, "kma");
      $con = mysqli_connect("localhost", "mion1057", "tjdals!1057", "mion1057");
      $sql = "select * from member where id = '$user_id'";
      $result = mysqli_query($con, $sql);

      $row = mysqli_fetch_array($result);
      

      $pass = $row["passwd"];
      $name = $row["name"];

      $email = explode("@", $row["email"] );
      $email1 = $email[0];
      $email2 = $email[1];
    
      $phone = $row["phone"];
    ?>
    <form name="user_modify" method="post" action="./user_modify.php?id=<?=$user_id?>">
      <fieldset>
        <h1>회원 정보 수정</h1>
        <ul>
          <li class="li_css type_a">
            <input type="text"  id="user_id" name="user_id" minlength="6" maxlength="20" value="<?=$user_id?>" autocomplete="off">
          </li>
          <li class="li_css">
            <input type="password" id="user_pw" name="user_pw" minlength="8" maxlength="12" value="<?=$pass?>" autocomplete="off">
          </li>
          <li class="li_css">
            <input type="password" id="user_pw_chk" name="user_pw_chk" minlength="8" maxlength="12" placeholder="비밀번호를 다시 한 번 입력해주세요" autocomplete="off">
          </li>
          <li class="li_css type_a">
            <input type="text" id="user_name" name="user_name" placeholder="이름" value="<?=$user_name?>" autocomplete="off">
          </li>
          <li class="li_css email">
            <input type="text" id="user_email" name="user_email" maxlength="50" value="<?=$email1?>">
              
          </li>
          <li class="li_css type_a">
            <div id="select_box">
              <select name="sel_email">
                    <option class="select_opt" value="">도메인 선택</option>
                    <option class="select_opt" value="gmail.com">gmail.com</option>
                    <option class="select_opt" value="naver.com">naver.com</option>
                    <option class="select_opt" value="daum.net">daum.net</option>
                    <option class="select_opt" value="nate.com">nate.com</option>
                    <option class="select_opt" value="paran.com">paran.com</option>
                    <option class="select_opt" value="korea.com">korea.com</option>
                    <option class="select_opt" value="hitel.net">hitel.net</option>
                    <option class="select_opt" value="unitel.co.kr">unitel.co.kr</option>
                    <option class="select_opt" value="kornet.net">kornet.net</option>
                    <option class="select_opt" value="dreamwiz.com">dreamwiz.com</option>
                    <option class="select_opt" value="chollian.net">chollian.net</option>
                    <option class="select_opt" value="hotmail.com">hotmail.com</option>
              </select>
            </div>
          </li>
          <div id="phone">
            <li class="li_css" id="phone_num">
              <input type="tel" id="user_phone" name="user_phone" placeholder="휴대폰 번호" value="<?=$phone?>" autocomplete="off">
            </li>
            <div id="certification_number">
              <p>인증번호 선택</p>
            </div>
          </div>
          
          <!-- <li class="checkbox">
            <input type="checkbox" name="receive_info" id="receive_info" value="yes">
            <label for="receive_info"><span class="arrow"></span> <h3>SMS, 이메일로 상품 및 이벤트 정보를 받겠습니다.(선택)</h3></label>
          </li>
          <li class="checkbox">
            <input type="checkbox" name="user_age_14_under" id="user_age_14_under" value="yes">
            <label for="user_age_14_under"><span class="arrow"></span><h3>14세 미만입니다.</h3></label>
            <p>만 14세 미만 회원은 법정대리인(부모님) 동의를 받은 경우만 회원가입이
              가능합니다.</p>
          </li>
          <li class="li_css">
            <input type="text" id="user_name" name="parent_name" placeholder="이름" autocomplete="off">
          </li>
          <li class="li_css email">
            <input type="text" id="user_email" name="parent_email" maxlength="50" placeholder="이메일">
          </li>
          <li class="li_css">
            <div id="select_box">
              <select name="parent_sel_email">
                    <option class="select_opt" value="">도메인 선택</option>
                    <option class="select_opt" value="gmail.com">gmail.com</option>
                    <option class="select_opt" value="naver.com">naver.com</option>
                    <option class="select_opt" value="daum.net">daum.net</option>
                    <option class="select_opt" value="nate.com">nate.com</option>
                    <option class="select_opt" value="paran.com">paran.com</option>
                    <option class="select_opt" value="korea.com">korea.com</option>
                    <option class="select_opt" value="hitel.net">hitel.net</option>
                    <option class="select_opt" value="unitel.co.kr">unitel.co.kr</option>
                    <option class="select_opt" value="kornet.net">kornet.net</option>
                    <option class="select_opt" value="dreamwiz.com">dreamwiz.com</option>
                    <option class="select_opt" value="chollian.net">chollian.net</option>
                    <option class="select_opt" value="hotmail.com">hotmail.com</option>
              </select>
            </div>
          </li>
          <li class="li_css" id="legal_representative_sign">
            <h2>
              가입동의받기
            </h2>
            <button><p>법정대리인 본인 인증</p></button>
          </li> -->
          <li id="sign_up">
            <button type="button" onclick="check_input()">확인</button>
          </li>
        </ul>
      </fieldset>  
    </form>
</div>
</body>
</html>
