<?php
session_start();
include 'connect.php';

// Lấy dữ liệu từ form
$idChuong = (int)$_POST['Id_chuong'];
$idTruyen = (int)$_POST['Id_truyen'];
$tenChuong = $_POST['TenChuong'];
$noiDung = $_POST['NoiDung'];
$SoChuong = (int)$_POST['SoChuong'];

// Lưu DB
$sql = "UPDATE chuong 
        SET Id_truyen = ?, TenChuong = ?, NoiDung = ?, SoChuong = ?
        WHERE Id_chuong = ?";

$stmt = $conn->prepare($sql);
$stmt->bind_param(
    "isssi",
    $idTruyen,
    $tenChuong,
    $noiDung,
    $SoChuong,
    $idChuong
);

if ($stmt->execute()) {
    $_SESSION["success"] = "Cập nhật chương thành công $id";
} else {
    $_SESSION["error"] = "Cập nhật chương thất bại!";
}
header("Location: ../pages/admin.php");
exit();

