<?php
session_start();
if (!isset($_SESSION['Role']) || $_SESSION['Role'] !== 'admin') {
        // không phải admin từ chối truy cập
        header("Location: /403.php"); 
        exit();
        }

include 'config.php';
// Lấy dữ liệu từ form
$idTruyen = (int)$_POST['Id_truyen'];
$tenChuong = $_POST['TenChuong'];
$noiDung = $_POST['NoiDung'];
$SoChuong = (int)$_POST['SoChuong'];

// Lưu DB
$sql = "INSERT INTO chuong (Id_truyen, TenChuong, NoiDung, SoChuong) VALUES (?, ?, ?, ?)";

$stmt = $conn->prepare($sql);
$stmt->bind_param(
    "issi",
    $idTruyen,
    $tenChuong,
    $noiDung,
    $SoChuong
);

if ($stmt->execute()) {
    $_SESSION["success"] = "Thêm chương thành công!";
} else {
    $_SESSION["error"] = "Thêm chương thất bại!";
}
header("Location: ../pages/admin.php");
exit();
    
