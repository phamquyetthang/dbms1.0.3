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
	
</style>
</head>
<body>
<h1><b>Bán hàng : </b></h1>

 <form action="08action.php" method="POST">

    Mã bán hàng : &nbsp;<input type="text" name="Sale_id" size="52"><br>
	Mã khách hàng : <input type="text" name="Cust_id" size="50"><br>
	Ngày bán hàng : <input type="text" name="Sale_date" size="50"><br>
	Giá cả : &nbsp;<input type="text" name="Net_price" size="60"><br>
	Giảm giá : &nbsp;<input type="text" name="Net_discount" size="56"><br>
	Tình trạng bán hàng : 
	<select name="Sale_status">
          <option value="1">1. Bán bình thường</option>
          <option value="2">2. Hủy bán hàng</option>
     </select><br><br>


      <input type="submit" value="Thêm" name="submit">

  </form>
  <br>

<table>
<tr>
<th>Mã bán hàng</th>
<th>Mã khách hàng</th>
<th>Ngày bán hàng</th>
<th>Giá cả</th>
<th>Giảm giá</th>
<th>Tình trạng bán hàng</th>
</tr>
<?php
$conn = mysqli_connect("localhost", "suphit", "14081990", "dbms");

if ($conn->connect_error) {
die("Connection failed: " . $conn->connect_error);
}
$sql = "SELECT Sale_id, Cust_id,Sale_date,Net_price,Net_discount,Sale_status FROM sale";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
while($row = $result->fetch_assoc()) {
echo "<tr><td>" . $row["Sale_id"]. "</td><td>" . $row["Cust_id"] . "</td><td>" . $row["Sale_date"] . "</td><td>" . $row["Net_price"] . "</td><td>" . $row["Net_discount"] . "</td><td>" . $row["Sale_status"] . "</td></tr>";
}
echo "</table>";
} else { echo "0 results"; }
$conn->close();
?>
</table>
</body>
</html>