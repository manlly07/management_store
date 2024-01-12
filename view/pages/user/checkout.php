<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Checkout</title>

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
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <?php include './nav.php' ?>
                <!-- End of Topbar -->
                

                <!-- Begin Page Content -->
                <div class="container-fluid">
                
                <div class="row g-3 col-10 m-auto my-4">
            <div class="col-xl-4 order-xl-1">
              <div class="card">
                <div class="card-header bg-body-tertiary d-flex justify-content-between">
                  <h5 class="mb-0" id="summary">Số lượng: 0 (sản phẩm)</h5>
                  <a class="btn btn-falcon-default btn-sm text-600" href="./cart.php">
                  <i class="fas fa-fw fa-edit"></i>
                  </a>
                </div>
                <div class="card-body">
                  <table class="table table-borderless fs--1 mb-0">
                    <tbody>
                    <tr class="border-bottom">
                      <th class="ps-0">Tạm tính</th>
                      <th class="pe-0 text-end subtotal">0</th>
                    </tr>
                    <tr class="border-bottom">
                      <th class="ps-0">Mã giảm giá: <span class="text-success">40SITEWIDE</span></th>
                      <th class="pe-0 text-end discount">-0</th>
                    </tr>
                    <tr class="border-bottom">
                      <th class="ps-0">Phí ship</th>
                      <th class="pe-0 text-end fee">0</th>
                    </tr>
                    <tr>
                      <th class="ps-0 pb-0">Tổng đơn hàng</th>
                      <th class="pe-0 text-end pb-0 total-bill">0</th>
                    </tr>
                  </tbody></table>
                </div>
                <div class="card-footer d-flex justify-content-between bg-body-tertiary">
                  <div class="fw-semi-bold">Tổng thanh toán</div>
                  <div class="fw-bold total-bill">0</div>
                </div>
              </div>
            </div>
            <div class="col-xl-8">
              <div class="card mb-3">
                <div class="card-header bg-body-tertiary">
                  <div class="row d-flex justify-content-between">
                    <div class="col-sm-auto">
                      <h5 class="mb-2 mb-sm-0">Địa chỉ giao hàng</h5>
                    </div>
                    
                  </div>
                </div>
                <div class="card-body">
                  
                  <div class="mb-3 row align-items-center">
                    <div class="col-6"><label class="form-label ls text-uppercase text-600 fw-semi-bold mb-0" for="inputNumber">Nguời Nhận</label><input class="form-control" id="name" type="text" placeholder="Nguyễn Minh Đức"></div>
                    <div class="col-6"><label class="form-label ls text-uppercase text-600 fw-semi-bold mb-0" for="inputNumber">Số điện thoại</label><input class="form-control" id="phone" type="text" placeholder="0123456789"></div>
                  </div>
                  <div class="row d-flex flex-column">
                    <div class="col-12 mb-3"><label class="form-label ls text-uppercase text-600 fw-semi-bold mb-0" for="inputNumber">Địa chỉ nhận hàng</label><input class="form-control" id="address" type="text" placeholder="Ha noi"></div>
                    <div class="col-12"><label class="form-label ls text-uppercase text-600 fw-semi-bold mb-0" for="inputNumber">Ghi chú</label><input class="form-control" id="note" type="text" placeholder=""></div>
                  </div>

                </div>
              </div>
              <div class="card">
                <div class="card-header bg-body-tertiary">
                  <h5 class="mb-0">Phương thức thanh toán</h5>
                </div>
                <div class="card-body">
                  <form>
                    <div class="d-flex justify-content-around">

                      <div class="form-check mb-0 d-flex align-items-center"><input class="form-check-input" type="radio" value="OnlineBanking" id="vnpay" checked name="payment-method"><label class="form-check-label fs-4" for="credit-card">VNPAY <img src="../../../img/vnpay.webp" height="40" alt=""></label></div>
                      <!-- <div class="row gx-0 ps-2 mb-4">
                        <div class="col-sm-8 px-3">
                          <div class="mb-3 row align-items-center">
                            <div class="col-6"><label class="form-label ls text-uppercase text-600 fw-semi-bold mb-0" for="inputNumber">Ngân Hàng</label><input class="form-control" id="bank" type="text" placeholder="Vietcombank, BIDV,.."></div>
                            <div class="col-6"><label class="form-label ls text-uppercase text-600 fw-semi-bold mb-0" for="inputNumber">Số Thẻ</label><input class="form-control" id="account" type="text" placeholder="•••• •••• •••• ••••"></div>
                          </div>
                          <div class="mb-3 row align-items-center">
                            <div class="col-6"><label class="form-label ls text-uppercase text-600 fw-semi-bold mb-0">Chủ Tài Khoản</label><input id="bankmaster" class="form-control" type="text" placeholder="NGUYEN VAN A"></div>
                            <div class="col-6"><label class="form-label ls text-uppercase text-600 fw-semi-bold mb-0">Exp Date</label><input id="expdate" class="form-control" type="text" placeholder="123" maxlength="3" pattern="[0-9]{3}"></div>
                          </div>
                          <div class="row align-items-center">
                            <div class="col-6"><label class="form-label ls text-uppercase text-600 fw-semi-bold mb-0">OTP</label><input id="otp" class="form-control" type="text" placeholder="••••••"></div>
                          </div>
                        </div>
        
                      </div> -->
                      <div class="form-check d-flex align-items-center"><input class="form-check-input" type="radio" value="COD" id="cod" name="payment-method"><label class="form-check-label mb-0 ms-2 fs-4" for="paypal"> COD <img src="../../../img/COD.png" height="35" alt=""></label></div>
                    </div>
                    <div class="border-bottom border-dashed my-5"></div>
                    <div class="row">
                      <div class="col-md-7 col-xl-12 col-xxl-7 px-md-3 mb-xxl-0 position-relative">
                        <div class="d-flex"><img class="me-3" src="../../../img/guard.png" alt="" width="60" height="60">
                          <div class="flex-1">
                            <h5 class="mb-2">Bảo vệ người mua</h5>
                            <div class="form-check mb-0"><input class="form-check-input" id="protection-option-1" type="checkbox" checked="checked"><label class="form-check-label mb-0" for="protection-option-1"> <strong>Hoàn trả đầy đủ </strong>nếu bạn không <br class="d-none d-md-block d-lg-none">nhận được đơn đặt hàng của bạn</label></div>
                            <div class="form-check"><input class="form-check-input" id="protection-option-2" type="checkbox" checked="checked"><label class="form-check-label mb-0" for="protection-option-2"> <strong>Hoàn trả toàn bộ hoặc một phần </strong>nếu sản phẩm không đúng như mô tả chi tiết </label></div><a class="fs--1 ms-3 ps-2" href="#!">
                                <i class="fas fa-fw fa-caret-right"></i>
                                Tìm hiểu thêm
                                </a>
                          </div>
                        </div>
                        <div class="vertical-line d-none d-md-block d-xl-none d-xxl-block"> </div>
                      </div>
                      <div class="col-md-5 col-xl-12 col-xxl-5 ps-lg-4 ps-xl-2 ps-xxl-5 text-center text-md-start text-xl-center text-xxl-start">
                        <div class="border-bottom border-dashed d-block d-md-none d-xl-block d-xxl-none my-4"></div>
                        <div class="fs-2 fw-semi-bold total-bill2 text-primary" >Tổng thanh toán: <span >0</span></div>
                          <button class="btn btn-success fs-6 mt-3 px-5" id="pay" name="redirect" type="button" onclick="Pay()" >Thanh toán</button>
                        <p class="fs--1 mt-3 mb-0">Bấm nút <strong>thanh toán </strong>khi bạn đồng ý với <br><a href="#!"> Điều kiện của cửa hàng</a></br> </p>
                      </div>
                    </div>
                  </form>
                </div>
              </div>
            </div>
                </div>

                <!-- /.container-fluid -->

                </div>
            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
            <footer class="sticky-footer bg-primary">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto text-white">
                        <span>Copyright &copy; Your Website 2023</span>
                    </div>
                </div>
            </footer>
            <!-- End of Footer -->

        
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
        $(document).ready(() => {
          let username = localStorage.getItem('fullName')
          $('#username').html(`${username}`)
          let avtURL =localStorage.getItem('avt')
            avtURL != '' ? $('#customer-avt').attr('src', `../../../uploads/avt/${avtURL}`): $('#avatar').attr('src', "../../../img/undraw_profile.svg")
            showAllCart();
            inforUser()
            showCart()
        })

        const showCart = () => {
            $.ajax({
                url: 'http://localhost:3000/database/repository/carts.php',
                type: 'POST',
                data: {
                    action: "view",
                    id: localStorage.getItem("userId")
                },
                success: (response) => {
                    carts = JSON.parse(response)
                    $('.cart-number').html(carts.length)
                }
            })
        }

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
        let formData = []
        let total
        const showAllCart = () => {
            $.ajax({
              url: 'http://localhost:3000/database/repository/carts.php',
                type: 'POST',
                data: {
                    action: "view",
                    id: localStorage.getItem("userId")
                },
                success: (response) => {
                    // console.log(JSON.parse(response));
                    let carts = JSON.parse(response)
                    let subtotal = 0
                    let number_item = 0
                    carts.forEach(cart => {
                        number_item += 1
                        subtotal += cart.quantity * cart.price
                        let rowData = {
                          itemId: cart.id,
                          itemDetails: cart.product_id,
                          itemCost: cart.price,
                          itemQty: cart.quantity
                        };

                // Thêm đối tượng dữ liệu vào mảng formData
                    formData.push(rowData);
                    });
                    $('.discount').html(formatMoney(-30000))
                    $('.fee').html(formatMoney(20000))
                    let total_bill = subtotal-30000+20000
                    $('.subtotal').html(formatMoney(subtotal))
                    $('#summary').html('Số lượng: ' + number_item + ' (sản phẩm)')
                    $('.total-bill').html(formatMoney(total_bill))
                    total =total_bill
                    $('.total-bill2').html('Tổng thanh toán: '+formatMoney(total_bill))
                }
            })
        }
        const deleteCart = () => {
          if (formData.length === 0) return;
          formData.forEach(cart => {
            console.log(cart.itemId);
            $.ajax({
            url: 'http://localhost:3000/database/repository/carts.php',
                type: 'POST',
                data: {
                  action: "delete",
                  id: cart.itemId
                },
                success: function(response) {
                    // Xử lý phản hồi thành công từ máy chủ
                    console.log(response);
                },
          })
          })
        }

        const formatDate = (date) => {
            let year = date.getFullYear();
            let month = (date.getMonth() + 1).toString().padStart(2, '0');
            let day = date.getDate().toString().padStart(2, '0');
            return `${year}-${month}-${day}`;
        }


        const inforUser = () => {
          $('#name').val(localStorage.getItem('fullName'))
          $('#phone').val(localStorage.getItem('phone'))
          $('#address').val(localStorage.getItem('address'))      
        }


        const Pay = () => {
          let customer_id = localStorage.getItem('userId')
          let currentDate = new Date();         
          let order_date = formatDate(currentDate)
          let fullname = $('#name').val()
          let email = localStorage.getItem('email')
          let phone = $('#phone').val()
          let address = $('#address').val()
          // let note = $('#note').val()
          console.log(total);
          let pay_infor = {
            bank: $('#bank').val(),
            account: $('#account').val(),
            bankmaster: $('#bankmaster').val(),
            expdate: $('#expdate').val(),
            otp: $('#otp').val()
          }
          let payment_method = $('input[name="payment-method"]:checked').val() 

          let note = {
            text: $('#note').val(),
            account: $('input[name="payment-method"]:checked').val() == 'OnlineBanking' ? '9704198526191432198' : phone,
            bankmaster: $('input[name="payment-method"]:checked').val() == 'OnlineBanking' ? 'NGUYEN VAN A' : fullname
          }
          note = JSON.stringify(note)
          let payload = {
            customer_id:customer_id, order_date:order_date, fullname:fullname, email:email, phone:phone,
            address:address, note:note, total:total, payment_method: payment_method,
            data: formData,
            action: 'create'
          }

          Swal.fire({
            title: "Bạn chắc chắn muốn đặt hàng?",
            text: "Đơn hàng sẽ được thêm vào",
            icon: "warning",
            showCancelButton: true,
            confirmButtonColor: "success",
            cancelButtonColor: "danger",
            confirmButtonText: "Xác nhận và thanh toán"
          }).then((result) => {
            if (result.isConfirmed) {
                    if(payment_method == 'OnlineBanking'){
                      let url
                      $.ajax({
                        url:'http://localhost:3000/database/repository/vnpay.php',
                        method: 'POST',
                        data: {
                          action: 'vnpay',
                          total : total
                        },
                        success:  function(response){
                          let result = JSON.parse(response);
                          url = result.data
                          // setTimeout(() => {
                          //     window.location.href = url
                          //   },1000)
                        },
                        error: function(error){
                          console.log(error);
                        }     
                      })
                      $.ajax({
                        url: 'http://localhost:3000/database/repository/orders.php',
                        type: 'POST',
                        data: payload,
                        success: function(response) {
                          // Xử lý phản hồi thành công từ máy chủ
                          let {status, message, order_id} = JSON.parse(response);
                          if (status === 200) {
                            deleteCart()
                            setTimeout(() => {
                              window.location.href = url
                            },1000)
                          }else {
                          }
                          },
                      })
                  }else if(payment_method == 'COD'){
                      $.ajax({
                        url: 'http://localhost:3000/database/repository/orders.php',
                        type: 'POST',
                        data: payload,
                        success: function(response) {
                          // console.log(JSON.parse(response));
                          console.log(payload);
                          // Xử lý phản hồi thành công từ máy chủ
                          let {status, message, order_id} = JSON.parse(response);
                          if (status === 200) {
                            Swal.fire({
                              title: "Success!",
                              text: "Đặt hàng thành công",
                              icon: "success"
                            });
                            deleteCart()
                            setTimeout(() => {
                              window.location.href = `http://localhost:3000/view/pages/user/orderDetail.php?id=${order_id}`
                            },2000)
                          }else {
                          }
                          },
                      })

                    }
            }
          });
        }

        const Pay1 = () => {
          
        }

    </script>
</body>

</html>