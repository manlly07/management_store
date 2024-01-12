<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400&display=swap" rel="stylesheet">

   <!-- Custom fonts for this template -->
   <link href="../../../vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="../../../css/sb-admin-2.min.css" rel="stylesheet">
    <link href="../../../css/sb-admin-2.css" rel="stylesheet">

    <!-- Custom styles for this page -->
    <link href="../../../vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">

    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.4.2/mdb.min.css" rel="stylesheet" />

    <title>Login</title>
  </head>
  <body>
  
  <div class="col-12 bg-gradient-primary d-flex align-items-center" style="min-height: 100vh;">
      <div class="d-lg-flex col-8 half m-auto align-items-center justify-content-around  bg-white rounded-5 shadow-lg">
        <div class="bg order-1 order-md-2 rounded-3 p-2">
            <img src="../../../img/login.jpg" width="600" height="700" class="rounded-3" alt="">
        </div>
        <div class="contents order-2 order-md-1 col-6">
    
          <div class="container">
            <div class="row align-items-center justify-content-center">
              <div class="col-md-9">
                <h3>Login to <strong>Tin Võ</strong></h3>
                <p class="mb-4">Chào mừng đến của hàng Tin võ - Thế giới đồ uống</p>
                <form id="createUser">
                      <div class="form-group first">
                        <label for="email">Email</label>
                        <input type="text" class="form-control" placeholder="your-email@gmail.com" id="email">
                      </div>
                      <div class="form-group last mb-3">
                        <label for="password">Password</label>
                        <input type="password" class="form-control" placeholder="Your Password" id="password">
                      </div>
                      
                      <div class="d-flex mb-5 align-items-center">
                        <label class="control control--checkbox mb-0"><span class="caption">Ghi nhớ</span>
                          <input type="checkbox" checked="checked"/>
                          <div class="control__indicator"></div>
                        </label>
                        <span class="ml-auto"><a href="./register.php" class="forgot-pass">Bạn chưa có tài khoản?</a></span> 
                      </div>
                      <div class="col-12 text-center error text-danger">

                      </div>
                      <input type="submit" value="Log In" class="btn btn-block btn-primary">
    
                </form>
              </div>
            </div>
          </div>
        </div>
    
        
      </div>

  </div>



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
    <script type="text/javascript">
      $('#createUser').on('submit', (e) => {
            e.preventDefault();
            let email = $('#email').val()
            let password = $('#password').val()
            
            $.ajax({
                url: 'http://localhost:3000/database/repository/users.php',
                type: 'POST',
                data: {
                  action:'login',
                  email:email,
                  password:password
                },
                success: (response) => {
                    let {
                        status,
                        message,
                        data
                    } = JSON.parse(response)
                    if (status === 200) { 
                        $('.cerror').empty().html('')
                        localStorage.setItem("userId", data[0].id)
                        localStorage.setItem("userName", data[0].user_name)
                        localStorage.setItem("email", data[0].email)
                        localStorage.setItem("phone", data[0].phone)
                        localStorage.setItem("fullName", data[0].first_name + ' ' + data[0].last_name)
                        localStorage.setItem("address", data[0].address)
                        localStorage.setItem("isAdmin", data[0].is_admin)
                        localStorage.setItem("avt", data[0].avt)
                        if(data[0].is_admin == 1){
                          Swal.fire({
                                title: "Done",
                                text: "Đăng nhập thành công",
                                icon: "success"
                            });
                            setTimeout(() => {
                                window.location.href = 'http://localhost:3000/view/pages/admin/dashboard.php'
                            },1000)
                        }else{
                          Swal.fire({
                                title: "Done",
                                text: "Đăng nhập thành công",
                                icon: "success"
                            });
                            setTimeout(() => {
                                window.location.href = 'http://localhost:3000/view/pages/user/products.php?page=1'
                            },1000)
                        }
                    } else if (status === 400) {
                        let html = `
                          <p class="fs-6">${message}</p>
                        `
                        $('.error').empty().append(html);
                    }
                }
            })
        })
    </script>
  </body>
</html>