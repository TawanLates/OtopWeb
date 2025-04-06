<link rel="stylesheet" href="cart.css">
<?php 
    include("server.php");
    $u_id = $_SESSION['user_id'];
 
    $sql = "SELECT username, password,email FROM member_tb WHERE username = '$u_id'";
    
    $sql = "SELECT products.img,products.ProductID, products.ProductName,products.Price
    FROM orderdetails 
    INNER JOIN products ON orderdetails.ProductID = products.ProductID
    WHERE username = '$u_id'";

    $result = $conn->query($sql);

    
    if ($result->num_rows > 0){
        echo '<div class="cartgrid">';
        echo "<form method='post' action='order.php'";
        
        while($row = $result->fetch_assoc()){
            echo '<div class="cartgrid">';
                echo '<div class="grid1">';
                    echo "<img src='image/product/".$row["img"]."' width='80' height='80'>";  
                    echo "รหัสสินค้า"."&nbsp".$row['ProductID']."&nbsp";
                    echo "<h4>"."&nbsp".$row['ProductName']."</h4>";
                    echo "<p>"."ราคา"."&nbsp".$row['Price']."&nbsp"."บาท"."</p>";  
                echo '</div>';
        }
            echo '</div>';
            
            echo "<button type='submit' name='order'>ORDER</button>";
            echo "</form>";
        echo '</div>';
    }
    else{
        echo 'ไม่พบข้อมูลสินค้า กรุณาเลือกสินค้า';
        echo "<a href='store.php'>สินค้า</a>";
    }
?>