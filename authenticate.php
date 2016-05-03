<?php
   
    if (session_status() == PHP_SESSION_NONE) {
        session_start();
    }

    $_SESSION['previous'] = array();
    $_SESSION['invalid'] = array();
    $_SESSION['msg'] = '';

    $methodType = $_SERVER['REQUEST_METHOD'];


    if($methodType === 'POST') {


        if(isset($_POST["login"]) && isset($_POST["password"]) ) {

            $loginEmpty = false;
            $passwordEmpty = false;

            $login = $_POST["login"];
            $password = $_POST["password"];

            if(empty($login)) {
                $loginEmpty = true;
                $_SESSION['invalid']['login'] = true;
                $_SESSION['previous']['password'] = $_POST['password'];
            }

            if(empty($password)) {
                $passwordEmpty = true;
                $_SESSION['invalid']['password'] = true;
                $_SESSION['previous']['login'] = $_POST['login'];
            }

            if(!$loginEmpty && !$passwordEmpty) {
                // then check for the correct value

                // HERE'S WHERE YOU'D GET THE VALUES FROM THE DB
                if($login == "patrick" && $password == "123") {
                    // sucess
                    $_SESSION['username'] = $login;
                    $_SESSION['firstname'] = "Arron";
                    $_SESSION['lastname'] = "Ferguson";
                    $_SESSION['email'] = "arron_ferguson@bcit.ca";
                    $_SESSION['loggedin'] = true;

                    //$sid = session_id();
                    header("Location: restrictedpage.php");


                } else {
                    $_SESSION['msg'] = 'Wrong login or password.';
                    header("Location: restrictedpage.php");
                }

            } else {
                header("Location: login.php");
            }


        } else {

            // these fields weren't present but they should have been ... potential hacking???
            // just redirect to same page
            header("Location: login.php");
        }



    } else {
        // only posts allowed. Just redirect to same page
        header("Location: login.php");
    }


?>

