<?php 
    include("processConn.php");
    if(isset($_POST['loginQL'])){
        $username = $_POST['tenTK'];
        $pwd = $_POST['pwd'];

       $sql = "select * from quanly where users ='$username' and pwd ='$pwd'";
       $result = mysqli_query($conn, $sql);
       $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
       $count = mysqli_num_rows($result);

       if($count == 1){
        header("Location: trangQL.php");
       }else{
        echo '<script>
        window.location.href="dangNhapQL.php";
        alert("Đăng nhập thất bại, tên tài khoản hay mật khẩu không hợp lệ");
        </script>';
       }
    }
?>