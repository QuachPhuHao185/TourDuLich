<?php 
    include("processConn.php");
    if(isset($_POST['dangKy'])){
        $username = $_POST['usernames'];
        $pwd = $_POST['pwd'];
        $repwd = $_POST['repwd'];
        $gender = $_POST['gender'];
        $birthdays = $_POST['birthdays'];
        $phoneNum = $_POST['phoneNum'];
        $email = $_POST['email'];

        $sql ="select * from dangky where usernames='$usernames'";
        $result = mysqli_query($conn, $sql);
        $count_user = mysqli_num_rows($result);

        $sql ="select * from dangky where email='$email'";
        $result = mysqli_query($conn, $sql);
        $count_email = mysqli_num_rows($result);

        if($count_user == 0 & $count_email == 0){
            if($pwd == $repwd){
                $hash = password_hash($pwd, PASSWORD_DEFAULT);
                $sql = "INSERT INTO dangky(usernames, pwd, gender, birthdays, phoneNum, email) 
                VALUES('$username','$hash','$gender','$birthdays','$phoneNum','$email')";
                $result = mysqli_query($conn,$sql);
                if($result){
                    header("Location: dangNhapNV.php");
                }
            }
        }
        else{ 
            if($count_user > 0){
            echo '<script>
            window.location.href="dangKyNV.php";
            alert("Tên Tài Khoản đã tồn tại");
            </script>';
            }
        if($count_email > 0){
            echo '<script>
            window.location.href="dangKyNV.php";
            alert("Email đã dùng");
            </script>';
        }
    }
    }
?>