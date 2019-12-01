<!DOCTYPE html>
<html>
<head>
<title>Product Category</title>
<style>
table {
border-collapse: collapse;
width: 100%;
color: #588c7e;
color: #0000FF;
font-family: monospace;
font-size: 25px;
text-align: left;
}
th {
background-color: #588c7e;
color: white;
}
tr:nth-child(even) {background-color: #f2f2f2}
</style>
</head>
<body>
<marquee><h1><b>Product Category :</b></h1></marquee><hr>
<table>
<tr>
<th>Category ID</th>
<th>Category Name</th>
</tr>
<?php
$conn = mysqli_connect("localhost", "suphit", "14081990", "dbms");

if ($conn->connect_error) {
die("Connection failed: " . $conn->connect_error);
}
$sql = "SELECT cate_id, cate_name FROM product_category";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
while($row = $result->fetch_assoc()) {
echo "<tr><td>" . $row["cate_id"]. "</td><td>" . $row["cate_name"] . "</td></tr>";
}
echo "</table>";
} else { echo "0 results"; }
$conn->close();
?>
</table>
</body>
</html>