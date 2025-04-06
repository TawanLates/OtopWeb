<?php 
        include("menubar.php");
    ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div class="carthead">
        <h1>ตะกร้าสินค้า</h1>
    </div>
    <div class="cartgird">
        <?php include("cartdb.php");?>
    </div>
    
</body>
</html>