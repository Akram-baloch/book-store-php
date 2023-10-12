<?php include '../layouts/header.php' ?>
<div class="wrapper">
    <?php include '../layouts/sidenav.php' ?>
    <div id="content">
        <?php include "../layouts/navbar.php" ?>
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
            <form class="custom-form">
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
                    <div class="form-group col-md-6">
                        <label for="id">Id:</label>
                        <input type="text" class="form-control" id="id" name="id">
                    </div>

                    <div class="form-group col-md-6">
                        <label for="name">Name:</label>
                        <input type="text" class="form-control" id="name" name="name">
                    </div>
                </div>
                <button type="submit" class="btn btn-info">Submit</button>
            </form>
        </div>
        <?php include "../layouts/footer.php" ?>
    </div>
</div>