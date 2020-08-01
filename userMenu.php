<?php
    require_once("connect.php");
    $sql = "SELECT * FROM `foodtable`"; 
    $result = mysqli_query($link, $sql) or die( mysqli_error($link));
    echo "<table class='menu'>
    <tr>
    <th class='tHeading'>NAME</th>
    <th class='tHeading'>PRICE</th>
    <th class='tHeading'>IMAGE</th>
    </tr>";

    while($row = mysqli_fetch_array($result))
    {
    echo "<tr>";
    echo "<td class='tRow'>" . $row['name'] . "</td>";
    echo "<td class='tRow'>" . $row['price'] . "</td>";
    echo "<td class='tRow'>" . '<img id="image" src="data:image/jpg;base64,' . base64_encode( $row['image'] ) . '" />';
    echo "<td class='tRow'>" . "<a href='orderFood.php'><button id='' name='order' type='submit'>ORDER</button></a>". "</td>";
    echo "</tr>";
    }
    echo "</table>";
   
?>
<!DOCTYPE html>
<html>
    <head>
        <title>MENU</title>
        <link href="css/kfcMenu.css" type="text/css" rel="stylesheet">
    </head>
    <body>
    </body>
</html>
