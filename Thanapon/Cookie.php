<!-- Test Cookie PHP -->
<?php
    $cookie_name = "ThanaDome";
    $cookie_value = "CN334";
    setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/");
?>

<html>
    <body>
    <?php
        if(!isset($_COOKIE[$cookie_name])) {
        echo "Cookie named '" . $cookie_name . "' is not set!";
        } else {
        echo "Cookie '" . $cookie_name . "' is set!<br>";
        echo "Value is: " . $_COOKIE[$cookie_name];
        }
    ?>
    </body>
</html>

<!-- Delete Cookie -->
<?php
    setcookie("user", "", time() - 3600);
?>
<html>
    <body>
        <?php
        echo "Cookie 'user' is deleted.";
        ?>
    </body>
</html>