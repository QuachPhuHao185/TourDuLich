<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/nhapThongTin.css">
    <title>Trang Hoạt Động Của Quản Lý</title>
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
<?php 
include("processConn.php");
if(isset($_GET['id'])){
    $id = $_GET['id'];

    $query = "select * from dangky where id = '$id'";
    $result = mysqli_query($conn, $query);
    if(!$result){
        die("ket noi that bai!".$conn->connect_error);
    }else{
        $row = mysqli_fetch_assoc($result);
    }
}
if(isset($_POST['capNhatNV'])){
    $username = $_POST['usernames'];
    $gender = $_POST['gender'];
    $birthdays = $_POST['birthdays'];
    $phoneNum = $_POST['phoneNum'];
    $email = $_POST['email'];

    $query ="UPDATE dangky set usernames ='$username', gender='$gender', birthdays='$birthdays',phoneNum='$phoneNum',
    email='$email' where id = '$id' ";
   
    $result = mysqli_query($conn, $query);
    if(!$result){
        die("cập nhật that bai!".$conn->connect_error);
    }else{
       header('location: trangQL.php?update_msg=Update Thành Công!');
       exit();
    }
}
?>

<div class="processCapNhatNV">
        <h2>Cập Nhật Tài Khoản Nhân Viên</h2>
        <form name="form" action="processUpdateQL.php?id=<?php echo $id; ?>" method="POST">
        <label>Tên Tài Khoản</label>
        <input type="text" id="usernames" name="usernames" value="<?php echo isset($row['usernames']) ? $row['usernames'] : ''; ?>"  required>
        <label>Giới Tính</label>
        <input type="text" id="gender" name="gender" value="<?php echo isset($row['gender']) ? $row['gender'] : ''; ?>" required>
        <label>Ngày Tháng Năm sinh</label>
        <input type="text" id="birthdays" name="birthdays" value="<?php echo isset($row['birthdays']) ? $row['birthdays'] : ''; ?>"  required>
        <label>Số Điện Thoại</label>
        <input type="text" id="phoneNum" name="phoneNum" value="<?php echo isset($row['phoneNum']) ? $row['phoneNum'] : ''; ?>" required>
        <label>Email</label>
        <input type="text" id="email" name="email" value="<?php echo isset($row['email']) ? $row['email'] : ''; ?>"  required>
        <input type="submit" id="btnDangKy" name="capNhatNV" value="Cập Nhật">
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