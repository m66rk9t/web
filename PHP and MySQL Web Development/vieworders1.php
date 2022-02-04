<?php
$doc_root = $_SERVER['DOCUMENT_ROOT'];
?>
<!DOCTYPE html>
<html>

<head>
    <title>Bob's Auto Parts - Order Results</title>
    <meta charset="utf-8" />
</head>

<body>
    <h1>Bob's Auto Parts</h1>
    <h2>Customer Orders</h2>
    <?php
    $orders = file("$doc_root/../data/orders/orders.txt");
    $order_counts = count($orders);
    if ($order_counts == 0){
        echo "<p><strong>No orders pending.Please try again later.</strong></p>";
        exit;
    }
    for ($i = 0; $i < $order_counts; $i++)
        echo $orders[$i]."<br >";
    ?>
</body>

</html>
