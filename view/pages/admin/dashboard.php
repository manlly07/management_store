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
                    <div class="d-sm-flex align-items-center justify-content-center mb-4">
                        <h1 class="h3 mb-2 text-gray-900">Bảng Điều Khiển</h1>
                    </div>

                    <!-- Content Row -->
                    <div class="row d-flex justify-content-center">

                        <!-- Earnings (Monthly) Card Example -->
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-primary shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                                Doanh Thu (theo ngày)</div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800 revenue-currentdate">$0</div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-calendar fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-primary shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                                Doanh Thu (theo tháng)</div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800 revenue-currentmonth">$0</div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-calendar fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Earnings (Monthly) Card Example -->
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-success shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                                                Doanh Thu (theo năm)</div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800 revenue_annual">$0</div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-dollar-sign fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Earnings (Monthly) Card Example -->

                        <!-- Earnings (Monthly) Card Example -->
                    </div>

                    <div class="row d-flex justify-content-center">

                        <!-- Earnings (Monthly) Card Example -->
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-primary shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                                Lượng người mua (theo ngày)</div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800 customer-currentdate">0</div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-calendar fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-primary shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                            Lượng người mua (theo tháng)</div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800 customer-currentmonth">0</div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-calendar fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Earnings (Monthly) Card Example -->
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-success shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                                            Lượng người mua (theo năm)</div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800 customer_annual">0</div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-dollar-sign fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Earnings (Monthly) Card Example -->

                        <!-- Earnings (Monthly) Card Example -->
                    </div>

                    <div class="row d-flex justify-content-center">
                    <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-info shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-info text-uppercase mb-1">
                                                Số Lượng Đơn Hàng</div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800 count_order">0</div>
                                        </div>
                                        <div class="col-auto">
                                        <i class="fas fa-clipboard-list fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Pending Requests Card Example -->
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-warning shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">
                                            Đơn Nhập Kho</div>
                                            <div class="d-flex justify-content-around">
                                                <div class="h5 mb-0 font-weight-bold text-gray-800 count_invoice">Số lượng: 0</div>
                                                <div class="h5 mb-0 font-weight-bold text-gray-800 total_invoice">Giá trị: $0</div>
                                            </div>
                                        </div>
                                        <div class="col-auto">
                                        <i class="fas fa-clipboard-list fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Content Row -->

                    <div class="row">

                        <!-- Area Chart -->
                        <div class="col-12 m-auto">
                            <div class="card shadow mb-4">
                                <!-- Card Header - Dropdown -->
                                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                                    <h6 class="m-0 font-weight-bold text-primary">Doanh Thu Hàng Tháng</h6>
                                    <div class="dropdown no-arrow">
                                        <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <i class="fas fa-ellipsis-v fa-sm fa-fw text-gray-400"></i>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-right shadow animated--fade-in" aria-labelledby="dropdownMenuLink">
                                            <div class="dropdown-header">Dropdown Header:</div>
                                            <a class="dropdown-item" href="#">Action</a>
                                            <a class="dropdown-item" href="#">Another action</a>
                                            <div class="dropdown-divider"></div>
                                            <a class="dropdown-item" href="#">Something else here</a>
                                        </div>
                                    </div>
                                </div>
                                <!-- Card Body -->
                                <div class="card-body col-12">
                                    <div class="chart-container">
                                        <canvas id="linechart" height="150px" width="400px"></canvas>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 m-auto">
                            <div class="card shadow mb-4">
                                <!-- Card Header - Dropdown -->
                                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                                    <h6 class="m-0 font-weight-bold text-primary">Nhập Kho Hàng Tháng</h6>
                                    <div class="dropdown no-arrow">
                                        <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <i class="fas fa-ellipsis-v fa-sm fa-fw text-gray-400"></i>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-right shadow animated--fade-in" aria-labelledby="dropdownMenuLink">
                                            <div class="dropdown-header">Dropdown Header:</div>
                                            <a class="dropdown-item" href="#">Action</a>
                                            <a class="dropdown-item" href="#">Another action</a>
                                            <div class="dropdown-divider"></div>
                                            <a class="dropdown-item" href="#">Something else here</a>
                                        </div>
                                    </div>
                                </div>
                                <!-- Card Body -->
                                <div class="card-body col-12">
                                    <div class="chart-container">
                                        <canvas id="barchart" height="150px" width="400px"></canvas>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Pie Chart -->
                        
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
                    <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
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
    <script src="../../../vendor/chart.js/Chart.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="../../../js/demo/chart-area-demo.js"></script>
    <script src="../../../js/demo/chart-pie-demo.js"></script>
    <script src="../../../js/checkURL.js"></script>
    <script type="text/javascript">
        $(document).ready(() => {
            let username = localStorage.getItem('fullName')
            $('#username').html(`${username}`)

            getRevenue()
            total()
        })

        const getRevenue = () => {
            $.ajax({
                url: 'http://localhost:3000/database/repository/orders.php',
                type: 'POST',
                data: {
                    action: 'revenue_currentDate'
                },
                success: (response) => {
                    let result =JSON.parse(response)
                    if (result.total_revenue == null){
                        result.total_revenue = 0
                    }
                    $('.revenue-currentdate').html('$'+result.total_revenue)
                }
            })

            $.ajax({
                url: 'http://localhost:3000/database/repository/orders.php',
                type: 'POST',
                data: {
                    action: 'revenue_currentMonth'
                },
                success: (response) => {
                    let result =JSON.parse(response)
                    if (result.total_revenue == null){
                        result.total_revenue = 0
                    }
                    $('.revenue-currentmonth').html('$'+result.total_revenue)
                }
            })

            $.ajax({
                url: 'http://localhost:3000/database/repository/orders.php',
                type: 'POST',
                data: {
                    action: 'revenue_annual'
                },
                success: (response) => {
                    let result =JSON.parse(response)
                    if (result.total_revenue == null){
                        result.total_revenue = 0
                    }
                    $('.revenue_annual').html('$'+result.total_revenue)
                }
            })

            $.ajax({
                url: 'http://localhost:3000/database/repository/orders.php',
                type: 'POST',
                data: {
                    action: 'number_customer_currentDate'
                },
                success: (response) => {
                    let result =JSON.parse(response)
                    console.log(result);
                    $('.customer-currentdate').html(result.number_customer)
                }
            })

            $.ajax({
                url: 'http://localhost:3000/database/repository/orders.php',
                type: 'POST',
                data: {
                    action: 'number_customer_currentMonth'
                },
                success: (response) => {
                    let result =JSON.parse(response)
                    console.log(result);
                    $('.customer-currentmonth').html(result.number_customer)
                }
            })

            $.ajax({
                url: 'http://localhost:3000/database/repository/orders.php',
                type: 'POST',
                data: {
                    action: 'number_customer_currentYear'
                },
                success: (response) => {
                    let result =JSON.parse(response)
                    console.log(result);
                    $('.customer_annual').html(result.number_customer)
                }
            })

            $.ajax({
                url: 'http://localhost:3000/database/repository/orders.php',
                type: 'POST',
                data: {
                    action: 'count'
                },
                success: (response) => {
                    let result =JSON.parse(response)
                    $('.count_order').html(result.total.quantity)
                }
            })

            $.ajax({
                url: 'http://localhost:3000/database/repository/orders.php',
                type: 'POST',
                data: {
                    action: 'revenue_monthly'
                },
                success: (response) => {
                    let result =JSON.parse(response)
                    // console.log(result);
                    var data = {
                        labels: result.map(item => "Tháng "+ item.month),
                        datasets: [
                            {
                            label: "Doanh thu",
                            data: result.map(item => item.total_revenue),
                            backgroundColor: ["#ff0000", "#00ff00", "#0000ff", '#B22222',
                                                '#FFA500', '#FF6347', '#FFD700', '#ADFF2F',
                                                '#32CD32', '#9ACD32', '#556B2F', '#BC8F8F'], 
                            },
                        ],
                        };
                    let canvas = document.querySelector("#linechart")
                    let ctx = canvas.getContext("2d")
                    let myChart = new Chart(ctx, {
                        type: "line",
                        data: data,
                    })
                }
            })
        }
        const total = () => {
            $.ajax({
                url: 'http://localhost:3000/database/repository/invoices.php',
                type: 'POST',
                data: {
                    action: 'count'
                },
                success: (response) => {
                    let result =JSON.parse(response)
                    $('.count_invoice').html('Số lượng: '+result.total_invoice)
                    $('.total_invoice').html('Giá trị: $'+result.total_revenue)
                }
            })

            $.ajax({
                url: 'http://localhost:3000/database/repository/invoices.php',
                type: 'POST',
                data: {
                    action: 'revenue_monthly'
                },
                success: (response) => {
                    let result =JSON.parse(response)
                    // console.log(result);
                    var data = {
                        labels: result.map(item => "Tháng "+ item.month),
                        datasets: [
                            {
                            label: "Giá trị đơn nhập",
                            data: result.map(item => item.total),
                            backgroundColor: ["#ff0000", "#00ff00", "#0000ff", '#B22222',
                                                '#FFA500', '#FF6347', '#FFD700', '#ADFF2F',
                                                '#32CD32', '#9ACD32', '#556B2F', '#BC8F8F'], 
                            },
                        ],
                        };
                    let canvas = document.querySelector("#barchart")
                    let ctx = canvas.getContext("2d")
                    let myChart = new Chart(ctx, {
                        type: "bar",
                        data: data,
                    })
                }
            })
        }
    </script>

</body>

</html>