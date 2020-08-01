<?php
    require_once("connect.php");
    require_once("processLogin.php");
    if (isset($_POST["submit"])){
        $name=$_POST["name"];
        $price=$_POST["price"];
        $category=$_POST["category"];
        // $image=$_FILES["photo"];

        $image = addslashes(file_get_contents($_FILES['image']['tmp_name'])); 
        $image_name = addslashes($_FILES['image']['name']);
        $targetfile = "assets/" .basename($_FILES['image']);

        move_uploaded_file($_FILES['image']['tmp_name'], $targetfile);

        
        $sql = "INSERT INTO `foodtable`(`name`, `image`, `imageName`, `price`, `category`) VALUES ('$name','{$image}', '{$image_name}', '$price', '$category')";        
        if (mysqli_query($link, $sql)){
            header('Location: kfcMenu.php');
        }
        else{
            echo $error;
        }
        
    }
?>

<!DOCTYPE html>
<html>
    <head>
        <title>ADD FOOD</title>
        <link rel="stylesheet" type="text/css" href="css/addFood.css">
    </head>
    <body>
        <form action="" method="POST" enctype="multipart/form-data">
            <fieldset>
                <legend style="text-align: center;">MENU</legend>
                <label for="name">Food name:</label>
                <input type="text" id="name" name="name"></br></br>
                <label for="price">Price:</label>
                <input type="text" id="price" name="price"></br></br>
                <label for="photo">Image:</label>
                <input type="file" id="image" name="image"></br></br>
                <label for="category">Category:</label>
                <select id=category name="category">
                    <option selected value="Chicken">Chicken</option>
                    <option value="Pizza">Pizza</option>
                    <option value="Salad">Salad</option>
                    <option value="Fries">Fries</option>
                    <option value="Ribs">Ribs</option>
                    <option value="Burger">Burger</option>
                </select></br></br>
                <input type="submit" id=submit name="submit" value="ADD FOOD">
            </fieldset>
        </form>
    </body>
</html>