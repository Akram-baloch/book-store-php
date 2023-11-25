<?php include '../layouts/header.php' ?>
<div class="wrapper">
    <?php include '../layouts/sidenav.php' ?>
    <div id="content">
        <?php include "../layouts/navbar.php" ?>
        <?php include "../../config/connection.php";

        if (isset($_POST['update_btn'])) {
            $data_id = $_POST['data_id'];
            $user_name = $_POST['name'];
            $email = $_POST['email'];
            $sql = "UPDATE users SET name='$user_name',email='$email' WHERE id=$data_id";
            $result = mysqli_query($conn, $sql);

            if($result){
                echo "<script> alert('update successfuly') </script>";
                echo '<script>window.location.href = "users.php";</script>';
            }else{
                echo "<script> alert('not updated') </script>";
            }
        }
        ?>
        <div class="container ">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb bg-light">
                    <li class="breadcrumb-item"><a href="">Dashboard</a></li>
                    <li class="breadcrumb-item"><a href="">Users</a></li>
                    <li class="breadcrumb-item active" aria-current="page">create</li>
                </ol>
            </nav>
        </div>
        <div class="container ">
            <?php
            if (isset($_GET["id"])) {
                $edit_id = $_GET['id'];
                $get_data = mysqli_query($conn, "SELECT * FROM users WHERE id=$edit_id");
                if (mysqli_num_rows($get_data) > 0) {
                    $fetch_data = mysqli_fetch_assoc($get_data);
            ?>
                    <form class="custom-form" method="post">
                        <div class="row text-light bg-info border  rounded mb-2 p-2">
                            <div class="col-sm-12">
                                <h2 class="text-center">Edit</h2>
                            </div>
                        </div>
                        <div class="form-row">
                            <input type="hidden" class="form-control" name="data_id" value="<?php echo $fetch_data['id']; ?>">
                            <div class="form-group col-md-12 mt-3">
                                <input type="text" class="form-control p-2" value="<?php echo $fetch_data['name']; ?>" name="name" required>
                            </div>
                            <div class="form-group col-md-12">
                                <input type="text" class="form-control p-2" value="<?php echo $fetch_data['email']; ?>" name="email" required>
                            </div>
                        </div>
                        <button type="submit" name="update_btn" class="btn btn-info px-3">Update</button>
                    </form>
            <?php
                }
            }
            ?>
        </div>
        <?php include "../layouts/footer.php" ?>
    </div>
</div>