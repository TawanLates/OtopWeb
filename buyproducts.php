<?php include('server.php');

    $user_id = $_POST['user_id'];
    $productid = $_POST['ProductID'];
    

    $sql = "INSERT INTO orderdetails
    VALUES ('[value-1]','$productid','$user_id')";

    $result = $conn->query($sql);
    
    

    if ($result) {
        echo "<script type='text/javascript'>";
        echo "alert('นำสินค้าเข้าตระกร้าสินค้าแล้ว');";
        echo "window.location = 'store.php'; ";
        echo "</script>";
    } else {
    
    echo "การแทรกล้มเหลว: " . $conn->error;
    }

?>

