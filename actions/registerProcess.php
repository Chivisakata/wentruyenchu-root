<?php
require_once "connect.php";
session_start(); //gọi session để lưu biến session sau này

$username = trim($_POST["username"] ?? "");
$password = trim($_POST["password"] ?? "");
$confirmPassword = trim($_POST["confirmPassword"] ?? "");

/*check valid lại lần nữa*/
$usernameRegex = "/^[a-zA-Z0-9_.]+$/";
$passwordRegex = "/^[a-zA-Z0-9!@#$%^&*()_+\-=\[\]{};':\"\\\\|,.<>\/?`~]+$/";

/* kiểm tra username */
if (!preg_match($usernameRegex, $username)) {
    die("Username chỉ được chứa chữ, số, dấu _ và dấu .");
}

/* kiểm tra password hợp lệ */
if (!preg_match($passwordRegex, $password)) {
    die("Password chứa ký tự không hợp lệ");
}

/* kiểm tra độ dài password */
if (strlen($password) < 6 || strlen($password) > 20) {
    die("Password phải từ 6 đến 20 ký tự");
}
/*kiểm tra độ dài username */
if (strlen($username) < 6 || strlen($username) > 20) {
    die("Username phải từ 6 đến 20 ký tự");
}
/* kiểm tra confirm password */
if ($password !== $confirmPassword) {
    die("Mật khẩu xác nhận không khớp");
}

/* kiểm tra username tồn tại */
$sql = "SELECT Id_user FROM Users WHERE User_name = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("s", $username);
$stmt->execute();

$result = $stmt->get_result();

if ($result->num_rows > 0) {
    die("Username đã tồn tại");
}
/* hash password */
$hashedPassword = password_hash($password, PASSWORD_DEFAULT);
/*set role

/* insert database */
$sql = "INSERT INTO Users (User_name, Pass_word) VALUES (?, ?)";

$stmt = $conn->prepare($sql);
$stmt->bind_param("ss", $username, $hashedPassword);

if ($stmt->execute()) {
    $_SESSION["success"] = "Đăng ký thành công! Vui lòng đăng nhập.";
    header("Location: ../pages/login.php");
    exit();
} else {
    echo "Lỗi: " . $stmt->error;
}

?>