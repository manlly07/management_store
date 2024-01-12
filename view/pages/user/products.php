<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Products</title>

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
                <?php include './header.php' ?>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid" style="min-height: 85vh;">
                
                <div>
                    <!-- <h5>Bộ lọc tìm kiếm</h5> -->
                </div>
                    
                    <section class="py-5">
                        <!-- <div id="products"> -->
                            <div class="container mt-5">
                                <div class="row products">
                                </div>
                            </div>
                        <!-- </div> -->

                <nav aria-label="...">
                <ul class="pagination justify-content-center">
                    <li class="page-item">
                    <a class="page-link" href="#"  tabindex="-1" aria-disabled="true">Previous</a>
                    </li>
                    <div class="pageNumber d-flex gap-1">

                    </div>
                    <li class="page-item">
                    <a class="page-link" href="#">Next</a>
                    </li>
                </ul>
                </nav>

                    </section>

                <!-- /.container-fluid -->

                </div>
            <!-- End of Main Content -->
            </div>
            <!-- Footer -->
            <footer class="sticky-footer bg-primary">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto text-white">
                        <span>Copyright &copy; Your Website 2023</span>
                    </div>
                </div>
            </footer>
            <!-- End of Footer -->

        
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
            showCart()
            var page = urlParams.get('page');
            searchQuery = ''
            showAllProducts(parseInt(page), searchQuery);
        })

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

        let products = []

        // $('#search-input').keypress(function(event) {
        //     if (event.keyCode === 13) { // Enter key pressed
        //         const searchQuery = $(this).val();
        //         showAllProducts(1, searchQuery);
        //     }
        // });
        $('#search-input').on('change', function() {
            const searchQuery = $(this).val();
            showAllProducts(1, searchQuery);
        });

        const showAllProducts = (currentPage, searchQuery = '') => {
            $.ajax({
                url: 'http://localhost:3000/database/repository/products.php',
                type: 'POST',
                data: {
                    action: "view",
                    page: currentPage,
                    search: searchQuery
                },
                success: (response) => {
                    let data = JSON.parse(response)
                    products = data.products
                    let productsFiltered = products.filter(product => product.productname.toLowerCase().includes(searchQuery.toLowerCase()));
                    $('.products').html('')
                    productsFiltered.forEach(product => {
                        let htmls = `
                            <div class="col-3 mb-5 ">
                                            <div class="card w-80 h-100 shadow-lg">
                                                
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
                                                
                                                <div class="d-flex m-auto">
                                                    <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                                                        <div class="text-center"><a class="btn btn-primary mt-auto" href="./productDetail.php?id=${product.id}"><span class="mr-1">Xem</span></span><i class="fas fa-fw fa-eye"></i></a></div>
                                                    </div>
                                                    <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                                                        <div class="text-center"><button class="btn btn-secondary mt-auto"
                                                            onclick="addToCart(${product.id})" 
                                                         href="./cart.php"><span>Thêm</span></span><i class="fas fa-fw fa-plus"></i></button></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                        `
                        $('.products').append(htmls)
                    });
                    updatePagination(data.count, data.page);
                }
            })
        }

        
        function updatePagination(count, page) {
            const totalPages = Math.ceil(count / 8);
            const currentPage = page;
            // Clear previous pagination
            $(".pageNumber").html('')
            // Generate pagination links
            for (let i = 1; i <= totalPages; i++) {
                let activeClass = "";
                if (currentPage === i) {
                    activeClass = "active";
                    localStorage.setItem('currentPage')
                }
                const html = `
                <li class="page-item ${activeClass}">
                    <a class="page-link" href="./products.php?page=${i}" onclick="showAllProducts(${i})">${i}</a>
                </li>
                `;
                $(".pageNumber").append(html);
            }
        }

        const addToCart = (product_id) => {
            let customer_id = localStorage.getItem('userId')
            let quantity = 1
            $.ajax({
                url: 'http://localhost:3000/database/repository/carts.php',
                type: 'POST',
                data: `action=add&customer_id=${customer_id}&product_id=${product_id}&quantity=${quantity}`,
                success: (response) => {
                    let result =JSON.parse(response)
                    Swal.fire({
                            title: "Done",
                            text: 'Thêm vào giỏ hàng thành công',
                            icon: "success"
                            });
                }
            })
        }

    </script>
</body>

</html>