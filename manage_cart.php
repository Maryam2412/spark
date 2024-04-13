<?php
    include("db_connection.php");

    $title = $_POST['title'];
    $image = $_POST['image'];
    $price = $_POST['price'];

    
    $sql = mysqli_query($conn,"INSERT INTO `cart`(`title`,`price`, `image`) VALUES ('$title','$price','$image')");

    if($sql){
        echo "Item added";
    }else{
        echo "Item could not be added";
    }
?>