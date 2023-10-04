<!DOCTYPE html>
<html lang="en">

<?php include "layouts/header.php" ?>

<body>
    <?php include "layouts/navbar.php" ?>
    <!-- shopping cart -->
    <div class="container mt-5 pb-5 overflow-hidden">
        <h1 class="text-center bg-secondary text-light py-4">Shopping Cart</h1>
        <table class="table table-striped table-hover table-bordered border-white text-center">
            <thead class="h5">
                <tr>
                    <th scope="col">Id</th>
                    <th colspan="2">Item</th>
                    <th scope="col">Category</th>
                    <th scope="col">Quantity</th>
                    <th scope="col">Unit Price</th>
                    <th scope="col">Total Price</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>1</td>
                    <td colspan="2">Apple</td>
                    <td>Fruit</td>
                    <td>2</td>
                    <td>$1.00</td>
                    <td>$2.00</td>
                    <td>
                        <a href="#" class="btn btn-primary">Edit</a>
                        <a href="#" class="btn btn-danger">Delete</a>
                    </td>
                </tr>
                <tr>
                    <td>2</td>
                    <td colspan="2">Orange</td>
                    <td>Fruit</td>
                    <td>3</td>
                    <td>$0.50</td>
                    <td>$1.50</td>
                    <td>
                        <a href="#" class="btn btn-primary">Edit</a>
                        <a href="#" class="btn btn-danger">Delete</a>
                    </td>
                </tr>
                <tr>
                    <td>3</td>
                    <td colspan="2">Banana</td>
                    <td>Fruit</td>
                    <td>4</td>
                    <td>$0.25</td>
                    <td>$1.00</td>
                    <td>
                        <a href="#" class="btn btn-primary">Edit</a>
                        <a href="#" class="btn btn-danger">Delete</a>
                    </td>
                </tr>
                <tr>
                    <td>4</td>
                    <td colspan="2">Carrot</td>
                    <td>Vegetable</td>
                    <td>5</td>
                    <td>$0.10</td>
                    <td>$0.50</td>
                    <td>
                        <a href="#" class="btn btn-primary">Edit</a>
                        <a href="#" class="btn btn-danger">Delete</a>
                    </td>
                </tr>
                <tr>
                    <td>5</td>
                    <td colspan="2">Potato</td>
                    <td>Vegetable</td>
                    <td>6</td>
                    <td>$0.20</td>
                    <td>$1.20</td>
                    <td>
                        <a href="#" class="btn btn-primary">Edit</a>
                        <a href="#" class="btn btn-danger">Delete</a>
                    </td>
                </tr>
                <tr>
                    <td>6</td>
                    <td colspan="2">Milk</td>
                    <td>Dairy</td>
                    <td>1</td>
                    <td>$2.00</td>
                    <td>$2.00</td>
                    <td>
                        <a href="#" class="btn btn-primary">Edit</a>
                        <a href="#" class="btn btn-danger">Delete</a>
                    </td>
                </tr>
                <tr>
                    <td>7</td>
                    <td colspan="2">Eggs</td>
                    <td>Dairy</td>
                    <td>12</td>
                    <td>$0.50</td>
                    <td>$6.00</td>
                    <td>
                        <a href="#" class="btn btn-primary">Edit</a>
                        <a href="#" class="btn btn-danger">Delete</a>
                    </td>
                </tr>
                <tr>
                    <td>8</td>
                    <td colspan="2">Bread</td>
                    <td>Grain</td>
                    <td>2</td>
                    <td>$3.00</td>
                    <td>$6.00</td>
                    <td>
                        <a href="#" class="btn btn-primary">Edit</a>
                        <a href="#" class="btn btn-danger">Delete</a>
                    </td>
                </tr>
                <tr>
                    <td>9</td>
                    <td colspan="2">Cereal</td>
                    <td>Grain</td>
                    <td>1</td>
                    <td>$5.00</td>
                    <td>$5.00</td>
                    <td>
                        <a href="#" class="btn btn-primary">Edit</a>
                        <a href="#" class="btn btn-danger">Delete</a>
                    </td>
                </tr>
                <tr>
                    <td>10</td>
                    <td colspan="2">Soda</td>
                    <td>Drink</td>
                    <td>2</td>
                    <td>$2.00</td>
                    <td>$4.00</td>
                    <td>
                        <a href="#" class="btn btn-primary">Edit</a>
                        <a href="#" class="btn btn-danger">Delete</a>
                    </td>
                </tr>
            </tbody>
        </table>
        <div class="container">
            <div class="d-flex justify-content-around">
                <p>Total Quantity</p>
                <p id="totalQty"></p>
                <p>Total Price</p>
                <p id="totalPrice"></p>
                <button type="button" class="btn btn-outline-secondary">Order Now</button>
            </div>
        </div>
    </div>
    <?php include "layouts/footer.php" ?>
</body>

</html>