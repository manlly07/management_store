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

                    <!-- Page Heading -->
                    <h1 class="h3 mb-2 text-gray-800">Manage Invoice</h1>
                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3 d-flex align-items-center">
                            <h6 class="m-0 font-weight-bold text-primary">Thông tin hóa đơn</h6>
                            <a href="./addinvoice.php" type="button" class="ml-auto d-block btn btn-primary">
                                <i class="fa fa-plus"></i>
                                Add new invoice
                            </a>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Client</th>
                                            <th>Total</th>
                                            <th>Status</th>
                                            <th>Issued date</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th>No</th>
                                            <th>Client</th>
                                            <th>Total</th>
                                            <th>Status</th>
                                            <th>Issued date</th>
                                            <th>Action</th>
                                        </tr>
                                    </tfoot>
                                    <tbody id="table-category">
                                        <tr>
                                            <td>
                                                <a href="#"><span>#4582</span></a>
                                            </td>
                                            <td>
                                                <div class="d-flex justify-content-start align-items-center">
                                                    <div class="avatar-wrapper">
                                                        <div class="avatar avatar-sm me-2">
                                                            <img src="https://res.klook.com/images/fl_lossy.progressive,q_65/c_fill,w_3000,h_2250,f_auto/w_80,x_15,y_15,g_south_west,l_Klook_water_br_trans_yhcmh3/activities/x1nlzlyldasoj6pllfug/V%C3%A9V%C3%A0oC%E1%BB%95ngIMGWorldsofAdventure,Dubai-KlookVi%E1%BB%87tNam.jpg" alt="Avatar" class="rounded-circle" />
                                                        </div>
                                                    </div>
                                                    <div class="d-flex flex-column gap-1">
                                                        <a href="pages-profile-user.html" class="text-truncate">
                                                            <h6 class="mb-0">Jereme Saltmarsh</h6>
                                                        </a>
                                                        <small class="text-truncate">jsaltmarshj@hp.com</small>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                $5612	
                                            </td>
                                            <td>
                                                12 Apr 2020	
                                            </td>
                                            <td>
                                                <span class="badge rounded-pill bg-label-success"> Paid </span>
                                            </td>
                                            <td>
                                                <div class="d-flex align-items-center">
                                                    <a href="javascript:;" data-bs-toggle="tooltip" class="text-body delete-record" data-bs-placement="top" aria-label="Delete Invoice" data-bs-original-title="Delete Invoice">
                                                        <i class="fa fa-trash mx-1"></i>
                                                    </a>
                                                    <a href="app-invoice-preview.html" data-bs-toggle="tooltip" class="text-body" data-bs-placement="top" aria-label="Preview Invoice" data-bs-original-title="Preview Invoice">
                                                        <i class="fa fa-eye mx-1"></i>
                                                    </a>
                                                    <div class="dropdown">
                                                        <i class="dropdown-toggle fa fa-caret-down " id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                           
                                                        </i>
                                                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                                            <a class="dropdown-item" href="#">Action</a>
                                                            <a class="dropdown-item" href="#">Another action</a>
                                                            <a class="dropdown-item" href="#">Something else here</a>
                                                        </div>
                                                        </div>
                                                </div>
                                            </td>
                                        </tr>
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
                    <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <a class="btn btn-primary" href="login.html">Logout</a>
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