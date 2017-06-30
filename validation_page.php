<?php
//set server connection data
require_once("webservice/db.php");

//Post-input into variables, check user input and insert into database
require_once("webservice/insert.php");

?>
<!DOCTYPE html>
<html>
<head>
    <title>Moving Frost</title>
    <meta charset="utf-8" />
    <link rel="stylesheet" href="css/font-awesome.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css"/>

    <link href='https://fonts.googleapis.com/css?family=Roboto:300,400,700' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" type="text/css" href="css/style.css?<?php echo time(); ?>">
</head>

<body>
<nav class="navbar navbar-inverse navbar-static-top">
    <div class="container">
        <div class="navbar-header">
            <a class="navbar-brand" href="index.php">Moving Frost</a>
        </div>
        <ul class="nav navbar-nav">
            <li class="active"><a href="index.php">Home</a></li>
            <li><a href="about_page.php">About</a></li>
            <li><a href="music_page.php">Music</a></li>
            <li><a href="art_page.php">Art</a></li>
            <li><a href="tour_page.php">Tour</a></li>
            <li><a href="reserveer_page.php">Reserveer</a></li>
        </ul>
        <ul class="nav navbar-nav navbar-right">
            <li><a href="#"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
        </ul>
    </div>
</nav>
<section class="container">
    <div class="row">
        <div class="col-sm-12">
            <h3>Ingevoerde gegevens</h3>
            <table>
                <tr>
                    <td>Naam:</td>
                    <td><?php echo "$naam" ?></td>
                </tr>
                <tr>
                    <td>Email:</td>
                    <td><?php echo "$email" ?></td>
                </tr>
                <tr>
                    <td>Telefoonnummer:</td>
                    <td><?php echo "$telefoonnummer" ?></td>
                </tr>
                <tr>
                    <td>Bedrijf:</td>
                    <td><?php echo "$bedrijf" ?></td>
                </tr>
                <tr>
                    <td>Plaats:</td>
                    <td><?php echo "$plaats" ?></td>
                </tr>
                <tr>
                    <td>Adres:</td>
                    <td><?php echo "$adres" ?></td>
                </tr>
                    <tr>
                    <td>Postcode:</td>
                    <td><?php echo "$postcode" ?></td>
                </tr>
                <tr>
                    <td>Datum:</td>
                    <td><?php echo "$datum" ?></td>
                </tr>
            </table>

            <br/>Bedankt voor uw booking, er wordt z.s.m. contact met u gemaakt.
        </div>

    </div>
    <div class="row text-center">
        <a class="btn btn-default" href="index.php" role="button">Terug</a>
    </div>
</section>
<footer class="container">
    <div class="row">
        <p class="col-sm-4">&copy; 2016 Moving Frost</p>
        <ul class="col-sm-8">
            <li class="col-sm-1">
                <a href="https://www.facebook.com/movingfrost/?fref=ts" target="_blank"><i id="" class="fa fa-facebook fa-2x"></i></a>
            </li>
            <li class="col-sm-1">
                <a href="https://www.instagram.com/movingfrost/?hl=en" target="_blank"><i id="" class="fa fa-instagram fa-2x"></i></a>
            </li>
            <li class="col-sm-1">
                <a href="https://soundcloud.com/moving-frost" target="_blank"><i id="" class="fa fa-soundcloud fa-2x"></i></a>
            </li>
        </ul>
    </div>
</footer>
</body>

</html>
