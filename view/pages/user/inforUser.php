<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>User Infor</title>

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
                <div class="container-fluid m-auto my-5 col-12" style="min-height: 77vh;">
                <div class="container">
                        <div class="row">
                            <div class="col-4">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="d-flex flex-column align-items-center text-center">
                                            <img src="#" alt="Admin" class="rounded-circle" id="avatar" width="150" height="150">
                                            <div class="mt-3">
                                                <h4 class="fullname"></h4>
                                                <p class="text-muted font-size-sm address"></p>
                                            </div>
                                            <input onchange="loadImage(event)" class="form-control image col-8" name="image" type="file" id="formFile">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-8">
                                
                                <div class="card">
                                    <div class="card-body">
                                        <form id="editUser">
                                            <div class="row mb-3">
                                                <div class="col-sm-3">
                                                    <h6 class="mb-0">Tên</h6>
                                                </div>
                                                <div class="col-sm-9 text-secondary">
                                                    <input type="text" name="fname" class="form-control fname"  require>
                                                </div>
                                            </div>
                                            <div class="row mb-3">
                                                <div class="col-sm-3">
                                                    <h6 class="mb-0">Họ</h6>
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
                                                    <h6 class="mb-0">SĐT</h6>
                                                </div>
                                                <div class="col-sm-9 text-secondary">
                                                    <input type="text" class="form-control phone" name="phone" require>
                                                </div>
                                            </div>
                                            <div class="row mb-3">
                                                <div class="col-sm-3">
                                                    <h6 class="mb-0">Địa chỉ</h6>
                                                </div>
                                                <div class="col-sm-9 text-secondary">
                                                    <input type="text" class="form-control address" name="address" require>
                                                    <input hidden type="text" class="form-control id" name="id" require>
                                                    <input type="text" name="" hidden id="old-avt">
                                                </div>
                                            </div>
                                            <div class="row mb-3">
                                                <p class="text-danger eerror"></p>
                                            </div>
                                            <div class="d-flex justify-content-end">
                                                <div class="text-secondary">
                                                    <input type="button" onclick="showModal()" class="btn btn-secondary px-4" value="Đổi mật khẩu">
                                                    <input type="submit" class="btn btn-primary px-4" value="Lưu thay đổi">
                                                </div>
                                            </div>
                                        </form>
                                    </div>
					            </div>
                            </div>
                        </div>
                        
                    </div>
            
                </div>
                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
            
            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->
        <footer class="sticky-footer bg-primary">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto text-white">
                        <span>Copyright &copy; Your Website 2023</span>
                    </div>
                </div>
            </footer>
    </div>
    <!-- End of Page Wrapper -->

    <div class="modal fade" id="password" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle">Change Password</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form id="updatePassword">
                        <div class="form-row">
                            <div class="form-group col-md-12">
                                <label for="password">Mật khẩu cũ</label>
                                <input type="password" name="oldPassword" class="form-control" id="oldPassword" placeholder="Password">
                                <input hidden type="text" class="form-control userId" name="id" require>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-12">
                                <label for="password">Mật khẩu mới</label>
                                <input type="password" name="newPassword" class="form-control" id="newPassword" placeholder="Password">
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-12">
                                <label for="password">Nhập lại mật khẩu mới</label>
                                <input type="password" name="cfNewPassword" class="form-control" id="cfNewPassword" placeholder="Password">
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="error text-danger fs-6">

                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Đóng</button>
                            <button type="submit" class="btn btn-primary">Lưu</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

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
    <script src="../../../js/checkURL.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script type="text/javascript">
        $(document).ready(() => {
            let username = localStorage.getItem('fullName')
            $('#username').html(`${username}`)
            let userId =localStorage.getItem('userId')
            let avtURL =localStorage.getItem('avt')
            avtURL != '' ? $('#customer-avt').attr('src', `../../../uploads/avt/${avtURL}`): $('#avatar').attr('src', "../../../img/undraw_profile.svg")
            FindUserById(userId)
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

        const FindUserById = (id) => {
            $.ajax({
                url: 'http://localhost:3000/database/repository/users.php',
                type: 'POST',
                data: `action=getbyid&id=${id}`,
                success: (response) => {
                    let data = JSON.parse(response)[0]
                    data['avt'] != '' ? $('#avatar').attr('src', `../../../uploads/avt/${data['avt']}`): $('#avatar').attr('src', "https://bootdey.com/img/Content/avatar/avatar7.png")
                    $('#exampleModal').modal('show');
                    $('#old-avt').val(data['avt'])
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

        const loadImage = (evente) => {
            console.log('hehe');
            $('#avatar').attr('src', URL.createObjectURL(event.target.files[0]));
        }

        $('#editUser').on('submit', (e) => {
            e.preventDefault();
            let formData = new FormData();
            formData.append('id', localStorage.getItem('userId'))
            formData.append('fname', $('.fname').val())
            formData.append('lname', $('.lname').val())
            formData.append('email', $('.email').val())
            formData.append('phone', $('.phone').val())
            formData.append('address', $('.address').val())
            formData.append('action', "update")
            formData.append('oldAvt', $('#old-avt').val())
            var img = $('.image')[0]
            if (img.files[0]) {
                formData.append('avt', img.files[0])
            }
            $.ajax({
                url: 'http://localhost:3000/database/repository/users.php',
                type: 'POST',
                data: formData,
                processData: false,
                contentType: false,
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
                        $('.fullname').html(fullname)
                        $('.address').html(address)
                        Swal.fire({
                                title: "Done",
                                text: "Cập nhật thông tin thành công!",
                                icon: "success"
                            });
                    } else if (status === 400) {
                        $('.eerror').html(message);
                    }
                }
            })
        })

        const showModal = () => {
            $('#password').modal('show')
            let id =localStorage.getItem('userId')
            $('.userId').val(id);
            $('#updatePassword').on('submit', (e) => {
            e.preventDefault();
            var formData = $('#updatePassword').serialize();
            console.log(formData);
            $.ajax({
                url: 'http://localhost:3000/database/repository/users.php',
                type: 'POST',
                data: `${formData}&action=updatePassword`,
                success: (response) => {
                    let {
                        status,
                        message
                    } = JSON.parse(response)
                    console.log(message);
                    if (status === 200) {
                        $('.error').html('');
                        Swal.fire({
                                title: "Done",
                                text: "Cập nhật mật khẩu thành công!",
                                icon: "success"
                            });
                            setTimeout(() => {
                                window.location.reload()
                            },1000)
                    } else if (status === 400) {
                        $('.error').html(message);
                    }
                }
            })
        })
        }

        
    </script>
</body>

</html>