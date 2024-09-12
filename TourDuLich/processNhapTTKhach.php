<?php 
    include("processConn.php");
    if(isset($_POST['guiTTKhach'])){
        $tenkhach = $_POST['nameKhach'];
        $gender = $_POST['gioiTinh'];
        $phoneNum = $_POST['phoneNum'];
        $email = $_POST['email'];
        $tour = $_POST['chonTour'];
        $cachTraTien = $_POST['cachTraTien'];

        $sql ="select * from thongtinkhach where email='$email'";
        $result = mysqli_query($conn, $sql);
        $count_email = mysqli_num_rows($result);

        if($count_email == 0){
            $sql = "INSERT INTO thongtinkhach(Khach, gioiTinh, phoneNum, email, chonTour, cachTraTien) 
            VALUES('$tenkhach','$gender','$phoneNum','$email','$tour', '$cachTraTien')";
            $result = mysqli_query($conn,$sql);
        if($result){
                header("Location: index.php");
                }
            }
        else{ 
            if($count_email > 0){
                echo '<script>
                window.location.href="nhapThongTinKhach.php";
                alert("Email đã dùng");
                </script>';
            }
        }
        
    }
?>