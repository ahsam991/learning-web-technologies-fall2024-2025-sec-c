<html>
<head>
    <title>Degree Form</title>
</head>
<body>
    <form method="post" action = "">
        <fieldset>
            <legend>Degree</legend>
            <input type="checkbox" name="option[]" value="SSC"> SSC
            <input type="checkbox" name="option[]" value="HSC"> HSC
            <input type="checkbox" name="option[]" value="BSc"> BSc
            <input type="checkbox" name="option[]" value="MSc"> MSc
            <hr>
            <input type="submit" name="submit" value="Submit">
        </fieldset>
    </form>
  <?php
    if(isset($_POST['degrees']))
    {
        $degrees = $_POST['degrees'];
        if (count($degrees) >= 2)
        {
            echo "Valid selection";
        }
        
        else
        {
            echo "Invalid selection";
        }
    }
    
    else if(isset($_POST['submit']))
    {
        echo "Invalid selection";
    }
    ?>
    
</body>
</html>

