<html>
<head>
    
    <title>validation</title>
</head>
<body>
    <form action="name.php" method="POST">
        <fieldset>
            <legend><b> Name </b> </legend>
           
           <input type="text" name="name" > 
           
           <hr> <input type="submit" name="submit" value="submit"/></h>
      
        </fieldset>
    </form>
    <?php

       $name=$_POST['name'];
       $check= false;

       if(!empty($name) && strlen($name)>=2 && ctype_alpha($name[0]))
        {
       
         for($i=1;$i<strlen($name);$i++)
         {
            if(ctype_alpha($name[$i]) || is_numeric($name[$i]) || $name[$i]=='_')
            {

                 $check =true;
            }
         }
        }
    

       if($check)
       {
        echo 'User name valid ';
       }
       else{
          echo' User invalid';
       }
    
    ?>

</body>
</html>
