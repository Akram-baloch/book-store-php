<!DOCTYPE html>
<html lang="en">

<?php
include "layouts/header.php";
$cartItems = [];
if (isset($_SESSION['cartItems'])) {
    $cartItems = $_SESSION['cartItems'];
}
// echo json_encode($cartItems);
// exit; 
?>

<body>
    <?php include "layouts/navbar.php" ?>
    <!-- shopping cart -->
    <div class="container mt-5 pb-5 overflow-hidden">
        <h1 class="text-center bg-secondary text-light py-4">Shopping Cart</h1>
        <table class="table table-striped table-hover table-bordered border-white text-center">
            <thead class="h5">
                <tr>
                    <th scope="col">Id</th>
                    <th colspan="2">Book</th>
                    <th scope="col">Name</th>
                    <th scope="col">Quantity</th>
                    <th scope="col">Unit Price</th>
                    <th scope="col">Total Price</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $totalQty=0;
                $grandTotal = 0;
        
                foreach ($cartItems as $index => $item) {
                    $total = $item['price'] * $item['quantity'];
                    $totalQty +=$item['quantity'];
                    $grandTotal +=$total;
                ?>
                    <tr>
                        <td><?= $index + 1 ?></td>
                        <td colspan="2"><img src="../admin-be/upload/<?= $item['image'] ?>" alt="" width="70px" height="70px"></td>
                        <td><?= $item['name'] ?></td>
                        <td><?= $item['quantity'] ?></td>
                        <td><?= $item['price'] ?></td>
                        <td><?= $total ?></td>
                        <form action="add_to_cart.php" method="POST">
                            <td><button name="remove" class="btn btn-danger">Remove</button></td>
                            <td><input type="hidden" name="index" value="<?= $index ?>"></td>
                        </form>
                    </tr>
                <?php
                } ?>
            </tbody>
        </table>
        <div class="container">
            <div class="d-flex justify-content-around">
                <p>Total Quantity</p>
                <p id="totalQty"> <?= $totalQty?></p>
                <p>Grand Total</p>
                <p id="totalPrice"><?= $grandTotal ?></p>
                <form action="order.php" method="post">
                    <input type="hidden" name="total" value="<?=$grandTotal?>">
                    <button type="submit" class="btn btn-outline-secondary">Order Now</button>
                </form>
            </div>
        </div>
    </div>
    <?php include "layouts/footer.php" ?>
</body>

</html>