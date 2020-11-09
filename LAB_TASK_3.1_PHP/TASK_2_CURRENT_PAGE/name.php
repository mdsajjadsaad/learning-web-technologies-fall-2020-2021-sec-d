<?php

if(isset($_REQUEST['submit'])){
    
    if($_POST['Name']==""){
        
        echo "empty";
        
    }
    
    else{
        echo "Name: ".$_POST['Name'];
    }
    
    
}


?>
  <html>
    <head>
        <title>HTML Form - Name</title>
    </head>
    <body>
 <form method="post" action="name.php">
        
        <fieldset >
            
        <legend><b>NAME</b></legend>
        <input type="text" name="Name"> <hr>
        <input type="submit" name="submit" value="Submit">
            
        </fieldset>
		
       </form>
    </body>
</html>