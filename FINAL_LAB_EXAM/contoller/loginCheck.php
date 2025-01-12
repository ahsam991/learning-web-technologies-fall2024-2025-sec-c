<?php 
session_start();
require_once ('../model/loginModel.php');
$input =json_decode(file_get_contents('php://input'),true);


if ($input)
{
    $uName=$input['uName'];
    $password=$input['password'];

    $user=getUser($uName,$password);

    if($user)
    {
        setcookie('status',true,time()+3000,'/');
        echo "success";
    
    }
    else 
    {   echo "invalid";} 

}
else {  var_dump($input);
     echo "error";
    }
