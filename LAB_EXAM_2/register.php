<?php
session_start();

if (isset($_POST['submit'])) {
 
    $id = $_POST['id'];
    $pass = $_POST['password'];
    $c_pass = $_POST['confirm_password'];
    $name = $_POST['name'];
    $user_type = isset($_POST['user_type']) ? $_POST['user_type'] : null;

 
    if (is_numeric($id) && !empty($pass) && !empty($c_pass) && !empty($name) && !empty($user_type)) {

        if ($pass === $c_pass) {
           
            $_SESSION['user'] = [
                'id' => $id,
                'password' => $pass,
                'name' => $name,
                'user_type' => $user_type
            ];

          
            $myfile = fopen("user_info.txt", "a") or die("Unable to open file!");
            $txt = 'ID: ' . $id . PHP_EOL;
            fwrite($myfile, $txt);
            $txt = 'Password: ' . $pass . PHP_EOL;
            fwrite($myfile, $txt);
            $txt = 'Name: ' . $name . PHP_EOL;
            fwrite($myfile, $txt);
            $txt = 'User Type: ' . $user_type . PHP_EOL;
            fwrite($myfile, $txt);
            fclose($myfile);

          
            header('Location: login.php');
            exit;
        } else {
            
            echo 'Password and Confirm Password did not match.';
            exit;
        }
    } else {
        
        echo 'Please fill out all fields correctly.';
        exit;
    }
}
?>
ssssssss