<?php

    if (session_status() == PHP_SESSION_NONE) {
        session_start();
    }
    // http://stackoverflow.com/questions/3907685/restrict-access-to-page-with-php
    // if not logged in, redirect
    if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] != 'true') {
        header("Location: login.php");
    };

?>

    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">

        <title>Admin Page</title>

        <link href="css/Admin_Page_CSS/css/bootstrap.min.css" rel="stylesheet">

        <!-- Custom CSS -->
        <link href="css/Admin_Page_CSS/css/shop-item.css" rel="stylesheet">
        <style>


        </style>
    </head>

    <body>
        <!-- Navigation -->
        <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
            <div class="container">
                <!-- Brand and toggle get grouped for better mobile display -->
                <!-- Top Bar div -->
                <div class="navbar-header">
                    <!-- Top Bar -->
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <!-- Top Bar Title -->
                    <a class="navbar-brand" href="index.php">Main Website</a>
                </div>
                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <!-- Nav link reference pages -->
                    <ul class="nav navbar-nav">

                        

                        <li>
                            <a>
                                <form action="noAJAX-logout.php" method="post">
                                    <fieldset>
                                        <input id="logoutbutton" type="submit" value="Logout" />
                                        <input type="hidden" name="logout" value="true" />
                                    </fieldset>
                                </form>
                            </a>
                        </li>
                    </ul>


                </div>

                <!-- /.navbar-collapse -->
            </div>
            <!-- /.container -->
        </nav>

        <!-- Page Content -->
        <div class="container">

            <div class="row">
                <!-- Product List, shop name -->
                <div class="col-md-3">
                    <p class="lead">Admin Page</p>
                    <div class="list-group">
                        <!-- active to show what page is current -->
                        <a href="#" class="list-group-item" id="serviceButton">Add a Laptop</a>
                        <a href="#" class="list-group-item" id="adminAccButton">Admin Account Manager</a>
                    </div>
                </div>

                <div class="col-md-9" id="tableArea">

                    <div class="thumbnail">
                        <!-- product photo-->

                        <!-- product caption -->
                        <div class="caption-full">
                            <!-- Product infomation -->

                            <h4>Click a button to the left to view a table.
                           
                        </h4>

                        </div>

                    </div>

                </div>

            </div>
            <!-- /.container -->

            <div class="container">

                <hr>

                <!-- Footer -->
                <footer>
                    <div class="row">
                        <div class="col-lg-12">
                            <p>Copyright &copy; Laptop Finder 2016</p>
                        </div>
                    </div>
                </footer>

            </div>
            
                <p>You can only see this page if you are logged in.</p>

                

                

                <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
                <script>
                    $(document).ready(function() {

                    });

                </script>

                <script src="js/Admin_Page_JS/js/jquery.js"></script>

                <!-- Bootstrap Core JavaScript -->
                <script src="js/Admin_Page_JS/js/bootstrap.min.js"></script>
                <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
                <script>
                    $(document).ready(function() {

                        $('#serviceButton').click(function() {
                            $('#tableArea').load('laptopAdderInterface.html');
                            //$('#tableArea').load('./laptopAdder')
                        });
                        $('#adminAccButton').click(function() {
                            $('#tableArea').load('AdminEditor.html');
                        });

                    });

                </script>

    </body>

    </html>
