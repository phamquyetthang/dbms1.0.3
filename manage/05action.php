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
  die("Không thể truy cập vào cơ sở dữ liệu được : " . $dbconnect->connect_error);
}

if(isset($_POST['submit'])) {
  $Shelf_id=$_POST['Shelf_id'];
  $Shelf_name=$_POST['Shelf_name'];

  $query = "INSERT INTO shelf (Shelf_id, Shelf_name)
  VALUES ('$Shelf_id', '$Shelf_name')";

    if (!mysqli_query($dbconnect, $query)) {
        die('Bị lỗi. Chưa thành công nhé.');
    } else {
      echo "<center>Thêm kệ sản phẩm đã thành công.</center>";
    }

}
?>