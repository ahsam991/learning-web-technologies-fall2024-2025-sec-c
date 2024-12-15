<?php
session_start();
if (!isset($_SESSION['user_id'])) {
    header("Location: login.php");
    exit;
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $new_password = $_POST['new_password'];
    $lines = file("users.txt", FILE_IGNORE_NEW_LINES);
    $updated_lines = [];

    foreach ($lines as $line) {
        list($id, $pass, $name, $type) = explode("|", $line);
        if ($id == $_SESSION['user_id']) {
            $updated_lines[] = "$id|$new_password|$name|$type";
        } else {
            $updated_lines[] = $line;
        }
    }

    file_put_contents("users.txt", implode("\n", $updated_lines));
    echo "Password Changed Successfully!";
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Change Password</title>
</head>
<body>
    <h2>Change Password</h2>
    <form method="POST" action="change_password.php">
        New Password: <input type="password" name="new_password" required><br><br>
        <button type="submit">Change Password</button>
    </form>
</body>
</html>