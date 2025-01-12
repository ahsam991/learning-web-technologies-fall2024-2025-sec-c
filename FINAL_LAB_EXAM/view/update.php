
<?php
session_start();
    if(!isset($_COOKIE['status']))
    {
        header('location: login.html'); 
    }
require_once('../model/updateModel.php');

$users=getUser();


?>




<!DOCTYPE html>
<html lang="en">
<head>
    
    <title>Employee Management</title>
   
</head>
<body>
   

    <h2>Register New Employee</h2>
   <label>Employee Name :</label>
   <input type="text" name="ename" value=""id="eName">

   <label>Company Name :</label>
   <input type="text" name="cname" value=""id="cName">

   <label>Contact No:</label>
   <input type="text" name="phone" value=""id="phone">

   <label>User Name:</label>
   <input type="text" name="uname" value=""id="uName">
   
   <label>password:</label>
   <input type="password" name="password" value=""id="password">


  <input type="button" name="password" value=""id="submit" onclick="">
  <script src =../asset/updateCheck.js></script>
   

</body>
</html>