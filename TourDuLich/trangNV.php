<?php include("processConn.php"); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/nhapThongTin.css">
    <title>Trang Hoạt Động nhân viên</title>
</head>
<body>
<header>
        <h1><i>Magical Tour Việt Nam</i></h1>
        <nav>
            <ul>
                <li><a href="logout.php">Thoát</a></li>   
                <li><a href="dangNhapNV.php">Đăng Nhập</a></li>
                <li><a href="nhapThongTinKhach.php">Chọn và Đặt Tour</a></li>
                <li><a href="thongTin.php">Thông Tin</a></li>
            </ul>
        </nav>
    </header>
    <main>
    <p>Bảng Quản Lý Thông Tin khách: <a href="nhapThongTinKhach.php"><button>Thêm Khách Hàng</button></a></p>
    <div class="tableKH" style="overflow-x:auto;">
            <table>
            <thead>
                <tr>
                    <th>Tên Khách</th>
                    <th>Giới Tính</th>
                    <th>Số Điện Thoại</th>
                    <th>Email</th>
                    <th>Chọn Tour</th>
                    <th>Cách Thanh Toán</th>
                    <th>Cập Nhật</th>
                    <th>Xóa</th>
                </tr>
            </thead>
            <tbody>
            <?php
                $query = "select * from thongtinkhach";
                $result = mysqli_query($conn, $query);
                if(!$result){
                    die("ket noi that bai!".$conn->connect_error);
                }else{
                    while($row = mysqli_fetch_assoc($result)){
                    ?>
                <tr>
                    <td><b><?php echo $row['Khach']; ?></b></td>
                    <td><?php echo $row['gioiTinh']; ?></td>
                    <td><?php echo $row['phoneNum']; ?></td>
                    <td><?php echo $row['email']; ?></td>
                    <td><?php echo $row['chonTour']; ?></td>
                    <td><?php echo $row['cachTraTien']; ?></td>
                    <td><a href="processUpdateNV.php?id=<?php echo $row['id']; ?>"><button>Cập Nhật</button></a></td>
                    <td><a href="processDeleteNV.php?id=<?php echo $row['id']; ?>"><button>Xóa Dòng</button></a></td>
                </tr>
                    <?php
                    }
                }
                 ?>
            </tbody>
            </table>
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