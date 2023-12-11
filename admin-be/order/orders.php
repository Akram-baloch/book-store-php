<?php include '../layouts/header.php' ?>
<div class="wrapper">
    <?php include '../layouts/sidenav.php' ?>
    <div id="content">
        <?php include "../layouts/navbar.php";
        include '../../config/connection.php'; ?>
        <div class="container">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="">Dashboard</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Orders</li>
                </ol>
            </nav>
        </div>
        <div class="container">
            <div class="table-wrapper">
                <div class="table-title bg-info">
                    <div class="row">
                        <div class="col-sm-6">
                            <h2>Orders</h2>
                        </div>
                    </div>
                </div>

                <table class="table table-striped table-hover">
                    <thead>
                        <tr>
                            <th>Order_Id</th>
                            <th>Book Image</th>
                            <th>Book Name</th>
                            <th>Status</th>
                            <th>Quantity</th>
                            <th>Unit Price</th>
                            <th>TotalAmount</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $orderQuery = "SELECT o.id, o.total_amount, o.status, oi.quantity, oi.unit_price, b.name, b.image FROM orders o
                        JOIN orderitems oi ON oi.order_id = o.id
                        JOIN books b ON b.id = oi.book_id";
                        $orders = mysqli_query($conn, $orderQuery);
                        $currentOrderId = null;
                        $totalAmountPrinted = false;
                        
                        if (mysqli_num_rows($orders)) {
                            foreach ($orders as $order) {
                                if ($order['id'] !== $currentOrderId) {
                                    // Print total amount only once per order
                                    if ($totalAmountPrinted) {
                                        echo '<tr><td colspan="6"></td><td></td></tr>';
                                    }
                                    $currentOrderId = $order['id'];
                                    $totalAmountPrinted = false;
                                }
                                ?>
                                <tr>
                                    <td><?= $order['id'] ?></td>
                                    <td><img src="../upload/<?= $order['image'] ?>" width="50px" height="50px"></td>
                                    <td><?= $order['name'] ?></td>
                                    <td><?= $order['status'] ?></td>
                                    <td><?= $order['quantity'] ?></td>
                                    <td><?= $order['unit_price'] ?></td>
                                    <?php
                                    // Print total amount for the first item in the order
                                    if (!$totalAmountPrinted) {
                                        echo '<td>' . $order['total_amount'] . '</td>';
                                        $totalAmountPrinted = true;
                                    } else {
                                        echo '<td></td>';
                                    }
                                    ?>
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
<script src="../assets/js/script.js"></script>
</body>

</html>