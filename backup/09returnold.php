<!DOCTYPE html>
<html>
<head>
<title>Return Product Management</title>
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
<td><a href='admin.php' target="_blank">QUẢN LÝ CỬA HÀNG</a></td>
</tr>
</table>
<h1><b>Trả lại sản phẩm : </b></h1>

 <form action="09action.php" method="POST">

    Mã bán hàng : <input type="text" name="Sale_id" size="50"><br>
	Mã sản phẩm : <input type="text" name="Pro_id" size="50"><br>
	Số lượng : <input type="text" name="Amount" size="55"><br>
	Ngày trả lại :<input type="text" name="Return_date" size="52"><br>
	Ý kiến: <input type="text"  name="Comment" size="58"><br>
	Loại trả lại sản phẩm : 
	<select name="Return_type">
          <option value="1">1. Sản phẩm bị hỏng</option>
          <option value="2">2. Sản phẩm hết hạn</option>
     </select><br><br>


      <input type="submit" value="Thêm" name="submit">

  </form>
  <br>

<table>
<tr>
<th>Mã bán hàng</th>
<th>Mã sản phẩm</th>
<th>Số lượng</th>
<th>Ngày trả lại</th>
<th>Ý kiến</th>
<th>Loại trả lại</th>
</tr>
<?php
$conn = mysqli_connect("localhost", "suphit", "14081990", "dbms");

if ($conn->connect_error) {
die("Không thể truy cập CSDL được: " . $conn->connect_error);
}
$sql = "SELECT * FROM return_product";
/*$sql = "SELECT Sale_id, Pro_id,Amount,Return_date,Comment,Return_type FROM return_product";*/
$result = $conn->query($sql);
if ($result->num_rows > 0) {
while($row = $result->fetch_assoc()) {
echo "<tr><td>" . $row["Sale_id"]. "</td><td>" . $row["Pro_id"] . "</td><td>" . $row["Amount"] . "</td><td>" . $row["Return_date"] . "</td><td>" . $row["Comment"] . "</td><td>" . $row["Return_type"] . "</td></tr>";
}
echo "</table>";
} else { echo "0 results"; }
$conn->close();
?>
</table>
</body>
</html>