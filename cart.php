<?php

include './connection.php';
include "./navbar.php";

if(isset($_GET['id'])){
    $id = $_GET['id'];
    // echo $id;
    // echo "hello";
    $query = "DELETE FROM `cart` WHERE product_id=$id";
    $result = mysqli_query($conn, $query);

    if($result){
        "<script>alert('fnvf')</script>";
    }
}

//Fetch the data from the cart table
$sql = "SELECT * FROM cart"; 
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    
    $cartItems = mysqli_fetch_all($result, MYSQLI_ASSOC);
    echo "<h1 style='text-align:center'>Your Cart</h1>";
    // This is a Main Container inside that container loop product cards Show 
    echo "<div class='cart_container'>";
    foreach ($cartItems as $item) {
        echo "<div class='cart'>";
            // Display the image
            echo "<img src='" . $item['image_path'] . "' alt='Image' width='170' height='220'><br>";
            // Display the heading
            echo "<h2>" . $item['heading'] . "</h2>";
            echo "<button style='padding: 4px 15px; color:black'><a style'color:black;' href='cart.php?id=" .$item['product_id']."' name='deleteItem'  class='btn_css'>Remove</a></button>";
        echo "</div>";

    }
    echo "</div>";
} else {
    echo "<p style='text-align: center; margin: 20px 0px; font-size: 30px; font-weight: 900'>Your cart is empty.</p>";
}

// Step 4: Close the database connection
mysqli_close($conn);
?>
