<!DOCTYPE html>
<html lang="en">

<?php include "layouts/header.php" ?>

<body>
    <?php include "layouts/navbar.php" ?>
    <!-- detail page -->
    <div class="container mt-5 pt-3 w-75">
        <div class="row">
            <div class="col-lg-6">
                <img src="assets/images/b1.jpg" class="mt-4" alt="">
            </div>
            <div class="col-lg-6">
                <h1 class="my-4 display-5">Sam & Dave dig a Hole</h1>
                <span class="h4 text-success">$14.00</span>
                <div class="d-flex gap-5 mt-3">
                    <p class="text text-secondary">Authors:</p>
                    <p> Si Modarsk, Te Sorkaz</p>
                </div>
                <div class="d-flex gap-5 ">
                    <p class="text text-secondary">Category:</p>
                    <p>Drama</p>
                </div>
                <p>Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae
                    consequatur, vel illum qui dolorem eum fugiat quo voluptas nulla pariatur erit qui in ea voluptate
                </p>
                <hr class="my-4">
                <div class="d-flex align-items-center my-2 gap-4">
                    <h6>QUANTITY</h6>
                    <input type="number" aria-label="Last name" class="form-control w-25">
                </div>
                <button type="button" class="btn btn-danger btn-lg my-4">ADD TO CART</button>
            </div>
        </div>
    </div>
    <?php include "layouts/footer.php" ?>
</body>

</html>