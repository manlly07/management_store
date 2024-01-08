function checkAdmin() {
    // Lấy đường dẫn hiện tại
    const url = window.location.href;
  
    // Kiểm tra xem đường dẫn có chứa chuỗi "admin" không
    const isAdminUrl = url.indexOf("admin") !== -1;

    // Kiểm tra xem trong local storage có trường isAdmin không
    const isAdmin = localStorage.getItem("isAdmin");
  
    // Nếu đường dẫn là của admin và không có trường isAdmin trong local storage
    if (isAdminUrl && isAdmin == "0") {
      // Hiển thị thông báo
      alert("Bạn không phải admin, hãy đăng nhập lại");
  
      // Điều hướng ra trang login
      window.location.href = "http://localhost:3000/view/pages/login-register/login.php";
    }
    if (!isAdminUrl && isAdmin == "1") {
        // Hiển thị thông báo
        alert("Bạn cần đăng nhập với tài khoản khách hàng");
    
        // Điều hướng ra trang login
        window.location.href = "http://localhost:3000/view/pages/login-register/login.php";
      }
  }
  
  // Chạy hàm checkAdmin() khi trang tải xong
  window.addEventListener("load", checkAdmin);
  