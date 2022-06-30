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
    echo "Ma sach lay duoc la".$_GET ["Ma"]."<br>";
    if(isset($_GET["Ma"])){
        if($_GET["Ma"]=="SGK"){
            echo "Ban chon mua sach giao khoa";

        }else{
            echo "Ma sach". $_GET["Ma"]. "khong phai sach giao khoa";
        }
    }else{
        echo "Du lieu khong hop le";
    }
    ?>
</body>
</html>