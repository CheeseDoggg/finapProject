<?php
session_start();
include 'connection.php';
if (!isset($_SESSION['uType']) || $_SESSION['uType'] !== 'Admin') {
    // User is not authenticated or is not a passenger user, redirect to login page
    header('Location: login.php');
    exit();
}

$error = "";
// Check if the product ID is provided in the URL
if (isset($_GET['pID'])) {
    $pID = $_GET['pID'];

    // Check if the form is submitted for updating the product
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Retrieve the product details from the form
        if (isset($_POST['delete'])) {
            // Delete the product from the database
            $sql = "DELETE FROM `product` WHERE `pID` = $pID";
            $result = mysqli_query($conn, $sql);

            // Check if the deletion was successful
            if ($result) {
                echo "<script>alert('Product Deleted!'); window.location.href='admin.php';</script>";

            } else {
                $error = "Failed to Delete!";
                echo "<script>alert('$error'); window.location.href='admin.php';</script>";
            }
        }
        $pName = $_POST['pName'];
        $pDesc = $_POST['pDesc'];
        $pPrice = $_POST['pPrice'];

        // Process the uploaded photo
        $targetDirectory = "assets/img/"; // Specify the directory where the uploaded images will be stored
        $targetFile = $targetDirectory . basename($_FILES["pPhoto"]["name"]);
        $uploadOk = 1;
        $imageFileType = strtolower(pathinfo($targetFile, PATHINFO_EXTENSION));

        $photo = basename($_FILES["pPhoto"]["name"]);
        // Check if the file is an actual image
        $check = getimagesize($_FILES["pPhoto"]["tmp_name"]);
        if ($check !== false) {
            $uploadOk = 1;
        } else {

            $error = "Error: File is not an image.";

            $uploadOk = 0;
            echo "<script>alert('$error'); window.location.href='admin.php';</script>";
        }

        //   // Check if the file already exists
        //   if (file_exists($targetFile)) {
        //     echo "Error: File already exists.";
        //     $uploadOk = 0;
        //   }

        //   // Check the file size (adjust the limit as per your requirements)
        //   if ($_FILES["pPhoto"]["size"] > 500000) {
        //     echo "Error: File size is too large.";
        //     $uploadOk = 0;
        //   }

        // Allow only specific image file formats (you can add more if needed)
        if (
            $imageFileType != "jpg" &&
            $imageFileType != "jpeg" &&
            $imageFileType != "png"
        ) {
            $error = "Only JPG, JPEG, and PNG files are allowed.";
            $uploadOk = 0;
            echo "<script>alert('$error'); window.location.href='admin.php';</script>";
        }

        // Check if the file was successfully uploaded
        if ($uploadOk == 1) {
            if (move_uploaded_file($_FILES["pPhoto"]["tmp_name"], $targetFile)) {
                // File uploaded successfully, now insert the product details into the database

                // Prepare the SQL statement
                $sql = "UPDATE `product` SET `pName` = '$pName', `pDesc` = '$pDesc', `pPrice` = $pPrice, `pPhoto` = '$photo' WHERE `pID` = $pID";

                // Execute the SQL statement
                $result = mysqli_query($conn, $sql);

                // Check if the update was successful
                if ($result) {
                    echo "<script>alert('Product Updated!'); window.location.href='admin.php';</script>";
                } else {
                    $error = "Failed to Update!";
                    echo "<script>alert('$error'); window.location.href='admin.php';</script>";
                }
            } else {
                $error = "Error uploading the file.";
                echo "<script>alert('$error'); window.location.href='admin.php';</script>";
            }
        }
    } else {
        // Retrieve the product details from the database
        $sql = "SELECT * FROM `product` WHERE `pID` = $pID";
        $result = mysqli_query($conn, $sql);

        // Check if the product exists in the database
        if (mysqli_num_rows($result) == 1) {
            $row = mysqli_fetch_assoc($result);
            $pName = $row['pName'];
            $pDesc = $row['pDesc'];
            $pPrice = $row['pPrice'];
            $pPhoto = $row['pPhoto'];
        } else {
            $error = "Product not found.";
            echo "<script>alert('$error'); window.location.href='admin.php';</script>";
        }
    }
} else {
    $error = "Product ID not provided.";
    echo "<script>alert('$error'); window.location.href='admin.php';</script>";
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Product</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <h1>Edit Product</h1>

    <form action="" method="POST" enctype="multipart/form-data">
        <?php if (!empty($error)) { ?>
            <div style="color: red; margin-left: 50px;"><?php echo $error; ?></div>
        <?php } ?>
        <label for="pName">Product Name:</label>
        <input type="text" name="pName" value="<?php echo $pName; ?>" required><br><br>

        <label for="pDesc">Product Description:</label>
        <textarea name="pDesc" rows="4" required><?php echo $pDesc; ?></textarea><br><br>

        <label for="pPrice">Product Price:</label>
        <input type="number" name="pPrice" step="0.01" value="<?php echo $pPrice; ?>" required><br><br>

        <label for="pPhoto">Product Photo:</label>
        <div class="choose-file-container">
            <label class="choose-file" for="pPhoto">
                <i class="bi bi-upload upload-icon"></i>Choose File
            </label>
            <input type="file" name="pPhoto" id="pPhoto"  value="<?php echo $pPhoto; ?>"required>
        </div>
        <br><br>
        <div>
		<button type="submit" name="update" style="background-color: #4CAF50; color: white; border: none; padding: 5px 10px; margin-bottom: 20px; margin-top: 20px;"><i class="fas fa-edit"></i> Update Product</button>

            <button type="submit" name="delete" style="background-color: red; color: white; border: none; padding: 5px 10px; margin-left: 10px;"><i class="fas fa-trash-alt"></i> Delete Product</button>
        </div>
    </form>
</body>

</html>
