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
  $Cust_id=$_POST['Cust_id'];
  $Cust_name=$_POST['Cust_name'];
  $Cust_lastName=$_POST['Cust_lastName'];
  $Cust_address=$_POST['Cust_address'];
  $Province_id=$_POST['Province_id'];
  $Cust_tel=$_POST['Cust_tel'];
  $Admit_date=$_POST['Admit_date'];
  $Cust_status=$_POST['Cust_status'];

  $query = "INSERT INTO customer (Cust_id, Cust_name,Cust_lastName,Cust_address,Province_id,Cust_tel,Admit_date,Cust_status)
  VALUES ('$Cust_id', '$Cust_name','$Cust_lastName','$Cust_address','$Province_id','$Cust_tel','$Admit_date','$Cust_status')";

    if (!mysqli_query($dbconnect, $query)) {
        die('Bị lỗi. Không thành công.');
    } else {
      echo "Thêm thành viên đã thành công.";
    }

}
?>