<html>
<head>
  <meta http-equiv='refresh' content='1; URL=08sale.php'>
</head>
</html>
<?php

$hostname = "localhost";
$username = "suphit";
$password = "14081990";
$db = "dbms";

$dbconnect=mysqli_connect($hostname,$username,$password,$db);

if ($dbconnect->connect_error) {
  die("Không thể truy cập cơ sở dữ liệu được : " . $dbconnect->connect_error);
}

if(isset($_POST['submit'])) {
  $Sale_id=$_POST['Sale_id'];
  $Cust_id=$_POST['Cust_id'];
  $Sale_date=$_POST['Sale_date'];
  $Net_price=$_POST['Net_price'];
  $Net_discount=$_POST['Net_discount'];
  $Sale_status=$_POST['Sale_status'];

  $query = "INSERT INTO sale (Sale_id, Cust_id,Sale_date,Net_price,Net_discount,Sale_status)
  VALUES ('$Sale_id', '$Cust_id','$Sale_date','$Net_price','$Net_discount','$Sale_status')";

    if (!mysqli_query($dbconnect, $query)) {
        die('Bị lỗi. Chưa thành công nhé.');
    } else {
      echo "<center>Thêm thành viên đã thành công.</center>";
    }

}
?>