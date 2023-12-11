<!DOCTYPE html>
<html lang="en">

<?php include "layouts/header.php";
include "../config/connection.php"; ?>

<body>
  <?php include "layouts/navbar.php" ?>

  <!---CROUSAL OPEN -->
  <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="assets/images/slider-01.png" class="d-block w-100" alt="image not found">
      </div>
      <div class="carousel-item">
        <img src="assets/images/slider-02.png" class="d-block w-100" alt="image not found">
      </div>
      <div class="carousel-item">
        <img src="assets/images/slider-03.png" class="d-block w-100" alt="image not found">
      </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>
  <!-- CROUSAL CLOSE -->
  <div class="container pt-4 mt-3">
    <h1 class="fw-bold">Books</h1>
  </div>

  <!-- CART BOX START -->
  <div class="container pt-5 mt-4">
    <div class="row">
      <?php
      $sql = "select * from books";
      $books = mysqli_query($conn, $sql);
      if (mysqli_num_rows($books) > 0) {

        foreach ($books as $book) {
      ?>
          <div class="col-md-3 col-sm-6 col-6">
            <a class="text-decoration-none text-dark" href="detail.php">
              <div class="card-hover bg-white pb-2 p-3 mb-5 rounded-2">
                <div class="text-center">
                  <img src="../admin-be/upload/<?= $book['image'] ?>" class="w-75" alt="image not found">
                </div>
            </a>

            <div>
              <a class="text-decoration-none text-dark" href="detail.php">

                <h4 class="opacity-75 mt-1 text-center"><?= $book['price'] ?></h4>
                <h5 class="fw-bold opacity-75"><?= $book['name'] ?></h5>
                <p class="text-truncate text-muted fs-6"><?= $book['description'] ?></p>
                <hr class="text-secondary">
              </a>
              <form action="add_to_cart.php" method="post">
                <div class="d-flex gap-2 m-3 justify-content-center">
                  <h5 class="opacity-75">QTY</h5>
                  <input type="number" name="quantity" min="1" value="1" class="form-control w-25">
                </div>
                <div class="text-center">
                  <input type="hidden" name="id" value="<?= $book['id'] ?>">
                  <input type="hidden" name="name" value="<?= $book['name'] ?>">
                  <input type="hidden" name="image" value="<?= $book['image'] ?>">
                  <input type="hidden" name="price" value="<?= $book['price'] ?>">
                  <button type="submit" name="addCart" class="btn btn-outline-secondary btn-md">ADD TO CART</button>
                </div>
              </form>
            </div>
          </div>
    </div>

<?php
        }
      } else {
        echo "No data available";
      }
?>
  </div>
  </div>

  <?php include "layouts/footer.php" ?>
</body>

</html>