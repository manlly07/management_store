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
                                                    <span class="h3 mb-0 app-brand-text fw-semibold text-black">VoTri</span>
                                                </div>
                                                <p class="mb-1 text-secondary">Office 149, 450 South Brand Brooklyn</p>
                                                <p class="mb-1 text-secondary">San Diego County, CA 91905, USA</p>
                                                <p class="mb-0 text-secondary">+1 (123) 456 7891, +44 (876) 543 2198</p>
                                            </div>
                                            <div class="col-md-5 pe-0 ps-0 ps-md-2">
                                                <dl class="row mb-2 g-2">
                                                    <dt class="col-sm-6 mb-2 d-md-flex align-items-center justify-content-end">
                                                        <span class="h4 text-capitalize mb-0 text-nowrap">Invoice</span>
                                                    </dt>
                                                    <dd class="col-sm-6">
                                                        <div class="input-group input-group-merge disabled">
                                                            <span style="background-color: #efeff0;" class="input-group-text">#</span>
                                                            <input type="text" class="form-control" disabled="" placeholder="74909" value="74909" id="invoiceId">
                                                        </div>
                                                    </dd>
                                                    <dt class="col-sm-6 mb-2 d-md-flex align-items-center justify-content-end">
                                                        <span class="fw-normal text-secondary">Date Issued:</span>
                                                    </dt>
                                                    <dd class="col-sm-6">
                                                        <input type="date" class="form-control invoice-date flatpickr-input" readonly="readonly">
                                                    </dd>
                                                    <dt class="col-sm-6 mb-2 d-md-flex align-items-center justify-content-end">
                                                        <span class="fw-normal text-secondary">Due Date:</span>
                                                    </dt>
                                                    <dd class="col-sm-6">
                                                        <input type="date" class="form-control due-date flatpickr-input" readonly="readonly">
                                                    </dd>
                                                </dl>
                                            </div>
                                        </div>
                                    </div>
                                    <hr class="my-0">
                                    <div class="card-body">
                                        <div class="d-flex justify-content-between flex-wrap">
                                            <div class="my-3 me-3">
                                                <h6 class="fw-bold">Invoice To:</h6>
                                                <p class="mb-1 text-secondary">Thomas shelby</p>
                                                <p class="mb-1 text-secondary">Shelby Company Limited</p>
                                                <p class="mb-1 text-secondary">Small Heath, B10 0HF, UK</p>
                                                <p class="mb-1 text-secondary">718-986-6062</p>
                                                <p class="mb-0 text-secondary">peakyFBlinders@gmail.com</p>
                                            </div>
                                            <div class="my-3">
                                                <h6 class="fw-bold">Bill To:</h6>
                                                <table>
                                                    <tbody>
                                                        <tr class="text-secondary">
                                                            <td class="pe-3">Total Due:</td>
                                                            <td>$12,110.55</td>
                                                        </tr>
                                                        <tr class="text-secondary">
                                                            <td class="pe-3">Bank name:</td>
                                                            <td>American Bank</td>
                                                        </tr>
                                                        <tr class="text-secondary">
                                                            <td class="pe-3">Country:</td>
                                                            <td>United States</td>
                                                        </tr>
                                                        <tr class="text-secondary">
                                                            <td class="pe-3">IBAN:</td>
                                                            <td>ETD95476213874685</td>
                                                        </tr>
                                                        <tr class="text-secondary">
                                                            <td class="pe-3">SWIFT code:</td>
                                                            <td>BR91905</td>
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
                                                                <h6 class="mb-2 repeater-title">Item</h6>
                                                                <select class="form-select item-details mb-3">
                                                                    <option value="App Design">App Design</option>
                                                                    <option value="App Customization" selected="">App Customization</option>
                                                                    <option value="ABC Template">ABC Template</option>
                                                                    <option value="App Development">App Development</option>
                                                                </select>
                                                                <textarea class="form-control" rows="2">The most developer friendly &amp; highly customizable HTML5 Admin</textarea>
                                                            </div>
                                                            <div class="col-md-3 col-12 mb-md-0 mb-3">
                                                                <h6 class="mb-2 repeater-title">Cost</h6>
                                                                <input type="number" class="form-control invoice-item-price mb-3" value="24" placeholder="24" min="12">
                                                            </div>
                                                            <div class="col-md-2 col-12 mb-md-0 mb-3">
                                                                <h6 class="mb-2 repeater-title">Qty</h6>
                                                                <input type="number" class="form-control invoice-item-qty" value="1" placeholder="1" min="1" max="50">
                                                            </div>
                                                            <div class="col-md-1 col-12 pe-0">
                                                                <h6 class="mb-2 repeater-title">Price</h6>
                                                                <p class="mb-0">$24.00</p>
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
                                                    <button type="button" class="btn btn-primary btn-sm waves-effect waves-light" data-repeater-create=""><i class="mdi mdi-plus me-1"></i> Add Item</button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                    <hr class="my-0">
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-md-6 mb-md-0 mb-3">
                                                <div class="d-flex align-items-center gap-2 mb-3 mt-2">
                                                    <label for="salesperson" class="text-heading">Salesperson: </label>
                                                    <input type="text" class="form-control w-50" id="salesperson" placeholder="Edward Crowley" value="Edward Crowley">
                                                </div>
                                                <div class="mb-4">
                                                    <input type="text" class="form-control w-50" id="invoiceMsg" placeholder="Thanks for your business" value="Thanks for your business">
                                                    <label for="invoiceMsg" class="d-none">Customer Notes</label>
                                                </div>
                                            </div>
                                            <div class="col-md-6 d-flex justify-content-md-end mt-2">
                                                <div class="invoice-calculations">
                                                    <div class="d-flex justify-content-between mb-2">
                                                        <span class="w-px-100 text-secondary">Subtotal:</span>
                                                        <h6 class="mb-0 pt-1">$5000.25</h6>
                                                    </div>
                                                    <div class="d-flex justify-content-between mb-2">
                                                        <span class="w-px-100 text-secondary">Discount:</span>
                                                        <h6 class="mb-0 pt-1">$00.00</h6>
                                                    </div>
                                                    <div class="d-flex justify-content-between mb-2">
                                                        <span class="w-px-100 text-secondary">Tax:</span>
                                                        <h6 class="mb-0 pt-1">$100.00</h6>
                                                    </div>
                                                    <hr>
                                                    <div class="d-flex justify-content-between">
                                                        <span class="w-px-100 text-secondary">Total:</span>
                                                        <h6 class="mb-0 pt-1">$5100.25</h6>
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
                                                    <label for="note" class="form-label fw-medium">Note:</label>
                                                    <textarea class="form-control" rows="2" id="note">It was a pleasure working with you and your team. We hope you will keep us in mind for future freelance projects. Thank You!</textarea>
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
                                            <span class="d-flex align-items-center justify-content-center text-nowrap"><i class="mdi mdi-send-outline scaleX-n1-rtl me-2"></i>Send Invoice</span>
                                        </button>
                                        <div class="d-flex">
                                            <a href="./invoicedetail.php" class="btn btn-outline-secondary w-50 me-2 mb-3 waves-effect">Preview</a>
                                            <button type="button" class="btn btn-outline-secondary w-50 mb-3 waves-effect">Save</button>
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
    <div class="modal fade" id="addCategory" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle">Add Category</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form id="createCategory">
                        <div class="form-row">
                            <div class="form-group col-12">
                                <label for="username">Category name</label>
                                <input type="text" name="categoryname" class="form-control" id="categoryname" placeholder="category name">
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-12">
                                <label for="Description">Description</label>
                                <input type="Description" name="description" class="form-control" id="description" placeholder="description">
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="cerror text-danger">

                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="submit" class="btn btn-primary">Add</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="editCategory" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle">Edit Category</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form id="updateCategory">
                        <div class="form-row">
                            <div class="form-group col-12">
                                <label for="username">Category name</label>
                                <input type="text" name="categoryname" class="form-control categoryname" placeholder="category name">
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-12">
                                <label for="Description">Description</label>
                                <input type="text" name="description" class="form-control description" placeholder="description">
                            </div>
                        </div>
                        <div class="form-row">
                            <input type="text" name="id" class="form-control id" placeholder="id" hidden>
                            <div class="eerror text-danger">

                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="submit" class="btn btn-primary">update</button>
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
    <script type="text/javascript">
        $(document).ready(() => {
            // showAllCategory();
        })
        const showAllCategory = () => {
            $.ajax({
                url: 'http://localhost:3000/database/repository/category.php',
                type: 'POST',
                data: {
                    action: "view"
                },
                success: (response) => {
                    $('#table-category').html(response)
                    $('#dataTable').DataTable({
                        searching: true,
                        paging: true,
                    })
                }
            })
        }
        const EnableCategory = (id) => {
            $.ajax({
                url: 'http://localhost:3000/database/repository/category.php',
                type: 'POST',
                data: {
                    action: "enable",
                    id: id
                },
                success: (response) => {
                    let {
                        status
                    } = JSON.parse(response)
                    if (status === 200) {
                        window.location.reload()
                    } else if (status === 400) {
                        console.log('haha');
                    }
                }
            })
        }
        const DisableCategory = (id) => {
            $.ajax({
                url: 'http://localhost:3000/database/repository/category.php',
                type: 'POST',
                data: {
                    action: "disable",
                    id: id
                },
                success: (response) => {
                    let {
                        status
                    } = JSON.parse(response)
                    if (status === 200) {
                        window.location.reload()
                    } else if (status === 400) {
                        console.log('haha');
                    }
                }
            })
        }

        $('#createCategory').on('submit', (e) => {
            e.preventDefault();
            var formData = $('#createCategory').serialize();
            console.log(formData);
            $.ajax({
                url: 'http://localhost:3000/database/repository/category.php',
                type: 'POST',
                data: `${formData}&action=create`,
                success: (response) => {
                    let {
                        status,
                        message
                    } = JSON.parse(response)
                    console.log(status);
                    if (status === 200) {
                        window.location.reload()
                    } else if (status === 400) {
                        $('.cerror').html(message);
                    }
                }
            })
        })

        const EditCategory = (id) => {
            $.ajax({
                url: 'http://localhost:3000/database/repository/category.php',
                type: 'POST',
                data: `id=${id}&action=getbyid`,
                success: (response) => {
                    console.log(response);
                    let data = JSON.parse(response)[0]
                    $('.categoryname').val(data['name']);
                    $('.description').val(data['description']);
                    $('.id').val(data['id']);
                    $('#editCategory').modal('show')
                }
            })
        }
        $('#updateCategory').on('submit', (e) => {
            e.preventDefault();
            var formData = $('#updateCategory').serialize();
            console.log(formData);
            $.ajax({
                url: 'http://localhost:3000/database/repository/category.php',
                type: 'POST',
                data: `${formData}&action=update`,
                success: (response) => {
                    let {
                        status,
                        message
                    } = JSON.parse(response)
                    console.log(message);
                    if (status === 200) {
                        $('.eerror').html('');
                        window.location.reload()
                    } else if (status === 400) {
                        $('.eerror').html(message);
                    }
                }
            })
        })
    </script>
</body>

</html>