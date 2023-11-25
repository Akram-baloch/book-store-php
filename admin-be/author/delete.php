<?php 
include "../../config/connection.php";

if(isset($_GET['id']))
$delete_id = $_GET['id'];
$deleteQry = "DELETE FROM authors WHERE id=$delete_id";
$deleteResult = mysqli_query($conn,$deleteQry);

if($deleteResult){
    header("Location:author.php");
}else{
    echo "Record not deleted. Error:".mysqli_error($conn);
}
?>