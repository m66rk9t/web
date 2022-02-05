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
    $dir = dir("YourDirectory");
    
    echo "<p>Handle is ".$dir->handle."</p>";
    echo "<p>Upload directory is ".$dir->path."</p>";
    echo "<p>Directory Listing:</p>\n<ul>\n";

    while (false !== ($file = $dir->read())) {
        if ($file != "." && $file != "..") {
            echo "<li>".$file."</li>\n";
        }
    }
    echo "</ul>";
    $dir->close();
    ?>
</body>

</html>