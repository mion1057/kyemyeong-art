<?php
include "const.php";

class TokenModel{
    public $accessToken;
    public $refreshToken;
    
    public function __construct($data){
       $this->accessToken = $data['access_token'];
       $this->refreshToken = $data['refresh_token'];
    } 
   }

class ProfileModel{
    public $nickname;
    public $email;
    public $uid;

    public function __construct($uid,$nickname,$email){
        $this->nickname = $nickname;
        $this->email = $email;
        $this->uid = $uid;
    }
}

function getTokenModel($code,$state){
    //apikey 초기화
    $restApiKey = '';
    //returnUrl 초기화
    $returnUrl = '';
    //loginUrl 초기화
    $loginUrl = '';
    //client키 초기화
    $client_secret = '';
    //공통 callbackurl
    $callbackUrl = urlencode(SocialLoginKey::$redirectUrl);
    //소셜로그인이 카카오라면
    if($state == 'kakao'){
        //kakao apikey 입력
    $restApiKey = SocialLoginKey::$kakaoApi;
    $loginUrl = "https://kauth.kakao.com/oauth";
    //token 받는 url

    }else if($state == 'naver'){
    //naver apikey 입력
    $restApiKey = SocialLoginKey::$naverApi;
    $client_secret = SocialLoginKey::$naverClientSecret;
    $loginUrl = "https://nid.naver.com/oauth2.0";
    }else{
    $restApiKey = SocialLoginKey::$googleApi;
    $client_secret = SocialLoginKey::$googleClientSecret;
    $loginUrl = "https://oauth2.googleapis.com";
    }
    $returnUrl = "$loginUrl/token?grant_type=authorization_code&client_id=".$restApiKey."&redirect_uri=".$callbackUrl."&code=".$code;
    $returnUrl .= $client_secret != '' ? "&client_secret=".$client_secret : '';
    print($returnUrl);
    
    //commend line 초기화
    $ch = curl_init();
    
    //url 지정
    curl_setopt($ch,CURLOPT_URL,$returnUrl);
    //문자열로 변환
    curl_setopt($ch,CURLOPT_RETURNTRANSFER,1);
    //post로 전송
    curl_setopt($ch,CURLOPT_POST,true);
    curl_setopt($ch, CURLOPT_HTTPHEADER, array(
        "Content-Length: 0"
    ));
    // curl_setopt($ch, CURLOPT_POSTFIELDS, $POST);
    
    
    $response = curl_exec($ch);
    // print($response);  
    $data = json_decode($response,true);
    $tokenModel = new TokenModel($data);
    return $tokenModel;
}

function getProfile($accessToken,$state){
    $header = array("Authorization: Bearer ".$accessToken);
    $profile_url = '';
    if($state == 'kakao'){
    $profile_url = "https://kapi.kakao.com/v2/user/me";
    }else if($state == 'naver'){
    $profile_url = "https://openapi.naver.com/v1/nid/me";
    }else{
    $profile_url = "https://www.googleapis.com/oauth2/v3/userinfo";
    }

   
    $ch = curl_init();
        //url 지정
    curl_setopt($ch,CURLOPT_URL,$profile_url);
        //문자열로 변환
    curl_setopt($ch,CURLOPT_RETURNTRANSFER,1);
    curl_setopt($ch,CURLOPT_HTTPHEADER,$header);
    //json데이터
    $response = curl_exec($ch);
    curl_close($ch);
    
    $decoded_data = json_decode($response,true);
    
    $uid = '';
    $nickname = '';
    $email = '';
    if($state == 'kakao'){
        $uid = $decoded_data['id'];
        $kakaoAccount = $decoded_data['kakao_account'];
        $nickname = $kakaoAccount['profile']['nickname'];
        $email = $kakaoAccount['email'];
    }else if($state == 'naver'){
        $responseData = $decoded_data['response'];
        $uid = $responseData['id'];
        $nickname = $responseData['nickname'];
        $email =$responseData['email'];
    }else{
        $uid = $decoded_data['sub'];
        $nickname = $decoded_data['name'];
        $email = $decoded_data['email'];
    }
    
    $profileModel = new ProfileModel($uid,$nickname,$email);
    return $profileModel;
}


//토큰 만료 로그아웃
function logout($access_token,$id){
    $header = array("Authorization: Bearer ".$access_token);
	$url = 'https://kapi.kakao.com/v1/user/logout';
    
    $ch = curl_init();
    //command line tool
    curl_setopt($ch, CURLOPT_URL, $url);
    //문자열 반환
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    //문자열 출력 
    curl_setopt($ch, CURLOPT_HTTPHEADER, $header);
    curl_exec($ch);
    curl_close($ch);
}

function unlinkLogout($access_token){
    $header = array("Authorization: Bearer ".$access_token);
	$url = 'https://kapi.kakao.com/v1/user/unlink';
    
    $ch = curl_init();
    //command line tool
    curl_setopt($ch, CURLOPT_URL, $url);
    //문자열 반환
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    //문자열 출력 
    curl_setopt($ch, CURLOPT_HTTPHEADER, $header);
    curl_exec($ch);
    curl_close($ch);
    
}



?>