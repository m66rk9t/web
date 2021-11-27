<!DOCTYPE html>
<html>

<head>
    <title>Shopping List</title>
    <meta charset="utf-8" />
</head>

<body>
    <table border="1">
        <tr>
            <th colspan="5">商品清单</th>
        </tr>
        <tr>
            <td colspan="2">商品名</td>
            <td colspan="2">金额</td>
            <?php
            $Goods = array(
                "2.39" => "4个25瓦的灯泡",
                "4.29" => "8个25瓦的灯泡",
                "3.95" => "4个25瓦的长寿命灯泡",
                "7.49" => "8个25瓦的长寿命灯泡"
            );
            $ForPay = $_POST["bulbs"];
            $Name = $_POST["consumer"];
            $Payment = $_POST["payment"];
            $Cost = 0;
            foreach ($ForPay as $val1) {
                foreach ($Goods as $key => $val2) {
                    if ($val1 == $key) {
                        echo "<tr><td colspan='2'>$val2</td><td colspan='2'>$val1</td></tr>";
                        settype($val1, "double");
                        $Cost += $val1;
                    }
                }
            }
            $Cost *= 1.062;
            echo "<tr><td>税后</td><td colspan='4'>$Cost</td></tr>";
            echo "<tr><td colspan='2'>姓名：$Name</td><td colspan='3'>支付方式：$Payment</td></tr>";
            ?>
    </table>
</body>

</html>