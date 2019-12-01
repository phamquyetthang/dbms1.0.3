<!DOCTYPE html>
<html>
<head>
<title>Supplier Management</title>
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
<h1><b>Quản lý danh sách nhà cung cấp : </b></h1>

 <form action="06action.php" method="POST">

    Mã nhà cung cấp : &nbsp;&nbsp;&nbsp;<input type="text" name="Sup_id" size="50"><br>
	Tên nhà cung cấp : &nbsp;&nbsp;<input type="text" name="Sup_name" size="50"><br>
	Địa chỉ nhà cung cấp : <input type="text" name="Sup_address"size="47"><br>
	Số điện thoại : &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="Sup_tel" size="50"><br>
	Tên người liên hệ : &nbsp;&nbsp;<input type="text" name="Contact_name" size="50"><br>
	Mã Tỉnh/Thành phố : <input type="text" name="Province_id" size="48"><br><br>



      <input type="submit" value="Thêm" name="submit">

  </form>
  <br>

<table>
<tr>
<th>Mã nhà cung cấp</th>
<th>Tên nhà cung cấp</th>
<th>Địa chỉ</th>
<th>Số điện thoại</th>
<th>Tên người liên hệ</th>
<th>Mã tỉnh/Thành phố</th>
</tr>
<?php
$conn = mysqli_connect("localhost", "suphit", "14081990", "dbms");

if ($conn->connect_error) {
die("Connection failed: " . $conn->connect_error);
}
$sql = "SELECT Sup_id, Sup_name,Sup_address,Sup_tel,Contact_name,Province_id FROM supplier";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
while($row = $result->fetch_assoc()) {
echo "<tr><td>" . $row["Sup_id"]. "</td><td>" . $row["Sup_name"] . "</td><td>" . $row["Sup_address"] . "</td><td>" . $row["Sup_tel"] . "</td><td>" . $row["Contact_name"] . "</td><td>" . $row["Province_id"] . "</td></tr>";
}
echo "</table>";
} else { echo "0 results"; }
$conn->close();
?>
</table>
</body>
</html>