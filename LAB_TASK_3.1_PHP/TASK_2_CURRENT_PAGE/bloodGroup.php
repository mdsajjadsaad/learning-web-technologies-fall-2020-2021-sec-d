<?php

if(isset($_REQUEST['submit'])){
    
    echo "Blood Group: ".$_REQUEST['bloodGroup'];
    
}


?>
<html>
<head>
    
    <title>HTML Form - Blood Group</title>
</head>
<body>
    
    <form method="post" action="bloodGroup.php">
        
        <fieldset style="width:250px">
            
            Blood Group
            <select name="bloodGroup" >
				<option value="A+">  A+</option>
				<option value="A-">  A-</option>
				
				<option value="B+">  B+</option>
				<option value="B-">  B-</option>
				<option value="AB+"> AB+</option>
				<option value="AB-"> AB-</option>
				<option value="O+" > O+</option>
				<option value="O-"> O-</option>
			</select>
			<hr>
   
        </fieldset>
        <br>
        <input type="submit" name="submit" value="Submit">
        
        
    </form>