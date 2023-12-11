<?php
$cartItemCount = isset($_SESSION['cartItems']) ? count($_SESSION['cartItems']) : 0;
$userName = isset($_SESSION['user']) ? $_SESSION['user']['name'] : '';
$userLoggedIn = isset($_SESSION['user']);

if ($userLoggedIn) {
  $logoutLink = 'logout.php';
} else {
  $loginLink = 'login.php';
}
?>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
<nav class="navbar navbar-expand-lg shadow p-4 bg-body rounded me-5 ms-5 mt-3 navbar-light bg-light sticky-top">
  <div class="container-fluid">

    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mx-auto w-100 align-items-center d-flex justify-content-around">
        <li class="nav-item ">
          <a class="nav-link active fw-bold" aria-current="page" href="home.php">HOME</a>
        </li>
        <li class="nav-item">
          <a class="nav-link fw-bold" aria-current="page" href="#">FEATURE</a>
        </li>
        <li class="nav-item">
          <a class="nav-link fw-bold" aria-current="page" href="books.php">BOOKS</a>
        </li>
        <a aria-current="page" href="home.php">
          <img src="assets/images/logo-dark.png" alt="Image not found">
        </a>
        <li class="nav-item">
          <a class="nav-link fw-bold" aria-current="page" href="aboutUs.php">ABOUT</a>
        </li>
        <li class="nav-item">
          <a class="nav-link fw-bold" aria-current="page" href="contactUs.php">CONTACT</a>
        </li>
        <li class="nav-item">
          <div class="d-flex gap-2">
            <a class="text-decoration-none" href="shoppingCart.php">
              <span class="border border-0 rounded p-1 bg-danger text-white"><?= $cartItemCount ?></span>
              <i class="bi-cart3 text-dark h5"></i>
            </a>
            <a class="text-decoration-none" href="./userorder.php" >

            <i class="bi bi-bag-check text-dark h5"></i>
            </a>

        </li>

        <!-- Dropdown for User Name -->
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle fw-bold" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            <span class="mt-3"><?= !empty($userName) ? $userName : 'Guest' ?></span>
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <?php if ($userLoggedIn) { ?>
              <li><a class="dropdown-item" href="<?= $logoutLink ?>">Logout</a></li>
            <?php } else { ?>
              <li><a class="dropdown-item" href="<?= $loginLink ?>">Login</a></li>
            <?php } ?>
          </ul>
        </li>
      </ul>
    </div>
  </div>
  </div>
</nav>