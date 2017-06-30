<?php
    //check if admin is logged in
    require_once("webservice/adminSession.php");

    //lees de data waar input = naam
    $input = $_POST['input'];

    //Delete query
    $delete = "DELETE FROM reserveringen WHERE naam = '$input'";
    if(!$result = mysqli_query($db, $delete)){
        echo"Error : $delete" .  mysqli_error($db);
    }
    mysqli_close($db);
    header("Location: delete_page.php");
?>