<?php
include "../../config/connection.php";

if (isset($_GET['id'])) {
    $delete_id = $_GET['id'];

    $get_image_query = "SELECT image FROM books WHERE id=$delete_id";
    $get_image_result = mysqli_query($conn, $get_image_query);

    if ($row = mysqli_fetch_assoc($get_image_result)) { 
        
        $image_filename = $row['image'];

        $delete_qry = "DELETE FROM books WHERE id=$delete_id";
        $delete_result = mysqli_query($conn, $delete_qry);

        if ($delete_result) {
            $image_path = "../upload/" . $image_filename;
            if (file_exists($image_path)) {
                unlink($image_path);
            }

            header("Location:index.php");
        } else {
            echo "Record not deleted. Error: " . mysqli_error($conn);
        }
    } else {
        echo "Error fetching image information. Error: " . mysqli_error($conn);
    }
}
?>
