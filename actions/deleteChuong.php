<?php
session_start();
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