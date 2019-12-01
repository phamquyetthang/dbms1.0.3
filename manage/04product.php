<!DOCTYPE html>
<html>
<head>
<title>Product Management</title>
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
<h1><b>Quản lý sản phẩm : </b></h1>

 <form action="04action.php" method="POST">
	
    Mã sản phẩm : &nbsp;<input type="text" name="Pro_id" size="50"><br>
	Tên sản phẩm : <input type="text" name="Pro_name" size="50"><br>
	Giá ban đầu :&nbsp;&nbsp;&nbsp; <input type="text" name="Pro_cost"size="50"><br>
	Giá bình thường : <input type="text" name="Pro_salePrice"size="47"><br>
	Giá thành viên :&nbsp; &nbsp;<input type="text" name="Pro_memberPrice" size="48"><br>
	Số lượng trong kho : <input type="text" name="Pro_amount" size="44"><br>
	Mã nhóm sản phẩm : <input type="text" name="Cate_id" size="43"><br>
	Mã kệ sản phẩm : &nbsp;<input type="text" name="Shelf_id" size="46"><br>
	Mã nhà cung cấp : <input type="text" name="Sup_id" size="46"><br>
	Số lượng điểm mua :&nbsp;&nbsp; <input type="text" name="Point_ofSale" size="41"><br>
	Tình trạng sản phẩm : 
	<select name="Pro_status">
          <option value="1">1. Sản phẩm có sẵn</option>
          <option value="2">2. Hủy sản phẩm này</option>
     </select><br><br>


      <input type="submit" value="Thêm" name="submit">

  </form>
  <br>

<table>
<tr>
<th>MãSP</th>
<th>TênSP</th>
<th>Giábanđầu</th>
<th>Giá bán</th>
<th>Giáthànhviên</th>
<th>Sốlượngtrongkho</th>
<th>Mãnhóm</th>
<th>Mãkệ</th>
<th>MãNCC</th>
<th>Sốlượngmua</th>
<th>Tìnhtrạng</th>
</tr>
<?php
$conn = mysqli_connect("localhost", "suphit", "14081990", "dbms");

if ($conn->connect_error) {
die("Connection failed: " . $conn->connect_error);
}
$sql = "SELECT Pro_id, Pro_name,Pro_cost,Pro_salePrice,Pro_memberPrice,Pro_amount,Cate_id,Shelf_id,Sup_id,Point_ofSale,Pro_status FROM product";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
while($row = $result->fetch_assoc()) {
echo "<tr><td>" . $row["Pro_id"]. "</td><td>" . $row["Pro_name"] . "</td><td>" . $row["Pro_cost"] . "</td><td>" . $row["Pro_salePrice"] . "</td><td>" . $row["Pro_memberPrice"] . "</td><td>" . $row["Pro_amount"] . "</td><td>" . $row["Cate_id"] . "</td><td>" . $row["Shelf_id"] . "</td><td>" . $row["Sup_id"] . "</td><td>" . $row["Point_ofSale"] . "</td><td>" . $row["Pro_status"] . "</td></tr>";
}
echo "</table>";
} else { echo "0 results"; }
$conn->close();
?>
</table>
</body>
</html>