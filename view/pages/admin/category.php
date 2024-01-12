<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Categories</title>

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
                    <h1 class="h3 mb-2 text-gray-800">Quản Lý Loại Đồ Uống</h1>
                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3 d-flex align-items-center">
                            <h6 class="m-0 font-weight-bold text-primary">Thông tin loại đồ uống</h6>
                            <button type="button" class="ml-auto d-block btn btn-primary" data-toggle="modal" data-target="#addCategory">
                                <i class="fa fa-plus"></i>
                                Thêm loại mới
                            </button>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>Thứ Tự</th>
                                            <th>Tên Loại Đồ Uống</th>
                                            <th>Mô Tả</th>
                                            <th>Trạng Thái</th>
                                            <th>Ngày Tạo</th>
                                            <th>Hành Động</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th>Thứ Tự</th>
                                            <th>Tên Loại Đồ Uống</th>
                                            <th>Mô Tả</th>
                                            <th>Trạng Thái</th>
                                            <th>Ngày Tạo</th>
                                            <th>Hành Động</th>
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
                                <label for="username">Tên loại đồ uống</label>
                                <input type="text" name="categoryname" class="form-control" id="categoryname" placeholder="category name">
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-12">
                                <label for="Description">Mô tả</label>
                                <input type="Description" name="description" class="form-control" id="description" placeholder="description">
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="cerror text-danger">

                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="submit" class="btn btn-primary">Thêm</button>
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
                    <h5 class="modal-title" id="exampleModalLongTitle">Sửa loại đồ uống</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form id="updateCategory">
                        <div class="form-row">
                            <div class="form-group col-12">
                                <label for="username">Loại đồ uống</label>
                                <input type="text" name="categoryname" class="form-control categoryname" placeholder="category name">
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-12">
                                <label for="Description">Mô tả</label>
                                <input type="text" name="description" class="form-control description" placeholder="description">
                            </div>
                        </div>
                        <div class="form-row">
                            <input type="text" name="id" class="form-control id" placeholder="id" hidden>
                            <div class="eerror text-danger">

                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="submit" class="btn btn-primary">Cập nhật</button>
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
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="../../../js/checkURL.js"></script>
    <script type="text/javascript">
        $(document).ready(() => {
            let username = localStorage.getItem('fullName')
            $('#username').html(`${username}`)
            let avtURL =localStorage.getItem('avt')
            avtURL != '' ? $('#admin-avt').attr('src', `../../../uploads/avt/${avtURL}`): $('#avatar').attr('src', "../../../img/admin.png")
            showAllCategory();
        })
        const showAllCategory = () => {
            $.ajax({
                url: 'http://localhost:3000/database/repository/category.php',
                type: 'POST',
                data: {
                    action: "view"
                },
                success: (response) => {
                    let categories = JSON.parse(response)
                    console.log(categories);
                    $('#dataTable').DataTable({
                        searching: true,
                        paging: true,
                        data: categories,
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
                                data: 'description',
                                render: function(data, type, row) {
                                    return row.description
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
                                    return `<div class="btn-group" role="group" aria-label="Basic example">
                                                <button onclick="EnableProduct(${row.id})" type="button" class="btn btn-sm btn-success mr-2">Enable</button>
                                                <button onclick="DisableProduct(${row.id})" type="button" class="btn btn-sm btn-danger mr-2">Disable</button>
                                                <button onclick="EditCategory(${row.id})" type="button" class="btn btn-sm btn-warning">Sửa</button>
                                            </div>`
                                }
                            }
                        ],
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
                        Swal.fire({
                                title: "Done",
                                text: "Cập nhật thành công!",
                                icon: "success"
                            });
                            setTimeout(() => {
                                window.location.reload()
                            },1500)
                    } else if (status === 400) {
                        Swal.fire({
                            title: "Oops...",
                            text: "Đã xảy ra lỗi",
                            icon: "error"
                            });
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
                        Swal.fire({
                                title: "Done",
                                text: "Cập nhật thành công!",
                                icon: "success"
                            });
                            setTimeout(() => {
                                window.location.reload()
                            },1500)
                    } else if (status === 400) {
                        Swal.fire({
                            title: "Oops...",
                            text: "Đã xảy ra lỗi",
                            icon: "error"
                            });
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
                    if (status === 200) {
                        Swal.fire({
                                title: "Done",
                                text: "Tạo loại đồ uống mớithành công!",
                                icon: "success"
                            });
                            setTimeout(() => {
                                window.location.reload()
                            },1500)
                    } else if (status === 400) {
                        $('.cerror').html(message);
                        Swal.fire({
                            title: "Oops...",
                            text: "Đã xảy ra lỗi",
                            icon: "error"
                            });
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
                        Swal.fire({
                                title: "Done",
                                text: "Cập nhật thành công!",
                                icon: "success"
                            });
                            setTimeout(() => {
                                window.location.reload()
                            },1500)
                    } else if (status === 400) {
                        $('.eerror').html(message);
                        Swal.fire({
                            title: "Oops...",
                            text: "Đã xảy ra lỗi",
                            icon: "error"
                            });
                    }
                }
            })
        })

    </script>
</body>

</html>