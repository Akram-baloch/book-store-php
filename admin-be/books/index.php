<?php include '../layouts/header.php' ?>
<div class="wrapper">
    <?php include '../layouts/sidenav.php' ?>
    <div id="content">
        <?php include "../layouts/navbar.php";

        include "../../config/connection.php";
        ?>
        <div class="container">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="">Dashboard</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Books</li>
                </ol>
            </nav>
        </div>
        <div class="container">
            <div class="table-wrapper">
                <div class="table-title bg-info">
                    <div class="row">
                        <div class="col-sm-6">
                            <h2>Books</h2>
                        </div>
                        <div class="col-sm-6">
                            <a href="create.php" class="btn btn-success"><i class="fa fa-plus-circle" aria-hidden="true"></i> <span>Add New </span></a>
                        </div>
                    </div>
                </div>
                <table class="table table-striped table-hover">
                    <thead>
                        <tr>
                            <th>Id</th>
                            <th>Images</th>
                            <th>Name</th>
                            <th>Author</th>
                            <th>Category</th>
                            <th>Description</th>
                            <th>Amount</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $books = "SELECT books.*,authors.name AS a_name,categories.name AS c_name FROM books
                        JOIN authors ON books.author_id = authors.id
                        JOIN categories ON books.category_id = categories.id";

                        $book_qry = mysqli_query($conn, $books);
                        if (mysqli_num_rows($book_qry) > 0) {

                            foreach ($book_qry as $index => $book) {
                        ?>
                                <tr>
                                    <td><?= $index + 1 ?></td>
                                    <td><img src="../upload/<?= $book['image'] ?>" width="60px" height="60px"></td>
                                    <td><?= $book['name'] ?></td>
                                    <td><?= $book['a_name'] ?></td>
                                    <td><?= $book['c_name'] ?></td>
                                    <td><?= $book['description'] ?></td>
                                    <td><?= $book['price'] ?></td>
                                    <td class="col-md-2">
                                        <a href="edit.php?id=<?= $book['id'] ?>" class="edit"><i class="fa fa-pencil" aria-hidden="true" data-toggle="tooltip" title="Edit"></i></a>
                                        <a href="delete.php?id=<?= $book['id'] ?>" class="delete"><i class="fa fa-trash-o" onclick="return confirm('Are you sure you want to delete this data')" aria-hidden="true" data-toggle="tooltip" title="Delete"></i></a>
                                        <a href="view.php?id=<?= $book['id']?>" class=""><i class="fa fa-eye" aria-hidden="true" data-toggle="tooltip" title="view"></i></a>
                                    </td>
                                </tr>

                        <?php
                            }
                        }else{
                            ?>
                            <tr>
                                <td colspan="8" class="bg-light">No Record Found</td>
                            </tr>
                            <?php

                        }
                        ?>

                    </tbody>
                </table>
                <div class="clearfix">
                    <div class="hint-text">Showing <b>5</b> out of <b>25</b> entries</div>
                    <ul class="pagination">
                        <li class="page-item disabled"><a href="#">Previous</a></li>
                        <li class="page-item"><a href="#" class="page-link">1</a></li>
                        <li class="page-item"><a href="#" class="page-link">2</a></li>
                        <li class="page-item active"><a href="#" class="page-link">3</a></li>
                        <li class="page-item"><a href="#" class="page-link">4</a></li>
                        <li class="page-item"><a href="#" class="page-link">5</a></li>
                        <li class="page-item"><a href="#" class="page-link">Next</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <?php include "../layouts/footer.php" ?>
    </div>
</div>
<script src="../assets/js/script.js"></script>
</body>

</html>