<?php
// set the expiration data to one hour ago
setcookie("user", "", time() - 3600);
?>
<html>
<body>
    <?php
    echo "Cookie 'user' is deleted.";
    ?>
</body>
</html>
