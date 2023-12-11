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
            <div class="table-wrapper bg-light">
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
                <?php
                $limit = 5;

                if (isset($_GET['page'])) {
                    $page = $_GET['page'];
                } else {
                    $page = 1;
                }
                $offset = ($page - 1) * $limit;

                $books = "SELECT books.*,authors.name AS a_name,categories.name AS c_name FROM books
                        JOIN authors ON books.author_id = authors.id
                        JOIN categories ON books.category_id = categories.id LIMIT $limit OFFSET $offset";
                $book_qry = mysqli_query($conn, $books);
                if (mysqli_num_rows($book_qry) > 0) {
                    echo '<table class="table table-striped table-hover">
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
                            <tbody>';

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
                                <a href="view.php?id=<?= $book['id'] ?>" class=""><i class="fa fa-eye" aria-hidden="true" data-toggle="tooltip" title="view"></i></a>
                            </td>
                        </tr>

                    <?php
                    }
                    echo '</tbody>
                          </table>';
                } else {
                    echo '<div class="bg-danger text-white my-2">No Record Found</div>';

                }
                ?>

                <?php
                $sql = "SELECT * FROM books";
                $result = mysqli_query($conn, $sql);

                if ($total_records = mysqli_num_rows($result)) {
                    $total_pages = ceil($total_records / $limit);

                    echo '
                    <div class="clearfix">
                    <div class="hint-text">Showing <b>5</b> out of <b>25</b> entries</div>
                    <ul class="pagination">';
                    if ($page > 1) {
                        echo '<li class="page-item disabled"><a href="index.php?page=' . ($page - 1) . '">Previous</a></li>';
                    }
                    for ($i = 1; $i <= $total_pages; $i++) {
                        if ($i == $page) {
                            $active = "active";
                        } else {
                            $active = "";
                        }
                        echo '<li class="page-item ' . $active . ' "><a href="index.php?page=' . $i . '" class="page-link">' . $i . '</a></li>';
                    }
                    if ($total_pages > $page) {
                        echo '<li class="page-item disabled"><a href="index.php?page=' . ($page + 1) . '">Next</a></li>';
                    }
                    echo '</ul>
                    </div>
                    </div>
                    ';
                }
                ?>
            </div>
        </div>
        </div>
            <?php include "../layouts/footer.php" ?>
    </div>
    </div>
    <script src="../assets/js/script.js"></script>
    </body>

    </html>