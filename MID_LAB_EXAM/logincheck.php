<?php
    session_start();
    if (isset($_REQUEST['login']))
    {
        $name = $_POST['name'];
       // $pass = $_POST['pass'];

        if ($u_name == $_SESSION['user_info']['user'] && /*$pass == $_SESSION['user_info']['pass'] */)
        {
            $_SESSION['status'] = true;
            header('location: home.php');
        }

        else
        {
            echo 'Invalid 1';
            header('location: registration.html');
        }
    }
    
    else
    {
        echo 'Invalid Process';
    }
?>