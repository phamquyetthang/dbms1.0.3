<html>
<head>
  <meta http-equiv='refresh' content='1; URL=02employee.php'>
</head>
</html>
<?php

$hostname = "localhost";
$username = "phucvinhvic";
$password = "2019vanconyeuem";
$db = "dbms";

$dbconnect=mysqli_connect($hostname,$username,$password,$db);

if ($dbconnect->connect_error) {
  die("Không thể truy cập cơ sở dữ liệu được : " . $dbconnect->connect_error);
}

if(isset($_POST['submit'])) {
  $Cate_id=$_POST['Cate_id'];
  $Cate_name=$_POST['Cate_name'];

  $query = "INSERT INTO product_category (Cate_id, Cate_name)
  VALUES ('$Cate_id', '$Cate_name')";

    if (!mysqli_query($dbconnect, $query)) {
        die('Bị lỗi. Chưa thành công nhé.');
    } else {
      echo "<center>Thêm nhóm sản phẩm đã thành công.</center>";
    }

}
?>