<?php include '../layouts/header.php' ?>
<div class="wrapper">
    <?php include '../layouts/sidenav.php' ?>
    <div id="content">
        <?php include "../layouts/navbar.php" ?>

        <?php include "../../config/connection.php";

        $oldUsername = "";
        $oldEmail = "";
        
        if (isset($_POST["submit"])) {
        
            $username = mysqli_real_escape_string($conn, $_POST["username"]);
            $email = mysqli_real_escape_string($conn, $_POST["email"]);
            $password = mysqli_real_escape_string($conn, $_POST["password"]);
        
            $oldUsername = $username;
            $oldEmail = $email;
        
            $email_qry = "select * from users where email='$email'";
        
            $query = mysqli_query($conn, $email_qry);
        
            $email_count  = mysqli_num_rows($query);
        
            if ($email_count > 0) {
                echo "<script>alert('Email already exist')</script>";
            } else if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                echo "<script>alert('Invalid email address')</script>";
            } else if (strlen($password) < 6 || !preg_match("/[A-Z]/", $password) || !preg_match("/[a-z]/", $password) || !preg_match("/[0-9]/", $password)) {
                echo "<script>alert('Invalid password. It must be at least 6 characters long and contain at least one uppercase letter, one lowercase letter, and one digit.')</script>";
            } else {
                $pass_hash = password_hash($password, PASSWORD_BCRYPT);
                $insert_qry = "INSERT INTO users(name, email, password) VALUES('$username', '$email', '$pass_hash')";
                $iquery = mysqli_query($conn, $insert_qry);
                if ($iquery) {
                    echo "<script>alert('Register Successful')</script>";
                    echo '<script>window.location.href = "users.php";</script>';   
                } else {
                    echo "<script>alert('Registration failed')</script>";

                }
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

        <div class="container mt-5">
            <form class="custom-form" method="post">
                <div class="row text-light bg-info border  rounded mb-2 p-2">
                    <div class="col-sm-5">
                        <a href="users.php">
                            <i class="fa fa-arrow-circle-left" aria-hidden="true"></i>
                        </a>
                    </div>
                    <div class="col-sm-7">
                        <h2>Create</h2>
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-12">
                        <input type="text" class="form-control p-2" placeholder="Enter Name" name="username" required>
                    </div>

                    <div class="form-group col-md-12">
                        <input type="text" class="form-control p-2" placeholder="Enter Email" name="email" required>
                    </div>
                    <div class="form-group col-md-12">
                        <input type="password" class="form-control" placeholder="Enter Password" name="password" required>
                    </div>
                </div>
                <button type="submit" name="submit" class="btn btn-info px-3">Submit</button>
            </form>
        </div>


        <?php include "../layouts/footer.php" ?>
    </div>
</div>