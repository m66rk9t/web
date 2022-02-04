<?php
#gain the document root
$doc_root = $_SERVER['DOCUMENT_ROOT'];
?>
<!DOCTYPE html>
<html>

<head>
    <title>Bob's Auto Parts - Order Results</title>
    <meta charset="utf-8" />
    <!--css-->
    <style type="text/css">
        table, th, td{
            border-collapse: collapse;
            border: 1px solid black;
            padding: 6px;
        }
        th{background-color: #ccccff;}
    </style>
</head>

<body>
    <h1>Bob's Auto Parts</h1>
    <h2>Customer Orders</h2>
    <?php
    #open the orders file
    $orders = file("$doc_root/../data/orders/orders.txt");
    
    #count the number of orders in the array
    $order_counts = count($orders);
    if ($order_counts == 0){
        echo "<p><strong>No orders pending.Please try again later.</strong></p>";
        exit;
    }
    
    #print the head of table
    echo "<table>\n";
    echo "<tr>
            <th>Order Date</th>
            <th>Tires</th>
            <th>Oil</th>
            <th>Spark Plugs</th>
            <th>Total</th>
            <th>Address</th>
          </tr>\n";

    #read information from orders array
    for ($i = 0; $i < $order_counts; $i++){
        $line =  explode("\t", $orders[$i]);
        $line[1] = intval($line[1]);
        $line[2] = intval($line[2]);
        $line[3] = intval($line[3]);
        echo "<tr>
                <td>".$line[0]."</td>
                <td style=\"text-align: right;\">".$line[1]."</td>
                <td style=\"text-align: right;\">".$line[2]."</td>
                <td style=\"text-align: right;\">".$line[3]."</td>
                <td style=\"text-align: right;\">".$line[4]."</td>
                <td>".$line[5]."</td>
              </tr>\n";
    }
    echo "</table>";
    ?>
</body>

</html>
