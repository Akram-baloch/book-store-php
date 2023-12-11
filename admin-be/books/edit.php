<?php
include "../../config/connection.php";
include '../layouts/header.php';
?>
<div class="wrapper">
    <?php include '../layouts/sidenav.php' ?>
    <div id="content">
        <?php include "../layouts/navbar.php"; ?>
        <div class="container ">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb bg-light">
                    <li class="breadcrumb-item"><a href="">Dashboard</a></li>
                    <li class="breadcrumb-item"><a href="">Books</a></li>
                    <li class="breadcrumb-item active" aria-current="page">edit</li>
                </ol>
            </nav>
        </div>
        <div class="container">

            <?php
            if (isset($_GET['id'])) {
                $book_id = $_GET['id'];

                $book_query = "SELECT * FROM books where id = $book_id";
                $books = mysqli_query($conn, $book_query);
                foreach ($books as $book) {
            ?>

                    <form class="custom-form" action="update.php" method="post" enctype="multipart/form-data">
                        <div class="row text-light bg-info border rounded mb-2 p-2">
                            <div class="col-sm-5">
                                <a href="index.php">
                                    <i class="fa fa-arrow-circle-left" aria-hidden="true"></i>
                                </a>
                            </div>
                            <div class="col-sm-7">
                                <h2>Edit</h2>
                            </div>
                        </div>
                        <div class="form-row">
                        <input type="hidden" name="book_id" value="<?= $book['id'] ?>">
                            <div class="form-group col-md-12">
                                <label for="name">Name:</label>
                                <input type="text" class="form-control" value="<?= $book['name'] ?>" name="name">
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-12">
                                <label for="author">Authors:</label>
                                <select class="form-control" required name="author">

                                    <?php
                                    $authorQuery = "SELECT * FROM authors";
                                    $authorResult = mysqli_query($conn, $authorQuery);

                                    foreach ($authorResult as $authorRow) {
                                    ?>
                                        <option value="<?= $authorRow['id']; ?>" <?= $book['author_id'] === $authorRow['id'] ? 'selected' : '' ?>><?= $authorRow['name']; ?></option>
                                    <?php
                                    }
                                    ?>
                                </select>
                            </div>
                            <div class="form-group col-md-12">
                                <label for="category">Category:</label>
                                <select class="form-control" required name="category">
                                    <?php
                                    $categoryQuery = "SELECT * FROM categories";
                                    $categoryResult = mysqli_query($conn, $categoryQuery);
                                    foreach ($categoryResult as $categoryRow) {
                                    ?>
                                        <option value="<?= $categoryRow['id'] ?>" <?= $book['category_id'] === $categoryRow['id'] ? 'selected' : '' ?>><?= $categoryRow['name'] ?></option>
                                    <?php
                                    }
                                    ?>
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="image">Image:</label>
                            <input type="hidden" name="current_image" value="<?= $book['image'] ?>">
                            <div class="custom-file">
                                <input type="file" class="custom-file-input" value="<?= $book['image'] ?>" name="image" id="customFile" onchange="updateFileName(this)">
                                <label class="custom-file-label" for="customFile">Choose file</label>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="name">Price:</label>
                            <input type="text" class="form-control" value="<?= $book['price'] ?>" name="price">
                        </div>
                        <div class="form-group">
                            <label for="description">Description:</label>
                            <textarea class="form-control" name="description" rows="3"><?= $book['description'] ?></textarea>
                        </div>
                        <button type="submit" name="update" class="btn btn-info">Submit</button>
                    </form>
            <?php }
            } ?>
        </div>
        <?php include "../layouts/footer.php" ?>
    </div>
</div>
<script>
function updateFileName(input) {
        var fileName = input.files[0].name;
        document.querySelector('.custom-file-label').textContent = fileName;
    }
</script>