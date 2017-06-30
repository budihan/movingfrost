<?php
$sql = "SELECT * FROM reserveringen";
if(!$result = mysqli_query($db, $sql)){
    echo"Error : $sql" .  mysqli_error($db);
}

$reservering = [];
//zet de rijen van de database in de reservering array, doe dit tot er geen rijen meer zijn
while ($row = mysqli_fetch_assoc($result)){
    $reservering[] = $row;
}
$rowNumber = 1;
mysqli_close($db);
?>