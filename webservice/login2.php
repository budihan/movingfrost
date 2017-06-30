<?php
    require_once 'db.php';
    session_start();
        if(isset($_SESSION['id'])){
            header("Location: ../admin_page.php");
        }


        if(isset($_POST['login'])){
            //store user input, htmlspecialchars acts as a security measure
            $username = mysqli_real_escape_string($db, $_POST['username']);
            $password = mysqli_real_escape_string($db, $_POST['password']);
            $errors=[];

            if ($username ==''){
                $errors['username'] = 'Voer een username in!';
            }
//            //password md5 encryption
//            $password = md5($password);
            if (empty($errors)){
                $sql = "SELECT * FROM users WHERE username='$username' LIMIT 1";
                $query = mysqli_query($db, $sql);
                $row = mysqli_fetch_array($query);
                $id = $row['user_id'];
                $db_password = $row['password'];
                $db_username = $row['username'];

                if (password_verify($password, $db_password)){
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