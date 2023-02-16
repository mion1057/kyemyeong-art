<?php
class SocialLoginKey{
    //프로퍼티
    public static $kakaoApi = "7f9faecded20dd1c25c3891e926c4a7c";
    public static $naverApi = "YdzS0WPmGl3X0f2p5Viy";
    public static $naverClientSecret = "JWwfnanicg";
    public static $googleApi = "510876506272-4fm8jv75ou01rq38aa9jbmgm6jr09sff.apps.googleusercontent.com";
    public static $googleClientSecret = "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";
    // 닷홈
    // public static $googleApi = "305965048230-c47b4atsa5sidnkhu8vp257te64t1vvp.apps.googleusercontent.com";
    // public static $googleClientSecret = "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";
    public static $redirectUrl = "http://localhost/kye/login/social_login.php";
}
$mysqlConnect = mysqli_connect("localhost", "mion1057", "tjdals!1057", "mion1057");
?>