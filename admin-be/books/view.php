<?php include '../layouts/header.php' ?>
<div class="wrapper">
    <?php include '../layouts/sidenav.php' ?>
    <div id="content">
        <?php include "../layouts/navbar.php";
        include "../../config/connection.php";

        if (isset($_GET['id'])) {
            $book_id = $_GET['id'];
            $book_query = "SELECT books.*,authors.name AS author_name,categories.name AS category_name FROM books
            JOIN authors ON books.author_id = authors.id
            JOIN categories ON books.category_id = categories.id
            WHERE books.id = $book_id";
            $result = mysqli_query($conn, $book_query);

            if (mysqli_num_rows($result) > 0) {
                $book = mysqli_fetch_assoc($result);
            }
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
                    <a href="index.php">
                        <i class="fa fa-arrow-circle-left" aria-hidden="true"></i>
                    </a>
                </div>
                <div class="col-sm-7">
                    <h2>View</h2>
                </div>
            </div>
            <ul class="list-group">
                <li class="list-group-item">
                    <div class="row">
                        <div class="col-2">
                            <h6>Name</h6>
                        </div>
                        <div class="col-10">
                            <h6><?= $book['name']?></h6>
                        </div>
                    </div>
                </li>
                <li class="list-group-item">
                    <div class="row">
                        <div class="col-2">
                            <h6>Image</h6>
                        </div>
                        <div class="col-10">
                        <img src="../upload/<?= $book['image']?>" alt="" width="100px">
                        </div>
                    </div>
                </li>
                <li class="list-group-item">
                    <div class="row">
                        <div class="col-2">
                            <h6>Description</h6>
                        </div>
                        <div class="col-10">
                            <h6 class="w-75"><?= $book['description']?></h6>
                        </div>
                    </div>
                </li>
                <li class="list-group-item">
                    <div class="row">
                        <div class="col-2">
                            <h6>Author</h6>
                        </div>
                        <div class="col-10">
                            <h6><?= $book['author_name']?></h6>
                        </div>
                    </div>
                </li>
                <li class="list-group-item">
                    <div class="row">
                        <div class="col-2">
                            <h6>Category</h6>
                        </div>
                        <div class="col-10">
                            <h6><?= $book['category_name']?></h6>
                        </div>
                    </div>
                </li>
                <li class="list-group-item">
                    <div class="row">
                        <div class="col-2">
                            <h6>Amount</h6>
                        </div>
                        <div class="col-10">
                            <h6><?= $book['price']?></h6>
                        </div>
                    </div>
                </li>
                <li class="list-group-item">
                    <div class="row">
                        <div class="col-2">
                            <h6>Created_at</h6>
                        </div>
                        <div class="col-10">
                            <h6>1</h6>
                        </div>
                    </div>
                </li>
                <li class="list-group-item">
                    <div class="row">
                        <div class="col-2">
                            <h6>Updated_at</h6>
                        </div>
                        <div class="col-10">
                            <h6>1</h6>
                        </div>
                    </div>
                </li>
            </ul>
        </div>
        <?php include "../layouts/footer.php" ?>
    </div>
</div>