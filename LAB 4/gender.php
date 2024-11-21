<html>
<head>
    <title>Gender Form</title>
</head>
<body>
    <p>Please enter Gender</p>
    <form method="post">
        <fieldset style="width: 200px">
            <legend>GENDER</legend>

            <input type="radio" name="gender" value="male"> Male
            <input type="radio" name="gender" value="female"> Female
            <input type="radio" name="gender" value="other"> Other

            <hr>
            <input type="submit" name="submit" value="Submit">
        </fieldset>
    </form>
</body>
</html>
<?php
// Directly check if the 'gender' field exists in the POST data
if (isset($_POST['gender'])) {
    $gender = $_POST['gender'];
    echo' Gender is : '.$gender;
} else {
    $gender = null;
}

if (empty($gender)) {
    //header("Location: degree.php");
    echo'At least one of them must be selected ';
    exit();
}
?>
