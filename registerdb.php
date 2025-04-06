<?php
    include('server.php');

    if (isset($_POST['sub'])) {
        $username = $_POST['username'];
        $password = $_POST['password'];
        $email = $_POST['email'];
    }

    $sql = "INSERT INTO `member_tb`(`username`, `password`, `email`) 
        VALUES ('$username','$password','$email')";
    
    //check
    if ($conn->query($sql) === TRUE) {
        echo "<script type='text/javascript'>";
        echo "alert('ลงทะเบียเรียบร้อยแล้ว');";
        echo "window.location = 'login.html'; ";
        echo "</script>";
    }
    else {
        echo "<script type='text/javascript'>";
        echo "alert('ช่ื่อนี้มีผู้ใช้งานแล้ว');";
        echo "window.location = 'register.php'; ";
        echo "</script>";
    } 
?>
