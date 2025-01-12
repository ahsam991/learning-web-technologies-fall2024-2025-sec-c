<?php
session_start();
require_once('../model/updateModel.php');

    $input = json_decode(file_get_contents('php://input'), true);

    if ($input)
    {
        $eName = $input['eName'];
        $cName = $input['cName'];
        $phone = $input['phone'];
        $uName = $input['uName'];
        $password = $input['password'];
        
        $user = updateUser($eName, $cName, $phone, $uName, $password);

        if ($user)
        {       
            echo 'success';
        }
        
        else
        {
            echo 'invalid';
        }
    }
    
    else
    {
        var_dump($input);
        echo "error";
    }
