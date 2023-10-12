<?php include '../layouts/header.php' ?>
<div class="wrapper">
    <?php include '../layouts/sidenav.php' ?>
    <div id="content">
        <?php include "../layouts/navbar.php" ?>
        <div class="container">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb bg-light">
                    <li class="breadcrumb-item"><a href="">Dashboard</a></li>
                    <li class="breadcrumb-item" aria-current="page">Authors</li>
                    <li class="breadcrumb-item active" aria-current="page">view</li>
                </ol>
            </nav>
        </div>
        <div class="container head">
            <div class="row text-light bg-info border  rounded p-2">
                <div class="col-sm-5">
                    <a href="author.php">
                        <i class="fa fa-arrow-circle-left" aria-hidden="true"></i>
                    </a>
                </div>
                <div class="col-sm-7">
                    <h2>Create</h2>
                </div>
            </div>
            <ul class="list-group">
                <li class="list-group-item">
                    <div class="row">
                        <div class="col-2">
                            <h6>#</h6>
                        </div>
                        <div class="col-10">
                            <h6>1</h6>
                        </div>
                    </div>
                </li>
                <li class="list-group-item">
                    <div class="row">
                        <div class="col-2">
                            <h6>Name</h6>
                        </div>
                        <div class="col-10">
                            <h6>Muslim</h6>
                        </div>
                    </div>
                </li>
            </ul>
        </div>
    </div>
</div>