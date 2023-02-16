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
        session_start();
        session_destroy();

        // if($_SERVER["HTTP_REFERER"] == "/kye/index/index.php")
        //     echo("
        //         <script>
        //             location.href = '../index/index.php';
        //         </script>
        //     ");
        //     else{
        //         echo("
        //         <script>
        //             location.href = '../sub/sub.php';
        //         </script>
        //     ");
        //     }
        $prevpg = $_SERVER["HTTP_REFERER"];
        header("location:" .$prevpg);
    ?>
</body>
</html>