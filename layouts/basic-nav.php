<?php
if (!isset($_SESSION)) {
    session_start();
}

function isActiveRoute($route, $output = "active")
{
    $current_url = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
    // $current_url = parse_url($current_url, PHP_URL_PATH);
    // $current_url = trim($current_url, '/');

    if (strpos($current_url, $route) !== false)
        return $output;
}
// echo isActiveRoute('index.php');
?>
<nav class="navbar navbar-expand-lg navbar-dark bg-success">
    <div class="container">
        <a class="navbar-brand" href="#">SCS221</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">

            <form class="form-inline my-2 my-lg-0  mx-auto">
                <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
            </form>
            <ul class="navbar-nav">
                <li class="nav-item <?= isActiveRoute('index.php') ?>">
                    <a class="nav-link" aria-current="page" href="index.php">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">About</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        CRUD
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="employee/index.php">Employee</a>
                        <a class="dropdown-item" href="product/index.php">Product</a>
                        <!-- <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="#">Something else here</a> -->
                    </div>
                </li>
                <?php if (isset($_SESSION["id"])) { ?>
                    <li class="nav-item <?= isActiveRoute('welcome.php') ?>">
                        <a class="nav-link" href="welcome.php">Welcome</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Account
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="admin/user/index.php">User</a>
                            <a class="dropdown-item" href="admin/customer/index.php">Customer</a>
                            <!-- <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="#">Something else here</a> -->
                        </div>
                    </li>
                <?php } else { ?>
                    <li class="nav-item <?= isActiveRoute('login.php') ?>">
                        <a class="nav-link" href="login.php">Login</a>
                    </li>
                    <li class="nav-item <?= isActiveRoute('register.php') ?>">
                        <a class="nav-link" href="register.php">Register</a>
                    </li>
                <?php }  ?>
            </ul>
        </div>
    </div>

</nav>