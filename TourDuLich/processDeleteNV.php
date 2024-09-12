<?php include("processConn.php"); ?>
<?php 
    if(isset($_GET['id'])){
        $id = $_GET['id'];
    }

    $query = "DELETE from thongtinkhach where id= '$id' ";
    $result = mysqli_query($conn, $query);
    if(!$result){
        die("Kết nối thất bại! " . $conn->connect_error);
    }else{
        header("location:trangNV.php");
    }
?>