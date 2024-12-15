<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <fieldset>
    <legend>LOGIN</legend>
    <form action="login.php" method="post">
        <label for="user_id">User Id</label><br>
        <input type="text" id="user_id" name="user_id" required><br><br>

        <label for="password">Password</label><br>
        <input type="password" id="password" name="password" required><br><br>

        <button type="submit">Login</button>
        <a href="registration.html">Register</a>
    </form>
    </fieldset>
</body>
</html>
<?php
session_start();


if (isset($_POST['user_id']) && isset($_POST['password'])) {
    $user_id = $_POST['user_id'];
    $password = $_POST['password'];

   

    if (isset($_SESSION['user']) && $_SESSION['user']['id'] == $user_id && $_SESSION['user']['password'] == $password) {
        
        $_SESSION['user_id'] = $_SESSION['user']['id'];
        $_SESSION['user_name'] = $_SESSION['user']['name'];
        $_SESSION['user_type'] = $_SESSION['user']['user_type'];

        
        if ($_SESSION['user_type'] == 'Admin') {
            header('Location: admin_home.php');
        } else {
            header('Location: user_home.php');
        }
        exit; 
    } else {
        // Invalid login credentials
        echo "<p>Invalid credentials. Please try again.</p>";
        exit; 
    }
} else {
   
    echo "<p>Please enter both User ID and Password.</p>";
    exit;
}
?>
