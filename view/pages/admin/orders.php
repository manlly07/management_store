<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Orders</title>

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
                    <h1 class="h3 mb-2 text-gray-800">Quản lý đơn hàng</h1>


                    


                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3 d-flex align-items-center">
                            <h6 class="m-0 font-weight-bold text-primary">Thông tin hóa đơn</h6>
                            
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table " id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>Mã đơn</th>
                                            <th>Ngày</th>
                                            <th>Khách hàng</th>
                                            <th>Phương thức</th>
                                            <th>Trạng thái</th>
                                            <th>Hành động</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th>Mã đơn</th>
                                            <th>Ngày</th>
                                            <th>Khách hàng</th>
                                            <th>Phương thức</th>
                                            <th>Trạng thái</th>
                                            <th>Hành động</th>
                                        </tr>
                                    </tfoot>
                                    <tbody id="table-category">
                                        
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
            <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
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

    <div class="modal fade" id="editStatus" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle">Cập nhật trạng thái đơn hàng</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form id="updateStatus">
                        <div class="form-row">
                            <div class="form-group col-12">
                            <label class="form-label" for="customRange2">Trạng thái</label>
                            <div class="d-flex justify-content-between mb-3">
                                <div class="d-flex flex-column align-items-center">
                                    <img src="../../../img/pending.png" alt="" style="width: 100px; height: 100px">
                                    <span class="fw-bold">Chờ xử lý</span>
                                </div>
                                <div class="d-flex flex-column align-items-center">
                                    <img src="../../../img//processing.png" alt="" style="width: 100px; height: 100px;">
                                    <span class="fw-bold">Đang xử lý</span>
                                </div>
                                <div class="d-flex flex-column align-items-center">
                                    <img src="../../../img/delivered.png" alt="" style="width: 100px; height: 100px;">
                                    <span class="fw-bold">Đã giao</span>
                                </div>
                                <div class="d-flex flex-column align-items-center">
                                    <img src="../../../img/canceled.jpg" alt="" style="width: 100px; height: 100px;">
                                    <span class="fw-bold text-danger">Huỷ</span>
                                </div>
                            </div>
                            <div class="range" data-mdb-range-init>
                                <input type="range" class="form-range" min="1" max="4" id="status-value"/>
                            </div>
                            <textarea type="text" id="cancelled" class="form-control mt-1" placeholder="Lý do huỷ..." style="display: none;"></textarea>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" id="submit" class="btn btn-primary">Cập nhật</button>
                        </div>
                    </form>
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
    <script src="../../../js/checkURL.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script type="text/javascript">
        $(document).ready(() => {
            let username = localStorage.getItem('fullName')
            $('#username').html(`${username}`)
            let avtURL =localStorage.getItem('avt')
            avtURL != '' ? $('#admin-avt').attr('src', `../../../uploads/avt/${avtURL}`): $('#avatar').attr('src', "../../../img/admin.png")
            showAllInvoice();
        })
        const showAllInvoice = () => {
            $.ajax({
                url: 'http://localhost:3000/database/repository/orders.php',
                type: 'POST',
                data: {
                    action: "view"
                },
                success: (response) => {
                    console.log(JSON.parse(response));
                    let orders = JSON.parse(response)
                    $('#dataTable').DataTable({
                        searching: true,
                        paging: true,
                        data: orders,
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
                            },
                            {
                                data: 'status',
                                render: function(data, type, row) {
                                    return checkStatus(row.status)
                                }
                            },
                            {
                                "data":null,
                                render: function(data, type, row) {
                                    // console.log(row);
                                    return `<div class="d-flex align-items-center">
                                                <button onclick="Status(${row.order_id})" type="button" class="btn btn-sm btn-primary">Sửa trạng thái <i class="fa fa-edit mx-1"></i></button>
                                                </div>`
                                }
                            }
                        ],
                        order: [[1, 'desc']]
                    })
                }
            })
        }


        const checkStatus = (status) => {
            switch (status){
                        case 'chờ xử lý': 
                            return `<span class="badge rounded-pill py-2 px-3 fs-6 bg-primary"> ${status} </span>`
                            break
                        case 'đang xử lý': 
                            return `<span class="badge rounded-pill py-2 px-3 fs-6 bg-warning"> ${status} </span>`
                            break
                        case 'đã giao': 
                            return `<span class="badge rounded-pill py-2 px-3 fs-6 bg-success"> ${status} </span>`
                            break
                        case 'đã huỷ': 
                            return `<span class="badge rounded-pill py-2 px-3 fs-6 bg-secondary"> ${status} </span>`
                            break
                    }
        }
        const Status = (id) => {
            $.ajax({
                url: 'http://localhost:3000/database/repository/orders.php',
                type: 'POST',
                data: {id: id, action: 'getbyid'},
                success: (response) => {
                    let data = JSON.parse(response)
                    // console.log(data);
                    switch (data['status']){
                        case 'chờ xử lý': $('#status-value').val(1);break;
                        case 'đang xử lý': $('#status-value').val(2);break;
                        case 'đã giao': $('#status-value').val(3);break;
                        case 'đã huỷ': $('#status-value').val(4);break;
                    } 
                    $('#editStatus').modal('show')
                }
            })

            $('#status-value').on('change', () => {
                if($('#status-value').val() == '4'){
                    $('#cancelled').show()
                }else{
                    $('#cancelled').hide();
                }
            })
            $('#submit').on('click', (e) => {
                e.preventDefault();
                let status = ''
                switch ($('#status-value').val()){
                    case '1': status = 'chờ xử lý';break;
                    case '2': status = 'đang xử lý';break;
                    case '3': status = 'đã giao';break;
                    case '4': status = 'đã huỷ';break;
                }
                if(status == 'đã huỷ'){
                    Swal.fire({
                        title: "Bạn chắc chắn muốn huỷ đơn hàng?",
                        text: "You won't be able to revert this!",
                        icon: "warning",
                        showCancelButton: true,
                        confirmButtonColor: "success",
                        cancelButtonColor: "danger",
                        confirmButtonText: "Xác nhận huỷ"
                    }).then((result) => {
                        if (result.isConfirmed) {
                            $.ajax({
                    url: 'http://localhost:3000/database/repository/orders.php',
                    type: 'POST',
                    data: {
                        action: 'update',
                        id: id,
                        status: status
                    },
                    success: function (response) {
                        let {
                        status,
                        message
                    } = JSON.parse(response)
                    if (status === 200) {
                        $('.eerror').html('');
                        Swal.fire({
                                title: "Done",
                                text: "Cập nhật trạng thái thành công",
                                icon: "success"
                            });
                            setTimeout(() => {
                                window.location.reload()
                            },1500)
                    } else if (status === 404) {
                        Swal.fire({
                            title: "Oops...",
                            text: message,
                            icon: "error"
                            });
                    }
                    }
                    
                });
                        }
                    });
                }else {
                    $.ajax({
                    url: 'http://localhost:3000/database/repository/orders.php',
                    type: 'POST',
                    data: {
                        action: 'update',
                        id: id,
                        status: status
                    },
                    success: function (response) {
                        let {
                        status,
                        message
                    } = JSON.parse(response)
                    if (status === 200) {
                        $('.eerror').html('');
                        Swal.fire({
                                title: "Done",
                                text: "Cập nhật trạng thái thành công",
                                icon: "success"
                            });
                            setTimeout(() => {
                                window.location.reload()
                            },1500)
                    } else if (status === 404) {
                        Swal.fire({
                            title: "Oops...",
                            text: message,
                            icon: "error"
                            });
                    }
                    }
                    
                });
                }
                
            })
        }


    </script>
</body>

</html>