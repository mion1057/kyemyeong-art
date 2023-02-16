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
      if (!document.member_form.user_id.value) {
          alert("아이디를 입력하세요!");    
          document.member_form.id.focus();
          return;
      }

      if (!document.member_form.user_pw.value) {
          alert("비밀번호를 입력하세요!");    
          document.member_form.user_pw.focus();
          return;
      }

      if (!document.member_form.user_pw_chk.value) {
          alert("비밀번호확인을 입력하세요!");    
          document.member_form.user_pw_chk.focus();
          return;
      }

      if (!document.member_form.user_name.value) {
          alert("이름을 입력하세요!");    
          document.member_form.user_name.focus();
          return;
      }

      if (!document.member_form.user_email.value) {
          alert("이메일 주소를 입력하세요!");    
          document.member_form.user_email.focus();
          return;
      }

      if (!document.member_form.sel_email.value) {
          alert("이메일 주소를 입력하세요!");    
          document.member_form.sel_email.focus();
          return;
      }

      if (document.member_form.pass.value != 
            document.member_form.pass_confirm.value) {
          alert("비밀번호가 일치하지 않습니다.\n다시 입력해 주세요!");
          document.member_form.pass.focus();
          document.member_form.pass.select();
          return;
      }

      document.member_form.submit();
   }

   function reset_form() {
      document.member_form.user_id.value = "";  
      document.member_form.user_pw.value = "";
      document.member_form.user_pw_chk.value = "";
      document.member_form.user_name.value = "";
      document.member_form.user_email.value = "";
      document.member_form.sel_email.value = "";
      document.member_form.user_id.focus();
      return;
   }

   function check_id() {
     window.open("member_check_id.php?id=" + document.member_form.id.value,
         "IDcheck",
          "left=700,top=300,width=350,height=200,scrollbars=no,resizable=yes");
   }
</script>
<div id="membership_contianer">
    
    <form name="sign_up" method="post" action="signup.php">
      <fieldset>
        <h1>회원가입</h1>
        <ul>
          <li class="li_css type_a">
            <input type="text"  id="user_id" name="user_id" minlength="6" maxlength="20" placeholder="6~20자의 영문, 숫자로 이루어진 아이디" autocomplete="off">
          </li>
          <li class="li_css">
            <input type="password" id="user_pw" name="user_pw" minlength="8" maxlength="12" placeholder="8~12자의 영문, 숫자, 특수문자로 이루어진 비밀번호" autocomplete="off">
          </li>
          <li class="li_css">
            <input type="password" id="user_pw_chk" name="user_pw_chk" minlength="8" maxlength="12" placeholder="비밀번호를 다시 한 번 입력해주세요" autocomplete="off">
          </li>
          <li id="privacy">
            <h2>개인정보 유효기간</h2>
            <div id="privacy_label">
            <input type="radio" class="radio_tab" name="user_Privacy" id="user_Privacy_secession" value="secession">
            <label for="user_Privacy_secession">탈퇴시까지</label>
            <input type="radio" class="radio_tab" name="user_Privacy" id="user_Privacy_oneyear" value="oneyear">
            <label for="user_Privacy_oneyear">1년</label>
            </div>
            <h6>개인정보 유효기간 경과 이후 파기 또는 분리저장, 관리합니다.</h6>
          </li>
          <li class="li_css type_a">
            <input type="text" id="user_name" name="user_name" placeholder="이름" autocomplete="off">
          </li>
          <li class="li_css email">
            <input type="text" id="user_email" name="user_email" maxlength="50" placeholder="이메일">
              
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
              <input type="tel" id="user_phone" name="user_phone" placeholder="휴대폰 번호" autocomplete="off">
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
            <input type="submit">
          </li>
        </ul>
      </fieldset>  
    </form>
</div>
</body>
</html>
