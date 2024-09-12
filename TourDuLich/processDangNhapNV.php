<?php 
    include("processConn.php");
    if(isset($_POST['login'])){
        $username = $_POST['tenTK'];
        $pwd = $_POST['pwd'];

       $sql = "select * from dangky where usernames ='$username'";
       $result = mysqli_query($conn, $sql);
       $row = mysqli_fetch_array($result, MYSQLI_ASSOC);

       if($row){
         if(password_verify($pwd, $row["pwd"])){//người dùng tồn tại kiểm tra mật khẩu
            header("Location: trangNV.php");
            exit(); // mật khẩu đúng 
        } else {
            echo '<script> 
                    alert("mật khẩu nhập sai!!");
                    window.location.href = "dangNhapNV.php";
                  </script>';//nhập mật khẩu sai
            exit(); 
        }
    }else {
        echo '<script>
                alert("Tên tài khoản không tồn tại");
                window.location.href = "dangNhapNV.php";
              </script>';
        exit();//người dùng không tồn tại
    }
}
?>