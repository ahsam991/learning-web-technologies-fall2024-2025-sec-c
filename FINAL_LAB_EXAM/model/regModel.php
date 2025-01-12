<?php
 function getConnection()
 {
    $conn = mysqli_connect('127.0.0.1','root','','employee');
    return $conn;
 }
  function addUser ($eName, $cName, $phone, $uName,  $password){
    $conn =getConnection();
    $sql = "INSERT INTO user_info VALUES ('{$eName}','{$cName}','{$phone}','{$uName},'{$password}')";
    if (mysqli_query($conn,$sql))
    {

        return true;
    }
    else {
        return false;
    }

  }
  ?>