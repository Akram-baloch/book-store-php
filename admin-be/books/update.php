<?php
include "../../config/connection.php";

if (isset($_POST['update'])) {
    $book_id = $_POST['book_id'];
    $name = $_POST['name'];
    $author_id = $_POST['author'];
    $category_id = $_POST['category'];
    $price = $_POST['price'];
    $description = $_POST['description'];
    $image = $_POST['current_image'];

    if ($_FILES['image']['name'] !== "") {

        $current_image_path = '../upload/' . $image;

        if(file_exists($current_image_path)){
            unlink($current_image_path);
        }

        $file = $_FILES['image'];
        $image = date('YmdHis') . '_' . $file['name'];
        $filePath = $file['tmp_name'];
        $fileError = $file['error'];

        // Check if the file type is an image
        $allowedExtensions = array('jpg', 'jpeg', 'png', 'gif');
        $fileExtension = strtolower(pathinfo($image, PATHINFO_EXTENSION));

        if (!in_array($fileExtension, $allowedExtensions)) {
            echo "<script>alert('Error: Invalid file type. Please upload a valid image file.')
            window.location.href = 'create.php'        
            </script>";
            exit();
        }
        if ($fileError == 0) {
            $destfile = '../upload/' . $image;
            move_uploaded_file($filePath, $destfile);
        }
    }

    $update_query = "UPDATE books SET name='$name', author_id='$author_id', category_id='$category_id', price='$price', description='$description', image='$image' WHERE id=$book_id";

    if (mysqli_query($conn, $update_query)) {
        header("Location: index.php"); // Redirect to the index page after successful update
        exit();
    } else {
        echo "Error updating record: " . mysqli_error($conn);
    }
}

// Redirect to the edit page if the book ID is not set
if (!isset($_POST['update']) && !isset($_GET['id'])) {
    header("Location: edit.php");
    exit();
}
