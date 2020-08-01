<?php
    require_once("connect.php");
    $sql = "SELECT * FROM `foodtable`";
    if (mysqli_query($link,$sql)){
        echo "Success"; 
    }
    else{
        echo "Error".mysqli_error($link);
    } 
    
    
    
    
?>

<!DOCTYPE html>
<html>
    <head>
        <title>ADD FOOD</title>
        <link rel="stylesheet" type="text/css" href="css/addFood.css">
    </head>
    <body>
        <form method='POST' action =''>

        
    </body>
</html>