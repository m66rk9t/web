<!DOCTYPE html>
<html lang="zh">

<head>
    <meta charset="utf-8" />
    <title>Browser Directories</title>
</head>

<body>
    <h1>Browsing</h1>
    <?php
    //Replace YourDirectory with your directory
    $dir = "YourDirectory";
    $files1 = scandir($dir);
    $files2 = scandir($dir, 1);
    
    echo "<p>Upload directory is ".$dir."</p>";
    echo "<p>Directory Listing in alphabetical order, ascending:</p>\n<ul>\n";

    foreach ($files1 as $file) {
        if ($file != "." && $file != "..") {
            echo "<li>".$file."</li>";
        }
    }
    echo "</ul>";

    echo "<p>Upload directory is ".$dir."</p>";
    echo "<p>Directory Listing in alphabetical order, descending:</p>\n<ul>\n";

    foreach ($files2 as $file) {
        if ($file != "." && $file != "..") {
            echo "<li>".$file."</li>";
        }
    }
    echo "</ul>";
    ?>
</body>

</html>