<!DOCTYPE html>

<html lang="zh">

<head>
    <title> word_table</title>
    <meta charset="utf-8" />
</head>

<body>
    <table>
        <tr>
            <th colspan="2">Word Frequency</th>
        </tr>
        <?php
        function splitter($str)
        {
            $freq = array();
            $words = preg_split("/[ \.,;:!\?]\s*/", $str);
            foreach ($words as $word) {
                $keys = array_keys($freq);
                if (in_array($word, $keys))
                    $freq[$word]++;
                else
                    $freq[$word] = 1;
            }
            return $freq;
        }
        $str = "apples are good for you, or don't you like apples? or maybe you like oranges better than apples";
        $tbl = splitter($str);
        $sorted_keys = array_keys($tbl);
        sort($sorted_keys);
        foreach ($sorted_keys as $word)
            echo "<tr><td>$word</td><td>$tbl[$word]</td></tr>";
        ?>
    </table>
</body>

</html>