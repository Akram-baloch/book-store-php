<div class="wrapper">
    <!-- Sidebar  -->
    <nav id="sidebar">
        <div class="sidebar-header">
            <h3>Dashboard</h3>
        </div>

        <ul class="list-unstyled components">
            <li>
                <a href=""><i class="fa fa-tachometer mx-2"></i>Dashbord</a>
            </li>
            <!-- <li class="active">
                    <a href=""><i class="fa fa-home mx-2"></i>Home</a>
                </li> -->
            <li>
                <a href="#"><i class="fa fa-book mx-2"></i>Books</a>
            </li>
            <li>
                <a href="#"><i class="fa fa-list-alt mx-2"></i>Category</a>
            </li>
            <li>
                <a href=""><i class="fa fa-pencil mx-2"></i>Authers</a>
            </li>
            <li>
                <a href=""><i class="fa fa-shopping-cart mx-2"></i>Orders</a>
            </li>
            <li>
                <a href=""><i class="fa fa-users mx-2"></i>Users</a>
            </li>
        </ul>

        <ul class="list-unstyled CTAs">
            <li>
                <a class="download text-primary">Download source</a>
            </li>
            <li>
                <a class="article">Back to article</a>
            </li>
        </ul>
    </nav>

    <!-- Page Content  -->
    <div id="content">

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

                    <ul class="nav navbar-nav ml-auto">
                        <li class="nav-item">
                            <a class="nav-link" href="#"><i class="fa fa-bell-o fa-lg mr-5 mt-2" aria-hidden="true"></i></a>
                        </li>
                        <li class="nav-item">
                            <ul class="navbar-nav bg-body-secondary ">
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle mr-4" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <img src="../assets/images/avatar.jpg" width="40" height="40" class="rounded-circle">
                                    </a>
                                    <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                        <a class="dropdown-item" href="#">Dashboard</a>
                                        <a class="dropdown-item" href="#">Edit Profile</a>
                                        <a class="dropdown-item" href="#">Log Out</a>
                                    </div>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>

    </div>
</div>

<script type="text/javascript">
    $(document).ready(function() {
        $('#sidebarCollapse').on('click', function() {
            $('#sidebar').toggleClass('active');
        });
    });
</script>