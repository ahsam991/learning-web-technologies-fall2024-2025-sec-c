<?php
session_start();
    if(!isset($_COOKIE['status']))
    {
        header('location: login.html'); 
    }
require_once('../model/loginModel.php');

$users = getUser();


?>

<html>
    <head>
        <title>Dashboard</title>
    </head>

    <body>
    <table border="1" cellspacing="0">
                <tr>
                    <th>Employee Name</th>
                    <th>Company Name</th>
                    <th>Contact No.</th>
                    <th>User Name</th>
                    <th>Password</th>
                    <th>Update</th>
                    <th>Delete</th>
                </tr>
                
                <?php if (!empty($users)): ?>
                    <?php foreach ($users as $user): ?>
                        <tr>
                            <?php $uName=$user['uname']?>
                            <td><?= $user['ename']; ?></td>
                            <td><?= $user['cname']; ?></td>
                            <td><?= $user['phone']; ?></td>
                            <td><?= $user['uname']; ?></td>
                            <td><?= $user['password']; ?></td>
                            <td><input type="button" name="update" value="update" id="update" onclick="confirmUpdate()"></td>
                            <td><input type="button" name="delete" value="delete" id="delete" onclick="confirmDelete($userName)"></td>
                            
                            <script src='../asset/updateAndDelete.js'></script>
                        </tr>
                    <?php endforeach; ?>
                <?php else: ?>
                    <tr>
                        <td>No employee found</td>
                    </tr>
                <?php endif; ?>
            </table>
    </body>
</html>