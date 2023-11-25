<?php include '../layouts/header.php' ?>
<div class="wrapper">
    <?php include '../layouts/sidenav.php' ?>
    <div id="content">
        <?php include "../layouts/navbar.php" ?>

        <?php include "../../config/connection.php";

        if (isset($_GET['view'])){
            $user_id = $_GET['view'];
            $userData = "SELECT * FROM users WHERE id = $user_id";
            $result = mysqli_query($conn, $userData);

            if ($row = mysqli_fetch_assoc($result)) {
                $user_id = $row['id'];
                $user_name = $row['name'];
                $user_email = $row['email'];
            } else {
                echo "User not found";
            }
        } else {
            echo "not valid";
        }

        ?>
        <div class="container">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb bg-light">
                    <li class="breadcrumb-item"><a href="">Dashboard</a></li>
                    <li class="breadcrumb-item" aria-current="page">Books</li>
                    <li class="breadcrumb-item active" aria-current="page">view</li>
                </ol>
            </nav>
        </div>
        <div class="container head">
            <div class="row text-light bg-info border  rounded p-2">
                <div class="col-sm-5">
                    <a href="users.php">
                        <i class="fa fa-arrow-circle-left" aria-hidden="true"></i>
                    </a>
                </div>
                <div class="col-sm-7">
                    <h2>View</h2>
                </div>
            </div>
            <ul class="list-group my-3">
                <li class="list-group-item">
                    <div class="row">
                        <div class="col-2">
                            <h6>Name</h6>
                        </div>
                        <div class="col-10">
                            <h6><?php echo $user_name; ?></h6>
                        </div>
                    </div>
                </li>
                <li class="list-group-item">
                    <div class="row">
                        <div class="col-2">
                            <h6>Email</h6>
                        </div>
                        <div class="col-10">
                            <h6><?php echo $user_email; ?></h6>
                        </div>
                    </div>
                </li>
            </ul>
        </div>
        <?php include "../layouts/footer.php" ?>
    </div>
</div>