<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MEGKRAM</title>
    <link rel = "icon" href = "Otap.png" type = "image/x-icon"> 
    <link rel="stylesheet" href="indexWeb.css">
    <link rel="stylesheet" href="dropdown.css">
    
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+Thai:wght@400;500&display=swap" rel="stylesheet">

</head>
<body>
<nav>
    <div class="menubar">
        <div class="logoimg">
            <a href="index.php"><img src="Otap.png"  alt=""></a>
        </div>
        <ul class="menubarmo">
            <li><a href="index.php">หน้าแรก</a></li>
            <li>
                <a href="store.php">สินค้า</a>
            </li>
            <li><a href="contact.php">ติดต่อกับเรา</a></li>
            <div class="usershow">
                <div class='userlogo'><a href="profile.php"><img src="image/another/user.png" alt=""></div></a>
                <p style="color:white;"> :<a href="profile.php"><?php include 'showuser.php'?>  <!-- แสดงชื่อผู้ใช้งาน--></p></a> 
            </div>
          
            
        </ul>
    </div>
</nav>

</body>
</html>