<?php
setcookie("test_cookie", "test", time() + 3600, '/');
?>
<html>
<body>
    <?php
    if (count($_COOKIE) > 0) {
        echo "Cookie are enabled.";
    } else {
        echo "Cookie are disabled.";
    }
    ?>
</body>
</html>