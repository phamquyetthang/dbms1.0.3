<?php
session_start();
?>
<?php
$server = "localhost";
$username = "phucvinhvic"; // Khai báo username
$password = "2019vanconyeuem";// Khai báo password
$port="3306";
$dbname = "dbms";      // Khai báo database
// Kết nối database tintuc
$connect = new mysqli($server, $username, $password, $dbname, $port);
//Nếu kết nối bị lỗi thì xuất báo lỗi và thoát.
if ($connect->connect_error) {
    die("Không kết nối :" . $conn->connect_error);
    exit();
}
//Lấy giá trị POST từ form vừa submit
if(isset($_POST['submit'])){
    $logid = $_POST['employeeid'];
    $logpass = $_POST['password'];
    $logtype = $_POST['type'];
    if($logid==""||$logpass==""||$logtype==""){
        echo "Hãy điền đầy đủ thông tin";
    }else{
        $sql="SELECT * FROM `employee` WHERE Emp_id='$logid' and Pass_word='$logpass' and Emp_type='$logtype'";
        $query=mysqli_query($connect, $sql);
        $num_rows=mysqli_num_rows($query);
        if($num_rows!=0){
            $row=mysqli_fetch_assoc($query);
            $_SESSION['empid']=$row['Emp_id'];
            $_SESSION['name']=$row['User_name'];
            $_SESSION['type']=$row['Emp_type'];
            header('Location: 08sale.php');
            die();
        }
        else{
            header('Location: login.php');
            die();
        }
    }
}
//Đóng database
$connect->close();
?>