<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Users</title>

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
                    <h1 class="h3 mb-2 text-gray-800">Manage Users</h1>
                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3 d-flex align-items-center">
                            <h6 class="m-0 font-weight-bold text-primary">Thông tin users</h6>
                            <button type="button" class="ml-auto d-block btn btn-primary" data-toggle="modal" data-target="#addCustommer">
                                <i class="fa fa-plus"></i>
                                Add new Users
                            </button>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>Name</th>
                                            <th>Address</th>
                                            <th>Phone</th>
                                            <th>Email</th>
                                            <th>Status</th>
                                            <th>Created Date</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th>Name</th>
                                            <th>Address</th>
                                            <th>Phone</th>
                                            <th>Email</th>
                                            <th>Status</th>
                                            <th>Created Date</th>
                                            <th>Action</th>
                                        </tr>
                                    </tfoot>
                                    <tbody id="table-users">

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
                    <a class="btn btn-primary" href="login.html">Logout</a>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="addCustommer" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle">Add User</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form id="createUser">
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="username">Username</label>
                                <input type="text" name="username" class="form-control" id="username" placeholder="Username">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="password">Password</label>
                                <input type="password" name="password" class="form-control" id="password" placeholder="Password">
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="firstname">Firstname</label>
                                <input type="text" name="fname" class="form-control" id="firstname" placeholder="Firstname">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="Lastname">Lastname</label>
                                <input type="text" name="lname" class="form-control" id="Lastname" placeholder="Lastname">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="inputAddress">Address</label>
                            <input type="text" name="address" class="form-control" id="inputAddress" placeholder="1234 Main St">
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="Phone">Phone</label>
                                <input type="number" name="phone" class="form-control" id="Phone" placeholder="Phone">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="Email">Email</label>
                                <input type="email" name="email" class="form-control" id="Email" placeholder="Email">
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="cerror text-danger">

                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary">Sign in</button>
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

    <!-- Modal -->
    <div class="modal top fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true" data-mdb-backdrop="true" data-mdb-keyboard="true">
        <div class="modal-dialog modal-fullscreen">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">User Info</h5>
                    <button type="button" class="btn-close" data-mdb-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="container">
                        <div class="row">
                            <div class="col-4">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="d-flex flex-column align-items-center text-center">
                                            <img src="https://bootdey.com/img/Content/avatar/avatar7.png" alt="Admin" class="rounded-circle" width="150">
                                            <div class="mt-3">
                                                <h4 class="fullname">John Doe</h4>
                                                <p class="text-muted font-size-sm address">Bay Area, San Francisco, CA</p>
                                                <button class="btn btn-outline-primary">Edit Avartar</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-8">
                                <!-- <div class="card">
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-sm-3">
                                                <h6 class="mb-0">First Name</h6>
                                            </div>
                                            <div class="col-sm-9 text-secondary">
                                                Kenneth Valdez
                                            </div>
                                        </div>
                                        <hr>
                                        <div class="row">
                                            <div class="col-sm-3">
                                                <h6 class="mb-0">Last Name</h6>
                                            </div>
                                            <div class="col-sm-9 text-secondary">
                                                Kenneth Valdez
                                            </div>
                                        </div>
                                        <hr>
                                        <div class="row">
                                            <div class="col-sm-3">
                                                <h6 class="mb-0">Email</h6>
                                            </div>
                                            <div class="col-sm-9 text-secondary">
                                                fip@jukmuh.al
                                            </div>
                                        </div>
                                        <hr>
                                        <div class="row">
                                            <div class="col-sm-3">
                                                <h6 class="mb-0">Phone</h6>
                                            </div>
                                            <div class="col-sm-9 text-secondary">
                                                (239) 816-9029
                                            </div>
                                        </div>
                                        <hr>
                                        <div class="row">
                                            <div class="col-sm-3">
                                                <h6 class="mb-0">Address</h6>
                                            </div>
                                            <div class="col-sm-9 text-secondary">
                                                Bay Area, San Francisco, CA
                                            </div>
                                        </div>
                                        <hr>
                                        <div class="row">
                                            <div class="col-sm-12">
                                                <a class="btn btn-info " target="__blank" href="https://www.bootdey.com/snippets/view/profile-edit-data-and-skills">Edit</a>
                                            </div>
                                        </div>
                                    </div>
                                </div> -->
                                <div class="card">
                                    <div class="card-body">
                                        <form id="editUser">
                                            <div class="row mb-3">
                                                <div class="col-sm-3">
                                                    <h6 class="mb-0">First Name</h6>
                                                </div>
                                                <div class="col-sm-9 text-secondary">
                                                    <input type="text" name="fname" class="form-control fname"  require>
                                                </div>
                                            </div>
                                            <div class="row mb-3">
                                                <div class="col-sm-3">
                                                    <h6 class="mb-0">Last Name</h6>
                                                </div>
                                                <div class="col-sm-9 text-secondary">
                                                    <input type="text" name="lname" class="form-control lname" require>
                                                </div>
                                            </div>
                                            <div class="row mb-3">
                                                <div class="col-sm-3">
                                                    <h6 class="mb-0">Email</h6>
                                                </div>
                                                <div class="col-sm-9 text-secondary">
                                                    <input type="text" class="form-control email" name="email" require>
                                                </div>
                                            </div>
                                            <div class="row mb-3">
                                                <div class="col-sm-3">
                                                    <h6 class="mb-0">Phone</h6>
                                                </div>
                                                <div class="col-sm-9 text-secondary">
                                                    <input type="text" class="form-control phone" name="phone" require>
                                                </div>
                                            </div>
                                            <div class="row mb-3">
                                                <div class="col-sm-3">
                                                    <h6 class="mb-0">Address</h6>
                                                </div>
                                                <div class="col-sm-9 text-secondary">
                                                    <input type="text" class="form-control address" name="address" require>
                                                    <input hidden type="text" class="form-control id" name="id" require>
                                                </div>
                                            </div>
                                            <div class="row mb-3">
                                                <p class="text-danger eerror"></p>
                                            </div>
                                            <div class="row">
                                                <div class="col-sm-3"></div>
                                                <div class="col-sm-9 text-secondary">
                                                    <input type="submit" class="btn btn-primary px-4" value="Save Changes">
                                                </div>
                                            </div>
                                        </form>
                                    </div>
					            </div>
                            </div>
                        </div>
                        <div class="row mt-4">
                            <div class="card shadow mb-4">
                                <div class="card-header py-3 d-flex align-items-center">
                                    <h6 class="m-0 font-weight-bold text-primary">Orders History</h6>
                                </div>
                                <div class="card-body">
                                    <div class="table-responsive">
                                        <table class="table table-bordered" id="dataTableOrderHistory" width="100%" cellspacing="0">
                                            <thead>
                                                <tr>
                                                    <th>Name Receiver</th>
                                                    <th>Address</th>
                                                    <th>Phone</th>
                                                    <th>Total</th>
                                                    <th>Status</th>
                                                    <th>Ordered Date</th>
                                                    <th>Action</th>
                                                </tr>
                                            </thead>
                                            <tfoot>
                                                <tr>
                                                    <th>Name Receiver</th>
                                                    <th>Address</th>
                                                    <th>Phone</th>
                                                    <th>Total</th>
                                                    <th>Status</th>
                                                    <th>Ordered Date</th>
                                                    <th>Action</th>
                                                </tr>
                                            </tfoot>
                                            <tbody id="table-oders">
                                                <tr>
                                                    <td class="text-center" colspan="7">NOT ORDER HISTORY</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.4.2/mdb.min.js"></script>
    <script type="text/javascript">
        $(document).ready(() => {
            showAllUsers();
        })
        const showAllUsers = () => {
            $.ajax({
                url: 'http://localhost:3000/database/repository/users.php',
                type: 'POST',
                data: {
                    action: "view"
                },
                success: (response) => {
                    $('#table-users').html(response)
                    $('#dataTable').DataTable({
                        searching: true,
                        paging: true,
                    })
                }
            })
        }
        const EnableUser = (id) => {
            $.ajax({
                url: 'http://localhost:3000/database/repository/users.php',
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
        const DisableUser = (id) => {
            $.ajax({
                url: 'http://localhost:3000/database/repository/users.php',
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

        const FindUserById = (id) => {
            $.ajax({
                url: 'http://localhost:3000/database/repository/users.php',
                type: 'POST',
                data: `action=getbyid&id=${id}`,
                success: (response) => {
                    let data = JSON.parse(response)[0]
                    console.log(data);
                    $('#exampleModal').modal('show');
                    $('.fname').val(data['first_name']);
                    $('.lname').val(data['last_name']);
                    $('.email').val(data['email']);
                    $('.phone').val(data['phone']);
                    $('.address').val(data['address']);
                    $('.id').val(data['id']);
                    $('.address').html(data['address']);
                    $('.fullname').html(`${data['first_name']} ${data['last_name']}`);
                }
            })
        }

        $('#createUser').on('submit', (e) => {
            e.preventDefault();
            var formData = $('#createUser').serialize();
            console.log(formData);
            $.ajax({
                url: 'http://localhost:3000/database/repository/users.php',
                type: 'POST',
                data: `${formData}&action=create`,
                success: (response) => {
                    let {
                        status,
                        message
                    } = JSON.parse(response)
                    console.log(status);
                    if (status === 200) {
                        // console.log(message);
                        window.location.reload()
                    } else if (status === 400) {
                        console.log('hehe');
                        $('.cerror').html(message);
                    }
                }
            })
        })
        
        $('#editUser').on('submit', (e) => {
            e.preventDefault();
            var formData = $('#editUser').serialize();
            console.log(formData);
            $.ajax({
                url: 'http://localhost:3000/database/repository/users.php',
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
                        var fullname = $('.fname').val() + ' ' + $('.lname').val();
                        var address = $('.address').val()
                        console.log(address);
                        $('.fullname').html(fullname)
                        $('.address').html(address)
                    } else if (status === 400) {
                        console.log('error');
                        $('.eerror').html(message);
                    }
                }
            })
        })
    </script>
</body>

</html>