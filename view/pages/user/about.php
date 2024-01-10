<!DOCTYPE html>
<html lang="vi">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Chào mừng đến của hàng Tin võ - Thế giới đồ uống</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>

<header>
    <?php include './nav.php' ?>
</header>

<main>
    <div style="min-height: 86.5vh;">

        <section class="jumbotron">
          <div class="container">
            <h1 class="display-4">Chào mừng đến với của hàng Tin võ</h1>
            <p class="lead">Thế giới đồ uống đa dạng, phong phú</p>
          </div>
        </section>
      
        <section class="py-5">
          <div class="container">
            <h2 class="mb-4">Thông tin của hàng</h2>
            <p>Của hàng Tin võ là một cửa hàng chuyên kinh doanh đồ uống. Chúng tôi cung cấp đa dạng các loại đồ uống, từ đồ uống có cồn đến đồ uống không cồn, từ đồ uống truyền thống đến đồ uống hiện đại.</p>
            <p>Mục tiêu của chúng tôi là mang đến cho khách hàng những trải nghiệm tuyệt vời với đồ uống. Chúng tôi cam kết cung cấp những sản phẩm chất lượng, giá cả hợp lý và dịch vụ chu đáo.</p>
          </div>
        </section>
      
        <section class="py-5">
          <div class="container">
            <h2 class="mb-4">Nhiệm vụ, sứ mệnh</h2>
            <p>Nhiệm vụ của chúng tôi là cung cấp những sản phẩm đồ uống chất lượng cao, an toàn vệ sinh, góp phần nâng cao chất lượng cuộc sống của người dân.</p>
            <p>Sứ mệnh của chúng tôi là trở thành một thương hiệu đồ uống hàng đầu tại Việt Nam, được khách hàng tin tưởng và yêu mến.</p>
          </div>
        </section>
    </div>

  <footer class="sticky-footer bg-primary ">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto text-white">
                        <span>Copyright &copy; Your Website 2023</span>
                    </div>
                </div>
            </footer>

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
</body>


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
            showCart();
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

    </script>
</html>