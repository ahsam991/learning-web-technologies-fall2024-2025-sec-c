<!DOCTYPE html>
<html lang="en">
<head>
    <title>Login Page</title>
</head>
<body>
    <form method="post" action="">
        <fieldset>
            <legend>Home</legend>
            <p>Welcome to homepage</p>    
            <br><br>
            <input type="submit" name="submit" value="Submit"> 
        </fieldset>
    </form>
</body>
</html>

<?php
    session_start();

    
    if (!isset($_SESSION['status'])) {
        header('location: loginCheck.php'); 
        exit(); 
    }

    
    if (isset($_POST['submit'])) {
        
        $_SESSION['submit'] = true;
        
        
        header('location: loginCheck.php'); 
        exit(); 
    }
?>
