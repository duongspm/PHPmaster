<?php
    echo 'haha';
    define('SERVER_NAME','localhost');
    $array = [1,2,3,4];
    var_dump($array);
    echo '<hr/>';
    $fruits = ['cam','oi', 'tao'];
    var_dump($fruits);
    echo '<hr>';
    print_r($fruits);
    echo $fruits[0];
    echo '<hr>';
    echo 'aray Key value';
    $colors =[
        3 => 'red',
        5 => 'green',
    ];
    print_r($colors);
    echo $colors[3];
    echo '<hr>';
    $person = [
        [
            'fullname' => 'duong',
            'age' => '18'
        ],
        [
            'fullname' => 'a',
            'age' => '183'
        ],
        [
            'fullname' => 'b',
            'age' => '148'
        ]
        ];
    echo $person [1]['fullname'];
    var_dump(json_encode($person ));
    echo '<hr>';
    for($i = 0; $i < count($fruits);$i++)
    {
        echo "$fruits[$i] <br>";
    }
    echo '<hr>';
    foreach($fruits as $index => $item){
        echo "$index -- $item<br>";
    }
    echo '<hr>';
    foreach($colors as $key => $value){
        echo "$key : $value <br>";
    }
    echo '<hr>';
    echo '- String function in PHP';
    $full_name = 'Duong Tran';
    echo "<br>Độ dài .strlen(): ".strlen($full_name);
    echo "<br>Đảo ngược chuỗi strrev(): ",strrev($full_name);
    echo "<br>Đổi thành chữ thường strtolower($full_name): " .strtolower($full_name);
    echo "<br>Đổi thành chữ hoa strtoupper($full_name): ".strtoupper($full_name);
    echo "<br>Tìm kiếm thay thế str_replace(' ','-',$full_name): ".str_replace(' ','-',$full_name);
    echo "<br>Kiểm tra ký tự bắt đầu: ";
    // if(str_ends_with(strtolower($full_name), 'Duong'))
    //     {
    //         echo "Helo Duong"; 
    //     }

    echo '<hr>';
    // chống hack biến input thành một đoạn string không biên dịch thành code
    $name = htmlspecialchars($_GET['name'] ) ?? ''; //coalescing
    $name = filter_var($_GET['name'],FILTER_SANITIZE_SPECIAL_CHARS);
    $age = $_GET['age'] ?? '';
    echo $name." ".$age;
    echo '<hr>';
    echo '<h2>Cookies</h2>';
    echo 'lưu dữ liệu lên trình duyệt <br>';
    // key và cái thời hạn kết thúc
    setcookie('name','Duong',time() + 24*3600);
    if(isset($_COOKIE['name'])){
      
        echo $_COOKIE['name'];
    }
    echo '<hr>';
    echo '<h2>Session</h2>';
    echo 'lưu dữ liệu lên server <br>';
    session_start();
    if(isset($_POST['submit']))
    {
        $user = filter_input(INPUT_POST,'user',FILTER_SANITIZE_SPECIAL_CHARS);
        $pass = $_POST['pass'];
        if($user == 'duongg' && $pass == '123'){
            $_SESSION['user'] = $user;
            header('Location: ./dashboard.php');
        }else {
            echo 'sai me r';
        }
    }
    echo '<hr>';
// ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!-- $_SERVER['PHP_SELF'] là file php này  -->
    <!-- <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="GET">
        <div>
            <label for="name">Your name: </label>
            <input type="text" name="name">
        </div>
        <div>
            <label for="name">Your age: </label>
            <input type="text" name="age">
        </div>
        <input type="submit" value="Submit">
    </form> -->
    <hr>
    <h1>Login session</h1>
    <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="POST">
        <div>
            <label for="name">User name: </label>
            <input type="text" name="user">
        </div>
        <div>
            <label for="name">Your pass: </label>
            <input type="text" name="pass">
        </div>
        <input type="submit" value="Submit">
    </form>
    <a href="./file_handing.php">Doc file</a>
</body>
</html>