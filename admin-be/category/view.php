<?php include '../layouts/header.php' ?>
<div class="wrapper">
    <?php include '../layouts/sidenav.php' ?>
    <div id="content">
        <?php include "../layouts/navbar.php" ?>
        <?php 
        include "../../config/connection.php";

        if(isset($_GET['id'])){
            $view_id = $_GET['id'];
            $sql ="SELECT * FROM categories WHERE id=$view_id";
            $result = mysqli_query($conn,$sql);
            
            if($row = mysqli_fetch_assoc($result)){
                $c_id = $row['id'];
                $c_name = $row['name'];
            }
        }
        
        ?>
        <div class="container">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb bg-light">
                    <li class="breadcrumb-item"><a href="">Dashboard</a></li>
                    <li class="breadcrumb-item" aria-current="page">Categories</li>
                    <li class="breadcrumb-item active" aria-current="page">view</li>
                </ol>
            </nav>
        </div>
        <div class="container head">         
            <div class="row text-light bg-info border  rounded p-2">
                <div class="col-sm-5">
                    <a href="category.php">
                        <i class="fa fa-arrow-circle-left" aria-hidden="true"></i>
                    </a>
                </div>
                <div class="col-sm-7">
                    <h2>Create</h2>
               </div>
            </div>
            <ul class="list-group mb-5 pb-5 pt-2">
                <li class="list-group-item">
                    <div class="row">
                        <div class="col-2">
                            <h6>Name</h6>
                        </div>
                        <div class="col-10">
                            <h6><?php echo $c_name ;?></h6>
                        </div>
                    </div>
                </li>
            </ul>
        </div>
        <?php include "../layouts/footer.php" ?>
    </div>
</div>