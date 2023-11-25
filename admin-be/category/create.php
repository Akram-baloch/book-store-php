<?php include '../layouts/header.php' ?>
<div class="wrapper">
    <?php include '../layouts/sidenav.php' ?>
    <div id="content">
        <?php include "../layouts/navbar.php" ?>
        <?php
        include "../../config/connection.php";
        if (isset($_POST["submit"])) {
            $name = $_POST['name'];

            $qry = "SELECT * FROM categories WHERE name='$name'";
            $result = mysqli_query($conn, $qry);
            $category = mysqli_num_rows($result);

            if ($category > 0) {
                echo "<script>alert('Category already exist')</script>";
            } else {
                $insert_qry = "INSERT INTO categories(name)VALUES('$name')";
                $iquery = mysqli_query($conn, $insert_qry);
                if ($iquery) {
                    echo "<script>alert('Category added successfully')</script>";
                    echo '<script>window.location.href = "category.php";</script>';   
                } else {
                    echo "<script>alert('Failed')</script>";
                }
            }
        }

        ?>
        <div class="container ">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb bg-light">
                    <li class="breadcrumb-item"><a href="">Dashboard</a></li>
                    <li class="breadcrumb-item"><a href="">Categories</a></li>
                    <li class="breadcrumb-item active" aria-current="page">create</li>
                </ol>
            </nav>
        </div>
        <div class="container mt-5">
            <form class="custom-form" method="post">
                <div class="row text-light bg-info border  rounded mb-2 p-2">
                    <div class="col-sm-5">
                        <a href="category.php">
                            <i class="fa fa-arrow-circle-left" aria-hidden="true"></i>
                        </a>
                    </div>
                    <div class="col-sm-7">
                        <h2>Create</h2>
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-12">
                        <label for="name">Name:</label>
                        <input type="text" class="form-control" id="name" name="name">
                    </div>
                </div>
                <button type="submit" name="submit" class="btn btn-info">Submit</button>
            </form>
        </div>
        <?php include "../layouts/footer.php" ?>
    </div>
</div>