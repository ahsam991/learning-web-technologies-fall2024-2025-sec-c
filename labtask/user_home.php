<?php
session_start();
if (!isset($_SESSION['user_id']) || $_SESSION['user_type'] != "User") {
    header("Location: login.php");
    exit;
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>User Home</title>
</head>
<body>
    <h2>Welcome User, <?php echo $_SESSION['user_name']; ?></h2>
    
        <a href="profile.php">Profile</a><br>

        <a href="change_password.php">Change Password</a><br>
        <a href="logout.php">Logout</a>
    
</body>
</html>
