<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
    $user_id = $_POST["user_id"];
    $user_pw = $_POST["user_pw"];
    $user_name = $_POST["user_name"];
    $user_email1 = $_POST["user_email"];
    $user_email2 = $_POST["sel_email"];
    $user_phone = $_POST["user_phone"];
    
    $user_email = $_POST["user_email"]."@".$_POST["sel_email"];
    
    $con = mysqli_connect("localhost", "user2", 12345, "kma");

    //닷홈 mysql connect
    // $con = mysqli_connect("localhost", "mion1057", "tjdals!1057", "mion1057");
	$sql = "insert into member(id, passwd, name, email, phone, level) ";
	$sql .= "values('$user_id', '$user_pw', '$user_name', '$user_email','$user_phone', 9)";

	mysqli_query($con, $sql);  // $sql 에 저장된 명령 실행
    mysqli_close($con);     

    session_start();
    
    $_SESSION["userid"] = $row["id"];
    $_SESSION["username"] = $row["name"];

    echo "
	      <script>
	          location.href = '../index/index.php';
	      </script>
	  ";
?>

</body>
</html>