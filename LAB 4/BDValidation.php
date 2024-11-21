<html>
<head>
    <title>Blood Group Form</title>
</head>
<body>
    <form method="post" action="">
        <fieldset style="width: 200px">
            <legend>Blood Group</legend>
            <select name="bloodGroup">
                <option value="">Select Blood Group</option>
                <option value="A+">A+</option>
                <option value="A-">A-</option>
                <option value="O+">O+</option>
                <option value="O-">O-</option>
                <option value="B+">B+</option>
                <option value="B-">B-</option>
                <option value="AB+">AB+</option>
                <option value="AB-">AB-</option>
            </select>
            <hr>
            <br>
            <input type="submit" name="submit" value="Submit">
        </fieldset>
    </form>

    <?php
    // Check if the form is submitted by checking if 'submit' is set in the POST data
    if (isset($_POST['submit'])) {
        $selectedBloodGroup = $_POST['bloodGroup'];

        // Validate the selected blood group
        if (empty($selectedBloodGroup)) {
            echo "Please select a blood group.";
        } else {
            echo "Validation successful. Selected blood group: $selectedBloodGroup";
        }
    }
    ?>
</body>
</html>
