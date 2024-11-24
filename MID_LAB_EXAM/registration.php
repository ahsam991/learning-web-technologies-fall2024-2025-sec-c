<?php

if (isset($_REQUEST["submit"])) {


    if (!empty($name) && !empty($email) && !empty($gender) && !empty($bloodGroup) && !empty($degree)) {
        echo "Please fillup all the fields accurately";
    } else {
        $name = $_POST["name"];
        $email = $_POST["email"];
        $gender = $_POST["gender"];
        $bloodGroup = $_POST["bloodGroup"];
        $degree = $_POST["degree"];

        $std = [$name, $email, $gender, $bloodGroup, $degree];

        foreach ($std as $a) {
            echo $a . " ";
        }


    }
}

?>