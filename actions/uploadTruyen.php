<?php
session_start();
if (!isset($_SESSION['Role']) || $_SESSION['Role'] !== 'admin') {
        // không phải admin từ chối truy cập
        header("Location: /403.php"); 
        exit();
        }

include 'connect.php';
// Lấy dữ liệu từ form
$ten = $_POST['Ten'];
$tacgia = $_POST['TacGia'];
$theloai = $_POST['TheLoai'];
$tongsochuong = $_POST['TongSoChuong'];
$trangthai = $_POST['TrangThai'];
$gioithieu = $_POST['GioiThieu'];

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

        // Lưu DB
        $sql = "INSERT INTO truyen (Ten, TacGia, TheLoai, TongSoChuong, TrangThai, GioiThieu, AnhBia)
                VALUES (?, ?, ?, ?, ?, ?, ?)";

        $stmt = $conn->prepare($sql);
        $stmt->bind_param(
            "sssisss",
            $ten,
            $tacgia,
            $theloai,
            $tongsochuong,
            $trangthai,
            $gioithieu,
            $fileName
        );

        if ($stmt->execute()) {
            $_SESSION["success"] = "Thêm truyện thành công!";
        } else {
            $_SESSION["error"] = "Thêm truyện thất bại!";
        }
        header("Location: ../pages/admin.php");
        exit();
    } else {
        $_SESSION["error"] = "Xảy ra lỗi khi upload file!";
        header("Location: ../pages/admin.php");
        exit();
    }
} else {
    die();
}
