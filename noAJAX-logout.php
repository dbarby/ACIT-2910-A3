<?php

    if (session_status() == PHP_SESSION_NONE) {
        session_start();
    }


    $methodType = $_SERVER['REQUEST_METHOD'];


    if($methodType === 'POST') {


        if(isset($_POST["logout"]) ) {

            // check if it's the right value
            if($_POST["logout"] === 'true') {

                // possibly any database cleanup stuff here

                // finally remove session
                session_unset();
                session_destroy();

                header("Location: index.php");


            } else {
                // should be set to true but if not ... hmm.
                header("Location: error.php");

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

