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
    $fp = fopen("$doc_root/../data/orders/orders.txt", 'rb');
    flock($fp, LOCK_SH);
    if (!$fp) {
        echo "<p><strong>No orders pending.Please try again later.</strong></p>";
        exit;
    }
    while (!feof($fp)) {
        $order = fgets($fp);
        echo htmlspecialchars($order) . "<br />";
    }
    flock($fp, LOCK_UN);
    fclose($fp);
    ?>
</body>

</html>
