<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/nhapThongTin.css">
    <title>Chọn Tour và cách thanh toán</title>
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
    <div class="thongTinKhach">
        <h2>Chọn tour muốn đi và cách thanh toán</h2>
        <form action="processNhapTTKhach.php" method="POST">
            <label>Họ và Tên</label>
            <input type="text" name="nameKhach" placeholder="Nhập họ và tên khách hàng" required>
            <label>Giơi Tính</label>
            <select name="gioiTinh">
                <option value="Nam">Nam</option>
                <option value="Nữ">Nữ</option>
            </select>
            <label>số Điện Thoại</label>
            <input type="text" name="phoneNum" placeholder="Nhập số điện thoại" required>
            <label>Email</label>
            <input type="text" name="email" placeholder="Nhập Email khách" required>
            <label>Chọn Tour</label>
            <select name="chonTour">
                <option value="Tour Đa Lat">Tour Đa Lạt</option>
                <option value="Tour Hạ Long">Tour vịnh Hạ Long</option>
                <option value="Tour đảo Phú Quốc">Tour đảo Phú Quốc</option>
            </select>
            <label>Chọn Cách Thanh Toán</label>
            <select name="cachTraTien">
                <option value="trả Trực Tiếp">Trả Trực Tiếp</option>
                <option value="trả bằng MOMO">Trả Bằng MoMo</option>
                <option value="trả bằng ZaloPay">Trả Bằng ZaloPay</option>
                <option value="trả bằng ViettelMoney">Trả Bằng ViettelMoney</option>
            </select>
            <input type="submit" name="guiTTKhach" value="Gửi Thông Tin">
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