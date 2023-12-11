<?php
session_start();
if (isset($_POST['addCart'])) {
    $data = array(
        'id' => $_POST['id'],
        'name' => $_POST['name'],
        'image' => $_POST['image'],
        'price' => $_POST['price'],
        'quantity' => $_POST['quantity'],
    );
    // Initialize cart if not already set
    $_SESSION['cartItems'] = isset($_SESSION['cartItems']) ? $_SESSION['cartItems'] : [];

    // Check if the book is already in the cart
    $bookExists = array_column($_SESSION['cartItems'], 'name');

    // If the book is not in the cart, add it; otherwise, show a message
    if (!in_array($data['name'], $bookExists)) {
        $_SESSION['cartItems'][] = $data;
        header('location:home.php');
    } else {
        echo "<script>alert('Book is already in the cart.')
           window.location.href = 'home.php'</script>";
        exit();
    }
}
//Remove items
if (isset($_POST['remove'])) {
    $index = $_POST['index'];
    if (isset($_SESSION['cartItems'][$index])) {
        unset($_SESSION['cartItems'][$index]);
        $_SESSION['cartItems'] = array_values($_SESSION['cartItems']);
        header('location:shoppingCart.php');
    }
}