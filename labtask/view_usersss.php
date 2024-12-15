<?php
session_start();

// Check if the user is logged in and is an admin
if (!isset($_SESSION['user_id']) || $_SESSION['user_type'] != "Admin") {
    header("Location: login.php");  // Redirect to login if not an admin
    exit;
}

// For demonstration, assuming user info is stored in a session (or file).
// In a real application, this should be retrieved from a database.
$users = [];
if (isset($_SESSION['users'])) {
    $users = $_SESSION['users'];  // Get users from session
} else {
    // In case no users are registered yet, we can handle this case
    $users = [];
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View Users</title>
</head>
<body>
    <h2>View Users</h2>
    <table border="1">
        <tr>
            <th>User ID</th>
            <th>Name</th>
            <th>User Type</th>
        </tr>
        <?php
        if (!empty($users)) {
            foreach ($users as $user) {
                echo "<tr>";
                echo "<td>" . htmlspecialchars($user['id']) . "</td>";
                echo "<td>" . htmlspecialchars($user['name']) . "</td>";
                echo "<td>" . htmlspecialchars($user['user_type']) . "</td>";
                echo "</tr>";
            }
        } else {
            echo "<tr><td colspan='3'>No users found.</td></tr>";
        }
        ?>
    </table>

    <a href="admin_home.php">Back to Admin Home</a>
</body>
</html>
