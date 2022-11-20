<?php
    if(isset($_POST['btn-login'])){
        $error=[];
        // kiểm tra dư liệu trống cho username
        if(empty($_POST['user'])){
            $error['user']="Không được để trống tên đăng nhập";
        }else{
            $username=$_POST['user'];
        }
        // Kiểm tra dữ liệu trống cho password`
        if(empty($_POST['pass'])){
            $error['pass']="Không được để trống mật khẩu";
        }else{
            $password=$_POST['pass'];
        }
         echo"<pre>";
         print_r($error);
         echo "</pre>";
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
         .error{
            color:red;
         }
    </style>
</head>
<body>
    <h1>Đăng nhập</h1>
    <form action="" method="POST">
        Username: <input type="text" name="user"><br><br>
        <p class="error"><?php if(!empty($error['user'])) echo $error['user'];?></p>
        Password: <input type="password" name="pass"><br><br>
        <input type="submit" name="btn-login" value="Đăng nhập">
    </form>
</body>
</html>