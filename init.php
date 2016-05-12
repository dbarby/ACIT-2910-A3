<?php


function loadScripts() {

$scripts = array('DBconnector.php',
                 'Messages.php',
                 'Parameters.php',
                 'ServiceDetailManager.php',
                 'CustomerManager.php',
                 'ShoppingCartManager.php',
                 'ProductManager.php',
                 'UserManager.php',
                 'Utils.php');

    $subDir = "src";

    foreach($scripts as $script) {
        require_once($subDir . DIRECTORY_SEPARATOR. $script);
    }

}




?>

