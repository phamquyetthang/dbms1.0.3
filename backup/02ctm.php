<!DOCTYPE html>
<html>
<head>
<title>Table with database</title>
<style>
table {
border-collapse: collapse;
width: 100%;
color: #588c7e;
font-family: monospace;
font-size: 25px;
text-align: left;
}
th {
background-color: lime;
color: white;
}
tr:nth-child(even) {background-color: #f2f2f2}
</style>
</head>
<body>
<table>
<tr>
<th>Cust_ID</th>
<th>Cust_Name</th>
<th>Cust_lastName</th>
<th>Cust_Address</th>
<th>Province ID</th>
<th>Cust_tel</th>
<th>Admid date</th>
<th>Status</th>
</tr>
<?php
$conn = mysqli_connect("localhost", "suphit", "14081990", "dbms");

if ($conn->connect_error) {
die("Connection failed: " . $conn->connect_error);
}
$sql = "SELECT Cust_id, Cust_name, Cust_lastName, Cust_address, Province_id, Cust_tel, Admit_date, Cust_status FROM customer";
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
