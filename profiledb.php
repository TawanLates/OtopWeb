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
    $sql = "SELECT username, password,email FROM member_tb WHERE username = '$u_id'";
    $result = $conn->query($sql);
    
    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        $username = $row['username'];
        $email = $row['email'];
        $password = $row['password'];   
        
        echo "Username: " . $username . "<br>";
        echo "email: " .$email . "<br>";
        echo "Password: " . $password . "<br>";
        
        echo '<a href="edit_profile.php">แก้ไขข้อมูล</a>';
        echo '<a href="change_password.php">เปลี่ยนรหัสผ่าน</a>';
    } else {
        echo "User not found";
    }
}
?>
