<?php

if(isset($_REQUEST['submit'])){
    
    if($_REQUEST['dd']=="" or $_REQUEST['mm']=="" or $_REQUEST['yy']==""){
        
        echo " input all the fields";
        
    }
    
    else{
        
        
        echo "Date of Birth ".$_REQUEST['dd']."/".$_REQUEST['mm']."/".$_REQUEST['yy'];
        
    }
    
    
}


?>
<html>
<head>
  <title>HTML Form - Date Of Birth</title>
</head>
<body>
    
    <form method="post" action="dateOfBirth.php">
        
        <fieldset style="width:300px">
            
            <legend><b>Date Of Birth</b></legend>
            <table>
                    <tr>
                        <td align="center">dd</td>
                        <td align="center">mm</td>
                        <td align="center">yy</td>
                    </tr>
                    <tr>
                        <td><input type="text" name="dd" maxlength="2" size="5"> / </td>
                        <td><input type="text" name="mm" maxlength="2" size="5"> / </td>
                        <td><input type="text" name="yy" maxlength="4" size="5"></td>
                    </tr>
                </table>
                
                <input type="submit" name="submit" value="Submit">
        </fieldset>
        
        
        
    </form>
    
</body>
</html>