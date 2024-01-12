<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Cart</title>

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
                

                <!-- Begin Page Content -->
                
                <div class="container-fluid" style="min-height: 85vh;">
                    <div class="card col-11 m-auto my-4">
                <div class="card-header">
                <div class="row justify-content-between">
                    <div class="col-md-auto">
                    <h5 class="mb-3 mb-md-0 fw-bold number_item">Giỏ hàng có 0 sản phẩm</h5>
                    </div>
                    <div class="col-md-auto">
                        <a class="btn btn-sm btn-outline-secondary border-300 me-2 shadow-none" href="./products.php?page=1"><i class="fas fa-fw fa-chevron-left"></i>Tiếp tục mua sắm</a>
                        <a class="btn btn-sm btn-primary" onclick="checkout()" href="#">Mua hàng</a>
                    </div>
                </div>
                </div>
                <div class="card-body p-0">
                <div class="row gx-x1 mx-0 bg-200 text-900 fs--1 fw-semi-bold bg-secondary text-white">

                    <div class="col-9 col-md-8 py-2 px-x1 ">Sản phẩm</div>
                    <div class="col-3 col-md-4 px-x1">
                        <div class="row">
                            <div class="col-md-8 py-2 d-none d-md-block text-center ">Số lượng</div>
                            <div class="col-12 col-md-4 text-end py-2 ">Giá trị</div>
                        </div>
                    </div>
                </div>
                <div>
                    
                </div>
                <div class="carts">
                
                </div>

                <div class="row fw-bold gx-x1 mx-0">
                    <div class="col-9 col-md-8 py-2 px-x1 text-end text-900">Tổng đơn hàng</div>
                    <div class="col px-0">
                    <div class="row gx-x1 mx-0">
                        <div class="col-md-8 py-2 px-x1 d-none d-md-block text-center" id="number_item">0 (sản phẩm)</div>
                        <div class="col-12 col-md-4 text-end py-2 px-x1 total-bill">0</div>
                    </div>
                    </div>
                </div>
                </div>
                <div class="card-footer bg-body-tertiary d-flex justify-content-end">
                <form class="me-3">
                    <div class="input-group input-group-sm"><input class="form-control" type="text" placeholder="Promocode"><button class="btn btn-outline-secondary border-300 btn-sm shadow-none" type="submit">Apply</button></div>
                </form>
                <div class="mr-2"><button class="btn btn-secondary border-300 btn-sm" onclick="save()" type="button">Lưu thay đổi</button></div>
                <a class="btn btn-sm btn-primary" onclick="checkout()"  href="#">Mua Hàng</a>
                </div>
                    </div>

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
            showCart();
        })
        let carts = []

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
                    let total_bill = 0
                    let number_item = 0
                    carts.forEach(cart => {
                        number_item += 1
                        total_bill += cart.quantity * cart.price
                        let html = `
                        <div class="row gx-x1 mx-0 align-items-center border-bottom border-200">
                            <input type="number" value="${cart.id}" hidden id="cartId" />
                    <div class="col-8 py-3 px-x1">
                    <div class="d-flex align-items-center"><a href="../../app/e-commerce/product/product-details.html"><img class="img-fluid rounded-1 me-3 d-none d-md-block" src="../../../uploads/${cart.image}" alt="" width="60"></a>
                        <div class="flex-1">
                        <h5 class="fs-0"><a class="text-900" href="../../app/e-commerce/product/product-details.html">${cart.product_name}</a></h5>
                        <div class="fs--2 fs-md--1"><a class="text-danger" href="#" onclick="removeItem(${cart.id})">Xoá sản phẩm</a></div>
                        </div>
                    </div>
                    </div>
                    <div class="col-4 py-3 px-x1">
                    <div class="row align-items-center">
                        <div class="col-md-8 d-flex justify-content-end justify-content-md-center order-1 order-md-0">
                        <div>
                            <div class="input-group input-group-sm flex-nowrap" data-quantity="data-quantity"><button class="btn btn-sm btn-outline-secondary border-300 px-2 shadow-none" data-type="minus">-</button>
                            <input class="form-control text-center px-2 input-spin-none" type="number" min="1" value="${cart.quantity}" aria-label="Amount (to the nearest dollar)" style="width: 50px">
                            <input type="number" value="${cart.price}" hidden id="pricePerUnit" />
                            <button class="btn btn-sm btn-outline-secondary border-300 px-2 shadow-none" data-type="plus">+</button></div>
                        </div>
                        </div>
                        <div class="total-price col-md-4 text-end ps-0 order-0 order-md-1 mb-2 mb-md-0 text-600">${formatMoney(cart.quantity * cart.price)}</div>
                    </div>
                    </div>
                </div>
                        `
                        $('.carts').append(html)
                        $('.total-bill').html(formatMoney(total_bill))
                        $('.number_item').html('Giỏ hàng có ' + number_item + ' sản phẩm')
                        $('#number_item').html(number_item + ' (sản phẩm)')
                    });
                }
            })
        }

        $('.carts').on('change', 'input[type="number"]', function() {
        // Get the quantity
        var quantity = parseInt($(this).val());

        // Find the price per unit hidden input within the same row
        var pricePerUnit = parseFloat($(this).parent().parent().find('#pricePerUnit').val());

        // Calculate the total price
        var totalPrice = quantity * pricePerUnit;

        // Update the total price element with the new total price formatted with two decimal places
        $(this).parent().parent().parent().parent().find('.total-price').html('$' + totalPrice);
        var totalPrice = 0;
        $('.total-price').each(function() {
        // Get the text content of the element
        var price = $(this).text();

        // Remove the dollar sign and any decimal places
        price = price.replace('$', '').replace(/\./g, '');

        // Convert the price to a number
        price = parseInt(price);

        // Update the total price
        totalPrice += price;
        });
        $('.total-bill').html('$' + totalPrice)
        });

        const save = () => {
            // Collect updated cart data
            const updatedCartData = [];
            $('.carts').children().each(function () {
            const cartId = $(this).find('input[type="number"][id="cartId"]').attr('value');
            const quantity = $(this).find('input[type="number"][min="1"]').val();

                updatedCartData.push({
                    id: parseFloat(cartId),
                    quantity: parseFloat(quantity),
                });
            });
            // Send AJAX request to update cart data in database

            updatedCartData.forEach(item => {
                $.ajax({
                    url: 'http://localhost:3000/database/repository/carts.php',
                    type: 'POST',
                    data: {
                        action: 'update',
                        id: item.id,
                        quantity: item.quantity
                    },
                    success: function (response) {
                        const result =JSON.parse(response)
                        Swal.fire({
                            title: "Done",
                            text: 'Lưu thành công',
                            icon: "success"
                            });
                    },
                    error: function (error) {
                        Swal.fire({
                            title: "Oops...",
                            text: "Đã xảy ra lỗi!",
                            icon: "error"
                            });
                    },
                });
            })
        }

        const removeItem = (id) => {
            $.ajax({
            url: 'http://localhost:3000/database/repository/carts.php',
                type: 'POST',
                data: {
                  action: "delete",
                  id: id
                },
                success: function(response) {
                    let result =JSON.parse(response)
                    Swal.fire({
                            title: "Done",
                            text: "Xoá thành công",
                            icon: "success"
                            });
                    setTimeout(() => {
                        window.location.reload()
                    },1500)
                },
          })
        }

        const checkout = () => {
            if(carts.length == 0) {
                Swal.fire({
                    title: "Không thể mua hàng",
                    text: "Giỏ hàng chưa có sản phẩm nào!",
                    icon: "error"
                });
            }else{
                window.location.href = 'http://localhost:3000/view/pages/user/checkout.php'
            }
        }

    </script>
</body>

</html>