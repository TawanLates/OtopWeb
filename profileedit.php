<!DOCTYPE html>
<?php
    echo '<div class="profilebox">
    <div class="prohead">
        <h1>Edit Profile</h1>
    </div>';
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
        $password = $row['password'];
        $email = $row['email'];
    } else {
        echo "User not found"; 
    }
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $newUsername = $_POST['newUsername'];
    $newPassword = $_POST['newPassword'];
    $newEmail = $_POST['newEmail'];

    $updateSql = "UPDATE member_tb SET username = '$newUsername', password = '$newPassword', email='$newEmail' WHERE username = '$u_id'";
    
    if ($conn->query($updateSql) === TRUE) {
        echo '<div class="Susscess">อัปเดตข้อมูลเรียบร้อยแล้ว</div>';
    } else {
        echo '<div class="fail">ชื่อนี้มีผู้ใช้งานแล้ว</div>';
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Profile</title>
    <link rel="stylesheet" href="Css-profile.css">
</head>
<body>
    
    <div class="profileedit">

    <form method="post">
        <div class="dataeidt">
            <ul>
                <li><label class='usernameEdit' for="newUsername">ชื่อผู้ใช้งาน :</label>
                    <input type="text" id="newUsername" name="newUsername" value="<?php echo $username; ?>"><br></li>

                <li><label for="newEmail">อีเมลล์ :</label>
                    <input type="text" id="newEmail" name="newEmail" value="<?php echo $email; ?>"><br></li>

                <li><label class='passwordEdit' for="newPassword">รหัสผ่านใหม่ :</label>
                    <input type="password" id="newPassword" name="newPassword"><br></li>
            
                <li><input class='btnEdit' type="submit" value="บันทึก"></li> 
            </ul>
        </div>
    </form>
    </div>
    </div>
</body>
</html>
