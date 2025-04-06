<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel = "icon" href = "Otap.png" type = "image/x-icon">
    <link rel="stylesheet" href="login.css">
</head>
<body>
   
    <div class="headbarlog"></div>
    <form action="registerdb.php" method="post">
        <h2>ลงทะเบียนบัญชีผู้ใช้งาน</h2>
        <div class="input-group">
            <label> ชื่อผู้ใช้งาน </label>
            <input type="text" name="username">
        </div>
        <div class="input-group">
            <label> รหัสผ่าน </label>
            <input type="password" name="password">
        </div>     
        <div class="input-group">
            <label> อีเมลล์ </label>
            <input type="text" name="email">
        </div>     
          
        <div class="input-group">
            <button type="submit" name="sub" class="btn">สมัครใช้งาน</button>
        </div>
        <a href="login.html">มีบัญชีผู้ใช้งานแล้ว</a>
</form>
    
</body>
</html>

