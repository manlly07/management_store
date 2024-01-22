<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Order Detail</title>

    <!-- Custom fonts for this template -->
    <link href="../../../vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="../../../css/sb-admin-2.min.css" rel="stylesheet">
    <link href="../../../css/sb-admin-2.css" rel="stylesheet">

    <!-- Custom styles for this page -->
    <link href="../../../vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">

    <script src='https://cdn.jsdelivr.net/npm/@goongmaps/goong-js@1.0.9/dist/goong-js.js'></script>
    <link href='https://cdn.jsdelivr.net/npm/@goongmaps/goong-js@1.0.9/dist/goong-js.css' rel='stylesheet' />

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
                <div class="container-fluid m-auto my-4 justify-content-center col-10">
                <div class="d-flex justify-content-between">
                    <a class="btn btn-sm btn-outline-secondary border-300 me-2 mb-3 shadow-none" href="./orders.php"><i class="fas fa-fw fa-chevron-left"></i>Trở lại</a>
                    <button type="button" class="btn btn-warning mb-2" data-toggle="modal" data-target="#addCustommer">
                        Sửa thông tin đơn
                    </button>
                </div>
                    <div class="order-infor">

                    </div>

                    <div class="card mb-3 ">
            <div class="card-body">
              <div class="table-responsive fs--1">
                <table class="table  border-bottom products">
                  <thead class="bg-200">
                    <tr style="background-color: #edf2f9;">
                      <th class="text-900 border-0 fw-bold">Sản phẩm</th>
                      <th class="text-900 border-0 text-center fw-bold">Số lượng</th>
                      <th class="text-900 border-0 text-end fw-bold">Đơn giá</th>
                      <th class="text-900 border-0 text-end fw-bold">Giá trị</th>
                    </tr>
                  </thead>
                  
                </table>
              </div>
              <div class="total_bill">

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

    <div class="modal fade" id="addCustommer" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle">Chỉnh sửa thông tin đơn hàng</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form id="updateOrder">
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="username">Tên người nhận</label>
                                <input type="text" name="name" class="form-control name" id="name" placeholder="name">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="password">SĐT</label>
                                <input type="text" name="phone" class="form-control phone" id="phone" placeholder="Phone">
                            </div>
                        </div>
                       
                            <div class="form-group">
                                <label for="firstname">Ghi chú</label>
                                <input type="text" name="note" class="form-control " id="note" placeholder="note">
                            </div>
                        
                        <div class="form-group">
                            <label for="inputAddress">Địa chỉ</label>
                            <input type="text" name="address" class="form-control address" id="addressInput" placeholder="1234 Main St">
                            <div class="form-row mt-4">
                                <div id="addressOutput" class="m-auto"></div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="error text-danger">

                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Đóng</button>
                            <button type="button" class="btn btn-primary updateOrder">Cập nhật</button>
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

    <script src="https://cdn.jsdelivr.net/npm/@goongmaps/goong-geocoder@1.1.1/dist/goong-geocoder.min.js"></script>
  <link href="https://cdn.jsdelivr.net/npm/@goongmaps/goong-geocoder@1.1.1/dist/goong-geocoder.css" rel="stylesheet"
    type="text/css" />
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.4.2/mdb.min.js"></script>
    <script src="../../../js/checkURL.js"></script>
    <script type="text/javascript">
        $(document).ready(() => {
            let username = localStorage.getItem('fullName')
            $('#username').html(`${username}`)
            let avtURL =localStorage.getItem('avt')
            avtURL != '' ? $('#admin-avt').attr('src', `../../../uploads/avt/${avtURL}`): $('#avatar').attr('src', "../../../img/admin.png")
            var urlParams = new URLSearchParams(window.location.search);
            var id = urlParams.get('id');
            getOrder(id)
            getDetail(id)
        })

        const addressInput = document.getElementById('addressInput');
        const addressOutput = document.getElementById('addressOutput');

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

        let note = ''
        
        const getOrder = (id) => {
            $.ajax({
                url: 'http://localhost:3000/database/repository/orders.php',
                type: 'POST',
                data: {
                  action: "getbyid",
                  id: id
                },
                success: function(response) {
                    let order = JSON.parse(response)
                    $('#name').val(order.fullname);
                    $('#phone').val(order.phone);
                    $('#note').val(JSON.parse(order.note).text);
                    $('#addressInput').val(order.address);
                    showMap(order.address)
                    note = JSON.parse(order.note)
                    let src_img = ''
                    order.payment_method == "OnlineBanking" ? src_img = '../../../img/vnpay.webp' :src_img = '../../../img/COD.png'
                    let html = `
                    <div class="card mb-3 d-flex flex-row align-items-center col-12">
                        <div class="card-body position-relative col-9">
                            <h5 class="fw-bold">Mã đơn: #${order.order_id}</h5>
                            <p class="fs--1">${order.order_date}</p>
                            <div><strong class="me-2">Trạng thái: </strong>
                                ${checkStatus(order.status)}
                            </div>
                        </div>
                    </div>

                    <div class="card mb-3 ">
            <div class="card-body">
              <div class="row d-flex justify-content-between">
                <div class="col-md-4 col-lg-4 mb-4 mb-lg-0">
                  <h5 class="mb-3 fs-0 fw-bold">Địa chỉ giao hàng</h5>
                  <h6 class="mb-2">${order.fullname}</h6>
                  <p class="mb-1 fs--1">${order.address}</p>
                  <p class="mb-0 fs--1"> <strong>Email: </strong><a href="${order.email}">${order.email}</a></p>
                  <p class="mb-0 fs--1"> <strong>SĐT: </strong><a href="${order.phone}">${order.phone}</a></p>
                </div>
                <div class="col-md-4 col-lg-4 mb-4 mb-lg-0 text-center">
                  <h5 class="mb-3 fs-0 fw-bold">Ghi chú</h5>
                  <p class="mb-1 fs--1">${JSON.parse(order.note).text}</p>
                </div>
                <div class="col-md-4 col-lg-4 text-center">
                  <h5 class="mb-3 fs-0 fw-bold">Phương thức thanh toán</h5>
                  <div class="d-flex justify-content-center">
                  <img class="me-3" src="${src_img}" width="40" height="30" alt="">
                    <div class="flex-1">
                      <h6 class="mb-0">${JSON.parse(order.note).bankmaster}</h6>
                      <p class="mb-0 fs--1">**** **** **** ${JSON.parse(order.note).account.slice(-4)}</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
                    </div>
                    `
                    $('.order-infor').append(html)
                },
            })
        }

        $('.updateOrder').on('click', (e) => {
            e.preventDefault();
            var urlParams = new URLSearchParams(window.location.search);
            var id = urlParams.get('id');
            var formData = new FormData();
            note.text = $('#note').val();
            note = JSON.stringify(note)
            formData.append('id', id)
            formData.append('name', $('#name').val()) 
            formData.append('phone', $('#phone').val())
            formData.append('address', $('#addressInput').val())
            formData.append('note', note)
            formData.append('action', 'update1')
            console.log(formData);
            $.ajax({
                url: 'http://localhost:3000/database/repository/orders.php',
                type: 'POST',
                data: formData,
                processData: false, // Không xử lý dữ liệu
                contentType: false,
                success: (response) => {
                    let {
                        status,
                        message
                    } = JSON.parse(response)
                    // console.log(message);
                    if (status === 200) {
                        $('.error').html('');
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
        const getDetail = (id) => {
            $.ajax({
                url: 'http://localhost:3000/database/repository/orders.php',
                type: 'POST',
                data: {
                  action: "getdetailbyid",
                  id: id
                },
                success: function(response) {
                    let orderDetail =JSON.parse(response)
                    let subtotal = 0
                    orderDetail.forEach(item => {
                        subtotal += item.quantity * item.price
                        let html1 = `
                        <tbody>
                    <tr class="border-200">
                      <td class="align-middle">
                        <h6 class="mb-0 text-nowrap fw-bold">${item.productname}</h6>
                        <p class="mb-0">${item.categoryname}</p>
                      </td>
                      <td class="align-middle text-center">${item.quantity}</td>
                      <td class="align-middle text-end">${formatMoney(item.price)}</td>
                      <td class="align-middle text-end">${formatMoney(item.quantity * item.price)}</td>
                    </tr>
                  </tbody>
                        `
                        $('.products').append(html1);
                    });


                    let html2 = `
                        <div class="row g-0 justify-content-end">
                            <div class="col-auto">
                            <table class="table table-sm table-borderless fs--1 text-end">
                                <tbody><tr>
                                <th class="text-900 fw-bold">Tạm tính:</th>
                                <td class="fw-semi-bold">${formatMoney(subtotal)}</td>
                                </tr>
                                <tr>
                                <th class="text-900 fw-bold">Giảm giá:</th>
                                <td class="fw-semi-bold">${formatMoney(-55000)}</td>
                                </tr>
                                <tr>
                                <th class="text-900 fw-bold">Phí ship:</th>
                                <td class="fw-semi-bold">${formatMoney(20000)}</td>
                                </tr>
                                <tr class="border-top">
                                <th class="text-900 fw-bold">Tổng hoá đơn:</th>
                                <td class="fw-semi-bold">${formatMoney(subtotal-55000+20000)}</td>
                                </tr>
                            </tbody></table>
                            </div>
                        </div>
                        `
                    $('.total_bill').append(html2)
                },
            })
        }

        const checkStatus = (status) => {
            switch (status){
                        case 'chờ xử lý': 
                            return `<span class="badge rounded-pill py-2 px-3 fs-6 bg-primary"> ${status} </span>`
                            break
                        case 'đang xử lý': 
                            return `<span class="badge rounded-pill py-2 px-3 fs-6 bg-warning"> ${status} </span>`
                            break
                        case 'đã giao': 
                            return `<span class="badge rounded-pill py-2 px-3 fs-6 bg-success"> ${status} </span>`
                            break
                        case 'đã huỷ': 
                            return `<span class="badge rounded-pill py-2 px-3 fs-6 bg-secondary"> ${status} </span>`
                            break
                    }
        }
    </script>
</body>

</html>