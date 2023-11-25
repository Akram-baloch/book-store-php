<?php
session_start();

if (!isset($_SESSION['user']) || empty($_SESSION['user'])) {

    header('Location: ../../admin-be/auth/login.php');
    exit();
}
?>

<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">

        <button type="button" id="sidebarCollapse" class="btn btn-info">
            <i class="fa fa-bars" aria-hidden="true"></i>
        </button>
        <button class="btn btn-dark d-inline-block d-lg-none ml-auto" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <i class="fa fa-bars"></i>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <div class="input-group w-50 ml-4">
                <input type="search" class="form-control" placeholder="Search...">
                <button type="submit" class="btn"><i class="fa fa-search fa-lg"></i></button>
            </div>

            <ul class="nav navbar-nav w-50 d-flex justify-content-between">
                <li class="nav-item">
                    <a class="nav-link" href="#"><i class="fa fa-bell-o fa-lg ml-4 mt-2 p-1" aria-hidden="true"></i></a>
                </li>
                <li class="nav-item">
                    <ul class="navbar-nav">
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle mr-4 d-flex" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <img src="../assets/images/avatar.jpg" width="40" height="40" class="rounded-circle">
                                <span class="pt-2 px-1 text-dark h6" href="#"><?php echo $_SESSION['user']['name'];?></span>
                            </a>
                            <div class="dropdown-menu bg-info" aria-labelledby="navbarDropdownMenuLink">
                                <a class="dropdown-item text-light" href="../auth/logout.php">Log Out</a>
                            </div>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
</nav>

<script type="text/javascript">
    $(document).ready(function() {
        $('#sidebarCollapse').on('click', function() {
            $('#sidebar').toggleClass('active');
        });
    });
</script>