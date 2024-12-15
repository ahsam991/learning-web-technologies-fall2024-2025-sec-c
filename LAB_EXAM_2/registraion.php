<?php
session_start();

if (isset($_REQUEST['submit'])) {
    $id = $_REQUEST['id'];
    $pass = $_REQUEST['password'];  // changed 'pass' to 'password'
    $c_pass = $_REQUEST['confirm_password'];  // changed 'c_pass' to 'confirm_password'
    $name = $_REQUEST['name'];
    $user_type = null;

    if (isset($_POST['user_type'])) {
        $user_type = $_POST['user_type'];
    }

    if (is_numeric($id) && !empty($pass) && !empty($c_pass) && !empty($name) && !empty($user_type)) {
        if ($pass === $c_pass) {
            $_SESSION['users'] = [
                'id' => $id,
                'pass' => $pass,
                'c_pass' => $c_pass,
                'name' => $name,
                'user_type' => $user_type,
            ];

            // Save user information to a file (user_info.txt)
            $myfile = fopen("user_info.txt", "w") or die("Unable to open file!");
            $txt = 'ID: ' . $id . PHP_EOL;
            fwrite($myfile, $txt);
            $txt = 'Password: ' . $pass . PHP_EOL;
            fwrite($myfile, $txt);
            $txt = 'Name: ' . $name . PHP_EOL;
            fwrite($myfile, $txt);
            $txt = 'User Type: ' . $user_type . PHP_EOL;
            fwrite($myfile, $txt);
            fclose($myfile);

            // Redirect after successful registration
            header('location: login.php');
            exit;
        } else {
            // Password mismatch
            echo 'Password and Confirm Password did not match';
            header('location: registration.html');
            exit;
        }
    } else {
        // Invalid input
        echo 'Invalid Sign Up';
        header('location: registration.html');
        exit;
    }
}
?>
