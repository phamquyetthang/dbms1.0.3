<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
<title>Employee Management</title>
<link href="https://fonts.googleapis.com/css?family=Calistoga&display=swap" rel="stylesheet">
<link rel="stylesheet" href="../style/emstyle.css">
<link rel="stylesheet" href="../style/logout.css">
</head>
<body>
     <div class="background"></div>
     <div class="menu">
          <div><a href='../index.html'>TRANG CHỦ</a></div>
          <div><a href='../08sale.php'>BÁN HÀNG</a></div>
          <div><a href='../09return.php'>TRẢ HÀNG</a></div>
          <div><a href='../10order.php'>ĐẶT HÀNG</a></div>
          
     </div>
     <div class="employ">
     <div class="name">
          <?php
               echo $_SESSION['name'];
          ?>
     </div>
     <form action="../logout.php" method="post">
          <input type="submit" value="Đăng xuất" class="logout" name="logout">
     </form>
     </div>



     <div class="multimana">
          <div><a onclick="openTabs('province')">TỈNH/THÀNH PHỐ</a></div>
          <?php
          $tyle=$_SESSION['type'];
          if($tyle=='2'){
               // echo $_SESSION['type'];
               echo "<div><a onclick="."openTabs('employee')".">NHÂN VIÊN</a></div>";
          }  
          ?>
          <div><a onclick="openTabs('customer')">KHÁCH HÀNG</a></div>
          <div><a onclick="openTabs('product')">SẢN PHẨM</a></div>
          <div><a onclick="openTabs('shelf')">KỆ SẢN PHẨM</a></div>
          <div><a onclick="openTabs('supplier')">NHÀ CUNG CẤP</a></div>
          <div><a onclick="openTabs('scate')">NHÓM SẢN PHẨM</a></div>
     </div>



     <div id="employee" class="contents">
          <h1>Quản lý danh sách nhân viên</h1>
          <form action="02action.php" method="POST" class="nhap">

               <input type="text" name="Emp_id" size="50" class="onhap" placeholder="Mã Nhân Viên"> 
               <input type="text" name="User_name" size="50" class="onhap" placeholder="Username"> 
               <input type="text" name="Pass_word" size="50" class="onhap" placeholder="Password"> 
               <input type="text" name="Emp_name" size="50" class="onhap" placeholder="Tên nhân viên"> 
               <input list="emstatus" name="Emp_status" class="onhap" placeholder="Tình trạng nhân viên">
               <datalist id="emstatus">
                    <option value="1">Cho phép truy cập vào hệ thống được</option>
                    <option value="2">Không cho phép vào hệ thống</option>
               </datalist> 
               <input list="emtype" name="Emp_type" class="onhap" placeholder="Loại nhân viên">
               <datalist id="emtype">
                    <option value="1">Nhân viên</option>
                    <option value="2">Chủ cửa hàng</option>
               </datalist>
               <input type="submit" value="Thêm" name="submit" class="osubmit">

          </form>
     
          <table class="bang">
               <tr>
                    <th>Mã nhân viên</th>
                    <th>Username</th>
                    <th>Password</th>
                    <th>Tên nhân viên</th>
                    <th>Tình trạng nhân viên</th>
                    <th>Loại nhân viên</th>
               </tr>
                    <?php
                    $conn = mysqli_connect("localhost", "phucvinhvic","2019vanconyeuem", "dbms");

                    if ($conn->connect_error) {
                    die("Connection failed: " . $conn->connect_error);
                    }
                    $sql = "SELECT Emp_id, User_name,Pass_word,Emp_name,Emp_status,Emp_type FROM employee";
                    $result = $conn->query($sql);
                    if ($result->num_rows > 0) {
                    while($row = $result->fetch_assoc()) {
                    echo "<tr><td>" . $row["Emp_id"]. "</td><td>" . $row["User_name"] . "</td><td>" . $row["Pass_word"] . "</td><td>" . $row["Emp_name"] . "</td><td>" . $row["Emp_status"] . "</td><td>" . $row["Emp_type"] . "</td></tr>";
                    }
                    echo "</table>";
                    } else { echo "0 results"; }
                    $conn->close();
               ?>
          </table>
      </div>


<!-- thay cho file 01province -->
     <div id="province" class="contents">
          <h1>Quản lý danh sách Tỉnh / Thành phố</h1>

          <form action="01action.php" method="POST" class="nhap">
               <input type="text" name="Province_id" size="50" class="onhap" placeholder="Mã tỉnh/ thành phố">
               <input type="text" name="Province_name" size="50" class="onhap" placeholder="Tên tỉnh/ thành phố">
               <input type="submit" value="Thêm" name="submit" class="osubmit">
          </form>
          <table class="bang">
               <tr>
                    <th>Mã Tỉnh/Thành phố</th>
                    <th>Tên Tỉnh/Thành phố</th>
               </tr>
               <?php
                    $conn = mysqli_connect("localhost", "phucvinhvic","2019vanconyeuem", "dbms");

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
     </div>

