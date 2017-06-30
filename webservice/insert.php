//check and insert user input into database
<?php

//Store user input into variables
$naam           = mysqli_real_escape_string($db,$_POST['name']);
$email          = mysqli_real_escape_string($db, $_POST['email']);
$telefoonnummer = mysqli_real_escape_string($db, $_POST['telefoonnummer']);
$bedrijf        = mysqli_real_escape_string($db, $_POST['bedrijf']);
$adres          = mysqli_real_escape_string($db, $_POST['adres']);
$plaats         = mysqli_real_escape_string($db, $_POST['plaats']);
$postcode       = mysqli_real_escape_string($db, $_POST['postcode']);
$datum          = mysqli_real_escape_string($db, $_POST['datum']);

//set validation parameter
$ok = true;

//create empty error to store possible errors
$errors = [];

//check if every user input is filled in
//check name
if (empty($naam)){
    //add error message to errors array
    array_push($errors, "Geen naam ingevuld.");
    //set validation parameter to false
    $ok = false;
}

//check email
if (empty($email)){
    array_push($errors, "Geen email ingevuld.");
    $ok = false;
}

//check telefoonnummer
if (empty($telefoonnummer)){
    array_push($errors, "Geen telefoonnummer ingevuld.");
    $ok = false;
}

//check bedrijf
if (empty($bedrijf)){
    array_push($errors, "Geen bedrijf ingevuld.");
    $ok = false;
}

//check adres
if (empty($adres)){
    array_push($errors, "Geen adres ingevuld.");
    $ok = false;
}

//check plaats
if (empty($plaats)){
    array_push($errors, "Geen plaats ingevuld.");
    $ok = false;
}

//check postcode
if (empty($postcode)){
    array_push($errors, "Geen postcode ingevuld.");
    $ok = false;
}

//check datum
if (empty($datum)){
    array_push($errors, "Geen datum ingevuld.");
    $ok = false;
}

//check if submit button is clicked
if (isset($_POST['submit'])){

    //check if validation is true and no errors
    if (($ok) && empty($errors)){
        //if true, put data into database
        $sql = "INSERT INTO reserveringen  (naam, email, telefoonnummer, bedrijf, adres, plaats, postcode, datum) 
        VALUES                 ('$naam','$email', $telefoonnummer, '$bedrijf', '$adres', '$plaats', '$postcode','$datum')";

        //run query on database
        if(mysqli_query($db, $sql)){
            echo"insert succesfull";
        } else {
            echo"Error : $sql" .  mysqli_error($db);
        }
    } else {
        //if false, echo errors array
        for ($i;$i<count($errors);$i++){
            echo $errors[$i];
        }
    }


    mysqli_close($db);
}
?>