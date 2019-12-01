<!DOCTYPE html>
<html>
<head>
<title>Province</title>
<style>
table {
border-collapse: collapse;
width: 100%;
/*color: #588c7e;*/
color: #0000FF;
font-family: monospace;
font-size: 25px;
text-align: left;
}
th {
/*background-color: #588c7e;*/
background-color: #FF0000;
color: white;
}
tr:nth-child(even) {background-color: #f2f2f2}
</style>
</head>
<body>
<marquee><h1><b>Province list :</b></h1></marquee><hr>
<table>
<tr>
<th>Province ID</th>
<th>Province Name</th>
</tr>
<?php
$conn = mysqli_connect("localhost", "suphit", "14081990", "dbms");

if ($conn->connect_error) {
die("Connection failed: " . $conn->connect_error);
}
$sql = "SELECT Province_id, Province_name FROM province";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
while($row = $result->fetch_assoc()) {
echo "<tr><td>" . $row["Province_id"]. "</td><td>" . $row["Province_name"] . "</td></tr>";
}
echo "</table>";
} else { echo "0 results"; }
$conn->close();
?>
</table>
</body>
</html>