<!-- thay cho file 03customer.php -->
     <div id="customer" class="contents">
          <h1>Quản lý thành viên</h1>

          <form action="03action.php" method="POST" class="nhap">
               <input type="text" name="Cust_id" size="50" class="onhap" placeholder="Mã thành viên">
               <input type="text" name="Cust_name" size="49" class="onhap" placeholder="Tên thành viên">
               <input type="text" name="Cust_lastName" size="50" class="onhap" placeholder="Họ thành viên">
               <input type="text" name="Cust_address" size="45" class="onhap" placeholder="Địa chỉ thành viên">
               <input type="text" name="Province_id" size="44" class="onhap" placeholder="Mã tỉnh/ thành phố">
               <input type="text" name="Cust_tel" size="52" class="onhap" placeholder="Số điện thoại">
               <input type="text" name="Admit_date" size="37" class="onhap" placeholder="Ngày đăng ký">
               <input list="Cust_status" name="Cust_status" class="onhap" placeholder="Tình trạng thành viên">
               <datalist id="Cust_status">
                    <option value="1">Mua sản phẩm được</option>
                    <option value="2">Hủy thành viên này</option>
               </datalist>
               <input type="submit" value="Thêm" name="submit" class="osubmit">

          </form>
     

     <table class="bang">
     <tr>
     <th>Mã thành viên</th>
     <th>Tên</th>
     <th>Họ</th>
     <th>Địa chỉ</th>
     <th>Mã tỉnh/thành phố</th>
     <th>Số điện thoại</th>
     <th>Ngày đăng ký</th>
     <th>Tình trạng</th>
     </tr>
     <?php
     $conn = mysqli_connect("localhost", "phucvinhvic","2019vanconyeuem", "dbms");

     if ($conn->connect_error) {
     die("Connection failed: " . $conn->connect_error);
     }
     $sql = "SELECT Cust_id, Cust_name,Cust_lastName,Cust_address,Province_id,Cust_tel,Admit_date,Cust_status FROM customer";
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
     </div>

<!-- thay cho file 04product.php -->
     <div id="product" class="contents">
     <h1><b>Quản lý sản phẩm : </b></h1>

     <form action="04action.php" method="POST" class="nhap">
          <input type="text" name="Pro_id" size="50" class="onhap" placeholder="Mã sản phẩm">
          <input type="text" name="Pro_name" size="50" class="onhap" placeholder="Tên sản phẩm">
          <input type="text" name="Pro_cost"size="50" class="onhap" placeholder="Giá ban đầu">
          <input type="text" name="Pro_salePrice"size="47" class="onhap" placeholder="Giá bình thường">
          <input type="text" name="Pro_memberPrice" size="48" class="onhap" placeholder="Giá thành viên">
          <input type="text" name="Pro_amount" size="44" class="onhap" placeholder="Số lượng trong kho">
          <input type="text" name="Cate_id" size="43" class="onhap" placeholder="Mã nhóm sản phẩm">
          <input type="text" name="Shelf_id" size="46" class="onhap" placeholder="Mã kệ sản phẩm">
          <input type="text" name="Sup_id" size="46" class="onhap" placeholder="Mã nhà cung cấp">
          <input type="text" name="Point_ofSale" size="41" class="onhap" placeholder="Số lượng điểm mua">
          <input list="Pro_status" name="Pro_status" class="onhap" placeholder="Tình trạng sản phẩm">
               <datalist id="Pro_status">
                    <option value="1">Sản phẩm có sẵn</option>
                    <option value="2">Hủy sản phẩm này</option>
               </datalist>
          <input type="submit" value="Thêm" name="submit" class="osubmit">

     </form>

          <table class="bang">
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
          $conn = mysqli_connect("localhost", "phucvinhvic","2019vanconyeuem", "dbms");

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
               </div>

