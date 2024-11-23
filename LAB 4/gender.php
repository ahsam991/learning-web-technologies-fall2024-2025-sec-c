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

    <?php
    if(isset($_POST['gender']))
    {
        $gender = $_POST['gender'];

        if (!empty($gender))
        {
            echo 'Gender is selected';
        }
    }

    
    else
    {
        echo "Gender is not selected";
    }
    
    ?>

</body>
</html>
