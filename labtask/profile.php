<?php
session_start();
if (!isset($_SESSION['user_id'])) {
    header("Location: login.php");
    exit;
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Profile</title>
</head>
<body>
    <h2>Profile</h2>
    <p>Name: <?php echo $_SESSION['user_name']; ?></p>
    <p>ID: <?php echo $_SESSION['user_id']; ?></p>
    <p>User Type: <?php echo $_SESSION['user_type']; ?></p>
    <a href="logout.php">Logout</a>
</body>
</html>
