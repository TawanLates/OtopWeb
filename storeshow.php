<title>Store</title>
<link rel="stylesheet" href="cssstore.css">
<?php

	//database
	include('server.php');

	//Select data 
	$sql = $sql = "SELECT ProductName,Price,categories.CategoryName,img,ProductID
	FROM `products`
	INNER JOIN categories ON products.CategoryID = categories.CategoryID";
	$result = $conn->query($sql);
	
	//Check Data 
	if ($result->num_rows > 0) {
		while($row = $result->fetch_assoc()) {
			echo '<div class="productgrid">';
				//Show Data
		while($row = $result->fetch_assoc()) {
			echo "<form method='post' action='buyproducts.php'>";
				echo '<div class="productgrid">';
				
				echo "<h1>".$row["CategoryName"].'<br>'.$row["ProductName"]."</h1>";
				
				echo '<div>';
				echo "<td>"."<img src='image/product/".$row["img"]."' width='250' height='250'> </td>";
				echo '</div>';
				echo "<input type='hidden' name='ProductID' value='".$row['ProductID']."'>";
				echo "<input type='hidden' name='user_id' value='".$_SESSION['user_id']."'>";
				echo "<div><button class=btnmo type=submit name=buy>สั่งซื้อ</button>";
				echo "<a style='color: red; font-size:20px;'>ราคา : ".$row["Price"]." บาท</a>";
				
				echo "</div>";

				
				
				echo '</div>';
				
				
			echo "</form>";
		}

	}
	} else {
		echo "ไม่พบข้อมูล" ;  
	  
				
	}
	 
	$conn->close();
?>
