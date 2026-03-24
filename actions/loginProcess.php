<?php
require_once "connect.php";
session_start(); //gọi session để lưu biến session sau này
$username = trim($_POST["username"] ?? "");
$password = trim($_POST["password"] ?? "");

/*check valid lại lần nữa*/


// Chuẩn bị câu lệnh SQL
$sql = "SELECT * FROM users WHERE User_name = ?";
$stmt = $conn->prepare($sql);

// Gắn tham số vào dấu ?
$stmt->bind_param("s", $username);

// Thực thi truy vấn
$stmt->execute();

// Lấy kết quả
$result = $stmt->get_result();
$user = $result->fetch_assoc();
if (!$user) {
    $_SESSION["error"] = "Tài khoản không tồn tại!";
    header("Location: ../pages/login.php");
    exit();
}
// Kiểm tra user tồn tại và mật khẩu đúng
if ($user && password_verify($password, $user['Pass_word'])) {

    // Tạo session cho user
    $_SESSION['User_id'] = $user['Id_user'];
    $_SESSION['User_name'] = $user['User_name'];
    $_SESSION['Avatar'] = $user['Avatar'];
    $_SESSION['Role'] = $user['Role'];
    // Tạo session đăng nhập thành công
    $_SESSION["success"] = "Đăng nhập thành công!";

    //Điều hướng
    if($user['Role'] == "admin")//Trang admin
        {
            header("Location: ../pages/admin.php");
            exit();
        }

    header("Location: ../pages/home.php");//Trang user
    exit();
} 
else {
    $_SESSION["error"] = "Tài khoản hoặc mật khẩu không đúng!";
    header("Location: ../pages/login.php");
    exit();
}

    

