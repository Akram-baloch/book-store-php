<?php
include "../../config/connection.php";

if (isset($_GET['id'])) {
    $delete_id = $_GET['id'];

    $delete_qry = "DELETE FROM books WHERE id=$delete_id";
    $delete_result = mysqli_query($conn, $delete_qry);

    if ($delete_result) {
        header("Location:index.php");
    } else {
        echo "Record not deleted. Error:" . mysqli_error($conn);
    }
}
