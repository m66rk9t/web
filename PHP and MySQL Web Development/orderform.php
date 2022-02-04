<!DOCTYPE html>
<html lang="zh">

<head>
    <title>Bob's Auto Parts - Order Form</title>
    <meta charset="utf-8" />
</head>

<body>
    <form action="processorder.php" method="post">
        <table style="border: 0px;">
            <tr style="background-color: #cccccc;">
                <th style="width: 150px; text-align:center">Items</th>
                <th style="width: 150px; text-align:center">Quantity</th>
            </tr>
            <tr>
                <td>Tires</td>
                <td><input type="text" name="tireqty" size="3" maxlength="3" /></td>
            </tr>
            <tr>
                <td>Oil</td>
                <td><input type="text" name="oilqty" size="3" maxlength="3" /></td>
            </tr>
            <tr>
                <td>Spark Plugs</td>
                <td><input type="text" name="sparkqty" size="3" maxlength="3" /></td>
            </tr>
            <tr>
                <td>How did you find Bob's?</td>
                <td>
                    <select name="find">
                        <option value="a">I'm a regular customer</option>
                        <option value="b">TV advertising</option>
                        <option value="c">Phone directory</option>
                        <option value="d">Word of mouth</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td>Shipping Address</td>
                <td><input type="text" name="address" size="50" maxlength="200"/></td>
            </tr>
            <tr>
                <td colspan="2" style="text-align: center;"><input type="submit" value="Submit Order" /></td>
            </tr>
        </table>
    </form>
</body>

</html>