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
                        <li>
                            <a href="contact.php">ติดต่อกับเรา</a>
                        </li>
                        
                    <div class="usershow">
                        <div class='userlogo'>
                            <a href="profile.php">
                                <img src="image/another/user.png" alt=""></div>
                            </a>
                        <p style="color:#1E3C72;"> :<a href="profile.php"><?php include 'showuser.php'?>  <!-- แสดงชื่อผู้ใช้งาน--></p></a> 
                    </div>
                    <div class="cart">
                            <div class="cart1">
                                <a href="cart.php"><img src="image/another/cart.png" alt=""></a>
                            </div> 
                    </div>
                </ul>
        </div>
    </nav>

    <!-- ข้อมูลหน้าแรก -->
    <div class="promo">
        <div class="promoback">
            <div class="promotext">
                <a href="store.php"><button type="button">ชมสินค้า</button></a>
            </div>
        </div>
    </div>

    

    

    <li class="pagedown">
        <div class="Scroll">
            <h2>สินค้าแนะนำ</h2>
            <h2><img src="image/another/2985150.png" alt=""></h2>
        </div>

        <h1 style=' pading:0px; margin:0px; font-size: 2px; height:1100px;'>
            <a style='color:#ffffff;'>droppage-------</a>
        </h1>
        <div class="pagedown-content">  
            <div class='gridbox'>
                        <div class='grid'>
                                <?php include 'indexstore.php'?>  
                        </div>
                    </div>
        </div>

<div class="line"></div>
    <footer>
    <div class='gridbox'>
                        <div class='gridtext'>
                            <div class="gridtext1">

                                <h1>ผ้าซิ่นย้อมครามคืออะไร</h1>
                                <p> ผ้าฝ้ายเส้นใยธรรมชาติ 100 % เส้นฝ้ายที่มีความนุ่มนวล ผ้าครามสกลนคร ผลิตขึ้นจากการนำเส้นใยปุยฝ้ายแท้ นำมาทอเป็นผืน 
                                    นำมาย้อมครามย้อมสีธรรมชาติ ทอด้วยมือ หรือที่ชาวบ้านเรียกว่า กี่ หรือ หูก 
                                </p>
                                <h3>คุณสมบัติ</h3>

                                <div class="listtext">
                                    <li>– เนื้อผ้าเบาบาง ใส่สบายเพราะกระบวนการทำด้วยธรรมชาติ </li>
                                    <li>– เส้นใยนุ่มจากฝ้าย 100 % ที่เราคัดสรรอย่างดี  </li>
                                    <li>– ซึมซับน้ำได้</li>
                                    <li>– ไม่ทำให้แพ้สำหรับเด็ก</li>
                                </div>

                            </div>
                            <div class="gridtext2">
                                <h1>กว่าจะมาเป็นผ้าย้อมคราม</h1>
                                <iframe loading="lazy" width="700" height="400" 
                                src="https://www.youtube.com/embed/3-GSCc-DISg?feature=oembed" frameborder="0" allowfullscreen="">

                                </iframe>
                            </div>
                        </div>
                    </div>
            </div>
    <div>
        <div class="foottext">
            <div class="foottext1">
                <h2>MEGKRAM</h2>
                <div class="line2"> </div>
                <h5>Duangtawan Chuangchot</h5>
                <h5>Supranee Wongphut</h5>
                <h4>Copyright 2023&copy; MEGKRAM</h4>
            </div>

            <div class="foottext2">
                <h2>เมนูหลัก</h2>
                <div class="line2"> </div>
                <ul class='footmenu'>
                    <li><a href="index.php">หน้าแรก</a></li>
                        <li>
                            <a href="store.php">สินค้า</a>
                        </li>
                        <li>
                        <a href="profile.php">โปรไฟล์</a>
                        </li>
                    </li>
                </ul>  
            </div>
            <div class="foottext3">
                <h2>ติดต่อกับเรา</h2>
                <div class="line2"> </div>

                <ul>
                    <li>
                        <a href="contact.php">ติดต่อกับเรา < คลิก </a>
                    </li>
                </ul>
                <p>ปสส.1/1 หมู่ 7</p>
                <p>จ.สกลนคร</p>
                <p>ต.บ้านโพงาม</p>
                <p>โทร 111-111-111</p>
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d487295.6287744242!2d103.52151936927731!3d17.411926829034194!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x313b6744ba024ce5%3A0xa6ada205ef22eb1!2z4LiZ4Lig4Liy4Lie4Lij4Lic4LmJ4Liy4LiE4Lij4Liy4LihIOC4quC4geC4peC4meC4hOC4ow!5e0!3m2!1sen!2sth!4v1697290704789!5m2!1sen!2sth" 
                    width="250" height="250" style="border:0; margin-left:180px; margin-top:-250px; width:auto;" allowfullscreen="" loading="lazy" 
                    referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
        </div>
    </div>
    </footer>

    </li>



</body>
</html>
