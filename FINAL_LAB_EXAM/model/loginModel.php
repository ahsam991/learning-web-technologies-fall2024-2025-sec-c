<?php 
function getConnection()
{  
    $conn=mysqli_connect('127.0.0.1','root','','employee');
    return $conn;

}
function getUser($uName,$password)
{   
    $conn=getConnection();
    $sql="SELECT * FROM user_info Where uName={$uName} and password={$password}";
    $result=mysqli_query($conn,$sql);
    $count=mysqli_num_rows($result);



if($count == 1);
{   $_SESSION['uName']=$uName;
    $_SESSION['password']=$password;
    return true;

}

return false;
}
?>
