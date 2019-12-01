<html>
<head>
	<title>Nhân viên đăng nhập</title>
	<link rel="stylesheet" type="text/css" href="style/homestyle.css">
	<link href="https://fonts.googleapis.com/css?family=Calistoga&display=swap" rel="stylesheet">
</head>
<body>
<div class="manChan" id="manChan"></div>
    <div class="background"></div>
    <h1>HỆ THỐNG CỬA HÀNG BÁN LẺ</h1>
    <div class="menu">
        <div><a href='index.html'>TRANG CHỦ</a></div>
        <div><a href='08sale.php'>BÁN HÀNG</a></div>
        <div><a href='09return.php'>TRẢ HÀNG</a></div>
        <div><a href='10order.php'>ĐẶT HÀNG</a></div>
        <div><a href='manage/02employee.php' target="_blank">QUẢN LÝ</a></div>
    </div>

	<div class="login" id="login" >
        <form action="loginat.php" method="post">
            <input type="text" name="employeeid" placeholder="Mã nhân viên" class="oinput">
            <input type="password" name="password" placeholder="Mật Khẩu" class="oinput">
            <input list="loai" name="type" class="oinput" placeholder="Loại nhân viên">
            <datalist id="loai">
            <option value="1">Nhân viên</option>
            <option value="2">Quản lý</option>
            </datalist> 
            <input type="submit" value="Đăng Nhập" class="osubmit" onclick="closeAny('login')" name="submit">
        </form>
        <!-- <input type="submit" value="Đăng Nhập" class="osubmit" onclick="closeAny('login')"> -->
    </div>

<!-- 	
	<form method="post" action="08sale.php">


		<div class="input-group">
			<label>Username</label>
			<input type="text" name="username" >
		</div>
		<div class="input-group">
			<label>Password</label>
			<input type="password" name="password">
		</div>
		<div class="input-group">
			<button type="submit" class="btn" name="login_btn">Login</button>
		</div>

	</form> -->
</body>
</html>