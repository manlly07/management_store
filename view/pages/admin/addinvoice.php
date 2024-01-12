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



                        <div class="row invoice-edit">
                            <!-- Invoice Edit-->
                            <div class="col-lg-9 col-12 mb-lg-0 mb-4">
                                <div class="card invoice-preview-card">
                                    <div class="card-body">
                                        <div class="row mx-0">
                                            <div class="col-md-7 mb-md-0 mb-4 ps-0">
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
                                                    <span class="h3 mb-0 app-brand-text fw-semibold text-black">Tin võ</span>
                                                </div>
                                                <p class="mb-1 text-secondary">Nhà phân phối bia nước ngọt Tin Võ</p>
                                                <p class="mb-1 text-secondary">Thành phố Hồ Chí Minh</p>
                                                <p class="mb-0 text-secondary">+1 (123) 456 7891, +44 (876) 543 2198</p>
                                            </div>
                                            <div class="col-md-5 pe-0 ps-0 ps-md-2">
                                                <dl class="row mb-2 g-2">
                                                    <dt class="col-sm-6 mb-2 d-md-flex align-items-center justify-content-end">
                                                        <span class="h4 text-capitalize mb-0 text-nowrap">Mã Đơn</span>
                                                    </dt>
                                                    <dd class="col-sm-6">
                                                        <div class="input-group input-group-merge disabled">
                                                            <span style="background-color: #efeff0;" class="input-group-text">#</span>
                                                            <input type="text" class="form-control" disabled="" placeholder="74909" value="74909" id="invoiceId">
                                                        </div>
                                                    </dd>
                                                    <dt class="col-sm-6 mb-2 d-md-flex align-items-center justify-content-end">
                                                        <span class="fw-normal text-secondary">Ngày tạo:</span>
                                                    </dt>
                                                    <dd class="col-sm-6">
                                                        <input type="date" class="form-control invoice-date flatpickr-input">
                                                    </dd>
                                                </dl>
                                            </div>
                                        </div>
                                    </div>
                                    <hr class="my-0">
                                    <div class="card-body">
                                        <div class="d-flex justify-content-between flex-wrap">
                                            <div class="my-3 me-3">
                                                <h6 class="fw-bold">Đơn Nhập Từ:</h6>
                                                <select class="form-select mb-3 select-supplier" required>
                                                    <option>Chọn nhà cung cấp</option>
                
                                                </select>
                                                <p class="mb-1 text-secondary name"></p>
                                                <p class="mb-1 text-secondary address"></p>
                                                <p class="mb-1 text-secondary phone"></p>
                                            </div>
                                            <div class="my-3">
                                                <h6 class="fw-bold">Thanh Toán:</h6>
                                                <table>
                                                    <tbody>
                                                        <tr>
                                                            <td>
                                                                <div class="form-check">
                                                                    <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="cod" checked>
                                                                    <label class="form-check-label" for="exampleRadios1">
                                                                        COD
                                                                    </label>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <div class="form-check">
                                                                    <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios2" value="banking">
                                                                    <label class="form-check-label" for="exampleRadios2">
                                                                        Banking
                                                                    </label>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                        <tr class="text-secondary">
                                                            <select class="form-select mb-3 select-status" required>
                                                                <option value="Pending">Pending</option>
                                                                <option value="Shipped">Shipped</option>
                                                                <option value="Processing">Processing</option>
                                                            </select>
                                                        </tr>
                                                        <tr class="text-secondary">
                                                            <td class="pe-3">Tổng Hoá Đơn:</td>
                                                            <td class="total-due">0.00 đ</td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                    <hr class="my-0">
                                    <div class="card-body">
                                        <form class="source-item pt-1">
                                            <div class="mb-3" data-repeater-list="group-a">
                                                <div class="repeater-wrapper pt-0 pt-md-4" data-repeater-item="">
                                                    <div class="d-flex border rounded position-relative pe-0">
                                                        <div class="row w-100 p-3">
                                                            <div class="col-md-6 col-12 mb-md-0 mb-3">
                                                                <h6 class="mb-2 repeater-title">Sản Phẩm</h6>
                                                                <select class="form-select item-details mb-3" required>
                                                                    <option value="">Lựa chọn sản phẩm</option>
                                                                    <option value="App Design">App Design</option>
                                                                    <option value="App Customization">App Customization</option>
                                                                    <option value="ABC Template">ABC Template</option>
                                                                    <option value="App Development">App Development</option>
                                                                </select>
                                                                <textarea class="form-control" rows="2"></textarea>
                                                            </div>
                                                            <div class="col-md-3 col-12 mb-md-0 mb-3">
                                                                <h6 class="mb-2 repeater-title">Đơn Giá</h6>
                                                                <input type="number" class="form-control invoice-item-cost mb-3" placeholder="cost" min="1" value="0">
                                                            </div>
                                                            <div class="col-md-2 col-12 mb-md-0 mb-3">
                                                                <h6 class="mb-2 repeater-title">Số Lượng</h6>
                                                                <input type="number" class="form-control invoice-item-qty" value="0" placeholder="qty" min="0" max="50">
                                                            </div>
                                                            <div class="col-md-1 col-12 pe-0">
                                                                <h6 class="mb-2 repeater-title">Giá Trị</h6>
                                                                <p class="mb-0 invoice-item-price">0.00 đ</p>
                                                            </div>
                                                        </div>
                                                        <div class="d-flex flex-column align-items-center justify-content-center border-start p-2">
                                                            <i class="fa fa-trash-alt cursor-pointer" data-repeater-delete=""></i>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-12">
                                                    <button type="button" class="btn btn-primary btn-sm button-create" data-repeater-create=""><i class="fa fa-plus me-1"></i>Thêm Sản Phẩm</button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                    <hr class="my-0">
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-md-6 mb-md-0 mb-3">
                                                <div class="d-flex align-items-center gap-2 mb-3 mt-2">
                                                    <label for="salesperson" class="text-heading">Người Giao: </label>
                                                    <input type="text" class="form-control w-50" id="personname" placeholder="Nhập tên..." required ><input type="text" class="form-control w-50" id="personphone" placeholder="Nhập SĐT..." required >
                                                </div>
                                                <div class="mb-4">
                                                    <input type="text" class="form-control w-50" id="invoiceMsg" placeholder="Thanks for your business" value="Thanks for your business">
                                                    <label for="invoiceMsg" class="d-none">Customer Notes</label>
                                                </div>
                                            </div>
                                            <div class="col-md-6 d-flex justify-content-md-end mt-2">
                                                <div class="invoice-calculations">
                                                    <div class="d-flex justify-content-between mb-2">
                                                        <span class="w-px-100 text-secondary">Tạm tính:</span>
                                                        <h6 class="mb-0 pt-1 subtotal">0.00 đ</h6>
                                                    </div>
                                                    <div class="d-flex justify-content-between mb-2">
                                                        <span class="w-px-100 text-secondary">Giảm giá:</span>
                                                        <h6 class="mb-0 pt-1">$00.00</h6>
                                                    </div>
                                                    <div class="d-flex justify-content-between mb-2">
                                                        <span class="w-px-100 text-secondary">Thuế:</span>
                                                        <h6 class="mb-0 pt-1">$00.00</h6>
                                                    </div>
                                                    <hr>
                                                    <div class="d-flex justify-content-between">
                                                        <span class="w-px-100 text-secondary">Tổng:</span>
                                                        <h6 class="mb-0 pt-1 total">0.00 đ</h6>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <hr class="my-0">
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-12">
                                                <div class="mb-3">
                                                    <label for="note" class="form-label fw-medium">Ghi Chú:</label>
                                                    <textarea class="form-control" rows="2" id="note"></textarea>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- /Invoice Edit-->

                            <!-- Invoice Actions -->
                            <div class="col-lg-3 col-12 invoice-actions">
                                <div class="card mb-4">
                                    <div class="card-body">
                                        <button class="btn btn-primary d-grid w-100 mb-3 waves-effect waves-light" data-bs-toggle="offcanvas" data-bs-target="#sendInvoiceOffcanvas">
                                            <span class="d-flex align-items-center justify-content-center gap-2 text-nowrap"><i class="fas fa-fw fa-long-arrow-alt-left"></i><span>Gửi Đơn</span></span>
                                        </button>
                                        <div class="d-flex">
                                            <a href="./invoicedetail.php" class="btn btn-outline-secondary w-50 me-2 mb-3 waves-effect">Xem Trước</a>
                                            <button type="button" class="btn btn-outline-secondary w-50 mb-3 waves-effect save">Lưu</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- /Invoice Actions -->
                        </div>

                        <!-- Offcanvas -->
                        <!-- Send Invoice Sidebar -->
                        <div class="offcanvas offcanvas-end" id="sendInvoiceOffcanvas" aria-hidden="true">
                            <div class="offcanvas-header mb-3">
                                <h5 class="offcanvas-title">Gửi Đơn</h5>
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
                                            <i class="mdi mdi-link-letiant mdi-14px me-1"></i>
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

        $(document).ready(function() {
            // showAllProducts();
            let username = localStorage.getItem('fullName')
            $('#username').html(`${username}`)
            let avtURL =localStorage.getItem('avt')
            avtURL != '' ? $('#admin-avt').attr('src', `../../../uploads/avt/${avtURL}`): $('#avatar').attr('src', "../../../img/admin.png")
            getSuppliers()
            getProducts().done(function(response) {
                console.log(response);
                let products = response
                $(".item-details").each(function() {
                    let selectElement = $(this);
                    // Xóa các tùy chọn hiện có
                    selectElement.empty();
                    // Thêm tùy chọn mặc định
                    selectElement.append('<option value="">Chọn sản phẩm</option>');
                    // Thêm tùy chọn cho từng sản phẩm
                    products.forEach(function(product) {
                        selectElement.append('<option value="' + product.id + '">' + product.productname + '</option>');
                    });
                });
                }).fail(function(error) {
                console.error('Error fetching products:', error);
                });
                
            // Lấy ngày hiện tại
            let currentDate = new Date();

            // Đặt giá trị ngày hiện tại cho trường "Date Issued"
            let invoiceDateField = $(".invoice-date");
            invoiceDateField.val(formatDate(currentDate));

        });

        //   Gán sự kiện change cho các trường cost và qty
        $(document).on('input', '.invoice-item-cost, .invoice-item-qty', function(event) {
            // Lấy giá trị của cost và qty trong hàng hiện tại
            let row = $(event.target).closest(".repeater-wrapper");
            let cost = parseFloat(row.find(".invoice-item-cost").val());
            let qty = parseFloat(row.find(".invoice-item-qty").val());
            // Tinh toán giá mới
            // Kiểm tra nếu cost là NaN, gán bằng 0
            if (isNaN(cost)) {
            cost = 0;
            }
            
            // Kiểm tra nếu qty là NaN, gán bằng 0
            if (isNaN(qty)) {
            qty = 0;
            }
            let price = cost * qty;
            // Cập nhật giá (price) trong hàng hiện tại
            row.find(".invoice-item-price").html(price.toFixed(2) + ' đ');

            let total = $('.invoice-item-price').map(function() {
                return parseFloat($(this).text());
                }).get().reduce(function(a, b) {
                return a + b;
            }, 0);
            console.log(total.toFixed(2));
            $('.total-due').html(total.toFixed(2) + ' đ');
            $('.total').html(total.toFixed(2) + ' đ');
            $('.subtotal').html(total.toFixed(2) + ' đ');
        });

        const formatDate = (date) => {
            let year = date.getFullYear();
            let month = (date.getMonth() + 1).toString().padStart(2, '0');
            let day = date.getDate().toString().padStart(2, '0');
            return `${year}-${month}-${day}`;
        }

        $('.button-create').click(() => {
            let row = $("<div>")
            .addClass("repeater-wrapper pt-0 pt-md-4")
            .attr("data-repeater-item", "");
            
            // Thêm nội dung HTML vào div mới
            getProducts().then(function(products) {
            let selectElement = products.map((product) => {
                return (
                    '<option value="' + product.id + '">' + product.productname + '</option>'
                ) 
            });
            row.html(`
            <div class="d-flex border rounded position-relative pe-0">
                                                        <div class="row w-100 p-3">
                                                            <div class="col-md-6 col-12 mb-md-0 mb-3">
                                                                <h6 class="mb-2 repeater-title">Item</h6>
                                                                <select class="form-select item-details mb-3">
                                                                    <option value>Chọn sản phẩm</option>
                                                                    ${selectElement}
                                                                </select>
                                                                <textarea class="form-control" rows="2"></textarea>
                                                            </div>
                                                            <div class="col-md-3 col-12 mb-md-0 mb-3">
                                                                <h6 class="mb-2 repeater-title">Đơn giá</h6>
                                                                <input type="number" class="form-control invoice-item-cost mb-3" placeholder="cost" min="1" value="0">
                                                            </div>
                                                            <div class="col-md-2 col-12 mb-md-0 mb-3">
                                                                <h6 class="mb-2 repeater-title">Số lượng</h6>
                                                                <input type="number" class="form-control invoice-item-qty" value="0" placeholder="qty" min="0" max="50">
                                                            </div>
                                                            <div class="col-md-1 col-12 pe-0">
                                                                <h6 class="mb-2 repeater-title">Giá trị</h6>
                                                                <p class="mb-0 invoice-item-price">0.00 đ</p>
                                                            </div>
                                                        </div>
                                                        <div class="d-flex flex-column align-items-center justify-content-center border-start p-2">
                                                            <i class="fa fa-trash-alt cursor-pointer" data-repeater-delete=""></i>
                                                        </div>
                                                    </div>
            `);
            });

            // Tìm phần tử cha của hàng mới để thêm vào
            // let repeaterWrapper = $("#repeater-wrapper");
            let repeaterList = $("[data-repeater-list='group-a']");
            // Thêm hàng mới vào phần tử cha
            repeaterList.append(row);
        })

        $(document).on("click", "[data-repeater-delete]", function() {
            // Tìm phần tử cha gần nhất có lớp .repeater-wrapper và xóa nó
            $(this).closest(".repeater-wrapper").remove();
        });

        const getProducts = () => {
            return $.ajax({
            url: 'http://localhost:3000/database/repository/products.php',
            method: 'POST',
            dataType: 'json',
            data: 'action=viewAdmin',
            });
        }

        const getSuppliers = () => {
            $.ajax({
                url: 'http://localhost:3000/database/repository/supplier.php',
                type: 'POST',
                data: {
                    action: "view"
                },
                success: (response) => {
                    let suppliers = JSON.parse(response)
                    let selectElement = $('.select-supplier');
                    // Xóa các tùy chọn hiện có
                    selectElement.empty();
                    // Thêm tùy chọn mặc định
                    selectElement.append('<option disabled selected value>Chọn nhà cung cấp</option>');
                    // Thêm tùy chọn cho từng sản phẩm
                    suppliers.forEach(function(supplier) {
                        selectElement.append('<option value="' + supplier.id + '">' + supplier.name + '</option>');
                    });
                }
            })
        }
        $(document).on('change', '.select-supplier', function(event) {
            let selectedOption = $(this).val();
            console.log(selectedOption);

            $.ajax({
                url: 'http://localhost:3000/database/repository/supplier.php',
                type: 'POST',
                data: `id=${selectedOption}&action=getbyid`,
                success: (response) => {
                    let supplier = JSON.parse(response)[0]
                    console.log(supplier.name);

                    $('.name').html(supplier.name)
                    $('.address').html(supplier.address)
                    $('.phone').html(supplier.phone)
                }
            })
        });
        // Gán sự kiện change cho các trường item-details
        $(document).on('change', '.item-details', function(event) {
            let selectedOption = $(this).val();
            let optionExists = false;

            // Lặp qua các hàng khác và kiểm tra xem tùy chọn đã tồn tại hay chưa
            $(".item-details").not(this).each(function() {
                if ($(this).val() === selectedOption) {
                    optionExists = true;
                    return false; // Dừng vòng lặp nếu tìm thấy tùy chọn đã tồn tại
                }
            });

            if (optionExists) {
                // Hiển thị thông báo hoặc không cho phép chọn
                alert("Tùy chọn đã tồn tại trong các select khác.");
                // Đặt giá trị của select về một giá trị mặc định hoặc không cho phép người dùng chọn
                $(this).val("");
            }
        });

        $('.save').on('click', () => {
            let shipment_date = $(".invoice-date").val()
            let supplier = $('.select-supplier').val()
            let status = $('.select-status').val()
            let method = $('input[name="exampleRadios"]:checked').val()
            let name = $('#personname').val()
            let phone = $('#personphone').val()
            let total = $('.total').html()
            let note = $('#note').val()
            console.log(total);
            // Lấy danh sách các hàng trong biểu mẫu
            let rows = Array.from($('.repeater-wrapper'));
            console.log(rows);
            // Mảng để lưu trữ các giá trị từ các hàng
            let formData = [];

            // Lặp qua từng hàng và lấy giá trị
            rows.forEach(function(row) {
                let itemDetails = row.querySelector('.item-details').value;
                let itemCost = row.querySelector('.invoice-item-cost').value;
                let itemQty = row.querySelector('.invoice-item-qty').value;

                // Tạo đối tượng dữ liệu cho hàng hiện tại
                let rowData = {
                    itemDetails: itemDetails,
                    itemCost: itemCost,
                    itemQty: itemQty
                };

                // Thêm đối tượng dữ liệu vào mảng formData
                formData.push(rowData);
            });
            
            for($i = 0; $i < formData.length; $i++) {
                if (formData[$i].itemDetails.trim() === '') {
                    alert('Hãy trọn sản phẩm')
                    return
                }
            }

            let payload = {
                Supplier_id: supplier,
                name: name,
                phone: phone,
                shipment_date: shipment_date,
                total: total,
                description: note,
                status: status,
                shipping_method: method,
                data: formData,
                action: 'create'    
            }
            $.ajax({
                url: 'http://localhost:3000/database/repository/invoices.php',
                type: 'POST',
                data: payload,
                success: function(response) {
                    // Xử lý phản hồi thành công từ máy chủ
                    console.log(response);
                    let {status, message} = JSON.parse(response);
                    if (status === 200) {
                        Swal.fire({
                            title: "Success!",
                            text: "Tạo thành công!",
                            icon: "success"
                            });
                        setTimeout(() => {
                            window.location.href = 'http://localhost:3000/view/pages/admin/listinvoice.php'
                        },2000)
                    }else {
                        Swal.fire({
                            title: "...Oops!",
                            text: "Đã xảy ra lỗi, hãy kiểm tra lại!",
                            icon: "error"
                            });
                    }
                    console.log(response);
                },
            })
        })
    </script>
</body>

</html>