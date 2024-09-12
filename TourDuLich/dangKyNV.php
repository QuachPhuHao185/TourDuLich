<?php
    session_start();
    include("processConn.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/nhapThongTin.css">
    <title>Đăng ký tài khoản nhân viên</title>
</head>
<body>
<header>
        <h1><i>Magical Tour Việt Nam</i></h1>
        <nav>
            <ul>
                <li><a href="index.php">Trang Chủ</a></li>  
                <li><a href="dangNhapNV.php">Đăng Nhập</a></li>
                <li><a href="nhapThongTinKhach.php">Chọn và Đặt Tour</a></li>
                <li><a href="thongTin.php">Thông Tin</a></li>
            </ul>
        </nav>
    </header>
    <main>
        <div class="dangKy">
        <h2>Đăng Ký Tài Khoản Nhân Viên</h2>
        <form name="form" action="processDangKy.php" method="POST">
            <label>Tên Tài Khoản</label>
            <input type="text" id="usernames" name="usernames" placeholder="Nhập tên tài khoản nhân viên" required>
            <label>Mật Khẩu</label>
            <input type="password" id="pwd" name="pwd" placeholder="Nhập mật khẩu nhân viên" required>
            <label>Nhập Lại Mật Khẩu</label>
            <input type="password" id="repwd" name="repwd" placeholder="Nhập mật khẩu lại lần nữa" required>
            <label>Giơi Tính</label>
            <input type="text" id="gender" name="gender" placeholder="Nhập giới tính nhân viên" required>
            <label>Ngày Tháng Năm sinh</label>
            <input type="text" id="birthdays" name="birthdays" placeholder="Nhập ngày tháng năm sinh của nhân viên" required>
            <label>số Điện Thoại</label>
            <input type="text" id="phoneNum" name="phoneNum" placeholder="Nhập số điện thoại nhân viên" required>
            <label>Email</label>
            <input type="text" id="email" name="email" placeholder="Nhập Email nhân viên" required>
            <input type="submit" id="btnDangKy" name="dangKy" value="Xác Nhận">
        </form>
    </div>
    </main>
    <footer id="LienHe">
        <h2>Liên Hệ</h2>
        <address>
            <strong>Tour Màu Nhiệm Việt Nam</strong><br>
            Địa chỉ: 123 Đường ABC, Thành phố Hồ Chi Minh<br>
            Điện thoại: 0123-456-789<br>
            Email: MagicalTour@gmail.com
        </address>
    </footer>
</body>
</html>