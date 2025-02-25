<?php
include './connection.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $heading = $_POST['heading'];

    // Image upload handling
    $image = $_FILES['image']['name'];
    $image_tmp = $_FILES['image']['tmp_name'];
    $target_dir = "uploads/";
    $target_file = $target_dir . basename($image);

    if (move_uploaded_file($image_tmp, $target_file)) {
        echo "The file ". basename($image). " has been uploaded.<br>";

        $sql = "INSERT INTO images (heading, image_path) VALUES ('$heading', '$target_file')";

        if (mysqli_query($conn, $sql)) {
            echo "Data successfully stored in database.<br>";
        } else {
            echo "Error: ";
        }
    } else {
        echo "Sorry, there was an error uploading your file.<br>";
    }
}

mysqli_close($conn);
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="list.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Upload Image and Heading</title>
</head>
<body>
<?php
    include "./navbar.php";
?>

<div class="masterAdminContainer">
    <h1 style="text-align:center; padding: 10px;">Upload Image and Heading</h1>
    <div class="admin_container">
        <form action="" method="POST" enctype="multipart/form-data">
            <label for="heading">Enter Heading:</label>
            <input type="text" name="heading" id="heading" required><br><br>

            <label for="image">Select Image:</label>
            <input type="file" name="image" id="image" accept="image/*" required><br><br>

            <input type="submit" class='updBtn' value="Upload">
        </form>
    </div>
</div>

</body>
</html>
