<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Suppliers</title>

    <!-- Custom fonts for this template -->
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
                    <h1 class="h3 mb-2 text-gray-800">Manage Suppliers</h1>
                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3 d-flex align-items-center">
                            <h6 class="m-0 font-weight-bold text-primary">Thông tin suppliers</h6>
                            <button type="button" class="ml-auto d-block btn btn-primary" data-toggle="modal" data-target="#addSupplier">
                                <i class="fa fa-plus"></i>
                                Add new supplier
                            </button>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Name</th>
                                            <th>Address</th>
                                            <th>Phone</th>
                                            <th>Status</th>
                                            <th>Created Date</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th>No</th>
                                            <th>Name</th>
                                            <th>Address</th>
                                            <th>Phone</th>
                                            <th>Status</th>
                                            <th>Created Date</th>
                                            <th>Action</th>
                                        </tr>
                                    </tfoot>
                                    <tbody id="table-supplier">

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
    <div class="modal fade" id="addSupplier" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle">Add Supplier</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form id="createSupplier">
                        <div class="form-row">
                            <div class="form-group col-12">
                                <label for="username">Supplier name</label>
                                <input type="text" name="suppliername" class="form-control" id="suppliername" placeholder="Supplier name">
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-12">
                                <label for="address">Address</label>
                                <input type="text" name="address" class="form-control" id="address" placeholder="Address">
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-12">
                                <label for="phone">Phone</label>
                                <input type="text" name="phone" class="form-control" id="phone" placeholder="Phone">
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

    <div class="modal fade" id="editSupplier" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle">Edit Supplier</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form id="updateSupplier">
                        <div class="form-row">
                            <div class="form-group col-12">
                                <label for="supplier">Supplier name</label>
                                <input type="text" name="suppliername" class="form-control suppliername" placeholder="Supplier name">
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-12">
                                <label for="Address">Address</label>
                                <input type="text" name="address" class="form-control address" placeholder="Address">
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-12">
                                <label for="Phone">Phone</label>
                                <input type="text" name="phone" class="form-control phone" placeholder="Phone">
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
            showAllSpplier();
        })
        const showAllSpplier = () => {
            $.ajax({
                url: 'http://localhost:3000/database/repository/supplier.php',
                type: 'POST',
                data: {
                    action: "view"
                },
                success: (response) => {
                    let suppliers = JSON.parse(response)
                    // $('#table-supplier').html(response)
                    $('#dataTable').DataTable({
                        searching: true,
                        paging: true,
                        data: suppliers,
                        columns: [
                            {
                                data: 'id',
                                render: function(data, type, row) {
                                    return row.id
                                }
                            },
                            {
                                data: 'name',
                                render: function(data, type, row) {
                                    return row.name
                                }
                            },
                            {
                                data: 'address',
                                render: function(data, type, row) {
                                    return row.address
                                }
                            },
                            {
                                data: 'phone',
                                render: function(data, type, row) {
                                    return row.phone
                                }
                            },
                            {
                                data: 'is_active',
                                render: function(data, type, row) {
                                    return row.is_active == 0 ? `<button type="button" class="m-auto d-block btn-sm btn btn-outline-danger">Disable</button>` : `<button type="button" class="m-auto d-block btn-sm btn btn-outline-success">Enable</button>`
                                }
                            },
                            {
                                data: 'created_at',
                                render: function(data, type, row) {
                                    return row.created_at
                                }
                            },
                            {
                                "data":null,
                                render: function(data, type, row) {
                                    console.log(row);
                                    return `<div class="btn-group" role="group" aria-label="Basic example">
                                                <button onclick="EnableSupplier(${row.id})" type="button" class="btn btn-sm btn-success mr-2">Enable</button>
                                                <button onclick="DisableSupplier(${row.id})" type="button" class="btn btn-sm btn-danger mr-2">Disable</button>
                                                <button onclick="EditSupplier(${row.id})" type="button" class="btn btn-sm btn-warning">Edit</button>
                                            </div>`
                                }
                            }
                        ],
                    })
                }
            })
        }
        const EnableSupplier = (id) => {
            $.ajax({
                url: 'http://localhost:3000/database/repository/supplier.php',
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
        const DisableSupplier = (id) => {
            $.ajax({
                url: 'http://localhost:3000/database/repository/supplier.php',
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

        $('#createSupplier').on('submit', (e) => {
            e.preventDefault();
            var formData = $('#createSupplier').serialize();
            console.log(formData);
            $.ajax({
                url: 'http://localhost:3000/database/repository/supplier.php',
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

        const EditSupplier = (id) => {
            $.ajax({
                url: 'http://localhost:3000/database/repository/supplier.php',
                type: 'POST',
                data: `id=${id}&action=getbyid`,
                success: (response) => {
                    console.log(response);
                    let data = JSON.parse(response)[0]
                    $('.suppliername').val(data['name']);
                    $('.address').val(data['address']);
                    $('.phone').val(data['phone']);
                    $('.id').val(data['id']);
                    $('#editSupplier').modal('show')
                }
            })
        }
        $('#updateSupplier').on('submit', (e) => {
            e.preventDefault();
            var formData = $('#updateSupplier').serialize();
            console.log(formData);
            $.ajax({
                url: 'http://localhost:3000/database/repository/supplier.php',
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