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
  $Emp_id=$_POST['Emp_id'];
  $User_name=$_POST['User_name'];
  $Pass_word=$_POST['Pass_word'];
  $Emp_name=$_POST['Emp_name'];
  $Emp_status=$_POST['Emp_status'];
  $Emp_type=$_POST['Emp_type'];

  $query = "INSERT INTO employee (Emp_id, User_name,Pass_word,Emp_name,Emp_status,Emp_type)
  VALUES ('$Emp_id', '$User_name','$Pass_word','$Emp_name','$Emp_status','$Emp_type')";

    if (!mysqli_query($dbconnect, $query)) {
        die('Bị lỗi. Chưa thành công nhé.');
    } else {
      echo "<center>Thêm thành viên đã thành công.</center>";
    }

}
?>