<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="catemenu.css">
	<title>Store</title>
	<link rel = "icon" href = "Otap.png" type = "image/x-icon"> 
</head>
<body>
	<?php include 'menubar.php' ?>
	<h2 style='text-align:end; padding-right:20px; height:20px;'>ผ้าคลุมไหล่</h2>
	<div class="catebar">
		<div class="catebar1">
			<a href="store.php"><h3>สินค้าทั้งหมด</h3></a>
			<a href="store2.php"><h3>ผ้าซิ่น</h3></a>
			<a href="store3.php"><h3>ผ้าคลุมไหล่</h3></a>
		</div>
		<div class="catebar2">
			<?php include 'storeshow3.php' ?>
		</div>
	</div>
	
</body>
</html>
