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
    $current_dir = "YourDirectory";
    $dir = opendir($current_dir);
    
    echo "<p>Upload directory is ".$current_dir."</p>";
    echo "<p>Directory Listing:</p>\n<ul>\n";

    while (false !== ($file = readdir($dir))) {
        if ($file != "." && $file != "..") {
            echo "<li>".$file."</li>\n";
        }
    }
    echo "</ul>";
    closedir($dir);
    ?>
</body>

</html>