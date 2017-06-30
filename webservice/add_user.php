<?php
    //add admin user once
    require_once 'db.php';
    $username = 'movingfrost';
    $password = password_hash('banaan123', PASSWORD_DEFAULT);

    $sql = "INSERT INTO users(username, password)
            VALUES ('$username', '$password')";

    mysqli_query($db, $sql);

    mysqli_close($db);
?>