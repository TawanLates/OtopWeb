<?php
session_start();
if(empty($_SESSION['user_id'])) {
    echo "<script type='text/javascript'>";
    echo "alert('กรุณา Login');";
    echo "window.location = 'login.html'; ";
    echo "</script>";
} else {
  
    include('server.php');
    $u_id = $_SESSION['user_id'];
 
    $sql = "SELECT username FROM member_tb WHERE username = '$u_id'";
    $result = $conn->query($sql);
    
    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        $username = $row['username'];
     
        echo $username;
    } else {
        echo '<a href="login.html">กรุณาเข้าสู่ระบบ</a>'; 
    }
}
?>