<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Dashboard</title>

    <!-- Custom fonts for this template -->
    <link href="../../../vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="../../../css/sb-admin-2.min.css" rel="stylesheet">

    <!-- Custom styles for this page -->
    <link href="../../../vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">

    <link href="../../../vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="../../../css/sb-admin-2.min.css" rel="stylesheet">

    <!-- Custom styles for this page -->
    <link href="../../../vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">

    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.4.2/mdb.min.css" rel="stylesheet" />

</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <?php include '../../component/navbar.php' ?>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <?php include '../../component/header.php' ?>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center mb-2">
                    <a class="btn btn-sm btn-outline-secondary border-300 me-2 mb-3 shadow-none" href="./dashboard.php"><i class="fas fa-fw fa-chevron-left"></i>Trở lại</a>
                    </div>

                    <!-- Content Row -->
                    <!-- Content Row -->
                    <div class="shadow">
                    <div class="card m-auto">
                        <div class="card-header py-3 d-flex align-items-center">
                            <h6 class="m-0 font-weight-bold text-primary">Lượng khách mua theo ngày</h6>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>Mã đơn</th>
                                            <th>Ngày</th>
                                            <th>Khách hàng</th>
                                            <th>Giá trị</th>
                                            <th>Phương Thức</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th>Mã đơn</th>
                                            <th>Ngày</th>
                                            <th>Khách hàng</th>
                                            <th>Giá trị</th>
                                            <th>Phương Thức</th>
                                        </tr>
                                    </tfoot>
                                    <tbody id="table-products">

                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    </div>

                    

                    <!-- Content Row -->
                    

                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
            <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>Copyright &copy; Your Website 2020</span>
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
    <script src="../../../js/checkURL.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script type="text/javascript">
        $(document).ready(() => {
            let username = localStorage.getItem('fullName')
            $('#username').html(`${username}`)
            let avtURL =localStorage.getItem('avt')
            avtURL != '' ? $('#admin-avt').attr('src', `../../../uploads/avt/${avtURL}`): $('#avatar').attr('src', "../../../img/admin.png")
            getRevenue()
            
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

        const getRevenue = () => {
            $.ajax({
                url: 'http://localhost:3000/database/repository/orders.php',
                type: 'POST',
                data: {
                    action: 'customer_currentDate_detail'
                },
                success: (response) => {
                    let result =JSON.parse(response)
                    console.log(result);
                    $('#dataTable').DataTable({
                        searching: true,
                        paging: true,
                        data: result,
                        columns: [
                            {
                                data: 'order_id',
                                render: function(data, type, row) {
                                    return `
                                    <a href="./orderDetail.php?id=${row.order_id}"><span>#${row.order_id}</span></a>
                                    `
                                }
                            },
                            {
                                data: 'order_date',
                                render: function(data, type, row) {
                                    return row.order_date
                                }
                            },
                            {
                                data: null,
                                render: function(data, type, row) {
                                    let avtURL = row.avt != '' ? `../../../uploads/avt/${row.avt}` : '../../../img/undraw_profile.svg'
                                    return `
                                    <div class="d-flex justify-content-start align-items-center">
                                                    <div class="avatar-wrapper">
                                                        <div class="avatar avatar-sm me-2">
                                                            <img src="${avtURL}" alt="Avatar" class="rounded-circle" width="45px" height="45px" />
                                                        </div>
                                                    </div>
                                                    <div class="d-flex flex-column gap-1">
                                                        <a href="pages-profile-user.html" class="text-truncate">
                                                            <h6 class="mb-0 fw-bold">${row.fullname}</h6>
                                                        </a>
                                                        <small class="text-truncate">${row.email}</small>
                                                    </div>
                                                </div>
                                    `
                                }
                            },
                            {
                                data: null,
                                render: function(data, type, row) {
                                    return `
                                    <div class="d-flex justify-content-start align-items-center">
                                                    <div class="d-flex flex-column gap-1">
                                                        <a href="pages-profile-user.html" class="text-truncate">
                                                            <h6 class="mb-0 fw-bold">${formatMoney(row.total)}</h6>
                                                        </a>
                                                    </div>
                                                </div>
                                    `
                                }
                            },
                            {
                                data: 'payment_method',
                                render: function(data, type, row) {
                                    let src_img = ''
                                    row.payment_method == "OnlineBanking" ? src_img = '../../../img/vnpay.webp' :src_img = '../../../img/COD.png'
                                    return `
                                    <div class="d-flex align-items-center text-nowrap">
                                                    <img src="${src_img}" alt="COD" width="20">
                                                    <span class=""> 
                                                        ...${JSON.parse(row.note).account.slice(-4)}
                                                    </span>
                                                </div>
                                    `
                                }
                            }
                        ],
                    })
                }
            })
            
        }
        
    </script>

</body>

</html>