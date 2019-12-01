<!DOCTYPE html>
<html>
<head>
<title>Customer Management</title>
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
<h1><b>Quản lý thành viên : </b></h1>

 <form action="03action.php" method="POST">

    Mã thành viên : <input type="text" name="Cust_id" size="50"><br>
	Tên thành viên : <input type="text" name="Cust_name" size="49"><br>
	Họ thành viên : <input type="text" name="Cust_lastName" size="50"><br>
	Địa chỉ thành viên : <input type="text" name="Cust_address" size="45"><br>
	Mã tinh/Thanh pho : <input type="text" name="Province_id" size="44"><br>
	Số điện thoại : <input type="text" name="Cust_tel" size="52"><br>
	Ngày đăng ký thành viên : <input type="text" name="Admit_date" size="37"><br>
	Tình trạng thành viên : 
	<select name="Cust_status">
          <option value="1">1. Mua sản phẩm được</option>
          <option value="2">2. Hủy thành viên này</option>
     </select><br><br>



      <input type="submit" value="Thêm" name="submit">

  </form>
  <br>

<table>
<tr>
<th>Mã thành viên</th>
<th>Tên</th>
<th>Họ</th>
<th>Địa chỉ</th>
<th>Mã tỉnh/thành phố</th>
<th>Số điện thoại</th>
<th>Ngày đăng ký</th>
<th>Tình trạng</th>
</tr>
<?php
$conn = mysqli_connect("localhost", "suphit", "14081990", "dbms");

if ($conn->connect_error) {
die("Connection failed: " . $conn->connect_error);
}
$sql = "SELECT Cust_id, Cust_name,Cust_lastName,Cust_address,Province_id,Cust_tel,Admit_date,Cust_status FROM customer";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
while($row = $result->fetch_assoc()) {
echo "<tr><td>" . $row["Cust_id"]. "</td><td>" . $row["Cust_name"] . "</td><td>" . $row["Cust_lastName"] . "</td><td>" . $row["Cust_address"] . "</td><td>" . $row["Province_id"] . "</td><td>" . $row["Cust_tel"] . "</td><td>" . $row["Admit_date"] . "</td><td>" . $row["Cust_status"] . "</td></tr>";
}
echo "</table>";
} else { echo "0 results"; }
$conn->close();
?>
</table>
</body>
</html>