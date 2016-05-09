<<<<<<< HEAD:index3.php
<?php include 'header.php';?>
=======

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Find your perfect Laptop</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <style>
        body {
            padding-top: 50px;
            /* Required padding for .navbar-fixed-top. Remove if using .navbar-static-top. Change if height of navigation changes. */
        }

    </style>

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

<?php include 'connect.php'; ?>

    <!-- Navigation -->
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <a class="navbar-brand" href="start.html">Atrois</a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>
>>>>>>> refs/remotes/origin/Database-integration:index3.php

    <!-- Page Content -->
    <div class="container">

        <div class="survey-container">
            <form>
                <div class="label1">
                    <label>question 3</label>
                </div>
                <div class="row-container">
                    <button class="btn-question3">A1</button>
                    <button class="btn-description3" id="btn-A1">Desc</button>
                    <div class="answer-description" id="description-A1">
                        <p>Description 1</p>
                    </div>
                    <button class="btn-question3">A2</button>
                    <button class="btn-description3" id="btn-A2">Desc</button>
                    <div class="answer-description" id="description-A2">
                        <p>Description 2</p>
                    </div>
                    <button class="btn-question3">A3</button>
                    <button class="btn-description3" id="btn-A3">Desc</button>
                    <div class="answer-description" id="description-A3">
                        <p>Description 3</p>
                    </div>
                    <button class="btn-question3">A4</button>
                    <button class="btn-description3" id="btn-A4">Desc</button>
                    <div class="answer-description" id="description-A4">
                        <p>Description 4</p>
                    </div>
                </div>
            </form>
        </div>
        <!-- /.row -->

    </div>
    <!-- /.container -->

    <!-- jQuery Version 1.11.1 -->
    <!--    <script src="js/jquery.js"></script>-->
    <!--    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.2/jquery.min.js"></script>
    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

    <script type="text/javascript">
        $(document).ready(function() {
            $('#description-A1,#description-A2,#description-A3,#description-A4 ').hide();
            
            /*$('#btn-A1').click(function() {
                $('#description-A1').slideToggle("fast");
            });*/
            $("#btn-A1").click(function(e) {
                e.preventDefault();
                $("#description-A1").toggle({
                    duration: 400,
                    easing: "linear"
                });
            });
            $("#btn-A2").click(function(e) {
                e.preventDefault();
                $("#description-A2").toggle({
                    duration: 400,
                    easing: "linear"
                });
            });
            $("#btn-A3").click(function(e) {
                e.preventDefault();
                $("#description-A3").toggle({
                    duration: 400,
                    easing: "linear"
                });
            });
            $("#btn-A4").click(function(e) {
                e.preventDefault();
                $("#description-A4").toggle({
                    duration: 400,
                    easing: "linear"
                });
            });
        });
    </script>

</body>
<footer>
    <div class="footerholder">
        <div class="footer">
            <a href="index2.php">
                <button type="submit" class="btn-footer">
                    <</button>
            </a>
            <a href="results.php.">
                <button class="btn-footer">></button>
            </a>
        </div>
    </div>
</footer>


</html>