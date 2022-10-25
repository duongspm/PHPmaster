<?php 
        session_start();
        if(isset($_SESSION['user'])){
            echo 'haha';
            echo "xin chao: ".$_SESSION['user'];
        }
        else{
            echo 'chua dang nhap';
            echo "<a href ='./index.php'>Dang nhap dee</a>";
        }
    ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
   
</head>
<body>
    <div style="display:flex;align-items: center;justify-content: center;">
        <h1>Nice xù</h1>
    </div>
</body>
</html>