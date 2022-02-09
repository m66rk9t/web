<?php
$locale = "en_US";
putenv("LC_ALL=" . $locale);
setlocale(LC_ALL, $locale);
$domain = 'messages';
bindtextdomain($domain, "./locale");
textdomain($domain);
?>
<!DOCTYPE html>
<html>
<head>
    <title><?php echo gettext("WELCOME_TEXT"); ?></title>
</head>

<body>
    <h1><?php echo gettext("WELCOME_TEXT"); ?></h1>
    <h2><?php echo gettext("CHOOSE_LANGUAGE"); ?></h2>
    <ul>
        <li><a href="<?php echo $_SERVER['PHP_SELF'] . "?lang=en_US"; ?>">en_US</a></li>
        <li><a href="<?php echo $_SERVER['PHP_SELF'] . "?lang =ja_JP"; ?>">ja_JP</a></li>
    </ul>
</body>

</html>