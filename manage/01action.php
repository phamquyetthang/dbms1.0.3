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
  die("Khong the truy cap co so du lieu duoc : " . $dbconnect->connect_error);
}

if(isset($_POST['submit'])) {
  $province_id=$_POST['Province_id'];
  $province_name=$_POST['Province_name'];

  $query = "INSERT INTO province (Province_id, Province_name)
  VALUES ('$province_id', '$province_name')";

    if (!mysqli_query($dbconnect, $query)) {
        die('Bi loi. chua thanh cong.');
    } else {
      echo "Them tinh / thanh pho da thanh cong.";
    }

}
?>