<!-- thay cho file 05shelf.php -->
     <div id="shelf" class="contents">
          <h1>Quản lý kệ sản phẩm</h1>

          <form action="05action.php" method="POST" class="nhap">
               <input type="text" name="Shelf_id" size="50" class="onhap" placeholder="Mã kệ sản phẩm">
               <input type="text" name="Shelf_name" size="49" class="onhap" placeholder="Tên kệ sản phẩm">
               <input type="submit" value="Thêm" name="submit" class="osubmit">

          </form>
          <table class="bang">
          <tr>
          <th>Mã kệ sản phẩm</th>
          <th>Tên kệ sản phẩm</th>
          </tr>
          <?php
          $conn = mysqli_connect("localhost", "phucvinhvic","2019vanconyeuem", "dbms");

          if ($conn->connect_error) {
          die("Connection failed: " . $conn->connect_error);
          }
          $sql = "SELECT Shelf_id, Shelf_name FROM shelf";
          $result = $conn->query($sql);
          if ($result->num_rows > 0) {
          while($row = $result->fetch_assoc()) {
          echo "<tr><td>" . $row["Shelf_id"]. "</td><td>" . $row["Shelf_name"] . "</td></tr>";
          }
          echo "</table>";
          } else { echo "0 results"; }
          $conn->close();
          ?>
          </table>
     </div>
<!-- thay cho 06supplier.php  -->
     <div id="supplier" class="contents">
     <h1>Quản lý danh sách nhà cung cấp</h1>
          <form action="06action.php" method="POST" class="nhap">

               <input type="text" name="Sup_id" size="50" class="onhap" placeholder="Mã nhà cung cấp">
               <input type="text" name="Sup_name" size="50" class="onhap" placeholder="Tên nhà cung cấp">
               <input type="text" name="Sup_address"size="47" class="onhap" placeholder="Địa chỉ nhà cung cấp">
               <input type="text" name="Sup_tel" size="50" class="onhap" placeholder="Số điện thoại">
               <input type="text" name="Contact_name" size="50" class="onhap" placeholder="Tên người liên hệ">
               <input type="text" name="Province_id" size="48" class="onhap" placeholder="Mã tỉnh/thành phố : ">

               <input type="submit" value="Thêm" name="submit" class="osubmit">

          </form>
 

          <table class="bang">
          <tr>
          <th>Mã nhà cung cấp</th>
          <th>Tên nhà cung cấp</th>
          <th>Địa chỉ</th>
          <th>Số điện thoại</th>
          <th>Tên người liên hệ</th>
          <th>Mã tỉnh/Thành phố</th>
          </tr>
          <?php
          $conn = mysqli_connect("localhost", "phucvinhvic","2019vanconyeuem", "dbms");

          if ($conn->connect_error) {
          die("Connection failed: " . $conn->connect_error);
          }
          $sql = "SELECT Sup_id, Sup_name,Sup_address,Sup_tel,Contact_name,Province_id FROM supplier";
          $result = $conn->query($sql);
          if ($result->num_rows > 0) {
          while($row = $result->fetch_assoc()) {
          echo "<tr><td>" . $row["Sup_id"]. "</td><td>" . $row["Sup_name"] . "</td><td>" . $row["Sup_address"] . "</td><td>" . $row["Sup_tel"] . "</td><td>" . $row["Contact_name"] . "</td><td>" . $row["Province_id"] . "</td></tr>";
          }
          echo "</table>";
          } else { echo "0 results"; }
          $conn->close();
          ?>
          </table>
     </div>
<!-- thay cho 07productcate.php -->
     <div id="scate" class="contents">
     <h1>Quản lý nhóm sản phẩm</h1>

          <form action="07action.php" method="POST" class="nhap">
               <input type="text" name="Cate_id" size="50" class="onhap" placeholder="Mã nhóm sản phẩm">
               <input type="text" name="Cate_name" size="49" class="onhap" placeholder="Tên nhóm sản phẩm">

               <input type="submit" value="Thêm" name="submit" class="osubmit">

          </form>
 

          <table class="bang">
          <tr>
          <th>Mã nhóm sản phẩm</th>
          <th>Tên nhóm sản phẩm</th>
          </tr>
          <?php
          $conn = mysqli_connect("localhost", "phucvinhvic","2019vanconyeuem", "dbms");

          if ($conn->connect_error) {
          die("Connection failed: " . $conn->connect_error);
          }
          $sql = "SELECT Cate_id, Cate_name FROM product_category";
          $result = $conn->query($sql);
          if ($result->num_rows > 0) {
          while($row = $result->fetch_assoc()) {
          echo "<tr><td>" . $row["Cate_id"]. "</td><td>" . $row["Cate_name"] . "</td></tr>";
          }
          echo "</table>";
          } else { echo "0 results"; }
          $conn->close();
          ?>
          </table>
     </div>


     <!-- javascript để mở các tab thay vì chuyển link sang trang khác  -->
     <script>
          function openTabs(tabname){
               var x = document.getElementsByClassName("contents");
               for(var i=0; i<x.length; i++){
                    x[i].style.display ="none";
               }
               
               document.getElementById(tabname).style.display="block";
          }
     </script>
</body>
</html>