<?php
include "../../config/connection.php";
session_start();
include "../layouts/header.php";

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
        } else {
            echo "<script>alert('Registration failed')</script>";
        }
    }
}
?>

<div class="d-flex align-items-center justify-content-center h-screen">
    <div class="bg-white px-4 py-4 mt-5 rounded shadow-lg" style="width: 22rem;">
        <div class="mx-auto text-center my-4 mb-6">
            <h2 class=" text-uppercase font-weight-bold mb-4">Register</h2>
        </div>
        <form method="post">
            <div class="form-group mb-6">
                <div class="input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text">
                            <i class="fa fa-user"></i>
                        </span>
                    </div>
                    <input type="text" name="username" value="<?php echo $oldUsername ?>" class="form-control py-2 outline-0" placeholder="Username" required>
                </div>
            </div>
            <div class="form-group mb-6">
                <div class="input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text">
                            <i class="fa fa-envelope"></i>
                        </span>
                    </div>
                    <input type="email" name="email" value="<?php echo $oldEmail ?>" class="form-control py-2 outline-0" placeholder="Email" required>
                </div>
            </div>
            <div class="form-group mb-6">
                <div class="input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text">
                            <i class="fa fa-lock"></i>
                        </span>
                    </div>
                    <input type="password" name="password" id="pasword" class="form-control py-2 outline-0" placeholder="Password" required>
                    <div class="input-group-append">
                        <span class="input-group-text password-toggle" id="icon" onclick="toggleVisibility()">
                            <i class="fa fa-eye"></i>
                        </span>
                    </div>
                </div>
            </div>
            <button type="submit" name="submit" class="btn btn-success btn-block py-2 mt-4">Register</button>
            <p class="text-center text-sm text-gray-400 mt-4">Have an account? <a href="login.php" class="font-weight-semibold text-purple-600">Log in</a></p>
        </form>

    </div>
</div>

<script>
    function toggleVisibility() {
        var getPasword = document.getElementById("pasword");
        var icon = document.getElementById("icon");
        
        if (getPasword.type === "password") {
            getPasword.type = "text";
            icon.style.color = "blue";
        } else {
            getPasword.type = "password";
            icon.style.color = "";
        }
    }
</script>
</body>

</html>