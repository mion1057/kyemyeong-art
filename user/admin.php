<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./css/style.css">
    <link rel="stylesheet" href="./css/header.css">
    <link rel="stylesheet" href="./css/footer.css">
    <link rel="stylesheet" href="./css/login.css">
    <style>
        section{
            margin-top:100px;
        }
    </style>
</head>
<body>
    <?php include "../header.php"?>
    <section>
        <!-- 관리자모드 섹션 -->
        <div id="admin_box">
            <h3 id="member_title">
                관리자 모드 > 회원 관리
            </h3>
            <ul id="member_list">
                <!-- member 테이블의 필드명 출력하기 -->
                <li>
                    <span class="col1">번호</span>
                    <span class="col2">아이디</span>
                    <span class="col3">이름</span>
                    <span class="col4">레벨</span>
                    <span class="col5">포인트</span>
                    <span class="col6">가입일</span>
                    <span class="col7">수정</span>
                    <span class="col8">삭제</span>
                </li>
                <!-- 데이터 베이스 연동 변수 값 불러오기, 사용자 입력 가능하도록 form 태그 사용 -->
                <?php
                //1. 데이터베이스에 접속해라(사용자명, 암호, 데이터베이스명)
                $con = mysqli_connect("localhost", "mion1057", "tjdals!1057", "kma");
                //2. 회원 정보가 있는 테이블(members) 테이블의 내용을 보여달라.SELECT * FROM `members`
                $sql = "select * from member order by num desc"; // desc 내림차순, asc 오름차순
                $result = mysqli_query($con, $sql); // 접속 정보와 쿼리를 이용해 데이터 베이스 쿼리 실행
                //3. 테이블에 내용이 있다면 해당하는 행의 갯수를 알아내라.
                $total_record = mysqli_num_rows($result); // 전체 회원 수
                //4. 해당하는 행의 갯수를 알아내에서 그 갯수만큼 반복해서 행단위로 필드값을 불러와라.
                // 화면에 출력할 번호 $number 변수 생성
                $number = $total_record;

                while ($row = mysqli_fetch_array($result)) {
                    $num         = $row["num"];
                    $id          = $row["id"];
                    $name        = $row["name"];
                    $level       = $row["level"];
                    $point       = $row["point"];
                    $regist_day  = $row["regist_day"];
                
                ?>
                <li>
                    <form method="post" action="admin_member_update_cms.php?num=<?=$num?>">
                        <span class="col1"><?=$number ?></span>
                        <span class="col2"><?=$id?></span>
                        <span class="col3"><?=$name?></span>
                        <span class="col4"><input type="text" name="level" value="<?=$level?>"></span>
                        <span class="col5"><input type="text" name="point" value="<?=$point?>"></span>
                        <span class="col6"><?=$regist_day?></span>
                        <span class="col7"><button type="submit">수정</button></span>
                        <span class="col8"><button type="submit" onclick="location.href = 'admin_member_delete.php?num=<?=$num?>'">삭제</button></span>
                    </form>
                </li>
                <?php
                    // 반복문 실행할때마다 $number값 1 감소
                    $number--;
                }
                mysqli_close($con);
                ?>
            </ul>
        </div>
    </section>
    <?php include "../footer.php"?>
</body>
</html>