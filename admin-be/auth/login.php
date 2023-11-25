<?php
include "../../config/connection.php";
session_start();
 include "../layouts/header.php"; 

if (isset($_POST['submit'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];

    $email_search = "select * from users where email='$email'";

    $query = mysqli_query($conn, $email_search);

    if (mysqli_num_rows($query) > 0) {
        $user_data = mysqli_fetch_assoc($query);
        $db_pass = $user_data['password'];

        $verify_pass = password_verify($password, $db_pass);

        if ($verify_pass) {
            $_SESSION['user'] = $user_data;
            echo "<script>alert('Login Successful')</script>";
            header ("location:../dashboard/dashboard.php");
        } else {
            echo "<script>alert('Incorrect Password')</script>";
        }
    } else {
        echo "<script>alert('Invalid Email')</script>";
    }
}
// var_dump($_SESSION['user']);
?>

<div class="container mt-5">
    <div class="row justify-content-center align-items-center text-center p-2">
        <div class="m-1 col-sm-8 col-md-6 col-lg-4 shadow-lg p-3 mb-5 bg-white border rounded">
            <div class="pt-5 pb-5">
                <img class="rounded mx-auto d-block" src="https://freelogovector.net/wp-content/uploads/logo-images-13/microsoft-cortana-logo-vector-73233.png" alt="" width=70px height=70px>
                <p class="text-xl h4 text-uppercase font-weight-bold mb-4">Login</p>
                <form class="form text-center" method="POST">
                    <div class="form-group input-group-md">
                        <input type="email" class="form-control" name="email" aria-describedby="emailHelp" placeholder="Enter email" required>
                    </div>
                    <div class="form-group input-group-md">
                        <input type="password" class="form-control" name="password" placeholder="Password" required>
                    </div>
                    <button type="submit" name="submit" class="btn btn-primary btn-block btn-primary mt-4" type="submit">
                        Login
                    </button>
                    <a href="#" class="float-right mt-2">Forgot Password? </a>
                </form>
            </div>
            <p class="text-center text-sm mt-4">Don't have an account? <a href="register.php" class="fw-bold text-primary">Register</a></p>
        </div>
    </div>
</div>
</body>

</html>