<?php
session_start();
if (!isset($_SESSION['Role']) || $_SESSION['Role'] !== 'admin') {
        // không phải admin từ chối truy cập
        header("Location: /403.php"); 
        exit();
        }

include 'config.php';
// Lấy dữ liệu từ form
$id = $_POST['Id_truyen'];
$ten = $_POST['Ten'];
$tacgia = $_POST['TacGia'];
$theloai = $_POST['TheLoai'];
$tongsochuong = $_POST['TongSoChuong'];
$trangthai = $_POST['TrangThai'];
$gioithieu = $_POST['GioiThieu'];
$AnhBiaGoc = $_POST['AnhBiaGoc'];

// Xử lý upload ảnh bìa
if (isset($_FILES['AnhBia']) && $_FILES['AnhBia']['error'] === UPLOAD_ERR_OK) {

    $fileTmpPath = $_FILES['AnhBia']['tmp_name'];
    $fileName = $_FILES['AnhBia']['name'];
    $fileType = $_FILES['AnhBia']['type'];

    // Lấy extension
    $fileExt = strtolower(pathinfo($fileName, PATHINFO_EXTENSION));

    // Chỉ cho phép JPG
    if ($fileExt !== "jpg" && $fileType !== "image/jpeg") {
        $_SESSION["error"] = "Chỉ cho phép file .jpg!";
        header("Location: ../pages/admin.php");
        exit();
    }

    $uploadDir = __DIR__ . "/../images/";
    $destPath = $uploadDir . $fileName;

    // Upload file
    if (move_uploaded_file($fileTmpPath, $destPath)) {
        $AnhBiaGoc = $fileName;    
    } else {
        $_SESSION["error"] = "Xảy ra lỗi khi upload file!";
        header("Location: ../pages/admin.php");
        exit();
    }
} 
// Lưu DB
$sql = "UPDATE truyen 
        SET Ten = ?, TacGia = ?, TheLoai = ?, TongSoChuong = ?, TrangThai = ?, GioiThieu = ?, AnhBia = ?
        WHERE Id_truyen = ?";

$stmt = $conn->prepare($sql);
$stmt->bind_param(
    "sssisssi",
    $ten,
    $tacgia,
    $theloai,
    $tongsochuong,
    $trangthai,
    $gioithieu,
    $AnhBiaGoc,
    $id
);

if ($stmt->execute()) {
    $_SESSION["success"] = "Thêm thành công $id";
} else {
    $_SESSION["error"] = "Cập nhật truyện thất bại!";
}
header("Location: ../pages/admin.php");
exit();

