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

    <script src='https://cdn.jsdelivr.net/npm/@goongmaps/goong-js@1.0.9/dist/goong-js.js'></script>
  <link href='https://cdn.jsdelivr.net/npm/@goongmaps/goong-js@1.0.9/dist/goong-js.css' rel='stylesheet' />
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.3/css/all.css"
    integrity="sha384-SZXxX4whJ79/gErwcOYf+zWLeJdY/qpuqC4cAa9rOGUstPomtqpuNWT9wdPEn2fk" crossorigin="anonymous">

  <style>
    @import url('https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500&display=swap');
  </style>
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
                    <h1 class="h3 mb-2 text-gray-800">Quản lý nhà cung cấp</h1>
                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3 d-flex align-items-center">
                            <h6 class="m-0 font-weight-bold text-primary">Thông tin nhà cung cấp</h6>
                            <button type="button" class="ml-auto d-block btn btn-primary" data-toggle="modal" data-target="#addSupplier">
                                <i class="fa fa-plus"></i>
                                Thêm nhà cung cấp mới
                            </button>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>Tên</th>
                                            <th>Địa chỉ</th>
                                            <th>SĐT</th>
                                            <th>Trạng thái</th>
                                            <th>Ngày tạo</th>
                                            <th>Hành động</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th>ID</th>
                                            <th>Tên</th>
                                            <th>Địa chỉ</th>
                                            <th>SĐT</th>
                                            <th>Trạng thái</th>
                                            <th>Ngày tạo</th>
                                            <th>Hành động</th>
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
    <div class="modal fade" id="addSupplier" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle">Thêm nhà cung cấp</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form id="createSupplier">
                        <div class="form-row">
                            <div class="form-group col-12">
                                <label for="username">Tên nhà cung cấp</label>
                                <input type="text" name="suppliername" class="form-control" id="suppliername" placeholder="Supplier name">
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-12">
                                <label for="address">Địa chỉ</label>
                                <input type="text" name="address" class="form-control" id="address" placeholder="Address">
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-12">
                                <label for="phone">SĐT</label>
                                <input type="text" name="phone" class="form-control" id="phone" placeholder="Phone">
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

    <div class="modal fade" id="editSupplier" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle">Chỉnh sửa</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form id="updateSupplier">
                        <div class="form-row">
                            <div class="form-group col-12">
                                <label for="supplier">Tên nhà cung cấp</label>
                                <input type="text" name="suppliername" class="form-control suppliername" placeholder="Supplier name">
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-12">
                                <label for="Phone">SĐT</label>
                                <input type="text" name="phone" class="form-control phone" placeholder="Phone">
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-12">
                                <label for="Address">Địa chỉ</label>
                                <input type="text" name="address" id="addressInput" class="form-control address" placeholder="Address">
                            </div>
                            <div id="addressOutput" class="m-auto"></div>
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

    <script src="https://cdn.jsdelivr.net/npm/@goongmaps/goong-geocoder@1.1.1/dist/goong-geocoder.min.js"></script>
  <link href="https://cdn.jsdelivr.net/npm/@goongmaps/goong-geocoder@1.1.1/dist/goong-geocoder.css" rel="stylesheet"
    type="text/css" />

  <!-- Promise polyfill script is required -->
  <!-- to use Goong Geocoder in IE 11. -->
  <script src="https://cdn.jsdelivr.net/npm/es6-promise@4/dist/es6-promise.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/es6-promise@4/dist/es6-promise.auto.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/goong-js@1.2.0/goong-js.min.js"></script>
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
            showAllSpplier();
        })

       
        

        // var addressInput = document.getElementById('addressInput');
        // var addressDisplay = document.getElementById('addressDisplay');


  // Lấy thẻ input và thẻ output
  const addressInput = document.getElementById('addressInput');
  const addressOutput = document.getElementById('addressOutput');

  // Xử lý sự kiện khi giá trị trong input thay đổi
  const showMap = (address) => {// Thay thế bằng địa chỉ bạn muốn tìm kiếm

        fetch(`https://rsapi.goong.io/Geocode?address=${encodeURIComponent(address)}&api_key=GFZGMOVfqTYbDT6lqYjvTcmnLjjmQAqwsRQYelGL`)
        .then(response => {
            if (response.ok) {
            return response.json();
            } else {
            throw new Error('Lỗi khi gửi yêu cầu.');
            }
        })
        .then(data => {
                    if (data.results.length > 0) {
                    const result = data.results[0];
                    const location = result.geometry.location;

                // Hiển thị địa chỉ trong thẻ output
                addressOutput.textContent = result.formatted_address;
                
                // Tạo bản đồ Goong Maps
                    goongjs.accessToken = 'PtFoCFjhwnscynuTn4YzLkevN13FlxfCOQjsrpiU';
                    const map = new goongjs.Map({
                        container: 'addressOutput',
                        style: 'https://tiles.goong.io/assets/goong_map_web.json',
                        center: [location.lng, location.lat],
                        zoom: 14
                    })

                    
                                    
                    // map.addImage('flashing_square', flashingSquare);

          // Thêm điểm đánh dấu lên bản đồ
          new goongjs.Marker().setLngLat([location.lng, location.lat]).addTo(map);
        } else {
          addressOutput.textContent = 'Không tìm thấy địa chỉ.';
        }
            // Xử lý dữ liệu phản hồi ở đây
        })
        .catch(error => {
            console.error(error);
        });
  }
  addressInput.addEventListener('input', function () {
    const address = addressInput.value;
    // Gọi Ajax để lấy thông tin địa chỉ từ Goong Maps API
    const xhr = new XMLHttpRequest();
    xhr.open('GET', `https://rsapi.goong.io/Geocode?address=${encodeURIComponent(address)}&api_key=GFZGMOVfqTYbDT6lqYjvTcmnLjjmQAqwsRQYelGL`);
    xhr.onload = function () {
      if (xhr.status === 200) {
        const response = JSON.parse(xhr.responseText);
        if (response.results.length > 0) {
          const result = response.results[0];
          const location = result.geometry.location;

          // Hiển thị địa chỉ trong thẻ output
          addressOutput.textContent = result.formatted_address;

          // Tạo bản đồ Goong Maps
        goongjs.accessToken = 'PtFoCFjhwnscynuTn4YzLkevN13FlxfCOQjsrpiU';
        
          const map = new goongjs.Map({
            container: 'addressOutput',
            style: 'https://tiles.goong.io/assets/goong_map_web.json',
            center: [location.lng, location.lat],
            zoom: 14
          })

          // Thêm điểm đánh dấu lên bản đồ
          new goongjs.Marker().setLngLat([location.lng, location.lat]).addTo(map);
        } else {
          addressOutput.textContent = 'Không tìm thấy địa chỉ.';
        }
      } else {
        addressOutput.textContent = 'Đã xảy ra lỗi khi lấy dữ liệu.';
      }
    };
    xhr.send();
  });



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
                                    return `<a href="">#${row.id}</a>`
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
                                    return `<div class="btn-group" role="group" aria-label="Basic example">
                                                <button onclick="EnableSupplier(${row.id})" type="button" class="btn btn-sm btn-success mr-2">Enable</button>
                                                <button onclick="DisableSupplier(${row.id})" type="button" class="btn btn-sm btn-danger mr-2">Disable</button>
                                                <button onclick="EditSupplier(${row.id})" type="button" class="btn btn-sm btn-warning">Sửa</button>
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
                        Swal.fire({
                                title: "Done",
                                text: "Cập nhật thành công",
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
                        Swal.fire({
                                title: "Done",
                                text: "Cập nhật thành công",
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
                        Swal.fire({
                                title: "Done",
                                text: "Taọ mới thành công",
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
        })

        const EditSupplier = (id) => {
            $.ajax({
                url: 'http://localhost:3000/database/repository/supplier.php',
                type: 'POST',
                data: `id=${id}&action=getbyid`,
                success: (response) => {
                    // console.log(response);
                    let data = JSON.parse(response)[0]
                    $('.suppliername').val(data['name']);
                    $('.address').val(data['address']);
                    $('.phone').val(data['phone']);
                    $('.id').val(data['id']);
                    showMap(data['address'])
                    $('#editSupplier').modal('show')
                }
            })
        }
        $('#updateSupplier').on('submit', (e) => {
            e.preventDefault();
            var formData = $('#updateSupplier').serialize();
            // console.log(formData);
            $.ajax({
                url: 'http://localhost:3000/database/repository/supplier.php',
                type: 'POST',
                data: `${formData}&action=update`,
                success: (response) => {
                    let {
                        status,
                        message
                    } = JSON.parse(response)
                    // console.log(message);
                    if (status === 200) {
                        $('.eerror').html('');
                        Swal.fire({
                                title: "Done",
                                text: "Cập nhật thành công",
                                icon: "success"
                            });
                            setTimeout(() => {
                                window.location.reload()
                            },1500)
                    } else if (status === 400) {
                        $('.eerror').html(message);
                    }
                }
            })
        })

    </script>
</body>

</html>