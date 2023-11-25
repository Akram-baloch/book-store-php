<?php include '../layouts/header.php' ?>
<div class="wrapper">
    <?php include '../layouts/sidenav.php' ?>
    <div id="content">
        <?php include "../layouts/navbar.php" ?>
        <?php include "../../config/connection.php" ?>
        <div class="container">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="">Dashboard</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Users</li>
                </ol>
            </nav>
        </div>
        <div class="container">
            <div class="table-wrapper">
                <div class="table-title bg-info">
                    <div class="row">
                        <div class="col-sm-6">
                            <h2>Users</h2>
                        </div>
                        <div class="col-sm-6">
                            <a href="create.php" class="btn btn-success"><i class="fa fa-plus-circle" aria-hidden="true"></i> <span>Add New </span></a>
                        </div>
                    </div>
                </div>

                <?php
                $sqlQuery = "SELECT * FROM `users`";
                $result = mysqli_query($conn, $sqlQuery);
                $rowCount = mysqli_num_rows($result);

                if ($rowCount > 0) {
                    echo '
                <table class="table table-striped table-hover">
                <thead>
                <tr>
                    <th>Id</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Action</th>
                </tr>
                </thead>
                <tbody>';
                    foreach ($result as $index => $row) {
                ?>
                        <tr>
                            <td><?php echo $index + 1; ?></td>
                            <td><?php echo $row['name'] ?></td>
                            <td><?php echo $row['email'] ?></td>
                            <td class="col-md-2">
                                <a href="edit.php?id=<?php echo $row['id'];?>" class="edit"><i class="fa fa-pencil" aria-hidden="true" data-toggle="tooltip" title="Edit"></i></a>
                                <a href="delete.php?id=<?php echo $row['id']; ?>" class="delete"><i class="fa fa-trash-o" onclick="return confirm('Are you sure you want to delete this data')" aria-hidden="true" data-toggle="tooltip" title="Delete"></i></a>
                                <a href="view.php?view=<?php echo $row['id']; ?>"><i class="fa fa-eye" aria-hidden="true" data-toggle="tooltip" title="View"></i></a>
                            </td>
                        </tr>
                <?php
                    }
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
<!-- <script src="../assets/js/script.js"></script> -->
</body>

</html>