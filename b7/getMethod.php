<?php
    if( isset($_GET['btn_search'])){
        echo "xử lí dữ liệu bằng phương thức GET";
        //  echo "<pre>";
        //  print_r($_GET);
        //  echo "</pre>";
         $keySearch= $_GET['search'];
         echo "<br>Từ khóa tìm kiếm là:<strong> {$keySearch}</strong>";
    }
   
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gưi du lieu lên sever bằng phương thức GET</title>
</head>
<body>
    <h2>Tìm kiếm</h2>
    <a href="sanpham.php?mod=sp&act=them">Sản Phẩm</a>
    <form action="" method="GET">
        Tìm kiếm: <input type="text" name="search">
        <input type="submit" name="btn_search" value="Search">
    </form>
</body>
</html>