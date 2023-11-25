<?php include "../../config/connection.php";

if (isset($_GET['id']) && !empty($_GET['id'])) {
    $delete_id = $_GET['id'];
    $deleteQry = "DELETE FROM users WHERE id=$delete_id";

    $delete_data = mysqli_query($conn, $deleteQry);

    if ($delete_data) {
        header('Location: users.php');
    } else {
        echo "Record not deleted. Error: " . mysqli_error($conn);
    }
}
