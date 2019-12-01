<!DOCTYPE html>
<html>
<head>
<title>Employee Management</title>
<style>
table {
border-collapse: collapse;
width: 100%;

color: #0000FF;
font-family: monospace;
font-size: 20px;
text-align: left;
}
th {

background-color: #FF0000;
color: white;
}
tr:nth-child(even) {background-color: #f2f2f2}
form{
	font-size: 20px;
}
a:hover {
    background-color:orange;
}	
a {
	text-decoration: none;
}
	
</style>
</head>
<body>
<table>
<tr bgcolor="lime">
<td><a href='01province.php'>TỈNH/THÀNH PHỐ</a></td>
<td><a href='02employee.php'>NHÂN VIÊN</a></td>
<td><a href='03customer.php'>KHÁCH HÀNG</a></td>
<td><a href='04product.php'>SẢN PHẨM</a></td>
<td><a href='05shelf.php'>KỆ SẢN PHẨM</a></td>
<td><a href='06supplier.php'>NHÀ CUNG CẤP</a></td>
<td><a href='07productcate.php'>NHÓM SẢN PHẨM</a></td>
</tr>
</table>
<h1><b>Quản lý danh sách nhân viên : </b></h1>

 <form action="02action.php" method="POST">

    Mã nhân viên : &nbsp;&nbsp;<input type="text" name="Emp_id" size="50"><br>
	Username : &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="User_name" size="50"><br>
	Password : &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="Pass_word" size="50"><br>
	Tên nhân viên : &nbsp;<input type="text" name="Emp_name" size="50"><br>
	Tình trạng nhân viên : 
	<select name="Emp_status">
          <option value="1">1. Cho phép truy cập vào hệ thống được</option>
          <option value="2">2. Không cho phép vào hệ thống</option>
     </select><br>
	Loại nhân viên : 
	<select name="Emp_type" >
          <option value="1">1. Nhân viên</option>
          <option value="2">2. Chủ cửa hàng</option>
     </select><br><br>




      <input type="submit" value="Thêm" name="submit">

  </form>
  <br>

<table>
<tr>
<th>Mã nhân viên</th>
<th>Username</th>
<th>Password</th>
<th>Tên nhân viên</th>
<th>Tình trạng nhân viên</th>
<th>Loại nhân viên</th>
</tr>
<?php
$conn = mysqli_connect("localhost", "suphit", "14081990", "dbms");

if ($conn->connect_error) {
die("Connection failed: " . $conn->connect_error);
}
$sql = "SELECT Emp_id, User_name,Pass_word,Emp_name,Emp_status,Emp_type FROM employee";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
while($row = $result->fetch_assoc()) {
echo "<tr><td>" . $row["Emp_id"]. "</td><td>" . $row["User_name"] . "</td><td>" . $row["Pass_word"] . "</td><td>" . $row["Emp_name"] . "</td><td>" . $row["Emp_status"] . "</td><td>" . $row["Emp_type"] . "</td></tr>";
}
echo "</table>";
} else { echo "0 results"; }
$conn->close();
?>
</table>
</body>
</html>