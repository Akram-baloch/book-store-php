<?php include '../layouts/header.php' ?>
<div class="wrapper">
    <?php include '../layouts/sidenav.php' ?>
    <div id="content">
        <?php include "../layouts/navbar.php" ?>
        <div class="container ">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb bg-light">
                    <li class="breadcrumb-item"><a href="">Dashboard</a></li>
                    <li class="breadcrumb-item"><a href="">Books</a></li>
                    <li class="breadcrumb-item active" aria-current="page">create</li>
                    </ol>
            </nav>
        </div>
        <div class="container mt-5">

            <form class="custom-form">
                <div class="row text-light bg-info border  rounded mb-2 p-2">
                    <div class="col-sm-5">
                        <a href="index.php">
                            <i class="fa fa-arrow-circle-left" aria-hidden="true"></i>
                        </a>
                    </div>
                    <div class="col-sm-7">
                        <h2>Create</h2>
                    </div>
                </div>
                <div class="form-row">

                    <div class="form-group col-md-6">
                        <label for="id">ID:</label>
                        <input type="text" class="form-control" id="id" name="id">
                    </div>

                    <div class="form-group col-md-6">
                        <label for="name">Name:</label>
                        <input type="text" class="form-control" id="name" name="name">
                    </div>
                </div>

                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="author">Author:</label>
                        <input type="text" class="form-control" id="author" name="author">
                    </div>

                    <div class="form-group col-md-6">
                        <label for="category">Category:</label>
                        <input type="text" class="form-control" id="category" name="category">
                    </div>
                </div>

                <div class="form-group">
                    <label for="image">Image:</label>
                    <div class="custom-file">
                        <input type="file" class="custom-file-input" id="image" name="image">
                        <label class="custom-file-label" for="image">Choose file</label>
                    </div>
                </div>

                <div class="form-group">
                    <label for="description">Description:</label>
                    <textarea class="form-control" id="description" name="description" rows="4"></textarea>
                </div>

                <button type="submit" class="btn btn-info">Submit</button>
            </form>
        </div>

    </div>
</div>