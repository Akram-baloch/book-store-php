<!DOCTYPE html>
<html lang="en">

<?php include "layouts/header.php" ?>

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
      <div class="col-md-3 col-sm-6 col-6">
        <a class="text-decoration-none text-dark" href="detail.php">
          <div class="card-hover bg-white pb-2 p-3 mb-5 rounded-2">
            <div class="text-center">
              <img src="assets/images/b1.jpg" class="w-75" alt="image not found">
            </div>
            <div>
              <h4 class="opacity-75 mt-1 text-center">$14.00</h4>
              <h5 class="fw-bold opacity-75">Sam & Dave dig Hole</h5>
              <p>BySI MODARSK, TE SORKAZ</p>
              <hr class="text-secondary">
              <div class="d-flex gap-2 m-3 justify-content-center">
                <h5 class="opacity-75">QTY</h5>
                <input type="number" class="form-control w-25">
              </div>
              <div class="text-center">
                <button type="button" class="btn btn-outline-secondary btn-md">ADD TO CART</button>
              </div>
            </div>
          </div>
        </a>
      </div>
      <div class="col-md-3 col-sm-6 col-6">
        <a class="text-decoration-none text-dark" href="detail.php">
          <div class="card-hover bg-white pb-2 p-3 mb-5 rounded-2">
            <div class="text-center">
              <img src="assets/images/b2.jpg" class="w-75" alt="image not found">
            </div>
            <div>
              <h4 class="opacity-75 mt-1 text-center">$19.00</h4>
              <h5 class="fw-bold opacity-75">The Assault</h5>
              <p>ByMESHO BUVAHR, SI MODARSK</p>
              <hr class="text-secondary">
              <div class="d-flex gap-2 m-3 justify-content-center">
                <h5 class="opacity-75">QTY</h5>
                <input type="number" class="form-control w-25">
              </div>
              <div class="text-center">
                <button type="button" class="btn btn-outline-secondary btn-md">ADD TO CART</button>
              </div>
            </div>
          </div>
        </a>
      </div>
      <div class="col-md-3 col-sm-6 col-6">
        <a class="text-decoration-none text-dark" href="detail.php">
          <div class="card-hover bg-white pb-2 p-3 mb-5 rounded-2">
            <div class="text-center">
              <img src="assets/images/b3.jpg" class="w-75" alt="image not found">
            </div>
            <div>
              <h4 class="opacity-75 mt-1 text-center">$19.00</h4>
              <h5 class="fw-bold opacity-75">The Carrot Hunt</h5>
              <p>ByKOGA FORESCAR, MESHO BUVR</p>
              <hr class="text-secondary">
              <div class="d-flex gap-2 m-3 justify-content-center">
                <h5 class="opacity-75">QTY</h5>
                <input type="number" class="form-control w-25">
              </div>
              <div class="text-center">
                <button type="button" class="btn btn-outline-secondary btn-md">ADD TO CART</button>
              </div>
            </div>
          </div>
        </a>
      </div>
      <div class="col-md-3 col-sm-6 col-6">
        <a class="text-decoration-none text-dark" href="detail.php">
          <div class="card-hover bg-white pb-2 p-3 mb-5 rounded-2">
            <div class="text-center">
              <img src="assets/images/b4.jpg" class="w-75" alt="image not found">
            </div>
            <div>
              <h4 class="opacity-75 mt-1 text-center">$18.00</h4>
              <h5 class="fw-bold opacity-75">The DARK</h5>
              <p>BySAVANNA WALKER</p>
              <hr class="text-secondary">
              <div class="d-flex gap-2 m-3 justify-content-center">
                <h5 class="opacity-75">QTY</h5>
                <input type="number" class="form-control w-25">
              </div>
              <div class="text-center">
                <button type="button" class="btn btn-outline-secondary btn-md">ADD TO CART</button>
              </div>
            </div>
          </div>
        </a>
      </div>
      <div class="col-md-3 col-sm-6 col-6">
        <a class="text-decoration-none text-dark" href="detail.php">
          <div class="card-hover bg-white pb-2 p-3 mb-5 rounded-2">
            <div class="text-center">
              <img src="assets/images/b5.jpg" class="w-75" alt="image not found">
            </div>
            <div>
              <h4 class="opacity-75 mt-1 text-center">$12.00</h4>
              <h5 class="fw-bold opacity-75">The Journey of Dreams</h5>
              <p>ByBHUZUN NAHLAM, JOHN WAKER</p>
              <hr class="text-secondary">
              <div class="d-flex gap-2 m-3 justify-content-center">
                <h5 class="opacity-75">QTY</h5>
                <input type="number" class="form-control w-25">
              </div>
              <div class="text-center">
                <button type="button" class="btn btn-outline-secondary btn-md">ADD TO CART</button>
              </div>
            </div>
          </div>
        </a>
      </div>
      <div class="col-md-3 col-sm-6 col-6">
        <a class="text-decoration-none text-dark" href="detail.php">
          <div class="card-hover bg-white pb-2 p-3 mb-5 rounded-2">
            <div class="text-center">
              <img src="assets/images/b6.jpg" class="w-75" alt="image not found">
            </div>
            <div>
              <h4 class="opacity-75 mt-1 text-center">$22.00</h4>
              <h5 class="fw-bold opacity-75">The Night Ocean</h5>
              <p>BySERO GLAN, SI MODARSK</p>
              <hr class="text-secondary">
              <div class="d-flex gap-2 m-3 justify-content-center">
                <h5 class="opacity-75">QTY</h5>
                <input type="number" class="form-control w-25">
              </div>
              <div class="text-center">
                <button type="button" class="btn btn-outline-secondary btn-md">ADD TO CART</button>
              </div>
            </div>
          </div>
        </a>
      </div>
      <div class="col-md-3 col-sm-6 col-6">
        <a class="text-decoration-none text-dark" href="detail.php">
          <div class="card-hover bg-white pb-2 p-3 mb-5 rounded-2">
            <div class="text-center">
              <img src="assets/images/b7.jpg" class="w-75" alt="image not found">
            </div>
            <div>
              <h4 class="opacity-75 mt-1 text-center">$24.00</h4>
              <h5 class="fw-bold opacity-75">The Summer of Impossible</h5>
              <p>ByCHAI IAM, HOF NURGIN</p>
              <hr class="text-secondary">
              <div class="d-flex gap-2 m-3 justify-content-center">
                <h5 class="opacity-75">QTY</h5>
                <input type="number" class="form-control w-25">
              </div>
              <div class="text-center">
                <button type="button" class="btn btn-outline-secondary btn-md">ADD TO CART</button>
              </div>
            </div>
          </div>
        </a>
      </div>
      <div class="col-md-3 col-sm-6 col-6">
        <a class="text-decoration-none text-dark" href="detail.php">
          <div class="card-hover bg-white pb-2 p-3 mb-5 rounded-2">
            <div class="text-center">
              <img src="assets/images/b1.jpg" class="w-75" alt="image not found">
            </div>
            <div>
              <h4 class="opacity-75 mt-1 text-center">$21.00</h4>
              <h5 class="fw-bold opacity-75">TRIO – Sarah Tolmie</h5>
              <p>ByCHAI IAM, SAVANNA WALKER</p>
              <hr class="text-secondary">
              <div class="d-flex gap-2 m-3 justify-content-center">
                <h5 class="opacity-75">QTY</h5>
                <input type="number" class="form-control w-25">
              </div>
              <div class="text-center">
                <button type="button" class="btn btn-outline-secondary btn-md">ADD TO CART</button>
              </div>
            </div>
          </div>
        </a>
      </div>
    </div>
  </div>
  <!-- CART BOX END -->

  <?php include "layouts/footer.php" ?>
</body>

</html>