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
                    <h1 class="h3 mb-2 text-gray-800">Manage Products</h1>
                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3 d-flex align-items-center">
                            <h6 class="m-0 font-weight-bold text-primary">Thông tin products</h6>
                            <button type="button" class="ml-auto d-block btn btn-primary" data-toggle="modal" data-target="#addProduct">
                                <i class="fa fa-plus"></i>
                                Add new Products
                            </button>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>Product Name</th>
                                            <th>Price</th>
                                            <th>Image</th>
                                            <th>Category</th>
                                            <th>Status</th>
                                            <th>Created Date</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th>Product Name</th>
                                            <th>Price</th>
                                            <th>Image</th>
                                            <th>Category</th>
                                            <th>Status</th>
                                            <th>Created Date</th>
                                            <th>Action</th>
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
    <div class="modal fade" id="addProduct" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle">Add Product</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form id="createProduct" enctype="multipart/form-data">
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="productname">Product name</label>
                                <input type="text" name="productname" class="form-control" id="productname" placeholder="product name">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="Price">Price</label>
                                <input type="number" name="price" class="form-control" id="price" placeholder="Price">
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <select class="form-select" name="categoryid" id="categoryid" aria-label="Default select example">
                                    <option selected>Choose an category</option>
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
                            <button type="submit" class="btn btn-primary">Sign in</button>
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
                    <h5 class="modal-title" id="exampleModalLongTitle">Edit Product</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form id="editProduct" enctype="multipart/form-data">
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="productname">Product name</label>
                                <input type="text" name="productname" class="form-control productname" id="productname" placeholder="product name">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="Price">Price</label>
                                <input type="number" name="price" class="form-control price" id="price" placeholder="Price">
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
                            <div class="form-group">
                                <img src="" alt="" class="w-100 ratio ratio-1x1 avatar" id="avatar">
                                <input type="text" class="id" hidden>
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

    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.4.2/mdb.min.js"></script>
    <script type="text/javascript">
        $(document).ready(() => {
            showAllProducts();
            showAllCategory();
        })
        


        const showAllProducts = () => {
            $.ajax({
                url: 'http://localhost:3000/database/repository/products.php',
                type: 'POST',
                data: {
                    action: "view"
                },
                success: (response) => {
                    let products = JSON.parse(response)
                    console.log(products);
                    $('#dataTable').DataTable({
                        searching: true,
                        paging: true,
                        data: products,
                        columns: [
                            {
                                data: 'productname',
                                render: function(data, type, row) {
                                    return row.productname
                                }
                            },
                            {
                                data: 'price',
                                render: function(data, type, row) {
                                    return row.price
                                }
                            },
                            {
                                data: 'image',
                                render: function(data, type, row) {
                                    return `<div class="w-4 h-4">
                                                 <img src="../../../uploads/${row.image}" style="width: 100%; height:100%; object-fit: cover"/>
                                             </div>`
                                }
                            },
                            {
                                data: 'categoryname',
                                render: function(data, type, row) {
                                    return row.categoryname
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
                                                <button onclick="EnableProduct(${row.id})" type="button" class="btn btn-sm btn-success mr-2">Enable</button>
                                                <button onclick="DisableProduct(${row.id})" type="button" class="btn btn-sm btn-danger mr-2">Disable</button>
                                                <button onclick="handleUpdate(${row.id}, ${row.categoryid})" type="button" class="btn btn-sm btn-warning">Edit</button>
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
                        console.log(data[i]);
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
                        window.location.reload()
                    } else if (status === 400) {
                        console.log('haha');
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
                    console.log(status);
                    if (status === 200) {
                        window.location.reload()
                    } else if (status === 400) {
                        
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
                    console.log(status);
                    console.log(message);
                    if (status === 200) {
                        window.location.reload()
                    } else if (status === 400) {
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
                        console.log(data[i]);
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
                    let data = JSON.parse(response)[0]
                        console.log(data);
                        $('.productname').val(data['name'])
                        $('.price').val(data['price'])
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
            formData.append('action', "update")
            var img = $('.image')[0]
            console.log(img.files[0]);
            if (img.files[0]) {
                console.log('co anh');
                formData.append('image', img.files[0])
            }

            console.log(formData);
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
                    console.log(JSON.parse(response));
                    if (status === 200) {
                        $('.eerror').html('');
                        window.location.reload();
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