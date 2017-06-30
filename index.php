<!DOCTYPE html>
<html>
<head>
    <title>Moving Frost</title>
    <meta charset="utf-8" />
    <!-- Font awesome -->
    <link rel="stylesheet" href="css/font-awesome.css">
   <!-- modal -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css"/>
    <!-- Datepicker -->
    <script src="includes/jquery-3.1.1.min.js"></script>
    <script src="js/audioPlayer.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <!-- font -->
    <link href='https://fonts.googleapis.com/css?family=Roboto:300,400,700' rel='stylesheet' type='text/css'>
    <!-- style -->
    <link rel="stylesheet" type="text/css" href="css/style.css?<?php echo time(); ?>">
</head>

<body>
<!-- navigation -->
<nav class="navbar-static-top">
        <ul class="topnav " id="myTopnav">
            <li class="active"><a href="index.php" id="header">Moving Frost</a></li>
            <li><a href="about_page.php">About</a></li>
            <li><a href="music_page.php">Music</a></li>
            <li><a href="art_page.php">Art</a></li>
            <li><a href="tour_page.php">Tour</a></li>
            <li><a href="reserveer_page.php">Reserveer</a></li>
            <li id="login"><a href="" data-toggle="modal" data-target="#myModal" ><span class="glyphicon glyphicon-log-in"></span> Login</a></a></li>
            <li class="icon">
                <a href="javacsript:void(0);" style="font-size:15px;" onclick="collapseNavbar()">☰</a>
            </li>
        </ul>
</nav>
<!-- Modal -->
<div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog modal-sm">

        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Admin login</h4>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-xs-12">
                        <div class="well">
                            <form id="loginForm" action="webservice/login2.php" method="POST">
                                <div class="form-group">
                                    <label for="username" class="control-label">Username</label>
                                    <input type="text" class="form-control" id="username" name="username" value="" required="" title="Please enter you username" placeholder="username">
                                    <span class="help-block"></span>
                                </div>
                                <div class="form-group">
                                    <label for="password" class="control-label">Password</label>
                                    <input type="password" class="form-control" id="password" name="password" value="" required="" title="Please enter your password" placeholder="password">
                                    <span class="help-block"></span>
                                </div>
                                <div id="loginErrorMsg" class="alert alert-error hide">Wrong username or password</div>

                                <button type="submit" name="login" class="btn btn-default btn-block">Login</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>
<!-- banner -->
<section class="jumbotron">
    <div class="container">
        <div class="text-left col-sm-6">
            <h3>Boek nu de band voor<br> en avond live muziek!</h3>
            <a href="reserveer_page.php" class="btn btn-default btn-lg" role="button">Boek nu!</a><br><br><br>
        </div>
        <div class="text-right col-sm-6">
            <audio src="" controls id="audioPlayer">
                Sorry, your browser doesn't support HTML5!
            </audio>
            <ul id="playlist">
                <li class="current-song"><a href="img/mp3/Fickle_mind.mp3">FICKLE MIND</a></li>
                <li><a href="img/mp3/Fly_safe.mp3">FLY SAFE</a></li>
                <li><a href="img/mp3/Alien.mp3">ALIEN</a></li>
                <li><a href="img/mp3/Titan.mp3">TITAN</a></li>
                <li><a href="img/mp3/Reset.mp3">RESET</a></li>
            </ul>
            <script>
                audioPlayer();
            </script>
        </div>
    </div>
</section>

<!-- content area -->
<section class="container">
    <div class="well well-sm text-center">THE BAND</div>
    <div class ="row">
        <div class="col-sm-6">
            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque efficitur eros non arcu tristique tristique. Aliquam et metus quis lorem dictum finibus tempor quis lectus. Vestibulum feugiat mollis velit in interdum. Suspendisse potenti. Etiam ultricies elit eu scelerisque fringilla. Maecenas tristique, felis in molestie fermentum, libero nibh interdum mi, eu vulputate dolor lacus ac lacus. Nulla sollicitudin turpis vitae massa laoreet porta. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Donec ornare ex ac nisl tristique aliquet. Cras at varius dolor, a porta lacus. Vestibulum venenatis purus ac ante egestas facilisis. Maecenas venenatis feugiat ante et vestibulum. Suspendisse id mauris accumsan, vestibulum elit eget, pellentesque velit. Cras a sem fermentum, auctor lectus et, vestibulum nisl. Pellentesque nec euismod risus, quis sollicitudin purus.
            <br><br>
            Etiam id rhoncus enim. Praesent commodo ac turpis a congue. Duis eu condimentum lorem, ac facilisis purus. Maecenas eleifend euismod est at mattis. Vivamus ultrices euismod luctus. Fusce ornare interdum dolor nec ornare. Ut quis interdum purus.
            <br><br>
            Donec et purus ac tortor congue vestibulum vitae vel nisi. Integer fermentum ex nec lorem imperdiet, id tempor augue posuere. Aliquam tempus bibendum metus, ut rutrum sapien congue ac. Aliquam a iaculis felis. Quisque ut ipsum sed mauris lobortis venenatis. Praesent elementum lobortis sapien eu rutrum. Maecenas ut posuere magna. Nullam eget convallis dolor.
        </div>
        <div class="col-sm-6">
            <img src="img/band.jpg">
        </div>
    </div>
</section>

<!-- Footer -->
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
