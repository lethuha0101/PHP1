<?php
 echo "xử lí dữ liệu bằng phương thức GET";
//  echo "<pre>";
//  print_r($_GET);
//  echo "</pre>";
 $keySearch= $_GET['search'];
 echo "<br>Từ khóa tìm kiếm là:<strong> {$keySearch}</strong>";
?>