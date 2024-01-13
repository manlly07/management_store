<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Invoices</title>

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

                    <div class="container-xxl flex-grow-1 container-p-y">
                        <div class="row invoice-preview">
                            <!-- Invoice -->
                            <div class="col-xl-9 col-md-8 col-12 mb-md-0 mb-4">
                                <div class="card invoice-preview-card">
                                    <div class="card-body">
                                        <div class="d-flex justify-content-between flex-xl-row flex-md-column flex-sm-row flex-column">
                                            <div class="mb-xl-0 pb-3">
                                                <div class="d-flex svg-illustration align-items-center gap-2 mb-4">
                                                    <span class="app-brand-logo demo">
                                                        <span class="text-primary">
                                                            <svg width="30" height="24" viewBox="0 0 250 196" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                <path fill-rule="evenodd" clip-rule="evenodd" d="M12.3002 1.25469L56.655 28.6432C59.0349 30.1128 60.4839 32.711 60.4839 35.5089V160.63C60.4839 163.468 58.9941 166.097 56.5603 167.553L12.2055 194.107C8.3836 196.395 3.43136 195.15 1.14435 191.327C0.395485 190.075 0 188.643 0 187.184V8.12039C0 3.66447 3.61061 0.0522461 8.06452 0.0522461C9.56056 0.0522461 11.0271 0.468577 12.3002 1.25469Z" fill="currentColor"></path>
                                                                <path opacity="0.077704" fill-rule="evenodd" clip-rule="evenodd" d="M0 65.2656L60.4839 99.9629V133.979L0 65.2656Z" fill="black"></path>
                                                                <path opacity="0.077704" fill-rule="evenodd" clip-rule="evenodd" d="M0 65.2656L60.4839 99.0795V119.859L0 65.2656Z" fill="black"></path>
                                                                <path fill-rule="evenodd" clip-rule="evenodd" d="M237.71 1.22393L193.355 28.5207C190.97 29.9889 189.516 32.5905 189.516 35.3927V160.631C189.516 163.469 191.006 166.098 193.44 167.555L237.794 194.108C241.616 196.396 246.569 195.151 248.856 191.328C249.605 190.076 250 188.644 250 187.185V8.09597C250 3.64006 246.389 0.027832 241.935 0.027832C240.444 0.027832 238.981 0.441882 237.71 1.22393Z" fill="currentColor"></path>
                                                                <path opacity="0.077704" fill-rule="evenodd" clip-rule="evenodd" d="M250 65.2656L189.516 99.8897V135.006L250 65.2656Z" fill="black"></path>
                                                                <path opacity="0.077704" fill-rule="evenodd" clip-rule="evenodd" d="M250 65.2656L189.516 99.0497V120.886L250 65.2656Z" fill="black"></path>
                                                                <path fill-rule="evenodd" clip-rule="evenodd" d="M12.2787 1.18923L125 70.3075V136.87L0 65.2465V8.06814C0 3.61223 3.61061 0 8.06452 0C9.552 0 11.0105 0.411583 12.2787 1.18923Z" fill="currentColor"></path>
                                                                <path fill-rule="evenodd" clip-rule="evenodd" d="M12.2787 1.18923L125 70.3075V136.87L0 65.2465V8.06814C0 3.61223 3.61061 0 8.06452 0C9.552 0 11.0105 0.411583 12.2787 1.18923Z" fill="white" fill-opacity="0.15"></path>
                                                                <path fill-rule="evenodd" clip-rule="evenodd" d="M237.721 1.18923L125 70.3075V136.87L250 65.2465V8.06814C250 3.61223 246.389 0 241.935 0C240.448 0 238.99 0.411583 237.721 1.18923Z" fill="currentColor"></path>
                                                                <path fill-rule="evenodd" clip-rule="evenodd" d="M237.721 1.18923L125 70.3075V136.87L250 65.2465V8.06814C250 3.61223 246.389 0 241.935 0C240.448 0 238.99 0.411583 237.721 1.18923Z" fill="white" fill-opacity="0.3"></path>
                                                            </svg>
                                                        </span>
                                                    </span>
                                                    <span class="h3 mb-0 app-brand-text fw-semibold text-black">Tin Võ</span>
                                                </div>
                                                <p class="mb-1 text-secondary">Nhà phân phối bia nước ngọt Tin Võ</p>
                                                <p class="mb-1 text-secondary">Thành phố Hồ Chí Minh</p>
                                                <p class="mb-0 text-secondary">+1 (123) 456 7891, +44 (876) 543 2198</p>
                                            </div>
                                            <div>
                                                <h4 class="fw-medium text-capitalize pb-1 text-nowrap">Mã đơn <span class="invoices-id">#0</span></h4>
                                                <div class="mb-1">
                                                    <span class="text-secondary">Ngày tạo:</span>
                                                    <span class="text-secondary date-issues">April 25, 2021</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <hr class="my-0">
                                    <div class="card-body">
                                        <div class="d-flex justify-content-between flex-wrap">
                                            <div class="my-3 me-3">
                                                <h6 class="fw-bold">Nhập từ:</h6>
                                                <p class="mb-1 text-secondary name">Thomas shelby</p>
                                                <p class="mb-1 text-secondary address">Shelby Company Limited</p>
                                                <p class="mb-1 text-secondary phone">Small Heath, B10 0HF, UK</p>
                                            </div>
                                            <div class="my-3">
                                                <h6 class="fw-bold">Thanh toán:</h6>
                                                <table>
                                                    <tbody>
                                                        <tr class="text-secondary">
                                                            <td class="pe-3">Tổng giá trị:</td>
                                                            <td class="total-due">$12,110.55</td>
                                                        </tr>
                                                        <tr class="text-secondary">
                                                            <td class="pe-3">Phương thức:</td>
                                                            <td class="method">Banking</td>
                                                        </tr>
                                                        <tr class="text-secondary">
                                                            <td class="pe-3">Trạng thái:</td>
                                                            <td class="status">Pending</td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="table-responsive">
                                        <table class="table table-borderless m-0">
                                            <thead class="border-top">
                                                <tr>
                                                    <th>Sản phẩm</th>
                                                    <!-- <th>Description</th> -->
                                                    <th>Đơn giá</th>
                                                    <th>Số lượng</th>
                                                    <th>Giá trị</th>
                                                </tr>
                                            </thead>
                                            <tbody class="tbody">
                                                <!-- <tr> -->
                                                    <!-- <td class="text-nowrap text-heading item">Vuexy Admin Template</td> -->
                                                    <!-- <td class="text-nowrap">HTML Admin Template</td> -->
                                                    <!-- <td class="cost">$32</td>
                                                    <td class="qty">1</td>
                                                    <td class="price">$32.00</td> -->
                                                <!-- </tr> -->
                                            </tbody>
                                        </table>
                                    </div>
                                    <hr class="my-0">
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-md-6 mb-md-0 mb-3">
                                                <div>
                                                    <p class="mb-2">
                                                        <span class="me-1 text-heading">Người giao:</span>
                                                        <span class="text-secondary personname"></span>
                                                    </p>
                                                    <span class="text-secondary">Cảm ơn đơn hàng của bạn</span>
                                                </div>
                                            </div>
                                            <div class="col-md-6 d-flex justify-content-md-end mt-2">
                                                <div class="invoice-calculations">
                                                    <div class="d-flex justify-content-between mb-2">
                                                        <span class="w-px-100 text-secondary">Tạm tính:</span>
                                                        <h6 class="mb-0 pt-1 subtotal">$5000.25</h6>
                                                    </div>
                                                    <div class="d-flex justify-content-between mb-2">
                                                        <span class="w-px-100 text-secondary">Giảm giá:</span>
                                                        <h6 class="mb-0 pt-1">00.00</h6>
                                                    </div>
                                                    <div class="d-flex justify-content-between mb-2">
                                                        <span class="w-px-100 text-secondary">Thuế:</span>
                                                        <h6 class="mb-0 pt-1">00.00</h6>
                                                    </div>
                                                    <hr>
                                                    <div class="d-flex justify-content-between">
                                                        <span class="w-px-100 text-secondary">Tổng:</span>
                                                        <h6 class="mb-0 pt-1 total">5100.25</h6>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <hr class="my-0">

                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-12">
                                                <span class="fw-medium">Ghi chú:</span>
                                                <span class="text-secondary note">Thật vui khi được làm việc với bạn và nhóm của bạn. Chúng tôi hy vọng bạn sẽ ghi nhớ chúng tôi cho các dự án tự do trong tương lai. Cảm ơn!</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- /Invoice -->

                            <!-- Invoice Actions -->
                            <div class="col-xl-3 col-md-4 col-12 invoice-actions">
                                <div class="card">
                                    <div class="card-body">
                                        <button class="btn btn-primary d-grid w-100 mb-3 waves-effect waves-light" data-bs-toggle="offcanvas" data-bs-target="#sendInvoiceOffcanvas">
                                            <span class="d-flex align-items-center justify-content-center text-nowrap"><i class="fa fa-angle-double-left me-2"></i>Send Invoice</span>
                                        </button>
                                        <a class="btn btn-outline-secondary d-grid w-100 mb-3 waves-effect" target="_blank" href="./app-invoice-print.php">
                                            In
                                        </a>
                                        <button onclick="Status()" class="btn btn-outline-secondary d-grid w-100 mb-3 waves-effect">
                                            Cập nhật trạng thái
                                        </button>
                                    </div>
                                </div>
                            </div>
                            <!-- /Invoice Actions -->
                        </div>

                        <!-- Offcanvas -->
                        <!-- Send Invoice Sidebar -->
                        <div class="offcanvas offcanvas-end" id="sendInvoiceOffcanvas" aria-hidden="true">
                            <div class="offcanvas-header mb-3">
                                <h5 class="offcanvas-title">Send Invoice</h5>
                                <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                            </div>
                            <div class="offcanvas-body flex-grow-1">
                                <form>
                                    <div class="form-floating form-floating-outline mb-4">
                                        <input type="text" class="form-control" id="invoice-from" value="shelbyComapny@email.com" placeholder="company@email.com">
                                        <label for="invoice-from">From</label>
                                    </div>
                                    <div class="form-floating form-floating-outline mb-4">
                                        <input type="text" class="form-control" id="invoice-to" value="qConsolidated@email.com" placeholder="company@email.com">
                                        <label for="invoice-to">To</label>
                                    </div>
                                    <div class="form-floating form-floating-outline mb-4">
                                        <input type="text" class="form-control" id="invoice-subject" value="Invoice of purchased Admin Templates" placeholder="Invoice regarding goods">
                                        <label for="invoice-subject">Subject</label>
                                    </div>
                                    <div class="form-floating form-floating-outline mb-4">
                                        <textarea class="form-control" name="invoice-message" id="invoice-message" style="height: 190px;">Dear Queen Consolidated,
                                            Thank you for your business, always a pleasure to work with you!
                                            We have generated a new invoice in the amount of $95.59
                                            We would appreciate payment of this invoice by 05/11/2021</textarea>
                                        <label for="invoice-message">Message</label>
                                    </div>
                                    <div class="mb-4">
                                        <span class="badge bg-label-primary rounded-pill">
                                            <i class="mdi mdi-link-variant mdi-14px me-1"></i>
                                            <span class="align-middle">Invoice Attached</span>
                                        </span>
                                    </div>
                                    <div class="mb-3 d-flex flex-wrap">
                                        <button type="button" class="btn btn-primary me-3 waves-effect waves-light" data-bs-dismiss="offcanvas">Send</button>
                                        <button type="button" class="btn btn-outline-secondary waves-effect" data-bs-dismiss="offcanvas">Cancel</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <!-- /Send Invoice Sidebar -->

                        <!-- Add Payment Sidebar -->
                        <div class="offcanvas offcanvas-end" id="addPaymentOffcanvas" aria-hidden="true">
                            <div class="offcanvas-header mb-3">
                                <h5 class="offcanvas-title">Add Payment</h5>
                                <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                            </div>
                            <div class="offcanvas-body flex-grow-1">
                                <div class="d-flex justify-content-between bg-lighter p-2 mb-3">
                                    <p class="mb-0">Invoice Balance:</p>
                                    <p class="fw-medium mb-0">$5000.00</p>
                                </div>
                                <form>
                                    <div class="input-group input-group-merge mb-4">
                                        <span class="input-group-text">$</span>
                                        <div class="form-floating form-floating-outline">
                                            <input type="text" id="invoiceAmount" name="invoiceAmount" class="form-control invoice-amount" placeholder="100">
                                            <label for="invoiceAmount">Payment Amount</label>
                                        </div>
                                    </div>
                                    <div class="form-floating form-floating-outline mb-4">
                                        <input id="payment-date" class="form-control invoice-date flatpickr-input" type="text" readonly="readonly">
                                        <label for="payment-date">Payment Date</label>
                                    </div>
                                    <div class="form-floating form-floating-outline mb-4">
                                        <select class="form-select" id="payment-method">
                                            <option value="" selected="" disabled="">Select payment method</option>
                                            <option value="Cash">Cash</option>
                                            <option value="Bank Transfer">Bank Transfer</option>
                                            <option value="Debit Card">Debit Card</option>
                                            <option value="Credit Card">Credit Card</option>
                                            <option value="Paypal">Paypal</option>
                                        </select>
                                        <label for="payment-method">Payment Method</label>
                                    </div>
                                    <div class="form-floating form-floating-outline mb-4">
                                        <textarea class="form-control" id="payment-note" style="height: 62px;"></textarea>
                                        <label for="payment-note">Internal Payment Note</label>
                                    </div>
                                    <div class="mb-3 d-flex flex-wrap">
                                        <button type="button" class="btn btn-primary me-3 waves-effect waves-light" data-bs-dismiss="offcanvas">Send</button>
                                        <button type="button" class="btn btn-outline-secondary waves-effect" data-bs-dismiss="offcanvas">Cancel</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <!-- /Add Payment Sidebar -->

                        <!-- /Offcanvas -->


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

    <div class="modal fade" id="editStatus" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle">Cập nhật trạng thái</h5>
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
            avtURL != '' ? $('#admin-avt').attr('src', `../../../uploads/avt/${avtURL}`): $('#avatar').attr('src', "../../../img/admin.png")
            var urlParams = new URLSearchParams(window.location.search);
            var id = urlParams.get('id');
            getInvoiceDetail(id)
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

        var urlParams = new URLSearchParams(window.location.search);
        var id = urlParams.get('id');

        const Status = () => {
            $.ajax({
                url: 'http://localhost:3000/database/repository/invoices.php',
                type: 'POST',
                data: {id: id, action: 'getbyid'},
                success: (response) => {
                    let data = JSON.parse(response)
                    // console.log(data);
                    switch (data[0]['status']){
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
                $.ajax({
                    url: 'http://localhost:3000/database/repository/invoices.php',
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
                    },
                    error: function (error) {
                        console.error(error);
                    },
                });
            })
        }

        const getInvoiceDetail = (id) => {
            $.ajax({
                url: 'http://localhost:3000/database/repository/invoices.php',
                type: 'POST',
                data: `action=getbyid&id=${id}`,
                success: (response) => {
                    console.log(JSON.parse(response));
                    let invoices = JSON.parse(response)
                    $('.invoices-id').html('#' + invoices[0].shipment_id)
                    $('.date-issues').html(invoices[0].shipment_date)
                    $('.name').html(invoices[0].supplier_name)
                    $('.address').html(invoices[0].supplier_address)
                    $('.phone').html(invoices[0].supplier_phone)
                    $('.total-due').html(formatMoney(invoices[0].total))
                    $('.method').html(invoices[0].shipping_method)
                    $('.status').html(invoices[0].status)
                    $('.personname').html(invoices[0].name)
                    invoices.forEach((invoice) => {
                        let tr = `
                            <tr>
                                <td class="text-nowrap text-heading item">${invoice.product_name}</td>
                                <td class="cost">${formatMoney(invoice.purchase_price)}</td>
                                <td class="qty">${invoice.quantity}</td>
                                <td class="price">${formatMoney(invoice.purchase_price * invoice.quantity)}</td>
                            </tr>
                        `;
                        $('.tbody').append(tr);
                    });

                    $('.subtotal').html(formatMoney(invoices[0].total))
                    $('.total').html(formatMoney(invoices[0].total))
                    $('.note').html(invoices[0].note)
                }
            })
        }
    </script>
</body>

</html>