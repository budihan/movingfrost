<?php
require_once("webservice/db.php");
require_once("webservice/tour.php")
?>
<!DOCTYPE html>
<html>
<head>
    <title>Moving Frost</title>
    <meta charset="utf-8" />
    <link rel="stylesheet" href="css/font-awesome.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css"/>

    <link href='https://fonts.googleapis.com/css?family=Roboto:300,400,700' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" type="text/css" href="css/style.css">
</head>

<body>
<nav class="navbar navbar-inverse navbar-static-top">
    <div class="container">
        <div class="navbar-header">
            <a class="navbar-brand" href="index.php">Moving Frost</a>
        </div>
        <ul class="nav navbar-nav">
            <li><a href="index.php">Home</a></li>
            <li><a href="about_page.php">About</a></li>
            <li><a href="music_page.php">Music</a></li>
            <li><a href="art_page.php">Art</a></li>
            <li class="active"><a href="tour_page.php">Tour</a></li>
            <li><a href="reserveer_page.php">Reserveer</a></li>
        </ul>
        <ul class="nav navbar-nav navbar-right">
            <li><a href="webservice/login.php"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
        </ul>
    </div>
</nav>
<section class="container">
    <div class="row">
        <div class="col-sm-12">
            <table class="table table-striped">
                <tr>
                    <th>#</th>
                    <th>Naam</th>
                    <th>Email</th>
                    <th>Telefoonnummer</th>
                    <th>Bedrijf</th>
                    <th>Adres</th>
                    <th>Plaats</th>
                    <th>Postcode</th>
                    <th>Datum</th>
                </tr>
                <?php
                foreach ($reservering as $tmp)
                {
                    ?>
                    <tr>
                        <td><?= $rowNumber++ ?></td>
                        <td><?= $tmp["naam"]?></td>
                        <td><?= $tmp["email"]?></td>
                        <td><?= $tmp["telefoonnummer"]?></td>
                        <td><?= $tmp["bedrijf"]?></td>
                        <td><?= $tmp["adres"]?></td>
                        <td><?= $tmp["plaats"]?></td>
                        <td><?= $tmp["postcode"]?></td>
                        <td><?= $tmp["datum"]?></td>
                    </tr>
                    <?php
                }
                ?>
            </table>
        </div>
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
