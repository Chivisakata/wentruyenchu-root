<?php
session_start();
if (!isset($_SESSION['Role']) || $_SESSION['Role'] !== 'admin') {
        // không phải admin từ chối truy cập
        header("Location: /403.php"); 
        exit();
        }
include 'connect.php';

$idChuong = (int)$_GET['Id_chuong'];
// Chuẩn bị câu lệnh SQL
$sql = "DELETE FROM chuong WHERE Id_chuong = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("i", $idChuong);

// Thực thi
if ($stmt->execute()) {
     $_SESSION["success"] = "Xóa chương thành công!";
} else {
    $_SESSION["error"] = "Lỗi khi xóa chương!";
}

// Redirect về admin
header("Location: ../pages/admin.php");
exit();