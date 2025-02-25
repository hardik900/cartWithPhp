<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="list.css">
    <link rel="stylesheet"  media="screen and (max-width:1000px)" href="SANDAL.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
        include("./navbar.php")
    ?>
    <div id="Home">
        <h1>SHOP NOW </h1>
        <h1>ANTIQUE DESIGN SANDALS CHEAP FOR EVERYONE</h1>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Officiis earum temporibus, possimus veniam ipsam
            voluptatibus blanditiis porro.</p>
        <p1>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Fugit, nam itaque corporis quisquam rerum
            perferendis </p1>
        <button class="btn">Order Now</button>
    </div>

    <div id="services-container">
        <h1 class="h-primary center">Our Products</h1>
        <div id="services">
            <!-- <div class="pair-1"> -->
                <!-- <img src="images/SANDAL3.jpg" alt="">
                <h2>comfy sandals</h2>
                <button class="addtoCart">Add To cart</button>
                <button class="buyNow">Buy now</button> -->

<?php
    include './connection.php';

    //  Check button was clicked or Not 
    if (isset($_POST['action']) && $_POST['action'] == 'add_to_cart') {
    // Get the product ID from the form (hidden input)
    $product_id = $_POST['product_id'];

    // Fetch product details (image and heading) from the 'images' table
        $sql = "SELECT id, image_path, heading FROM images WHERE id = '$product_id'";
        $result = mysqli_query($conn, $sql);

        if ($result && mysqli_num_rows($result) > 0) {
        // Get product details
        $row = mysqli_fetch_assoc($result);
        $image_path = $row['image_path'];
        $heading = $row['heading'];

        // here the Insert the product into the cart table
        $insert_sql = "INSERT INTO cart (image_path, heading, product_id) 
                       VALUES ('$image_path', '$heading', '$product_id')";

        // Execute the query to insert into the cart
        if (mysqli_query($conn, $insert_sql)) {
            echo "<script>alert('Product added to cart!');</script>";
        } else {
            echo "Error: " . mysqli_error($conn);
        }
    } else {
        echo "Product not found.";
    }
}

// Fetch all products from the images table to display
$sql = "SELECT * FROM images";
$result = mysqli_query($conn, $sql);

// Display products
if (mysqli_num_rows($result) > 0) {
    while ($row = mysqli_fetch_assoc($result)) {
        echo "<div class='box-1'>";
        // image
        echo "<img src='" . $row['image_path'] . "' alt='Image' width='170' height='220'><br>";
        // heading
        echo "<h2>" . $row['heading'] . "</h2>";


        echo "<form action='' method='POST'>";
        echo "<input type='hidden' name='product_id' value='" . $row['id'] . "'>";  // Hidden input to store product ID
        echo "<button type='submit' name='action' value='add_to_cart' class='btn_css'>Add to Cart</button>";
        echo "<br>";
        echo "<button type='submit' name='action' value='buy_now'  class='btn_css'>Buy Now</button>";
        echo "</form>";

        echo "</div><br>";
    }
} else {
    echo "No products available.";
}

mysqli_close($conn);
?>
            <!-- </div> -->

        </div>

    </div>

    <div id="Contact">
        <h1 class="h-primary center">Contact Us</h1>
        <div class="Contact-box">
            <form action="contactForm.php" method="post">
                <div>
                    <label>Name:</label>
                    <input type="text" placeholder="Write Your Name" name="fname">
                </div>
                <div>
                    <label> E-mail:</label>
                    <input type="email" placeholder="Enter Your E-Mail" name="email">

                </div>
                <div>
                    <label> Phone Number:</label>
                    <input type="number" placeholder="Enter Phone Number" name="number">
                </div>
                <div>
                    <label>Message</label>
                    <textarea cols="30" rows="10" placeholder="Write Your Text here..." name="message"></textarea>    
                </div>
                <input type="submit">
            </form>
            
        </div>
    </div>
    
    <center>
        <div>
            <iframe class="map" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3767.6919146334662!2d72.9716614!3d19.2086541!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3be7b97304d636f1%3A0xd7d62dc2bdd3f9cc!2sViviana%20Mall!5e0!3m2!1sen!2sin!4v1740308156204!5m2!1sen!2sin" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
    </center>

    <footer>
        <div class="center">
            <p>Copyright &copy; 2025 SPAROE SHOE STORE</p>
        </div>
    </footer>
    <!-- <br>
    <br>
    <br>
    <br>
    <br> -->

</body>

</html>