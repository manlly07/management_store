<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Product Detail</title>

    <!-- Custom fonts for this template -->
    <link href="../../../vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="../../../css/sb-admin-2.min.css" rel="stylesheet">
    <link href="../../../css/sb-admin-2.css" rel="stylesheet">

    <!-- Custom styles for this page -->
    <link href="../../../vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">

    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.4.2/mdb.min.css" rel="stylesheet" />
</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <?php include './nav.php' ?>
                <!-- End of Topbar -->
                <section class="py-5">
                <div class="container px-4 px-lg-5 my-5 product-detail">
                
                </div>
                </section>

                <section class="py-5 bg-light">
            <div class="container px-4 px-lg-5 mt-5">
                <h2 class="fw-bolder mb-4 ml-8">Related products</h2>
                <div class="row justify-content-center products">
                    
                </div>
            </div>
        </section>
                <!-- Begin Page Content -->
                
                

                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
            <footer class="sticky-footer bg-primary">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto text-white">
                        <span>Copyright &copy; Your Website 2023</span>
                    </div>
                </div>
            </footer>
            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Bạn chắc chắn muốn Log out?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Chọn "Logout" bên dưới để kết thúc phiên làm việc.</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Huỷ</button>
                    <a class="btn btn-primary" href="http://localhost:3000/view/pages/login-register/login.php">Logout</a>
                </div>
            </div>
        </div>
    </div>
    <!-- Bootstrap core JavaScript-->
    <script src="../../../vendor/jquery/jquery.min.js"></script>
    <script src="../../../vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="../../../vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="../../../js/sb-admin-2.min.js"></script>

    <!-- Page level plugins -->
    <script src="../../../vendor/datatables/jquery.dataTables.min.js"></script>
    <script src="../../../vendor/datatables/dataTables.bootstrap4.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="../../../js/demo/datatables-demo.js"></script>

    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.4.2/mdb.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="../../../js/checkURL.js"></script>
    <script type="text/javascript">
        $(document).ready(() => {
            let username = localStorage.getItem('fullName')
            $('#username').html(`${username}`)
            let avtURL =localStorage.getItem('avt')
            avtURL != '' ? $('#customer-avt').attr('src', `../../../uploads/avt/${avtURL}`): $('#avatar').attr('src', "../../../img/undraw_profile.svg")
            var urlParams = new URLSearchParams(window.location.search);
            var id = urlParams.get('id');
            getProductDetail(id)
            showCart()
        })

        const showCart = () => {
            $.ajax({
                url: 'http://localhost:3000/database/repository/carts.php',
                type: 'POST',
                data: {
                    action: "view",
                    id: localStorage.getItem("userId")
                },
                success: (response) => {
                    carts = JSON.parse(response)
                    $('.cart-number').html(carts.length)
                }
            })
        }

        let categoryId = 0

        function formatMoney(number) {
            // Xác định số tiền
            const amount = number.toFixed(2);

            // Tạo chuỗi tiền
            const money = new Intl.NumberFormat("vi-VN", {
                style: "currency",
                currency: "VND",
            }).format(amount);

            // Trả về chuỗi tiền
            return money;
        }

        const addToCart = (product_id) => {
            let customer_id = localStorage.getItem('userId')
            let quantity = $('#inputQuantity').val()
            console.log(quantity);
            $.ajax({
                url: 'http://localhost:3000/database/repository/carts.php',
                type: 'POST',
                data: `action=add&customer_id=${customer_id}&product_id=${product_id}&quantity=${quantity}`,
                success: (response) => {
                    let result =JSON.parse(response)
                    Swal.fire({
                        title: "Done",
                        text: "Thêm vào giỏ hàng thành công",
                        icon: "success"
                    });
                    setTimeout(() => {
                        window.location.href = 'http://localhost:3000/view/pages/user/cart.php'
                    },1500)
                }
            })
        }

        const getProductDetail = (id) => {
            // console.log(id);
            $.ajax({
                url: 'http://localhost:3000/database/repository/products.php',
                type: 'POST',
                data: `action=getbyid&id=${id}`,
                success: (response) => {
                    console.log(JSON.parse(response));
                    // console.log(response);
                    let product = JSON.parse(response)
                    categoryId = parseFloat(product.categoryid)
                    let html = `
                    <div class="row gx-4 gx-lg-5 align-items-center">
                    <div class="col-md-6"><img class="card-img-top mb-5 mb-md-0" src="../../../uploads/${product.image}" alt="..."/></div>
                    <div class="col-md-6">
                        <div class="small mb-1">${product.categoryName}</div>
                        <h1 class="display-5 fw-bolder">${product.productName}</h1>
                        <div class="fs-5 mb-5">
                            <span>${formatMoney(product.price)}</span>
                        </div>
                        <div class="d-flex gap-2 align-items-center">
                            <h6>Số lượng trong kho</h6>
                            <input class="text-center mb-2" type="num" value="${product.qis}" disabled style="width: 100px">
                        </div>
                        <p class="lead">${product.productDescription}</p>
                        <div class="d-flex">
                            <input class="form-control text-center me-3" id="inputQuantity" type="num" value="1"  style="max-width: 3rem">
                            <button class="btn btn-outline-dark flex-shrink-0" type="button"
                                onclick="addToCart(${product.id})" 
                            >
                            <i class="fas fa-fw fa-shopping-cart"></i>
                                Thêm vào giỏ hàng
                            </button>
                        </div>
                    </div>
                    </div>
                    `
                    $('.product-detail').append(html)

                    getRelated(categoryId)
                }
            })
        }

        const getRelated = (categoryId) => {
            $.ajax({
                url: 'http://localhost:3000/database/repository/products.php',
                type: 'POST',
                data: {
                    action: "related",
                    categoryId: categoryId
                },
                success: (response) => {
                    console.log(JSON.parse(response));
                    let data = JSON.parse(response)
                    data.forEach(product => {
                        let htmls = `
                        <div class="col-3 mb-5 ">
                                            <div class="card w-100 h-100 shadow-lg">
                                                
                                                <img class="card-img-top" src="../../../uploads/${product.image}" alt="..." style="width: 100%; height: 180px; object-fit: contain;"/>
                                                
                                                <div class="card-body p-4">
                                                    <div class="text-center">
                                                        
                                                        <h5 class="fw-bolder">${product.productname}</h5>
                                                        <div class="d-flex justify-content-center small text-warning mb-2">
                                                            <i class="fas fa-fw fa-star"></i>
                                                            <i class="fas fa-fw fa-star"></i>
                                                            <i class="fas fa-fw fa-star"></i>
                                                            <i class="fas fa-fw fa-star"></i>
                                                            <i class="fas fa-fw fa-star"></i>
                                                        </div>
                                                        ${formatMoney(product.price)}
                                                    </div>
                                                </div>
                                                
                                                <div class="d-flex">
                                                    <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                                                        <div class="text-center"><a class="btn btn-primary mt-auto d-flex align-items-center" href="./productDetail.php?id=${product.id}"><span class="mr-1">View</span></span><i class="fas fa-fw fa-eye"></i></a></div>
                                                    </div>
                                                    <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                                                        <div class="text-center"><button class="btn btn-secondary mt-auto d-flex align-items-center"
                                                            onclick="addToCart(${product.id})" 
                                                         href="./cart.php"><span>Cart</span></span><i class="fas fa-fw fa-plus"></i></button></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                        `
                        $('.products').append(htmls)

                        const addToCart = (product_id) => {
                            let customer_id = 1
                            let quantity = 1
                            $.ajax({
                                url: 'http://localhost:3000/database/repository/carts.php',
                                type: 'POST',
                                data: `action=add&customer_id=${customer_id}&product_id=${product_id}&quantity=${quantity}`,
                                success: (response) => {
                                    let result =JSON.parse(response)
                                    Swal.fire({
                                            title: "Done",
                                            text: result.message,
                                            icon: "success"
                                            });
                                }
                            })
                        }
                    });
                }
            })
        }

    </script>
</body>

</html>