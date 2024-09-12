<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/nhapThongTin.css">
    <title>Đăng nhập cho quản lý</title>
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
        <div class="dangNhapQL">
        <h2>Đăng Nhập Cho Quản Lý</h2>
        <form action="processDangNhapQL.php" method="POST">
            <label>Tên Tài Khoản</label>
            <input type="text" name="tenTK" placeholder="Nhập tên tài khoản quản lý" required>
            <label>Mật Khẩu</label>
            <input type="password" name="pwd" placeholder="Nhập mật khẩu quản" required>
            <input type="submit" name="loginQL" value="Đăng Nhập">
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