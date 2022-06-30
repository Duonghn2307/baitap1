<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $a = $_POST['a'];
        $b = $_POST['b'];
        echo $a."x +  ".$b." = 0"."<br>";
        if($a == 0){
            if($b == 0){
                echo "phuong trinh vo so nghiem";
            }else{
               echo "phuong trinh vo nghiem";  
            }
           
        }else{
            $x = -$b/$a;
            echo "phuong trinh co mot nghiem = $x";

        }
    ?>
</body>
</html>