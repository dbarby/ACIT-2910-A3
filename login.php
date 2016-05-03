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
        <title>JQuery - </title>
        <meta charset="utf-8" />
        <style>
            .invalid {
                background-color: #ff8888;
            }

        </style>
    </head>

    <body>

        <form id="login" method="post" action="authenticate.php">
            <fieldset>
                <legend>Login</legend>

                <label for="login">Login: </label>
                <input id="login" type="text" placeholder="login" name="login" autofocus="autofocus" class='<?php if (isset($_SESSION[' invalid ']['login '])) echo "invalid";?>' value='<?php if (isset($_SESSION[' previous ']['login '])) echo htmlentities($_SESSION['previous ']['login '], ENT_QUOTES); ?>'/>
                <br/>
                <br/>

                <label for="password">Password: </label>
                <input id="password" type="password" placeholder="password" name="password" class='<?php if (isset($_SESSION[' invalid ']['password '])) echo "invalid";?>' value='<?php if (isset($_SESSION[' previous ']['password '])) echo htmlentities($_SESSION['previous ']['password '], ENT_QUOTES); ?>'/>
                <br/>
                <br/>

                <input id="loginbutton" type="submit" value="Login" />
            </fieldset>
        </form>
        <p>
            <?php if(isset($_SESSION['msg'])) echo $_SESSION['msg'];
            if(isset($_SESSION['previous']['login'])) echo $_SESSION['previous']['login'];
      ?>
        </p>
        <a href="index.php">Main Website</a>
        


        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
        <script>
            $(document).ready(function() {





            });

        </script>

    </body>

    </html>
