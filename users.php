<?php

require_once('init.php');
loadScripts();

    $data = array("status" => "not set!");

    if(Utils::isPOST()) {
        // post means either to delete or add a user
        $parameters = new Parameters("POST");

        $action = $parameters->getValue('action');
        $user_name = $parameters->getValue('username');

        //$data = array("action" => $action, "user_name" => $user_name);
        if($action == 'delete' && !empty($user_name)) {

            $um = new UserManager();
            $um->deleteUser($user_name);
            $data = array("status" => "success", "msg" => "User '$user_name' deleted.");
            echo json_encode($data, JSON_FORCE_OBJECT);
            return;

        } else if($action == 'update' && !empty($user_name)) {
            $newFirstName = $parameters->getValue('newFirstName');

            if(!empty($newFirstName)) {

                $um = new UserManager();
                $count = $um->updateUserFirstName($user_name, $newFirstName);
                if($count > 0) {
                    $data = array("status" => "success", "msg" =>
                        "User '$user_name' updated with new first name ('$newFirstName').");
                } else {
                    $data = array("status" => "fail", "msg" =>
                        "User '$user_name' was NOT updated with new first name ('$newFirstName').");
                }
            } else {
                $data = array("status" => "fail", "msg" =>
                    "New user name must be present - value was '$newFirstName' for '$user_name'.");

            }
            echo json_encode($data, JSON_FORCE_OBJECT);
            return;

        } else if($action == 'add') {
            $newFirstName = $parameters->getValue('newFirstName');
            $newLastName = $parameters->getValue('newLastName');
            $newUserName = $parameters->getValue('newUserName');
            $newUserName = $parameters->getValue('newShippingAddress');
            $newUserName = $parameters->getValue('newEmailAddress');

            if(!empty($newFirstName) && !empty($newLastName) && !empty($newUserName) && !empty($newShippingAddress) && !empty($newEmailAddress)) {
                $data = array("status" => "success", "msg" => "User added.");
                $um = new UserManager();
                $um->addUser($newFirstName, $newLastName, $newUserName);

            } else {
                $data = array("status" => "fail", "msg" => "First name, last name, user name, Shipping Address and Email Address cannot be empty.");
            }
            echo json_encode($data, JSON_FORCE_OBJECT);
            return;

        }else {
            $data = array("status" => "fail", "msg" => "Action not understood.");
        }

        echo json_encode($data, JSON_FORCE_OBJECT);
        return;

    } else if(Utils::isGET()) {
        // get means get the list of users
        $um = new UserManager();
        $rows = $um->listUsers();
        $html = "";
        if($rows != null) {

            foreach($rows as $row) {
                $first_name = $row['first_name'];
                $last_name = $row['last_name'];
                $user_name = $row['user_name'];
                $shipping_address = $row['shipping_address'];
                $email_address = $row['email_address'];
                $html .= "
                <tr>
                <th id='admin-header'>$first_name $last_name</th>
                </tr>
                <tr>
                <th class='first_name_header'><span>First Name:</span>
                <td class='first_name'><span>$first_name</span></td></th>
                </tr>
                <tr>
                <th class='last_name_header'><span>Last Name:</span></th>
                <td class='last_name'><span>$last_name</span></td>
                </tr>
                <tr>
                <th class='login_header'><span>User Name:</span></th>
                <td class='user_name'><span>$user_name</span></td>
                </tr>
                <tr>
                <th class='login_header'><span>Shipping Address:</span></th>
                <td class='shipping_address'><span>$shipping_address</span></td>                
                </tr>
                <tr>
                 <th class='login_header'><span>Email Address:</span></th>
                <td class='email_address'><span>$email_address</span></td>              
                </tr>
                <tr>
                 <th class='delete_header'><span>Update Info:</span></th>
                <td><input id='u-$user_name' class='update' type='button' value='Update'/></td>               
                </tr>
                <tr>
                <th class='delete_header'><span>Delete User:</span></th>
                 <td><input id='d-$user_name' class='delete' type='button' value='Delete'/></td>               
                </tr>";
            }
            echo $html;

        } else {
            // shouldn't be but ...
            echo 'The returned rows is "null". No user table perhaps?';
        }

        return;

    } else {
        $data = array("status" => "error", "msg" => "Only GET and POST allowed.");
        echo json_encode($data, JSON_FORCE_OBJECT);
    }



?>
