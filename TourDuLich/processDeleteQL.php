<?php include("processConn.php"); ?>
<?php 
    if(isset($_GET['id'])){
        $id = $_GET['id'];
    }

    $query = "DELETE from dangky where id= '$id' ";
    $result = mysqli_query($conn, $query);
    if(!$result){
        die("Kết nối thất bại! " . $conn->connect_error);
    }else{
        header("location:trangQL.php");
    }
?>