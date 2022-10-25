<?php 
    if(isset($_POST['submit'])){
        $permitted_extenstions = ['png','jpg'];
        $file_name = $_FILES['upload']['name'];
        if(!empty($file_name)){
            // print_r($_FILES);
            $file_size = $_FILES['upload']['size'];
            $file_tmp_name = $_FILES['upload']['tmp_name'];
            $generated_file_name = time().'-'.$file_name;
            $destination_path =  "uploads/${generated_file_name}";
            $file_extension = explode('.',$file_name);
            $file_extension = strtolower(end($file_extension));
            echo "$file_size,$file_extension,$destination_path";
            if(in_array($file_extension,$permitted_extenstions)){
                if($file_size <= 1000000){
                    //move from temp folder to /uploads
                    move_uploaded_file($file_tmp_name ,$destination_path);
                    $error = 'nice xu';
                }else{
                    $error = 'lon qua';
                }
            }else{
                $error = 'khun dc';
            }
        }else{
            $error = 'khong tim thay';
        }
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
    <h1>Upload </h1>
    <form enctype="multipart/form-data" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="POST">
        chon anh
        <input type="file" name="upload">
        <input type="submit" value="submit" name="submit"></input>

    </form>
    <?php echo $error ?? '' ?>
</body>
</html>