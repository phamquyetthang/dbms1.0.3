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
  $Sup_id=$_POST['Sup_id'];
  $Sup_name=$_POST['Sup_name'];
  $Sup_address=$_POST['Sup_address'];
  $Sup_tel=$_POST['Sup_tel'];
  $Contact_name=$_POST['Contact_name'];
  $Province_id=$_POST['Province_id'];

  $query = "INSERT INTO supplier (Sup_id, Sup_name,Sup_address,Sup_tel,Contact_name,Province_id)
  VALUES ('$Sup_id', '$Sup_name','$Sup_address','$Sup_tel','$Contact_name','$Province_id')";

    if (!mysqli_query($dbconnect, $query)) {
        die('Bị lỗi. Không thành công.');
    } else {
      echo "Thêm nhà cung cấp đã thành công.";
    }

}
?>