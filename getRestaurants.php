<?php
    require_once("connect.php");
    $sql = "SELECT `Name`, `Description`, `Location`, `PhoneNumber`, `EmailAddress` FROM `restaurants`"; 
    $result = mysqli_query($link, $sql) or die( mysqli_error($link));
    echo "<table class='restaurantsTable'>
    <tr>
    <th class='tHeading'>NAME</th>
    <th class='tHeading'>DESCRIPTION</th>
    <th class='tHeading'>LOCATION</th>
    <th class='tHeading'>PHONE NUMBER</th>
    <th class='tHeading'>EMAIL ADDRESS</th>
    </tr>";

    while($row = mysqli_fetch_array($result))
    {
    echo "<tr>";
    echo "<td class='tRow'>" . $row['Name'] . "</td>";
    echo "<td class='tRow'>" . $row['Description'] . "</td>";
    echo "<td class='tRow'>" . $row['Location'] . "</td>";
    echo "<td class='tRow'>" . $row['PhoneNumber'] . "</td>";
    echo "<td class='tRow'>" . $row['EmailAddress'] . "</td>";
    echo "</tr>";
    }
    echo "</table>";
   
?>
<!DOCTYPE html>
<html>
    <head>
        <title>RESTAURANTS</title>
        <link href="css/getRestaurants.css" type="text/css" rel="stylesheet">
    </head>
    <body>
    </body>
</html>
