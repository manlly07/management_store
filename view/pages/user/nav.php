<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link href="../../../vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="../../../css/sb-admin-2.min.css" rel="stylesheet">
    <link href="../../../css/sb-admin-2.css" rel="stylesheet">

    <!-- Custom styles for this page -->
    <link href="../../../vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">

    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.4.2/mdb.min.css" rel="stylesheet" />
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container px-4 px-lg-5">
                <a class="navbar-brand" href="#!">Tin Võ Store</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0 ms-lg-4">
                        <li class="nav-item"><a class="nav-link active" aria-current="page" href="http://localhost:3000/view/pages/user/products.php?page=1">Sản phẩm</a></li>
                        <li class="nav-item"><a class="nav-link" href="http://localhost:3000/view/pages/user/about.php">Thông tin</a></li>
                        
                    </ul>
                    <form class="d-flex align-item-center gap-4">
                        <a href="./cart.php" class="btn btn-outline-primary" type="submit">
                            <!-- <a href="./cart.php" > -->
                                
                                    <i class="fas fa-fw fa-shopping-cart"></i>
                                    Giỏ hàng
                                    <span class="badge bg-primary text-white ms-1 rounded-pill cart-number">0</span>
                        
                            <!-- </a> -->
                            
                        </a>
                        <div class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="mr-2 d-none d-lg-inline text-gray-600 small" id="username" ></span>
                                <img class="img-profile rounded-circle" width="30" height="30" id="customer-avt" src="#">
                            </a>
                    <!-- Dropdown - User Information -->
                    <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                        <a class="dropdown-item" href="./inforUser.php">
                            <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                            Thông tin cá nhân
                        </a>
                        
                        <a class="dropdown-item" href="./listOrder.php">
                            <i class="fas fa-list fa-sm fa-fw mr-2 text-gray-400"></i>
                            Lịch sử mua hàng
                        </a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="../login-register/login.php" data-toggle="modal" data-target="#logoutModal">
                            <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                            Logout
                        </a>
            </div>
        </div>
                    </form>
                </div>
            </div>
        </nav>
</body>
</html>


