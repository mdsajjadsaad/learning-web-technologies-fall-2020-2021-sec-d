<?php


if(isset($_REQUEST['submit'])){
    
    if(empty($_POST['degree'])){
    
    echo "Empty";
    
}
else{
    
    $degree = $_POST['degree'];
    
    for($i = 0; $i < count($degree); $i++){
        
        echo "Degree: ".$degree[$i]."<br>";
        
    }
    
}
    
}

?>
<html>
    <head><title>HTML Form - Degree</title>
	</head>
    <body>
        <form>
         <form method="post" action="degree.php">

        <fieldset style="width:300px">

            <legend><b>DEGREE</b></legend>
            <input type="checkbox" name="degree[]" value="SSC"> SSC
            <input type="checkbox" name="degree[]" value="HSC"> HSC
            <input type="checkbox" name="degree[]" value="Bsc"> Bsc
            <input type="checkbox" name="degree[]" value="Msc"> Msc
            <hr>
            <input type="submit" name="submit" value="Submit">
        </fieldset>
    </body>
</html>
