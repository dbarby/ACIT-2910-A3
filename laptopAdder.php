<?php

require_once('init.php');
loadScripts();

    $data = array("status" => "not set!");

    if(Utils::isPOST()) {
        $lm = new LaptopManager();

        $parameters = new Parameters("POST");

        $action = $parameters->getValue('action');



        switch($action) {

            case "addLaptop":


                // turn the JSON into an array of arrays (true means arrays and not objects)
               
                $laptopInfo = json_decode($_POST['laptopInfo'], true);

                $affectedRows = $lm->addLaptopInfo($laptopInfo);
            
                if($affectedRows > 0) {

                   $data = array("status" => "success", "msg" => "Laptop successfully added");

                } else {
                    $data = array("status" => "fail", "msg" => "laptop was not added",
                        "reasons" => Messages::getMessagesAsJSONArray());
                }
                break;
        }

    } else {
        $data = array("status" => "error", "msg" => "Only POST allowed.");

    }

    echo json_encode($data, JSON_FORCE_OBJECT);


?>
