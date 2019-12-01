<html>
<head>
  <meta http-equiv='refresh' content='1; URL=10order.php'>
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
  $Order_id=$_POST['Order_id'];
  $Pro_id=$_POST['Pro_id'];
  $Amount=$_POST['Amount'];
  $Sale_price=$_POST['Sale_price'];
  $Discount=$_POST['Discount'];


  $query = "INSERT INTO order_detail (Order_id, Pro_id,Amount,Sale_price,Discount)
  VALUES ('$Order_id', '$Pro_id','$Amount','$Sale_price','$Discount')";

    if (!mysqli_query($dbconnect, $query)) {
        die('Bị lỗi. Chưa thành công nhé.');
    } else {
      echo "<center>Thêm đặt hàng đã thành công.</center>";
    }

}
?>