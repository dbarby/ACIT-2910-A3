<?php

    if (session_status() == PHP_SESSION_NONE) {
        session_start();
    }
    if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] != 'true') {
       
    }else
        if(isset($_SESSION['loggedin']) || $_SESSION['loggedin'] == 'true') {
        header("Location: restrictedpage.php");
    };



?>
    <!DOCTYPE html>
    <html lang="en">

    <head>
    <link href="css/bootstrap.min.css" rel="stylesheet">
        <title>JQuery - </title>
        <meta charset="utf-8" />
        <style>
            .invalid {
                background-color: #ff8888;
            }

        </style>
    </head>

    <body>
    <!-- Navigation -->
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <a class="navbar-brand" href="index.php">LaptopFinder2016</a>
            </div>
             
            <!-- Collect the nav links, forms, and other content for toggling -->
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>

        <form style="text-align:center;" id="login" method="post" action="authenticate.php">
            <fieldset>
                <legend>Login</legend>

                <label style="color:black;" for="login">Login</label><br>
                <input style="color:black;" id="login" type="text" name="login" autofocus="autofocus" class='<?php if (isset($_SESSION[' invalid ']['login '])) echo "invalid";?>' value='<?php if (isset($_SESSION[' previous ']['login '])) echo htmlentities($_SESSION['previous ']['login '], ENT_QUOTES); ?>'/>
                <br/>
                <br/>

                <label style="color:black;" for="password">Password</label><br>
                <input style="color:black;" id="password" type="password" name="password" class='<?php if (isset($_SESSION[' invalid ']['password '])) echo "invalid";?>' value='<?php if (isset($_SESSION[' previous ']['password '])) echo htmlentities($_SESSION['previous ']['password '], ENT_QUOTES); ?>'/>
                <br/>
                <br/>

                <input id="loginbutton" class="btn btn-default" type="submit" value="Login" />
            </fieldset>
        </form>
        <p>
            <?php if(isset($_SESSION['msg'])) echo $_SESSION['msg'];
            if(isset($_SESSION['previous']['login'])) echo $_SESSION['previous']['login'];
      ?>
        </p>
        


        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
        <script>
            $(document).ready(function() {





            });

        </script>

    </body>

    </html>
