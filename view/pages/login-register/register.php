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

    <title>Register</title>
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
              <div class="col-md-11">
                <h3>Register to <strong>Tin Võ</strong></h3>
                <p class="mb-4">Chào mừng đến của hàng Tin võ - Thế giới đồ uống</p>
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
                      
                        <div class="d-flex mb-5 align-items-center">
                          <label class="control control--checkbox mb-0"><span class="caption">Ghi nhớ</span>
                            <input type="checkbox" checked="checked"/>
                            <div class="control__indicator"></div>
                          </label>
                          <span class="ml-auto"><a href="./login.php" class="forgot-pass">Bạn đã có tài khoản?</a></span> 
                        </div>

                            <div class="cerror text-danger text-center mb-2">

                            </div>
                        

                        <input type="submit" value="Register" class="btn btn-block btn-primary">
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
            var formData = $('#createUser').serialize();
            console.log(formData);
            $.ajax({
                url: 'http://localhost:3000/database/repository/users.php',
                type: 'POST',
                data: `${formData}&action=create`,
                success: (response) => {
                    let {
                        status,
                        message,
                        data
                    } = JSON.parse(response)
                    console.log(data);
                    if (status === 200) {
                      $('.cerror').empty()
                      localStorage.setItem("userId", data.id)
                        localStorage.setItem("userName", data.user_name)
                        localStorage.setItem("email", data.email)
                        localStorage.setItem("phone", data.phone)
                        localStorage.setItem("fullName", data.first_name + ' ' + data.last_name)
                        localStorage.setItem("address", data.address)
                        localStorage.setItem("isAdmin", data.is_admin)
                      Swal.fire({
                                title: "Done",
                                text: "Đăng ký thành công",
                                icon: "success"
                            });
                            setTimeout(() => {
                                window.location.href = 'http://localhost:3000/view/pages/user/products.php?page=1'
                            },1000)
                    } else if (status === 400) {
                        $('.cerror').empty().html(message);
                    }
                }
            })
        })

    </script>
  </body>
</html>