<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method= "POST" action="">
        <p>User Name:<input type="text"name="txtUser"size="20"></p>
        <p>Password:<input type="password"name="txtPass"size="20"></p>
        <p>Sex:<Select name ="selSex">
            <option value=1>Male</option>
            <option value=0>Female</option>
</select></p>
    <input type="submit"name= "bSubmit"value="Submit">
    </form>
<?php
    if (isset($_POST["bSubmit"])&&($_POST["bSubmit"]=="Submit")){
        echo "<script language='javascript'>window.open('https://www.facebook.com/')</script>";
    
    }else
    echo "khong";
?>
</body>
</html>