<!DOCTYPE html>
<html>
<head>
<title>Order Product Management</title>
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
<td><a href='index.html'>TRAN CHỦ</a></td>
<td><a href='08sale.php'>BÁN SẢN PHẨM</a></td>
<td><a href='09return.php'>TRẢ LẠI SẢN PHẨM</a></td>
<td><a href='10order.php'>ĐẶT SẢN PHẨM</a></td>
<td><a href='admin.php' target="_blank">QUẢN LÝ CỬA HÀNG</a></td>
</tr>
</table>
<h1><b>Bán hàng : </b></h1>

 <form action="10action.php" method="POST">

    Mã đặt hàng : <input type="text" name="Order_id" size="50"><br>
	Mã sản phẩm : <input type="text" name="Pro_id" size="49"><br>
	Sốt lượng : <input type="text" name="Amount" size="52"><br>
	Giá bán: <input type="text" name="Sale_price" size="55"><br>
	Giảm giá : <input type="text" name="Discount" size="53"><br>
<br>

      <input type="submit" value="Thêm" name="submit">

  </form>
  <br>

<table>
<tr>
<th>Mã Đặt Hàng</th>
<th>Mã Sản phẩm</th>
<th>Số lượng</th>
<th>Giá bán</th>
<th>Giảm giá</th>

</tr>
<?php
$conn = mysqli_connect("localhost", "suphit", "14081990", "dbms");

if ($conn->connect_error) {
die("Không thể truy cập vào CSDL được: " . $conn->connect_error);
}
$sql = "SELECT Order_id, Pro_id,Amount,Sale_price,Discount FROM order_detail";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
while($row = $result->fetch_assoc()) {
echo "<tr><td>" . $row["Order_id"]. "</td><td>" . $row["Pro_id"] . "</td><td>" . $row["Amount"] . "</td><td>" . $row["Sale_price"] . "</td><td>" . $row["Discount"] . "</td></tr>";
}
echo "</table>";
} else { echo "0 results"; }
$conn->close();
?>
</table>
</body>
</html>