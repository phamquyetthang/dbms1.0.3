<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
<title>Sale Management</title>
<link rel="stylesheet" href="style/returnstyle.css">
<link rel="stylesheet" href="style/logout.css">
<link href="https://fonts.googleapis.com/css?family=Calistoga&display=swap" rel="stylesheet">
</head>
<body>
  <div class="background"></div>
	<div class="menu">
        <div><a href='index.html'>TRANG CHỦ</a></div>
        <div><a href='08sale.php'>BÁN HÀNG</a></div>
        <div><a href='09return.php'>TRẢ HÀNG</a></div>
        <div><a href='10order.php'>ĐẶT HÀNG</a></div>
        <div><a href='manage/02employee.php' target="_blank">QUẢN LÝ</a></div>
    </div>
    <!-- nút đăng xuất  -->
  <div class="employ">
    <div class="name">
        <?php
          echo $_SESSION['name'];
        ?>
    </div>
    <form action="logout.php" method="post">
      <input type="submit" value="Đăng xuất" class="logout" name="logout">
    </form>
  </div>


<h1><b>Bán sản phẩm : </b></h1>

 
  <form action="08action.php" method="POST" class="nhap">

        <input type="text" name="Sale_id" size="50" class="onhap" placeholder="Mã bán hàng"> 
        <input type="text" name="Pro_id" size="50" class="onhap" placeholder="Mã sản phẩm"> 
        <input type="text" name="Amount" size="55"  class="onhap" placeholder="Số lượng"> 
        <input type="text" name="Sale_price" size="52" class="onhap" placeholder="Giá bán"> 
		<input type="text" name="Discount" size="58" class="onhap" placeholder="Giảm giá"> 
   
        <input type="submit" value="Mua" name="submit" class="osubmit">
    </form>

<table class="bang">
<tr>
<th>Mã bán hàng</th>
<th>Mã sản phẩm</th>
<th>Số lượng</th>
<th>Giá bán</th>
<th>Giảm giá</th>
</tr>
<?php
$conn = mysqli_connect("localhost","phucvinhvic","2019vanconyeuem", "dbms");

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