<!DOCTYPE html>
<html>
<head>
<title>Shelf Product Management</title>
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
<h1><b>Quản lý kệ sản phẩm : </b></h1>

 <form action="05action.php" method="POST">

    Mã kệ sản phẩm : <input type="text" name="Shelf_id" size="50"><br>
	Tên kệ sản phẩm : <input type="text" name="Shelf_name" size="49"><br><br>



      <input type="submit" value="Thêm" name="submit">

  </form>
  <br>

<table>
<tr>
<th>Mã kệ sản phẩm</th>
<th>Tên kệ sản phẩm</th>
</tr>
<?php
$conn = mysqli_connect("localhost", "suphit", "14081990", "dbms");

if ($conn->connect_error) {
die("Connection failed: " . $conn->connect_error);
}
$sql = "SELECT Shelf_id, Shelf_name FROM shelf";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
while($row = $result->fetch_assoc()) {
echo "<tr><td>" . $row["Shelf_id"]. "</td><td>" . $row["Shelf_name"] . "</td></tr>";
}
echo "</table>";
} else { echo "0 results"; }
$conn->close();
?>
</table>
</body>
</html>