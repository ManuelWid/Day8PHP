<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="create.php" method="POST">
        image: <input type="text" name="img" />
        name: <input type="text" name="name" />
        price: <input type="number" name="price" />
        description: <input type="text" name="desc" />
        <input type="submit" name="submit" value="add"/>
    </form>
    <?php
    require_once "db_connect.php";
    if(isset($_POST["submit"])){
        if($_POST["img"] && $_POST["name"] && $_POST["price"] && $_POST["desc"]){
            $sql = 'INSERT INTO dishes (`image`, `name`, `price`, `description`) VALUES ("'.$_POST["img"].'","'.$_POST["name"].'","'.$_POST["price"].'","'.$_POST["desc"].'")';
            mysqli_query($connect, $sql);
        }
        else{
            echo "Please enter all values!";
        }
    }
    ?>
</body>
</html>