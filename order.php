<?php
    include('menubar.php');
    include('server.php');
    $u_id = $_SESSION['user_id'];
 
    $sql = "SELECT username, password,email FROM member_tb WHERE username = '$u_id'";

    $sql = "SELECT products.img,products.ProductID, products.ProductName,sum(products.Price) AS total
        FROM orderdetails 
        INNER JOIN products ON orderdetails.ProductID = products.ProductID
        WHERE username = '$u_id'";
    $result = $conn->query($sql);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PAYMENT</title>
    <link rel="stylesheet" href="order.css">
</head>
<body>
    <div class="payment">
        <div class="paymentmo">
            <h2>ช่องทางชำระเงิน</h2>
            <h3 class="headbank">ธนาคาร</h3>
            <div class="paymentgrid">
                <div class="bank">
                    <div class="bankmo">
                        <img src="image/another/bank1.png" alt="">
                    </div>
                    <div class="bankmo">
                        <img src="image/another/bank2.png" alt="">
                    </div>
                </div>

                <div class="banktext">
                    <h3>ธนาคารกรุงไทย</h3> 
                    <h4 class="hl">เลขบัญชี 111-111-111 นายดวงตะวัน ช่วงโชติ </h4> 
                    <h4 class="hl">โอนได้ 24 ชั่วโมง</h4>
                    <br>
                    <br>

                    <h3>ธนาคารกสิกรไทย</h3> 
                    <h4 class="hl">เลขบัญชี 2222-222-222 นายดสุปราณี วงษ์ </h4> 
                    <h4 class="hl">โอนได้ 24 ชั่วโมง</h4>
                </div>
            </div>
        </div>
    </div>
    <div class="total">
        <?php $row = $result->fetch_assoc(); 
            echo 'ราคารวมทั้งหมด'.'&nbsp'.$row['total'].'&nbsp'.'บาท'; ?>
    </div>

    <div class="paymentpic">
        <label>หลักฐานการโอนเงิน</label><br><br>
            <input type="file" name="paypic" id="">
        <button type="submit" name="paysub">ยืนยัน</button>
    </div>

    
</body>
</html>