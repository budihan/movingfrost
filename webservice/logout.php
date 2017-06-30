<?php
    session_start();

    //Destroys all data registered to a session
    session_destroy();
?>
<!DOCTYPE html>
<html>
    <head>

    </head>

    <body>
<!--    refresh and re-direct to login.php page-->
    <meta http-equiv="refresh" content="1;url=login.php">
    </body>
</html>