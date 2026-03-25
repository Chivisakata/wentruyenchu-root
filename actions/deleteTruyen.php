<?php
session_start();
if (!isset($_SESSION['Role']) || $_SESSION['Role'] !== 'admin') {
        // không phải admin từ chối truy cập
        header("Location: /403.php"); 
        exit();
        }

include 'connect.php';
$id = $_GET['id'];
// Chuẩn bị câu lệnh SQL
$sql = "DELETE FROM truyen WHERE Id_truyen = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("i", $id);

// Thực thi
if ($stmt->execute()) {
     $_SESSION["success"] = "Xóa truyện thành công!";
} else {
    $_SESSION["error"] = "Lỗi khi xóa truyện!";
}

// Redirect về admin
header("Location: ../pages/admin.php");
exit();