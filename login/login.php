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
        //아이디와 비밀번호 전달받기
        // 로그인 페이지에서 입력한 아이디와 비밀번호를POST 방식으로 전달받아 각각 $id와 $pass에 저장
        $id = $_POST["userid"];
        $pass = $_POST["pass"];

        //MySQL 서버 접속
        //mysqli_connect() 함수로 MySQL 서버에 접속
        // $con = mysqli_connect("localhost", "user2", 12345, "kma");
        $con = mysqli_connect("localhost", "mion1057", "tjdals!1057", "mion1057");
        $sql = "select * from members where id = '$id'";
        $result = mysqli_query($con, $sql);
        //$result레코드의 개수를 mysqli_num_rows() 함수로 세고
        //그 결과를 $num_match 에 반환
        $num_match = mysqli_num_rows($result);
        //아이디 존재여부 판단
        //$num_match가 0이면 입력한 아이디가 members 테이블에 존재하지 않고, 
        //$num_match가 값을 가지면 입력한 아이디가 members 테이블에 존재
        if(!$num_match){
            echo("
                <script>
                    window.alert('등록되지 않은 아이디입니다!')
                    history.go(-1)
                </script>
            ");
        }
        else{
            $row = mysqli_fetch_array($result);
            $db_pass = $row["passwd"];

            mysqli_close($con);
        }

        if($pass != $db_pass){
            echo("
            <script>
                window.alert('비밀번호가 틀립니다')
                history.go(-1)
            </script>
            ");
            exit;
        }else{
            session_start();
            $_SESSION["userid"] = $row["id"];
            $_SESSION["username"] = $row["name"];
            $_SESSION["userlevel"] = $row["level"];
            // if($_SERVER["HTTP_REFERER"] == "/kye/index/index.php")
            // echo("
            //     <script>
            //         location.href = '../index/index.php';
            //     </script>
            // ");
            // else{
            //     echo("
            //     <script>
            //         location.href = '../sub/sub.php';
            //     </script>
            // ");
            // }
            $prevpg = $_SERVER["HTTP_REFERER"];
            header("location:" .$prevpg);
        }
    ?>
</body>
</html>