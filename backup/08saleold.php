<!DOCTYPE html>
<html>
<head>
<title>Sale Management</title>
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
<td><a href='index.html'>TRANG CHỦ</a></td>
<td><a href='08sale.php'>BÁN SẢN PHẨM</a></td>
<td><a href='09return.php'>TRẢ LẠI SẢN PHẨM</a></td>
<td><a href='10order.php'>ĐẶT SẢN PHẨM</a></td>
<td><a href='admin.php' target="_blank">QUẢN LÝ CỬA HÀNG</a>
</tr>
</table>
<h1><b>Bán sản phẩm : </b></h1>

 <form action="08action.php" method="POST">

    MÃ BÁN HÀNG : <input type="text" name="Sale_id" size="50"><br>
	MÃ SẢN PHẨM : <input type="text" name="Pro_id" size="50"><br>
	SỐ LƯỢNG : <input type="text" name="Amount" size="55"><br>
	GIÁ BÁN: <input type="text" name="Sale_price" size="58"><br>
	GIẢM GIÁ : <input type="text" name="Discount" size="56"><br>
	<br>


      <input type="submit" value="Thêm" name="submit">

  </form>
  <br>

<table>
<tr>
<th>Mã bán hàng</th>
<th>Mã sản phẩm</th>
<th>Số lượng</th>
<th>Giá bán</th>
<th>Giảm giá</th>
<th>Thành tiền</th>
</tr>
<?php
$conn = mysqli_connect("localhost", "suphit", "14081990", "dbms");

if ($conn->connect_error) {
die("Không thể truy cập cơ sở dữ liệu được: " . $conn->connect_error);
}
$sql = "SELECT Sale_id, Pro_id,Amount,Sale_price,Discount FROM sale_detail";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
while($row = $result->fetch_assoc()) {
echo "<tr><td>" . $row["Sale_id"]. "</td><td>" . $row["Pro_id"] . "</td><td>" . $row["Amount"] . "</td><td>" . $row["Sale_price"] . "</td><td>" . $row["Discount"] .  "</td></tr>";
}
echo "</table>";
} else { echo "0 results"; }
$conn->close();
?>
</table>
</body>
</html>