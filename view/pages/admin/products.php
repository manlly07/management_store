<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Admin Products</title>

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
                    <h1 class="h3 mb-2 text-gray-800">Quản lý sản phẩm</h1>
                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3 d-flex align-items-center">
                            <h6 class="m-0 font-weight-bold text-primary">Thông tin sản phẩm</h6>
                            <button type="button" class="ml-auto d-block btn btn-primary" data-toggle="modal" data-target="#addProduct">
                                <i class="fa fa-plus"></i>
                                Thêm sản phẩm mới
                            </button>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>Sản Phẩm</th>
                                            <th>Đơn Giá</th>
                                            <th>Số hàng trong kho</th>
                                            <th>Đã Bán</th>
                                            <th>Trạng Thái</th>
                                            <th>Ngày Tạo</th>
                                            <th>Hành Động</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                        <th>Sản Phẩm</th>
                                            <th>Đơn Giá</th>
                                            <th>Số hàng trong kho</th>
                                            <th>Đã Bán</th>
                                            <th>Trạng Thái</th>
                                            <th>Ngày Tạo</th>
                                            <th>Hành Động</th>
                                        </tr>
                                    </tfoot>
                                    <tbody id="table-products">

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
    <div class="modal fade" id="addProduct" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle">Thêm sản phẩm</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form id="createProduct" enctype="multipart/form-data">
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="productname">Tên sản phẩm</label>
                                <input type="text" name="productname" class="form-control" id="productname" placeholder="product name">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="Price">Giá</label>
                                <input type="number" name="price" class="form-control" id="price" placeholder="Price">
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-12">
                                <label for="Price">Mô tả</label>
                                <textarea  name="description" class="form-control description" id="description" placeholder="description"></textarea>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <select class="form-select" name="categoryid" id="categoryid" aria-label="Default select example">
                                    <option selected>Loại đồ uống</option>
                                </select>
                            </div>
                            <div class="form-group col-md-6">
                                <div class="mb-3">
                                    <input class="form-control" name="image" type="file" id="formFile">
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="cerror text-danger">

                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary">Tạo mới</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>


    <div class="modal fade" id="editProduct" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle">Chỉnh sửa sản phẩm</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form id="editProduct" enctype="multipart/form-data">
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="productname">Tên sản phẩm</label>
                                <input type="text" name="productname" class="form-control productname" id="productname" placeholder="product name">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="Price">Giá</label>
                                <input type="number" name="price" class="form-control price" id="price" placeholder="Price">
                            </div>
                            <div class="form-group col-md-12">
                                <label for="Price">Mô tả</label>
                                <textarea  name="description" class="form-control description1" id="description" placeholder="description"></textarea>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <select class="form-select categoryid" name="categoryid" id="categoryid" aria-label="Default select example">
                                </select>
                            </div>
                            <div class="form-group col-md-6">
                                <div class="mb-3">
                                    <input onchange="loadImage(event)" class="form-control image" name="image" type="file" id="formFile">
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group m-auto">
                                <img src="" alt="" class="w-100 ratio ratio-1x1 avatar" id="avatar" style="width: 300px; height:300px; object-fit: cover">
                                <input type="text" class="id" hidden>
                                <input type="text" name="" hidden class="old-img">
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="cerror text-danger">

                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Đóng</button>
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
            avtURL != '' ? $('#admin-avt').attr('src', `../../../uploads/avt/${avtURL}`): $('#admin-avt').attr('src', "../../../img/admin.png")
            showAllProducts();
            showAllCategory();
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

        const showAllProducts = () => {
            $.ajax({
                url: 'http://localhost:3000/database/repository/products.php',
                type: 'POST',
                data: {
                    action: "viewAdmin"
                },
                success: (response) => {
                    let products = JSON.parse(response)
                    $('#dataTable').DataTable({
                        searching: true,
                        paging: true,
                        data: products,
                        columns: [
                            {
                                data: null,
                                render: function(data, type, row) {
                                    
                                    return `<div class="d-flex gap-2 align-items-center">
                                            <div class="w-4 h-4">
                                                 <img src="../../../uploads/${row.image}" style="width: 100px; height:100px; object-fit: cover"/>
                                             </div>
                                             <div class="d-flex flex-column mt-4">
                                                <h6 class="fw-bold">${row.productname}</h6>
                                                <p>${row.categoryname}</p>
                                             </div>
                                        </div>`
                                }
                            },
                            {
                                data: 'price',
                                render: function(data, type, row) {
                                    return formatMoney(row.price)
                                }
                            },
                            {
                                data: null,
                                render: function(data, type, row) {
                                    return `<div class="d-flex flex-column  align-items-center">
                                            <p>${row.qis}</p>
                                            <a class="text-danger" href="http://localhost:3000/view/pages/admin/addinvoice.php">${row.qis<=20 ? 'Sắp hết hàng, hãy nhập thêm': ''}</a>
                                        </div>`
                                }
                            },
                            {
                                data: 'quantity_sold',
                                render: function(data, type, row) {
                                    return row.quantity_sold
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
                                                <button onclick="handleUpdate(${row.id}, ${row.categoryid})" type="button" class="btn btn-sm btn-warning">Sửa</button>
                                            </div>`
                                }
                            }
                        ],
                    })
                }
            })
        }

        const showAllCategory = () => {
            $.ajax({
                url: 'http://localhost:3000/database/repository/category.php',
                type: 'POST',
                data: `action=view`,
                success: (response) => {
                    let data = JSON.parse(response)
                    for (var i = 0; i < data.length; i++) {
                        var option = document.createElement("option");
                        option.value = data[i].id;
                        option.text = data[i].name;
                        $('#categoryid').append(option);
                    }
                }
            })
        }

        const loadImage = (evente) => {
            console.log('hehe');
            $('.avatar').attr('src', URL.createObjectURL(event.target.files[0]));
        }

        const EnableProduct = (id) => {
            $.ajax({
                url: 'http://localhost:3000/database/repository/products.php',
                type: 'POST',
                data: {
                    action: "enable",
                    id: id
                },
                success: (response) => {
                    let {
                        status
                    } = JSON.parse(response)
                    console.log(status);
                    if (status === 200) {
                        Swal.fire({
                                title: "Done",
                                text: "Cập nhật sản phẩm thành công",
                                icon: "success"
                            });
                            setTimeout(() => {
                                window.location.reload()
                            },1500)
                    } else if (status === 400) {
                        Swal.fire({
                            title: "Oops...",
                            text: message,
                            icon: "error"
                            });
                    }
                }
            })
        }
        const DisableProduct = (id) => {
            $.ajax({
                url: 'http://localhost:3000/database/repository/products.php',
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
                                text: "Cập nhật sản phẩm thành công",
                                icon: "success"
                            });
                            setTimeout(() => {
                                window.location.reload()
                            },1500)
                    } else if (status === 400) {
                        Swal.fire({
                            title: "Oops...",
                            text: message,
                            icon: "error"
                            });
                    }
                }
            })
        }


        $('#createProduct').on('submit', (e) => {
            e.preventDefault();

            var formData = new FormData();
            var file = $('#formFile')[0].files;
            formData.append('image', file[0]);
            formData.append('price', $('#price').val())
            formData.append('categoryid', $('#categoryid').val())
            formData.append('productname', $('#productname').val())
            formData.append('description', $('#description').val())
            formData.append('action', 'create')
            console.log(formData);
            $.ajax({
                url: 'http://localhost:3000/database/repository/products.php',
                type: 'POST',
                data: formData,
                processData: false, // Không xử lý dữ liệu
                contentType: false,
                success: (response) => {
                    let {
                        status,
                        message
                    } = JSON.parse(response)
                    if (status === 200) {
                        $('.eerror').html('');
                        Swal.fire({
                                title: "Done",
                                text: "Cập nhật sản phẩm thành công",
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
                    }else if (status === 400) {
                        console.log('hehe');
                        $('.cerror').html(message);
                    }
                }
            })
        })
        
        const handleUpdate = (id, categoryid) => {
            
            $.ajax({
                url: 'http://localhost:3000/database/repository/category.php',
                type: 'POST',
                data: `action=view`,
                success: (response) => {
                    let data = JSON.parse(response)
                    for (var i = 0; i < data.length; i++) {
                        var option = document.createElement("option");
                        option.value = data[i].id;
                        option.text = data[i].name;
                        if (data[i].id == categoryid) {
                            option.selected = true;
                        }
                        $('.categoryid').append(option);
                    }
                }
            })

            $.ajax({
                url: 'http://localhost:3000/database/repository/products.php',
                type: 'POST',
                data: `id=${id}&action=getbyid`,
                success: (response) => {
                    let data = JSON.parse(response)
                    console.log(data['image']);
                        $('.old-img').val(data['image'])
                        $('.productname').val(data['productName'])
                        $('.price').val(data['price'])
                        $('.description1').val(data.productDescription)
                        $('.id').val(id)
                        $('.avatar').attr('src', `../../../uploads/${data['image']}`)
                        $('#editProduct').modal('show')
                }
            })
        }

        $('#editProduct').on('submit', (e) => {
            e.preventDefault();
            var formData = new FormData();
            formData.append('id', $('.id').val());
            formData.append('productname', $('.productname').val())
            formData.append('price', $('.price').val())
            formData.append('categoryid', $('.categoryid').val())
            formData.append('description', $('.description1').val())
            formData.append('action', "update")
            formData.append('oldImg', $('.old-img').val())
            var img = $('.image')[0]
            if (img.files[0]) {
                formData.append('image', img.files[0])
            }

            console.log(img.files[0]);
            $.ajax({
                url: 'http://localhost:3000/database/repository/products.php',
                type: 'POST',
                data: formData,
                processData: false,
                contentType: false,
                success: (response) => {
                    let {
                        status,
                        message
                    } = JSON.parse(response)
                    if (status === 200) {
                        $('.eerror').html('');
                        Swal.fire({
                                title: "Done",
                                text: "Cập nhật sản phẩm thành công",
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
                    }else if (status === 400) {
                        console.log('hehe');
                        $('.cerror').html(message);
                    }
                }
            })
        })
    </script>
</body>

</html>