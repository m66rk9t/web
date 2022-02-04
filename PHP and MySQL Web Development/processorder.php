<?php
#create variables
$tireqty = (int)$_POST["tireqty"];
$oilqty = (int)$_POST["oilqty"];
$sparkqty = (int)$_POST["sparkqty"];
$find = $_POST["find"];
$address = preg_replace('/\t|\R/', ' ', $_POST['address']);#important
$doc_root = $_SERVER["DOCUMENT_ROOT"];
$date = date("H:i, jS F Y");
?>
<!DOCTYPE html>
<html lang="zh">

<head>
    <title>Bob's Auto Parts - Order Results</title>
    <meta charset="utf-8" />
</head>

<body>
    <h1>Bob's Auto Parts</h1>
    <h2>Order Results</h2>
    <?php
    echo "<p><strong>Order processed at " . $date . "</strong></p>";
    echo "Your order as follows:";

    #create variables
    $totalqty = 0;
    $totalamount = 0.00;

    #define the price
    define('TIREPRICE', 100);
    define('OILPRICE', 10);
    define('SPARKPRICE', 4);

    #calculate the total quantity
    $totalqty = @($tireqty + $oilqty + $sparkqty);
    echo "<p>Items ordered: " . $totalqty . "</p>";
    if ($totalqty === 0) {
        echo "<p>You did not order anything on the previous page!</p>";
        exit;
    } else {
        if ($tireqty > 0)
            echo htmlspecialchars($tireqty) . " tires.<br />";
        if ($oilqty > 0)
            echo htmlspecialchars($oilqty) . " bottles of oil.<br />";
        if ($sparkqty > 0)
            echo htmlspecialchars($sparkqty) . " spark plugs.<br />";
    }

    #calculate the discount of the tires
    if ($tireqty < 10)
        $discount = 0;
    else if (($tireqty >= 10) && ($tireqty <= 49))
        $discount = 5;
    else if (($tireqty >= 50) && ($tireqty <= 99))
        $discount = 10;
    else
        $discount = 15;

    #print the results of the order
    $totalamount = @($tireqty * TIREPRICE * (1 - $discount * 0.01) +
        $oilqty * OILPRICE +
        $sparkqty * SPARKPRICE);
    echo "Subtotal: $" . number_format($totalamount, 2) . "<br />";
    $taxrate = 0.10;
    $totalamount *= (1 + $taxrate);
    echo "Total including tax: " . number_format($totalamount, 2) . "<br />";

    #print the way to find Bob's
    switch ($find) {
        case "a":
            echo "<p>Regular customer</p>";
            break;
        case "b":
            echo "<p>Customer referred by TV advert.</p>";
            break;
        case "c":
            echo "<p>Customer referred by phone directory.</p>";
            break;
        case "d":
            echo "<p>Customer referred by word of mouth</p>";
            break;
        default:
            echo "<p>We do not know how this customer found us.</p>";
            break;
    }

    #print the address
    echo "<p>Address to ship to is " . htmlspecialchars($address) . "</p>";

    #combine the order information
    $orderinfo = $date . "\t" . $tireqty . " tires \t" . $oilqty . " bottle(s) of oil \t"
        . $sparkqty . " spark plugs \t$" . $totalamount
        . "\t" . $address . "\n";

    #open file for appending
    $doc_root = $_SERVER["DOCUMENT_ROOT"];
    @$fp = fopen("$doc_root/../data/orders/orders.txt", "ab");
    if (!$fp) {
        echo "<p><strong>Your order could not be processed at this time,
        Please try again later.</strong></p>";
        exit;
    }
    flock($fp, LOCK_EX);
    fwrite($fp, $orderinfo, strlen($orderinfo));
    flock($fp, LOCK_UN);
    fclose($fp);
    echo "<p><strong>Order written.</strong></p>";
    ?>
</body>

</html>
