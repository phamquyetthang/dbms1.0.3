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
  $Pro_id=$_POST['Pro_id'];
  $Pro_name=$_POST['Pro_name'];
  $Pro_cost=$_POST['Pro_cost'];
  $Pro_salePrice=$_POST['Pro_salePrice'];
  $Pro_memberPrice=$_POST['Pro_memberPrice'];
  $Pro_amount=$_POST['Pro_amount'];
  $Cate_id=$_POST['Cate_id'];
  $Shelf_id=$_POST['Shelf_id'];
  $Sup_id=$_POST['Sup_id'];
  $Point_ofSale=$_POST['Point_ofSale'];
  $Pro_status=$_POST['Pro_status'];

  $query = "INSERT INTO product(Pro_id, Pro_name,Pro_cost,Pro_salePrice,Pro_memberPrice,Pro_amount,Cate_id,Shelf_id,Sup_id,Point_ofSale,Pro_status)
  VALUES ('$Pro_id', '$Pro_name','$Pro_cost','$Pro_salePrice','$Pro_memberPrice','$Pro_amount','$Cate_id','$Shelf_id','$Sup_id','$Point_ofSale','$Pro_status')";

    if (!mysqli_query($dbconnect, $query)) {
        die('Bị lỗi. Không thành công.');
    } else {
      echo "Thêm sản phẩm đã thành công.";
    }

}
?>