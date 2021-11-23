<!DOCTYPE html>
<html>

<head>
    <title>Vlidate Phone Number</title>
    <meta charset="utf-8" />
</head>

<body>
    <?php
    $pn = $_POST["userpn"];
    if (preg_match("/^\d{3}-\d{3}-\d{4}$/", $pn))
        echo "<script type='text/javascript'>alert('Correcr format!');</script>";
    else
        echo "<script type='text/javascript'>alert('Wrong format!');</script>";
    ?>
</body>

</html>