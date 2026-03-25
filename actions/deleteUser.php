<?php
session_start();
if (!isset($_SESSION['Role']) || $_SESSION['Role'] !== 'admin') {
        // không phải admin từ chối truy cập
        header("Location: /403.php"); 
        exit();
        }

include 'connect.php';
$idUser = (int)$_GET['Id_user'];
// Chuẩn bị câu lệnh SQL
$sql = "DELETE FROM users WHERE Id_user = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("i", $idUser);

// Thực thi
if ($stmt->execute()) {
     $_SESSION["success"] = "Xóa user thành công!";
} else {
    $_SESSION["error"] = "Lỗi khi xóa user!";
}

// Redirect về admin
header("Location: ../pages/admin.php");
exit();