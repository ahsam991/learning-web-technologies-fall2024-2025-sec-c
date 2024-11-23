<html>
<head>
    <title>Form 2</title>
</head>
<body>
    <form action="" method="POST">
        <fieldset>
            <legend><b>Email</b></legend>
            <input type="text" name="email" value="">
            <hr>
            <input type="submit" name="submit" value="Submit">
        </fieldset>
    </form>  

    <?php
    if(isset($_POST['email']))
    {
        $mail = $_POST['email'];
        $check = false;

        $arr=[];

        if (!empty($mail))
        {
            $arr = explode(".", $mail);


        

            if(count($arr) == 2)
            {
          
                if($arr[1]=="com" || $arr[1]=="edu")
                {
                  
                    $arr2=explode("@", $arr[0]);
                    if(ctype_alpha($arr2[0][0]))
                    {
                       
                        if(count($arr2)==2)
                        {
                          
                            $check = true;
                        }
                    }
                }
            }
        }


        if($check)
        {
            echo 'Email is valid';
        }

        else
        {
            echo "Invalid email";
        }
    }
    ?>

</body>
</html>
