<html>
<head>
  <meta http-equiv='refresh' content='1; URL=09return.php'>
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
  $Sale_id=$_POST['Sale_id'];
  $Pro_id=$_POST['Pro_id'];
  $Amount=$_POST['Amount'];
  $Return_date=$_POST['Return_date'];
  $Comment=$_POST['Comment'];
  $Return_type=$_POST['Return_type'];

  $query = "INSERT INTO return_product (Sale_id, Pro_id,Amount,Return_date,Comment,Return_type)
  VALUES ('$Sale_id', '$Pro_id','$Amount','$Return_date','$Comment','$Return_type')";

    if (!mysqli_query($dbconnect, $query)) {
        die('Bị lỗi. Chưa thành công nhé.');
    } else {
      echo "<center>Thêm trả lại sản phẩm đã thành công.</center>";
    }

}
?>