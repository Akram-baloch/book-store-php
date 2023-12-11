<?php
include "../config/connection.php";

session_start();
if (!isset($_SESSION['user']) || empty($_SESSION['user'])) {
    header("Location: login.php");
    exit;
}
$cartItems = [];
if (isset($_SESSION['cartItems'])) {
    $cartItems = $_SESSION['cartItems'];
}
// echo count($cartItems);exit;
if(count($cartItems)===0){
    header("Location: shoppingCart.php");
    exit;
}
$user = $_SESSION['user'];
$total = $_POST['total'];

$query = "insert into orders (total_amount, user_id, status) values(" . $total . ", " . $user['id'] . ",'pending')";

$result = mysqli_query($conn, $query);

$order_id = mysqli_insert_id($conn);

foreach ($cartItems as $item) {
    $query = "insert into orderitems(quantity, unit_price, book_id, order_id) values(" . $item['quantity'] . ", " . $item['price'] . ", " . $item['id'] . ", " . $order_id . ")";
    $result = mysqli_query($conn, $query);
}
if ($result) {
    $_SESSION['cartItems'] = [];
}

header("Location: home.php");
