  
<?php

if(isset($_REQUEST['submit'])){
    
    if($_POST['Email']=="")
    {
        
        echo "Empty";
        
    }
    
    else{
        echo "Name: ".$_POST['Email'];
    }
    
    
}

?>
<html>
    <head>
        <title>>HTML Form - Email</title>
    </head>
    <body>
         <form method="post" action="email.php">
        
        <fieldset style="width: 200px;">
            
            <legend><b>EMAIL</b></legend>
        <input type="email" name="Email">
        
        <hr>
        <input type="submit" name="submit" value="Submit">
            
        </fieldset>
        
        </form>
    </body>
</html>

