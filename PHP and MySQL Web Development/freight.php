<!DOCTYPE html>
<html>

<head>
    <title>Bob's Auto Parts - Freights Costs</title>
</head>

<body>
    <table>
        <tr>
            <th style="background: #cccccc; text-align:center">Distance</th>
            <th style="background: #cccccc; text-align:center">Costs</th>
        </tr>

        <?php
        for ($distance = 50; $distance <= 250; $distance += 50) {
            echo "<tr><td style=\"text-align: right\">" . $distance . "</td>
                <td style=\"text-align: right\">" . ($distance / 10) . "</td></tr>\n";
        }
        ?>

    </table>
</body>

</html>