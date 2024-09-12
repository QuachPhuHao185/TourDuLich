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
<?php 
include("processConn.php");
if(isset($_GET['id'])){
    $id = $_GET['id'];

    $query = "SELECT * FROM thongtinkhach WHERE id = '$id'";
    $result = mysqli_query($conn, $query);
    if(!$result){
        die("Kết nối thất bại! " . $conn->connect_error);
    } else {
        $row = mysqli_fetch_assoc($result);
    }
}
if(isset($_POST['capNhatTTKhach'])){
    $nameKhach = $_POST['nameKhach'];
    $gioiTinh = $_POST['gioiTinh'];
    $phoneNum = $_POST['phoneNum'];
    $email = $_POST['email'];
    $chonTour = $_POST['chonTour'];
    $cachTraTien = $_POST['cachTraTien'];

    $query = "UPDATE thongtinkhach SET Khach='$nameKhach', gioiTinh='$gioiTinh', phoneNum='$phoneNum', email='$email', chonTour='$chonTour', cachTraTien='$cachTraTien' WHERE id = '$id'";
   
    $result = mysqli_query($conn, $query);
    if(!$result){
        die("Cập nhật thất bại! " . $conn->error);
    } else {
       header('Location: trangNV.php?update_msg=Update Thành Công!');
       exit();
    }
}
?>

<div class="CapNhatThongTinKhach">
    <h2>Cập Nhật Thông Tin Khách</h2>
    <form action="processUpdateNV.php?id=<?php echo $id; ?>" method="POST">
        <label>Họ và Tên</label>
        <input type="text" name="nameKhach" value="<?php echo isset($row['Khach']) ? $row['Khach'] : ''; ?>" placeholder="Nhập họ và tên khách hàng" required> 
        <label>Giới Tính</label>
        <select name="gioiTinh">
            <option value="Nam" <?php if(isset($row['gioiTinh']) && $row['gioiTinh'] == 'Nam') echo 'selected'; ?>>Nam</option>
            <option value="Nữ" <?php if(isset($row['gioiTinh']) && $row['gioiTinh'] == 'Nữ') echo 'selected'; ?>>Nữ</option>
        </select>
        <label>Số Điện Thoại</label>
        <input type="text" name="phoneNum" value="<?php echo isset($row['phoneNum']) ? $row['phoneNum'] : ''; ?>" placeholder="Nhập số điện thoại" required>
        <label>Email</label>
        <input type="text" name="email" value="<?php echo isset($row['email']) ? $row['email'] : ''; ?>" placeholder="Nhập Email khách" required>
        <label>Chọn Tour</label>
        <select name="chonTour">
            <option value="Tour Đa Lat" <?php if(isset($row['chonTour']) && $row['chonTour'] == 'Tour Đa Lat') echo 'selected'; ?>>Tour Đa Lạt</option>
            <option value="Tour Hạ Long" <?php if(isset($row['chonTour']) && $row['chonTour'] == 'Tour Hạ Long') echo 'selected'; ?>>Tour vịnh Hạ Long</option>
            <option value="Tour đảo Phú Quốc" <?php if(isset($row['chonTour']) && $row['chonTour'] == 'Tour đảo Phú Quốc') echo 'selected'; ?>>Tour đảo Phú Quốc</option>
        </select>
        <label>Chọn Cách Thanh Toán</label>
        <select name="cachTraTien">
            <option value="trả Trực Tiếp" <?php if(isset($row['cachTraTien']) && $row['cachTraTien'] == 'trả Trực Tiếp') echo 'selected'; ?>>Trả Trực Tiếp</option>
            <option value="trả bằng MOMO" <?php if(isset($row['cachTraTien']) && $row['cachTraTien'] == 'trả bằng MOMO') echo 'selected'; ?>>Trả Bằng MoMo</option>
            <option value="trả bằng ZaloPay" <?php if(isset($row['cachTraTien']) && $row['cachTraTien'] == 'trả bằng ZaloPay') echo 'selected'; ?>>Trả Bằng ZaloPay</option>
            <option value="trả bằng ViettelMoney" <?php if(isset($row['cachTraTien']) && $row['cachTraTien'] == 'trả bằng ViettelMoney') echo 'selected'; ?>>Trả Bằng ViettelMoney</option>
        </select>
        <input type="submit" name="capNhatTTKhach" value="Cập Nhật">
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