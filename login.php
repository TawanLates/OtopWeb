
<?php
    include('server.php');

    if (isset($_POST['sub'])) {
        $username = $_POST['username'];
        $password = $_POST['password'];
    }

    $sql = "SELECT * FROM member_tb WHERE username = '$username' 
        AND password = '$password' ";        
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) == 1) {
        session_start();
        $_SESSION['user_id'] = $username;
        echo "<script type='text/javascript'>";
        echo "alert('Login สำเร็จ');";
        echo "window.location = 'index.php'; ";
        echo "</script>";
    } 
    else {
        echo "<script type='text/javascript'>";
        echo "alert('รหัสหรือชื่อผู้ใช้ผิดพลาด');";
        echo "window.location = 'login.html'; ";
        echo "</script>";
    }
   
?>
