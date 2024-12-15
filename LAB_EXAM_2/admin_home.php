<?php
session_start();
if (!isset($_SESSION['user_id']) || $_SESSION['user_type'] != "Admin") {
    header("Location: login.php");
    exit;
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Admin Home</title>
</head>
<body>
    <h2>Welcome Admin, <?php echo $_SESSION['user_name']; ?></h2>
    <ul>
        <a href="profile.php">Profile</a><br>
        <a href="view_users.php">View Users</a><br>
        <a href="change_password.php">Change Password</a><br>
        <a href="logout.php">Logout</a>
    </ul>
</body>
</html>
