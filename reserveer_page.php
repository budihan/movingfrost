<!DOCTYPE html>
<html>
<head>
    <title>Moving Frost</title>
    <meta charset="utf-8" />
    <link href = "https://code.jquery.com/ui/1.10.4/themes/ui-lightness/jquery-ui.css"
          rel = "stylesheet">
    <script src = "https://code.jquery.com/jquery-1.10.2.js"></script>
    <script src = "https://code.jquery.com/ui/1.10.4/jquery-ui.js"></script>

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
            <li><a href="index.php">Home</a></li>
            <li><a href="about_page.php">About</a></li>
            <li><a href="music_page.php">Music</a></li>
            <li><a href="art_page.php">Art</a></li>
            <li><a href="tour_page.php">Tour</a></li>
            <li class="active"><a href="reserveer_page.php">Reserveer</a></li>
        </ul>
        <ul class="nav navbar-nav navbar-right">
            <li><a href="webservice/login.php"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
        </ul>
    </div>
</nav>
<div class="container">
    <div class="row">
        <div class="col-md-6">
            <form action="validation_page.php" method="post" class="form-horizontal">
                <div class="form-group">
                    <label for="naam">Naam contactpersoon:</label>
                    <input type="text" name="name" class="form-control" id="naam" placeholder="Naam" required="">
                </div>
                <div class="form-group">
                    <label for="email">Email:</label>
                    <input type="email" name="email" class="form-control" id="email" placeholder="Email" required="">
                </div>
                <div class="form-group">
                    <label for="telefoonnummer">Telefoonnummer</label>
                    <input type="text" value="316" name="telefoonnummer" class="form-control" id="telefoonnummer" placeholder="Telefoonnummer" required="">
                </div>
                <div class="form-group">
                    <label for="bedrijf">Naam bedrijf</label>
                    <input type="text" name="bedrijf" class="form-control" id="bedrijf" placeholder="Bedrijfsnaam">
                </div>
                <div class="form-group">
                    <label for="adres">Adres:</label>
                    <input type="text" name="adres" class="form-control" id="adres" placeholder="adres" required="">
                </div>
                <div class="form-group">
                    <label for="plaats">Plaats:</label>
                    <input type="text" name="plaats" class="form-control" id="plaats" placeholder="plaats" required="">
                </div>
                <div class="form-group">
                    <label for="postcode">Postcode:</label>
                    <input type="text" name="postcode" class="form-control" id="postcode" placeholder="postcode" required="">
                </div>
        </div>
        <div class="col-md-6">
                <div class="form-group">
                    <label for="datum">Datum:</label>
                        <input type="text" name="datum" placeholder="yyyy-mm-dd" class="form-control" id="datepicker" required="">
                        <script type="text/javascript" src="js/datePicker.js"></script>
                </div>
                <button type="submit" name="submit" class="btn btn-default">Submit</button>
            </form>
        </div>


    </div>
</div>
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
