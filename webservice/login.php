<?php
    require_once 'db.php';
    session_start();
        //if admin already logged in, go to admin_page.php
        if(isset($_SESSION['id'])){
            header("Location: ../admin_page.php");
            exit;
        }

        //on post login, check the credentials
        if(isset($_POST['login'])){
            //retrieve values and store in variables
            //htmlspecialchars convert special characters to HTML entities
            $username = mysqli_real_escape_string($db, $_POST['username']);
            $password = $_POST['password'];
            $errors=[];

            if ($username ==''){
                $errors['username'] = 'Voer een username in!';
            }

            //go on if $errors is empty (if username is filled in)
            if (empty($errors)){
                //get data from the username from DB
                $query = "SELECT * FROM users WHERE username='$username' LIMIT 1";
                $result = mysqli_query($db, $query);
                $row = mysqli_fetch_array($result);

                $id = $row['user_id'];
                $db_password = $row['password'];
                $db_username = $row['username'];

                //validate password
                if (password_verify($password, $db_password)){
                    //set session variable, redirect and exit script
                    $_SESSION['id'] = $id;
                    $_SESSION['username'] = $username;
                    header("Location: ../admin_page.php");
                    exit;
                } else {
                    $message = "Gegevens incorrect ingevuld.";
                }
            } else {
                $message = "Gegevens incorrect ingevuld.";
            }

            //make query: select the row where username = username_input

            //perform query on database

            //store/fetch selected row as array

            //store selected id-database as id and password-database as db_password


            //make sure the password-input equals password-database,
}


?>
<!DOCTYPE html>
<html>
<head>
    <title>Moving Frost</title>
    <meta charset="utf-8" />
    <link rel="stylesheet" href="../css/font-awesome.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css"/>

    <link href='https://fonts.googleapis.com/css?family=Roboto:300,400,700' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" type="text/css" href="../css/style.css?<?php echo time(); ?>">
</head>

<body>
<nav class="navbar navbar-inverse navbar-static-top">
    <div class="container">
        <div class="navbar-header">
            <a class="navbar-brand" href="../index.php">Moving Frost</a>
        </div>
        <ul class="nav navbar-nav">
            <li><a href="../index.php">Home</a></li>
            <li><a href="../about_page.php">About</a></li>
            <li><a href="../music_page.php">Music</a></li>
            <li><a href="../art_page.php">Art</a></li>
            <li><a href="../tour_page.php">Tour</a></li>
            <li><a href="../reserveer_page.php">Reserveer</a></li>
        </ul>
        <ul class="nav navbar-nav navbar-right">
            <li class="active"><a href="login.php"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
        </ul>
    </div>
</nav>
<div class="container">
<div class="row">
    <div class="col-md-6">
        <form method="post">
            <input type="text" name="username" placeholder="username">
            <input type="password" name="password" placeholder="password">
            <button type="submit" name="login">Login</button>
        </form>
    </div>
    <div class="col-md-6">

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

