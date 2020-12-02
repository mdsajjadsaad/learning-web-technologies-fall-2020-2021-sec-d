<html>
<head>
   <title> Online Shop - Registration</title>
</head>
<body>
    
    <br><
  <fieldset>
            
            <legend><b>Registration</b></legend>
            
            <form action="../controller/registration.php" method="post">
            
            Name : <input type="text" name="name"><br>
            Contact No : <input type="text" name="contactNo"><br>
            UserName : <input type="text" name="username"><br>
            password : <input type="password" name="password"><br>
            <input type="submit" name="submit" value="Register">
        </form>
            
        </fieldset>

        <?php
        
        if(isset($_REQUEST['msg'])){
		if($_REQUEST['msg'] == 'Error'){
			echo "Error";
		}

		if($_REQUEST['msg'] == 'null'){
			echo "Input All The Information";
		}
        
        if($_REQUEST['msg'] == 'Done '){
			echo "Done ";
		}
        
        

		
	}
        
        ?>
        
</body>
</html>