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
    die("Sai tài khoản hoặc mật khẩu");
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

    //Chuyển sang trang Admin
    if($user['Role'] == "admin")
        {
            header("Location: ../pages/admin.php");
            exit();
        }

    // Chuyển về trang chủ
    header("Location: ../pages/home.php");  
    exit();

} else {

    echo "Sai tài khoản hoặc mật khẩu";

}