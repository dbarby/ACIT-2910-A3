<?php


function loadScripts() {

$scripts = array('DBconnector.php',
                 'Messages.php',
                 'Parameters.php',
                 'ServiceDetailManager.php',
                 'LaptopManager.php',
                 'ProductManager.php',
                 'UserManager.php',
                 'ResultCalculator',
                 'Utils.php');

    $subDir = "src";

    foreach($scripts as $script) {
        require_once($subDir . DIRECTORY_SEPARATOR. $script);
    }

}




?>

