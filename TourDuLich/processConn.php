<?php 
    $conn = new mysqli("localhost","root","","dangkynhanvien", 3306);
    if($conn -> connect_error){
        die("connection failed".$conn->connect_error);
    }echo "";
?>